<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function routeNotificationForNexmo($notification)
    {
        return $this->phone;
    }

    public function roles(){
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function assignRole($role){
        /*$this->roles()->save($role);*/

        //if assignRole() gets not integer value, f.e. $user->assignRole('manager')
        if(is_string($role)){
            $role = Role::whereName($role)->firstOrFail();
        }

        $this->roles()->sync($role,false);
    }


    //$user->roles[0]->abilities
    // it's the same
    //$user->roles->map->abilities

    public function abilities(){
        //flatten - returns 1 collection
        //pluck('name') - returns collection of marked fields
        return $this->roles->map->abilities->flatten()->pluck('name')->unique();
    }

}

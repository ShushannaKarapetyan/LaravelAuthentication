<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $fillable = ['name','label'];
    //or
    // protected $guarded = [];

    public function abilities(){
        return $this->belongsToMany(Ability::class)->withTimestamps();
    }

    public function allowTo($ability){
        /*$this->abilities()->save($ability);*/
        if(is_string($ability)){
            $ability = Ability::whereName($ability)->firstOrFail();
        }
        $this->abilities()->sync($ability,false);
    }


}

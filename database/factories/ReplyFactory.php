<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Conversation;
use App\Reply;
use Faker\Generator as Faker;
use App\User;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'user_id'=>factory(User::class),
        'conversation_id'=>factory(Conversation::class),
        'body'=>$faker->paragraph
    ];
});

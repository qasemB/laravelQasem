<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use App\User;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'user_id'=>function(){
        return factory(User::class)->create()->id;
        },
        'title'=>$faker->title
        //
    ];
});

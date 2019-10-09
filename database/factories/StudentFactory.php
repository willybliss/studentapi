<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\student;
use Faker\Generator as Faker;

$factory->define(student::class, function (Faker $faker) {

    $gender = $faker->randomElement(['male', 'female']);

    return [
        //
        'Name' =>$faker->name($gender),

        'Address'=>$faker->address,

        'gender'=>$gender,
        
       'year'=>$faker->year
    ];
});
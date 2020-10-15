<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\comments;
use Faker\Generator as Faker;

$factory->define(comments::class, function (Faker $faker) {
    return [
        "id" => App\products::All()->random()->product,
        //"com_body"=>$faker=>text;
    ];
});
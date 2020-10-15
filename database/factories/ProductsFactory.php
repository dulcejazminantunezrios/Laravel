<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\products;
use Faker\Generator as Faker;

$factory->define(products::class, function (Faker $faker) {
    return [
        //"description"=>$faker=>text,//
        //"name_pd"=>$faker=>text,
        //"price" =>$faker=> number_format;
    ];
});

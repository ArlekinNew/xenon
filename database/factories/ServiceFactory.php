<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'name' => 'www',
        'slug' => 'something',
        'description' => 'ddd',
        'img' => 'https://i.pinimg.com/originals/c1/39/ac/c139ac00b8db264a29f451ae0c9addf6.jpg',
    ];
});

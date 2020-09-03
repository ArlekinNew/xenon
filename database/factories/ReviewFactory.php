<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
	$users = \App\User::all()->pluck('id')->toArray();
    return [
    	'review' => 'some_review',
        'user_id' => $faker->shuffle($users)[0],
    ];
});

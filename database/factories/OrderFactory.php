<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
	// $users = \App\User::all()->pluck('name')->toArray();
    return [
        'user_name' => 'some_name',
    ];
});

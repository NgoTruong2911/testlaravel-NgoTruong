<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contact;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    $user = App\Models\User::pluck('id')->toArray();
    return [
        'user_id' => $faker->randomElement($user),
        'content' => $faker->text(200)
    ];
});

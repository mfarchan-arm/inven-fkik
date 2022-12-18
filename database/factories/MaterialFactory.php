<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Material;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Material::class, function (Faker $faker) {
    $carbon = new Carbon();
    return [
        'school_operational_assistance_id' => mt_rand(1, 2),
        'commodity_location_id' => mt_rand(1, 10),
        'item_code' => 'BHN-' . mt_rand(1000, 9999),
        'name' => $faker->realText(30),
        'brand' => $faker->realText(30),
        'condition' => mt_rand(1, 3),
        'quantity' => mt_rand(500, 1000),
        'unit' => $faker->realText(30),
        'vendor' => $faker->realText(30),
        'note' => $faker->realText(50)
    ];
});

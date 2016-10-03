<?php

$factory->define(HerramientasCela\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(HerramientasCela\Machine::class, function (Faker\Generator $faker) {
    $number_photos = rand(1, 3);
    $type = rand(1, 2);
    $machine_type = rand(1, 10);
    $array_photos = array();
    $array_characteristics = array();
    $array_specifications = array();
    $youtube = 'https://www.youtube.com/watch?v=FswQq8f30yA';
    $user_guide = 'user_guide.pdf';
    for ($i=0; $i < $number_photos; $i++) { 
        $image = $faker->imageUrl($width = 640, $height = 480);
        $characteristic = $faker->sentence();
        $specifications = $faker->sentence();
        array_push($array_photos, $image);
        array_push($array_characteristics, $characteristic);
        array_push($array_specifications, $specifications);
    }
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
        'photos' => $array_photos,
        'characteristics' => $array_characteristics,
        'specifications' => $array_specifications,
        'video' => $youtube,
        'user_guide' => $user_guide,
        'type' => $type,
        'machine_type' => $machine_type
    ];
});

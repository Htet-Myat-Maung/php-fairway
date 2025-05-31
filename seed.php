<?php

include("vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTables;
use Faker\Factory as Faker;

$table = new UsersTables(new MySQL);
$faker = Faker::create();

echo "Data seeding started... <br>";

for ($i = 0; $i < 20; $i++) {
    $table->insert([
        "name" => $faker->name,
        "email" => $faker->email,
        "phone" => $faker->phoneNumber,
        "address" => $faker->address,
        "password" => "password"
    ]);
}

echo "Data seeding done";

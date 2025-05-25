<?php

include("../vendor/autoload.php");

use Faker\Factory as Faker;
use Helpers\Auth;
use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UsersTables;

Auth::check();
HTTP::redirect();

$db = new MySQL;
$db->connect();

$table = new UsersTables;
$table->insert();

$faker = Faker::create();
echo $faker->name;
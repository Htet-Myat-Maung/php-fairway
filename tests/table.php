<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTables;

$table = new UsersTables(new MySQL);
$id = $table->insert([
    "name" => "Alice",
    "email" => "alice@gmail.com",
    "phone" => "214234123",
    "address" => "Some address",
    "password" => "password",
]);

echo $id;

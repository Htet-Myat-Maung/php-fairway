<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTables;

$table = new UsersTables(new MySQL);
$user = $table->find("alice@gmail.com", "password");

if ($user) {
    print_r($user);
} else {
    echo "User not found";
}

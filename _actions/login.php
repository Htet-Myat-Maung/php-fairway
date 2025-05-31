<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTables;
use Helpers\HTTP;

$email = $_POST['email'];
$password = $_POST['password'];

$table = new UsersTables(new MySQL);
$user = $table->find($email, $password);
if ($user) {
    if ($user->suspended) {
        HTTP::redirect("/index.php", "Your account is suspended. Please contact support.");
    }
    session_start();
    $_SESSION['user'] = $user;
    HTTP::redirect("/profile.php");
} else {
    HTTP::redirect("/index.php");
}

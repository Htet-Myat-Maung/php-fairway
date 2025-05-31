<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTables;
use Helpers\Auth;
use Helpers\HTTP;

$user = Auth::check();

$name = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];

if ($type == "image/jpeg" or $type == "image/png") {
    move_uploaded_file($tmp_name, "photos/$name");

    $table = new UsersTables(new MySQL);
    $table->updatePhoto($user->id, $name);

    $user->photo = $name;

    HTTP::redirect("/profile.php");
} else {
    HTTP::redirect("/profile.php", "error=type");
}

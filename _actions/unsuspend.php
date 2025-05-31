<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTables;
use Helpers\HTTP;

$id = $_GET['id'];

$table = new UsersTables(new MySQL);
$table->unsuspend($id);

HTTP::redirect('/admin.php');

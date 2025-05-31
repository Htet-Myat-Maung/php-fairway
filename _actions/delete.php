<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTables;
use Helpers\HTTP;

$id = $_GET['id'];

$table = new UsersTables(new MySQL);
$table->delete($id);

HTTP::redirect('/admin.php');

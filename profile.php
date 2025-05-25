<?php

include("vendor/autoload.php");

use Helpers\Auth;

$user = Auth::check();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4" style="max-width: 800px">
        <h1 class="h3 mb-3">Profile</h1>

        <?php if ($user->photo): ?>
            <img src="_actions/photos/<?= $user->photo ?>" class="img-thumbnail" width="300">
        <?php endif ?>


        <form action="_actions/upload.php" enctype="multipart/form-data" method="post" class="input-group my-4">
            <input type="file" name="photo" class="form-control" required>
            <button class="btn btn-primary">Upload</button>
        </form>

        <ul class="list-group">
            <li class="list-group-item">Name: <?= $user->name ?> </li>
            <li class="list-group-item">Email: <?= $user->email ?> </li>
            <li class="list-group-item">Phone: <?= $user->phone ?> </li>
            <li class="list-group-item">Adress: <?= $user->address ?> </li>
        </ul>

        <a href="_actions/logout.php" class="text-danger">Logout</a>
    </div>
</body>

</html>
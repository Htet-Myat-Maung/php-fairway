<?php

session_start();
unset($_SESSIOn['user']);
header("location: ../index.php");
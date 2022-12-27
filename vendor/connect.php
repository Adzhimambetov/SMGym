<?php

    $connect = mysqli_connect('localhost', 'root', '', 'smgym');

    if (!$connect) {
        die('Error connect to DataBase');
    }
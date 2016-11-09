<?php

$connection = mysqli_connect('localhost', 'root', 'root', 'shoutbox');

if (mysqli_connect_errno()) {
    echo 'Failed to connect: ' . mysqli_connect_error();
}
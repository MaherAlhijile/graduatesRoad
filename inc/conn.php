<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'gradutesroad');

if (!$conn) {
    echo "Error" . mysqli_connect_error();
} 

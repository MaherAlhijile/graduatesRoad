<?php
$name = $_POST['name'];
$email = $_POST['email'];
$major = $_POST['major'];
$university = $_POST['university'];

if (isset($_POST['send'])) {
    $sql = "INSERT INTO posts(postAuthor, authorEmail, postHeader, postInfo, postDate) VALUES ('$postAuthor',
    '$authorEmail', '$postHeader', '$postInfo', '$postDate')";
    
    mysqli_query($conn, $sql);
 }
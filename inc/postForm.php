<?php
$postAuthor = $_POST['postAuthor'];
$authorEmail = $_POST['authorEmail'];
$postHeader = $_POST['postHeader'];
$postInfo = $_POST['postInfo'];
$postDate= $_POST['postDate'];

if (isset($_POST['submit'])) {
    $sql = "INSERT INTO posts(postAuthor, authorEmail, postHeader, postInfo, postDate) VALUES ('$postAuthor',
    '$authorEmail', '$postHeader', '$postInfo', '$postDate')";
    
    mysqli_query($conn, $sql);
 }
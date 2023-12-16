<?php

include './inc/conn.php';
include './inc/postForm.php';
include './inc/userForm.php';


$sql = "SELECT * FROM posts";
$result = $conn->query($sql);
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);



/*
echo '<pre>';
print_r($posts);
echo '</pre>';

$sql = "INSERT INTO users(firstName, lastName, email, 
university, graduationDate) VALUES ('$firstName','$lastName','$email',
'$university','$graduationDate')";

mysqli_query($conn, $sql);
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gradutes Road</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>


    <?php include './components/nav.php' ?>
    <div class="container">
        <?php include './components/posts.php' ?>
        
        
    </div>
    <?php include './components/footer.php' ?>
    <?php include './components/scripts.php' ?>
</body>

</html>
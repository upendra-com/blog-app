<?php

session_start();

include 'db.php';

if(!isset($_SESSION['username'])){
    header("Location: login.php");
}

if(isset($_POST['submit'])){

    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "INSERT INTO posts(title, content)
            VALUES('$title', '$content')";

    if(mysqli_query($conn, $sql)){
        echo "Post Added Successfully";
    } else {
        echo "Error";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>

<h2>Create New Post</h2>

<form method="POST">

    <input type="text"
           name="title"
           placeholder="Enter Title"
           required>

    <br><br>

    <textarea name="content"
              placeholder="Enter Content"
              required></textarea>

    <br><br>

    <button type="submit" name="submit">
        Add Post
    </button>

</form>

</body>
</html>
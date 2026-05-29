<?php

include 'db.php';

$sql = "SELECT * FROM posts ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>All Posts</title>
</head>
<body>

<h2>All Blog Posts</h2>

<a href="create_post.php">Add New Post</a>

<hr>

<?php

while($row = mysqli_fetch_assoc($result)){

?>

    <h3><?php echo $row['title']; ?></h3>

    <p><?php echo $row['content']; ?></p>

    <small><?php echo $row['created_at']; ?></small>

    <br><br>

    <a href="edit_post.php?id=<?php echo $row['id']; ?>">
        Edit
    </a>

    |

    <a href="delete_post.php?id=<?php echo $row['id']; ?>">
        Delete
    </a>

    <hr>

<?php

}

?>

</body>
</html>
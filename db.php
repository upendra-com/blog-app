<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "blog", 3307);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>
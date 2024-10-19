<?php

    $connect = mysqli_connect("localhost", "root", "", "books_store");
    if(!$connect){ die("Connection Failed: " . mysqli_connect_error()); }
    $id = $_GET['id'];
    $sql = "DELETE FROM cards WHERE id=$id";
    if (mysqli_query($connect, $sql)) {
        header("Location: card.php");
        exit();
    } else {
        die("Query Failed: " . mysqli_error($connect));
    } 
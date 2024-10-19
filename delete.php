<?php

    // connect to database : 
    $connect = mysqli_connect("localhost", "root", "", "books_store");
    if ($connect) {
        $id = $_GET['id'];
        $sql = mysqli_query($connect, "DELETE FROM books WHERE id=$id");
        if ($sql) {
            header("Location: products.php");
            exit();
        } else {
            die("Delete Failed: " . mysqli_error($connect));
        }
    } else {
        die("Connection Failed: " . mysqli_connect_error());
    }
?>
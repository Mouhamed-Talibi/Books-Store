<?php

    if (isset($_POST['add'])) {
        $connect = mysqli_connect("localhost","root","","books_store");
        if (!$connect) { die("Connection Failed : " . mysqli_connect_error()); }
        // setting the values : 
        $name  = $_POST['name'];
        $price = $_POST['price'];
        // inserting to the database : 
        $stmt = mysqli_prepare($connect, "INSERT INTO cards(name, price) VALUES(?, ?)");
        mysqli_stmt_bind_param($stmt, "ss", $name, $price);
        if (mysqli_stmt_execute($stmt)) {
            header("Location: card.php");
            exit();
        } else{
            die("Cannot add card : " . mysqli_error($connect));
        }
    }
?>
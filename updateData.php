<?php

    if (isset($_POST['update'])) {
        // connect to database
        $connect = mysqli_connect("localhost", "root", "", "books_store");
        if (!$connect) { die("Connection Failed: " . mysqli_connect_error()); }

        // setting the variables: 
        $id = $_POST['id'];
        $name = mysqli_escape_string($connect, $_POST['name']);
        $price = mysqli_escape_string($connect, $_POST['price']);

        $image = $_FILES['image'];
        $image_location = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_folder = "pictures/". $image_name;

        // moving the uploaded file : 
        if (move_uploaded_file($image_location, $image_folder)) {
            $sql = "UPDATE books SET name='$name', price='$price', image='$image_folder' WHERE id=$id";
            if (mysqli_query($connect, $sql)) {
                header("Location: products.php");
                exit();
            } else { die("Error : " . $sql . "<br>" . mysqli_error($connect)); }
        }
    }
?>
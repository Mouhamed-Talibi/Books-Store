<?php

    if (isset($_POST['upload'])) {
        if (isset($_POST['name']) && isset($_POST['price']) && isset($_FILES['image'])) {

            // Connect to the database
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "books_store";
            $connect = mysqli_connect($host, $user, $pass, $db);

            if ($connect) {
                // Setting the variables
                $name = $_POST['name'];
                $price = $_POST['price'];
                $image_name = $_FILES['image']['name'];
                $image_tmp = $_FILES['image']['tmp_name']; 
                $image_folder = "pictures/" . $image_name;

                // Inserting the data
                if (move_uploaded_file($image_tmp, $image_folder)) {
                    $stmt = mysqli_prepare($connect, "INSERT INTO books (name, price, image) VALUES (?, ?, ?)");
                    mysqli_stmt_bind_param($stmt, "sss", $name, $price, $image_folder);
                    if (mysqli_stmt_execute($stmt)) {
                        // Redirecting the user to the main page
                        header("Location: index.php"); 
                        exit();
                    } else {
                        die("Failed to execute the query: " . mysqli_error($connect));
                    }
                } else {
                    die("Failed to upload the image.");
                }
            } else {
                die("Connection failed: " . mysqli_connect_error());
            }
        } else {
            echo "Please fill all the fields.";
        }
    }
?>

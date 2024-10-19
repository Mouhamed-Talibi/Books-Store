<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- bootstrap link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Validate Shoping</title>
        <style>
            body{
                background-color: grey;
            }
            .main{
                background-color: silver;
                color: black;
                width: 45%;
                padding: 10px;
                margin-top: 70px;
            }
            input{
                display: none;
            }
            button{
                border: 2px solid lightblue;
                padding: 5px;
                font-weight: bold;
                color: white;
                background-color: grey;
                margin-top: 5px;
            }
            a{
                text-decoration: none;
                font-weight: bold;
                color: mediumslateblue;
                margin-top: 30px;
                margin-left: 20px;
            }
        </style>
    </head>

    <body>
        <?php
            $connect = mysqli_connect("localhost", "root", "", "books_store");
            if (!$connect) { die("Connection Failed: " . mysqli_connect_error()); }
            $id = $_GET['id'];
            $sql = "SELECT * FROM books WHERE id=$id";
            $res = mysqli_query($connect, $sql);
            $data = mysqli_fetch_assoc($res);
        ?>
        <center>
            <form action="insert_card.php" method="post">
                <div class="main">
                    <h1>Do You Want To Buy This Book?</h1>
                    <input type="text" name="id" value=" <?php echo $data['id'] ?>">
                    <input type="text" name="name" value="<?php echo $data['name']?>">
                    <input type="text" name="price" value="<?php echo $data['price']?>">
                    <br>
                    <button type="submit" name="add">Yes , Add It</button>
                    <br><br>
                    <a href="products.php">Return To The Previos Page</a>
                </div>
            </form>
        </center>
    </body>
</html>
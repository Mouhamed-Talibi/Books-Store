<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Books Store</title>
        <style>
            body{
                font-family: "Fira Sans", sans-serif;
            }
            h1{
                font-size: 30px;
            }
            .container{
                font-family: "Fira Sans", sans-serif;
                box-shadow: 1px 2px 15px black;
                width: 40%;
                padding: 10px;
                margin-top: 60px;
            }
            input{
                font-family: "Fira Sans", sans-serif;
                text-align: center;
                border: 1px solid silver;
                padding: 10px;
                margin-top: 10px;
                font-weight: bold;
            }
            label{
                border: none;
                font-family: "Fira Sans", sans-serif;
                background-color: lightblue;
                color: black;
                padding: 7px;
            }
            button{
                border: none;
                font-family: "Fira Sans", sans-serif;
                background-color: silver;
                color: black;
                padding: 10px;
                margin-left: 10px;
                margin-top: 10px;
                cursor: pointer;
            }
            span{
                font-weight: bold;
                font-family: "Fira Sans", sans-serif;
                color: blue;
            }
            a{
                text-decoration: none;
                font-family: "Fira Sans", sans-serif;
                font-weight: bold;
                color: blue;
            }
        </style>
    </head> 

    <body>
        <?php   
            // connecting to database : 
            $connect = mysqli_connect("localhost", "root", "", "books_store");
            if (!$connect) { die("Connection Failed: " . mysqli_connect_error()); }
            $id = $_GET['id'];
            $sql = "SELECT * FROM books WHERE id=$id";
            $result = mysqli_query($connect, $sql);
            $row = mysqli_fetch_array($result);
        ?>

        <center>
            <div class="container">
                <h1>Updating Products Data</h1>
                <br>
                <form action="updateData.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="id" value=" <?php echo $id; ?>" readonly><br>
                    <input type="text" name="name" value=" <?php echo $row['name'] ?> "><br>
                    <input type="text" name="price" value=" <?php echo $row['price'] ?>"><br>
                    <label for="img">Update image</label>
                    <input type="file" name="image" id="img" style="display:none;">
                    <button type="submit" name="update">Update Product</button>
                    <br><br>
                    Check Updated Data From This Link: 
                    <a href="products.php">Available Products</a>
                    <br>
                </form>
            </div>
            <br><br>
            Devloped By <span>MOUHAMED TALIBI</span>
        </center>
    </body>
</html>
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
        <center>
            <div class="container">
                <h1>Online Books Store</h1>
                <br>
                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <img src="logo.png" alt="man-logo"><br>
                    <input type="text" name="name"><br>
                    <input type="text" name="price"><br>
                    <label for="img">Upload image</label>
                    <input type="file" name="image" id="img" style="display:none;">
                    <button type="submit" name="upload">Upload Product</button>
                    <br><br>
                    Click Here To See The
                    <a href="products.php">Available Products</a>
                    <br>
                </form>
            </div>
            <br><br>
            Devloped By <span>MOUHAMED TALIBI</span>
        </center>
    </body>
</html>
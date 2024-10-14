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
        <title>Available Products</title>
        <style>
            h2{
                font-family: "Roboto Mono", monospace;
                box-shadow: 1px 2px 10px aqua;
                width: 45%;
                margin-top: 30px;
                background-color: grey;
                color: white;
            }
            main{
                background-color: grey;
            }
            .card{
                border: 1px solid grey;
                margin-top: 10px;
                margin-left: 10px;
                float: left;
                background-color: white;
            }
            .card img{
                width: 100%;
                height: 200px;
            }
        </style>
    </head>


    <body>
        <center>
            <h2>Here Are The Available Products</h2>
            <br><br>
        </center>
        <form action="updateData.php" method="post"></form>
        <?php
            // connecting to database : 
            $connect = mysqli_connect("localhost", "root", "", "books_store");
            if ($connect) {
                $sql = "SELECT * FROM books";
                $result = mysqli_query($connect, $sql);
                if ($result) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo <<<HTMLCODE
                            <center>
                                <main>
                                    <div class="card" style="width: 18rem;">
                                        <img src=" $row[image] " class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"> $row[name] </h5>
                                            <p class="card-text"> $row[price] </p>
                                            <a href="validate.php?id=$row[id]" class="btn btn-success">Get Book</a>
                                        </div>
                                    </div>
                                </main>
                            </center>
                        HTMLCODE;
                    }
                }
            }
            else {
                die("Connection Failed: " . mysqli_connect_error());
            }
        ?>
    </body>
</html>
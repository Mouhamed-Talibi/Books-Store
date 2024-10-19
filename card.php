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
        <title>My Shops</title>
        <style>
            h3{
                font-family: "Roboto";
                margin-top: 20px;
                color: grey;
            }
            table{
                width: 50%;
                border: 1px solid silver;
            }
            thead th{
                padding: 5px;
                background-color: lightblue;
                text-align: center;
                margin-top: 10px;
            }
            tbody{
                text-align: center;
            }
            tbody td{
                margin-top: 10px;
            }
            #r-pro{
                text-decoration: none;
                font-family: 'Courier New', Courier, monospace;
                font-weight: bold;
                margin-top: 20px;
                color: green;
            }
        </style>
    </head>

    <body>
        <center>
            <h3>Below Are Your Shops</h3><br>
        </center>
        <!-- php code -->
        <?php
            $connect = mysqli_connect("localhost", "root", "", "books_store");
            if (!$connect) { die("Conncetion Failed: " . mysqli_connect_error()); }
            // select data
            $result = mysqli_query($connect, "SELECT * FROM cards");
            if (mysqli_num_rows($result) > 0) {
                while($row=mysqli_fetch_array($result)) {
                    echo <<<HTMLCODE
                        <center>
                            <main>
                                <table>
                                    <thead class="tbl">
                                        <tr>
                                            <th> Product Name  </th>
                                            <th> Product Price </th>
                                            <th> Action        </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>$row[name]</td>
                                            <td>$row[price]</td>
                                            <td><a href="delete_card.php ?id=$row[id]" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </main>
                        </center>
                    HTMLCODE;
                }
            }
        ?>
        <br>
        <center>
        <a href="products.php" id="r-pro">Return To Products Page</a>
        </center>
    </body>
</html>
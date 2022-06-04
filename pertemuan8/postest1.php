<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
            margin: 0%;
        }

        .container,
        .header,
        .content {
            border: 1px solid red;
            text-align: center;

        }

        .container {
            height: 950px;
        }

        .header {
            position: sticky;
            top: 0;
        }

        .content {
            display: flex;
            flex-flow: row wrap;
        }

        .col1,
        .col2 {
            border: 1px solid red;
            width: 50%;
            flex: 200px;
        }
    </style>
    <div class="container">
        <div class="header" style="background-color: blue;">
            <h1>Latihan PHP Dasar</h1>
        </div>
        <div class="content">
            <div class="col1">
                <h2>file1</h2>
                <hr>
                <?php
                require "latihan1.php";
                ?>
            </div>
            <div class="col2">
                <h2>file2</h2>
                <hr>
                <?php
                require "latihan2.php";
                ?>
            </div>
        </div>
    </div>
</body>

</html>
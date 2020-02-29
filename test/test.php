<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="TimeCircles/TimeCircles.js"></script>
    <link rel="stylesheet" type="text/css" href="TimeCircles/TimeCircles.css">

    <?php
    $connection = mysqli_connect("localhost", "root", "", "classicmodels");
    $sql = "SELECT * FROM orders WHERE orderNumber='10100'";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_object($result);
    ?>

    <div data-date="<?php echo $row->requiredDate; ?>" id="count-down"></div>

    <script>
    $(function() {
        $("#count-down").TimeCircles();
    });
    </script>
</body>

</html>
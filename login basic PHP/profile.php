<?php

session_start();
if(!isset($_SESSION['user']))
{
    header('location: index.php?profile=fail');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href ="css/all.min.css">
</head>
<body>    
    <div class="container mt-5" style="max-width:450px">
        <h1 class="mb-3">John Wick</h1>
        <ul class="list-group">
            <li class="list-group-item">
                <b>Email : </b>john.doe@gmail.com
            </li>
            <li class="list-group-item">
                <b>Phone : </b>(09) 243 867 645
            </li>
            <li class="list-group-item">
                <b>Address </b>No. 321, Main Street, West City 
            </li>
        </ul>
        <br>

        <div class="text-center"><a href="_actions/logout.php" class="btn btn-primary">Logout</a></div>
    </div>
</body>
</html>
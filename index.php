<?php
require 'common.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Imaginery Gym Check-in</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Imaginery Gym Check-in System</a>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="attendance.php" class="nav-link">View Attendance</a>
            </li>
            <li class="nav-item">
                <a href="members.php" class="nav-link">View Members</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="col-md-6 order-md-1 text-center text-md-left pr-md-5">
            <h1 class="mb-3">Welcome,</h1>
            <p class="lead">
                To the Imaginery Gym check-in system.
            </p>
            <div class="row mx-n2">
                <div class="col-md px-2">
                    <a href="members.php" class="btn btn-lg btn-outline-secondary w-100 mb-3">Members</a>
                </div>
                <div class="col-md px-2">
                    <a href="attendance.php" class="btn btn-lg btn-outline-secondary w-100 mb-3" >Attendance</a>
                </div>
                <div class="col-md px-2">
                    <a href="addmember.php" class="btn btn-lg btn-outline-secondary w-100 mb-3" >Register Member</a>
                </div>
            </div>
        </div>
    </div>
</html>

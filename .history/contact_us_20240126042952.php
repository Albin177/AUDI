<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();
?>
<head>
    <!-- Head content copied from index.php -->
    <!-- ... -->
</head>
<body class="home">
    <!-- Header copied from index.php -->
    <?php include "include/header.php"; ?>

    <div class="container">
        <h1>Contact Us</h1>
        <form action="submit_contact.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="surname">Surname:</label>
                <input type="text" class="form-control" id="surname" name="surname" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" class="form-control" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

    <!-- Footer copied from index.php -->
    <?php include "include/footer.php"; ?>

    <!-- Scripts copied from index.php -->
    <!-- ... -->
</body>
</html>

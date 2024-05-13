<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Page Admin</title>
</head>
<body>
<?php  include '/xampp/htdocs/site_ecommerce_php/include/nav.php' ?>
   <?php
   session_start();
   if(!isset($_SESSION['users'])){
    header('location:login.php');
   }
//    var_dump($_SESSION['users']);
   ?>
<div class="container">
<h1>Hello : <?php  echo $_SESSION['users']['username']; ?>  </h1>
</div>
</body>
</html>
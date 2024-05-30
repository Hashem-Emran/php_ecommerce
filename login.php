<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <title>Login</title>
</head>
<body>
<?php  include '/xampp/htdocs/site_ecommerce_php/include/nav.php' ?>
<div class="container">
<h1>connection</h1>
    <?php
    if(isset($_POST['connexion'])){
        $login=$_POST['login'];
        $pass=$_POST['password'];
        if(!empty($login)&&!empty($pass)){
          require_once '/xampp/htdocs/site_ecommerce_php/database/database.php';
          $sqlState=$pdo->prepare("SELECT * FROM users WHERE username=? AND password=?");
          $sqlState->execute([$login,$pass]);
         if($sqlState->rowCount()>=1){
            session_start();
            $_SESSION['users']=$sqlState->fetch();
            // var_dump($sqlState->fetch());
            header("location:admin.php")         
         ?>


        <?php
        }else{
            ?>
        <div class="alert alert-danger"  role="alert">
             Utilisateur no exesit 
        </div>

        <?php

        }
        }else{
            ?>
                    <div class="alert alert-danger"  role="alert">
            login and password sont iobligatoire !       
            </div>

          <?php  
        }

    }
    ?>

<div class="row">
      <div class="col-md-6 offset-md-3">
        <form action="" method="post">

          <div class="mb-3">
            <label for="login">Login</label>
            <input type="text" class="form-control" id="login" name="login">
          </div>
          <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <button type="submit " class="btn btn-primary" name="connexion">connexion</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
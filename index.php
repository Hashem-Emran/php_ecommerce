<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php  include '/xampp/htdocs/site_ecommerce_php/include/nav.php' ?>

<div class="container">
    <?php
    if(isset($_POST['add'])){
        $username=$_POST["username"];
        $pass=$_POST["password"];
        if(!empty($username) && !empty($pass) ){
            require_once '/xampp/htdocs/site_ecommerce_php/database/database.php';
            $data=date('y-m-d');
          $sqlState=  $pdo->prepare("INSERT INTO users  
             VALUES (null,?, ?, ?)");
          $sqlState->execute([$username,$pass,$data]);
            var_dump($sqlState);
            //redirection
            // header('');
        }else{
            ?>
            <div class="alert alert-danger" role="alert">
            require pass and username
                </div>                
            <?php
        }
    }
    ?>
  <form action="" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <input name="username" type="text" class="form-control"   placeholder="Enter username" require>
      <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input name="password" type="password" class="form-control" id="exampleInputPassword1" require placeholder="Password">
    </div>

    <button name="add" type="submit" class="btn btn-primary my-2">Submit</button>
  </form>
</div>

</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
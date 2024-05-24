<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <title>category</title>
</head>
<body>
<?php  include '/xampp/htdocs/site_ecommerce_php/include/nav.php' ?>

<div class="container">
    <?php
    require_once '/xampp/htdocs/site_ecommerce_php/database/database.php';
    $listcat=$pdo->query('SELECT * FROM categorie ')->fetchAll(PDO::FETCH_ASSOC); 
    foreach($listcat as $listC){
    ?>
    <?php ?>
    <div class="card-group mt-2">
  <div class="card">
    <img src="../images/phone.png" style="width: 90px;" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $listC['Libelle'] ?></h5>
      <p class="card-text"><?php echo   $listC['descrption'] ?></p>
      <a href="#" class="btn btn-primary">Go</a>
    </div>
  </div>
</div>
  <?php
} 
  ?>



</body>
</html>
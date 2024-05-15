<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<?php  include '/xampp/htdocs/site_ecommerce_php/include/nav.php' ?>

<div class="container">

<h1>Liste </h1>
<hr>
<table class="table">
  <thead class="table table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Libleel</th>
      <th scope="col">Description</th>
      <th scope="col">Data</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php

require_once '/xampp/htdocs/site_ecommerce_php/database/database.php';
$listcat=$pdo->query('SELECT * FROM categorie ')->fetchAll(PDO::FETCH_ASSOC);
    foreach($listcat as $listC){
        $dataL=date('y-m-d');
       ?>
      <tr>
      <th scope="row"><?php echo $listC['id'] ?></th>
      <td><?php echo $listC['Libelle'] ?></td>
      <td><?php echo   $listC['descrption'] ?></td>
      <td><?php  echo $dataL ?></td>
      <td>             
                <a href="#"  class="btn btn-success" >Modifier</a>
                <a onclick="return confirm('vouler-vous vrament suprimer cette users')" href="#" class="btn btn-danger" >Supprimer</a>
                </td>
    </tr>
       <?php
    }
?>

  </tbody>
</table>

</div>
    
</body>
</html>
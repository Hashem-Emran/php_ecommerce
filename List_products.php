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

<h1>Liste Products  </h1>
<hr>
<?php

// require_once '/xampp/htdocs/site_ecommerce_php/database/database.php';
// $listC=$pdo->query('SELECT * FROM categorie ')->fetchAll(PDO::FETCH_ASSOC);
// foreach ($listC as $C) {
//   echo "<td>" . $C['Libelle'] . "</td>";
// }
       ?>
<table class="table">
  <thead class="table table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Libleel</th>
      <th scope="col">Prix</th>
      <th scope="col">Discount</th>
      <th scope="col">id_categorie</th>
      <th scope="col">Data</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php

require_once '/xampp/htdocs/site_ecommerce_php/database/database.php';
$listP=$pdo->query('SELECT * FROM produit ')->fetchAll(PDO::FETCH_ASSOC);
    foreach($listP as $Lproduct){
       ?>
      <tr>
      <th scope="row"><?php echo $Lproduct['id'] ?></th>
      <td><?php echo $Lproduct['Libelle'] ?></td>
      <td><?php echo   $Lproduct['Prix'] ?></td>
      <td><?php echo   $Lproduct['Discount'] ?></td>
         <td><?php  echo $Lproduct['id_categorie'] ?></td>
      <td><?php  echo $Lproduct['date_creation'] ?></td>
      <td>             
                <a href="modify_products.php?idP=<?php echo $Lproduct['id']?>"  class="btn btn-success" >Modifier</a>
                <a onclick="return confirm('vouler-vous vrament suprimer cette products')" href="delete_products.php?idP=<?php echo $Lproduct['id'] ?>" class="btn btn-danger" >Supprimer</a>
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
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
    <h1>Add Product</h1>
    <?php
    if(isset($_POST['add_product'])){
      $libelle=$_POST['libelle'];
      $Prix=$_POST['Prix'];
      $Discount=$_POST['Discount'];
      $categorie=$_POST['categorie'];
      $dataP=date('y-m-d');
      if(!empty($libelle) && !empty($Prix) &&!empty($Discount) && !empty($categorie)){
        require_once '/xampp/htdocs/site_ecommerce_php/database/database.php';
        $dataProducts= $pdo->prepare('INSERT INTO produit 
        VALUES (null,?,?,?,?,?)');
        $dataProducts->execute([$libelle,$Prix,$Discount,$categorie,$dataP]);
       
        ?>
        <div class="alert alert-success" role="alert">
                The Products has been added successfully
            </div>    
                <?php
      }else{
        ?>
        <div class="alert alert-danger"  role="alert">
        libelle and  Prix Discount and categorie sont iobligatoire !       
        </div>
       <?php 
    }
    }
    ?>

  
<div class="row">
      <div class="col-md-6 offset-md-3">
        <form action="" method="post">
          <div class="mb-3">
            <label for="libelle">libelle</label>
            <input type="text" class="form-control" id="libelle" name="libelle">
          </div>
          <div class="mb-3">
            <label for="Prix">Prix</label>
            <input type="Number" class="form-control" id="Prix" name="Prix">
          </div>

          <div class="mb-3">
            <label for="Discount">Discount</label>
            <input min='0' max="90" type="Number" class="form-control" id="Discount" name="Discount">
          </div>        
          <?php
                  require_once '/xampp/htdocs/site_ecommerce_php/database/database.php';
          $datacategory=$pdo->query('SELECT * FROM categorie ')->fetchAll(PDO::FETCH_ASSOC);
          ?>
          <select name="categorie" class="form-select" aria-label="Default select example">
          <option selected>Open this select menu</option>
            <?php 
            foreach($datacategory as $category){
                echo "<option value='".$category['id']."'>".$category['Libelle']."</option>";
            }
            ?>
                </select>
          <button type="submit " class="btn btn-primary my-3" name="add_product">Add_product</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
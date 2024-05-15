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
    <h1>Add Category</h1>

    <?php
    if(isset($_POST['category'])){
        $libelle=$_POST['libelle'];
        $des=$_POST['descrption'];
 
    if(!empty($libelle)&& !empty($des)){
        require_once '/xampp/htdocs/site_ecommerce_php/database/database.php';
        $dataC=date('y-m-d');
        $dtatcategory=$pdo->prepare('INSERT INTO categorie 
        VALUES (null,?,?,?)');
        $dtatcategory->execute([$libelle,$des,$dataC]);
        ?>
<div class="alert alert-success" role="alert">
        The category has been added successfully
    </div>    
        <?php
        // header('location:login.php');
    }else{
        ?>
        <div class="alert alert-danger"  role="alert">
        libelle and descrption sont iobligatoire !       
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
          <div class="form-group">
    <label for="exampleFormControlTextarea1"> description</label>
    <textarea name="descrption" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
          <button type="submit " class="btn btn-primary my-3" name="category">Add category</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
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
    <h1>Modify  Category</h1>
    <?php
require_once '/xampp/htdocs/site_ecommerce_php/database/database.php';
$datacategory = $pdo->prepare('SELECT * FROM categorie WHERE id=? ');
$id = $_GET['idCat'];
$datacategory->execute([$id]);
$dataCate = $datacategory->fetch(PDO::FETCH_ASSOC);
if (isset($_POST['Modify'])) {
    $libelle = $_POST['libelle'];
    $des = $_POST['descrption'];
    if (!empty($libelle) && !empty($des)) {
        $dtatcategory = $pdo->prepare('UPDATE  categorie 
            SET Libelle=?, descrption=? WHERE id=?
            ');
        $dtatcategory->execute([$libelle, $des, $id]);
        header('location:category.php');
    } else {
?>
        <div class="alert alert-danger" role="alert">
            Libelle and Description are required!
        </div>
<?php
    }
}
?>


<div class="row">
      <div class="col-md-6 offset-md-3">
        <form action="" method="post">

        <div class="mb-3">
            <input   value="<?php echo $dataCate['id'];?>" type="hidden" class="form-control" id="libelle" name="id">
          </div>

          <div class="mb-3">
            <label  for="libelle">libelle</label>
            <input value="<?php  echo $dataCate['Libelle'];?>" type="text" class="form-control" id="libelle" name="libelle">
          </div>
          <div class="form-group">
    <label for="exampleFormControlTextarea1"> description</label>
    <textarea name="descrption" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $dataCate['descrption'];?></textarea>
  </div>
          <button type="submit " class="btn btn-primary my-3" name="Modify">Modifycategory </button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>


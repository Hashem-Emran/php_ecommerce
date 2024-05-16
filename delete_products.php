<?php
require_once '/xampp/htdocs/site_ecommerce_php/database/database.php';
$id = $_GET['idP'];
$deleteP= $pdo->prepare('DELETE FROM produit WHERE id=?');
$deleteP->execute([$id]);
if ($deleteP) {
    header("location:List_products.php");
} else {
?>
    <div class="alert alert-danger" role="alert">
        Error deleting products!
    </div>
<?php
}
?>



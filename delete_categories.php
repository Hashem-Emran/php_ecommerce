<?php
require_once '/xampp/htdocs/site_ecommerce_php/database/database.php';
$id = $_GET['idCat'];
$deleteC = $pdo->prepare('DELETE FROM categorie WHERE id=?');
$deleteC->execute([$id]);
if ($deleteC) {
    header("location:List_categories.php");
} else {
?>
    <div class="alert alert-danger" role="alert">
        Error deleting category!
    </div>
<?php
}
?>



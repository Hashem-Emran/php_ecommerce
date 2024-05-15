<?php
$coonnact=false;
session_start();
if(isset($_SESSION['users'])){
  $coonnact=true;
} 
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">EC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="register.php">register <span class="sr-only"></span></a>
      </li>
    
          <?php
            if($coonnact){
              ?>
                <li class="nav-item active">
        <a class="nav-link" href="product.php">Add Product <span class="sr-only"></span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="category.php">Add category <span class="sr-only"></span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="logout.php">Logout<span class="sr-only"></span></a>
      </li>
              <?php
            }else{

              ?>
                <li class="nav-item active">
        <a class="nav-link" href="login.php">login <span class="sr-only"></span></a>
      </li>
              <?php
            }

          ?>
    </ul>

  </div>
</nav>
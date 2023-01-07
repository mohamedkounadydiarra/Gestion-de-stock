<?php require("../controller/AjouterProduit.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../public/img/logo/logo.png" rel="icon">
  <title>AJOUT VENTE</title>
  <link href="../public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../public/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php require("../include/menuPages.php"); ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
      <?php require("../include/nav.php"); ?>
        <!-- Topbar -->

        <!-- Container Fluid-->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ajout</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active" aria-current="page">Form Basics</li>
    </ol>
  </div>

  
    <div class="col-lg-6">
      <!-- Form Basic -->
      <?php if(isset($succes)){ ?>
      <div class="alert-success"><h4><?php echo $succes; ?></h4></div>
      <script>    
 	    setTimeout(function(){
       window.location = "ListeProduit.php";}, 2000);
      </script>
      <?php } ?>

      <?php if(isset($error)){ ?>
      <div class="alert-danger"><h4><?php echo $error; ?></h4></div>
      <?php } ?>
      
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Ajouter Produit</h6>
        </div>
        <div class="card-body">
          <form method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Nom Produit</label>
              <input type="text" name="designation" required class="form-control" id="" aria-describedby=""
                placeholder="entrer le nom du produit">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Quantité</label>
              <input type="numbre" name="quantite" required class="form-control" id="" placeholder="enter la quantité du produit">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Quantité minimale</label>
              <input type="numbre" name="stockMin" required class="form-control" id="exampleInputPassword1" placeholder="la quantite min">
            </div>
            <?php 
                 $categorie = menuederoulantCategorie(); 
            ?>
            <div class="form-group">
              <label for="exampleInputPassword1">Categorie</label>
              <select class="form-control" name="idCategorie" required>
                <option selected disabled="true">--Catégorie--</option>
                <?php foreach($categorie as $et){ ?>
                <option value="<?= $et['idCategorie'] ?>"><?php echo $et['nom']; ?></option>
                <?php } ?>
              </select>
            </div>

            <button type="submit" name="enregistrer" class="btn btn-primary">Enregister</button>
          </form>
        </div>
      </div>
    </div>

        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <?php require("../include/footer.php"); ?>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="../public/vendor/jquery/jquery.min.js"></script>
  <script src="../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../public/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../public/js/ruang-admin.min.js"></script>
  <script src="../public/vendor/chart.js/Chart.min.js"></script>
  <script src="../public/js/demo/chart-area-demo.js"></script>  
</body>

</html>
<?php
require("../modele/AjouterProduit.php");

$idSortie = $_GET['idSortie'];
$calcul = TotalVente($idSortie);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../public/img/logo/logo.png" rel="icon">
  <title>DETAIL PRIX DE VENTE</title>
  <link href="../public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../public/css/ruang-admin.min.css" rel="stylesheet">
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Prix de vente</h6>
                </div>
                <div class="table-responsive p-3">
                  <div class="container">
                  	<h2>Le prix de vente est : <?php echo $calcul; ?> CFA</h2>
                  </div>
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
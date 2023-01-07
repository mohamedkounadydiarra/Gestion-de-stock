<?php require("controller/Authentification.php"); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="public/img/logo/logo.png" rel="icon">
  <title>G-STOCK</title>
  <link href="public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="public/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

        <!-- Container Fluid-->
            <div class="container-login">
                <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-12 col-md-9">
                    <div class="card shadow-sm my-5">
                    <div class="card-body p-0">
                        <div class="row">
                        <div class="col-lg-12">
                            <div class="login-form">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Login</h1>
                            </div>

                            <div class="card-body">

                            <?php if(isset($error)){ ?>
                            <div class="alert-danger"><h4><?php echo $error; ?></h4></div>
                            <script>    
                            setTimeout(function(){
                            window.location = "index.php";}, 2000);
                            </script>
                            <?php } ?>


                            <form  method="post">
                                <div class="form-group">
                                <input type="text" name="identifiant" class="form-control" id="" aria-describedby=""
                                    placeholder="votre identifiant">
                                </div>
                                <div class="form-group">
                                <input type="password" name="passwords"  class="form-control" id="exampleInputPassword" placeholder="Password">
                                </div>
                        
                                <div class="form-group">
                                <input type="submit" style="width:100%;" class="btn btn-primary" name="connexion" value="connexion">
                                </div>
                            </form>
                            <div class="text-center">
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        <!---Container Fluid-->

      </div>
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="public/vendor/jquery/jquery.min.js"></script>
  <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="public/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="public/js/ruang-admin.min.js"></script>
  <script src="public/vendor/chart.js/Chart.min.js"></script>
  <script src="public/js/demo/chart-area-demo.js"></script>  
</body>

</html>
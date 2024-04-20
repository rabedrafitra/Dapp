<?php
    session_start();
    include 'inc/connect.php';
?>
<!DOCTYPE html>
<html lang="fr">
   
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="Askbootstrap">
      <title>ESThER Video Streaming</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="img/favicon.png">
      <!-- Bootstrap core CSS-->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="css/osahan.css" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css">
   </head>
   <body class="login-main-body">
      <section class="login-main-wrapper">
         <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">
               <div class="col-md-5 p-5 bg-white full-height">
                  <div class="login-main-left">
                     <div class="text-center mb-5 login-main-left-header pt-4">
                        <img src="img/logo.png" class="img-fluid" alt="LOGO">
                        <h5 class="mt-3 mb-3">Welcome to ESThER Play</h5>
                        <p>ESThER Play est une plate-forme de streaming vidéo<br> Un produit d'ESThER Production.</p>
                     </div>
                     <form action="" method="post">
                        <div class="form-group">
                           <label>Pseudo</label>
                           <input type="text" class="form-control" placeholder="Entrer votre pseudo" name="username">
                        </div>
                        <div class="form-group">
                           <label>Mot de passe</label>
                           <input type="password" class="form-control" placeholder="Entrer votre mot de passe" name="password">
                        </div>
                        <div class="mt-4">
                           <div class="row">
                              <div class="col-12">
                                 <button type="submit" name="login" class="btn btn-outline-primary btn-block btn-lg">Entrer</button>
                              </div>
                           </div>
                        </div>
                     </form>
                     <div class="text-center mt-5">
                        <p class="light-gray">Vous n'avez pas de compte? <a href="register.php">S'inscrire</a></p>
                     </div>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="login-main-right bg-white p-5 mt-5 mb-5">
                     <div class="owl-carousel owl-carousel-login">
                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="img/login.png" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">Horonantsary fampianarana</h5>
                              <p class="mb-4">Ahitanao karazana horonantsary <br> fampianarana isan-karazany <br>ao amin'ny ESThER sy hafa koa.</p>
                           </div>
                        </div>
                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="img/login.png" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">Horonantsary fanadihadiana</h5>
                              <p class="mb-4">Ahitanao karazana horonantsary<br> mikasika fianarana, tataram-piangonana <br> tataram-pivavahana eto Madagasikara</p>
                           </div>
                        </div>
                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="img/login.png" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">Horonantsary torinteny</h5>
                              <p class="mb-4">Ahitanao karazana horonantsary<br> torinteny isan-karazany <br> eto amin'ny Fiangonan'i Jesoa Kristy eto Madagasikara</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <?php
                if (isset($_POST["login"])) {
                    $count=0;
                    $password = sha1($_POST["password"]);
                    $res= mysqli_query($link, "select * from user where username='$_POST[username]' && password='$password' && status='yes'");
                                     $count = mysqli_num_rows($res);
                    if ($count==0) {
                        ?>
                        <script language="javascript">
                                alert("Pseudo ou(et) mot de passe incorrect(s) ou compte pas encore vérifié!" );
                                </script>
                        <div class="alert alert-warning">
                            <strong style="color:#333">Invalid!</strong> <span style="color: red;font-weight: bold; ">Username Or Password.</span>
                        </div>
                    <?php
                    }

                    else{
                     $res1 = mysqli_query($link,"select subscribe from user where username='$_POST[username]'"); 
                     $now = date("Y-m-d h:i:s");
                     
                           while ($row = mysqli_fetch_array($res1))
                           {
                              $dateBdd = $row["subscribe"];
                           }
                           $date1 = strtotime($dateBdd);
                           $date2 = strtotime($now);
                           $diff= $date2 - $date1;
                           $nbrjr = $diff/86400;
                           echo $nbrjr;
                                 if($nbrjr>30) {
                                    ?>

                                       <?php mysqli_query($link, "update user set status ='no' username='$_POST[username]'"); ?>
                                    <script language="javascript">
                                          alert("Votre abonnement a expiré!" );
                                          </script>
                                 
                                    <?php

                                 }
                                  else 

                                 {

                                    $_SESSION["user"] = $_POST["username"];
                                    ?>
                                    <script type="text/javascript">
                                       window.location="payant.php";
                                    </script>
                                    <?php
                    }
                }}
                ?>

      </section>
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Owl Carousel -->
      <script src="vendor/owl-carousel/owl.carousel.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/custom.js"></script>
   </body>

</html>
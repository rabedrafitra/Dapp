<?php
    session_start();
    include 'inc/connect.php';
    function CreateToken($car) {
        $string = "";
        $chaine = "abcdefghijklmnpqrstuvwxy";
        srand((double)microtime()*1000000);
          for($i=0; $i<$car; $i++) {
            $string .= $chaine[rand()%strlen($chaine)];
            }
            return $string;
            }
?>
<!DOCTYPE html>
<html lang="en">
   
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
                        <?php 
                       $res0 = mysqli_query($link,"select * from video where id='$_SESSION[video]'"); 
                       while ($row0 = mysqli_fetch_array($res0))
                        {
                          $titre=$row0["titre"];
                          $id_video=$_SESSION["video"];
                          $titre_video=$row0["titre"];
                        }
                       ?>
                        <p> <h4> Formulaire de commande pour la vidéo:<h4>  <br>
                         <h4> <?php echo $titre; ?></h4>  </p>
                         <br>
                        Toujours fournir vos identifants 
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

                        <div class="form-group">
                           <label>Email</label>
                           <input type="email" class="form-control" placeholder="Entrer un email valide pour envoyer votre code" name="email" required="">
                        </div>


                        <div class="mt-4">
                           <div class="row">
                              <div class="col-12">
                                 <button type="submit" name="command" class="btn btn-outline-primary btn-block btn-lg">Commander la vidéo</button>
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
                if (isset($_POST["command"])) {

                    // verification d'identité
                    $count=0;
                    $password = sha1($_POST["password"]);
                    $res= mysqli_query($link, "select * from user where username='$_POST[username]' && password='$password'");
                                     $count = mysqli_num_rows($res);
                    if ($count==0) {
                       
                        ?>

                        <script language="javascript">
                                alert("Pseudo ou(et) mot de passe incorrect(s)" );
                                </script>
                        <div class="alert alert-warning">
                            <strong style="color:#333">Invalide</strong> <span style="color: red;font-weight: bold; ">Pseudo ou(et) mot de passe.</span>
                        </div>
                    <?php
                    }

                 

                    else {

                        while ($row = mysqli_fetch_array($res))
                        {
                           
                            $id_user=$row["id"];
                            $name_user=$row["name"];
                        }
                        $email=$_POST["email"];
                        $code=CreateToken(30);
                        $insert = mysqli_query($link, "insert into achat values('','$code','$id_user','$id_video','$email','$titre_video','$name_user')");
                        if($insert){
            
                            
                                echo "<script>alert(\"COMMANDE ENVOYE! NOUS VOUS ENVOYERONS LE CODE D'ACHAT APRES PAIEMENT, POUR TOUT CONTACT: 0347602077, drcpascal@gmail.com\")</script>";
                        }


                    }

                                  
                    }
                                   
               
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
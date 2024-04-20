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
      <title>ESThER Play Streaming Video</title>
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
   <body id="page-top">
      <nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
         &nbsp;&nbsp; 
         <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
         <i class="fas fa-bars"></i>
         </button> &nbsp;&nbsp;
         <a class="navbar-brand mr-1" href="index.html"><img class="img-fluid" alt="" src="img/logo.png"></a>
         <!-- Navbar Search -->

         <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search" method="post" action="" valign="center">
            <div class="input-group">
               <input type="text" class="form-control" name="search" placeholder="Mitady horonantsary..." >
               <div class="input-group-append">
                  <button class="btn btn-light" type="submit" name="submit">
                  <i class="fas fa-search"></i> 
                  </button>
               </div>
            </div>
         </form>

         <!-- Navbar -->
         <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
            <li class="nav-item mx-1">
               <a class="nav-link" href="https://esther-edu.mg">
               <i class="fas fa-plus-circle fa-fw"></i>
              Voir plus...
               </a>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
               <!-- <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-bell fa-fw"></i>
               <span class="badge badge-danger">9+</span>
               </a> -->
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                  <!-- <a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>
                  <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a> -->
               </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
               <!-- <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-envelope fa-fw"></i>
               <span class="badge badge-success">7</span> -->
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                  <!-- <a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>
                  <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a> -->
               </div>
            </li>
            <li class="nav-item dropdown no-arrow osahan-right-navbar-user">
               <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <img alt="Avatar" src="img/admin.png">
               ESThER Prod
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                  <!-- <a class="dropdown-item" href="account.html"><i class="fas fa-fw fa-user-circle"></i> &nbsp; Mon Compte</a>
                  <a class="dropdown-item" href="subscriptions.html"><i class="fas fa-fw fa-video"></i> &nbsp; Inscription</a>
                  <a class="dropdown-item" href="settings.html"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
               </div> -->
            </li>
         </ul>
      </nav>
      <div id="wrapper">
         <!-- Sidebar -->
         <ul class="sidebar navbar-nav">
            <li class="nav-item active">
               <a class="nav-link" href="index.php">
               <i class="fas fa-fw fa-home"></i>
               <span>Fandraisana</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="login.php">
               <i class="fas fa-fw fa-user"></i>
               <span>Profil</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="categorie.php?cat=fampianarana">
               <i class="fas fa-fw fa-book"></i>
               <span>Fampianarana</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="categorie.php?cat=fanadihadiana">
               <i class="fas fa-fw fa-video"></i>
               <span>Fanadihadiana</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="categorie.php?cat=torinteny">
               <i class="fas fa-fw fa-church"></i>
               <span>Torinteny</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="categorie.php?cat=vaovao" >
               <i class="fas fa-fw fa-info"></i>
               <span>Vaovao</span>
               </a>
             
            </li>
            <li class="nav-item">
               <a class="nav-link" href="login.php">
               <i class="fas fa-fw fa-lock"></i>
               <span>Fidirana</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="register.php">
               <i class="fas fa-fw fa-list-alt"></i>
               <span>Fisoratana anarana</span>
               </a>
              
            </li>
        
         </ul>
         <div id="content-wrapper">
            <div class="container-fluid pb-0">
               <div class="top-mobile-search">
                  <div class="row">
                     <div class="col-md-12">   
                        <form class="mobile-search" action="" method="post">
                           <div class="input-group">
                             <input type="text" name="search"placeholder="Mitady horonantsary..." class="form-control">
                               <div class="input-group-append">
                                 <button type="submit" name="submit" class="btn btn-dark"><i class="fas fa-search"></i></button>
                               </div>
                           </div>
                        </form>   
                     </div>
                  </div>
               </div>



               <div class="top-category section-padding mb-4">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="main-title">
                          


                           <h6>Karazana horonantsary</h6>
                        </div>
                     </div>



                     <div class="col-md-12">
                        <div class="owl-carousel owl-carousel-category">

                           <div class="item">
                              <div class="category-item">
                                 <a href="categorie.php?cat=fampianarana">
                                    <img class="img-fluid" src="img/fampianarana.jpg" alt="">
                                    <h6>Fampianarana</h6>
                                    <!-- <p>74,853 views</p> -->
                                 </a>
                              </div>
                           </div>


                           <div class="item">
                              <div class="category-item">
                                 <a href="categorie.php?cat=torinteny">
                                    <img class="img-fluid" src="img/torinteny.jpg" alt="">
                                    <h6>Torinteny</h6>
                                    <!-- <p>74,853 views</p> -->
                                 </a>
                              </div>
                           </div>

            
                           <div class="item">
                              <div class="category-item">
                                 <a href="categorie.php?cat=fanadihadiana">
                                    <img class="img-fluid" src="img/fanadihadiana.jpg" alt="">
                                    <h6>Fanadihadiana </h6>
                                    <!-- <p>74,853 views</p> -->
                                 </a>
                              </div>
                           </div>
                           
                           <div class="item">
                              <div class="category-item">
                                 <a href="categorie.php?cat=vaovao">
                                    <img class="img-fluid" src="img/vaovao.jpg" alt="">
                                    <h6>Vaovao</h6>
                                    <!-- <p>74,853 views</p> -->
                                 </a>
                              </div>
                           </div>


                           
                        </div>
                     </div>


                  </div>
               </div>
               <hr>
               <div class="video-block section-padding">
                  <div class="row">
                   

                     <?php  
                         if (isset($_POST["submit"])) {
                            $res = mysqli_query($link,"select * from video where titre like('%$_POST[search]%') LIMIT 50"); ?>

                            <div class="col-md-12">
                            <div class="main-title">
                        
                               <h6>Horonantsary valin'ny fikarohana: <?php echo $_POST["search"]; ?>  </h6>
                            </div>
                         </div>
                         <?php 

                            while ($row = mysqli_fetch_array($res))
                                    {

                           ?>

                           <div class="col-xl-3 col-sm-6 mb-3">
                           <div class="video-card">
                              <div class="video-card-image">
                                 <a class="play-icon" href="playvid.php?id=<?php echo $row["id"]; ?>"><i class="fas fa-play-circle"></i></a>
                                 <a href="playvid.php?id=<?php echo $row["id"]; ?>"><img class="img-fluid" src="img/<?php echo $row["video_image"]; ?>" alt=""></a>
                                 <div class="time"><?php echo $row["time"]; ?></div>
                              </div>
                              <div class="video-card-body">
                                 <div class="video-title">
                                    <a href="playvid.php?id=<?php echo $row["id"]; ?>"><?php echo $row["titre"]; ?></a>
                                 </div>
                                 <div class="video-page text-success">
                                 <?php echo $row["categorie"]; ?>  <a title="" data-placement="top" data-toggle="tooltip" href="playvid.php?id=<?php echo $row["id"]; ?>" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                 </div>
                                 <!-- <div class="video-view">
                                    1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                 </div> -->
                              </div>
                           </div>
                        </div>
                      
                     <?php } 

                      
                      } else {?> 



<?php     

$res = mysqli_query($link,"select * from video ORDER BY id DESC LIMIT 50");?> 

<div class="col-md-12">
<div class="main-title">
   
  
  
  
  
  
   <h6>Horonantsary farany </h6>
</div>
</div>
<?php 
while ($row = mysqli_fetch_array($res))
{?> 


                     <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="video-card">
                           <div class="video-card-image">
                              <a class="play-icon" href="playvid.php?id=<?php echo $row["id"]; ?>"><i class="fas fa-play-circle"></i></a>
                              <a href="playvid.php?id=<?php echo $row["id"]; ?>"><img class="img-fluid" src="img/<?php echo $row["video_image"]; ?>" alt=""></a>
                              <div class="time"><?php echo $row["time"]; ?></div>
                           </div>
                           <div class="video-card-body">
                              <div class="video-title">
                                 <a href="playvid.php?id=<?php echo $row["id"]; ?>"><?php echo $row["titre"]; ?></a>
                              </div>
                              <div class="video-page text-success">
                              <?php echo $row["categorie"]; ?>  <a title="" data-placement="top" data-toggle="tooltip" href="playvid.php?id=<?php echo $row["id"]; ?>" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                              </div>
                              <!-- <div class="video-view">
                                 1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                              </div> -->
                           </div>
                        </div>
                     </div>
                   
                  <?php } }?>
             
                 
               <hr class="mt-0">
               <div class="video-block section-padding">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="main-title">
                           <!-- <div class="btn-group float-right right-action">
                              <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                 <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                 <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                 <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                              </div>
                           </div> -->



<!-- 
                           <h6>Popular Channels</h6>
                        </div>
                     </div>





                     <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="channels-card">
                           <div class="channels-card-image">
                              <a href="#"><img class="img-fluid" src="img/s1.png" alt=""></a>
                              <div class="channels-card-image-btn"><button type="button" class="btn btn-outline-danger btn-sm">Subscribe <strong>1.4M</strong></button></div>
                           </div>
                           <div class="channels-card-body">
                              <div class="channels-title">
                                 <a href="#">Channels Name</a>
                              </div>
                              <div class="channels-view">
                                 382,323 subscribers
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="channels-card">
                           <div class="channels-card-image">
                              <a href="#"><img class="img-fluid" src="img/s2.png" alt=""></a>
                              <div class="channels-card-image-btn"><button type="button" class="btn btn-outline-danger btn-sm">Subscribe <strong>1.4M</strong></button></div>
                           </div>
                           <div class="channels-card-body">
                              <div class="channels-title">
                                 <a href="#">Channels Name</a>
                              </div>
                              <div class="channels-view">
                                 382,323 subscribers
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="channels-card">
                           <div class="channels-card-image">
                              <a href="#"><img class="img-fluid" src="img/s3.png" alt=""></a>
                              <div class="channels-card-image-btn"><button type="button" class="btn btn-outline-secondary btn-sm">Subscribed <strong>1.4M</strong></button></div>
                           </div>
                           <div class="channels-card-body">
                              <div class="channels-title">
                                 <a href="#">Channels Name <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i class="fas fa-check-circle"></i></span></a>
                              </div>
                              <div class="channels-view">
                                 382,323 subscribers
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="channels-card">
                           <div class="channels-card-image">
                              <a href="#"><img class="img-fluid" src="img/s4.png" alt=""></a>
                              <div class="channels-card-image-btn"><button type="button" class="btn btn-outline-danger btn-sm">Subscribe <strong>1.4M</strong></button></div>
                           </div>
                           <div class="channels-card-body">
                              <div class="channels-title">
                                 <a href="#">Channels Name</a>
                              </div>
                              <div class="channels-view">
                                 382,323 subscribers
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div> -->
            <!-- /.container-fluid -->
            <!-- Sticky Footer -->
            <footer class="sticky-footer">
               <div class="container">
                  <div class="row no-gutters">
                     <div class="col-lg-6 col-sm-6">
                        <p class="mt-1 mb-0"><strong class="text-dark">ESThER Play</strong>. <small class="mt-0 mb-0"><a class="text-primary" target="_blank" href="https://www.templatespoint.net/"></a>
                           </small>
                        </p>
                     </div>
                  
                  </div>
               </div>
            </footer>
         </div>
         <!-- /.content-wrapper -->
      </div>
      <!-- /#wrapper -->
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
 
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
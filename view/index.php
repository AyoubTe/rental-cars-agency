<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>DriveNow</title>
      
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="bootstrap/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="bootstrap/css/owl.carousel.min.css">
      <link rel="stylesoeet" href="bootstrap/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        <ul>
                           <?php
                              session_start();
                              include "../dao/dao_client.php";
                              $dao = new DaoClient();
                              $client = $dao->findPersonne($_SESSION['cin']);
                              if ($client != null){
                                 echo '<li><a href="index.php">Page d\'acceuil</a></li>
                                 <li><a href="reservation.php?numImma=">Réserver</a></li>
                                 <li><a href="location.php?numImma=">Louer</a></li>
                                 <li><a href="about.php">A propos</a></li>';
                                 
                              }

                              else{
                                 echo '<li><a href="index.php">Page d\'acceuil</a></li>
                                 <li><a href="connexion.php">Se connecter</a></li>
                                 <li><a href="creation.php">Creer compte</a></li>
                                 <li><a href="reservation.php?numImma=">Réserver</a></li>
                                 <li><a href="location.php?numImma=">Louer</a></li>
                                 <li><a href="about.php">A propos</a></li>';
                              }
                           echo '
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="connecte.php"><img src="images/logo.png"></a></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>';
                     
                        //session_start();
                        //include "../dao/dao_client.php";
                        $dao = new DaoClient();
                        $client = $dao->findPersonne($_SESSION['cin']);
                        if ($client != null){
                            echo '<a href="compte.php">'.$client->getPrenom().' '.$client->getNom().'</a>
                            <a href="parametres.html">Paramétres</a>
                            <a href="../controller/connexion-controller.php?action=deconnexion">Deconnexion</a>
                            </div>
                            <span class="toggle_icon" onclick="openNav()"><img src="images/user-icon.png"></span>';
                        }

                        else{
                            echo '<a href="index.php">Page d\'acceuil</a>
                            <a href="connexion.php">Se connecter</a>
                            <a href="creation.php">Créer compte</a>
                            <a href="reservation.php">Réserver</a>
                            <a href="location.php">Louer</a>
                            </div>
                           <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>';
                        }
                     ?>
                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                        <input type="search" class="form-control" placeholder="chercher votre voiture">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="header_box">
                     <div class="lang_box ">
                        <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="images/flag-france.png" alt="flag" class="mr-2 " title="United Kingdom"> Français <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu ">
                           <a href="#" class="dropdown-item">
                           <img src="images/flag-uk.png" class="mr-2" alt="flag">
                           English
                           </a>
                           <a href="#" class="dropdown-item">
                              <img src="images/arabe.png" class="mr-2" alt="flag"> <!-- attention im arabe -->
                              Arabe
                              </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header section end -->
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital"  >commencer <br>votre voiture preferée </h1>
                              <div class="buynow_bt"><a href="reservation.php?numImma="  >reserver  maintenant</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital"  >commencer <br>votre voiture de reve</h1>
                              <div class="buynow_bt"><a href="location.php?numImma="  >louer maintenant</a></div>
                           </div>
                        </div>
                     </div>
                     
                  </div>
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- banner bg main end -->
      <!-- family cars section start -->
      <div class="fashion_section">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Pour votre famille</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Renault Grand Scenic</h4>
                                 <p class="price_text">Prix  <span style="color: #262626;">150 dh/j</span></p>
                                 <div class="tshirt_img"><img src="images/Renault.png"></div>
                                 <p >Ce monospace parfaitement adapté aux familles nombreuses dispose de 7 places et d'un coffre dont le volume dépasse les 700 litres.</p>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="reservation.php?numImma=BK-630NE">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="locztion.php?numImma=BK-630NE">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Dacia Duster</h4>
                                 <p class="price_text">Prix  <span style="color: #262626;">150 dh/</span></p>
                                 <div class="tshirt_img"><img src="images/Dacia.png"></div>
                                 <p>Certes, la Dacia Duster n'est pas la voiture aux lignes les plus esthétiques, mais il s'agit sûrement de la voiture familiale au meilleur rapport qualité/prix. </p>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="reservation.php?numImma=ST-016-EL">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="location.php?numImma=ST-016-EL">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Mercedes Classe B</h4>
                                 <p class="price_text">Prix  <span style="color: #262626;">200 dh/j</span></p>
                                 <div class="tshirt_img"><img src="images/Mercedes.png"></div>
                                 <p> le Mercedes Classe B est un monospace haut de gamme qui ravira toute la famille, le Mercedes Classe B allie des lignes modernes à un large espace intérieur. </p>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="reservation.php?numImma=FC-334-ZF">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="location.php?numImma=FC-334-ZF">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Pour votre famille</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Renault Grand Scenic</h4>
                                 <p class="price_text">Prix  <span style="color: #262626;">3000 dh</span></p>
                                 <div class="tshirt_img"><img src="images/Renault.png"></div>
                                 <p >Ce monospace parfaitement adapté aux familles nombreuses dispose de 7 places et d'un coffre dont le volume dépasse les 700 litres.</p>

                                 <div class="btn_main">
                                 <div class="buy_bt"><a href="reservation.php?numImma=BK-630NE">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="locztion.php?numImma=BK-630NE">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Dacia Duster</h4>
                                 <p class="price_text">Prix  <span style="color: #262626;">3000 dh</span></p>
                                 <div class="tshirt_img"><img src="images/Dacia.png"></div>
                                 <p>Certes, la Dacia Duster n'est pas la voiture aux lignes les plus esthétiques, mais il s'agit sûrement de la voiture familiale au meilleur rapport qualité/prix. </p>

                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="reservation.php?numImma=ST-016-EL">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="location.php?numImma=ST-016-EL">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Mercedes Classe B</h4>
                                 <p class="price_text">Prix  <span style="color: #262626;">3000 dh</span></p>
                                 <div class="tshirt_img"><img src="images/Mercedes.png"></div>
                                 <p> le Mercedes Classe B est un monospace haut de gamme qui ravira toute la famille, le Mercedes Classe B allie des lignes modernes à un large espace intérieur. </p>

                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="reservation.php?numImma=FC-334-ZF">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="location.php?numImma=FC-334-ZF">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Pour votre famille</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Renault Grand Scenic</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">3000 dh</span></p>
                                 <div class="tshirt_img"><img src="images/Renault.png"></div>
                                 <p >Ce monospace parfaitement adapté aux familles nombreuses dispose de 7 places et d'un coffre dont le volume dépasse les 700 litres.</p>

                                 <div class="btn_main">
                                 <div class="buy_bt"><a href="reservation.php?numImma=BK-630NE">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="locztion.php?numImma=BK-630NE">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Dacia Duster</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">3000 dh</span></p>
                                 <div class="tshirt_img"><img src="images/Dacia.png"></div>
                                 <p>Certes, la Dacia Duster n'est pas la voiture aux lignes les plus esthétiques, mais il s'agit sûrement de la voiture familiale au meilleur rapport qualité/prix. </p>

                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="reservation.php?numImma=ST-016-EL">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="location.php?numImma=ST-016-EL">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Mercedes Classe B</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">3000 dh</span></p>
                                 <div class="tshirt_img"><img src="images/Mercedes.png"></div>
                                 <p> le Mercedes Classe B est un monospace haut de gamme qui ravira toute la famille, le Mercedes Classe B allie des lignes modernes à un large espace intérieur. </p>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="reservation.php?numImma=FC-334-ZF">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="location.php?numImma=FC-334-ZF">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
      <!-- family cars section end -->
      <!-- traveling cars section start -->
      <div class="fashion_section">
         <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Pour voyager</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Citroën C4 Cactus</h4>
                                 <p class="price_text">Prix <span style="color: #262626;">135 dh</span></p>
                                 <div class="electronic_img"><img src="images/Citroën.png"></div>
                                 <p>une série rêvée pour la pratique du surf.</p>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="reservation.php?numImma=GC-103-MF">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="location.php?numImma=GC-103-MF">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Land Rover Defender</h4>
                                 <p class="price_text">Prix  <span style="color: #262626;">250 dh</span></p>
                                 <div class="electronic_img"><img src="images/Land.png"></div>
                                 <p>une série rêvée et idéale pour partir chasser.</p>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="reservation.php?numImma=MA-370-SS">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="location.php?numImma=MA_370-SS">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Jeep Wrangler</h4>
                                 <p class="price_text">Prix <span style="color: #262626;">250 dh/j</span></p>
                                 <div class="electronic_img"><img src="images/Jeep.png"></div>
                                 <p>Pour des balades dans les chemins cheveux au vent !</p>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="reservation.php?numImma=MA-317-MS">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="location.php?numImma=MA-317-MS">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Pour voyager</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Citroën C4 Cactus</h4>
                                 <p class="price_text">Prix <span style="color: #262626;">235 dh/j</span></p>
                                 <div class="electronic_img"><img src="images/Citroën.png"></div>
                                 <p>une série rêvée pour la pratique du surf.</p>

                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="reservation.php?numImma=GC-103-MF">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="location.php?numImma=GC-103-MF">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Land Rover Defender</h4>
                                 <p class="price_text">Prix <span style="color: #262626;">250 dh/j</span></p>
                                 <div class="electronic_img"><img src="images/Land.png"></div>
                                 <p>une série rêvée et idéale pour partir chasser.</p>

                                 <div class="btn_main">
                                    <<div class="buy_bt"><a href="reservation.php?numImma=MA-370-SS">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="location.php?numImma=MA_370-SS">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Jeep Wrangler</h4>
                                 <p class="price_text">Prix <span style="color: #262626;">250 dh/j</span></p>
                                 <div class="electronic_img"><img src="images/Jeep.png"></div>
                                 <p>Pour des balades dans les chemins cheveux au vent !</p>
                                 <div class="btn_main">
                                 <div class="buy_bt"><a href="reservation.php?numImma=MA-317-MS">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="location.php?numImma=MA-317-MS">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Pour voyager</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Citroën C4 Cactus</h4>
                                 <p class="price_text">Prix<span style="color: #262626;">135 dh/j</span></p>
                                 <div class="electronic_img"><img src="images/Citroën.png"></div>
                                 <p>une série rêvée pour la pratique du surf.</p>

                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="reservation.php?numImma=GC-103-MF">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="location.php?numImma=GC-103-MF">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Land Rover Defender</h4>
                                 <p class="price_text">Prix<span style="color: #262626;">250 dh/j</span></p>
                                 <div class="electronic_img"><img src="images/Land.png"></div>
                                 <p>une série rêvée et idéale pour partir chasser.</p>

                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="reservation.php?numImma=MA-370-SS">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="location.php?numImma=MA_370-SS">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Jeep Wrangler</h4>
                                 <p class="price_text">Prix<span style="color: #262626;">250 dh/j</span></p>
                                 <div class="electronic_img"><img src="images/Jeep.png"></div>
                                 <p>Pour des balades dans les chemins cheveux au vent !</p>
                                 <div class="btn_main">
                                 <div class="buy_bt"><a href="reservation.php?numImma=MA-317-MS">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="location.php?numImma=MA-317-MS">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#electronic_main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#electronic_main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
      <!-- traveling cars section end -->
      <!-- Luxe cars  section start -->
      <div class="fashion_section">
         <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Pour le luxe</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Aston Martin</h4>
                                 <p class="price_text">Prix <span style="color: #262626;">1500dh / jours</span></p>
                                 <div class="electronic_img"><img src="images/voitureLuxe/Aston-Martin.jpeg"></div>
                                 <p>Aston Martin représente le mix parfait entre voiture élégante et rapide.</p>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="reservation.php?numImma=MA-80-DN">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="location.php?numImma=MA-80-DN">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Bentley</h4>
                                 <p class="price_text">Prix  <span style="color: #262626;">1900 dh/jour</span></p>
                                 <div class="electronic_img"><img src="images/voitureLuxe/bentley.jpg"></div>
                                 <p>une série rêvée et idéale pour partir chasser.</p>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="reservation.php?numImma=MA-80-DN">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="location.php?numImma=MA-80-DN">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Bugatti Chiron</h4>
                                 <p class="price_text">Prix <span style="color: #262626;">2100 dh/jour</span></p>
                                 <div class="electronic_img"><img src="images/voitureLuxe/Bugatti-Chiron.jpg"></div>
                                 <p>Pour des balades dans les chemins cheveux au vent !</p>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="reservation.php?numImma=CR-510-A">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="location.php?numImma=CR-510-A">Réserver maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Pour le luxe</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Ferrari</h4>
                                 <p class="price_text">Prix <span style="color: #262626;">1700 dh/jour</span></p>
                                 <div class="electronic_img"><img src="images/voitureLuxe/Ferari.jpeg"></div>
                                 <p>une série rêvée pour la pratique du surf.</p>

                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="reservation.php?numImma=MA-909-AA">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="location.php?numImma=MA-909-AA">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Lamborghini</h4>
                                 <p class="price_text">Prix <span style="color: #262626;">1600 dh/jour</span></p>
                                 <div class="electronic_img"><img src="images/voitureLuxe/lamborghini.jpeg"></div>
                                 <p>une série rêvée et idéale pour partir chasser.</p>

                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="reservation.php?numImma=MA-01-AB">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="location.php?numImma=MA-01-AB">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Porsche</h4>
                                 <p class="price_text">Prix <span style="color: #262626;">1500 dh/jour</span></p>
                                 <div class="electronic_img"><img src="images/voitureLuxe/porsche.jpeg"></div>
                                 <p>Pour des balades dans les chemins cheveux au vent !</p>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="reservation.php?numImma=MA-307-ND">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="location.php?numImma=MA-307-ND">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Pour voyager</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Citroën C4 Cactus</h4>
                                 <p class="price_text">Prix<span style="color: #262626;">135 dh/j</span></p>
                                 <div class="electronic_img"><img src="images/Citroën.png"></div>
                                 <p>une série rêvée pour la pratique du surf.</p>

                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="reservation.php?numImma=GC-103-MF">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="location.php?numImma=GC-103-MF">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Land Rover Defender</h4>
                                 <p class="price_text">Prix<span style="color: #262626;">250 dh/j</span></p>
                                 <div class="electronic_img"><img src="images/Land.png"></div>
                                 <p>une série rêvée et idéale pour partir chasser.</p>

                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="reservation.php?numImma=MA-370-SS">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="location.php?numImma=MA-370-SS">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Jeep Wrangler</h4>
                                 <p class="price_text">Prix<span style="color: #262626;">250 dh/j</span></p>
                                 <div class="electronic_img"><img src="images/Jeep.png"></div>
                                 <p>Pour des balades dans les chemins cheveux au vent !</p>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="reservation.php?numImma=MA-317-MS">Réserver maintenant</a></div>
                                    <div class="buy_bt"><a href="reservation.php?numImma=MA-317-MS">Louer maintenant</a></div>
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#electronic_main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#electronic_main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
      <!-- luxe cars section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.html"><img src="images/logo.png"></a></div>
           
            <div class="footer_menu">
               <ul>
                  <li><a href="index.php">Page d'accueil</a></li>
                           <li><a href="reservation.php?numImma=">Réserver</a></li>
                           <li><a href="location.php?numImma=">Louer</a></li> 
               </ul>
            </div>
            <div class="location_main">
               numero vert: <a href="tel:06020232023">+2126020232023</a><br>
               email : <a href="mailto:support@drivenow.com">support@drivenow.com</a>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2023 Tous les droits sont reservés. Réalisé par 1Gi EHTP</p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="bootstrap/js/jquery.min.js"></script>
      <script src="bootstrap/js/popper.min.js"></script>
      <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="bootstrap/js/jquery-3.0.0.min.js"></script>
      <script src="bootstrap/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="bootstrap/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="bootstrap/js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>
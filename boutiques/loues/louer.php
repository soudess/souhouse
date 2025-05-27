<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SOHOUSE</title>
  <link rel="shortcut icon" href="images/SOHOUSE (7).png" type="image/x-icon">


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="images/SOHOUSE (10).png" alt="" />
          </a>
          <div class="navbar-collapse" id="">
            <ul class="navbar-nav justify-content-between ">
              <div class="User_option">
              
              </div>
            </ul>

            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.php">Accueil</a>
                <a href="location.php">Location</a>
                <a href="vendre.php">Vendre</a>
                
                <a href="contact.php">nous contacter</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>


  <!-- contact section -->

  <section class="contact_section layout_padding-top">
    <div class="container">
      <div class="heading_container">
        <h2>
        Louer
        </h2>
      </div>
    </div>
    <div class="container-fluid">
      <div class="" align="center">
        <div class="col-lg-4 col-md-5 ">
          <div class="form_container">
          <form action="" method="post" autocomplete="off">
              <div>
                <input type="text" placeholder="Name" name="nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" />
              </div>
              <div>
                <input type="email" placeholder="Email" name="mail" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" />
              </div>
              <div>
                <input type="tel" placeholder="Phone Number" name="tel" value="<?php if(isset($_POST['tel'])) { echo $_POST['tel']; } ?>" />
              </div>
              <div>
                <input type="tel" placeholder="Phone Number" name="tel" value="<?php if(isset($_POST['tel'])) { echo $_POST['tel']; } ?>" />
              </div>
              <div>
                <select name="type" id="" >
                  <option value="piece">piece</option>
                  <option value="cs">chambre salon</option>
                  <option value="csc">chambre salon cuisine</option>
                  <option value="v">villa</option>
                  <option value="voi">voiture</option>
                </select>
              </div>
              <div>
                <textarea name="message" id="" cols="50" rows="10" style="margin-top: 10px;"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
              </div>
              <div class="d-flex ">
                <button name="send">
                  envoyer
                </button>

              </div>
              <?php if(isset($msg)) {
         echo $msg;
      }
      ?>
              <?php
if(isset($_POST['send'])) {
   if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message'])) {
      $header="MIME-Version: 1.0\r\n";
      $header.='From:<votre@mail.com>'."\n";
      $header.='Content-Type:text/html; charset="uft-8"'."\n";
      $header.='Content-Transfer-Encoding: 8bit';
      $message='
      <html>
         <body>
            <div align="center">
               <img src="images/sohouse(10)"/>
               <br />
               <u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
               <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
               <u>Mail de l\'expéditeur :</u>'.$_POST['tel'].'<br />
               <u>Mail de l\'expéditeur :</u>'.$_POST['type'].'<br />
               <br />
               '.nl2br($_POST['message']).'
               <br />
               <img src="images/sohouse(10)"/>
            </div>
         </body>
      </html>
      ';
      mail("programmeurlibre@gmail.com", "Sujet du message", $message, $header);
      $msg="Votre message a bien été envoyé !";
   } else {
      $msg="Tous les champs doivent être complétés !";
   }
}
?>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>
 




  <!-- end contact section -->



  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              louer
            </h5>
            <div>
              <div class="img-box">
                <img src="images/location.png" width="18px" alt="">
              </div>
              <p>
                Address
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/phone.png" width="12px" alt="">
              </div>
              <p>
                +228 90 XX XX 00
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/mail.png" width="18px" alt="">
              </div>
              <p>
                sohouse@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Information
            </h5>
            <p>
              sohouse soyez satisfait de nos services
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info_links">
            <h5>
              lien utile
            </h5>
            <ul>
              <li>
                <a href="index.php">
                  Accueil
                </a>
              </li>
              <li>
                <a href="location.php">
                  Location 
                </a>
              </li>
              <li>
                <a href="vendre.php">
                   vendre
                </a>
              </li>
              <li>
                <a href="contact.php">
                  contact
                </a>
              </li>
             
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <div class="social_box">
              <a href="">
                <img src="images/fb.png" alt="">
              </a>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
             
              <a href="">
                <img src="images/youtube.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <section class="container-fluid footer_section ">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="#">sohouse</a>
      </p>
    </div>
  </section>
  <!-- end  footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>
</body>

</html>
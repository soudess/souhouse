<?php
// Configuration de la base de données
define('DB_HOST', 'localhost');
define('DB_NAME', 'immo');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
try {
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}
$query = $db->query("SELECT * FROM beni");
$properties = $query->fetchAll(PDO::FETCH_ASSOC);




?>
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
                <a href="contact.php">Nous contacter</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- sale section -->

  <section class="sale_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="heading_container">

        <p>
          
        </p>
      </div>
        <h2 style=" padding-left: 5px;
               position: relative;
  
                  border-left: 7px solid #0f2480;
               font-weight: bold;" align="center">
          Location d'appartement, villa, bureaux, etc ....
        </h2>
 <section class="sale_section layout_padding-bottom">
    <div class="container-fluid">
      <?php foreach ($properties as $property) : ?>
      <div class="row sale_container">
        <div class="  box " style="width: 150px; border:2px solid black ; margin:10px;display:contents; align-items:center;justify-content:center;">
          <div class="img-box">
            <img src="images/SOHOUSE (10).png" width="50" height="100" alt="">
          </div>
          <div class="detail-box">
            <h6>
            titre : <?php echo $property['title']; ?>
            </h6>
            <h6>
            description : <?php echo $property['description']; ?>
            </h6>
            <h6>
            lieux : <?php echo $property['city']; ?>
            </h6>
            <p>
            Prix : <?php echo $property['price']; ?>fcfa
            </p>
            <div class="btn-box">
              <a href="loues/louer.php">
                Louer
              </a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
</section>
      <h2 style="  padding-left: 5px;
  
  border-left: 7px solid #0f2480;
  font-weight: bold;" align="center">
          Location de voiture, moto ,bus etc.....
        </h2>
      <div class="sale_container">

        <div class="box">
          <div class="img-box">
            <img src="images/Capture d’écran (63).png" alt="">
          </div>
          <div class="detail-box">
            <h6>
            Beni Immo-trans
            </h6>
            <p>
               et la Location  de voiture
            </p>
            <div class="btn-box">
              <a href="boutiques/Beni Immo-trans.php">
                Visiter l'Agences
              </a>
            </div>
          </div>
        </div>
     
      </div>

    </div>
  </section>

  <!-- end sale section -->



  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              À propos de sohouse
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
  <section class="container-fluid footer_section ">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="#">sohouse</a>
      </p>
    </div>
  </section>

  <!-- footer section -->
  

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>
</body>

</html>
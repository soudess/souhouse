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
  <link rel="stylesheet" type="text/css" href="css\bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css\style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css\responsive.css" rel="stylesheet" />
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
                <a href="\sohouse2\index.php">Accueil</a>
                
                <a href="\sohouse2\location.php">Location</a>
                <a href="\sohouse2\vendre.php">Vendre</a>
                <a href="\sohouse2\contact.php">Nous contacter</a>
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
        <h2 style="margin-top: 50px;">
          beni immo-trans
        </h2>
        <p>
          
        </p>
      </div>
      <?php foreach ($properties as $property) : ?>
      <div class="sale_container">
      
        <div class="box">
          <div class="img-box">
            <img src="images/Capture d’écran (63).png" width="60" height="100" alt="">
          </div>
          <div class="detail-box">
            <h6>
            <?php echo $property['title']; ?>
            </h6>
            <h2>
            <?php echo $property['description']; ?>
            </h2>
            <h6>
            <?php echo $property['city']; ?>
            </h6>
            <p>
            <?php echo $property['price']; ?>
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
      <div class="sale_container">
      
    <!--    <div class="box">
          <div class="img-box">
            <img src="images/Capture d’écran (63).png" width="90" alt="">
          </div>
          <div class="detail-box">
            <h6>
              chambre a loué
              <h4>
                <li>wc douche interne</li>
                <li>agoé logopé</li>
              </h4>
            </h6>
            <p>
             
            </p>
            <div class="btn-box">
              <a href="">
                loué
              </a>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/togo home.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              apertments house
            </h6>
            <p>
              Agence immobilière et de Conseils juridiques ; nous sommes spécialisés dans l’Achat, la Vente et la Location d’immeubles.
            </p>
            <div class="btn-box">
              <a href="">
                Visiter l'Agences
              </a>
            </div>
          </div>
        </div>  -->
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
                <a href="location.html">
                  Location 
                </a>
              </li>
              <li>
                <a href="vendre.html">
                   vendre
                </a>
              </li>
              <li>
                <a href="contact.html">
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
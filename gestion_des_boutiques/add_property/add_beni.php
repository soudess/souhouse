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

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $surface = $_POST['surface'];
    $city = $_POST['city'];

    // Insérer la nouvelle propriété dans la base de données
    $query = $db->prepare("INSERT INTO beni (title, description, price, surface, city) VALUES (?, ?, ?, ?, ?)");
    $query->execute([$title, $description, $price, $surface, $city]);

  
// Redirection vers la liste des propriétés
header('Location: \sohouse2\gestion_des_boutiques\sohouse.php');
exit();
}
?>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="d-flex justify-content-between align-items-center">
<h1>Liste des propriétés de beni-immo-trans</h1>
<a  href="\sohouse2\boutiques\gestion_des_boutiques\beni-immo.php"><button class="btn btn-primary">Ajouter un bien</button></a>
</div>

<form method="POST" action="" class=" vstack gap-1 p-5">
    <div class="row" >
       
            <label class="col" for="title">Titre :</label>
           <input class="col" type="text" name="title" required><br>
          <label class="col" for="description">Description :</label>
          <textarea class="col" name="description" required></textarea><br>
          
 
    </div>

    <label for="price">Prix :</label>
    <input type="number" name="price" required><br>

    <label for="surface">Surface :</label>
    <input type="number" name="surface" required><br>

    <label for="city">Ville :</label>
    <input type="text" name="city" required><br>

    <button type="submit">Ajouter</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
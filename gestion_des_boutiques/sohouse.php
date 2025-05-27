<?php
require_once 'db/beni_db.php';

// Récupérer la liste des propriétés depuis la base de données
$query = $db->query("SELECT * FROM beni");
$properties = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des propriétés</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body style="padding: 20px;">
<div class="d-flex justify-content-between align-items-center">
<h1>Liste des propriétés</h1>
<a  href="\sohouse2\index.php"><button class="btn btn-primary">ma boutique</button></a>
<a  href="add_property/add_beni.php"><button class="btn btn-primary">Ajouter un bien</button></a>
</div>
    
    
        
    
    <table class="table table-striped">
        <thead>
                    <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Surface</th>
            <th>Ville</th>
        </tr>
        </thead>
<tbody>
    <?php foreach ($properties as $property) : ?>
    <tr>
        <td><?php echo $property['title']; ?></td>
        <td><?php echo $property['description']; ?></td>
        <td><?php echo $property['price']; ?>Fcfa</td>
        <td><?php echo $property['surface']; ?>m²</td>
        <td><?php echo $property['city']; ?></td>
        <td>
            <a href="delete_property.php?id=<?php echo $property['id']; ?>"><button class="btn btn-danger">Supprimer</button></a>
        </td>
    </tr>
<?php endforeach; ?>
</tbody>
        



    </table>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>

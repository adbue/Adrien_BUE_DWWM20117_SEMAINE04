<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Liste des produits</title>
</head>
<body>
    <h1>Liste des produits</h1>
    <p>Bonjour <?php echo $prenom," ", $nom; ?> !</p><br> <!-- Exercice01 -->
    <h3>Liste des produits</h3><!-- Exercice02 -->
    <ul>
        <?php foreach ($brands as $value) :?>
            <li><?php echo $value; ?></li>
        <?php endforeach;?>
    </ul>

</body>
</html>
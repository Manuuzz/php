<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice2-1</title>
    <link rel="stylesheet" href="Index.css">
</head>
<body>
    <?php    
    $array = array (
        'nom' => 'Tourniquet',
        'prénom' => 'Emmanuel',
        'mdp' => 'Mot-De-Passe');

        echo "<p> Nom : $array[nom]</p> <p>Prénom : $array[prénom]</p>    Mdp : $array[mdp]";
    ?>
        <p><a href="/Site/">Accueil</a></p>
</body>
</html>
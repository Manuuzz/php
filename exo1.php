<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Exercice 1</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='exo1.css'>  
</head>
<body>   
    <?php 
        $NombreAleatoire = rand(0,100);   
    ?>

    <?php
    if($NombreAleatoire % 2 == 1){
        echo"<p class=rouge>$NombreAleatoire est impair</p>";
    }
    else{
        echo"<p class=bleu>$NombreAleatoire est pair</p>";
    }
    ?>
    <p><a HREF="http://192.168.64.116/Tourniquet/">Acceuil</a></p>
  


</body>
</html>
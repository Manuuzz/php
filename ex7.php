


<html>

<head><title>Exercice 7</title></head>

<body>

<form method="POST">
    <input type="text" id="name" name="Nom">
    <input type="text" id="name" name="Prénom">
    <input type="submit" id="value" value="Cliquer">
    
        <?php   
        session_start();
    if (isset($_POST['Nom'])) {
        echo $_POST['Nom'];
   }

   if (isset($_POST['Prénom'])) {
       echo $_POST['Prénom'];
   }
   
?>
    <p><a href="/Site/">Accueil</a></p>

</body> 

</html>
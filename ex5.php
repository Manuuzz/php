
<html>
    <head><title>Exercice 5</title></head>
    <body>
        <form action ="" method="POST">
        <input type="text" name="nom">
        <input type="submit" value="Cliquer">
        </form>

        <?php  
        if(isset($_POST['nom'])){
            echo $_POST['nom'];
        }


        ?>
        
        <p><a href="/Site/">Accueil</a></p>
        
    </body> 
</html>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

    <?php
       
        if(isset($_POST["Valider"])){
            if($_POST["password"]=="0107" && $_POST["login"]=="manu" ){
            echo "Bien joué Garçon";
           
            $_SESSION["EtatConnexion"]=true ;
            }else{
            if($_POST["password"]!="0107"){
                echo "Ce n'est pas le bon mdp";
            }
            if($_POST["login"]!="manu"){
                echo "Ce n'est pas le bon Login";
            }
           
            }
        }

        if(isset($_POST["Deconnexion"])){
            session_unset();
            session_destroy();
        }

        if((isset($_SESSION["EtatConnexion"]) && $_SESSION["EtatConnexion"]==true)){
            ?>
                <p>Bienvenue sur le site</p>

                <form action="" method="post" class="form-example">
                    <div class="form-example">
                    <div class="form-example">
                        <input type="submit" value="Deconnexion" name="Deconnexion" >
                    </div>
                </form>
            <?php
        }else{
            ?>

            <form action="" method="post" class="form-example">
                <div class="form-example">
                    <label for="login">Identifiant: </label>
                    <input type="text" name="login" id="login" required>
                </div>
                <div class="form-example">
                    <label for="password">Mot de Passe: </label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="form-example">
                    <input type="submit" value="Valider" name="Valider" >
                </div>
            </form>
            <?php
        }
    
        
    ?> 
<p><a href="/Tourniquet/">Accueil</a></p>
    

</body>
</html>
<html>
    
    <head><title>Exercice 3</title></head>

    <body>
        <?php
                $Table[0] = array ("Nom" => "Huet", "Prénom" => "Killyan", "MDP" => "1794");
                $Table[1] = array ("Nom" => "Tourniquet", "Prénom" => "Emmanuel", "MDP" => "3231");
                $Table[2] = array ("Nom" => "Dupontreue",  "Prénom" =>  "Theo", "MDP" => "8294");
        
                echo "<table>";

                for ($i = 0; $i <3; $i++) {
            
    
                    echo "<tr></tr>";
            
        
                foreach ($Table[$i] as $value) {
            
                    echo "<td>";
                    echo "$value";
                }
            }
                echo "</table>";

            ?>

        <p><a href="/Tourniquet/">Accueil</a></p>

    </body>

</html>
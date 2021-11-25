<html>

    <head><title>Exercice 4</title></head>

    <body>
        <?php

            $A = 15;
            $B = 12;
            $C = 4;
            $Delta;

            $Delta= ($B*$B-(4*$A*$C));

            if ($Delta > 0) {

                echo "L'équation a 2 solution réelles car Delta est positif et supérieur à zero : ";
                echo (-$B - sqrt ($Delta) / 2*$A);
                echo (-$B + sqrt ($Delta) / 2*$A);
            }

            if ($Delta == 0) {

                echo "L'équation a une solution réelles car Delta est egal a zero : ".-$B / 2*$A;
    
            }

            if ($Delta < 0 ) {

                echo "L'équation n'a pas de solutions réelles car Delta est negatif";
            }
        ?>
        <div>
            <p><a href="/Tourniquet/">Accueil</a></p>
        </div>
    </body>
</html>
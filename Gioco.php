<!DOCTYPE html>
<head>
    <?php 
        include("./Functions/ControlloNumero.inc");
        $NRand = rand(0,99);
        $NUtente = $_POST["var"];
        $conta = 0;
    ?>
    <link rel="stylesheet" href="./CSS/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="./CSS/MyStyle.css" type="text/css">
    </head>
    <body>
        <div class="container" style="text-align: center; background-color: #e6e8e6; border-radius: 10px;">
            <div class="row">
                <?php
                    do {
                        $conta++;
                        if(controllaNumero($NRand, $NUtente) == 0){ //Se 0 Vittoria
                            echo "<h1>Complimenti hai indovinato in </h1>". $conta . " tentativi";
                            echo "<form action='./Index.html'><input type='submit' value='Rigioca'></form>";
                        }elseif (controllaNumero($NRand, $NUtente) == -1) { //Se -1 dice il tuo numero è troppo piccolo
                            echo "<h1>Il tuo numero è troppo piccolo</h1>";
                            echo "<h2>Riprova</h2>";
                            echo "<form action='<?php echo '$_SERVER[PHP_SELF]'?>' method=''>";
                            echo "<input type='number' name='var'>";
                            echo "<input type='submit' value='Tenta!'>";
                            echo "</form>";

                        }elseif (controllaNumero($NRand, $NUtente) == 1) { //Se 1 dice il tuo numero è troppo grande
                            echo "<h1>Il tuo numero è troppo grande</h1>";
                            echo "<h2>Riprova</h2>";
                            echo "<form action='<?php echo '$_SERVER[PHP_SELF]'?>' method='POST'>";
                            echo "<input type='number' name='var'>";
                            echo "<input type='submit' value='Tenta!'>";
                            echo "</form>";
                        }
                    } while ($conta != 3);
                ?>
            </div>
        </div>
    </body>
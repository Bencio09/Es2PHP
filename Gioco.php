<!DOCTYPE html>
<head>
    <?php 
        include("./Functions/ControlloNumero.inc");
        if ($conta == 1) {
            $NRand = rand(0,99);
            $NUtente = $_POST["var"];
        }
        
    ?>
    <link rel="stylesheet" href="./CSS/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="./CSS/MyStyle.css" type="text/css">
    </head>
    <body>
        <div class="container" style="text-align: center; background-color: #e6e8e6; border-radius: 10px;">
            <div class="row">
                <?php
                    $NRand = $_POST[rand];
                        $conta = $_POST[tentativi] + 1;
                        if(controllaNumero($NRand, $NUtente) == 0){ //Se 0 Vittoria
                            echo "<h1>Complimenti hai indovinato in </h1> $conta tentativi
                           <form action='./Index.html' method='POST'>
                           <input type='submit' value='Rigioca'>
                           <input type='hidden' name='tentativi' value=$conta>
                           <input type='hidden' name='rand' value=$NRand>
                           </form>";
                        }elseif (controllaNumero($NRand, $NUtente) == -1) { //Se -1 dice il tuo numero è troppo piccolo
                            echo "<h1>Il tuo numero è troppo piccolo</h1>
                            <h2>Riprova</h2>
                            <form action='$_SERVER[PHP_SELF]' method='POST'>
                            <input type='number' name='var'>
                            <input type='submit' value='Tenta!' >
                            </form>";

                        }elseif (controllaNumero($NRand, $NUtente) == 1) { //Se 1 dice il tuo numero è troppo grande
                            echo "<h1>Il tuo numero è troppo piccolo</h1>
                            <h2>Riprova</h2>
                            <form action='$_SERVER[PHP_SELF]' method='POST'>
                            <input type='number' name='var'>
                            <input type='submit' value='Tenta!' class='btn btn-primary'>
                            </form>";
                        }
                ?>
            </div>
        </div>
    </body>
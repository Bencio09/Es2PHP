<!DOCTYPE html>
<head>
    <?php 
        include("./Functions/ControlloNumero.inc");
        
        $NUtente = $_GET["var"];
        
    ?>
    <link rel="stylesheet" href="./CSS/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="./CSS/MyStyle.css" type="text/css">
    </head>
    <body>
        <div class="container" style="text-align: center; background-color: #e6e8e6; border-radius: 10px;">
            <div class="row">
                <?php
                        $NRand = $_GET["rand"];

                        $conta = $_GET["tentativi"]++;
                        if ($_GET["tentativi"] <=3) {
                            
                            if(controllaNumero($NRand, $NUtente) == 0){ //Se 0 Vittoria
                                echo "<h1>Complimenti hai indovinato in $conta tentativi</h1>
                                
                                <button type='button' class='btn btn-primary' href='./Index.php'>Rigioca</button>
                                
                                ";
                            }elseif (controllaNumero($NRand, $NUtente) == -1) { //Se -1 dice il tuo numero è troppo piccolo
                                $conta = $_GET["tentativi"];
                                echo "<h1>Il tuo numero è troppo piccolo</h1>
                                <h2>Riprova</h2>
                                <h2>Tentativo n° $conta</h2>
                                <form action='$_SERVER[PHP_SELF]' method='GET'>
                                <input type='number' name='var'>
                                <input type='hidden' name='tentativi' value=$conta>
                                <input type='hidden' name='rand' value=$NRand>
                                <input type='submit' value='Tenta!' >
                                </form>";

                            }elseif (controllaNumero($NRand, $NUtente) == 1) { //Se 1 dice il tuo numero è troppo grande
                                echo "<h1>Il tuo numero è troppo piccolo</h1>
                                <h2>Riprova</h2>
                                <form action='$_SERVER[PHP_SELF]' method='GET'>
                                <input type='number' name='var'>
                                <input type='hidden' name='tentativi' value=$conta>
                                <input type='hidden' name='rand' value=$NRand>
                                <input type='submit' value='Tenta!' class='btn btn-primary'>
                                </form>";
                            }
                        }else {
                            echo "<div class='alert alert-danger' role='alert'>
                                    <h1>HAI PERSO!!!!!</h1>
                            </div>";
                        }
                ?>
            </div>
        </div>
    </body>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./CSS/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="./CSS/MyStyle.css" type="text/css">
    </head>
    <body>
        <div class="container" style="text-align: center; background-color: #e6e8e6; border-radius: 10px;">
            <div class="row" >
                <h1>IL GIOCO DELL'INDOVINA NUMERO</h1>
                <br>
                <h5><b>Ecco le regole: </b>Si deve indovinare nel minor numero di tentativi un numero compreso fra 0 e 99 estratto casualmente</h5>
                <br>
                <br>
                <br>
                <?php
                    $NRand = rand(0, 99);

                echo
                "<form action='./Gioco.php' method='POST'>
                    <h5>Inserisci il tuo numero   
                    <input type='number' max='99' min='0' style='border-radius:  5px;' name='var'> 
                    <input type='hidden' value='$NRand' name='rand'> 
                    <input type='submit' value='Tenta!' class='btn btn-primary'></h5>
                </form>"
                ?>
            </div>
        </div>
    </body>
</html>
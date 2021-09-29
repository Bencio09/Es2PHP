<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./CSS/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="./CSS/MyStyle.css" type="text/css">
    </head>
    <body>
        <div class="container margin-center" style="text-align: center; background-color: #e6e8e6;">
            <div class="row" >
                <h1>IL GIOCO DELL'INDOVINA NUMERO</h1>
                <br>
                <h5><b>Ecco le regole: </b>Si deve indovinare nel minor numero di tentativi un numero compreso fra 0 e 99 estratto casualmente</h5>
            </div>
            <div class="row">
                <form action="<?php echo "$_SERVER[PHP_SELF]";?>"></form>
            </div>
        </div>
    </body>
</html>
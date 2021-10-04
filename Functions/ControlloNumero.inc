<?php
    function controllaNumero($NRand, $NUtente){
        if($NRand == $NUtente){
            return 0;
        }elseif($NUtente < $NRand){
            return -1;
        }elseif ($NUtente > $NRand) {
            return 1;
        }
    }
?>
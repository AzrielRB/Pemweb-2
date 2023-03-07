<?php

    function keterangan($_nilai){
        if($_nilai > 55){
            return 'LULUS';
        }elseif($_nilai < 56){
            return 'TIDAK LULUS';
        }else{
            return 'TIDAK VALID';
        }
    }


    function grade($_nilai){
        if($_nilai <= 35){
            return 'E';
        }elseif($_nilai <= 55){
            return 'D';
        }elseif($_nilai <= 69){
            return 'C';
        }elseif($_nilai <= 84){
            return 'B';
        }elseif($_nilai <= 100){
            return 'A';
        }else{
            return 'TIDAK VALID';
        }
    }


?>
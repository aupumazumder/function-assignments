<?php 
    function bodyMassIndex($mass, $height){
        $bodyMassIndex= $mass/ ($height * $height);
            echo "The body mass index is $bodyMassIndex";
    }
    bodyMassIndex (90, 6);
?>
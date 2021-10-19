<?php
    include 'vars.php';

    include 'functions.php';

    echo '<table>'; 
    include 'entete_tableau.php';
    echo '<tbody>';
    foreach($monTableau as $key => $value){
        generateRowLine($value);
    }; 
    echo '</tbody>';
    echo '</table>';     
?>
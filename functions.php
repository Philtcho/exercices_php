<?php
function getPriceHT($priceTTC){
    return number_format($priceTTC / 1.2, 2, ',', ' ');
}

function generateRowLine($tab){
    echo '<tr>';
    echo '<td>';
    echo $tab[0];
    echo '</td>';
    echo '<td>';
    echo $tab[1];
    echo '</td>';
    echo '<td>';
    echo getPriceHT($tab[1]);
    echo '</td>';
    if ($tab[1] <= 12){
        echo '<td style="color:blue">';           
    }
    else{
        echo '<td>';                
    }
    echo $tab[2];
    echo '</td>';
    echo '</tr>';     
}
?>
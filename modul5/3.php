<?php
        $ar=[283,  182,  381,  119,  391,  591,  123,  124,  284,  215,  312];
        sort($ar);
        echo "array : "; 
        print_r($ar);
        echo "<br />";
        echo "nilai terkecil : ".$ar[0]. "<br />"; 
        echo "nilai terbesar : ".$ar[count($ar)-1]. "<br />"; 
        echo "rata-rata : ".(array_sum($ar)/count($ar)).' <br />';
    ?>
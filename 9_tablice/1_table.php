<?php
//teblice indeksowane numerycznie

$colors = array('biały', 'zielony', 'czerwony', 'aqua');
echo '<pre>';
print_r($colors);
echo '</pre>';

echo 'Pierwszy element tablic:',$colors[0],'<br>';
echo "Ilość elementów w tablicy:",count($colors),'<br>';

for ($i=0; $i < count($colors); $i++){
    if ($i == count($colors) -1) {
        echo $colors[$i];
    }else{
        echo $colors[$i],', ';
    }
    }
?>
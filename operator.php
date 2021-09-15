<?php

function algoritma($bil1,$bil2){

    $temp = 0;
    for($i=1;$i <= $bil1;$i++){
        if($bil1 - $bil2 > -1 ){
            $temp += 1;
            $bil1= $bil1 - $bil2;
        }
    }
    return $temp;
}

echo algoritma(15,4);

?>

<?php

for($i = 1; $i <= 200; $i++){
    if($i % 3 == 0 && $i % 5 == 0){
        echo "Foo Bar <br>";
    }
    elseif($i % 3 == 0){
        echo "Foo <br>";
    }elseif($i % 5 == 0){
        echo "Bar <br>";
    }else{
        echo $i.' <br> ';
    }
}

?>
<?php

$aplikasi[1]= 'gtAkademik';
$aplikasi[2]= 'gtFinansi';
$aplikasi[3]= 'gtPerizinan';
$aplikasi[4]= 'eCampuz';
$aplikasi[5]= 'eOviz';

$i = 1;
do{
    echo "<br/> $aplikasi[$i]";
    $i++; 
}while($i < count($aplikasi))
?>
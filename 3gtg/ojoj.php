<?php
$a = 6;
echo gettype($a).'<br>';
$a = 123.5;
echo gettype($a). '<br>';

$t = [1 => 'wartosc1', w => 'element_drugi', 3 => 'wawrtosc3'];

if( is_array($t)){
    echo 'true';
}else{
    echo 'false';
}

?>
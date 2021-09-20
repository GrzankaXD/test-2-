<form action="ojoj.php" method="post">
<input name="a" type="number" />
<input value="oblicz" type="submit" />
</br>


<?php

//define('imie', 'Mikołaj');

//define('kierunek', 'programista');

//echo "Mam na imie " . imie .", jestem uczniem szkoly sredniej na kierunku " . kierunek . ".";
$a = @$_POST['a'];


echo "Złoty na euro: " . $a / 4.60 . " euro. <br>"; 
echo "Euro na złotych: " . $a * 4.60 . " zł."; 

?>

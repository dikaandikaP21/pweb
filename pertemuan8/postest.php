<?php
echo ("============ File 1 =========== <br>");
require "latihan1.php";
echo '<br> ============================== <br>';

for ($a = 0; $a < 10; $a++) {
    echo ("Nilai A= $a ->");

    if ($a % 2 == 0) {
        echo "Nilai $a adalah bilangan genap <br>";
    } else {
        echo "Nilai $a adalah bilangan ganjil <br>";
    }
}
$b = [1, 2, 3, 4, 5];
print_r($b);

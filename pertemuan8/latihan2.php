<?php
for ($a = 0; $a < 10; $a++) {
    echo ("Nilai A= $a ->");

    if ($a % 2 == 0) {
        echo "<h1>Nilai $a adalah bilangan genap </h1><br>";
    } else {
        echo "Nilai $a adalah bilangan ganjil <br>";
    }
}
$b = [1, 2, 3, 4, 5];
print_r($b);

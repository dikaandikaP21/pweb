<?php
// $a = 5;
// $b = 2;
$a = "5";
$b = "2";
$hasilJumlah = $a + $b;
echo ($hasilJumlah);
echo '<br>';

$hasilKali = $a * $b;
echo $hasilKali . "<br><br>";

if ($a == $b) {
    echo ("a sama dengan b");
} else if ($a > $b) {
    echo ("a lebih besar dari b");
} else {
    echo ("a lebih kecil dari b");
}

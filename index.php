D3<?php

echo 'Hello, World';

$data = 'Pemrogaman Web';
$number = 10;
echo "<br />";
echo $data;
echo "<br />";
echo $number;

$dataMahasiswa = ['fiksar', 'oksan', 'aban'];

array_push($dataMahasiswa, 'fiksar');
echo "<br />";
echo $dataMahasiswa[3];

$a = 30;
$b = 35;

echo "<br />";
echo $a * $b;

if ($a < $b) {
    echo '<br />';
    echo 'benar (true)';
}else{
    echo '<br />';
    echo 'salah (false)';
}

$c = 58;
$d = 50;
if ($a != $b && $c < $d){
    echo '<br />';
    echo 'benar (true)';
}else {
    echo '<br />';
    echo 'salah (false)';
}

if ($a != $b || $c < $d){
    echo '<br />';
    echo 'benar (true)';
}else {
    echo '<br />';
    echo 'salah (false)';
}


$hari = "Senin";

switch ($hari) {
    case "Senin":
        echo "Hari kerja";
        break;
    case "Minggu":
        echo "Libur";
        break;
}
?>
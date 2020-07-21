<?php 
$mensagem = "CALCULOS\n";

$a = 10;
$b = 37;
$br = "<br><br>";

echo "WHILE:<br>";
$i = 0;
while ($i <= $a) {
    print $i;
    $i++;
}

echo $br;
echo "DO .. WHILE:<br>";
$i = 0;
do {
    print $i;
    $i++;
} while ($i <= $a);

echo $br;
echo "FOR: <br>";
for ($i=0; $i <= $a; $i++) { 
    print $i;
}

echo $br;
echo "FOREACH: <br>";
$i = [0,1,2,3,4,5,6,7,8,9,10];
foreach ($i as $j) {
    print $j;
}


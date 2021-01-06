
<?php
$array=[
'Dương Đức Tiến',
'TienDDPH08728',
"3",
];
echo count($array);
 echo "<br>";
 echo"<br>";
$array = [
    'TT' => 'toi',
    'TT1' => 'đang  online'
];
print_r(array_values($array));

echo"<br>";
echo"<br>";
$array = [
    'domain' => 'toi',
    'description' => ' học  online'
];
print_r(array_pop($array));
echo"<br>";
echo"<br>";

$array = [
    'domain' => 'Cao Đẳng',
    'description' => 'PPT'
];
print_r(array_push($array, 'POlY'));
echo"<br>";
echo"<br>";

$array = [
    'domain' => 'FPT',
    'description' => 'POLY'
];
print_r(array_shift($array));
?>
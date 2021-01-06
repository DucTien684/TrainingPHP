<?php
$data = 'Dương Đức Tiến';
if (isset($data))
    echo 'Biến này tồn tại';
else
    echo 'Biến này không tồn tại';

echo "<br>";
echo "<br>";



$data = [];
if (empty($data))
    echo 'Biến này rỗng';
else
    echo 'Biến này không rỗng';

echo "<br>";
echo "<br>";

$data = [];
if (is_string($data))
    echo 'Biến này là chuỗi';
else
    echo 'Biến này không phải là chuỗi';

    echo "<br>";
     echo "<br>";

$data = 1555.5;
if (is_numeric($data))
    echo 'Biến này là số';
else
    echo 'Biến này không phải là số';

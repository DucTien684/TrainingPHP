<!-- Câu lệnh switch -->
<?php
$number = 1;
switch ($number)
{
    case 0 :
        echo 'Số không';
        break;
    case 1:
        echo 'Số một';
        break;
    case 2:
        echo 'Số hai';
        break;
    case 3:
        echo 'Số ba';
        break;
    case 4 :
        echo 'Số bốn';
        break;
    default:
        echo 'Không tìm thấy';
        break;
}
?>

<!--câu lẹnh Switch và if-->
<?php
echo "<br>";
$number = 10;
if ($number == 0){
    echo 'Số không';
}
else if ($number == 1){
    echo 'Số một';
}
else if ($number == 2){
    echo 'Số hai';
}
else if ($number == 3){
    echo 'Số ba';
}
else if ($number == 4){
    echo 'Số bốn';
}
else {
    echo 'Không tìm thấy';   
}
?>
<!-- giả phương trình bậc nhất -->
<?php 
echo "<br>";
$a=1;
$b=2;
if($a==0)
{
    if($b==0)
{
    echo 'phương trình có vô số nghiệm';
}
else
{
    echo 'phiowng trình vô nghiêm';
}
}else{
    $x=-$b/$a;
    echo 'nghiệm là '.$x;
}
?>

<?php
echo "<br>";
$diem=6.2;
if($diem<5){
    echo'yeu';
}else if($diem<6.5){
echo ' Trung Bình';
}elseif($diem<7.5){
    echo'khá';
}elseif($diem<9){
    echo'Giỏi ';
}else{
    echo'Xuất sắc';
}
?>


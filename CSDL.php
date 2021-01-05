<?php
$host ='localhost';
$user='root';
$pass='';
$conn = new mysqli($host,$user,$pass);
if($conn->connect_error)
{
    echo ('Kết nối thành công:'.$conn->connect_error);
}else
{
    echo 'kết nối không thành công';
}

?>
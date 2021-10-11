<?php 
include "../db_mysqli.php"; 
$id = $_POST['id']; 
$pw = $_POST['pw']; 
$name = $_POST['name']; 
$join_date = date("Y-m-d H:i:s", time());

$result = mysqli_query($con, "INSERT INTO member(id, pw, name, join_date)VALUES('".$id."','".$pw."','".$name."','".$join_date."')") 
or die ("알수없는 오류"); 

echo "아이디 : ".$id."이름 : ".$name;

?>
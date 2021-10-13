<?php 
include "../db_mysqli.php";

$title = $_POST['title']; 
$content = $_POST['content']; 
$id = $_SESSION['id']; 
$date = date("Y-m-d H:i:s", time());

$result = mysqli_query($con, "INSERT INTO board(id, title, content, date)VALUES('".$id."','".$title."','".$content."','".$date."')") 
or die ("알수없는 오류"); 

if($result){
    echo "<script>alert('글쓰기 성공!'); location.href='/php_test/main.php';</script>";
}

?>
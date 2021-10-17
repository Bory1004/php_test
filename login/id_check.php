<?php
include "../db_mysqli.php";

$id = $_GET['id'];

$result = mysqli_query($con, "select * from member where id='".$id."'") or die ("알수없는 오류");
$count = mysqli_num_rows($result);

if($count == 0){
    echo("아이디 사용 가능");
}else{
    echo("중복된 아이디");
}

mysqli_close($con);
?>
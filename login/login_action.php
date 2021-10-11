<?php 
include "../db_mysqli.php"; 

$id = $_POST['id']; 
$pwd = $_POST['pw'];

if($id == "" || $pwd == ""){
    echo "<script>alert('모두 빈칸');</script>";
    echo '<script> location.href="/php_test/login/login.php"; </script>'; 
} else { 
    $sql = mysqli_query($con,"select * from member where id='".$id."'") or die ("알수없는 오류"); 
    $member = $sql->fetch_array(); 
    //$hash_pwd = $member['pw'];

    //if(password_verify($pwd, $hash_pwd)) {
    if($member['pw'] == $pwd) {
        
        $_SESSION['id'] = $member["id"]; 
        $_SESSION['name'] = $member["name"]; 
        echo "<script>alert('로그인 성공!'); location.href='/php_test/main.php';</script>"; 
    } else{
        echo "<script>alert('아이디 혹은 비밀번호를 확인하세요.'); history.back();</script>"; 
        } 
    }

?>
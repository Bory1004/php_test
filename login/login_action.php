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

    if($member['pw'] == $pwd) {
        if($member['grade'] > 3){
            $_SESSION['id'] = $member["id"]; 
            $_SESSION['name'] = $member["name"]; 
            echo "<script>alert('사용자 로그인 성공!'); location.href='/php_test/main.php';</script>";
        }else{
            $_SESSION['id'] = $member["id"]; 
            $_SESSION['name'] = $member["name"]; 
            echo "<script>alert('관리자 로그인 성공!'); location.href='/php_test/admin/admin_main.php';</script>"; 
        }
    } else{
        echo "<script>alert('아이디 혹은 비밀번호를 확인하세요.'); history.back();</script>"; 
    } 
}

mysqli_close($con);

?>
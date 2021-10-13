<?php
    session_start();

    $result = session_destroy();
    if($result){
        echo "<script>alert('로그아웃 성공!'); location.href='/php_test/main.php';</script>";
    }
?>
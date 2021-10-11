<?php
    session_start();

    $host = "localhost";
    $user = "root";
    $pw = "mysql1234";
    $dbname = "test";
    
    try { 
        //$con = mysqli_connect($host, $user, $pw, $dbname);
        $con = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $user, $pw);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "서버와의 연결 성공!";

    }catch(PDOException $ex){
        echo "서버와의 연결 실패! : ".$ex->getMessage()."<br>";
    }

    function query($query){
        global $con;
        return $con->query($query);
    }
?>
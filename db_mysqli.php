<?php
    session_start();

    $host = "localhost";
    $user = "root";
    $pw = "mysql1234";
    $dbname = "test";

    $con = mysqli_connect($host, $user, $pw, $dbname);
    $con->set_charset("utf8");
    // if (mysqli_connect_errno()){
    //     echo "Failed to connect to MySQL: " . mysqli_connect_error();
    // } else{
    //     echo "연결 성공!";
    // }

    function query($query){
        global $con;
        return $con->query($query);
    }
?>
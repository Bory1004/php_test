<?php 
include "db_mysqli.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메인페이지</title>
</head>
<style>
    table, td, th {
        width: 500px;
        border : 1px solid black;
        border-collapse : collapse;
    };

</style>
<body>  
    <h1>
        <a href="/php_test/main.php">메인페이지</a>
    </h1>
    <a href="/php_test/login/select.php"><button type="button">전체 회원 조회하기</button></a> &nbsp;<br />
    <?php
    
    if(isset($_SESSION['id'])) {
        echo $_SESSION['id'];?>님 안녕하세요! <br/>
        <a href="/php_test/login/logout.php">로그아웃</a>
        <a href="/php_test/mypage/mypage_view.php">마이페이지</a>
        <a href="/php_test/board/board_write.php">글쓰기</a>
        <br/>
        <?php
        }
        else {
        ?>       
        <a href="/php_test/login/login.php">로그인</a>
        <a href="/php_test/login/join.php">회원가입</a>
        <br />
        <?php   
        }
        ?>
        <table> 
        <th>seq</th> 
        <th>제목</th> 
        <th>작성자</th> 
        <th>날짜</th> 
        <th>조회수</th>
        <br/>
        <?php
        $sql = query("select * from board order by seq desc") 
        or die ("알수없는 오류");
        while($data = $sql->fetch_array()) { ?>
        <tr> 
            <td><?php echo $data["seq"]; ?></th> 
            <td><?php echo $data["title"]; ?></th> 
            <td><?php echo $data["content"]; ?></th> 
            <td><?php echo $data["date"]; ?></th> 
            <td><?php echo "조회수" ?></th> 
        </tr>
        <?php
        }
        ?>
</body>
</html>
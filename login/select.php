<?php include "../db_mysqli.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원조회</title>
</head>
<style>
    table, td, th {
        width: 600px;
        border : 1px solid black;
        border-collapse : collapse;
    };

</style>
<body>
    <table> 
        <thead>전체 회원 조회</thead>
        <th>seq</th> 
        <th>id</th> 
        <th>pw</th> 
        <th>name</th> 
        <th>join_date</th>
        <th>grade</th>
        <th>code</th>
        <?php $sql = query("select * from member"); 
        while($data = $sql->fetch_array()) { ?>
            <tr> 
                <td><?php echo $data["seq"]; ?></th> 
                <td><?php echo $data["id"]; ?></th> 
                <td><?php echo $data["pw"]; ?></th> 
                <td><?php echo $data["name"]; ?></th> 
                <td><?php echo $data["join_date"]; ?></th>
                <td><?php echo $data["grade"]; ?></th> 
                <td><?php echo $data["code"]; ?></th>
            </tr>
        <?php 
    } 
    ?>
</body>
</html>
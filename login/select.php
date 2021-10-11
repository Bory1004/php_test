<?php include "../db_mysqli.php"; ?> 
<table> 
    <th>seq</th> 
    <th>id</th> 
    <th>pw</th> 
    <th>name</th> 
    <th>join_date</th> 
    <?php $sql = query("select * from member"); 
    while($data = $sql->fetch_array()) { ?>
        <tr> 
            <td><?php echo $data["seq"]; ?></th> 
            <td><?php echo $data["id"]; ?></th> 
            <td><?php echo $data["pw"]; ?></th> 
            <td><?php echo $data["name"]; ?></th> 
            <td><?php echo $data["join_date"]; ?></th> 
        </tr> 
    <?php 
} ?>
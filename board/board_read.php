<?php 
include "../db_mysqli.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 읽기</title>
</head>
<body>
    <?php
        $bno = $_GET['seq'];
        $hit = mysqli_fetch_array(query("select * from board where seq ='".$bno."'"));
		$hit = $hit['count'] + 1;
		$fet = query("update board set count = '".$hit."' where seq = '".$bno."'");
		$sql = query("select * from board where seq='".$bno."'"); /* 받아온 idx값을 선택 */
		$board = $sql->fetch_array();
	?>
<!-- 글 불러오기 -->
<div id="board_read">
	<h2>제목 : <?php echo $board['title']; ?></h2>
		<div id="user_info">
			아이디 : <?php echo $board['id']; ?> (<?php echo $board['date']; ?>) 조회:<?php echo $board['count']; ?>
				<div id="bo_line"></div>
			</div>
			<div id="bo_content">
				내용 : <?php echo nl2br("$board[content]"); ?>
			</div>
	<!-- 목록, 수정, 삭제 -->
	<div id="bo_ser">
		<ul>
			<li><a href="/php_test/main.php">[목록으로]</a></li>
			<li><a href="modify.php?seq=<?php echo $board['seq']; ?>">[수정]</a></li>
			<li><a href="delete.php?seq=<?php echo $board['seq']; ?>">[삭제]</a></li>
		</ul>
	</div>
</div>
</body>
</html>
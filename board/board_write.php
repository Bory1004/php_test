<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판 작성</title>
</head>
<body>
    <form action="/php_test/board/board_insert.php" method="post">
        제목 : <input type="text" name="title"><br>
        내용 : <input type="text" name="content"><br>
        <input type="submit" value="등록">
    </form>
</body>
</html>
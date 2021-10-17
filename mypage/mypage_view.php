<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>마이페이지</title>
</head>
<body>
    <h2>마이페이지</h2>
    <form action="/php_test/mypage/admincode_ck.php" method="post">
        관리자코드 : <input type="text" name="admincode"><span id="admin_msg"></span>
        <input type="submit" value="인증하기">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
</head>
<body>
    <form action="/php_test/login/login_action.php" method="post">
        아이디 : <input type="text" name="id"><br>
        비밀번호 : <input type="text" name="pw"><br>
        <input type="submit" value="로그인">
        <a href="/php_test/login/join.php">회원가입</a>
        <a href="#">비밀번호 찾기</a>
    </form>
</body>
</html>
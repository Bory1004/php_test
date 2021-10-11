<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <form method="POST" action="/php_test/login/insert.php"> 
        <input type="text" name="name" placeholder="Name" /> <br /> 
        <input type="text" name="id" placeholder="ID" /> <br /> 
        <input type="password" name="pw" placeholder="Password" /><br /> 
        <button type="submit">제출</button><br /> 
        <a href="select.php"><button type="button">필드 조회하러 가기</button></a> &nbsp;<br />
    </form>
</body>
</html>
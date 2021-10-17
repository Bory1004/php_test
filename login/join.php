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
        <input type="text" id="id" name="id" placeholder="ID" /> <span id="id_ck"></span> <br />
        <input type="password" name="pw" placeholder="Password" /><br />
        <input type="hidden" name="grade" value="5" />
        <button type="submit">가입</button><br /> 
        <a href="select.php"><button type="button">전체 회원 조회하기</button></a> &nbsp;<br />
    </form>
</body>
</html>
<script src="//code.jquery.com/jquery.min.js"></script>
<script>
    $(function(){      
        $("#id").blur(function(){
            let id_in = $('#id').val();
            //console.log(id_in);
            $.ajax({
                url: "/php_test/login/id_check.php",
                type: "get",
                data:{
                    id:id_in,
                }
            }).done(function(data){
                $('#id_ck').text(data);
            })
        })       
    })

</script>
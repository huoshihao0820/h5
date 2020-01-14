<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/jquery.js"></script>
    <title>登陆</title>
</head>
    <body>
    <div>
        <a href="{{ url('/test/login') }}"><div class="div" name="name">用户名登陆</div></a>
        <a href="{{ url('/test/login2') }}"><div class="div" name="email">邮箱登陆</div></a>
        <a href="{{ url('/test/login3') }}"><div class="div" name="mobile">手机号登陆</div></a>
    </div>
        <table>
            <div id="email">
                <form action="{{ url('/test/login')}}" method="POST" >
                    <tr>
                        <td>邮箱</td>
                        <td><input type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td>密码</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="登陆"></td>
                    </tr>
                </form>
            </div>
        </table>
    </body>
</html>
<script>
    $(document).on('click','.div',function () {
        var xx=$(this).attr('name').val();
        alert(xx);
        $('#name').hidden();
        $('#email').hidden();
        $('#mobile').hidden();
    })


</script>
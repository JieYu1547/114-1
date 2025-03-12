<html>
    <head>
        <title>註冊會員</title>
        <meta charset="UTF-8">
        <script>
<?php
    if(isset($_POST["acct"])) {
        if(strcmp($_POST["pass1"],$_POST["pass2"]))
        print("<script>alert('密碼不一致');<scrpt>");
        } else {
            $fp=fopen("member.csv","a");
            fputcsv($fp,[$_POST["acct"],$_POST["name"],
            passWord_hash($_POST["pass1"],PASSWORD_DEFAULT)]);

            fclose($fp);
        }
?>
        </script>
    </head>
    <body>
        <H1>註冊會員</H1>
        <form method="post">
            <p>帳號：<input type="text" name="acct"></p>
            <p>顯示名稱：<input type="text" name="name"></p>
            <p>密碼：<input type="password" name="pass1"></p>
            <p>確認密碼：<input type="password" name="pass2"></p>
            <p><input type="submit"></p>
        </form>
    </body>
</html>
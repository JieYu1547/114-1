<html>
    <head>
        <title>註冊會員</title>
        <meta charset="UTF-8">
        <script>
<?php
    if(isset($_POST["acct"])) {
        $db = new mysqli("localhost", "root", "", "database");
        $sql = sprintf("SELECT * FROM account WHERE acc='%s'",$_POST["acct"]);
        $res = $db->query($sql);
        if($res->num_rows<=0) {
            printf("alert('無會員資料，請通知管理員');");
        } else {
            $rows = $res->fetch_assoc();
            if(password_verify($_POST["pass"],$row["pass"])) {
                printf(alert"('歡迎登入，%s');
            }
        }
    }

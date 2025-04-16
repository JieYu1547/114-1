<html>
    <head>
        <title>註冊會員</title>
        <meta charset="UTF-8">
        <script>
<?php
$db = new mysqli("localhost", "root", "", "database");
$sql = sprintf("SELECT * FROM account WHERE acc='%s'",$_POST["acct"]);
$res = $db->query($sql);
if($res->num_rows>0) {
    printf("alert('會員已存在')")
} else {
    $sql
}
$mysqli->query("DROP TABLE IF EXISTS test");
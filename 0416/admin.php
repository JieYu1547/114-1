<html>
    <head>
        <title>管理頁面</title>
        <meta charset = "UTF-8">
        <script>
<?php
if(isset($_GET["act"])) {
    $db = new mysqli("localhost", "root", "", "database");
    switch($_GET["act"]) {
        case "del":
            $db->query("DELETE FROM account WHERE idno=".$_GET["id"]);
            break;
        case "chpw":
            $sql->sprintf("UPDATE account SET pass='%s' WHERE idno='%d'",password_hash($_GET["pw"],PASSWORD_DEFAULT),$_GET["id"]);
            $db->query($sql);
            break;
        //default:
    }
    printf("location.href='mysql_lodin.php';");
}
?>

    function del(id) {
        if(confirm("")) {
            location.href=`?act=del&id=${id}`;
        }
    }
    function chpw(id) {
        if(confirm("")) {
            pw=prompt("");
            location.href=`?act=chpw&id=${id}&pw=${pw}`;
        }
    }
        </script>
    </head>
    <body>
        <table border=1 cellspacing=0 cellspadding=5>
<?php
    $db = new mysqli("localhost", "root", "", "database");
    $sql = sprintf("SELECT * FROM account ORDER BY acct ASC");
    $all = $res->fetch_all(MYSQLI_ASSOC);

    printf("<tr><th>%s</th></tr>\n",join("</th><th>",["帳號","名稱","刪除"]));
    foreach($all as $row) {
        $line = [$row["acct"],$row["name"],sprintf("<button onclick=\"del('%d');\">刪除</button> <button onclick=\"chpw('%d');\">修改密碼</button>",$row["idno"],$row["idno"])];
        printf("<tr><td>%s</td></tr>\n",join("</td><td>",$line));
    }
?>
        </table>
    </body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>for文練習</title>
</head>
<body>
<table>
    <?php
$pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517809-fainal;charset=utf8',
'LAA1517809','Pass0210');
$sql=$pdo->prepare('delete from game where id=?');
    if($sql->execute([$_REQUEST['id']])){
        echo '削除に成功しました';
    }else{
        echo '削除に失敗しました';
    }

?>
</table>
</body>
</html>
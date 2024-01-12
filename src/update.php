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
$sql=$pdo->prepare('update  game set name=?,kaisya=? where id=?');
if($sql->execute(
    [htmlspecialchars($_REQUEST['name']),$_REQUEST['kaisya'],$_REQUEST['id']]
)){
    echo '更新に成功しました';
}else{
    echo '更新に失敗しました';
}
?>
</table>
</body>
</html>
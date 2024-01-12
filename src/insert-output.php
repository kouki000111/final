<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>for文練習</title>
</head>
<body>
    <?php
$pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517809-fainal;charset=utf8',
'LAA1517809','Pass0210');
$sql=$pdo->prepare('insert into game values(null,?,?)');
if($sql->execute([$_REQUEST['name'],$_REQUEST['kaisya']])){
    echo '追加に成功しました';
}else{
    echo '追加に失敗しました';
}
?>
</body>
</html>
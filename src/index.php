<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>for文練習</title>
</head>
<body>
<table>
    <th>ゲームid</th><th>ゲーム名</th><th>会社名</th>
    <?php
$pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517809-fainal;charset=utf8',
'LAA1517809','Pass0210');
foreach($pdo->query('select * from game')as $row){
    echo '<tr>';
    echo '<td>',$row['id'],'</td>';
    echo '<td>',$row['name'],'</td>';
    echo '<td>',$row['kaisya'],'</td>';
    echo '<td>';
    echo '<a href="sakuzyo.php?id=', $row['id'],'">削除</a>';
    echo '</td>';
    echo '</tr>';
    echo "\n";
    
}
echo '<a href="tuika1.php">追加</a>';
echo '<a href="update1.php">更新</a>';
?>
</table>
</body>
</html>
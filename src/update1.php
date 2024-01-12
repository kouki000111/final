<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>for文練習</title>
</head>
<body>
<table>
    <th>ゲームid</th><th>ゲーム名</th><th>会社名</th><th></th>
    <?php
$pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517809-fainal;charset=utf8',
'LAA1517809','Pass0210');
foreach($pdo->query('select * from game')as $row){
    echo '<form action="update.php"method="post">';
    echo '<tr>';
    echo '<input type="hidden" name="id"value="',$row['id'],'">';
    echo '<td>',$row['id'],'</td>';
    echo '<td>';
    echo '<input type="text" name="name"value="',$row['name'],'">';
    echo '</td>'; 
    echo '<td>';
    echo '<input type="text" name="kaisya"value="',$row['kaisya'],'">';
    echo '</td>';
    echo '<td>';
    echo '<input type="submit" value="更新">';
    echo '</form>';
    echo '</td>';
    echo '</tr>';
    echo "\n";
    
}
?>
</table>
</body>
</html>
<?php
$goodsList =[
    'テレビ',
    'パソコン',
    '携帯電話',
    '冷蔵庫',
    '洗濯機'
];
$id = $_GET['id'];
$itemMane = $goodsList[$id];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>携帯電話が選択されました。</p>
<p><a href="lists.php">一覧ページに戻る</a></p>
</body>
</html>

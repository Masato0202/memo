<?php require('dbconnect.php');?>
<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>メモ帳</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">メモ</h1>
</header>

<main>
<h2>Practice</h2>

<?php
    $statement = $db->prepare('update memos SET memo=? where id=?');
    $statement->execute(array($_POST['memo'],$_POST['id']));
?>
    <p>メモの内容を変更しました</p>
    <p><a href="index.php">戻る</a></p>
</main>
</body>
</html>

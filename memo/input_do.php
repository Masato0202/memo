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
<pre>
    <?php
    /*ここからPHP*/    
    $statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
    $statement->execute(array($_POST['memo']));
    echo 'メモが登録されました';    
    ?>
</pre>
<p><a href="index.php">戻る</a></p>
</main>
</body>    
</html>
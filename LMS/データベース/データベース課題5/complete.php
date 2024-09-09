<?php

//セッション開始
session_start();

$name=$_SESSION['name'];
$kana=$_SESSION['kana'];
$tel=$_SESSION['tel'];
$email=$_SESSION['email'];
$body=$_SESSION['body'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>お問い合わせフォーム お問合せ完了画面</title>
    <link rel="stylesheet"href="complete.css">


</head>

<body>


<div class="container-fluid">
<a class="title">お問い合わせ</a>
    <div class="row">
        <a class="topics">お問合せ頂きありがとうございます。</a>
        <a class="topics">送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。</a>
        <a class="topics">なお、ご連絡までに、お時間をいただく場合もございますので予めご了承ください。</a>
        <div class="button-area">
            <a href="theme4.php"><button class='topBtn' style=display:flex;justify-content:center;>TOPに戻る</button></a>
        </div>
    </div>

<?php

require_once('pdo.php');
$sql='INSERT INTO contacts(name,kana,tel,email,body)VALUES("'.$name.'","'.$kana.'","'.$tel.'","'.$email.'","'.$body.'")';

$stmt=$pdo->prepare($sql);
$stmt->execute();

//最後にセッション情報を破棄
session_destroy();
$pdo=null;
?>


</div>
</body>
</html>

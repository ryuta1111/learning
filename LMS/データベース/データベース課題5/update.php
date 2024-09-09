<?php
require_once("pdo.php");

$id=$_GET['id'];

//更新対象の投稿内容を取得

$sql="SELECT*FROM contacts WHERE id=:id";
$stmt=$pdo->prepare($sql);
$stmt->bindParam(":id",$id);
$stmt->execute();


//取得できたタイトルと本文を変数に入れておく
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$name=$row['name'];
$kana=$row['kana'];
$tel=$row['tel'];
$email=$row['email'];
$body=$row['body'];

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>お問い合わせフォーム 更新画面</title>
    <link rel="stylesheet"href="update.css">



</head>

<body>

<div class="container-fluid">
    <div class="row">

        <a class="title">更新画面</a>
        <form action="update_complete.php" method="post">
            <div>
                <label for="name">氏名</label>
                <input type="text" name="name" id="name" class="user"maxlength="10" placeholder="名前" value="<?php echo $name; ?>">
            </div>
            <div>
                <label for="kana">フリガナ</label>
                <input type="text" name="kana" id="kana" class="user"maxlength="10" placeholder="カナ" value="<?php echo $kana; ?>">
            </div>
            <div>
                <label for="tel">電話番号</label>
                <input type="text" name="tel" id="tel" class="user" placeholder="電話番号" value="<?php echo $tel; ?>">
            </div>
            <div>
                <label for="email">メールアドレス</label>
                <input type="email" name="email" id="email" class="user" placeholder="メールアドレス" value="<?php echo $email; ?>">
            </div>
            <br>
            <div>
                <label for="body" class="heading">お問い合わせ内容をご記入ください</label>
                <input name="body" id="body" placeholder="お問い合わせ内容" value="<?php echo $body; ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <div class="button-area">
                <a class="btn_cancel" href="contact_confirm.php">キャンセル</a>
                <input type="submit" name="btn_submit" value="更新">
            </div>
        </form>

    </div>

</div>

</body>
</html>






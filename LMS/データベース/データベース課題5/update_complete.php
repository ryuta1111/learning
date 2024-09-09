<?php
require_once("pdo.php");

$id=$_POST['id'];
$name=$_POST['name'];
$kana=$_POST['kana'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$body=$_POST['body'];

try{
    $sql="UPDATE contacts SET name=:name,kana=:kana,tel=:tel,email=:email,body=:body WHERE id=:id";
    $stmt=$pdo->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->bindParam(":name",$name);
    $stmt->bindParam(":kana",$kana);
    $stmt->bindParam(":tel",$tel);
    $stmt->bindParam(":email",$email);
    $stmt->bindParam(":body",$body);
    $stmt->execute();

}catch(PDOException $e){
    echo $e->getMessage();
    die();
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>お問い合わせフォーム 更新完了画面</title>
    <link rel="stylesheet"href="update_complete.css">


</head>

<body>


<div class="container-fluid">
<a class="title">編集完了</a>
    <div class="row">
        <p>ID:<?php echo $id?>を編集しました。</p>
        <div class="button-area">
            <a href="contact_confirm.php"><button class='topBtn' style=display:flex;justify-content:center;>戻る</button></a>
        </div>
    </div>




</div>
</body>
</html>
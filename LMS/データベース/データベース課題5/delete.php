
    

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>お問い合わせフォーム 削除完了画面</title>
    <link rel="stylesheet"href="delete.css">



</head>

<body>

<div class="container-fluid">
    <div class="row">
        <a class="title">削除完了</a>
        <p>ID:<?php echo $id?>を削除しました。</p>
        <div class="button-area">
        <a href="contact_confirm.php"><button class='topBtn' style=display:flex;justify-content:center;>戻る</button></a>
        </div>

    </div>


</body>
</html>

<?php 
    require('pdo.php');

    $id=$_GET['id'];
    $sql="DELETE FROM contacts WHERE id=:id";
    $stmt=$pdo->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->execute();

    header("contact_confirm.php");
    exit;
?>
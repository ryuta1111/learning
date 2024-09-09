<?php
$name=htmlspecialchars($_POST['name'],ENT_QUOTES);
$kana=htmlspecialchars($_POST['kana'],ENT_QUOTES);
$tel=htmlspecialchars($_POST['tel'],ENT_QUOTES);
$email=htmlspecialchars($_POST['email'],ENT_QUOTES);
$body=htmlspecialchars($_POST['body'],ENT_QUOTES);

session_start();
$_SESSION['name']=$name;
$_SESSION['kana']=$kana;
$_SESSION['tel']=$tel;
$_SESSION['email']=$email;
$_SESSION['body']=$body;
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>お問い合わせフォーム 確認画面</title>
    <link rel="stylesheet"href="contact_confirm.css">



</head>

<body>



<div class="container-fluid">
    <div class="row">
        <a class="title">お問い合わせ</a>
        <a class="topics">下記の内容をご確認の上送信ボタンを押してください</a>
        <a class="topics">内容を訂正する場合は戻るを押してください。</a>
        <form action="complete.php" method="post" class="">
            <input type="hidden" name="check" value="checked">
            <div class="">
                <label>氏名</label>
                <a class="answer" readonly style="white-space: normal"><?php echo $_POST['name'];?></a>
            </div>
            <div class="">
                <label>フリガナ</label>
                <a class="answer" readonly style="white-space: normal"><?php echo $_POST['kana'];?></a>
            </div>
            <div class="">
                <label>電話番号</label>
                <a class="answer" readonly style="white-space: normal"><?php echo $_POST['tel'];?></a>
            </div>
            <div class="">
                <label>メールアドレス</label>
                <a class="answer" readonly style="white-space: normal"><?php echo $_POST['email'];?></a>
            </div>
            <div class="">
                <label>内容</label>
                <a class="answer" readonly style="white-space: normal"><?php echo $_POST['body'];?></a>
            </div>
            <div class="button-area">
                <input class="contact_confirm-btn" type="submit" value="送信する">
                <a class="btn" onclick="history.back(-1)">戻る</a>
            </div>
        </form>
    </div>
</div>

<br><br>

<div class=table style=display:flex;justify-content:center;>
<table border= "1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>kana</th>
        <th>tel</th>
        <th>email</th>
        <th>body</th>
        <th>created_at</th>
        <th>編集</th>
        <th>消去</th>
    </tr>


    <?php
    require_once('pdo.php');
    $sql="SELECT*FROM contacts";
    $stmt=$pdo->prepare($sql);
    $stmt->execute();
    $pdo=null;
    ?>

    <?php
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC)):
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['kana']; ?></td>
            <td><?php echo $row['tel']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['body']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td><a href="update.php?id=<?php echo $row['id'];?>">更新</a></td>
            <td><a href="delete.php?id=<?php echo $row['id'];?>"  onclick="return confirm('消去しますか？')">消去</a>  
            </td>
            </td>

        </tr>
    <?php
    endwhile;
    ?>


</table>
</div>



</body>
</html>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>お問い合わせフォーム 確認画面</title>
    <link rel="stylesheet"href="contact_confirm.css">
    <link href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"crossorigin="anonymous"/>
    <script src="https://kit.fontawesome.com/9e396dd779.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



</head>

<body>



<div class="container-fluid">
    <div class="row">
        <a class="title">お問い合わせ</a>
        <a class="topics">下記の内容をご確認の上送信ボタンを押してください</a>
        <a class="topics">内容を訂正する場合は戻るを押してください。</a>
        <form action="complete.php" method="post" class="">
            <div class="">
                <label>氏名</label>
                <a class="answer" readonly style="white-space: normal"><?php echo $_POST['name1'];?></a>
            </div>
            <div class="">
                <label>フリガナ</label>
                <a class="answer" readonly style="white-space: normal"><?php echo $_POST['name2'];?></a>
            </div>
            <div class="">
                <label>電話番号</label>
                <a class="answer" readonly style="white-space: normal"><?php echo $_POST['tel'];?></a>
            </div>
            <div class="">
                <label>メールアドレス</label>
                <a class="answer" readonly style="white-space: normal"><?php echo $_POST['mail'];?></a>
            </div>
            <div class="">
                <label>内容</label>
                <a class="answer" readonly style="white-space: normal"><?php echo $_POST['content'];?></a>
            </div>
            <div class="button-area">
                <input class="contact_confirm-btn" type="submit" value="送信する">
                <a class="btn" onclick="history.back(-1)">戻る</a>
            </div>
        </form>
    </div>
</div>


</body>
</html>
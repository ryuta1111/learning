<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>お問い合わせフォーム 入力画面</title>
    <link rel="stylesheet"href="contact.css">

</head>

<body>
<!----------
    header
        ----------> 


<?php include ( dirname(__FILE__) . '/header.php' ); ?>



<!----------
    お問い合わせ
        ----------> 
        
<div id="message"></div>

<div class="container-fluid">
    <div class="row">
        <a class="title">お問い合わせ</a>
        <ul>
            <li><p class="heading">下記の項目をご記入の上送信ボタンを押してください</p></li>
            <li><a class="topics">送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。</a></li>
            <li><a class="topics">なお、ご連絡までに、お時間をいただく場合もございますので予めご了承ください。</a></li>
            <li><a class="topics"><span style="color:red;">*</span>は必須項目になります。</a></li>
        </ul>

        
        <form action="contact_confirm.php" method="post" name="form1" onsubmit="return formCheck()">
            <div>
                <label for="name">氏名<span style="color:red;">*</span></label>
                <div id="notice-input-text-1" style="display: none;" class="error"> 名前が未入力です。10文字以内で入力してください。</div>          
                <input type="text" name="name" id="name" placeholder="山田太郎" class="user" maxlength="10" value="<?php if(isset($name)){echo $name;} ?>">
            </div>
            <div>
                <label for="kana">フリガナ<span style="color:red;">*</span></label>
                <div id="notice-input-text-2" style="display: none;" class="error"> フリガナが未入力です。10文字以内で入力してください。</div>
                <input type="text" name="kana" id="kana" placeholder="ヤマダタロウ" class="user"maxlength="10" value="<?php if(isset($kana)){echo $kana;} ?>">
            </div>
            <div>
                <label for="tel">電話番号</label>
                <div id="notice-input-text-3" style="display: none;" class="error"> 電話番号は0-9の数字のみでご入力ください。</div>
                <input type="text" name="tel" id="tel" placeholder="09012345678" class="user" value="<?php if(isset($tel)){echo $tel;} ?>">
            </div>
            <div>
                <label for="email">メールアドレス<span style="color:red;">*</span></label>
                <div id="notice-input-text-4" style="display: none;" class="error">メールアドレスが未入力です。</div>
                <div id="notice-input-text-5" style="display: none;" class="error">メールアドレスを正しく入力して下さい。</div> 
                <input type="email" name="email" id="email" placeholder="test@test.co.jp" class="user" value="<?php if(isset($email)){echo $email;} ?>">


            </div>
            <br>
            <div>
                <label for="body" class="heading">お問い合わせ内容をご記入ください<span style="color:red;">*</span></label>
                <div id="notice-textarea-1" style="display: none;" class="error"> お問合せ内容が未入力です</div>
                <textarea name="body" id="body" value="<?php if(isset($body)){echo $body;} ?>"></textarea>
            </div>
            <div class="button-area">
                <input class="contact-btn" type="submit" value="送信する">
            </div>
        </form>
    </div>
</div>

<script>
    window.onload = function(){
        /*各画面オブジェクト*/
        const btnSubmit = document.getElementById('submit');
        const inputName = document.getElementById('name');
        const inputKana = document.getElementById('kana');
        const inputTel = document.getElementById('tel');
        const inputEmail = document.getElementById('email');
        const inputBody = document.getElementById('body');
        const regexp = /^0\d{9,10}$/;
        const reg = /.+@.+\..+/ ;
        
        
        submit.addEventListener('click', function(event) {
            let message = [];
            /*入力値チェック*/
            if(inputName.value =="" || inputName.value > 10 ){
                message.push("氏名が未入力です。10文字以内で入力してください。\n");
            }
            if(inputKana.value =="" || inputKana.value > 10 ){
                message.push("フリガナが未入力です。10文字以内で入力してください。\n");
            }
            if(!regexp.test(inputTel.value)){
                message.push("電話番号の形式が不正です。\n");
            }
            if(inputEmail.value==""){
                message.push("メールアドレスが未入力です。\n");
            }else if(!reg.test(inputEmail.value)){
                message.push("メールアドレスの形式が不正です。\n");
            }
            if(inputBody.value ==""){
                message.push("問い合わせ内容は必須入力です。\n");
            }
            if(message.length > 0){
                alert(message);
                return;
            }
            alert('入力チェックOK');
        });
    };
</script>

<script>
function formCheck(){
    var flag = 0;


    // 名前の形式かチェック
    var input_text_1_length = document . form1 . name . value . length; // 入力文字数を、変数に格納
   if ( document . form1 . name . value == "" || input_text_1_length  > 10 ) { // 未入力の場合・入力文字数が超過している場合
        flag = 1;
        document . getElementById( 'notice-input-text-1' ) . style . display = "block"; // 名前が未入力です。10文字以内で入力してください。を表示
    } else{ // 入力文字数が超過している場合

        document . getElementById( 'notice-input-text-1' ) . style . display = "none"; // 名前が未入力です。10文字以内で入力してください。を非表示
    }
    // フリガナの形式かチェック
    var input_text_2_length = document . form1 . kana . value . length; // 入力文字数を、変数に格納
   if ( document . form1 . kana . value == "" || input_text_2_length  > 10 ) { // 未入力の場合・入力文字数が超過している場合
        flag = 1;
        document . getElementById( 'notice-input-text-2' ) . style . display = "block"; // フリガナが未入力です。10文字以内で入力してくださいを表示
    } else{ // 入力文字数が超過している場合

        document . getElementById( 'notice-input-text-2' ) . style . display = "none"; // フリガナが未入力です。10文字以内で入力してくださいを非表示
    }
    // 半角数字で入力されているかチェック
    if ( document . form1 . tel . value . match ( /^0\d{1,3}-\d{2,4}-\d{3,4}$/) ){ // 半角数字で入力されていない場合
        flag = 1;
        document . getElementById( 'notice-input-text-3' ) . style . display = "block"; // 電話番号は0-9の数字のみでご入力ください。を表示
    }else{ // 半角数字で入力されている場合
        document . getElementById( 'notice-input-text-3' ) . style . display = "none"; // 電話番号は0-9の数字のみでご入力ください。を非表示
    }
   // メールアドレスの形式かチェック
   if ( document . form1 . email . value == "" ) { // 未入力の場合
        flag = 1;
        document . getElementById( 'notice-input-text-4' ) . style . display = "block"; // メールアドレスが未入力です。を表示
        document . getElementById( 'notice-input-text-5' ) . style . display = "none"; // メールアドレスを、正しく入力して下さい。を非表示
    } else if ( ! document . form1 . email . value . match ( /.+@.+\..+/ ) ) { // メールアドレスの形式でない場合
        flag = 1;
        document . getElementById( 'notice-input-text-4' ) . style . display = "none"; // メールアドレスが未入力です。を非表示
        document . getElementById( 'notice-input-text-5' ) . style . display = "block"; // メールアドレスを、正しく入力して下さい。を表示
    }
    if( document . form1 . body . value == "" ){ // コメントが未入力の場合
        flag = 1;
        document . getElementById( 'notice-textarea-1' ) . style . display = "block"; // 【お問合せ内容を入力して下さい】を表示
    }else{ // コメントが入力済みの場合
        document . getElementById( 'notice-textarea-1' ) . style . display = "none"; // 【あ問い合わせ内容を入力して下さい】を非表示
    }
    if( flag ){ // 入力必須項目に未入力があった場合
        return false; // 送信中止
    }else{ // 入力必須項目が全て入力済みだった場合
        document . getElementById( 'notice-input-text-1' ) . style . display = "none"; // 名前が未入力です。10文字以内で入力してください。を非表示
        document . getElementById( 'notice-input-text-2' ) . style . display = "none"; // フリガナが未入力です。10文字以内で入力してください。を非表示
        document . getElementById( 'notice-input-text-3' ) . style . display = "none"; // 電話番号は0-9の数字のみでご入力ください。を非表示
        document . getElementById( 'notice-input-text-4' ) . style . display = "none"; // メールアドレスが未入力です。を非表示
        document . getElementById( 'notice-input-text-5' ) . style . display = "none"; // メールアドレスを、正しく入力して下さい。を非表示
        return true; // 送信実行
    }
}

</script>

</body>
</html>


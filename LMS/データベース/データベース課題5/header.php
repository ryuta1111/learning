<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP課題4_工藤</title>
    <link rel="stylesheet"href="header.css">
    <link href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"crossorigin="anonymous"/>
    <script src="https://kit.fontawesome.com/9e396dd779.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>





</head>

<body>
<!----------
        header
            ----------> 
<header id="header">
    <nav>
        <ul id="g-navi">
            <!-- モーダルを開くボタン -->
            <li><a  id="modal-open" class="button-link" href="#">Signin</a></li>
            <li><a href="#area-1">Concept</a></li>
            <li><a href="#area-2">Menu</a></li>
            <li><a href="#area-3">Access</a></li>
            <li><a href="#area-4">News</a></li>
            <li>
                <form action="contact.php" method="post" name="">
                    <a href="http://localhost/PHP%e8%aa%b2%e9%a1%8c4_%e5%b7%a5%e8%97%a4/contact.php">Contact</a>
                </form>
            </li>
        </ul>
    </nav>    


    <ul class="logo">
        <li>
            <span class="fa-stack">
                <i class="fa-regular fa-circle fa-stack-2x" style="color: #ffffff;"></i>
                <i class="fa-brands fa-twitter fa-stack-1x" style="color: #ffffff;"></i>
            </span>
            <span class="fa-stack">
                <i class="fa-regular fa-circle fa-stack-2x" style="color: #ffffff;"></i>
                <i class="fa-brands fa-instagram a-stack-1x" style="color: #ffffff;"></i>
            </span>            
        </li>
    </ul>
</header>

<!-- ここからモーダルウィンドウ -->
<div id="modal-content">
    <a class="title">ログイン</a>
    <div id="modal-content-innar">
	    <!-- モーダルウィンドウのコンテンツ開始 -->
        <form action="theme4.php" method="post" name="">
            <div>
                <input type="email" name="mail" id="mail" placeholder="メールアドレス" class="user">
            </div>
            <div>
                <input type="text" name="password" id="password" placeholder="パスワード" class="user">
            </div>
            <div>
                <input class="modal-btn" type="submit" value="送信する">
            </div>
        </form>

        <div class="sns">
            <a class="btn" href="theme4.php" style="border: 1px solid #a9a9a9;">
                <image src="https://cdn.pixabay.com/photo/2014/04/03/11/53/twitter-312464_1280.png" width="15px" height="15px">
            </a>
            <a class="btn" href="theme4.php" style="border: 1px solid #a9a9a9;">
                <image  src="https://cdn.pixabay.com/photo/2017/06/22/06/22/facebook-2429746_1280.png" width="15px" height="15px">
            </a>
            <a class="btn" href="theme4.php" style="border: 1px solid #a9a9a9;">
                <image src="https://cdn.pixabay.com/photo/2015/12/11/11/43/google-1088004_1280.png" width="15px" height="15px">
            </a>
            <a class="btn" href="theme4.php" style="border: 1px solid #a9a9a9;">
                <image src="https://cdn.pixabay.com/photo/2022/03/18/05/51/logo-7075932_1280.png" width="15px" height="15px">
            </a>
        </div>
	</div>
	<!-- モーダルウィンドウのコンテンツ終了 -->
</div>






<!--hedderのscript-->    
<script>


</script>





<!--modalのscript-->   
<script>

$(function(){
	$("#modal-open").click(function(){
		//キーボード操作などにより、オーバーレイが多重起動するのを防止する
		$( this ).blur() ;	//ボタンからフォーカスを外す
		if( $( "#modal-overlay" )[0] ) return false ;		//新しくモーダルウィンドウを起動しない (防止策1)
		//if($("#modal-overlay")[0]) $("#modal-overlay").remove() ;		//現在のモーダルウィンドウを削除して新しく起動する (防止策2)

		//オーバーレイを出現させる
		$( "body" ).append( '<div id="modal-overlay"></div>' ) ;
		$( "#modal-overlay" ).fadeIn( "slow" ) ;

		//コンテンツをセンタリングする
		centeringModalSyncer() ;

		//コンテンツをフェードインする
		$( "#modal-content" ).fadeIn( "slow" ) ;

		//[#modal-overlay]、または[#modal-close]をクリックしたら…
		$( "#modal-overlay,#modal-close" ).unbind().click( function(){

			//[#modal-content]と[#modal-overlay]をフェードアウトした後に…
			$( "#modal-content,#modal-overlay" ).fadeOut( "slow" , function(){

				//[#modal-overlay]を削除する
				$('#modal-overlay').remove() ;

			} ) ;

		} ) ;

	} ) ;

	//リサイズされたら、センタリングをする関数[centeringModalSyncer()]を実行する
	$( window ).resize( centeringModalSyncer ) ;

	//センタリングを実行する関数
	function centeringModalSyncer() {

		//画面(ウィンドウ)の幅、高さを取得
		var w = $( window ).width() ;
		var h = $( window ).height() ;

		// コンテンツ(#modal-content)の幅、高さを取得
		// jQueryのバージョンによっては、引数[{margin:true}]を指定した時、不具合を起こします。
		var cw = $( "#modal-content" ).outerWidth( {margin:true} );
		var ch = $( "#modal-content" ).outerHeight( {margin:true} );
		var cw = $( "#modal-content" ).outerWidth();
		var ch = $( "#modal-content" ).outerHeight();

		//センタリングを実行する
		$( "#modal-content" ).css( {"left": ((w - cw)/2) + "px","top": ((h - ch)/2) + "px"} ) ;

	}

} ) ;
</script>


</body>
</html>
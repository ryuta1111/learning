<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP課題4_工藤</title>
    <link rel="stylesheet"href="theme4.css">
    <link href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"crossorigin="anonymous"/>
    <script src="https://kit.fontawesome.com/9e396dd779.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



</head>



<body>
<!----------
        header
            ----------> 

            <?php include ( dirname(__FILE__) . '/header.php' ); ?>

            

    <!----------
        top
            ----------> 



    <div class="container top px-0">
        <img class="image" src="https://cdn.pixabay.com/photo/2016/11/29/12/54/cafe-1869656_1280.jpg"/>
        <img class="cafe-logo" src="https://cdn.pixabay.com/photo/2022/08/30/07/28/cafe-logo-7420534_1280.png"/>
        <p>あなたの一日に小さな喜びを</p>
    </div>

<br><br><br>


    <div class="container Concept area" id="area-1">
        <ul class="row d-flex flex-lg-nowrap">
            <li class="col-lg-6"><img class="img" src="https://cdn.pixabay.com/photo/2021/09/06/01/13/coffee-6600644_1280.jpg"/></li>
            <li class="col-lg-6">
                <p class="small">Concept</p>
                <p class="h2">コンセプト</p>
                <p class="">Re-Light cafe は博多駅から徒歩10分のところにあるカフェです。木を基調にした開放的な店内でゆったりとお過ごしいただけます。スタンダードなコーヒーから、こだわりのオリジナルコーヒーをお楽しみください。また氷の量や甘さなどを細かくお客様のお好みの味に変えることができます。</p>
            </li>
        </ul>   
    </div>

    <br><br>

    <!----------
        Menu
            ----------> 

    <div class="container Menu area" id="area-2">
        <div class="row">
            <p class="small">Menu</p>
            <p class="h2">メニュー4品</p>
        </div>
        <form action="order.php" method="post" class="row" name="form2">
            <ul class="col-6 text-center">
                <li><img class="img" src="https://cdn.pixabay.com/photo/2016/08/23/15/52/fresh-orange-juice-1614822_1280.jpg"/></li>
                <li>JUICE</li>
                <li>アイス</li>
                <li>¥648(税込)</li>
                <li><input type="text" name="juice" id="juice" placeholder="0" class="quantity">個</li>
            </ul>
            <ul class="col-6 text-center">    
                <li><img class="img" src="https://cdn.pixabay.com/photo/2017/09/04/18/39/coffee-2714970_1280.jpg"/></li>
                <li>COFFEE</li>
                <li>アイス</li>
                <li>¥540(税込)</li>
                <li><input type="text" name="coffee" id="coffee" placeholder="0" class="quantity">個</li>        
            </ul>
            <ul class="col-6 text-center">
                <li><img class="img" src="https://cdn.pixabay.com/photo/2016/10/31/18/38/curry-1786353_1280.jpg"/></li>
                <li>CURRY</li>
                <li><img class="img-pepper" src="https://cdn.pixabay.com/photo/2020/08/25/18/39/pepper-5517792_1280.png" width="30" height="30"/></li>
                <li>¥972(税込)</li>
                <li><input type="text" name="curry" id="curry" placeholder="0" class="quantity">個</li>
            </ul>
            <ul class="col-6 text-center">
                <li><img class="img" src="https://cdn.pixabay.com/photo/2015/04/08/13/13/pasta-712664_1280.jpg"/></li>
                <li>PASTA</li>
                <li>
                    <img class="img-pepper" src="https://cdn.pixabay.com/photo/2020/08/25/18/39/pepper-5517792_1280.png" width="30" height="30"/>
                    <img class="img-pepper" src="https://cdn.pixabay.com/photo/2020/08/25/18/39/pepper-5517792_1280.png" width="30" height="30"/>
                    <img class="img-pepper" src="https://cdn.pixabay.com/photo/2020/08/25/18/39/pepper-5517792_1280.png" width="30" height="30"/>
                </li>
                <li>¥1296(税込)</li>
                <li><input type="text" name="pasta" id="pasta" placeholder="0" class="quantity">個</li>
            </ul>
            <div class="btn-area">
                <input class="menu-btn" type="submit" value="注文する">
            </div>

        </form>
    </div>

    <br><br>

    <!----------
        Access
            ----------> 

    <div class="container area" id="area-3">
        <div class="row">
            <p class="small">Access</p>
            <p class="h2">店舗へのアクセス</p>
        </div>
    </div>

    <br>

    <div class="container-fluid Access">
        <div class="row">
            <iframe 
                class="map px-0 col-md-6 col-lg-8"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.7419922516356!2d130.42530779999998!3d33.5860476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354191ba3cd3b965%3A0x6fbcfc907c02ed74!2zVC1NSU5FKOODhuOCo-ODvOODnuOCpOODsynmoKrlvI_kvJrnpL4!5e0!3m2!1sja!2sjp!4v1691650525234!5m2!1sja!2sjp" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <ul class="col-md-6 col-lg-4">
                <li class="">
                    <p>住所</p><br>
                    <p>〒812-0013</p>
                    <p>福岡県福岡市博多区博多駅東3-1-10</p><br><br>
                    <p>営業時間</p><br>
                    <p>平日 8:00 - 19:00</p>
                    <p>休日 10:00 - 18:00</p>
                </li>
            </ul>
        </div>
    </div>

    <br><br><br><br>

    <!----------
        News
            ----------> 

    <div class="container News area" id="area-4">
        <p class="small">News</p>
        <p class="h2">お知らせ</p>

        <br>

        <div class="news-list">
            <div class="row item">
                <img class="img col-3" src="https://cdn.pixabay.com/photo/2014/03/22/22/17/phone-292994_1280.jpg"/>
                <ul class="news-box col-9 row"> 
                    <li class="col-2"><p class="date">2022.06.01</p></li>
                    <li class="col-10"><p class="category">メディア・出演</p></li>
                    <li class="col-12"><p class="info">雑誌「カフェスタイル」に掲載されました。</p></li>
                    <li class="col-12"><p class="detail">詳細を見る</p></li>
                </ul> 
            </div>
            <div class="row item">
                <img class="img col-3" src="https://cdn.pixabay.com/photo/2015/04/08/13/13/pasta-712664_1280.jpg"/>
                <ul class="news-box col-9 row"> 
                    <li class="col-2"><p class="date">2022.07.02</p></li>
                    <li class="col-10"><p class="category">商品情報</p></li>
                    <li class="col-12"><p class="info">新商品「パスタ」のご紹介</p></li>
                    <li class="col-12"><p class="detail">詳細を見る</p></li>
                </ul>
            </div>
            <div class="row item">
                <img class="img col-3" src="https://cdn.pixabay.com/photo/2020/03/23/03/48/closed-4959355_1280.png"/>
                <ul class="news-box col-9 row"> 
                    <li class="col-2"><p class="date">2022.06.14</p></li>
                    <li class="col-10"><p class="category">休業</p></li>
                    <li class="col-12"><p class="info">自粛休業のお知らせ</p></li>
                    <li class="col-12"><p class="detail">詳細を見る</p></li>
                </ul>
            </div>
        </div>
    </div>

    <br><br><br><br>

    <!----------
        footer
            ---------->   
            <?php include ( dirname(__FILE__) . '/footer.php' ); ?>


<!--hedderのscript-->  
<script>

</script>



</body>
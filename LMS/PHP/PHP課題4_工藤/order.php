
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>注文確認画面</title>
    <link rel="stylesheet"href="order.css">
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
    order
        ----------> 
        
        <div class="container-fluid Order">
            <div class="row">
                <h2 style="text-align:center;">注文確認</h2>
                <div class="topics">
                    <h2 class="label">JUICE&nbsp;×&nbsp; <?php echo $_POST['juice'];?> &nbsp;個</h2>
                    <h2 class="price"><?php echo $_POST['juice']*648,'円';?></h2>
                </div>
                <div class="topics">
                    <h2 class="label">COFFEE&nbsp;×&nbsp; <?php echo $_POST['coffee'];?> &nbsp;個</h2>
                    <h2 class="price"><?php echo $_POST['coffee']*540,'円';?></h2>
                </div>
                <div class="topics">
                    <h2 class="label">CURRY&nbsp;×&nbsp; <?php echo $_POST['curry'];?> &nbsp;個</h2>
                    <h2 class="price"><?php echo $_POST['curry']*972,'円';?></h2>
                </div>
                <div class="topics">
                    <h2 class="label">PASTA&nbsp;×&nbsp; <?php echo $_POST['pasta'];?> &nbsp;個</h2>
                    <h2 class="price"><?php echo $_POST['pasta']*1296,'円';?></h2>
                </div>
                <h2 style="color:turquoise; text-align:center;">合計金額：<?php echo $_POST['juice']*648 + $_POST['coffee']*540 + $_POST['curry']*972 + $_POST['pasta']*1296,'円';?></h2>
            </div>
        </div>

</body>
</html>



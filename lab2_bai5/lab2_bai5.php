
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include './lab2_bai5.css';?>
    </style>
</head>
<body>

    <div class="container">
        <?php   for ($i=0; $i<8; $i++):    ?>
        <div class="column">
            <div class="san_pham">
                <div class="ten">iPhone 12</div>
                <img src="img/ip12.jpg" alt="">
                <div class="gia">
                    <del>$ 150</del> $ 148
                </div>
            </div>
        </div>
        <?php    endfor;    ?>
    </div>

</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include './lab1.css';?>
    </style>
</head>
<body>
    <form action="lab1_bai2.php" method="post">
        Nhập số thứ nhất: 
        <input type="text" name="so1"> <br>
        Nhập số thứ hai: 
        <input type="text" name="so2"> <br>
        <button type="submit">Submit</button>
        <!-- <input type="submit"> -->

    <?php
    if(isset($_POST["so1"]) && isset($_POST["so2"])){
        $so1 = $_POST["so1"];
        $so2 = $_POST["so2"];
        if ( !is_numeric($so1) || !is_numeric($so2) ){
            echo "Bạn nhập sai";
            die();  
        }

        $tong = $so1 + $so2;
        $hieu =  $so1 - $so2;
        $tich =  $so1 * $so2;
        $thuong = $so2==0 ? 'Không tồn tại' : $so1 / $so2 ;
        
        echo " <div class='xuat'> ";
        echo "Tổng của $so1 và $so2: $tong <br>";
        echo "Hiệu của $so1 và $so2: $hieu <br>";
        echo "Tích của $so1 và $so2: $tich<br>";
        echo "Thương của $so1 và $so2: $thuong<br>";
        echo "</div>";
        // die();
    }
?>

    </form>

</body>
</html>


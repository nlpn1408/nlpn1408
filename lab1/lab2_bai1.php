
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
    <form action="lab2_bai1.php" method="post">
        Nhập vào năm: 
        <input type="text" name="nam"> <br>
        Nhập vào tháng: 
        <input type="text" name="thang"> <br>
        <button type="submit">Submit</button>


        <div class="xuat">
        <?php
    if(isset($_POST["nam"]) && isset($_POST["thang"])){
        $nam = $_POST["nam"];
        $thang = $_POST["thang"];

        if ( !is_numeric($nam) || !is_numeric($thang)   ){
            echo "Bạn nhập sai";
            die();  
        }

        $output = $thang == 2 ?  (($nam%400 == 0 || ($nam%4 == 0 && $nam%100 )) ? 29 : 28) : match((int)$thang) {
            1,3,5,7,8,10,12 => 31,
            4,6,9,11 => 30,
            default => 0
        };
        if($output == 0){
            echo "Bạn nhập sai tháng";
        }else
            echo "Tháng $thang có: $output ngày";
        // die();
    }
?>

        </div>
    </form>

</body>
</html>



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
    <form action="lab2_bai3.php" method="post">
        Nhập vào 1 số n > 0: 
        <input type="text" name="input"> <br>
        <button type="submit">Submit</button>

        <div class="xuat">
            <?php
                if(!isset($_POST["input"]) ){
                    // echo "Bạn chưa nhập! ";
                    die();
                }
                $input = $_POST["input"];
        
                if ( !is_numeric($input) || $input < 1 ){
                    echo "Bạn nhập sai! ";
                    die();  
                }

                echo "Tổng: <br> 1 ";
                $tong = 1 ;
                for ($i=2; $i <= $input; $i++) { 
                    echo "+ $i ";
                    $tong += $i;
                }  
                echo " = $tong <br> Giai thừa: <br>";

               $giaiThua = 1;
               for ($i=1; $i <= $input; $i++) {
                   $giaiThua *= $i; 
                   echo "$i ! = $giaiThua <br>";

               }
                // die();
                
            ?>

        </div>
    </form>

</body>
</html>


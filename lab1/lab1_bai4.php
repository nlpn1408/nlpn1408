
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
    <form action="lab1_bai4.php" method="post">
        Nhập vào năm sinh: 
        <!-- <input type="text" name="nam"> <br> -->
       
        <button type="submit">Submit</button>

        <div class="xuat">
            <?php
                if(isset($_POST["nam"])){
                    $nam = $_POST["nam"];
                    if ( !is_numeric($nam)  ){
                        echo "Bạn nhập sai";
                        die();  
                    }
                    $output = date("Y") - $nam;
                    echo "Tuổi hiện tại là: $output";
                    // die();
                }
            ?>

        </div>

</body>
</html>


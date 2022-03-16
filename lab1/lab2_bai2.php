
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
    <form action="lab2_bai2.php" method="post">
        Nhập vào 1 ký tự: 
        <input type="text" name="input"> <br>
        <button type="submit">Submit</button>

        <div class="xuat">
            <?php
                if(!isset($_POST["input"]) ){
                    die();
                }
                $input = $_POST["input"];
        
                if ( is_numeric($input) || strlen($input) > 1){
                    echo "Bạn nhập sai! ";
                    die();  
                }

                $output = match(strtolower($input)) {
                    'e','u','o','a','u' => 'nguyên âm',
                    default => 'phụ âm'
                };
    
                echo "$input là: $output";
                // die();           
            ?>

        </div>
    </form>

</body>
</html>


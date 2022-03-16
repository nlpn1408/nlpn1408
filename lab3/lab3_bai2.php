<?php 
    include 'header.php';
    include  'funtions.php';  
?>
<a href="index.php" id="backBtn">Trở về</a>
<form action="lab3_bai2.php" method="post">
    <label for="input">Nhập vào số n > 0: </label> 
    <input type="text" name="input" id="input"> 
    <button type="submit">Submit</button>

    <div class="xuat">
        <?php
            if(!isset($_POST["input"]) ){
                die();
            }
            $input = $_POST["input"];

            if (  $input < 1 || (int)$input != $input){
                echo "Bạn nhập sai! ";
                die();  
            }
            echo "Tổng: <br>";
            echo tong1DenN($input);
            echo "<br><br> Giai thừa: <br>";
            echo giaiThua($input);

        ?>

    </div>
</form>

<?php include 'footer.php'; ?>
 
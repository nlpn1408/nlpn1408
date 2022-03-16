<?php 
    include 'header.php';
    include  'funtions.php';  
?>
<a href="index.php" id="backBtn">Trở về</a>
<form action="lab3_bai1.php" method="post">
    <label for="so1">Nhập số thứ nhất: </label> 
    <input type="text" name="so1" id="so1"> 
    <label for="so2" >Nhập số thứ hai: </label>
    <input type="text" name="so2" id="so2">
    <button type="submit">Submit</button>
    <!-- <input type="submit"> -->
    <div class="xuat">
        <?php
          
            if(isset($_POST["so1"]) && isset($_POST["so2"])){
                $so1 = $_POST["so1"];
                $so2 = $_POST["so2"];
                if ( !is_numeric($so1) || !is_numeric($so2) ){
                    echo "Bạn nhập sai";
                    die();  
                }
                echo "$so1 + $so2 = ". tong($so1, $so2) ;
                echo "<br> $so1 - $so2 = ". hieu($so1, $so2);
                echo "<br> $so1 * $so2 = ". tich($so1, $so2);
                echo "<br> $so1 : $so2 = ". thuong($so1, $so2);
                // die();
            }
        ?>
    </div>
</form>

<?php include 'footer.php'; ?>
 
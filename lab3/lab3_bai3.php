<?php 
    include 'header.php';
    include  'funtions.php';  
?>
<a href="index.php" id="backBtn">Trở về</a>
<form action="lab3_bai3.php" method="post">
    <label for="year">Nhập vào năm: </label> 
    <input type="text" name="year" id="year"> 
    <label for="month" >Nhập vào tháng: </label>
    <input type="text" name="month" id="month">
    <button type="submit">Submit</button>
    <!-- <input type="submit"> -->
    <div class="xuat">
        <?php
            if(!isset($_POST["year"]) || !isset($_POST["month"])){
                die();
            }
            $year = $_POST["year"];
            $month = $_POST["month"];
            if ( (int)$year != $year ||(int)$month != $month || $year < 1 || $month < 1 || $month >12){
                echo "Bạn nhập sai";
                die();  
            }
            echo "Tháng $month năm $year có: " . tinhNgay($year,$month). " ngày";
            
        ?>
    </div>
</form>

<?php include 'footer.php'; ?>
 
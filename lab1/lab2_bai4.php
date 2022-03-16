
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
    <div class="container">
        <?php
            $output='';
            $day = '0';
            for ($year=1900 ;$year <= date("Y") ; $year++) { 
                // echo '<br>';
                for ($month=1; $month <= 12; $month++) {
                    $day = $month == 2 ?  (($year%400 == 0 || ($year%4 == 0 && $year%100 )) ? 29 : 28) : match((int)$month) {
                        1,3,5,7,8,10,12 => 31,
                        4,6,9,11 => 30,
                        default => 0
                    }; 
                    echo "<div class='month'>";
                    for ($i=1; $i <= $day ; $i++) { 
                        $output = "$i/$month/$year";
                        echo "<span> $output </span>";
                    }
                    echo "</div>";
                }
            }
        ?>
    </div>

</body>
</html>


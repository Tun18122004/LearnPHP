<!DOCTYPE html>
<html>
    <body>
        <?php
            $thang = $_POST["month"];
            $nam = $_POST["year"];
        ?>

        <form method="post">
            <input type="number" name="month">
            <input type="text" name="year">
            <input type="submit" value="In Lịch">
        </form>
        
        <?php
            $mang = array(array(0,0,0,0,0,0,0),array(0,0,0,0,0,0,0)
            ,array(0,0,0,0,0,0,0),array(0,0,0,0,0,0,0),array(0,0,0,0,0,0,0),array(0,0,0,0,0,0,0));
            $day = cal_days_in_month(CAL_GREGORIAN,$thang,$nam);
            $x =0;
            for($i = 1; $i<=$day;$i++){
                $jd = cal_to_jd(CAL_GREGORIAN,$thang,$i,$nam);

                $xl = jddayofweek($jd,0);

                $mang[$x][$xl]=$i;
                $jd = cal_to_jd(CAL_GREGORIAN,$thang,$i,$nam);

                if(jddayofweek($jd,1)=='Saturday'){
                    $x+=1;
                }
            }
            
            $jd = cal_to_jd(CAL_GREGORIAN,$thang,1,$nam);
            $thangchu = (jdmonthname($jd,1));

            for($row = 0;$row < 7;$row++){
                for($col = 0;$col < 8;$col++){
                    echo $mang[$row][$col]."  ";
                }
                echo "<br>";
            }
        ?>
    </body>
</html>
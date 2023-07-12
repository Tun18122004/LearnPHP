<!DOCTYPE html>
<html>
   
    <body>

      <?php
       /*$ngay = $_POST["day"];
       $thang = $_POST["month"];
       $nam = $_POST["year"];

       $namht = date("Y");
       $thanght = date("m");
       $ngayht = date("d");

       $gioht = date("H");
       $phutht = date("i");
       $giayht = date("s");

       $n1 = mktime($gioht, $phutht, $giayht, $thanght, $ngayht, $namht);
       $n2 = mktime($gioht, $phutht, $giayht, $thang, $ngay, $namht);
       echo $n1;
       echo "<br />";


       $lon = ($n1 > $n2)? $n1:$n2;
       $nho = ($n1 < $n2)?$n1 : $n2;
       echo $lon;
       echo "<br />";
       echo $nho;
      echo "<br />";
       $diff_seconds = $lon - $nho;
       echo $diff_seconds;
       $diff_days = floor($diff_seconds/86400);

       if($diff_seconds  >  0){
        if($n2 == $nho){
          echo "Ngay sinh nhat cua ban da qua $diff_days ngay.";
        } else {
          echo "Ngay sinh nhat cua ban con $diff_days ngay.";
        }
       } else if($diff_days == 0){
          echo "Happy Birthday";
          $tuoi = $namht - $nam;
          echo "Nam nay "ban" $tuoi tuoi.";
       }
       function compare($x,$y){
        if($x == $y) return 0;
        return ($x > $y)?-1:1;
       }
       $ma="";
       $ten="";
      
       $mang = array(array($ma=>"nt",$ten=>"Biển Nha Trang"),
                      array($ma=>"sp",$ten=>"SaPa"),
                      array($ma=> "hl",$ten=>"Hạ Long"),
                      array($ma=>"sd",$ten=>"Hang Sơn Đoòng"),
                      array($ma=>"ha",$ten=>"Hội An"),
                      array($ma=>"dl",$ten=>"Đà Lạt")
       );
       $mangdl="";
       usort($mang,"compare");
       foreach($mang as $value){
        $name = $value[$ten];
        $mdd = $value[$ma];
        $mangdl = $mangdl . "<a href='#$mdd'>$name</a><br>";
       }
      
       echo $mangdl;
     
       $nd ="";
       foreach($mang as $value){
        $name = $value[$ten];
        $mdd = $value[$ma];
        $link = "<a name = '#$mdd'></a>";
        $nd = $nd . "<p text-align='center'>$link $name <br> <a href='#top'>Quay lại đầu trang</a></p>";
       }
       echo $nd;*/
      if(isset($_POST["ten"]) && isset($_POST["ll"])){
       $name = $_POST["ten"];
       $address = $_POST["ll"];
      
      $soluong = $_POST["sl"];
      $yeucau = $_POST["yeucau"];
    
      $namht = date("Y");
      $thanght = date("m");
      $ngayht = date("d");

      $gioht = date("H");
      $phutht = date("i");
      $giayht = date("s");

      $age = $_REQUEST["dotuoi"];
      $phuongtien = $_REQUEST["phuongtien"];
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        $type = $_POST["lt"];
        $place = $_POST["dd"];
        $gender = $_POST["gender"];
      }
      }

      echo "<h1>THÔNG TIN ĐẶT CHỖ</h1>";
      echo "<h3>Thông tin khách hàng<br></h3>";
      echo "Họ Tên: $name - Độ tuổi: $age/Giới tính: $gender<br>";
      echo "Địa chỉ: $address <br>";
      echo "<br>";
      echo "<h3>Thông tin đặt chỗ</h3><br>";
      echo "Số khách tham gia bữa tiệc: $soluong - Ngày đặt tiệc: $ngayht/$thanght/$namht<br>";
      echo "Loại tiệc: -$type/Địa điểm: $place<br>";
      echo "<h3><i>Các yêu cầu kèm theo</i></h3><br>";
      echo "<p text-align:center><i>Quý khách biết đến chúng tôi thông qua: $phuongtien</i></p><br>";

      echo "Chúng tôi đã nhận thông tin đặt chỗ của quý khách vào lúc: $gioht:$phutht:$giayht - $ngayht/$thanght/$namht<br>";
      echo "______________________________________________________________________________________________________";
      ?> 

<form method="post">
            <h1>THÔNG TIN ĐẶT CHỖ</h1>
            <p>Số lượng tham dự bữa tiệc của quý khách: </p><input type="text" name="sl">
            <p>Loại tiêc: </p>
            <input type="checkbox" id="loaitiec1" name="lt" value="Tiệc Sáng">
            <label for="lt1">Tiệc sáng</label>
            <input type="checkbox" id="loaitiec2" name="lt" value="Tiệc Chiều">
            <label for="lt2">Tiệc chiều</label>
            <input type="checkbox" id="loaitiec3" name="lt" value="Tiệc Tối">
            <label for="lt3">Tiệc tối</label>

            <p>Địa điểm: </p>
            <input type="checkbox" id="dd1" name="dd" value="Trong Nhà">
            <label for="dd1">Trong nhà</label>
            <input type="checkbox" id="dd2" name="dd" value="Ngoài Trời">
            <label for="dd2">Ngoài trời</label>
            <p>Tên quý khách: </p><input type="text" name="ten">
            <p>Địa chỉ liên lạc: </p><input type="text" name="ll"> <br>
            <p>Độ tuổi: </p>
            <select name="dotuoi" id="dotuoi">
                <option value="Dưới 18 tuổi">Dưới 18 tuổi</option>
                <option value="Từ 19 đến 34 tuổi">Từ 19 đến 34 tuổi</option>
                <option value="Từ 35 đến 54 tuổi">Từ 35 đến 54 tuổi</option>
                <option value="Trên 55 tuổi">Trên 55 tuổi</option>

            </select>
            <p>Giới tính: </p>
            <input type="radio" id="nam" name="gender" value="Male">
            <label for="nam">Male</label>
            <input type="radio" id="nu" name="gender" value="Female">
            <label for="nu">Female</label>
            <p>Quý khách biết đến chúng tôi qua: </p><br>
            <select name="phuongtien" id="phuongtien">
                <option value="BaoChi">Báo Chí</option>
                <option value="DaiPhatThanh">Đài Phát Thanh</option>
                <option value="TV">Ti Vi</option>
            </select>
           <br>
           <p>Các yêu cầu của quý khách:</p><input type="text" name="yeucau"><br>
           <input type="submit" name="upload" value="Đặt Chỗ">
        </form>
        
    </body>
    
</html>
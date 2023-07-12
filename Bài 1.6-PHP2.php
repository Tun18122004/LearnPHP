<!DOCTYPE html>
<html>
    <body>
        <?php

            if(isset($_POST["ten"]) && isset($_POST["address"])){
                $name = $_POST["ten"];
                $day = $_POST["ngay"];
                $diachi = $_POST["address"];
                $luotdangki = $_POST["dangki"];
                $phonenumber = $_POST["phonenumber"];
                $tour = $_REQUEST["tour"];
                $traffic = $_REQUEST["traffic"];
            }

            $tong = 0;
            switch($tour){
                case "Hà Nội - Hạ Long - Sapa":
                    $tong += 6000000;
                    break;
                case "Hà Nội - Hải Phòng":
                    $tong += 5500000;
                    break;
                case "Hà Nội - Điện Biên":
                    $tong += 5500000;
                    break;
                case "Huế - Bạch Mã - Đà Nẵng":
                    $tong += 5000000;
                    break;
                case "Nha Trang - Đà Lạt":
                    $tong += 3000000;
                    break;
                case "Buôn Mê Thuộc - Gia Lai - Kon Tum":
                    $tong += 3500000;
                    break;
                case "TPHCM - Phú Quốc":
                    $tong += 4000000;
                    break;
                case "TPHCM - Cần Thơ - Cà Mau":
                    $tong += 4500000;
                    break;
                case "TPHCM - Mỹ Tho":
                    $tong += 3000000;
                    break;
            }
            
            switch($traffic){
                case "Máy Bay":
                    $tong *= 100 / 100;
                    break;
                case "Tàu Hỏa":
                    $tong *= 95 / 100;
                    break;
                case "Xe Hơi":
                    $tong *= 90 / 100;
                    break;
                case "Tàu Thủy":
                    $tong *= 90 / 100;
                    break;
                case "Xe Máy":
                    $tong *= 80 / 100;
                    break;
            }
            $tong1 = 1;

            if($luotdangki < 10){
                $tong1 = $tong *100 /100;
            } else if($luotdangki >=10 && $luotdangki < 20){
                $tong1 = $tong * 95/100;
            } else if($luotdangki >=20 && $luotdangki < 50){
                $tong1 = $tong * 90/100;
            } else if($luotdangki > 50){
                $tong1 = $tong * 80/100;
            }

           $tong1 *= $luotdangki;
           echo "<h1>THÔNG TIN ĐẶT TOUR</h1><br>";
            echo "Khách hàng đã chon Tour: $tour<br>";
            echo "Ngày khởi hành: $day<br>";
            echo "Phương tiện di chuyển: $traffic<br>";
            echo "<br>";
            echo "Số lượt đăng kí: $luotdangki<br>";
            echo "Giá tour/khách: $tong<br>";
            echo "Tổng số tiền cho $luotdangki khách là: $tong1<br>";
            echo "<br>";
            echo "Thông tin khách hàng:<br>";
            echo "Họ tên: $name - Địa chỉ: $diachi<br>";
            echo "Số điện thoại: $phonenumber<br>";
            echo "___________________________________________________________";

        ?>

        <form method="post">
            <p>Tên tour: </p><select name="tour" id="tour">
               <optgroup label="Miền Bắc:">
                    <option value="Hà Nội - Hạ Long - Sapa">Hà Nội - Hạ Long - Sapa</option>
                    <option value="Hà Nội - Hải Phòng">Hà Nội - Hải Phòng</option>
                    <option value="Hà Nội - Điện Biên">Hà Nội - Điện Biên</option>
               </optgroup>
                <optgroup label="Miền Trung:"> 
                    <option value="Huế - Bạch Mã - Đà Nẵng">Huế - Bạch Mã - Đà Nẵng</option>
                    <option value="Nha Trang - Đà Lạt">Nha Trang - Đà Lạt</option>
                    <option value="Buôn Mê Thuộc - Gia Lai - Kon Tum">Buôn Mê Thuộc - Gia Lai - Kon Tum</option>
                </optgroup>   
                <optgroup label="Miền Nam:">
                    <option value="TPHCM - Phú Quốc">TPHCM - Phú Quốc</option>
                    <option value="TPHCM - Cần Thơ - Cà Mau">TPHCM - Cần Thơ - Cà Mau</option>
                    <option value="TPHCM - Mỹ Tho">TPHCM - Mỹ Tho</option>
                </optgroup>
            </select>
            <p>Ngày khởi hàng: </p><input type="date" name="ngay"><br>
            <p>Phương tiện di chuyển: </p>
            <select name="traffic" id="traffic">
                <option value="Máy Bay">Máy Bay</option>
                <option value="Tàu Hỏa">Tàu Hỏa</option>
                <option value="Xe Hơi">Xe Hơi</option>
                <option value="Tàu Thủy">Tàu Thủy</option>
                <option value="Xe Máy">Xe Máy</option>
            </select>
            <br>
            <p>Số lượt đăng kí: </p><input type="number" name="dangki"><br>
            <p>Tên khách hàng: </p><input type="text" name="ten"><br>
            <p>Liên hệ theo địa chỉ: </p><input type="text" name="address"><br>
            <p>Số điện thoại: </p><input type="text" name="phonenumber"><br>
            <input type="submit" value="Đăng kí tour">

        </form>
    </body>
</html>
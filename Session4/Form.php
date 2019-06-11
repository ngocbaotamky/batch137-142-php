<!DOCTYPE html>
<html>
<head>
	<title>Session 4</title>
	<style type="text/css">
		.error {
			color: red;
		}
        img {
			width: 150px;
		}
	</style>
</head>
<body>
	<?php
    $errHoten = $errNgayDau = $errNgayCuoi = $errSoDau = $errSoCuoi  = '';
	$tienDien = 0;
	$soDien = 0;
    $checkTinhTien = true;
	if (isset($_POST['submit'])) {
		$hoten    = $_POST['hoten'];
		$ngaydau  = $_POST['ngaydau'];
		$ngaycuoi = $_POST['ngaycuoi'];
		$sodau    = $_POST['sodau'];
        $socuoi   = $_POST['socuoi'];
		if ($hoten == '') {
			$errHoten = 'Vui long dien ho va ten';
            $checkTinhTien = false;
		}
		if ($ngaydau == '') {
			$errNgayDau = 'Vui long dien ngay dau ky';
            $checkTinhTien = false;
		}
		if ($ngaycuoi == '') {
			$errNgayCuoi = 'Vui long dien ngay cuoi ky';
            $checkTinhTien = false;
		}
		if ($sodau == '') {
			$errSoDau = 'Vui long dien so dau ky';
            $checkTinhTien = false;
		}
		if ($socuoi == '') {
			$errSoCuoi = 'Vui long dien so cuoi ky';
            $checkTinhTien = false;
        }
        
		if ($sodau > $socuoi) {
			$errSoDau = 'So dau ky phai nho hon hoac bang so cuoi ky';
            $checkTinhTien = false;
            
		}
		if ($ngaydau > $ngaycuoi) {
			$errNgayDau = 'Ngay dau ky phai nho hon hoac bang ngay cuoi ky';
            $checkTinhTien = false;
            
        }
        
		$soDien = $socuoi - $sodau;
		if ($soDien <= 100) {
			$tienDien = $soDien*1500;
		}
		if ($soDien > 100 && $soDien <= 300) {
			$tienDien = 100*1500 + ($soDien - 100)*2000;
		}
		if ($soDien > 300) {
			$tienDien = 100*1500 + 200*2000 + ($soDien - 300)*3500;
		}
		if ($checkTinhTien) {
            if ($_FILES['phieucu']['error'] == 0) {
				$randomName = uniqid();
				$tenPhieuCu = $randomName.'_'.$_FILES['phieucu']['name'];
				move_uploaded_file($_FILES['phieucu']['tmp_name'], 'phieucu/'.$tenPhieuCu);
			}
			echo "<p>Phieu tinh tien dien cua gia dinh: ".$hoten."</p>";
			echo "<p>Tien dien tinh tu ngay: ".$ngaydau." den ngay ".$ngaycuoi."</p>";
            echo "<p>So tien dien can thanh toan la: ".number_format($tienDien)." VND";
            echo "<img src='phieucu/$tenPhieuCu'>";
        }
    }
    ?>
    
	<h1>PHIẾU TÍNH TIỀN ĐIỆN</h1>
	<form method="POST" enctype="multipart/form-data">
        <table>
		<p>
			Họ và tên :
			<input type="text" name="hoten">
		</p>
		<p class="error"><?php echo $errHoten;?></p>
		<p>
			Ngày đầu kỳ :
			<input type="date" name="ngaydau">
		</p>
		<p class="error"><?php echo $errNgayDau;?></p>
		<p>
			Ngày cuối kỳ :
			<input type="date" name="ngaycuoi">
		</p>
		<p class="error"><?php echo $errNgayCuoi;?></p>
		<p>
			Số đầu kỳ :
			<input type="text" name="sodau">
		</p>
		<p class="error"><?php echo $errSoDau;?></p>
		<p>
			Số cuối kỳ :
			<input type="text" name="socuoi">
		</p>
        <p class="error"><?php echo $errSoCuoi;?></p>

        <p>Phiếu tiền điện kỳ trước :
			<input type="file" name="phieucu">
		</p>
		<p>
			<input type="submit" name="submit" value="Submit">
        </p>
        </table>
    </form>
</body>
</html>
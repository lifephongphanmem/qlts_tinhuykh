<?php
function doingay($ngay)
{
	$kq = substr($ngay, 6, 4) . "/" . substr($ngay, 3, 2) . "/" . substr($ngay, 0, 2);
	return $kq;
}
function ngaythang($ngay)
{
	$kq = "";
	if ($ngay != "")
		$kq = substr($ngay, 8, 2) . "/" . substr($ngay, 5, 2) . "/" . substr($ngay, 0, 4);
	return $kq;
}
function dinhdangso($so)
{
	$kq = "";
	if ($so != 0)
		$kq = number_format($so, 0, ",", ".");
	return $kq;
}
function kieudouble($so)
{
	$kq = "";
	$a = "";
	$kq1 = 0;
	$vt1 = 0;
	$vt2 = 0;
	if ($so != "") {
		$vt1 = strpos($so, ",");
		$vt2 = strpos($so, ".");
		if ($vt1 == -1 && $vt2 == -1) {
			$kq1 = (float)$so;
		} else {
			if ($vt1 > 0) {
				$kq = str_replace(",", "", $so);
			}
			//	else
			//	{
			//		$kq = str_replace(".","",$so);
			//	}
		}
		$kq1 = (float)$kq;
	} else {
		$kq1 = 0;
	}
	return $kq1;
}

// Đọc số tiền		
//$mangso = array('không','một','hai','ba','bốn','năm','sáu','bảy','tám','chín'); 
//$donvi=" đồng chẵn./. ";
function dochangchuc($so, $daydu)
{
	$mangso = array('không', 'một', 'hai', 'ba', 'bốn', 'năm', 'sáu', 'bảy', 'tám', 'chín');
	$chuoi = "";
	$chuc = floor($so / 10);
	$donvi = $so % 10;
	if ($chuc > 1) {
		$chuoi = " " . $mangso[$chuc] . " mươi";
		if ($donvi == 1)
			$chuoi .= " mốt";
	} else if ($chuc == 1) {
		$chuoi = " mười";
		if ($donvi == 1)
			$chuoi .= " một";
	} else if ($daydu && $donvi > 0)
		$chuoi = " lẻ";
	if ($donvi == 5 && $chuc > 1)
		$chuoi .= " lăm";
	else if ($donvi > 1 || ($donvi == 1 && $chuc == 0))
		$chuoi .= " " . $mangso[$donvi];
	return $chuoi;
}
function docblock($so, $daydu)
{
	$mangso = array('không', 'một', 'hai', 'ba', 'bốn', 'năm', 'sáu', 'bảy', 'tám', 'chín');
	$chuoi = "";
	$tram = floor($so / 100);
	$so = $so % 100;
	if ($daydu || $tram > 0) {
		$chuoi = " " . $mangso[$tram] . " trăm";
		$chuoi .= dochangchuc($so, true);
	} else
		$chuoi = dochangchuc($so, false);
	return $chuoi;
}
function dochangtrieu($so, $daydu)
{
	$chuoi = "";
	$trieu = floor($so / 1000000);
	$so = $so % 1000000;
	if ($trieu > 0) {
		$chuoi = docblock($trieu, $daydu) . " triệu";
		$daydu = true;
	}
	$nghin = floor($so / 1000);
	$so = $so % 1000;
	if ($nghin > 0) {
		$chuoi .= docblock($nghin, $daydu) . " nghìn";
		$daydu = true;
	}
	if ($so > 0)
		$chuoi .= docblock($so, $daydu);
	return $chuoi;
}

function docso($so)
{
	$mangso = array('không', 'một', 'hai', 'ba', 'bốn', 'năm', 'sáu', 'bảy', 'tám', 'chín');
	$donvi = " đồng chẵn./. ";
	if ($so == 0) return $mangso[0];
	$chuoi = "";
	$hauto = "";
	do {
		$ty = $so % 1000000000;
		$so = floor($so / 1000000000);
		if ($so > 0)
			$chuoi = dochangtrieu($ty, true) . $hauto . $chuoi;
		else
			$chuoi = dochangtrieu($ty, false) . $hauto . $chuoi . $donvi;
		$hauto = " tỷ";
	} while ($so > 0);
	return ucfirst(trim($chuoi));
}

function convert2Roman($num)
{
	$n = intval($num);
	$res = '';

	//array of roman numbers
	$romanNumber_Array = array(
		'M'  => 1000,
		'CM' => 900,
		'D'  => 500,
		'CD' => 400,
		'C'  => 100,
		'XC' => 90,
		'L'  => 50,
		'XL' => 40,
		'X'  => 10,
		'IX' => 9,
		'V'  => 5,
		'IV' => 4,
		'I'  => 1
	);

	foreach ($romanNumber_Array as $roman => $number) {
		//divide to get  matches
		$matches = intval($n / $number);

		//assign the roman char * $matches
		$res .= str_repeat($roman, $matches);

		//substract from the number
		$n = $n % $number;
	}

	// return the result
	return $res;
}

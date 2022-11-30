<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>QLTS</title>
    <style type="text/css">
        body {
            font: normal 14px time, serif;
        }

        table, p {
            width: 99%;
            margin: auto;
        }

        #tabcontent td, #tabcontent th {
            padding: 10px;
        }
        tr td:first-child {text-align: center;}
    @media print {
		   .in{
			  display: none !important;
		   }
		}
    </style>
	<link rel="stylesheet" href="/thoaikx/buttonPro.css"/>
</head>
<div class="in" style="margin-left: 900px;">
<input  type="submit" class="buttonPro medium blue" onclick="window.print()" value="In báo cáo"  />
<input type="button" class="buttonPro medium red" value="Thoát" onclick="window.location.href='<?php echo $_SERVER['HTTP_REFERER'];?>'" />	
</div>
<body>
<?php
$denngay="";
$tungay ="";
$nam="";
$noisd="";
$loaicc="";
$ckbts = "No";
$madv ="";
if(isset($_POST['create']))
{
	//$denngay = $_POST['ntden'];
	//$tungay = $_POST['nttu'];
	$nam = $_POST['nam'];
	$noisd = $_POST['noisudung'];
	$loaicc = $_POST['loaicc'];
	if(isset($_POST['ts']))
		$ckbts = $_POST['ts'];
	$madv = explode('>',$_POST['MADV']);
	$msdv = $madv[0];
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];
}
?>
<table cellspacing="0" cellpadding="0" border="0">
        <tr>
			<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Tên đơn vị: ".$madv[2]; ?></nobr></td>
			<td>
			<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số : S26-H</nobr></td>
        </tr>
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Mã QHNS: ".$madv[1]; ?></nobr></td>
			<td>
			</td>
			<td style="text-align: center;" ><nobr>(Ban hành theo Thông tư số 107/2017/TT-BTC </br> ngày 10/10/2017 của Bộ Tài chính)</nobr></td>
		</tr>
		</table>
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
            <td  style="text-align: center;font-weight: bold;">SỔ THEO DÕI TSCĐ VÀ CÔNG CỤ, DỤNG CỤ TẠI NƠI SỬ DỤNG</td>
		</tr>
		<tr>
			<td  style="text-align: center;font-weight: bold; font-style: italic"> Năm: <?php echo $nam;?></td>
		</tr>
		<tr>
			<td style="text-align: center; font-style: italic;"> Tên đơn vị, Phòng, Ban (hoặc người sử dụng): <?php echo $noisd?></td>
		</tr>
			<tr>
				<td style="text-align: center; font-style: italic;"> Loại công cụ, dụng cụ (Nhóm công cụ, dụng cụ): <?php echo $loaicc?></td>
			</tr>
	</table>
<?php
function my_sort($ar, $br)
{
	if ($ar["0"] == $br["0"])
		return 0;
	return ($ar["0"] > $br["0"])? 1:-1;
}
function thongtints ($mats,$dk)
{
	global $con;
	$kq = 0;
	$sql = "select DVT,DTKV from tblqlts WHERE  TTQLTS = " . $mats;
	$qrsql = mysqli_query($sql, $con);
	while ($row = mysqli_fetch_array($qrsql)) {
		if($dk == "donvitinh")
			$kq = $row['DVT'];
		if($dk == "soluong" )
			$kq = $row['DTKV'];
	}
	return $kq;
}
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Thoaikx/general.php");
$ar = array(array("A","B","C","D",0,0,0,0,"E",0,0,0));
$c=0;
$Tsl1 = 0; $Tsl2 = 0; $Tsl3 = 0; $Tsl4 = 0;
$sql = "Select ngayxuat,ttxuatdung,tenchitiet,dvt,soluong,dongia,sotien from tblxuatdung where madonvi Like '$msdv%'".
	" and mataisan like 'C%' ".
	($loaicc == ""?"":" and chitiethinhthai = '" . $loaicc . "'").($noisd == ""?"":" and noisudung = '" . $noisd . "'").
	($nam == ""?"": " and year(ngayxuat) = ".$nam);
//($tungay == ""?"":" and ngayxuat >= '" . doingay($tungay) . "'").($denngay == ""?"":" and ngayxuat <= '" . doingay($denngay) . "'");
$qrsql = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($qrsql))
{
	$ar[$c][0] = $row['ngayxuat'];
	$ar[$c][1] = $row['ttxuatdung'];
	$ar[$c][2] = $row['ngayxuat'];
	$ar[$c][3] = $row['tenchitiet'];
	$ar[$c][4] = $row['dvt'];
	$ar[$c][5] = $row['soluong'];
	$ar[$c][6] = $row['dongia'];
	$ar[$c][7] = $row['sotien'];
	$ar[$c][8] = "";
	$ar[$c][9] = 0;
	$ar[$c][10] = 0;
	$ar[$c][11] = 0;
	$c++;
}
if($ckbts != 'No')
{
	$sql = "Select ngaysudung,TTQLTS,tenchitiet,DVT,ngaysudung,DTKV,ngansach+nguonkhac as dongia from tblqlts WHERE madonvi like '$msdv%'".
		($loaicc == ""?"":" and chitiethinhthai = '" . $loaicc . "'").($noisd == ""?"":" and noisudung = '" . $noisd . "'").
		($nam == ""?"": " and year(ngaysudung) = ".$nam);
	$qrsql = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($qrsql))
	{
		$ar[$c][0] = $row['ngaysudung'];
		$ar[$c][1] = $row['TTQLTS'];
		$ar[$c][2] = $row['ngaysudung'];
		$ar[$c][3] = $row['tenchitiet'];
		$ar[$c][4] = $row['DVT'];
		$ar[$c][5] = $row['DTKV'];
		$ar[$c][6] = $row['dongia'];
		$ar[$c][7] = $row['dongia'];
		$ar[$c][8] = "";
		$ar[$c][9] = 0;
		$ar[$c][10] = 0;
		$ar[$c][11] = 0;
		$c++;
	}
}
$sql = "Select ngaythang,tenchitiet,TTbaohong,Lydohong,soluong,dongia,sotien,dvt from tblbaohong where madonvi Like '$msdv%'".
	"  and mataisan like 'C%' ".
	($loaicc == ""?"":" and chitiethinhthai = '" . $loaicc . "'").($noisd == ""?"":" and noibaohong = '" . $noisd . "'").
	($nam == ""?"": " and year(ngaythang) = ".$nam);
//($tungay == ""?"":" and ngaythang >= '" . doingay($tungay) . "'").($denngay == ""?"":" and ngaythang <= '" . doingay($denngay) . "'");
$qrsql = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($qrsql))
{
	$ar[$c][0] = $row['ngaythang'];
	$ar[$c][1] = $row['TTbaohong'];
	$ar[$c][2] = $row['ngaythang'];
	$ar[$c][3] = $row['tenchitiet'];
	$ar[$c][4] = $row['dvt'];
	$ar[$c][5] = 0;
	$ar[$c][6] = 0;
	$ar[$c][7] = 0;
	$ar[$c][8] = $row['Lydohong'];
	$ar[$c][9] = $row['soluong'];
	$ar[$c][10] = $row['dongia'];
	$ar[$c][11] = $row['sotien'];
	$c++;
}
if($ckbts != 'No')
{
	$sql = "Select tbldenghi.ngaythang,tbldenghi.TTdenghi,tbldenghi.TTQLTS,tbldenghi.tenchitiet,tbldenghi.noidung as lydo,tblqlts.noidung".
		", DVT,DTKV,ngansach + nguonkhac as nguyengia from tbldenghi INNER JOIN tblqlts ON tbldenghi.TTQLTS = tblqlts.TTQLTS WHERE tbldenghi.madonvi like '$msdv%'".
		($loaicc == ""?"":" and tbldenghi.chitiethinhthai = '" . $loaicc . "'").($noisd == ""?"":" and tblqlts.noidung = '" . $noisd . "'").
		($nam == ""?"": " and year(tbldenghi.ngaythang) = ".$nam);
	$qrsql = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($qrsql))
	{
		$ar[$c][0] = $row['ngaythang'];
		$ar[$c][1] = $row['TTQLTS'];
		$ar[$c][2] = $row['ngaythang'];
		$ar[$c][3] = $row['tenchitiet'];
		$ar[$c][4] = $row['DVT'];
		$ar[$c][5] = 0;
		$ar[$c][6] = 0;
		$ar[$c][7] = 0;
		$ar[$c][8] = $row['lydo'];
		$ar[$c][9] = $row['DTKV'];
		$ar[$c][10] = $row['nguyengia'];
		$ar[$c][11] = $row['nguyengia'];
		$c++;
	}
}
uasort($ar,"my_sort");
?>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr style="vertical-align:top;">
			<td  rowspan="2" style="text-align:center;vertical-align:middle;">Ngày, tháng ghi sổ</td>
			<td  colspan="2" style="text-align:center;vertical-align:middle;">Chứng từ</td>
			<td  rowspan="2" style="text-align:center;vertical-align:middle;">Tên TSCĐ và công cụ,dụng cụ</td>
			<td  rowspan="2" style="text-align:center;vertical-align:middle;">Đơn vị tính</td>
			<td  colspan="3" style="text-align:center;vertical-align:middle;">Ghi tăng TSCĐ và công cụ, dụng cụ</td>
			<td  colspan="4" style="text-align:center;vertical-align:middle;">Ghi giảm TSCĐ và công cụ, dụng cụ</td>
		</tr>
		<tr style="vertical-align:middle;text-align:center;">
			<td   >Số hiệu</td>
			<td   >Ngày, tháng</td>
			<td   >Số lượng</td>
			<td  >Đơn giá</td>
			<td   >Thành tiền</td>
			<td   >Lý do</td>
			<td   >Số lượng</td>
			<td   >Đơn giá</td>
			<td   >Thành tiền</td>
		</tr>
		<tr style='text-align:center;vertical-align:middle;'>
			<td>A</td>
			<td>B</td>
			<td>C</td>
			<td>D</td>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>E</td>
			<td>5</td>
			<td>6</td>
			<td>7</td>
		</tr>
		<?php
		$tongtt =0;
		$tongttg = 0;
		foreach ($ar as $ar)
		{
			echo "<tr >";
			echo "<td  style='text-align:center;vertical-align:middle;'><nobr>".ngaythang($ar[0])."</nobr></td>";
			echo "<td  style='text-align:center;vertical-align:middle;'>$ar[1]</td>";
			echo "<td  style='text-align:center;vertical-align:middle;'><nobr>".ngaythang($ar[2])."</nobr></td>";
			echo "<td  style='text-align:left;vertical-align:middle;'><nobr>".$ar[3]."</nobr></td>";
			echo "<td  style='text-align:center;vertical-align:middle;'><nobr>".$ar[4]."</nobr></td>";
			echo "<td  style='text-align:center;vertical-align:middle;'><nobr>".dinhdangso($ar[5])."</nobr></td>";
			echo "<td  style='text-align:right;vertical-align:middle;'><nobr>".dinhdangso($ar[6])."</nobr></td>";
			echo "<td  style='text-align:right;vertical-align:middle;'><nobr>".dinhdangso($ar[7])."</nobr></td>";
			echo "<td  style='text-align:Left;vertical-align:middle;'><nobr>".$ar[8]."</nobr></td>";
			echo "<td  style='text-align:center;vertical-align:middle;'><nobr>".dinhdangso($ar[9])."</nobr></td>";
			echo "<td  style='text-align:right;vertical-align:middle;'><nobr>".dinhdangso($ar[10])."</nobr></td>";
			echo "<td  style='text-align:right;vertical-align:middle;'><nobr>".dinhdangso($ar[11])."</nobr></td>";
			echo "</tr>";
			$tongtt += $ar[7];
			$tongttg += kieudouble($ar[11]);
			$dst = $tongtt;
			$dstg = $tongttg;
		}
		$tongtt = dinhdangso($tongtt);
		$tongttg = dinhdangso($tongttg);
		echo "<tr style='vertical-align:top;'>";
		echo "<td  ></td>";
		echo "<td  ></td>";
		echo "<td  ></td>";
		echo "<td  style='text-align:center;vertical-align:middle;'><nobr>Tổng cộng</nobr></td>";
		echo "<td  ></td>";
		echo "<td  ></td>";
		echo "<td  ></td>";
		echo "<td  style='text-align:right;vertical-align:middle;'><nobr>$tongtt</nobr></td>";
		echo "<td  ></td>";
		echo "<td  ></td>";
		echo "<td  ></td>";
		echo "<td  style='text-align:right;vertical-align:middle;'><nobr>$tongttg</nobr></td>";
		echo "</tr>	";
		echo "</table>";
		?>
	</table>
<table >
	<tr>

	</tr>
	<tr>
		<td width="50%"></td>
		<td width="50%" style="text-align: center;">............, ngày ... tháng ... năm ......</td>
	</tr>
	<tr>
		<td style="text-align: center;: center; font-weight: bold;">Người lập biểu</td>
		<td style="text-align: center; font-weight: bold;"> Kế toán trưởng</td>
	</tr>
	<tr>
		<td style="text-align: center; font-style: italic;">(Ký, họ tên)</td>
		<td style="text-align: center; font-style: italic;">(ký, họ tên)</td>
	</tr>
</table>
</body>		
</html>	
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
	$ngaytu="";$ngayden="";$madv ="";$msdv="";
	if(isset($_POST['create'])){
		$ngaytu = $_POST['nttu'];
		$ngayden = $_POST['ntden'];		
		$madv = explode('>',$_POST['MADV']);
		$msdv = $madv[0];
	}
?>	
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td style="text-align: left;font-weight: bold;">
				<nobr><?php echo "Bộ, ngành, tỉnh: ".$madv[2] ?></nobr>
            </td>
            <td style="text-align: center; font-weight: bold;">
                <nobr>BÁO CÁO TỔNG HỢP TÌNH HÌNH TĂNG, GIẢM TÀI SẢN NHÀ NƯỚC</nobr>
            </td>
			<td style="text-align: center; font-weight: bold;"><nobr>Biểu số:02C-ĐK/TSNN</nobr></td>
        </tr>
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Tên đơn vị: ".$madv[2] ?></nobr></td>
		</tr>
		<tr>
			<td style="text-align: left;font-weight: bold;">
				<nobr>Mã đơn vị: </nobr>
            </td>
            <td style="text-align: center; font-weight: bold;">Phân 2: Chi tiết theo loại hình đơn vị</td>
			<td style="text-align: center; font-weight: bold;"></td>
		</tr>
		<tr>
			<td>
            </td>
            <td style="text-align: center;"><?php echo "Kỳ báo cáo: Từ ngày ".$ngaytu." đến ngày ".$ngayden; ?></td>
			<td></td>
		</tr>
		<tr>
			<td>
            </td>
            <td style="text-align: center;">Chi tiết tài sản đến bậc: 1</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
            <td style="text-align: right;font-style: italic;"><nobr>ĐVT cho: Diện tích đăt là: Mét vuông; Diện tích nhà là: Mét vuông;Số lượng là: Cái, Khuôn viên; Giá trị là: Nghìn đồng</nobr></td>			
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th rowspan="2" width="13%">Tài sản</th>
			<th rowspan="2" width="3%">Mã số</th>
			<th colspan="3">Số đầu kỳ</th>
			<th colspan="3">Số tăng trong kỳ</th>
			<th colspan="3">Số giảm trong kỳ</th>
			<th colspan="3">Số cuối kỳ</th>
		</tr>
		<tr>
			<th width="3%">Số lượng</th>
			<th width="7%">Diện tích</th>
			<th>Nguyên giá</th>
			<th width="3%">Số lượng</th>
			<th width="7%">Diện tích</th>
			<th>Nguyên giá</th>
			<th width="3%">Số lượng</th>
			<th width="7%">Diện tích</th>
			<th>Nguyên giá</th>
			<th width="3%">Số lượng</th>
			<th width="7%">Diện tích</th>
			<th>Nguyên giá</th>
		</tr>
<?php
// kết nối csdl
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Thoaikx/general.php");
// làm việc với table	
	$i = 0;
	$sql = "Select phanloai From thongtindonvi where madonvi Like '".$msdv.".%' Group by phanloai";
	$query = mysqli_query($con,$sql);
	while($rows = mysqli_fetch_array($query)){
		$i = $i + 1;
		$tong1=0;$tong2=0;$tong3=0;$tong4=0;$tong5=0;$tong6=0;$tong7=0;$tong8=0;$tong9=0;$tong10=0;$tong11=0;$tong12=0;
		$d1=0;$d2=0;$d3=0;$d4=0;$d5=0;$d6=0;$d7=0;$d8=0;$d9=0;$d10=0;$d11=0;$d12=0;
		$n1=0;$n2=0;$n3=0;$n4=0;$n5=0;$n6=0;$n7=0;$n8=0;$n9=0;$n10=0;$n11=0;$n12=0;
		$o1=0;$o2=0;$o3=0;$o4=0;$o5=0;$o6=0;$o7=0;$o8=0;$o9=0;$o10=0;$o11=0;$o12=0;
		$k1=0;$k2=0;$k3=0;$k4=0;$k5=0;$k6=0;$k7=0;$k8=0;$k9=0;$k10=0;$k11=0;$k12=0;
		$sqldk = "Select tblqlts.DTKV+tblqlts.TDTSXD as sl,tblqlts.ngansach+tblqlts.nguonkhac as ng From tblqlts inner join thongtindonvi on tblqlts.madonvi = thongtindonvi.madonvi Where thongtindonvi.phanloai = '".$rows['phanloai']."' and (tblqlts.chitiethinhthai Like 'Đất%' or tblqlts.chitiethinhthai like 'Quyền sử dụng đất%') and tblqlts.ngaysudung < '".doingay($ngaytu)."'";
		$qdk = mysqli_query($con,$sqldk);
		while($rdk = mysqli_fetch_array($qdk)){
			$d1=$d1 + 1;
			$d2=$d2 + kieudouble($rdk['sl']);
			$d3=$d3 + kieudouble($rdk['ng']);
		}
		$sqlttk = "Select tblqlts.DTKV+tblqlts.TDTSXD as sl,tblqlts.ngansach+tblqlts.nguonkhac as ng From tblqlts inner join thongtindonvi on tblqlts.madonvi = thongtindonvi.madonvi Where thongtindonvi.phanloai = '".$rows['phanloai']."' and (tblqlts.chitiethinhthai Like 'Đất%' or tblqlts.chitiethinhthai like 'Quyền sử dụng đất%') and tblqlts.ngaysudung between '".doingay($ngaytu)."' and '".doingay($ngayden)."'";
		$qttk = mysqli_query($con,$sqlttk);
		while($rttk = mysqli_fetch_array($qttk)){
			$d4=$d4 + 1;
			$d5=$d5 + kieudouble($rttk['sl']);
			$d6=$d6 + kieudouble($rttk['ng']);
		}
		$sqlgtk = "Select tbldenghi.mataisan From tbldenghi inner join thongtindonvi on tbldenghi.madonvi = thongtindonvi.madonvi Where thongtindonvi.phanloai = '".$rows['phanloai']."' and (tbldenghi.chitiethinhthai Like 'Đất%' or tbldenghi.chitiethinhthai like 'Quyền sử dụng đất%') and tbldenghi.ngaythang between '".doingay($ngaytu)."' and '".doingay($ngayden)."'";
		$qgtk = mysqli_query($con,$sqlgtk);
		while($rgtk = mysqli_fetch_array($qgtk)){
			$d7=$d7 + 1;
			//$d5=$d5 + kieudouble($rgtk['sl']);
			//$d6=$d6 + kieudouble($rgtk['ng']);
		}
		$sqlck = "Select tblqlts.DTKV+tblqlts.TDTSXD as sl,tblqlts.ngansach+tblqlts.nguonkhac as ng From tblqlts inner join thongtindonvi on tblqlts.madonvi = thongtindonvi.madonvi Where thongtindonvi.phanloai = '".$rows['phanloai']."' and (tblqlts.chitiethinhthai Like 'Đất%' or tblqlts.chitiethinhthai like 'Quyền sử dụng đất%') and tblqlts.ngaysudung <= '".doingay($ngayden)."'";
		$qck = mysqli_query($con,$sqlck);
		while($rck = mysqli_fetch_array($qck)){
			$d10=$d10 + 1;
			$d11=$d11 + kieudouble($rck['sl']);
			$d12=$d12 + kieudouble($rck['ng']);
		}
		// nhà
		$sqldkn = "Select tblqlts.DTKV+tblqlts.TDTSXD as sl,tblqlts.ngansach+tblqlts.nguonkhac as ng From tblqlts inner join thongtindonvi on tblqlts.madonvi = thongtindonvi.madonvi Where thongtindonvi.phanloai = '".$rows['phanloai']."' and tblqlts.chitiethinhthai Like 'Nhà%' and tblqlts.ngaysudung < '".doingay($ngaytu)."'";
		$qdkn = mysqli_query($con,$sqldkn);
		while($rdkn = mysqli_fetch_array($qdkn)){
			$n1=$n1 + 1;
			$n2=$n2 + kieudouble($rdkn['sl']);
			$n3=$n3 + kieudouble($rdkn['ng']);
		}
		$sqlttkn = "Select tblqlts.DTKV+tblqlts.TDTSXD as sl,tblqlts.ngansach+tblqlts.nguonkhac as ng From tblqlts inner join thongtindonvi on tblqlts.madonvi = thongtindonvi.madonvi Where thongtindonvi.phanloai = '".$rows['phanloai']."' and tblqlts.chitiethinhthai Like 'Nhà%' and tblqlts.ngaysudung between '".doingay($ngaytu)."' and '".doingay($ngayden)."'";
		$qttkn = mysqli_query($con,$sqlttkn);
		while($rttkn = mysqli_fetch_array($qttkn)){
			$n4=$n4 + 1;
			$n5=$n5 + kieudouble($rttkn['sl']);
			$n6=$n6 + kieudouble($rttkn['ng']);
		}
		$sqlgtkn = "Select tbldenghi.mataisan From tbldenghi inner join thongtindonvi on tbldenghi.madonvi = thongtindonvi.madonvi Where thongtindonvi.phanloai = '".$rows['phanloai']."' and tbldenghi.chitiethinhthai Like 'Nhà%' and tbldenghi.ngaythang between '".doingay($ngaytu)."' and '".doingay($ngayden)."'";
		$qgtkn = mysqli_query($con,$sqlgtkn);
		while($rgtkn = mysqli_fetch_array($qgtkn)){
			$n7=$n7 + 1;
			//$d5=$d5 + kieudouble($rgtk['sl']);
			//$d6=$d6 + kieudouble($rgtk['ng']);
		}
		$sqlckn = "Select tblqlts.DTKV+tblqlts.TDTSXD as sl,tblqlts.ngansach+tblqlts.nguonkhac as ng From tblqlts inner join thongtindonvi on tblqlts.madonvi = thongtindonvi.madonvi Where thongtindonvi.phanloai = '".$rows['phanloai']."' and tblqlts.chitiethinhthai Like 'Nhà%' and tblqlts.ngaysudung <= '".doingay($ngayden)."'";
		$qckn = mysqli_query($con,$sqlckn);
		while($rckn = mysqli_fetch_array($qckn)){
			$n10=$n10 + 1;
			$n11=$n11 + kieudouble($rckn['sl']);
			$n12=$n12 + kieudouble($rckn['ng']);
		}
		//ô tô
		$sqldko = "Select tblqlts.DTKV+tblqlts.TDTSXD as sl,tblqlts.ngansach+tblqlts.nguonkhac as ng From tblqlts inner join thongtindonvi on tblqlts.madonvi = thongtindonvi.madonvi Where thongtindonvi.phanloai = '".$rows['phanloai']."' and tblqlts.chitiethinhthai Like 'Phương tiện vận tải đường bộ%' and tblqlts.ngaysudung < '".doingay($ngaytu)."'";
		$qdko = mysqli_query($con,$sqldko);
		while($rdko = mysqli_fetch_array($qdko)){
			$o1=$o1 + 1;
			$o2=$o2 + kieudouble($rdko['sl']);
			$o3=$o3 + kieudouble($rdko['ng']);
		}
		$sqlttko = "Select tblqlts.DTKV+tblqlts.TDTSXD as sl,tblqlts.ngansach+tblqlts.nguonkhac as ng From tblqlts inner join thongtindonvi on tblqlts.madonvi = thongtindonvi.madonvi Where thongtindonvi.phanloai = '".$rows['phanloai']."' and tblqlts.chitiethinhthai Like 'Phương tiện vận tải đường bộ%' and tblqlts.ngaysudung between '".doingay($ngaytu)."' and '".doingay($ngayden)."'";
		$qttko = mysqli_query($con,$sqlttko);
		while($rttko = mysqli_fetch_array($qttko)){
			$o4=$o4 + 1;
			$o5=$o5 + kieudouble($rttko['sl']);
			$o6=$o6 + kieudouble($rttko['ng']);
		}
		$sqlgtko = "Select tbldenghi.mataisan From tbldenghi inner join thongtindonvi on tbldenghi.madonvi = thongtindonvi.madonvi Where thongtindonvi.phanloai = '".$rows['phanloai']."' and tbldenghi.chitiethinhthai Like 'Phương tiện vận tải đường bộ%' and tbldenghi.ngaythang between '".doingay($ngaytu)."' and '".doingay($ngayden)."'";
		$qgtko = mysqli_query($con,$sqlgtko);
		while($rgtko = mysqli_fetch_array($qgtko)){
			$o7=$o7 + 1;
			//$d5=$d5 + kieudouble($rgtk['sl']);
			//$d6=$d6 + kieudouble($rgtk['ng']);
		}
		$sqlcko = "Select tblqlts.DTKV+tblqlts.TDTSXD as sl,tblqlts.ngansach+tblqlts.nguonkhac as ng From tblqlts inner join thongtindonvi on tblqlts.madonvi = thongtindonvi.madonvi Where thongtindonvi.phanloai = '".$rows['phanloai']."' and tblqlts.chitiethinhthai Like 'Phương tiện vận tải đường bộ%' and tblqlts.ngaysudung <= '".doingay($ngayden)."'";
		$qcko = mysqli_query($con,$sqlcko);
		while($rcko = mysqli_fetch_array($qcko)){
			$o10=$o10 + 1;
			$o11=$o11 + kieudouble($rcko['sl']);
			$o12=$o12 + kieudouble($rcko['ng']);
		}
		//khác
		$sqldkk = "Select tblqlts.DTKV+tblqlts.TDTSXD as sl,tblqlts.ngansach+tblqlts.nguonkhac as ng From tblqlts inner join thongtindonvi on tblqlts.madonvi = thongtindonvi.madonvi Where thongtindonvi.phanloai = '".$rows['phanloai']."' and tblqlts.chitiethinhthai Not Like 'Phương tiện vận tải đường bộ%' and tblqlts.chitiethinhthai Not Like 'Quyền sử dụng đất%' and tblqlts.chitiethinhthai Not Like 'Nhà%' and tblqlts.ngaysudung < '".doingay($ngaytu)."'";
		$qdkk = mysqli_query($con,$sqldkk);
		while($rdkk = mysqli_fetch_array($qdkk)){
			$k1=$k1 + 1;
			$k2=$k2 + kieudouble($rdkk['sl']);
			$k3=$k3 + kieudouble($rdkk['ng']);
		}
		$sqlttkk = "Select tblqlts.DTKV+tblqlts.TDTSXD as sl,tblqlts.ngansach+tblqlts.nguonkhac as ng From tblqlts inner join thongtindonvi on tblqlts.madonvi = thongtindonvi.madonvi Where thongtindonvi.phanloai = '".$rows['phanloai']."' and tblqlts.chitiethinhthai Not Like 'Phương tiện vận tải đường bộ%' and tblqlts.chitiethinhthai Not Like 'Quyền sử dụng đất%' and tblqlts.chitiethinhthai Not Like 'Nhà%' and tblqlts.ngaysudung between '".doingay($ngaytu)."' and '".doingay($ngayden)."'";
		$qttkk = mysqli_query($con,$sqlttkk);
		while($rttkk = mysqli_fetch_array($qttkk)){
			$k4=$k4 + 1;
			$k5=$k5 + kieudouble($rttkk['sl']);
			$k6=$k6 + kieudouble($rttkk['ng']);
		}
		$sqlgtkk = "Select tbldenghi.mataisan From tbldenghi inner join thongtindonvi on tbldenghi.madonvi = thongtindonvi.madonvi Where thongtindonvi.phanloai = '".$rows['phanloai']."' and tbldenghi.chitiethinhthai Not Like 'Phương tiện vận tải đường bộ%' and tbldenghi.chitiethinhthai Not Like 'Quyền sử dụng đất%' and tbldenghi.chitiethinhthai Not Like 'Nhà%' and tbldenghi.ngaythang between '".doingay($ngaytu)."' and '".doingay($ngayden)."'";
		$qgtkk = mysqli_query($con,$sqlgtkk);
		while($rgtkk = mysqli_fetch_array($qgtkk)){
			$k7=$k7 + 1;
			//$d5=$d5 + kieudouble($rgtk['sl']);
			//$d6=$d6 + kieudouble($rgtk['ng']);
		}
		$sqlckk = "Select tblqlts.DTKV+tblqlts.TDTSXD as sl,tblqlts.ngansach+tblqlts.nguonkhac as ng From tblqlts inner join thongtindonvi on tblqlts.madonvi = thongtindonvi.madonvi Where thongtindonvi.phanloai = '".$rows['phanloai']."' and tblqlts.chitiethinhthai Not Like 'Phương tiện vận tải đường bộ%' and tblqlts.chitiethinhthai Not Like 'Quyền sử dụng đất%' and tblqlts.chitiethinhthai Not Like 'Nhà%' and tblqlts.ngaysudung <= '".doingay($ngayden)."'";
		$qckk = mysqli_query($con,$sqlckk);
		while($rckk = mysqli_fetch_array($qckk)){
			$k10=$k10 + 1;
			$k11=$k11 + kieudouble($rckk['sl']);
			$k12=$k12 + kieudouble($rckk['ng']);
		}
		$tong1=$d1+$n1+$o1+$k1;$tong2=$d2+$n2+$o2+$k2;$tong3=$d3+$n3+$o3+$k3;$tong4=$d4+$n4+$o4+$k4;$tong5=$d5+$n5+$o5+$k5;$tong6=$d6+$n6+$o6+$k6;$tong7=$d7+$n7+$o7+$k7;$tong8=$d8+$n8+$o8+$k8;$tong9=$d9+$n9+$o9+$k9;$tong10=$d10+$n10+$o10+$k10;$tong11=$d11+$n11+$o11+$k11;$tong12=$d12+$n12+$o12+$k12;
		echo "<tr style='font-weight: bold;'>";
			echo "<td style='text-align: left;'>".$i.". ".$rows['phanloai']."</td>";
			echo "<td></td>";
			echo "<td style='text-align: right;'>".dinhdangso($tong1)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($tong2)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($tong3/1000)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($tong4)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($tong5)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($tong6/1000)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($tong7)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($tong8)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($tong9/1000)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($tong10)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($tong11)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($tong12/1000)."</td>";
		echo "</tr>";
		// chi tiết
		echo "<tr>";
			echo "<td style='text-align: left;'>&nbsp;&nbsp;Đất</td>";
			echo "<td>1</td>";
			echo "<td style='text-align: right;'>".dinhdangso($d1)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($d2)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($d3/1000)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($d4)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($d5)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($d6/1000)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($d7)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($d8)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($d9/1000)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($d10)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($d11)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($d12/1000)."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td style='text-align: left;'>&nbsp;&nbsp;Nhà</td>";
			echo "<td>2</td>";
			echo "<td style='text-align: right;'>".dinhdangso($n1)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($n2)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($n3/1000)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($n4)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($n5)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($n6/1000)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($n7)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($n8)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($n9/1000)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($n10)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($n11)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($n12/1000)."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td style='text-align: left;'>&nbsp;&nbsp;Ô tô</td>";
			echo "<td>3</td>";
			echo "<td style='text-align: right;'>".dinhdangso($o1)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($o2)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($o3/1000)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($o4)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($o5)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($o6/1000)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($o7)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($o8)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($o9/1000)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($o10)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($o11)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($o12/1000)."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td style='text-align: left;'>&nbsp;&nbsp;Tài sản khác</td>";
			echo "<td>4</td>";
			echo "<td style='text-align: right;'>".dinhdangso($k1)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($k2)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($k3/1000)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($k4)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($k5)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($k6/1000)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($k7)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($k8)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($k9/1000)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($k10)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($k11)."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($k12/1000)."</td>";
		echo "</tr>";
	}
?>	
	</table>
	<table>
		<tr></tr>
		<tr>
			<td></td>
			<td></td>
			<td style="text-align: center;">............, ngày ... tháng ... năm ......</td>
		</tr>
		<tr>
			<td style="text-align: center; font-weight: bold;">Người lập biểu</td>
			<td></td>
			<td style="text-align: center; font-weight: bold;">Thủ trưởng đơn vị</td>			
		</tr>
		<tr>
			<td style="text-align: center; font-style: italic;">(Ký, ghi rõ họ tên)</td>
			<td></td>
			<td style="text-align: center; font-style: italic;">(Ký, đóng dấu, ghi rõ họ tên)</td>
		</tr>
	</table>
</body>		
</html>
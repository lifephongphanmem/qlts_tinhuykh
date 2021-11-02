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
	$khoi="";$ngabc="";$ploai="";$madv ="";$bac="";
	if(isset($_POST['create'])){
		$khoi = $_POST['khoi'];
		$ngabc = $_POST['nttu'];
		$ploai = $_POST['ploai'];	
		$madv = explode('>',$_POST['MADV']);
		$msdv = $madv[0];				
		//$bac = $_POST['bac'];
	}
?>
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td style="text-align: left;font-weight: bold;">
				<nobr>Bộ, ngành, tỉnh: .....................</nobr>
            </td>
            <td style="text-align: center; font-weight: bold;">
                <nobr>TỔNG HỢP TÀI SẢN NHÀ NƯỚC</nobr>
            </td>
			<td style="text-align: center; font-weight: bold;"><nobr>Biểu số:02A-ĐK/TSNN</nobr></td>
        </tr>
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Tên đơn vị: ".$madv[2]; ?></nobr></td>
		</tr>
		<tr>
			<td style="text-align: left;font-weight: bold;">
				<nobr>Mã đơn vị: T35</nobr>
            </td>
            <td style="text-align: center; font-weight: bold;">Phân 1: Tổng hợp chung</td>
			<td style="text-align: center; font-weight: bold;"></td>
		</tr>
		<tr>
			<td>
            </td>
            <td style="text-align: center;"><?php echo "Ngày báo cáo: ".$ngabc ?></td>
			<td></td>
		</tr>
		<tr>
			<td>
            </td>
            <td style="text-align: center;"><?php echo "Đơn vị thuộc khối: ".$khoi ?></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
            <td style="text-align: right;font-style: italic;"><nobr>ĐVT cho: Diện tích đăt là: Mét vuông; Diện tích nhà là: Mét vuông;Số lượng là: Cái, Khuôn viên; Giá trị là: Nghìn đồng</nobr></td>			
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th rowspan="3" width="20%">Tài sản</th>
			<th rowspan="3" width="7%">Mã tài sản</th>
			<th rowspan="3" width="7%">Số lượng</th>
			<th rowspan="3" width="10%">Diện tích</th>			
			<th colspan="3">Nguyên giá</th>
			<th rowspan="3" width="13%">Giá trị còn lại</th>			
		</tr>
		<tr>
			<th rowspan="2" width="13%">Tổng cộng</th>			
			<th colspan="2">Trong đó</th>
		</tr>
		<tr>
			<th width="12%">Ngân sách</th>
			<th width="12%">Nguồn khác</th>			
		</tr>
<?php 
//làm việc với cơ sở dữ liệu
// kết nối csdl
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	function dinhdangso($so)
	{
	$kq = "";
	if ($so > 0)
		$kq = number_format($so);
	return $kq;	
	}
	function kieudouble($so)
	{
		$kq = "";$a="";
		$kq1 = 0;$vt1=0;$vt2=0;
		if ($so != "")
		{
			$vt1 = strpos($so,",");
			$vt2 = strpos($so,".");
			if ($vt1==-1 && $vt2==-1)
			{
				$kq1 = (double)$so;
			}
			else
			{
				if ($vt1 > 0)
				{
					$kq = str_replace(",","",$so);
				}
				else
				{
					$kq = str_replace(".","",$so);
				}
			}			
			$kq1 = (double)$kq;
		}
		else
		{
			$kq1 = 0;
		}
		return $kq1;
	}
	function doingay($ngay)
	{
		$kq = substr($ngay,6,4) ."/". substr($ngay,3,2) . "/". substr($ngay,0,2);		
		return $kq;
	}
	$sql = "select count(tblqlts.TTQLTS) as s,tbldanhsachqd32.bac1,Sum(tblqlts.DTKV+tblqlts.TDTSXD) as sl,Sum(tblqlts.ngansach) as ns,Sum(tblqlts.nguonkhac) as nk,Sum(tblqlts.ngansach+tblqlts.nguonkhac) as ng";
	$sql = $sql." From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32";
	$sql = $sql." Where tblqlts.madonvi Like '".$msdv."%' and tblqlts.ngaysudung <= '".doingay($ngabc)."'";
	$sql = $sql." Group by tbldanhsachqd32.bac1";
	$queryct = mysqli_query($con,$sql);$i=0;
	while($rowct = mysqli_fetch_array($queryct)){
		$sqlhm = "Select Max(tblhaomon.TThaomon),tblhaomon.TTQLTS,tblhaomon.sodu,tblhaomon.sotien From (tblhaomon inner join tblqlts on tblhaomon.TTQLTS = tblqlts.TTQLTS) inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32";
		$sqlhm = $sqlhm." Where tbldanhsachqd32.bac1 = '".$rowct['bac1']."' and tblhaomon.ngaythang <= '".doingay($ngabc)."'";
		$sqlhm = $sqlhm." Group by tblhaomon.TTQLTS";
		$queryhm = mysqli_query($con,$sqlhm);$sohaomon=0;
		while($rowhm = mysqli_fetch_array($queryhm)){
			$sohaomon = $sohaomon + $rowhm['sodu'] + $rowhm['sotien'];
		}
		$i = $i + 1;
		echo "<tr>";
			echo "<td style='text-align: left;'>".$rowct['bac1']."</td>";
			echo "<td>".$i."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($rowct['s'])."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($rowct['sl'])."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($rowct['ng'])."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($rowct['ns'])."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($rowct['nk'])."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($rowct['ng']-$sohaomon)."</td>";
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
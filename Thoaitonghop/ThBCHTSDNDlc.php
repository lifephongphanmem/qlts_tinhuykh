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
	$tendv="";$ngabc="";$madv ="";$msdv="";$phanloai="";
	if(isset($_POST['create'])){
		$tendv = $_POST['dv'];
		$ngabc = $_POST['nttu'];
		$phanloai = $_POST['phanloai'];
		$madv = explode('>',$_POST['MADV']);
		$msdv = $madv[0];
	}
?>	
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td style="text-align: left;font-weight: bold;">
				<nobr><?php echo "Bộ, ngành, tỉnh: ....................."; ?></nobr>
            </td>
            <td style="text-align: center; font-weight: bold;">
                <nobr>TỔNG HỢP BÁO CÁO HIỆN TRẠNG SỬ DỤNG NHÀ, ĐẤT</nobr>
            </td>
			<td style="text-align: center; font-weight: bold;"><nobr>Biểu số:02B-ĐK/TSNN</nobr></td>
        </tr>
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Tên đơn vị: ".$madv[2]; ?></nobr></td>
		</tr>
		<tr>
			<td style="text-align: left;font-weight: bold;">
				<nobr>Mã đơn vị: </nobr>
            </td>
            <td style="text-align: center; font-weight: bold;">Phần 3: Chi tiết theo từng đơn vị trực thuộc</td>
			<td style="text-align: center; font-weight: bold;"></td>
		</tr>
		<tr>
			<td>
            </td>
            <td style="text-align: center;"><?php echo "Ngày báo cáo: ".$ngabc; ?></td>
			<td></td>
		</tr>
		<tr>
			<td>
            </td>
            <td style="text-align: center;">Chi tiết tài sản đến bậc: 4</td>
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
			<th rowspan="3" width="7%">Số lượng</th>
			<th rowspan="3" width="10%">Diện tích</th>
			<th colspan="7">Hiện trạng sử dụng</th>			
		</tr>
		<tr>
			<th rowspan="2" width="9%">Trụ sở làm việc</th>
			<th rowspan="2" width="9%">Hoạt động sự nghiệp</th>
			<th colspan="5">Sử dụng khác</th>
		</tr>
		<tr>
			<th width="9%">Làm nhà ở</th>
			<th width="9%">Cho thuê</th>
			<th width="9%">Bỏ trống</th>
			<th width="9%">Bị lấn chiếm</th>
			<th width="9%">Khác</th>
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
$sqldv = "Select madonvi,tendv From thongtindonvi where ";
if ($tendv != "")
	$sqldv = $sqldv."madonvi = '".$tendv."'";
else
	$sqldv = $sqldv."madonvi Like '".$msdv.".%'";

$query = mysqli_query($con,$sqldv);$i=0;
	while($rows = mysqli_fetch_array($query)) {
		$i = $i + 1;
		echo "<tr style='font-weight: bold;'>";
		echo "<td style='text-align: left;'>" . $i . ". " . $rows['tendv'] . "</td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "</tr>";
		$sql = "Select tblqlts.TTQLTS,tblqlts.tenchitiet,tblqlts.tentaisan,tblqlts.DTKV+tblqlts.TDTSXD as sl,tbldanhsachqd32.bac1,tbldanhsachqd32.bac2,tbldanhsachqd32.bac3";
		$sql = $sql . " From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32 Where tblqlts.madonvi = '" . $rows['madonvi'] . "' and ".
			($phanloai == ""? "(tbldanhsachqd32.bac1 Like 'Đất%' or tbldanhsachqd32.bac1 Like 'Quyền sử dụng đất%' or tbldanhsachqd32.bac1 Like 'Nhà%')" :"tbldanhsachqd32.bac1 Like '$phanloai%' ");
		$sql = $sql . " and tblqlts.ngaysudung <= '" . doingay($ngabc) . "' order by tbldanhsachqd32.bac1,tbldanhsachqd32.bac2,tbldanhsachqd32.bac3";

		$queryct = mysqli_query($con, $sql);
		$ts = array(array("A", "B", "C", "D", 0, 0, 0, 0, 0, 0, 0, 0, 0));
		$cs = 0;
		while ($rowct = mysqli_fetch_array($queryct)) {
			$ts[$cs][0] = $rowct['bac1'];
			$ts[$cs][1] = $rowct['bac2'];
			$ts[$cs][2] = $rowct['bac3'];
			$ts[$cs][3] = $rowct['tenchitiet'];
			$ts[$cs][4] = 1;
			$ts[$cs][5] = $rowct['sl'];
			$sqlht = "Select soluong,phanloai From tblhientrang Where TTQLTS = '" . $rowct['TTQLTS'] . "'";
			$queryht = mysqli_query($con, $sqlht);
			$s1 = 0;
			$s2 = 0;
			$s3 = 0;
			$s4 = 0;
			$s5 = 0;
			$s6 = 0;
			$s7 = 0;
			while ($rowht = mysqli_fetch_array($queryht)) {
				if ($rowht['phanloai'] == "Trụ sở làm việc")
					$s1 = $rowht['soluong'];
				else if ($rowht['phanloai'] == "Hoạt động sự nghiệp")
					$s2 = $rowht['soluong'];
				else if ($rowht['phanloai'] == "Làm nhà ở")
					$s3 = $rowht['soluong'];
				else if ($rowht['phanloai'] == "Cho thuê")
					$s4 = $rowht['soluong'];
				else if ($rowht['phanloai'] == "Bỏ trống")
					$s5 = $rowht['soluong'];
				else if ($rowht['phanloai'] == "Bị lấn chiếm")
					$s6 = $rowht['soluong'];
				else if ($rowht['phanloai'] == "Khác")
					$s7 = $rowht['soluong'];
			}
			$ts[$cs][6] = $s1;
			$ts[$cs][7] = $s2;
			$ts[$cs][8] = $s3;
			$ts[$cs][9] = $s4;
			$ts[$cs][10] = $s5;
			$ts[$cs][11] = $s6;
			$ts[$cs][12] = $s7;
			$cs = $cs + 1;
		}
		$tennhomsau1 = "";
		$tennhom1 = "";
		$tennhomsau2 = "";
		$tennhom2 = "";
		$tennhomsau3 = "";
		$tennhom3 = "";
		for ($z = 0; $z < $cs; $z++) {
			$tennhom1 = $ts[$z][0];
			if ($tennhom1 != $tennhomsau1) {
				$tennhom2 = $ts[$z][1];
				$tennhom3 = $ts[$z][2];
				$nh11 = 0;
				$nh12 = 0;
				$nh13 = 0;
				$nh14 = 0;
				$nh15 = 0;
				$nh16 = 0;
				$nh17 = 0;
				$nh18 = 0;
				$nh19 = 0;
				$nh21 = 0;
				$nh22 = 0;
				$nh23 = 0;
				$nh24 = 0;
				$nh25 = 0;
				$nh26 = 0;
				$nh27 = 0;
				$nh28 = 0;
				$nh29 = 0;
				$nh31 = 0;
				$nh32 = 0;
				$nh33 = 0;
				$nh34 = 0;
				$nh35 = 0;
				$nh36 = 0;
				$nh37 = 0;
				$nh38 = 0;
				$nh39 = 0;
				for ($j = 0; $j < $cs; $j++) {
					if ($ts[$j][0] == $tennhom1) {
						$nh11 = $nh11 + $ts[$j][4];
						$nh12 = $nh12 + $ts[$j][5];
						$nh13 = $nh13 + $ts[$j][6];
						$nh14 = $nh14 + $ts[$j][7];
						$nh15 = $nh15 + $ts[$j][8];
						$nh16 = $nh16 + $ts[$j][9];
						$nh17 = $nh17 + $ts[$j][10];
						$nh18 = $nh18 + $ts[$j][11];
						$nh19 = $nh19 + $ts[$j][12];
					}
					if ($ts[$j][1] == $tennhom2) {
						$nh21 = $nh21 + $ts[$j][4];
						$nh22 = $nh22 + $ts[$j][5];
						$nh23 = $nh23 + $ts[$j][6];
						$nh24 = $nh24 + $ts[$j][7];
						$nh25 = $nh25 + $ts[$j][8];
						$nh26 = $nh26 + $ts[$j][9];
						$nh27 = $nh27 + $ts[$j][10];
						$nh28 = $nh28 + $ts[$j][11];
						$nh29 = $nh29 + $ts[$j][12];
					}
					if ($ts[$j][2] == $tennhom3) {
						$nh31 = $nh31 + $ts[$j][4];
						$nh32 = $nh32 + $ts[$j][5];
						$nh33 = $nh33 + $ts[$j][6];
						$nh34 = $nh34 + $ts[$j][7];
						$nh35 = $nh35 + $ts[$j][8];
						$nh36 = $nh36 + $ts[$j][9];
						$nh37 = $nh37 + $ts[$j][10];
						$nh38 = $nh38 + $ts[$j][11];
						$nh39 = $nh39 + $ts[$j][12];
					}
				}
				$nh11 = $nh11;
				$nh12 = dinhdangso($nh12);
				$nh13 = dinhdangso($nh13);
				$nh14 = dinhdangso($nh14);
				$nh15 = dinhdangso($nh15);
				$nh16 = dinhdangso($nh16);
				$nh17 = dinhdangso($nh17);
				$nh18 = dinhdangso($nh18);
				$nh19 = dinhdangso($nh19);
				echo "<tr>";
				echo "<td style='text-align: left;'>$tennhom1</td>";
				echo "<td style='text-align: right;'>$nh11</td>";
				echo "<td style='text-align: right;'>$nh12</td>";
				echo "<td style='text-align: right;'>$nh13</td>";
				echo "<td style='text-align: right;'>$nh14</td>";
				echo "<td style='text-align: right;'>$nh15</td>";
				echo "<td style='text-align: right;'>$nh16</td>";
				echo "<td style='text-align: right;'>$nh17</td>";
				echo "<td style='text-align: right;'>$nh18</td>";
				echo "<td style='text-align: right;'>$nh19</td>";
				echo "</tr>";
			}
			$tennhomsau1 = $ts[$z][0];
			//$tennhom2 = $ts[$z][1];
			if ($tennhom2 != $tennhomsau2) {
				//$nh21=0;$nh22=0;$nh23=0;$nh24=0;$nh25=0;$nh26=0;$nh27=0;$nh28=0;$nh29=0;
				/* for($j1=0;$j1<$cs;$j1++)
                {
                    if ($ts[$j1][0]==$tennhom2)
                    {
                        $nh21=$nh21+$ts[$j1][4];$nh22=$nh22+$ts[$j1][5];$nh23=$nh23+$ts[$j1][6];$nh24=$nh24+$ts[$j1][7];$nh25=$nh25+$ts[$j1][8];$nh26=$nh26+$ts[$j1][9];$nh27=$nh27+$ts[$j1][10];$nh28=$nh28+$ts[$j1][11];$nh29=$nh29+$ts[$j1][12];
                    }
                } */
				$nh21 = dinhdangso($nh21);
				$nh22 = dinhdangso($nh22);
				$nh23 = dinhdangso($nh23);
				$nh24 = dinhdangso($nh24);
				$nh25 = dinhdangso($nh25);
				$nh26 = dinhdangso($nh26);
				$nh27 = dinhdangso($nh27);
				$nh28 = dinhdangso($nh28);
				$nh29 = dinhdangso($nh29);
				echo "<tr>";
				echo "<td style='text-align: left;'>&nbsp;&nbsp;&nbsp;$tennhom2</td>";
				echo "<td style='text-align: right;'>$nh21</td>";
				echo "<td style='text-align: right;'>$nh22</td>";
				echo "<td style='text-align: right;'>$nh23</td>";
				echo "<td style='text-align: right;'>$nh24</td>";
				echo "<td style='text-align: right;'>$nh25</td>";
				echo "<td style='text-align: right;'>$nh26</td>";
				echo "<td style='text-align: right;'>$nh27</td>";
				echo "<td style='text-align: right;'>$nh28</td>";
				echo "<td style='text-align: right;'>$nh29</td>";
				echo "</tr>";
			}
			$tennhomsau2 = $ts[$z][1];
			if ($tennhom3 != $tennhomsau3) {
				//$nh21=0;$nh22=0;$nh23=0;$nh24=0;$nh25=0;$nh26=0;$nh27=0;$nh28=0;$nh29=0;
				/* for($j1=0;$j1<$cs;$j1++)
                {
                    if ($ts[$j1][0]==$tennhom2)
                    {
                        $nh21=$nh21+$ts[$j1][4];$nh22=$nh22+$ts[$j1][5];$nh23=$nh23+$ts[$j1][6];$nh24=$nh24+$ts[$j1][7];$nh25=$nh25+$ts[$j1][8];$nh26=$nh26+$ts[$j1][9];$nh27=$nh27+$ts[$j1][10];$nh28=$nh28+$ts[$j1][11];$nh29=$nh29+$ts[$j1][12];
                    }
                } */
				$nh31 = dinhdangso($nh31);
				$nh32 = dinhdangso($nh32);
				$nh33 = dinhdangso($nh33);
				$nh34 = dinhdangso($nh34);
				$nh35 = dinhdangso($nh35);
				$nh36 = dinhdangso($nh36);
				$nh37 = dinhdangso($nh37);
				$nh38 = dinhdangso($nh38);
				$nh39 = dinhdangso($nh39);
				echo "<tr>";
				echo "<td style='text-align: left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$tennhom3</td>";
				echo "<td style='text-align: right;'>$nh31</td>";
				echo "<td style='text-align: right;'>$nh32</td>";
				echo "<td style='text-align: right;'>$nh33</td>";
				echo "<td style='text-align: right;'>$nh34</td>";
				echo "<td style='text-align: right;'>$nh35</td>";
				echo "<td style='text-align: right;'>$nh36</td>";
				echo "<td style='text-align: right;'>$nh37</td>";
				echo "<td style='text-align: right;'>$nh38</td>";
				echo "<td style='text-align: right;'>$nh39</td>";
				echo "</tr>";
			}
			$tennhomsau3 = $ts[$z][2];
			echo "<tr>";
			echo "<td style='text-align: left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $ts[$z][3] . "</td>";
			echo "<td style='text-align: right;'>" . dinhdangso($ts[$z][4]) . "</td>";
			echo "<td style='text-align: right;'>" . dinhdangso($ts[$z][5]) . "</td>";
			echo "<td style='text-align: right;'>" . dinhdangso($ts[$z][6]) . "</td>";
			echo "<td style='text-align: right;'>" . dinhdangso($ts[$z][7]) . "</td>";
			echo "<td style='text-align: right;'>" . dinhdangso($ts[$z][8]) . "</td>";
			echo "<td style='text-align: right;'>" . dinhdangso($ts[$z][9]) . "</td>";
			echo "<td style='text-align: right;'>" . dinhdangso($ts[$z][10]) . "</td>";
			echo "<td style='text-align: right;'>" . dinhdangso($ts[$z][11]) . "</td>";
			echo "<td style='text-align: right;'>" . dinhdangso($ts[$z][12]) . "</td>";
			echo "</tr>";
		}
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
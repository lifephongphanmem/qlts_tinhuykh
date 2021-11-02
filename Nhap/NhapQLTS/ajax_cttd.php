<script src='jquery-1.5.1.js' type='text/javascript'></script>
<?php	
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$tv2 = "";
	$idct = substr($_GET['id_a'],0, strpos($_GET['id_a'],";"));
	$idts = substr($_GET['id_a'],strpos($_GET['id_a'],";")+1);
	$sqlct = "Select tenchitieu from tblchitiets where ttct = ".$idct;	
	$qrct = mysqli_query($con,$sqlct);
	$tenct = "";
	while($rct=@mysqli_fetch_array($qrct))
	{
		$tenct = $rct['tenchitieu'];
	}
	if (($tenct == "Tên nhà")||($tenct == "Tên tài sản"))		
		$tv2="select tenchitiet from tblqlts where TTqlts = ".$idts;
	else if ($tenct == "Thuộc khuôn viên đất")		
		$tv2="select TKVDAT from tblqlts  where TTqlts = ".$idts;
	else if ($tenct == "Tổng diện tích (m2)")		
		$tv2="select TDTSXD from tblqlts  where TTqlts = ".$idts;
	else if ($tenct == "Số tầng")		
		$tv2="select SOTA from tblqlts  where TTqlts = ".$idts;	
	else if (($tenct == "Nguyên giá (ngàn đồng)")||($tenct == "Giá trị (ngàn đồng)"))		
		$tv2="select (ngansach + nguonkhac) as NG from tblqlts  where TTqlts = ".$idts;
	else if ($tenct == "    + Nguồn ngân sách")		
		$tv2="select ngansach from tblqlts  where TTqlts = ".$idts;
	else if ($tenct == "    + Nguồn khác")		
		$tv2="select nguonkhac from tblqlts  where TTqlts = ".$idts;
	else if ($tenct == "    + Làm trụ sở làm việc")		
		$tv2="select soluong from tblhientrang  where phanloai = 'Làm trụ sở làm việc' and TTQLTS = ".$idts;
	else if ($tenct == "    + Làm cơ sở hoạt động sự nghiệp")		
		$tv2="select soluong from tblhientrang  where phanloai = 'Làm cơ sở hoạt động sự nghiệp' and TTQLTS = ".$idts;
	else if ($tenct == "    + Cho thuê")		
		$tv2="select soluong from tblhientrang  where phanloai = 'Cho thuê' and TTQLTS = ".$idts;
	else if ($tenct == "    + Làm nhà ở")		
		$tv2="select soluong from tblhientrang  where phanloai = 'Làm nhà ở' and TTQLTS = ".$idts;	
	else if ($tenct == "    + Bỏ trống")		
		$tv2="select soluong from tblhientrang  where phanloai = 'Bỏ trống' and TTQLTS = ".$idts;
	else if ($tenct == "    + Sử dụng khác")		
		$tv2="select soluong from tblhientrang  where phanloai = 'Sử dụng khác' and TTQLTS = ".$idts;
	else if ($tenct == "    + Quản lý nhà nước")		
		$tv2="select soluong from tblhientrang  where phanloai = 'Quản lý nhà nước' and TTQLTS = ".$idts;	
	else if ($tenct == "    + Hoạt động sự nghiệp (Kinh doanh/ Không kinh doanh)")		
		$tv2="select soluong from tblhientrang  where phanloai = 'Hoạt động sự nghiệp (Kinh doanh/ Không kinh doanh)' and TTQLTS = ".$idts;	
	else if ($tenct == "Thông tin khác")		
		$tv2="select GCTS from tblqlts  where TTqlts = ".$idts;		
	$tv2_1=mysqli_query($con,$tv2);
	$ttkk = "";
	while($tv2_2=@mysqli_fetch_array($tv2_1))
	{			
		$ttkk = $tv2_2[0];
	}
	echo"<div class='form-group'>";
		echo"<label for='field-3' class='col-sm-3 control-label'>Thông tin kê khai:</label>";
		echo"<div id='TTKK' class='col-sm-9'>";
			echo"<input name='TTKK' type='text' class='form-control' id='TTKK' value = '$ttkk'>";
		echo"</div>";
	echo"</div>";
?>
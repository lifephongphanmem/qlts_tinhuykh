<?php
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
function doingay($ngay)
{
	$kq = substr($ngay,6,4) ."/". substr($ngay,3,2) . "/". substr($ngay,0,2);		
	return $kq;
}	
  function add_person( $ten, $soluong, $dongia, $thanhtien,$ngaynhap,$tencc)
  {
    global $con;
	$sql = "Select mataisanqd32,chitiethinhthai from tbldanhsachqd32 where tentaiqd32 = '$tencc'";
	$kq = mysqli_query($con,$sql);
	$ma = "";$chitiet="";
	while($row=mysqli_fetch_array($kq)){
		$ma = $row[0];$chitiet=$row[1];
	}
	$ngay = doingay($ngaynhap);
	$sql = "Insert into tblqlcc(tenchitiet,DTKV,dongia,thanhtien,ngaysudung,tentaisan,ngaynhap,mataisan,chitiethinhthai) values('$ten',$soluong,$dongia,$thanhtien,'$ngay','$tencc','$ngay','$ma','$chitiet')";
	$kq = mysqli_query($con,$sql);
  }  
  if ($_FILES['file']['tmp_name'])
  {
  $dom = DOMDocument::load( $_FILES['file']['tmp_name'] );
  $rows = $dom->getElementsByTagName( 'Row' );
  $first_row = true;
  foreach ($rows as $row)
  {
  if ( !$first_row )
  {
  $ten = "";
  $soluong = 0;
  $dongia = 0;
  $thanhtien = 0;
  $ngaynhap = "";
  $tencc = "";
  $index = 1;
  $cells = $row->getElementsByTagName( 'Cell' );
  foreach( $cells as $cell )
  { 
  $ind = $cell->getAttribute( 'Index' );
  if ( $ind != null ) $index = $ind;
  
  if ( $index == 1 ) $ten = $cell->nodeValue;
  if ( $index == 2 ) $soluong = $cell->nodeValue;
  if ( $index == 3 ) $dongia = $cell->nodeValue;
  if ( $index == 4 ) $thanhtien = $cell->nodeValue;
  if ( $index == 5 ) $ngaynhap = $cell->nodeValue;
  if ( $index == 6 ) $tencc = $cell->nodeValue;
  $index += 1;
  }
  add_person( $ten, $soluong, $dongia, $thanhtien,$ngaynhap,$tencc);
  }
  $first_row = false;
  }
  header("location: nhandlexcel.php");
  }
  ?>
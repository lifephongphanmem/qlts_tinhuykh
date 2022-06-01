<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,500,600,700" />
    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title> Mẫu số C03/CCTT Thông tư số 39/2021/TT-BTC | QLTS</title>
    <!-- <link rel="shortcut icon" href="{{ url('assets/media/logos/LIFESOFT.png') }}" /> -->
    <!-- <link href="{{ url('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="{{ url('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="{{ url('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" /> -->
    <style type="text/css">
        body {
            font: normal 14px/16px time, serif;
        }

        table,
        p {
            width: 90%;
            margin: auto;
        }

        td,
        th {
            padding: 5px;
        }

        p {
            padding: 5px;
        }

        .sangtrangmoi {
            page-break-before: always
        }

        span {
            text-transform: uppercase;
            font-weight: bold;
        }

        @media print {
            .in {
                display: none !important;
            }

            #myBtn {
                display: none !important;
            }
        }

        #fixNav {
            /*background: #f7f7f7;*/
            background: #f9f9fa;
            width: 100%;
            height: 50px;
            display: block;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.5);
            /*Đổ bóng cho menu*/
            position: fixed;
            /*Cho menu cố định 1 vị trí với top và left*/
            top: 0;
            /*Nằm trên cùng*/
            left: 0;
            /*Nằm sát bên trái*/
            z-index: 100000;
            /*Hiển thị lớp trên cùng*/
        }

        #fixNav ul {
            margin: 0;
            padding: 0;
        }

        #fixNav ul li {
            list-style: none inside;
            width: auto;
            float: left;
            line-height: 35px;
            /*Cho text canh giữa menu*/
            color: #fff;
            padding: 0;
            margin-left: 10px;
            margin-top: 5px;
            position: relative;
        }

        #fixNav ul li a {
            text-transform: uppercase;
            white-space: nowrap;
            /*Cho chữ trong menu không bị wrap*/
            padding: 0 10px;
            color: #fff;
            display: block;
            font-size: 0.8em;
            text-decoration: none;
        }


        #myBtn {
            display: none;
            position: fixed;
            bottom: 30px;
            right: 20px;
            justify-content: center;
            align-items: center;
            width: 36px;
            height: 36px;
            z-index: 100;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: transparent;
            cursor: pointer;
            padding: 15px;
            color: black;
            /*border-radius: 4px ;*/
            border-radius: 0.42rem !important;
        }

        #myBtn:hover {
            color: #3699FF;
        }
    </style>
    <script>
        function ExDoc() {
            var sourceHTML = document.getElementById("data").innerHTML;
            var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
            var fileDownload = document.createElement("a");
            document.body.appendChild(fileDownload);
            fileDownload.href = source;
            fileDownload.download = $('#title').val() + '.doc';
            fileDownload.click();
            document.body.removeChild(fileDownload);
        }

        function exportTableToExcel() {
            var downloadLink;
            var dataType = 'application/vnd.ms-excel';
            var tableHeader = document.getElementById('data_header');
            var tableSelect = document.getElementById('data_render');
            var tableHeader1 = document.getElementById('data_header1');
            var tableSelect1 = document.getElementById('data_render1');
            var tableHTML = tableHeader.outerHTML.replace(/ /g, '%20') + tableSelect.outerHTML.replace(/ /g, '%20') +
                tableHeader1.outerHTML.replace(/ /g, '%20') + tableSelect1.outerHTML.replace(/ /g, '%20');
            
            // Specify file name
            var filename = $('#title').val() + '.xls';

            // Create download link element
            downloadLink = document.createElement("a");

            document.body.appendChild(downloadLink);

            if (navigator.msSaveOrOpenBlob) {
                var blob = new Blob(['\ufeff', tableHTML], {
                    type: dataType
                });
                navigator.msSaveOrOpenBlob(blob, filename);
            } else {
                // Create a link to the file
                downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

                // Setting the file name
                downloadLink.download = filename;

                //triggering the function
                downloadLink.click();
            }
        }
    </script>
</head>

<body>
    <div class="in">
        <nav id="fixNav">
            <ul>
                <li>
                    <button type="button" class="btn btn-success" border-radius:=border-radius: 30px=30px onclick="window.print()">
                        <i class="fas fa-print"></i>&ensp;In dữ liệu
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" onclick="ExDoc()">
                        <i class="far fa-file-word"></i>&ensp;Kết xuất file Doc
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" onclick="exportTableToExcel()">
                        <i class="far fa-file-excel"></i>&ensp;Export Excel
                    </button>
                </li>
            </ul>
        </nav>
    </div>

    <?php
    require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
    $ngaythang = date('Y-m-d');
    $phanloai = "";
    $nam = "";
    $mah = "";
    $madv = "";
    $ts5 = "No";
    $noidung = "";
    $hmtd = "No";
    $hmht = "No";
    if (isset($_POST['create'])) {
        if ($_POST['sobg'] != "")
            $phanloai = explode('>', $_POST['sobg']);
        $nam = $_POST['nam'];
        $mah = $_POST['huyen'];
        if (isset($_POST['ts5']))
            $ts5 = $_POST['ts5'];
        $madv = explode('>', $_POST['MADV']);
        $msdv = $_POST['msdv'];
        if ($_POST['donvi'] != "")
            $msdv = $_POST['donvi'];
        if (isset($_POST['noidung']))
            $noidung = $_POST['noidung'];
        if (isset($_POST['hmtd']))
            $hmtd = $_POST['hmtd'];
        if (isset($_POST['hmht']))
            $hmht = $_POST['hmht'];
    }
    $tendv = "";
    $nlb = "";
    $ktt = "";
    $maqhns = "";
    $sql = "Select tendv,nlb,ptkt,maqhns,ttdv From thongtindonvi WHERE madonvi = '$msdv'";
    $qrsql = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($qrsql)) {
        $tendv = $row['tendv'];
        $nlb = $row['nlb'];
        $ktt = $row['ptkt'];
        $ttdv = $row['ttdv'];
        $maqhns = $row['maqhns'];
    }

    //làm việc với cơ sở dữ liệu
    require("$_SERVER[DOCUMENT_ROOT]/thoaikx/general.php");
    function sapxep($in_bike1, $in_bike2)
    {
        if ($in_bike1["ngaythang"] > $in_bike2["ngaythang"]) {
            return 1;
        } else if ($in_bike1["ngaythang"] == $in_bike2["ngaythang"]) {
            return 0;
        } else {
            return -1;
        }
    }

    $arhh = array(
        0 => array("noidung" => "Số đầu năm", "nha" => 0, "ptvt" => 0, "khac" => 0),
        1 => array("noidung" => "Tăng trong năm", "nha" => 0, "ptvt" => 0, "khac" => 0),
        2 => array("noidung" => "Giảm trong năm", "nha" => 0, "ptvt" => 0, "khac" => 0),
        3 => array("noidung" => "Số cuối năm", "nha" => 0, "ptvt" => 0, "khac" => 0)
    );
    $arvh = array(
        0 => array("noidung" => "Số đầu năm", "dat" => 0, "banquyen" => 0, "phanmem" => 0, "thuonghieu" => 0, "khac" => 0),
        1 => array("noidung" => "Tăng trong năm", "dat" => 0, "banquyen" => 0, "phanmem" => 0, "thuonghieu" => 0, "khac" => 0),
        2 => array("noidung" => "Giảm trong năm", "dat" => 0, "banquyen" => 0, "phanmem" => 0, "thuonghieu" => 0, "khac" => 0),
        3 => array("noidung" => "Số cuối năm", "dat" => 0, "banquyen" => 0, "phanmem" => 0, "thuonghieu" => 0, "khac" => 0)
    );
    $arhhhm = array(
        0 => array("noidung" => "Số đầu năm", "nha" => 0, "ptvt" => 0, "khac" => 0),
        1 => array("noidung" => "Tăng trong năm", "nha" => 0, "ptvt" => 0, "khac" => 0),
        2 => array("noidung" => "Giảm trong năm", "nha" => 0, "ptvt" => 0, "khac" => 0),
        3 => array("noidung" => "Số cuối năm", "nha" => 0, "ptvt" => 0, "khac" => 0)
    );
    $arvhhm = array(
        0 => array("noidung" => "Số đầu năm", "dat" => 0, "banquyen" => 0, "phanmem" => 0, "thuonghieu" => 0, "khac" => 0),
        1 => array("noidung" => "Tăng trong năm", "dat" => 0, "banquyen" => 0, "phanmem" => 0, "thuonghieu" => 0, "khac" => 0),
        2 => array("noidung" => "Giảm trong năm", "dat" => 0, "banquyen" => 0, "phanmem" => 0, "thuonghieu" => 0, "khac" => 0),
        3 => array("noidung" => "Số cuối năm", "dat" => 0, "banquyen" => 0, "phanmem" => 0, "thuonghieu" => 0, "khac" => 0)
    );
    $arhhcl = array(
        0 => array("noidung" => "Số đầu năm", "nha" => 0, "ptvt" => 0, "khac" => 0),
        1 => array("noidung" => "Số cuối năm", "nha" => 0, "ptvt" => 0, "khac" => 0)
    );
    $arvhcl = array(
        0 => array("noidung" => "Số đầu năm", "dat" => 0, "banquyen" => 0, "phanmem" => 0, "thuonghieu" => 0, "khac" => 0),
        1 => array("noidung" => "Số cuối năm", "dat" => 0, "banquyen" => 0, "phanmem" => 0, "thuonghieu" => 0, "khac" => 0)
    );

    //Nguyên giá
    function nguyengia(&$arhh, &$arvh, &$arhhcl, &$arvhcl, $_aDV)
    {
        global $con;
        global $nam;
        foreach ($_aDV as $value) {
            $sql = "Select ngansach + nguonkhac as nguyengia, YEAR(ngaysudung) as nam, tbldanhsachqd32.hinhthaitaisan,tbldanhsachqd32.dacdiemtaisan
 			From tblqlts INNER JOIN tbldanhsachqd32 ON tblqlts.mataisan = tbldanhsachqd32.mataisanqd32 WHERE YEAR(ngaysudung) <= $nam
 			AND tblqlts.madonvi = '$value'";

            $qrsql = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($qrsql)) {
                if ($row['nam'] < $nam) {
                    $i = 0;
                    if (($row['hinhthaitaisan'] == 'Nhà, công trình xây dựng' || $row['hinhthaitaisan'] == 'Vật kiến trúc') && $row['nam'] < $nam) {
                        $arhh[$i]['nha'] += $row['nguyengia'];
                        $arhhcl[$i]['nha'] += $row['nguyengia'];
                    }
                    if (($row['hinhthaitaisan'] == 'Xe ô tô' || $row['hinhthaitaisan'] == 'Phương tiện vận tải khác (ngoài xe ô tô)') && $row['nam'] < $nam) {
                        $arhh[$i]['ptvt'] += $row['nguyengia'];
                        $arhhcl[$i]['ptvt'] += $row['nguyengia'];
                    }
                    if (($row['hinhthaitaisan'] == 'Máy móc, thiết bị' || $row['hinhthaitaisan'] == 'Cây lâu năm, súc vật làm việc và/hoặc cho sản phẩm'
                            || $row['hinhthaitaisan'] == 'Tài sản cố định hữu hình khác') && $row['nam'] < $nam && $row['dacdiemtaisan'] == 'Hữu hình'
                    ) {
                        $arhh[$i]['khac'] += $row['nguyengia'];
                        $arhhcl[$i]['khac'] += $row['nguyengia'];
                    }
                    if ($row['hinhthaitaisan'] == 'Quyền sử dụng đất' && $row['nam'] < $nam) {
                        $arvh[$i]['dat'] += $row['nguyengia'];
                        $arvhcl[$i]['dat'] += $row['nguyengia'];
                    }
                    if (strpos($row['hinhthaitaisan'], "Quyền") === true && $row['hinhthaitaisan'] != 'Quyền sử dụng đất' && $row['nam'] < $nam) {
                        $arvh[$i]['banquyen'] += $row['nguyengia'];
                        $arvhcl[$i]['banquyen'] += $row['nguyengia'];
                    }
                    if ($row['hinhthaitaisan'] == 'Phần mềm ứng dụng' && $row['nam'] < $nam) {
                        $arvh[$i]['phanmem'] += $row['nguyengia'];
                        $arvhcl[$i]['phanmem'] += $row['nguyengia'];
                    }
                    if ($row['hinhthaitaisan'] == 'Tài sản cố định vô hình khác' && $row['nam'] < $nam) {
                        $arvh[$i]['khac'] += $row['nguyengia'];
                        $arvhcl[$i]['khac'] += $row['nguyengia'];
                    }
                }
                if ($row['nam'] == $nam) {
                    $i = 1;
                    if (($row['hinhthaitaisan'] == 'Nhà, công trình xây dựng' || $row['hinhthaitaisan'] == 'Vật kiến trúc') && $row['nam'] == $nam) {
                        $arhh[$i]['nha'] += $row['nguyengia'];
                    }
                    if (($row['hinhthaitaisan'] == 'Xe ô tô' || $row['hinhthaitaisan'] == 'Phương tiện vận tải khác (ngoài xe ô tô)') && $row['nam'] == $nam) {
                        $arhh[$i]['ptvt'] += $row['nguyengia'];
                    }
                    if (($row['hinhthaitaisan'] == 'Máy móc, thiết bị' || $row['hinhthaitaisan'] == 'Cây lâu năm, súc vật làm việc và/hoặc cho sản phẩm'
                            || $row['hinhthaitaisan'] == 'Tài sản cố định hữu hình khác') && $row['nam'] == $nam && $row['dacdiemtaisan'] == 'Hữu hình'
                    ) {
                        $arhh[$i]['khac'] += $row['nguyengia'];
                    }
                    if ($row['hinhthaitaisan'] == 'Quyền sử dụng đất' && $row['nam'] == $nam) {
                        $arvh[$i]['dat'] += $row['nguyengia'];
                    }
                    if (strpos($row['hinhthaitaisan'], "Quyền") === true && $row['hinhthaitaisan'] != 'Quyền sử dụng đất' && $row['nam'] == $nam) {
                        $arvh[$i]['banquyen'] += $row['nguyengia'];
                    }
                    if ($row['hinhthaitaisan'] == 'Phần mềm ứng dụng' && $row['nam'] == $nam) {
                        $arvh[$i]['phanmem'] += $row['nguyengia'];
                    }
                    if ($row['hinhthaitaisan'] == 'Tài sản cố định vô hình khác' && $row['nam'] == $nam) {
                        $arvh[$i]['khac'] += $row['nguyengia'];
                    }
                }
            }
        }
    }

    function tanggiamts(&$arhh, &$arvh, &$arhhcl, &$arvhcl, $_aDV)
    {
        global $con;
        global $nam;
        foreach ($_aDV as $value) {
            $sql = "Select tbltanggiam.sotien as nguyengia, YEAR(ngaytanggiam) as nam, tbldanhsachqd32.hinhthaitaisan,tbldanhsachqd32.dacdiemtaisan,tbltanggiam.tanggiam
 			From tbltanggiam INNER JOIN tblqlts ON tbltanggiam.TTQLTS = tblqlts.TTQLTS  INNER JOIN tbldanhsachqd32 ON tblqlts.mataisan = tbldanhsachqd32.mataisanqd32
 			WHERE YEAR(ngaytanggiam) <= $nam AND tblqlts.madonvi = '$value'";
            $qrsql = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($qrsql)) {
                if ($row['nam'] < $nam && $row['tanggiam'] == 'Tăng') {
                    $i = 0;
                    if (($row['hinhthaitaisan'] == 'Nhà, công trình xây dựng' || $row['hinhthaitaisan'] == 'Vật kiến trúc') && $row['nam'] < $nam) {
                        $arhh[$i]['nha'] += $row['nguyengia'];
                        $arhhcl[$i]['nha'] += $row['nguyengia'];
                    }
                    if (($row['hinhthaitaisan'] == 'Xe ô tô' || $row['hinhthaitaisan'] == 'Phương tiện vận tải khác (ngoài xe ô tô)') && $row['nam'] < $nam) {
                        $arhh[$i]['ptvt'] += $row['nguyengia'];
                        $arhhcl[$i]['ptvt'] += $row['nguyengia'];
                    }
                    if (($row['hinhthaitaisan'] == 'Máy móc, thiết bị' || $row['hinhthaitaisan'] == 'Cây lâu năm, súc vật làm việc và/hoặc cho sản phẩm'
                            || $row['hinhthaitaisan'] == 'Tài sản cố định hữu hình khác') && $row['nam'] < $nam && $row['dacdiemtaisan'] == 'Hữu hình'
                    ) {
                        $arhh[$i]['khac'] += $row['nguyengia'];
                        $arhhcl[$i]['khac'] += $row['nguyengia'];
                    }
                    if ($row['hinhthaitaisan'] == 'Quyền sử dụng đất' && $row['nam'] < $nam) {
                        $arvh[$i]['dat'] += $row['nguyengia'];
                        $arvhcl[$i]['dat'] += $row['nguyengia'];
                    }
                    if (strpos($row['hinhthaitaisan'], "Quyền") === true && $row['hinhthaitaisan'] != 'Quyền sử dụng đất' && $row['nam'] < $nam) {
                        $arvh[$i]['banquyen'] += $row['nguyengia'];
                        $arvhcl[$i]['banquyen'] += $row['nguyengia'];
                    }
                    if ($row['hinhthaitaisan'] == 'Phần mềm ứng dụng' && $row['nam'] < $nam) {
                        $arvh[$i]['phanmem'] += $row['nguyengia'];
                        $arvhcl[$i]['phanmem'] += $row['nguyengia'];
                    }
                    if ($row['hinhthaitaisan'] == 'Tài sản cố định vô hình khác' && $row['nam'] < $nam) {
                        $arvh[$i]['khac'] += $row['nguyengia'];
                        $arvhcl[$i]['khac'] += $row['nguyengia'];
                    }
                }
                if ($row['nam'] < $nam && $row['tanggiam'] == 'Giảm') {
                    $i = 0;
                    if (($row['hinhthaitaisan'] == 'Nhà, công trình xây dựng' || $row['hinhthaitaisan'] == 'Vật kiến trúc') && $row['nam'] < $nam) {
                        $arhh[$i]['nha'] -= $row['nguyengia'];
                        $arhhcl[$i]['nha'] += $row['nguyengia'];
                    }
                    if (($row['hinhthaitaisan'] == 'Xe ô tô' || $row['hinhthaitaisan'] == 'Phương tiện vận tải khác (ngoài xe ô tô)') && $row['nam'] < $nam) {
                        $arhh[$i]['ptvt'] -= $row['nguyengia'];
                        $arhhcl[$i]['ptvt'] += $row['nguyengia'];
                    }
                    if (($row['hinhthaitaisan'] == 'Máy móc, thiết bị' || $row['hinhthaitaisan'] == 'Cây lâu năm, súc vật làm việc và/hoặc cho sản phẩm'
                            || $row['hinhthaitaisan'] == 'Tài sản cố định hữu hình khác') && $row['nam'] < $nam && $row['dacdiemtaisan'] == 'Hữu hình'
                    ) {
                        $arhh[$i]['khac'] -= $row['nguyengia'];
                        $arhhcl[$i]['khac'] += $row['nguyengia'];
                    }
                    if ($row['hinhthaitaisan'] == 'Quyền sử dụng đất' && $row['nam'] < $nam) {
                        $arvh[$i]['dat'] -= $row['nguyengia'];
                        $arvhcl[$i]['dat'] += $row['nguyengia'];
                    }
                    if (strpos($row['hinhthaitaisan'], "Quyền") === true && $row['hinhthaitaisan'] != 'Quyền sử dụng đất' && $row['nam'] < $nam) {
                        $arvh[$i]['banquyen'] -= $row['nguyengia'];
                        $arvhcl[$i]['banquyen'] += $row['nguyengia'];
                    }
                    if ($row['hinhthaitaisan'] == 'Phần mềm ứng dụng' && $row['nam'] < $nam) {
                        $arvh[$i]['phanmem'] -= $row['nguyengia'];
                        $arvhcl[$i]['phanmem'] += $row['nguyengia'];
                    }
                    if ($row['hinhthaitaisan'] == 'Tài sản cố định vô hình khác' && $row['nam'] < $nam) {
                        $arvh[$i]['khac'] -= $row['nguyengia'];
                        $arvhcl[$i]['khac'] += $row['nguyengia'];
                    }
                }
                if ($row['nam'] == $nam && $row['tanggiam'] == 'Tăng') {
                    $i = 1;
                    if (($row['hinhthaitaisan'] == 'Nhà, công trình xây dựng' || $row['hinhthaitaisan'] == 'Vật kiến trúc') && $row['nam'] == $nam) {
                        $arhh[$i]['nha'] += $row['nguyengia'];
                    }
                    if (($row['hinhthaitaisan'] == 'Xe ô tô' || $row['hinhthaitaisan'] == 'Phương tiện vận tải khác (ngoài xe ô tô)') && $row['nam'] == $nam) {
                        $arhh[$i]['ptvt'] += $row['nguyengia'];
                    }
                    if (($row['hinhthaitaisan'] == 'Máy móc, thiết bị' || $row['hinhthaitaisan'] == 'Cây lâu năm, súc vật làm việc và/hoặc cho sản phẩm'
                            || $row['hinhthaitaisan'] == 'Tài sản cố định hữu hình khác') && $row['nam'] == $nam && $row['dacdiemtaisan'] == 'Hữu hình'
                    ) {
                        $arhh[$i]['khac'] += $row['nguyengia'];
                    }
                    if ($row['hinhthaitaisan'] == 'Quyền sử dụng đất' && $row['nam'] == $nam) {
                        $arvh[$i]['dat'] += $row['nguyengia'];
                    }
                    if (strpos($row['hinhthaitaisan'], "Quyền") === true && $row['hinhthaitaisan'] != 'Quyền sử dụng đất' && $row['nam'] == $nam) {
                        $arvh[$i]['banquyen'] += $row['nguyengia'];
                    }
                    if ($row['hinhthaitaisan'] == 'Phần mềm ứng dụng' && $row['nam'] == $nam) {
                        $arvh[$i]['phanmem'] += $row['nguyengia'];
                    }
                    if ($row['hinhthaitaisan'] == 'Tài sản cố định vô hình khác' && $row['nam'] == $nam) {
                        $arvh[$i]['khac'] += $row['nguyengia'];
                    }
                }
                if ($row['nam'] == $nam && $row['tanggiam'] == 'Giảm') {
                    $i = 2;
                    if (($row['hinhthaitaisan'] == 'Nhà, công trình xây dựng' || $row['hinhthaitaisan'] == 'Vật kiến trúc') && $row['nam'] < $nam) {
                        $arhh[$i]['nha'] -= $row['nguyengia'];
                    }
                    if (($row['hinhthaitaisan'] == 'Xe ô tô' || $row['hinhthaitaisan'] == 'Phương tiện vận tải khác (ngoài xe ô tô)') && $row['nam'] < $nam) {
                        $arhh[$i]['ptvt'] -= $row['nguyengia'];
                    }
                    if (($row['hinhthaitaisan'] == 'Máy móc, thiết bị' || $row['hinhthaitaisan'] == 'Cây lâu năm, súc vật làm việc và/hoặc cho sản phẩm'
                            || $row['hinhthaitaisan'] == 'Tài sản cố định hữu hình khác') && $row['nam'] < $nam && $row['dacdiemtaisan'] == 'Hữu hình'
                    ) {
                        $arhh[$i]['khac'] -= $row['nguyengia'];
                    }
                    if ($row['hinhthaitaisan'] == 'Quyền sử dụng đất' && $row['nam'] < $nam) {
                        $arvh[$i]['dat'] -= $row['nguyengia'];
                    }
                    if (strpos($row['hinhthaitaisan'], "Quyền") === true && $row['hinhthaitaisan'] != 'Quyền sử dụng đất' && $row['nam'] < $nam) {
                        $arvh[$i]['banquyen'] -= $row['nguyengia'];
                    }
                    if ($row['hinhthaitaisan'] == 'Phần mềm ứng dụng' && $row['nam'] < $nam) {
                        $arvh[$i]['phanmem'] -= $row['nguyengia'];
                    }
                    if ($row['hinhthaitaisan'] == 'Tài sản cố định vô hình khác' && $row['nam'] < $nam) {
                        $arvh[$i]['khac'] -= $row['nguyengia'];
                    }
                }
            }
        }
    }

    function haomonts(&$arhhhm, &$arvhhm, &$arhhcl, &$arvhcl, $_aDV)
    {
        global $con;
        global $nam;
        foreach ($_aDV as $value) {
            $sql = "Select tblhaomon.sodu, tblhaomon.sotien, namhaomon as nam, tbldanhsachqd32.hinhthaitaisan,tbldanhsachqd32.dacdiemtaisan
 			From tblhaomon INNER JOIN tblqlts ON tblhaomon.TTQLTS = tblqlts.TTQLTS  INNER JOIN tbldanhsachqd32 ON tblqlts.mataisan = tbldanhsachqd32.mataisanqd32
 			WHERE namhaomon = $nam AND tblqlts.madonvi = '$value'";
            $qrsql = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($qrsql)) {
                $i = 0;
                if ($row['hinhthaitaisan'] == 'Nhà, công trình xây dựng' || $row['hinhthaitaisan'] == 'Vật kiến trúc') {
                    $arhhhm[$i]['nha'] += $row['sodu'];
                    $arhhcl[$i]['nha'] -= $row['sodu'];
                }
                if ($row['hinhthaitaisan'] == 'Xe ô tô' || $row['hinhthaitaisan'] == 'Phương tiện vận tải khác (ngoài xe ô tô)') {
                    $arhhhm[$i]['ptvt'] += $row['sodu'];
                    $arhhcl[$i]['ptvt'] -= $row['sodu'];
                }
                if (($row['hinhthaitaisan'] == 'Máy móc, thiết bị' || $row['hinhthaitaisan'] == 'Cây lâu năm, súc vật làm việc và/hoặc cho sản phẩm'
                        || $row['hinhthaitaisan'] == 'Tài sản cố định hữu hình khác') && $row['dacdiemtaisan'] == 'Hữu hình'
                ) {
                    $arhhhm[$i]['khac'] += $row['sodu'];
                    $arhhcl[$i]['khac'] -= $row['sodu'];
                }
                if ($row['hinhthaitaisan'] == 'Quyền sử dụng đất') {
                    $arvhhm[$i]['dat'] += $row['sodu'];
                    $arvhcl[$i]['dat'] -= $row['sodu'];
                }
                if (strpos($row['hinhthaitaisan'], "Quyền") === true && $row['hinhthaitaisan'] != 'Quyền sử dụng đất') {
                    $arvhhm[$i]['banquyen'] += $row['sodu'];
                    $arvhcl[$i]['banquyen'] -= $row['sodu'];
                }
                if ($row['hinhthaitaisan'] == 'Phần mềm ứng dụng') {
                    $arvhhm[$i]['phanmem'] += $row['sodu'];
                    $arvhcl[$i]['phanmem'] -= $row['sodu'];
                }
                if ($row['hinhthaitaisan'] == 'Tài sản cố định vô hình khác') {
                    $arvhhm[$i]['khac'] += $row['sodu'];
                    $arvhcl[$i]['khac'] -= $row['sodu'];
                }
                $i = 1;
                if (($row['hinhthaitaisan'] == 'Nhà, công trình xây dựng' || $row['hinhthaitaisan'] == 'Vật kiến trúc')) {
                    $arhhhm[$i]['nha'] += $row['sotien'];
                }
                if (($row['hinhthaitaisan'] == 'Xe ô tô' || $row['hinhthaitaisan'] == 'Phương tiện vận tải khác (ngoài xe ô tô)')) {
                    $arhhhm[$i]['ptvt'] += $row['sotien'];
                }
                if (($row['hinhthaitaisan'] == 'Máy móc, thiết bị' || $row['hinhthaitaisan'] == 'Cây lâu năm, súc vật làm việc và/hoặc cho sản phẩm'
                        || $row['hinhthaitaisan'] == 'Tài sản cố định hữu hình khác') && $row['dacdiemtaisan'] == 'Hữu hình'
                ) {
                    $arhhhm[$i]['khac'] += $row['sotien'];
                }
                if ($row['hinhthaitaisan'] == 'Quyền sử dụng đất') {
                    $arvhhm[$i]['dat'] += $row['sotien'];
                }
                if (strpos($row['hinhthaitaisan'], "Quyền") === true && $row['hinhthaitaisan'] != 'Quyền sử dụng đất') {
                    $arvhhm[$i]['banquyen'] += $row['sotien'];
                }
                if ($row['hinhthaitaisan'] == 'Phần mềm ứng dụng') {
                    $arvhhm[$i]['phanmem'] += $row['sotien'];
                }
                if ($row['hinhthaitaisan'] == 'Tài sản cố định vô hình khác') {
                    $arvhhm[$i]['khac'] += $row['sotien'];
                }
            }
        }
    }

    $_sQLdv = "Select distinct thongtindonvi.madonvi" .
        " from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi" .
        " where tblqlts.madonvi Like '$mah%' and tblqlts.madonvi Like '$msdv%'";
    $_qdv = mysqli_query($con, $_sQLdv);
    $_aDV = array();
    while ($_r = mysqli_fetch_array($_qdv)) {
        $_aDV[] = $_r[0];
    }
    nguyengia($arhh, $arvh, $arhhcl, $arvhcl, $_aDV);
    tanggiamts($arhh, $arvh, $arhhcl, $arvhcl, $_aDV);
    haomonts($arhhhm, $arvhhm, $arhhcl, $arvhcl, $_aDV);
    foreach ($arhh as $ct) {
        $i = 3;
        if ($ct['noidung'] == 'Giảm trong năm') {
            $arhh[$i]['nha'] -= $ct['nha'];
            $arhh[$i]['ptvt'] -= $ct['ptvt'];
            $arhh[$i]['khac'] -= $ct['khac'];
            $arhhcl[1]['nha'] -= $ct['nha'];
            $arhhcl[1]['ptvt'] -= $ct['ptvt'];
            $arhhcl[1]['khac'] -= $ct['khac'];
        } else {
            $arhh[$i]['nha'] += $ct['nha'];
            $arhh[$i]['ptvt'] += $ct['ptvt'];
            $arhh[$i]['khac'] += $ct['khac'];
            $arhhcl[1]['nha'] += $ct['nha'];
            $arhhcl[1]['ptvt'] += $ct['ptvt'];
            $arhhcl[1]['khac'] += $ct['khac'];
        }
    }
    foreach ($arvh as $ct) {
        $i = 3;
        if ($ct['noidung'] == 'Giảm trong năm') {
            $arvh[$i]['dat'] -= $ct['dat'];
            $arvh[$i]['banquyen'] -= $ct['banquyen'];
            $arvh[$i]['phanmem'] -= $ct['phanmem'];
            $arvh[$i]['khac'] -= $ct['khac'];
            $arvhcl[1]['dat'] -= $ct['dat'];
            $arvhcl[1]['banquyen'] -= $ct['banquyen'];
            $arvhcl[1]['phanmem'] -= $ct['phanmem'];
            $arvhcl[1]['khac'] -= $ct['khac'];
        } else {
            $arvh[$i]['dat'] += $ct['dat'];
            $arvh[$i]['banquyen'] += $ct['banquyen'];
            $arvh[$i]['phanmem'] += $ct['phanmem'];
            $arvh[$i]['khac'] += $ct['khac'];
            $arvhcl[1]['dat'] += $ct['dat'];
            $arvhcl[1]['banquyen'] += $ct['banquyen'];
            $arvhcl[1]['phanmem'] += $ct['phanmem'];
            $arvhcl[1]['khac'] += $ct['khac'];
        }
    }
    foreach ($arhhhm as $ct) {
        $i = 3;
        if ($ct['noidung'] == 'Giảm trong năm') {
            $arhhhm[$i]['nha'] -= $ct['nha'];
            $arhhhm[$i]['ptvt'] -= $ct['ptvt'];
            $arhhhm[$i]['khac'] -= $ct['khac'];
            $arhhcl[1]['nha'] += $ct['nha'];
            $arhhcl[1]['ptvt'] += $ct['ptvt'];
            $arhhcl[1]['khac'] += $ct['khac'];
        } else {
            $arhhhm[$i]['nha'] += $ct['nha'];
            $arhhhm[$i]['ptvt'] += $ct['ptvt'];
            $arhhhm[$i]['khac'] += $ct['khac'];
            $arhhcl[1]['nha'] -= $ct['nha'];
            $arhhcl[1]['ptvt'] -= $ct['ptvt'];
            $arhhcl[1]['khac'] -= $ct['khac'];
        }
    }
    foreach ($arvhhm as $ct) {
        $i = 3;
        if ($ct['noidung'] == 'Giảm trong năm') {
            $arvhhm[$i]['dat'] -= $ct['dat'];
            $arvhhm[$i]['banquyen'] -= $ct['banquyen'];
            $arvhhm[$i]['phanmem'] -= $ct['phanmem'];
            $arvhhm[$i]['khac'] -= $ct['khac'];
            $arvhcl[1]['dat'] += $ct['dat'];
            $arvhcl[1]['banquyen'] += $ct['banquyen'];
            $arvhcl[1]['phanmem'] += $ct['phanmem'];
            $arvhcl[1]['khac'] += $ct['khac'];
        } else {
            $arvhhm[$i]['dat'] += $ct['dat'];
            $arvhhm[$i]['banquyen'] += $ct['banquyen'];
            $arvhhm[$i]['phanmem'] += $ct['phanmem'];
            $arvhhm[$i]['khac'] += $ct['khac'];
            $arvhcl[1]['dat'] -= $ct['dat'];
            $arvhcl[1]['banquyen'] -= $ct['banquyen'];
            $arvhcl[1]['phanmem'] -= $ct['phanmem'];
            $arvhcl[1]['khac'] -= $ct['khac'];
        }
    }
    ?>
    <div id="data" style="position: relative; margin-top: 70px; margin-bottom:50px; font-size:14px">

        <table id="data_header" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td style="text-align: left;font-weight: bold;"></td>
                <td style="text-align: center; font-weight: bold;">
                    <nobr>Mẫu số C03/CCTT</nobr>
                </td>
            </tr>
            <tr>
                <td style="text-align: left;font-weight: bold;">
                    <nobr>
                </td>
                <td style="text-align: center; font-style: italic;">(Ban hành kèm theo Thông tư số 39/2021/TT-BTC ngày 01 tháng
                    06 năm 2021 của Bộ trưởng Bộ Tài chính)
                </td>
            </tr>

            <tr>
                <td width="40%" style="text-align: left;font-weight: bold;">
                    <nobr>Tên đơn vị</nobr>
                </td>
                <td style="text-align: center; font-weight: bold;">
                    <nobr>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</nobr>
                </td>
            </tr>
            <tr>
                <td style="text-align: left;font-weight: bold;">
                    <nobr><?php echo $madv[2]; ?></nobr>
                </td>
                <td style="text-align: center; font-style: italic;">Độc lập - Tự do - Hạnh phúc</td>
            </tr>
            <tr>
                <td style="text-align: left;font-weight: bold;">
                    <nobr>Số:</nobr>
                </td>

                <td style="text-align: right;padding-right: 50px;">......., ngày ….. tháng….. năm ...…..</td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center;font-weight: bold;">
                    <nobr>BÁO CÁO</nobr>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;font-weight: bold;">Về việc cung cấp thông tin tài chính
                    năm <?php echo $nam ?></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: left;font-weight: bold;">Phần I: Số liệu</td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: left;font-weight: bold;">1. Tài sản cố định hữu hình trang bị cho đơn vị</td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: left;font-weight: bold; font-style: italic;">Đơn vị tính: đồng</td>
            </tr>
        </table>

        <table id="data_render1" cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
            <thead>
                <tr>
                    <th width="5%">TT</th>
                    <th width="30%">Nội dung</th>
                    <th>Mã số</th>
                    <th>Nhà, vật kiến trúc</th>
                    <th>Phương tiện vận tải</th>
                    <th>Khác</th>
                    <th>Tổng cộng</th>
                </tr>
            </thead>
            <tr style="font-weight: bold;">
                <td>1</td>
                <td>Nguyên giá</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php foreach ($arhh as $ct) {

                echo "<tr>";
                echo "<td style='" . "text-align: center'" . ">-</td>";
                echo "<td>" . $ct['noidung'] . "</td>";
                echo "<td></td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['nha']) . "</td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['ptvt']) . "</td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['khac']) . "</td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['nha'] + $ct['ptvt'] + $ct['khac']) . "</td>";
                echo "</tr>";
            }
            ?>
            <tr style="font-weight: bold;">
                <td>2</td>
                <td>Khấu hao, hao mòn lũy kế</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php foreach ($arhhhm as $ct) {

                echo "<tr>";
                echo "<td style='" . "text-align: center'" . ">-</td>";
                echo "<td>" . $ct['noidung'] . "</td>";
                echo "<td></td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['nha']) . "</td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['ptvt']) . "</td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['khac']) . "</td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['nha'] + $ct['ptvt'] + $ct['khac']) . "</td>";
                echo "</tr>";
            }
            ?>
            <tr style="font-weight: bold;">
                <td>3</td>
                <td>Số còn lại</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php foreach ($arhhcl as $ct) {

                echo "<tr>";
                echo "<td style='" . "text-align: center'" . ">-</td>";
                echo "<td>" . $ct['noidung'] . "</td>";
                echo "<td></td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['nha']) . "</td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['ptvt']) . "</td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['khac']) . "</td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['nha'] + $ct['ptvt'] + $ct['khac']) . "</td>";
                echo "</tr>";
            }
            ?>
        </table>

        <table cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td style="text-align: left;font-weight: bold;">2.Tài sản cố định vô hình trang bị cho đơn vị</td>
            </tr>
            <tr>
                <td style="text-align: left;font-weight: bold; font-style: italic;">Đơn vị tính: đồng</td>
            </tr>
        </table>


        <table id="data_render" cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
            <thead>
                <tr>
                    <th width="5%">TT</th>
                    <th width="30%">Nội dung</th>
                    <th>Mã số</th>
                    <th>Quyền sử dụng đất</th>
                    <th>Bản quyền</th>
                    <th>Chương trình</br>phần mềm</th>
                    <th>Giá trị</br>thương hiệu</th>
                    <th>Khác</th>
                    <th>Tổng cộng</th>
                </tr>
            </thead>
            <tr style="font-weight: bold;">
                <td>1</td>
                <td>Nguyên giá</td>
                <td></td>
                <td style="text-align: right;"></td>
                <td style="text-align: right;"></td>
                <td style="text-align: right;"></td>
                <td style="text-align: right;"></td>
                <td style="text-align: right;"></td>
                <td style="text-align: right;"></td>
            </tr>
            <?php foreach ($arvh as $ct) {

                echo "<tr>";
                echo "<td style='" . "text-align: center'" . ">-</td>";
                echo "<td>" . $ct['noidung'] . "</td>";
                echo "<td></td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['dat']) . "</td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['banquyen']) . "</td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['phanmem']) . "</td>";
                echo "<td style='text-align: right'></td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['khac']) . "</td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['dat'] + $ct['banquyen'] + $ct['phanmem'] + $ct['khac']) . "</td>";
                echo "</tr>";
            }
            ?>
            <tr style="font-weight: bold;">
                <td>2</td>
                <td>Khấu hao, hao mòn lũy kế</td>
                <td></td>
                <td style="text-align: right;"></td>
                <td style="text-align: right;"></td>
                <td style="text-align: right;"></td>
                <td style="text-align: right;"></td>
                <td style="text-align: right;"></td>
                <td style="text-align: right;"></td>
            </tr>
            <?php foreach ($arvhhm as $ct) {

                echo "<tr>";
                echo "<td style='" . "text-align: center'" . ">-</td>";
                echo "<td>" . $ct['noidung'] . "</td>";
                echo "<td></td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['dat']) . "</td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['banquyen']) . "</td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['phanmem']) . "</td>";
                echo "<td style='text-align: right'></td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['khac']) . "</td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['dat'] + $ct['banquyen'] + $ct['phanmem'] + $ct['khac']) . "</td>";
                echo "</tr>";
            }
            ?>
            <tr style="font-weight: bold;">
                <td>3</td>
                <td>Số còn lại</td>
                <td></td>
                <td style="text-align: right;"></td>
                <td style="text-align: right;"></td>
                <td style="text-align: right;"></td>
                <td style="text-align: right;"></td>
                <td style="text-align: right;"></td>
                <td style="text-align: right;"></td>
            </tr>
            <?php foreach ($arvhcl as $ct) {

                echo "<tr>";
                echo "<td style='" . "text-align: center'" . ">-</td>";
                echo "<td>" . $ct['noidung'] . "</td>";
                echo "<td></td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['dat']) . "</td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['banquyen']) . "</td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['phanmem']) . "</td>";
                echo "<td style='text-align: right'></td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['khac']) . "</td>";
                echo "<td style='text-align: right'>" . dinhdangso($ct['dat'] + $ct['banquyen'] + $ct['phanmem'] + $ct['khac']) . "</td>";
                echo "</tr>";
            }
            ?>
        </table>

        <table id="data_header1" cellspacing="0" cellpadding="0" border="0">
            <tr style="height: 100px;vertical-align: top;">
                <td style="text-align: left;font-weight: bold;">Phần II: Phân tích, đánh giá</td>
            </tr>
        </table>

        <table>
            <tr>

            </tr>
            <tr>
                <td width="30%"></td>
                <td width="30%"></td>
                <td width="40%" style="text-align: center;"> ngày ... tháng ... năm ......</td>
            </tr>
            <tr>
                <td style="text-align: center; font-weight: bold;">Người lập biểu</td>
                <td style="text-align: center; font-weight: bold;">Trưởng phòng</td>
                <td style="text-align: center; font-weight: bold;"> Thủ trưởng đơn vị</td>
            </tr>
            <tr style="height: 150px; vertical-align: bottom;">
                <td></td>
                <td></td>
                <td></td>
            </tr>

        </table>
    </div>
</body>

</html>
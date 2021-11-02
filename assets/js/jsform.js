//Mở trang nhập tài sản
function openpagenhap(condition,data)
{
    //var frm = window.document.nhapmoi;
    document.getElementById('TTQLTS').value = data;
    if (condition == "Edit")
        document.getElementById("nhapmoi").action = "NhapQLTSsua.php";
    if (condition == "Copy")
        document.getElementById("nhapmoi").action = "NhapQLTScopy.php";
    if (condition == "HM")
        document.getElementById("nhapmoi").action = "Nhapsuahaomon.php";
    document.getElementById('nhapmoi').submit();
}
//Mở trang nhập tăng giảm
function openpagetg(condition,data)
{
    //var frm = window.document.nhapmoi;
    document.getElementById('TTQLTS').value = data;
    if (condition == "Edit")
        document.getElementById("nhapmoi").action = "NhapQLTSsua.php";
    if (condition == "Copy")
        document.getElementById("nhapmoi").action = "NhapQLTScopy.php";
    if (condition == "HM")
        document.getElementById("nhapmoi").action = "Nhapsuahaomon.php";
    document.getElementById('nhapmoi').submit();
}
//Trang thông tin kiểm kê công cụ
function openpagecongcukkct(condition,data)
{
    //var frm = window.document.nhapmoi;
    document.getElementById('TTkiemken').value = data;
    if (condition == "Edit")
        document.getElementById("nhapmoi").action = "NhapSuact.php";
    if (condition == "Copy")
        document.getElementById("nhapmoi").action = "NhapQLTScopy.php";
    if (condition == "HM")
        document.getElementById("nhapmoi").action = "Nhapsuahaomon.php";
    document.getElementById('nhapmoi').submit();
}
/**
 * Created by unname on 21/01/2016.
 */

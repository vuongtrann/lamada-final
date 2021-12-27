<?php
include './db_connect/pdo.php';
$m = isset($_POST['MSSP']) ? $_POST['MSSP'] : '';
$t = isset($_POST['TenSP']) ? $_POST['TenSP'] : '';
$nsx = isset($_POST['nhasanxuat']) ? $_POST['nhasanxuat'] : '';
$g = isset($_POST['Gia']) ? $_POST['Gia'] : 0;
$lsp = isset($_POST['loaisanpham']) ? $_POST['loaisanpham'] : '';
$ts = isset($_POST['thongso']) ? $_POST['thongso'] : '';
$tt = isset($_POST['trangthaisp']) ? $_POST['trangthaisp'] : '';
$h = '';
if ($m != '') {
    $de = false;
    $sql = 'select * from SANPHAM';
    $objStatament = $objPDO->prepare($sql);
    $objStatament->execute();
    $data = $objStatament->fetchALL(PDO::FETCH_OBJ);
    foreach ($data as $v) {
        if ($v->MSSP == $m) {
            $de = true;
            break;
        }
    }
    if ($de == false) {
        if (isset($_FILES['img'])) {
            if ($_FILES['img']['error'] == 0) //ok
            {
                $h = $_FILES['img']['name'];
                move_uploaded_file($_FILES['img']['tmp_name'], "img/product/$h");
            }
        }
        $sql = "insert into SANPHAM (MSSP, TenSP, IMG, MSNSX, Gia, MSLSP, TSSP, MSTTSP)
                    values(?, ?, ?, ?, ?, ?, ?, ?)";
        $a = [$m, $t, $h, $nsx,  $g, $lsp, $ts,$tt];
        $objStatement = $objPDO->prepare($sql);
        $objStatement->execute($a);
        header('location:index.php');
    } else {
        echo '<script language="javascript">';
        echo 'alert("Không thể thêm - Sản phẩm đã tồn tại")';
        echo '</script>';
        header("refresh:0.5;url=index.php");
    }
}

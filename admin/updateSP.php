<?php 
include './db_connect/pdo.php';
$m = isset($_POST['MSSP'])?$_POST['MSSP']:'';
$t = isset($_POST['TenSP'])?$_POST['TenSP']:'';
$nsx = isset($_POST['nhasanxuat'])?$_POST['nhasanxuat']:'';
$g = isset($_POST['Gia'])?$_POST['Gia']:0;
$lsp = isset($_POST['loaisanpham'])?$_POST['loaisanpham']:'';
$ts= isset($_POST['thongso'])?$_POST['thongso']:'';
$tt= isset($_POST['trangthaisp'])?$_POST['trangthaisp']:1;
$h='';
if ($m==''){ header('location:index.php'); exit;}
if (isset($_FILES['img'])) {
    if ($_FILES['img']['error'] == 0) //ok
    {
        $h = $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], "img/product/$h");
    }
}
$sql="update SANPHAM set TenSP=?, IMG=?, MSNSX=?, Gia=?, MSLSP=?, TSSP=?, MSTTSP=?  where MSSP=?  ";
$a =[ $t, $h , $nsx,  $g, $lsp, $ts, $tt, $m];
$objStatement= $objPDO->prepare($sql);
$objStatement->execute($a);
$n = $objStatement->rowCount();

header('location:index.php');
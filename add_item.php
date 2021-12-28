<?php
include_once './db_connect/config.php';
include './db_connect/pdo.php';
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['user'])) {
    $email ='a';
    $masp = isset($_GET['MSSP']) ? $_GET['MSSP'] : '';
    $soluong = isset($_GET['SoLuong']) ? $_GET['SoLuong'] : '';

    $sql = 'select * from SANPHAM ';
    $tamn = $objPDO->prepare($sql);
    $a = [$masp];
    $tamn->execute($a);
    $sach = $tamn->fetch(PDO::FETCH_OBJ);

    $sql = 'select * from giohang';
    $tamn = $objPDO->prepare($sql);
    $tamn->execute();
    $data = $tamn->fetchAll(PDO::FETCH_OBJ);
    foreach ($data as $v) {
        if ($v->MSSP == $masp && $v->Email==$email) {
            echo '<script language="javascript">';
            echo 'alert("Sản phẩm đã có !")';
            echo '</script>';
            header("refresh:0.5;url=index.php");
            exit;
        }
    }

    $sql = 'insert into giohang(MSSP, SoLuong, TenSP, Gia, Email) values(?,?,?,?,?)';
    $c = [$masp, $soluong, $sach->TenSP, $sach->Gia, $email];
    $tam = $objPDO->prepare($sql);
    $tam->execute($c);
    // print_r($c);
    header('location:check_out.php');
} else {
    $email = $_SESSION['user'];
    $masp = isset($_GET['MSSP']) ? $_GET['MSSP'] : '';
    $soluong = isset($_GET['SoLuong']) ? $_GET['SoLuong'] : '';

    $sql = 'select * from SANPHAM ';
    $tamn = $objPDO->prepare($sql);
    $a = [$masp];
    $tamn->execute($a);
    $sach = $tamn->fetch(PDO::FETCH_OBJ);

    $sql = 'select * from giohang';
    $tamn = $objPDO->prepare($sql);
    $tamn->execute();
    $data = $tamn->fetchAll(PDO::FETCH_OBJ);
    foreach ($data as $v) {
        if ($v->MSSP == $masp && $v->Email==$email) {
            echo '<script language="javascript">';
            echo 'alert("Sản phẩm đã có !")';
            echo '</script>';
            header("refresh:0.5;url=index.php");
            exit;
        }
    }

    $sql = 'insert into giohang(MSSP, SoLuong, TenSP, Gia, Email) values(?,?,?,?,?)';
    $c = [$masp, $soluong, $sach->TenSP, $sach->Gia, $email];
    $tam = $objPDO->prepare($sql);
    $tam->execute($c);
    // print_r($c);
    header('location:check_out.php');
}

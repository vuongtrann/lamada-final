<?php
include './db_connect/pdo.php';
$email = 'a';
if (!isset($_SESSION)) session_start();
if (isset($_SESSION['user'])) {
    $email = $_SESSION['user'];
}
$m = isset($_GET['MSSP']) ? $_GET['MSSP'] : '';
$sl = isset($_GET['SoLuong']) ? $_GET['SoLuong'] : '';

$sql = "update giohang set SoLuong = ? where MSSP= ? and Email=?";
$a = [$sl,$m,$email];
$tam = $objPDO->prepare($sql);
$tam->execute($a);
header('location:check_out.php');

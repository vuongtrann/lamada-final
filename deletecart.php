<?php
include './db_connect/pdo.php';
$email = 'a';
if (!isset($_SESSION)) session_start();
if (isset($_SESSION['user'])) {
    $email = $_SESSION['user'];
}
$m = isset($_GET['MSSP']) ? $_GET['MSSP'] : '';

$sql = "delete from giohang where MSSP= ? and Email=?";
$a = [$m,$email];
$tam = $objPDO->prepare($sql);
$tam->execute($a);
header('location:check_out.php');

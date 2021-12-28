<?php
include_once './db_connect/config.php';
include './db_connect/pdo.php';
if(!isset($_SESSION)) session_start();
if(!isset($_SESSION['user']))
{
	       echo '<script language="javascript">';
            echo 'alert("Bạn hãy đăng nhập trước !")';
            echo '</script>';
            header( "refresh:0.5;url=login.php" );
}else{
    $masp = isset($_POST['MSSP'])?$_POST['MSSP']:'';
    $tensp = isset($_POST['TenSP'])?$_POST['TenSP']:'';
}
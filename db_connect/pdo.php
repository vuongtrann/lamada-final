<?php 
$host ="localhost";
$dbName="dacndb";
$userName="root";
$password="Quocvuong2712";
$objPDO = new PDO("mysql:host=$host; dbname=$dbName", $userName, $password);
$objPDO->query('set names utf8');


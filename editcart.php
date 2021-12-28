<?php
include_once './db_connect/config.php';
include './db_connect/pdo.php';


$m = isset($_GET['MSSP']) ? $_GET['MSSP'] : '';

$sql = 'select * from SANPHAM join NHASANXUAT on NHASANXUAT.MSNSX=SANPHAM.MSNSX where SANPHAM.MSSP = ?';
$a = [$m];
$stm = $objPDO->prepare($sql);
$stm->execute($a);
$dataS = $stm->fetch(PDO::FETCH_OBJ);


// $sql = 'select * from LOAISANPHAM';
// $objStatament = $objPDO->prepare($sql);
// $objStatament->execute();
// $dataVP1 = $objStatament->fetchALL(PDO::FETCH_OBJ);

// $a = isset($_GET['MSSP']) ? $_GET['MSSP'] : '';
// $sql = 'select * from NHASANXUAT join SANPHAM on SANPHAM.MSNSX=NHASANXUAT.MSNSX where SANPHAM.MSSP= ?';
// $b = [$a];
// $objStatament = $objPDO->prepare($sql);
// $objStatament->execute($b);
// $dataSX = $objStatament->fetchALL(PDO::FETCH_OBJ);

$email = 'a';
if (!isset($_SESSION)) session_start();
if (isset($_SESSION['user'])) {
    $email = $_SESSION['user'];
}
$m = isset($_GET['MSSP']) ? $_GET['MSSP'] : '';

$sql = "select * from giohang where MSSP= ? and Email=?";
$a = [$m, $email];
$tam = $objPDO->prepare($sql);
$tam->execute($a);
$dataGH = $tam->fetch(PDO::FETCH_OBJ);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Lamada</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  -->
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesoeet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>
    <!-- side nav-->
    <?php include "./page/sidenav.php" ?>
    <!-- Header-->
    <?php include "./page/header.php" ?>
    <!-- Header-->
    <!-- <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div>
    </header> -->
    <!-- Section-->
    <div class="fashion_section">
        <form action="updateGH.php" method="get" class="container px-4 px-lg-5 mt-5">
            <div class="arousel-inner ">
                <div class="container">
                    <h1 class="fashion_taital">Thông tin sản phẩm</h1><br><br>
                </div>
            </div>
            <div class="row gx-2 row-cols-2  row-cols-xl-2 justify-content-center">

                <div class="">

                    <!-- Product image-->

                    <input type="hidden" name="IMG" class="" href="single.php?MSSP=<?php echo $dataS->MSSP ?>"><img src="admin/img/product/<?php echo $dataS->IMG ?>" alt="" width="300px" height="300px" style="margin-left: 130px;"></input>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <a href="single.php?MSSP=<?php echo $v->MSSP ?>">
                                <input type="hidden" name="TenSP" class="tshirt_text"><?php echo $dataS->TenSP ?></input>
                            </a>
                            <!-- Product price-->

                        </div>

                    </div>
                </div>
                <div class="col md-5">
                    <div class="tshirt_text">
                        <h6><strong>Mã sản phẩm : </strong></h6>
                        <input type="text" name="MSSP" value="<?php echo $dataS->MSSP ?>" readonly></input>
                    </div>
                    <br>
                    <div class="tshirt_text">

                        <h6><strong>Nhà sản xuất : </strong><?php echo $dataS->TenNSX ?></h6>


                    </div>
                    <br>
                    <div class="tshirt_text">
                        <h6><strong>Thông số sản phẩm : </strong></h6>
                        <input type="hidden" name="TSSP"><?php echo $dataS->TSSP ?></input>
                    </div>
                    <br>
                    <div class="tshirt_text">
                        <h6><strong>Số Lượng : </strong></h6>
                        <input type="number" name="SoLuong" value="<?php echo $dataGH->SoLuong ?>"></input>
                    </div>

                </div>
                <div class="text-center" style="color: red;">
                    <input type="hidden" name="Gia"><strong> Giá : <?php echo $dataS->Gia ?> VND</strong></input>
                </div>

            </div>

            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center"><input class="btn btn-outline-dark mt-auto" type="submit" value="Cập nhật"></div>
            </div>

        </form>
    </div>
    <!-- footer section start -->
    <?php include "./page/footer.php" ?>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</body>

</html>
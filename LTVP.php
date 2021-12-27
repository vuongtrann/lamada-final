<?php
include_once 'db_connect/config.php';
include 'db_connect/pdo.php';
$kw = isset($_GET['kw']) ? $_GET['kw'] : '';





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
    <!-- laptopgaming section start -->
    <?php

    $sql = 'select * from SANPHAM join LOAISANPHAM on LOAISANPHAM.MSLSP=SANPHAM.MSLSP where SANPHAM.MSLSP like "LVP" && SANPHAM.MSTTSP like "1"';
    $a = ["%$kw%"];
    $objStatament = $objPDO->prepare($sql);
    $objStatament->execute($a);
    $dataGM = $objStatament->fetchALL(PDO::FETCH_OBJ);
    ?>

    <div class="fashion_section">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <h1 class="fashion_taital">Laptop Gaming Bán Chạy</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <?php
                                $flag = 0;
                                foreach ($dataGM as $v) {
                                    if ($flag == 9) {
                                        break;
                                    } else {

                                ?>
                                        <div class="col-lg-4 col-sm-4">
                                            <div class="box_main">
                                                <h4 class="shirt_text"><?php echo $v->TenSP ?></h4>
                                                <h4 class="price_text" style="color: #ff0000;"><?php echo $v->Gia ?> đ </span></h4>
                                                <div class="tshirt_img"><a href="single.php?MSSP=<?php echo $v->MSSP ?>"><img src="admin/img/product/<?php echo $v->IMG ?>" height="150px" width="250px"></a></div>
                                                <div class="btn_main">
                                                    <div class="buy_bt"><a href="#">Mua ngay</a></div>
                                                    <div class="seemore_bt"><a href="single.php?MSSP=<?php echo $v->MSSP ?>">Xem thêm</a></div>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                        $flag++;
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a> -->
        </div>
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
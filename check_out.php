<?php
include_once './db_connect/config.php';
include './db_connect/pdo.php';
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['user'])) {
    $email = 'a';
    $sql = 'select * from giohang join sanpham on sanpham.MSSP=giohang.MSSP where Email= ?';
    $objStatament = $objPDO->prepare($sql);
    $e = [$email];
    $objStatament->execute($e);
    $dataGH = $objStatament->fetchALL(PDO::FETCH_OBJ);
} else {
    $email = $_SESSION['user'];
    $sql = 'select * from giohang join sanpham on sanpham.MSSP=giohang.MSSP where Email= ?';
    $objStatament = $objPDO->prepare($sql);
    $e = [$email];
    $objStatament->execute($e);
    $dataGH = $objStatament->fetchALL(PDO::FETCH_OBJ);
}



// print_r($dataGH);

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
    <div class="fashion_section">
        <form action="add_item.php" method="get" class="container px-4 px-lg-5 mt-5">
            <div class="arousel-inner ">
                <div class="container">
                    <h1 class="fashion_taital">Thông tin giỏ hàng</h1><br><br>
                </div>
            </div>
            <div class="row gx-2 row-cols-2  row-cols-xl-2 justify-content-center">
                <?php
                $flag = 0;
                foreach ($dataGH as $v) {


                ?>
                    <div class="">

                        <!-- Product image-->

                        <input type="hidden" name="IMG" class="" href="single.php?MSSP=<?php echo $v->MSSP ?>"><img src="admin/img/product/<?php echo $v->IMG ?>" alt="" width="300px" height="300px" style="margin-left: 130px;"></input>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <a href="single.php?MSSP=<?php echo $v->MSSP ?>">
                                    <input type="hidden" name="TenSP" class="tshirt_text"><?php echo $v->TenSP ?></input>
                                </a>
                                <!-- Product price-->

                            </div>

                        </div>
                    </div>
                    <div class="col md-5">
                        <div class="tshirt_text">
                            <h6><strong>Mã sản phẩm : </strong></h6>
                            <input type="hidden" name="MSSP"><?php echo $v->MSSP ?></input>
                        </div>
                        <br>

                        <br>
                        <div class="tshirt_text">
                            <h6><strong>Thông số sản phẩm : </strong></h6>
                            <input type="hidden" name="TSSP"><?php echo $v->TSSP ?></input>
                        </div>
                        <br>
                        <div class="tshirt_text">
                            <h6><strong>Số Lượng : </strong></h6>
                            <input type="hidden" name="SoLuong" value=""><?php echo $v->SoLuong ?></input>
                        </div>

                    </div>
                    <div class="text-center" style="color: red;">
                        <input type="hidden" name="Gia"><strong> Giá : <?php echo $v->Gia ?> VND</strong></input>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <a href="editcart.php?MSSP=<?php echo $v->MSSP?>" class="btn btn-outline-dark mt-auto" type="" value="">Sửa</a>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <a href="deletecart.php?MSSP=<?php echo $v->MSSP?>" class="btn btn-outline-dark mt-auto" type="" value="">Xóa</a>
                        </div>
                    </div>
                <?php
                    $flag++;
                }

                ?>

            </div>

            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center"><input class="btn btn-outline-dark mt-auto" type="submit" value="Thanh toán"></div>
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
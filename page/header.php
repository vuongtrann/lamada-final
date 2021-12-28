<?php
if (!isset($_SESSION)) session_start();


?>

<!-- banner bg main start -->
<div class="banner_bg_main">
    <!-- header top section start -->
    <div class="container">
        <div class="header_section_top">
            <div class="row">
                <div class="col-sm-12">
                    <div class="custom_menu">
                        <ul>
                            <div class="login_menu">
                                <ul>
                                    <?php
                                    if (isset($_SESSION['user'])) {
                                    ?>
                                        
                                        <li><a href="logout.php">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <span class="padding_10">Đăng xuất</span></a>
                                        </li>
                                        <li>
                                        <i class="fa " aria-hidden="true"></i>
                                        <span class="padding_10">Xin chào : </span></span>
                                    </li>
                                        
                                    <?php


                                    }else {
                                        ?>
                                        <li><a href="login.php">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <span class="padding_10">Đăng nhập</span></a>
                                        </li>
                                        <li><a href="register.php">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <span class="padding_10">Đăng Ký</span></a>
                                        </li>
                                        
                                        <?php

                                    }
                                    ?>

                                   
                                    <li>
                                        <?php
                                        if (isset($_SESSION['user'])) {
                                            $sql = 'select * from KHACHHANG where MSKH =?';
                                            $a = [$_SESSION['user']];
                                            $tam = $objPDO->prepare($sql);
                                            $tam->execute($a);
                                            $data = $tam->fetch(PDO::FETCH_OBJ);
                                            echo $data->TenKH;
                                            // print_r($a);
                                        }

                                        ?>
                                    </li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header top section start -->
    <!-- logo section start -->
    <div class="logo_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="logo"><a href="index.php"><img src="images/logo1.png" height="180px" width="200px"></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- logo section end -->
    <!-- header section start -->
    <div class="header_section">
        <div class="container">
            <div class="containt_main">

                <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danh mục sản phẩm
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="LTGM.php">Laptop Gaming</a>
                        <a class="dropdown-item" href="LTVP.php">Laptop Văn Phòng</a>
                        <a class="dropdown-item" href="PKien.php">Phụ Kiện</a>
                    </div>
                </div>
                <div class="main">
                    <!-- Another variation with a button -->
                    <form class="input-group" action="search.php" method="get">
                        
                        <input name="kw" type="text" class="form-control" placeholder="Tìm kiếm" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="header_box">
                    <div class="lang_box ">
                        <!-- <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="images/flag-uk.png" alt="flag" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </a> -->
                        <div class="dropdown-menu ">
                            <a href="#" class="dropdown-item">
                                <img src="images/flag-france.png" class="mr-2" alt="flag">
                                French
                            </a>
                        </div>
                    </div>
                    <div class="login_menu">
                        <ul>
                            <li><a href="check_out.php  ">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="padding_10">Giỏ hàng</span></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header section end -->
    <!-- banner section start -->
    <div class="banner_section layout_padding">
        <div class="container">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="banner_taital">Lamada <br>Thế giới công nghệ</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="banner_taital">Lamada <br>Thế giới công nghệ</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="banner_taital">Lamada <br>Thế giới công nghệ</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- banner section end -->
</div>
<!-- banner bg main end -->
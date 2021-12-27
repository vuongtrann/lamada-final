<?php
$sql = 'select * from SANPHAM join LOAISANPHAM on LOAISANPHAM.MSLSP=SANPHAM.MSLSP where SANPHAM.MSLSP like "LVP" && SANPHAM.MSTTSP like "0"';
$a = ["%$kw%"];
$objStatament = $objPDO->prepare($sql);
$objStatament->execute($a);
$dataVP = $objStatament->fetchALL(PDO::FETCH_OBJ);
?>
<div class="fashion_section">
    <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <h1 class="fashion_taital">Laptop Văn Phòng Bán Chạy</h1>
                    <div class="fashion_section_2">
                        <div class="row">
                            <?php
                            $flag = 0;
                            foreach ($dataVP as $v) {
                                if ($flag == 3) {
                                    break;
                                } else {

                            ?>
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="box_main">
                                            <h4 class="shirt_text"><?php echo $v->TenSP?></h4>
                                            <p class="price_text"><?php echo $v->Gia?> đ </p>
                                            <div class="electronic_img"><a href="single.php?MSSP=<?php echo $v->MSSP?>"><img src="admin/img/product/<?php echo $v->IMG?>"></a></div>
                                            <div class="btn_main">
                                                <div class="buy_bt"><a href="#">Mua ngay</a></div>
                                                <div class="seemore_bt"><a href="#">Xem Thêm</a></div>
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
            <div class="carousel-item">
                <div class="container">
                    <h1 class="fashion_taital">Laptop Văn Phòng Bán Chạy</h1>
                    <div class="fashion_section_2">
                    <div class="row">
                            <?php
                            $flag = 0;
                            foreach ($dataVP as $v) {
                                if ($flag == 3) {
                                    break;
                                } else {

                            ?>
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="box_main">
                                            <h4 class="shirt_text"><?php echo $v->TenSP?></h4>
                                            <p class="price_text"><?php echo $v->Gia?></p>
                                            <div class="electronic_img"><a href="single.php?MSSP=<?php echo $v->MSSP?>"><img src="admin/img/product/<?php echo $v->IMG?>"></a></div>
                                            <div class="btn_main">
                                                <div class="buy_bt"><a href="#">Mua ngay</a></div>
                                                <div class="seemore_bt"><a href="#">Xem Thêm</a></div>
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
            <div class="carousel-item">
                <div class="container">
                    <h1 class="fashion_taital">Laptop Văn Phòng Bán Chạy</h1>
                    <div class="fashion_section_2">
                        <div class="row">
                            <?php
                            $flag = 0;
                            foreach ($dataVP as $v) {
                                if ($flag == 3) {
                                    break;
                                } else {

                            ?>
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="box_main">
                                            <h4 class="shirt_text"><?php echo $v->TenSP?></h4>
                                            <p class="price_text"><?php echo $v->Gia?></p>
                                            <div class="electronic_img"><a href="single.php?MSSP=<?php echo $v->MSSP?>"><img src="admin/img/product/<?php echo $v->IMG?>"></a></div>
                                            <div class="btn_main">
                                                <div class="buy_bt"><a href="#">Mua ngay</a></div>
                                                <div class="seemore_bt"><a href="#">Xem Thêm</a></div>
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
        <a class="carousel-control-prev" href="#electronic_main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#electronic_main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
</div>
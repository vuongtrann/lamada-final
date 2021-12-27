<?php
if ($n == 1) {
    //Danh sách sản phẩm
?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã số sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Ảnh</th>
                            <th>Mã số NSX</th>
                            <th>Giá</th>
                            <th>Mã số LSP</th>
                            <th>Thông số sản phẩm</th>
                            <th>Tình trạng</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Mã số sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Ảnh</th>
                            <th>Mã số NSX</th>
                            <th>Giá</th>
                            <th>Mã số LSP</th>
                            <th>Thông số sản phẩm</th>
                            <th>Tình trạng</th> 
                            <th>Thao tác</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        foreach ($data as $s) {
                        ?>
                            <tr>
                                <td><?php echo $s->MSSP ?></td>
                                <td><?php echo $s->TenSP ?></td>
                                <td><?php echo $s->IMG ?></td>
                                <td><?php echo $s->MSNSX ?></td>
                                <td><?php echo $s->Gia ?></td>
                                <td><?php echo $s->MSLSP ?></td>
                                <td><?php echo $s->TSSP ?></td>
                                <td><?php echo $s->MSTTSP?></td>
                                <td>
                                    <a href="editsanpham.php?MSSP=<?php echo $s->MSSP ?>"><img src="img/icon-admin-content/edit.png" alt="Edit" width="25px" height="25px"></a> <br> <br>
                                    <a href="deleteSP.php? MSSP=<?php echo $s->MSSP ?>"><img src="img/icon-admin-content/delete.png" alt="Delete" width="25px" height="25px"></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
} else if ($n == 2) {
    ///Danh sách loại sản phẩm
?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách loại sản phẩm</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã số loại sản phẩm</th>
                            <th>Tên loại sản phẩm</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Mã số loại sản phẩm</th>
                            <th>Tên loại sản phẩm</th>
                            <th>Thao tác</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        foreach ($data as $s) {
                        ?>
                            <tr>
                                <td><?php echo $s->MSLSP ?></td>
                                <td><?php echo $s->TenLoai ?></td>
                                <td>
                                    <a href="editLoaiSP.php?MSLSP=<?php echo $s->MSLSP ?>"><img src="img/icon-admin-content//edit.png" alt="Edit" width="25px" height="25px"></a> <br> <br>
                                    <a href="deleteLoaiSP.php? MSLSP=<?php echo $s->MSLSP ?>"><img src="img/icon-admin-content/delete.png" alt="Edit" width="25px" height="25px"></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
} else if ($n == 3) {
?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã số nhà sản xuất</th>
                            <th>Tên nhà sản xuất</th>
                            <th>Xuất sứ</th>
                            <th>Số điện thoại</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Mã số nhà sản xuất</th>
                            <th>Tên nhà sản xuất</th>
                            <th>Xuất sứ</th>
                            <th>Số điện thoại</th>
                            <th>Thao tác</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        foreach ($data as $s) {
                        ?>
                            <tr>
                                <td><?php echo $s->MSNSX ?></td>
                                <td><?php echo $s->TenNSX ?></td>
                                <td><?php echo $s->XuatSu ?></td>
                                <td><?php echo $s->SDT ?></td>
                                <td>
                                    <a href="editNSX.php?MSNSX=<?php echo $s->MSNSX ?>"><img src="img/icon-admin-content/edit.png" alt="Edit" width="25px" height="25px"></a> <br> <br>
                                    <a href="deleteNSX.php? MSNSX=<?php echo $s->MSNSX ?>"><img src="img/icon-admin-content/delete.png" alt="Edit" width="25px" height="25px"></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
} else if ($n == 4) {
?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã số khách hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Mã số khách hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Thao tác</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        foreach ($data as $s) {
                        ?>
                            <tr>
                                <td><?php echo $s->MSKH ?></td>
                                <td><?php echo $s->TenKH ?></td>
                                <td><?php echo $s->DiaChi ?></td>
                                <td><?php echo $s->SDT ?></td>
                                <td>
                                    <a href="editKH.php?MSKH=<?php echo $s->MSKH ?>"><img src="img/icon-admin-content/edit.png" alt="Edit" width="25px" height="25px"></a> <br> <br>
                                    <!-- <a href="deleteNSX.php? MSNSX=<?php echo $s->MSNSX ?>"><img src="img/icon-admin-content/delete.png" alt="Edit" width="25px" height="25px"></a> -->
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php } else if ($n == 5) {
?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã số đơn hàng</th>
                            <th>Mã số nhân viên</th>
                            <th>Mã số khách hàng</th>
                            <th>Ngày đặt</th>
                            <th>Số điện thoại</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Mã số khách hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Thao tác</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        foreach ($data as $s) {
                        ?>
                            <tr>
                                <td><?php echo $s->MSKH ?></td>
                                <td><?php echo $s->TenKH ?></td>
                                <td><?php echo $s->DiaChi ?></td>
                                <td><?php echo $s->SDT ?></td>
                                <td>
                                    <a href="editKH.php?MSKH=<?php echo $s->MSKH ?>"><img src="img/icon-admin-content/edit.png" alt="Edit" width="25px" height="25px"></a> <br> <br>
                                    <!-- <a href="deleteNSX.php? MSNSX=<?php echo $s->MSNSX ?>"><img src="img/icon-admin-content/delete.png" alt="Edit" width="25px" height="25px"></a> -->
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
}
?>
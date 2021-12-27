<?php
include './db_connect/pdo.php';
//Lấy dữu liệu của nhà sản xuất
$sql = 'select * from NHASANXUAT';
$objStatement = $objPDO->prepare($sql);
$objStatement->execute();
$dataN = $objStatement->fetchAll(PDO::FETCH_OBJ);
//Lấy dữ liệu của loại sản phẩm
$sql = 'select * from LOAISANPHAM';
$objStatement = $objPDO->prepare($sql);
$objStatement->execute();
$dataL = $objStatement->fetchAll(PDO::FETCH_OBJ);

$sql = 'select * from TRANGTHAISANPHAM';
$objStatement = $objPDO->prepare($sql);
$objStatement->execute();
$dataTT = $objStatement->fetchAll(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Lamada</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include './page.admin/sidebar.php' ?>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include './page.admin/topbar.php' ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Cập nhật sản phẩm</h6>
                    </div>
                    <div class="card-body">
                        <form action="saveSanPham.php" method="post" enctype="multipart/form-data">
                            <table class="table">

                                <tbody>
                                    <tr>
                                        <td scope="row"> Mã số sản phẩm :</td>
                                        <td><input type="text" style="min-width: 800px;" name="MSSP" ></td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Tên sản phẩm :</td>
                                        <td><input type="text" name="TenSP" style="min-width: 800px;" ></td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Ảnh sản phẩm :</td>
                                        <td><input type="file" name="img" style="min-width: 800px;"></td>

                                    </tr>
                                    <tr>
                                        <td>Giá : </td>
                                        <td><input type="number" name="Gia" ></td>
                                    </tr>

                                    <tr>
                                        <td>Thông số sản phẩm :</td>
                                        <td><textarea name="thongso" id="" cols="80" rows="10"></textarea> </td>
                                    </tr>
                                    <tr>
                                        <td>Nhà sản xuất</td>
                                        <td>
                                            <select name="nhasanxuat" style="min-width: 400px;" id="">
                                                <?php
                                                foreach ($dataN as $r) {
                                                    $selected = '';
                                                    if ($r->MSNSX == $data1->MSNSX) $selected = ' selected ';
                                                ?>
                                                    <option value="<?php echo $r->MSNSX ?>" <?php echo $selected ?>><?php echo $r->TenNSX ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Loại sản phẩm : </td>
                                        <td>
                                            <select name="loaisanpham" style="min-width: 400px;" id="">
                                                <?php
                                                foreach ($dataL as $r) {
                                                    $selected = '';
                                                    if ($r->MSLSP == $data1->MSLSP) $selected = ' selected ';
                                                ?>
                                                    <option value="<?php echo $r->MSLSP ?>" <?php echo $selected ?>>
                                                        <?php echo $r->TenLoai ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Trạng thái sản phẩm: </td>
                                        <td>
                                            <select name="trangthaisp" style="min-width: 400px;" id="">
                                                <?php
                                                foreach ($dataTT as $r) {
                                                    $selected = '';
                                                    if ($r->MSTTSP == $data1->MSTTSP) $selected = ' selected ';
                                                ?>
                                                    <option value="<?php echo $r->MSTTSP ?>" <?php echo $selected ?>>
                                                        <?php echo $r->TenTTSP ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>





                            <input type="submit" style="min-width: 100px; " value="Thêm sản phẩm mới">

                        </form>
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <?php include './page.admin/footer.php' ?>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <?php include './page.admin/logoutmodal.php' ?>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>
        

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
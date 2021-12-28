<?php
include './db_connect/pdo.php';


$m = isset($_GET['MSPX']) ? $_GET['MSPX'] : '';
if ($m == '') {
    header('location:phieuxuat.php');
    exit;
}

$sql = "select * from PHIEUXUAT where MSPX= ? ";
$a = [$m];
$objStatement = $objPDO->prepare($sql);
$objStatement->execute($a);
$data1 = $objStatement->fetch(PDO::FETCH_OBJ);
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
                        <h6 class="m-0 font-weight-bold text-primary">Cập nhật thông tin phiếu xuất</h6>
                    </div>
                    <div class="card-body">
                        <form action="updatePX.php" method="post" enctype="multipart/form-data">
                            <table class="table">

                                <tbody>
                                    <tr>
                                        <td scope="row"> Mã phiếu xuất :</td>
                                        <td><input type="text" style="min-width: 800px;" name="MSPX" value='<?php echo $data1->MSPX ?>' readonly></td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Mã số sản phẩm :</td>
                                        <td><input type="text" name="MSSP" style="min-width: 800px;" value='<?php echo $data1->MSSP ?>'></td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Mã số nhân viên :</td>
                                        <td><input type="text" style="min-width: 800px;" name="MSNV" value='<?php echo $data1->MSNV ?>'></td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Số lượng :</td>
                                        <td><input type="text" name="SoLuong" style="min-width: 800px;" value='<?php echo $data1->SoLuong ?>'></td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Giá :</td>
                                        <td><input type="text" name="Gia" style="min-width: 800px;" value='<?php echo $data1->Gia ?>'></td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Tổng tiền :</td>
                                        <td><input type="text" name="TongTien" style="min-width: 800px;" value='<?php echo $data1->TongTien ?>'></td>

                                    </tr>
                                   
                                    <tr>
                                        <td scope="row">Ngày xuất :</td>
                                        <td><input type="text" name="NgayXuat" style="min-width: 800px;" value='<?php echo $data1->NgayXuat ?>'></td>

                                    </tr>
                                </tbody>
                            </table>





                            <input type="submit" style="min-width: 100px; " value="Cập nhật">

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
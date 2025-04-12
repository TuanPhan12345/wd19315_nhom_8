<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<!-- Mirrored from themesbrand.com/velzon/html/master/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 07:29:52 GMT -->

<head>

    <meta charset="utf-8" />
    <title>King Manga</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- CSS -->
    <?php
    require_once "views/layouts/libs_css.php";
    ?>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- HEADER -->
        <?php
        require_once "views/layouts/header.php";

        require_once "views/layouts/siderbar.php";
        ?>
        
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                     <!-- start page title -->
                     <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">Quản Lý Mã Khuyến Mãi</h4>
                                

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Sửa Khuyến Mãi</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    

                    <div class="row">
                        <div class="col">

                            <div class="h-100">
                               <!-- Striped Rows -->
 <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Sửa Mã Khuyến Mãi<p style="font-size:10px;">(Bắt buộc phải nhập ô có dấu *)</p></h4>
                                    
                                    
                                    

                                </div><!-- end card header -->

                                <div class="card-body">               
                                    <div class="live-preview">
                                        <form action="?act=post-sua-khuyen-mai" method="POST" enctype="multipart/form-data"> 
                                            <input type="hidden" name="id" value="<?= $khuyenMai['id']?>">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="citynameInput" class="form-label">Mã Khuyến Mãi</label>
                                                        <input type="text" class="form-control" placeholder="Nhập vào mã khuyến mãi(*)" name="ma_khuyen_mai" value="<?= $khuyenMai['ma_khuyen_mai']?>">
                                                   
                                                        <span class="text-danger">
                                                            <?= !empty($_SESSION["errors"]["ma_khuyen_mai"]) ?  $_SESSION["errors"]["ma_khuyen_mai"] : '' ?>
                                                        </span>
                                                    </div>
                                                    
                                                </div>
                                                <!--end col-->
                                                
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="citynameInput" class="form-label">Giá Trị ( % )</label>
                                                        <input type="text" class="form-control" placeholder="Nhập vào giá trị của mã(*)" name="giam_phan_tram" value="<?= $khuyenMai['giam_phan_tram']?>">
                                                   
                                                        <span class="text-danger">
                                                            <?= !empty($_SESSION["errors"]["giam_phan_tram"]) ?  $_SESSION["errors"]["giam_phan_tram"] : '' ?>
                                                        </span>
                                                    </div>
                                                    
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="citynameInput" class="form-label">Giảm Tối Đa</label>
                                                        <input type="text" class="form-control" placeholder="Nhập vào số tiền tối đa được giảm(*)" name="giam_toi_da" value="<?= $khuyenMai['giam_toi_da']?>">
                                                        
                                                        <span class="text-danger">
                                                            <?= !empty($_SESSION["errors"]["giam_toi_da"]) ?  $_SESSION["errors"]["giam_toi_da"] : '' ?>
                                                        </span>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="citynameInput" class="form-label">Ngày Bắt Đầu</label>
                                                        <input type="date" class="form-control" placeholder="Nhập vào ngày bắt đầu" name="ngay_bat_dau" value="<?= $khuyenMai['ngay_bat_dau']?>">
                                                        
                                                        <span class="text-danger">
                                                            <?= !empty($_SESSION["errors"]["ngay_bat_dau"]) ?  $_SESSION["errors"]["ngay_bat_dau"] : '' ?>
                                                        </span>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="citynameInput" class="form-label">Ngày Kết Thúc</label>
                                                        <input type="date" class="form-control" placeholder="Nhập vào sô lượng(*)" name="ngay_ket_thuc" value="<?= $khuyenMai['ngay_ket_thuc']?>">
                                                        
                                                        <span class="text-danger">
                                                            <?= !empty($_SESSION["errors"]["ngay_ket_thuc"]) ?  $_SESSION["errors"]["ngay_ket_thuc"] : '' ?>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-primary">Sửa</button>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </form>
                                    </div>
                                 
                                </div>
                            </div>

                            </div> <!-- end .h-100-->

                        </div> <!-- end col -->
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © King Manga.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <?php
    require_once "views/layouts/libs_js.php";
    ?>

</body>

</html>
<?php 
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ


// Require toàn bộ file Controllers
require_once 'controllers/DashboardController.php';
require_once 'controllers/DanhMucController.php';
require_once 'controllers/SanPhamController.php';


// Require toàn bộ file Models
require_once './model/Dashboard.php';
require_once './model/DanhMuc.php';
require_once 'model/SanPham.php';





// Route
$act = $_GET['act'] ?? '/';

// if ($act !== 'login-admin' && $act !== 'check-login-admin') {
//   checkLoginAdmin();
// }

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Dashboards
    '/'                     => (new DashboardController())->index(),


    // route danh mục
    'danh-mucs'                                 => (new DanhMucController())->index(),
    'form-them-danh-muc'                        => (new DanhMucController())->create(),
    'post-them-danh-muc'                        => (new DanhMucController())->postcreate(),
    'form-sua-danh-muc'                         => (new DanhMucController())->edit(),
    'post-sua-danh-muc'                         => (new DanhMucController())->postedit(),
    'xoa-danh-muc'                              => (new DanhMucController())->destroy(),                        
    'search-danh-muc'                           => (new DanhMucController())->search(),

    // route sản phẩm
    'san-phams'                                 => (new SanPhamController())->index(),
    'form-them-san-pham'                        => (new SanPhamController())->create(),
    'post-them-san-pham'                        => (new SanPhamController())->postcreate(),
    'form-sua-san-pham'                         => (new SanPhamController())->formEditSanPham(),
    'post-sua-san-pham'                         => (new SanPhamController())->postEditSanPham(),
    'xoa-san-pham'                              => (new SanPhamController())->destroy(),
    'search-san-pham'                           => (new SanPhamController())->search(),
    'chi-tiet-san-pham'                         => (new SanPhamController())->detailSanPham(),
    'sua-album-anh-san-pham'                    => (new SanPhamController())->postEditAnhSanPham(),
    
    
      





    
};
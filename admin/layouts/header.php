<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin</title>
    <!-- Custom fonts for this template-->
    <link href="/webphp/public/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="/webphp/public/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="/webphp/public/admin/css/sb-admin.css" rel="stylesheet">
</head>

<body id="page-top">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
        <a class="navbar-brand mr-1" href="http://localhost/webphp/index.php">
            <div class="fa fa-home">&nbsp;</div>Xem Trang Chủ
        </a>
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        </form>
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <?php echo $_SESSION['admin_name'] ?>&nbsp;
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="/webphp/dang-xuat.php">Đăng xuất</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="wrapper">
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url() ?>admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Bảng quản lý</span>
                </a>
            </li>
            <li class="<?php echo isset($open) && $open == 'category' ? 'active' : '' ?>" style="
    padding-bottom: 5px;
    padding-top: 5px;
">
                <a href="<?php echo modules("category") ?>" style="text-decoration: none;">&nbsp&nbsp&nbsp&nbsp<i
                        class="fa fa-list">&nbsp&nbsp</i>Danh mục sản
                    phẩm</a>
            </li>
            <li class="<?php echo isset($open) && $open == 'product' ? 'active' : '' ?>" style="
    padding-bottom: 5px;
    padding-top: 5px;
">
                <a href="<?php echo modules("product") ?>" style="text-decoration: none;">&nbsp&nbsp&nbsp&nbsp<i
                        class="fa fa-database">&nbsp&nbsp</i>Sản phẩm</a>
            </li>
            <li class="<?php echo isset($open) && $open == 'admin' ? 'active' : '' ?>" style="
    padding-bottom: 5px;
    padding-top: 5px;
">
                <a href="<?php echo modules("admin") ?>" style="text-decoration: none;">&nbsp&nbsp&nbsp&nbsp<i
                        class="fa fa-user-circle">&nbsp&nbsp</i>Admin</a>
            </li>
            <li class="<?php echo isset($open) && $open == 'user' ? 'active' : '' ?>" style="
    padding-bottom: 5px;
    padding-top: 5px;
">
                <a href="<?php echo modules("user") ?>" style="text-decoration: none;">&nbsp&nbsp&nbsp&nbsp<i
                        class="fas fa-users">&nbsp&nbsp</i>Thành
                    viên</a>
            </li>
            <li style="
    padding-bottom: 5px;
    padding-top: 5px;
">
                <a href="<?php echo base_url() ?>admin" style="text-decoration: none;">&nbsp&nbsp&nbsp&nbsp<i
                        class="fa fa-funnel-dollar">&nbsp&nbsp</i>Quản lý
                    kho</a>
            </li>
            <li class="<?php echo isset($open) && $open == 'transaction' ? 'active' : '' ?>" style="
    padding-bottom: 5px;
    padding-top: 5px;
">
                <a href="<?php echo modules("transaction") ?>" style="text-decoration: none;">&nbsp&nbsp&nbsp&nbsp<i
                        class="fas fa-gift">&nbsp&nbsp</i>Đơn hàng</a>
            </li>

        </ul>
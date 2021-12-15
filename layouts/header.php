<!DOCTYPE html>
<html>

<head>
    <title>Web Mỹ Phẩm Mi Mèo Cosmetics</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/webphp/public/frontend/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/webphp/public/frontend/css/bootstrap.min.css">
    <script src="/webphp/public/frontend/js/jquery-3.2.1.min.js"></script>
    <script src="/webphp/public/frontend/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/webphp/public/frontend/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="/webphp/public/frontend/css/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="/webphp/public/frontend/css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <div id="wrapper" style="
    width: 100%;
">
        <div id="header" style="background-color:#D8D8D8">
            <div id="header-top">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-md-6" id="header-text">
                            <a style="background-color:#d11618;border-radius:20px;">webphp</a><b>Chào mừng bạn đến Mỹ Phẩm Mi Mèo Cosmetics - GVHD: TS. Trần Văn Hưng</b>
                        </div>
                        <div class="col-md-6">
                            <nav id="header-nav-top">
                                <ul class="list-inline pull-right" id="headermenu">
                                    <?php if (isset($_SESSION['name_user'])): ?>
                                    <li>Xin Chào, <?php echo $_SESSION['name_user']; ?></li>
                                    <li>
                                        <a href="#"><i class="fa fa-user"> </i> Tài Khoản <i class="fa fa-caret-down"
                                                style="width: 50px;"></i></a>
                                        <ul id="header-submenu">
                                            <li><a href="thong-tin-user.php" style="color:black"><i class="fas fa-exchange-alt"></i> Thông
                                                    Tin</a></li>
                                            <li><a href="gio-hang.php" style="color:black"><i class="fas fa-shopping-cart"></i> Giỏ Hàng</a>
                                            </li>
                                            <li><a href="thoat.php" style="color:black"><i class="fa fa-share-square-o"></i> Đăng Xuất</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <?php else: ?>
                                    <li style="border-left-width: 0px;">
                                        <a href="dang-nhap.php"><i class="fa fa-lock"
                                                style="text-decoration: none;display: inline-block;"></i>&nbsp; Đăng
                                            Nhập</a>
                                    </li>
                                    <li style="border-left-width: 0px;">
                                        <a href="dang-ky.php"><i class="fa fa-user"
                                                style="text-decoration: none;display: inline-block;"></i>&nbsp; Đăng
                                            Ký</a>
                                    </li>
                                    <?php endif; ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" style="width: 100%;">
                <div id="menunav" style="
    width: 100%;background:white;
">
                    <div class="container" style="
    margin-left: 20px;
    margin-right: 20px;
    width: 98%;">
                        <nav>
                            <div class=" pull-left" id="logo"><a href="index.php" title="MiMeo"><img
                                        src="./public/frontend/images/logo1.png" width="90px" height="90px"
                                        alt="MiMeo"></a>
                            </div>
                            <div class="home pull-left"
                                style="padding-top:24px;padding-left:20px;text-decoration: none;display: inline-block;">
                                <a href="index.php"
                                    style="background:white;color:#000000;border-right-width: 0px;font-size:14px;">
                                    Trang chủ</a>
                            </div>
                            <ul id="menu-main" style="padding-top:24px;text-decoration: none;display: inline-block;">
                                <li>
                                    <a href="main.php"
                                        style="background:white;color:#000000;border-right-width: 0px;text-decoration: none;font-size:14px;">Sản
                                        phẩm</a>
                                </li>
                                <li>
                                    <a href="phan-hoi.php"
                                        style="background:white;color:#000000;border-right-width: 0px;text-decoration: none;font-size:14px;">Phản
                                        hồi</a>
                                </li>
                                <li>
                                    <a href="gioi-thieu.php"
                                        style="background:white;color:#000000;border-right-width: 0px;text-decoration: none;font-size:14px;">Về
                                        chúng tôi</a>
                                </li>
                            </ul>
                            <ul class="pull-right" id="main-shopping" style="margin-left: 0px;padding-top:24px;">
                                <li>
                                    <a href="gio-hang.php" style="background-color:#FE2E2E;border-radius:10px;margin-right:10px"><i
                                            class="fa fa-shopping-basket" style="background-color:#FE2E2E">
                                        </i>&nbsp; Giỏ hàng</a>
                                </li>
                            </ul>
                            <div class="col-md-3 pull-right" style=" padding-top: 28px;width: 240px;padding-left: 0px;">
                                <form class="form-inline" action="tim-kiem.php" style="width: 240px;">
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="find">
                                        <input type="text" name="keyword" placeholder="Nhập sản phẩm cần tìm"
                                            class="form-control">
                                        <button type="submit" class="btn btn-default"><i
                                                class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>

                        </nav>
                    </div>
                </div>

                <script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer>
                $(document).ready(function() {
                    $("header-search").keyup(function() {
                        $.ajax({
                            type: "get",
                            url: "/tim-kiem.php",
                            data: 'keyword=' + $(this).val(),
                            beforeSend: function() {
                                $("header-search").css("background",
                                    "#FFF url() no-repeat 165px");
                            },
                            success: function(data) {
                                $("#suggesttion-box").show();
                                $("#suggesttion-box").html('').append(data);
                                $("#header-search").css("background", "#FFF");
                            }
                        });
                    });
                    $('#header-search').blur(function() {})
                });

                function selectCountry(val) {
                    $("#header-search").val(val);
                    $("#suggesttion-box").hide();
                }
                </script>
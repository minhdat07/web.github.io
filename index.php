<?php
    include("connect.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Hoa Minh Dat</title>
    <link rel="shortcut icon" href="./img/logo (2).jpg">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./assets/fontawesome-free-5.14.0-web/css/all.min.css">
</head>

<body>
    <!--header-->

    <div id="top-mn">
        <ul class="phone">
            <li>
                <i class="fas fa-mobile-alt"></i>
                <b>Hotline:</b>
                <span><a href="callto:0865168858"> 0865168858</a></span>
            </li>
            <li>
                <i class="fas fa-map-marker-alt"></i>
                <b>Địa chỉ :</b>
                <span>Số 37 Đường HQ1 - Hoằng Hóa - Thanh Hóa</span>
            </li>
            <li class="logjn">
                <a href="login.php">Login</a>
                <span> / </span>
                <a href="login.php">Logout</a>
                <span> -- </span>
                <a href="#" style="right: 0; color: white;">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <span> -- </span>
            </li>

        </ul>
    </div>
    <!--logo-->
    <div class="logo_main">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo">
                        <a href="index.php"><img src="img/logo (2).jpg" style="width: 82px;"></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="info">
                        <ul>
                            <li class="vch">
                                <span>
                            <a href="#"><img src="img/xe.png" alt="xe"></a>
                            <div class="info-vch">
                                <a href="#">Miễn Phí Vận Chuyển</a>
                                <p style="margin-bottom: 0;">bán kính 5km</p>
                            </div>
                        </span>
                            </li>
                            <li class="vch">
                                <span>
                            <a href="#"><img src="img/thu.png" alt="thư"></a>
                            <div class="info-vch">
                                <a href="#">Hotline</a>
                                <p style="margin-bottom:0 ";>0865168858</p>
                            </div>
                        </span>
                            </li>
                            <li class="vch">
                                <span>
                            <a href="#"><img src="img/time.png" alt="thư"></a>
                            <div class="info-vch">
                                <a href="#">7h - 20h</a>
                                <p style="margin-bottom: 0">T2 - Chủ nhật</p>
                            </div>
                        </span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
        <?php
            $sql_category = mysqli_query($conn,'SELECT * FROM danh_muc ORDER BY id DESC');
        ?>
    <!--menu-->
    <div class="menu" id="scroll_menu">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="agileits-navi_search">
                        <form action="#" method="post">
                            <select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
                                <option value="">Danh Mục Sản Phẩm</option>
                                <?php
                                while ($rows_category = mysqli_fetch_array($sql_category)){
                                
                                ?>
                                <option value="<?php echo $rows_category['id']?>"><?php echo $rows_category['name']?></option>
                                <?php
                                }?>
                            </select>
                        </form>
                    </div>
                </div>
                <div class="col-md-7">
                    <dv class="main-menu">
                    <ul>
                                <li>
                                    <a href="#subbb">giỏ hoa</a>
                                </li>
                                <li>
                                    <a href="">hoa bó</a>
                                </li>
                                <li>
                                    <a href="">hoa chúc mừng</a>
                                </li>
                                <li>
                                    <a href="">hoa chia buồn</a>
                                </li>
                    <!-- <?php
                        $sql_category_menu = mysqli_query($conn,'SELECT * FROM danh_muc ORDER BY id DESC');
                        while ($rows_category_menu = mysqli_fetch_array($sql_category_menu)){
                    ?>   
                        <li>
                            <a href=""><?php echo $rows_category_menu['name']?></a>
                        </li>
                        
                    <?php
                        }
                    ?> -->

                    </ul>
                    </dv>
                </div>
                <div class="col-md-3">
                    <div class="find">
                        <form action="index.php">
                            <input type="text" placeholder="Tìm sản phẩm">
                            <a href="#"><img src="img/iconsearch.png" alt=""></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="share_main">
        <div class="">
            <form action="index.php">
                <input type="text" placeholder="Tìm sản phẩm">
                <a href="#"><img src="img/iconsearch.png" alt=""></a>
                <i class="fas fa-shopping-cart"></i>
            </form>
        </div>
    </div>
    <!--chuyển động-->
    <div class="">
        <div class="">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="border: 3px solid gainsboro;border-radius: 20px;">
                <div class="carousel-item active">
                    <img src="img/banner_1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/banner_2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/banner_3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/banner4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>

    </div>
    <!--content-->
    <div class="content">
        <div class="container">
            <?php
            $sql_cate_home =mysqli_query($conn,'SELECT * FROM danh_muc ORDER BY id DESC');
            while ($rows_cate_home = mysqli_fetch_array($sql_cate_home)){
            $id_category = $rows_cate_home['id'];
            ?>
            <div class="hoa">
                <div class="title" id = "subbb">
                    <h3 class="sub-title">
                        <b></b>
                    <span class="main-sub">
                        <i class="far fa-heart"></i>
                            <?php
                                echo $rows_cate_home['name']
                            ?>
                        <i class="far fa-heart"></i>
                    </span>
                        <b></b>
                    </h3>
                </div>
                <div class="row">
                <?php
                $sql_product = mysqli_query($conn,"SELECT * FROM tbl_sanpham ORDER BY sanpham_id DESC");
                while($rows_sanpham = mysqli_fetch_array($sql_product)){    
                    if($rows_sanpham['id']==$id_category){
                ?>
                    <div class="col-md-3 item">
                        <div class="sub">
                            <div class="main-giohoa">
                                <img src="img/<?php echo $rows_sanpham['sanpham_image'] ?>" alt="">
                            </div>
                            <div class="product-info a-center">
                                <h3 class="product-name">
                                    <?php echo $rows_sanpham['sanpham_name']?>
                                </h3>
                                <div class="price-box clearfix">
                                    <span class="special-price">
                                        <span class="price product-price">
                                            <?php echo number_format($rows_sanpham['sanpham_gia']) .' VNĐ' ?>
                                        </span>
                                    </span>
                                    <p>
                                        <a class="btn button-price" href="giohoa.html">Mua ngay</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                }
                ?>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>

    <!--phone-->
    <div class="hotline-phone-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
                <a href="tel:0865168858" class="pps-btn-img">
                    <img src="img/logo_phone.png" alt="Gọi điện thoại" width="50">
                </a>
            </div>
        </div>

    </div>
    <!-- Footer -->
    <div class="">
        <div class="">
        </div>
    </div>
    <div class="footer-copyright text-center py-3" style="background: rgb(58, 58, 58);float: left;width: 100%;color: aliceblue;">© 2020 Copyright:
        <a href="minhdatshop.asia"> minhdatshop.asia</a>
    </div>
    <!-- Copyright -->
    <a id="nutbacktotop" href="javascript:void(0)" title="Back to Top"><img src="img/backtotop.png" alt="Quay lại đầu trang" style="width: 45px;height: 45px;" /></a>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
<?php 
    require_once  __DIR__. "/autoload/autoload.php"; 
    $sqlHomecate = "SELECT name,id FROM category WHERE home ";  
    $CategoryHome = $db->fetchsql($sqlHomecate);
    $data = [];
        foreach ($CategoryHome as $item)
         {
        $cateId = intval($item['id']);
        $sql = " SELECT * FROM product WHERE category_id = $cateId";
        $ProductHome = $db->fetchsql($sql);
        $data[$item['name']] = $ProductHome;
        }
 ?>

<?php require_once  __DIR__. "/layouts/header.php"; ?>
<section style="
    width: 100%;
">
    <h2
        style="position: absolute;top:250px;left:520px;text-align: center;text-decoration: none;font-size: 28px;display: inline-block;font-family: 'Dancing Script', cursive;">
        Mi Mèo Cosmetics<br><br>Bí Quyết Sắc Đẹp Cho Quý Cô
    </h2>
    <a href="main.php" class="button w3-button w3-border w3-hover-red"
        style="position:absolute;margin-top:280px;margin-left:580px;height:44px;background-color:#fff;border: none;border-radius: 99px;
    padding:10px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;color:#666666">Xem Sản Phẩm</a>
    <img src=" ./public/frontend/images/banner2.jpg" class="right" alt="Image" style="width:100%;height:500px">
</section>

<section style="
    width: 100%;
">
    <div class="" style="height:260px; background-color:#D8D8D8">
        <div class="col-md-4" style="height:200px;padding-left: 50px">
            <div class="col-inner" style="margin-top: 50px;width: 400px;padding-right: 50px;">
                <div class="icon-box featured-box icon-box-left text-left" style="text-align: left;display: flex;">
                    <div class="icon-box-img" style="width: 62px">
                        <div class="icon">
                            <div class="icon-inner">
                                <img width="62" height="62" src="./public/frontend/images/tn.png"
                                    class="attachment-medium size-medium" alt="img_outleft"> </div>
                        </div>
                    </div>
                    <div class="icon-box-text last-reset" style="padding-left: 1em;">

                        <h3 style="font-family: 'Dancing Script', cursive;">Hướng kinh doanh mỹ phẩm Mi Mèo Cosmetics</h3>
                        <br>
                        <p style="font-family: 'MuseoModerno', cursive;"><em
                                style="font-size:16px;font-family: 'MuseoModerno', cursive;">Mi Mèo Cosmetics đối tác bán lẻ của các nhãn hàng mỹ phẩm đang được phân phối chính hãng trên thị trường Việt Nam</em></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="height:200px; padding-left: 30px; padding-right: 30px;">
            <div class="col-inner" style="margin-top: 50px;width: 400px;padding-right: 50px;">
                <div class="icon-box featured-box icon-box-left text-left" style="text-align: left;display: flex;">
                    <div class="icon-box-img" style="width: 62px">
                        <div class="icon">
                            <div class="icon-inner">
                                <img width="62" height="62" src="./public/frontend/images/tn.png"
                                    class="attachment-medium size-medium" alt="img_outleft"> 
                            </div>
                        </div>
                    </div>
                    <div class="icon-box-text last-reset" style="padding-left: 1em;">
                        <h3 style="font-family: 'Dancing Script', cursive;">Đào tạo nhân lực
                        </h3>
                        <br>
                        <p style="font-family: 'MuseoModerno', cursive;"><em
                                style="font-size:16px;font-family: 'MuseoModerno', cursive;">
Tạo ra nhiều cơ hội thành công cho đối tác và đội ngũ nhân viên của mình.</em></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="height:200px; padding-left: 15px;padding-right: 50px;">
            <div class="col-inner" style="margin-top: 50px;width: 400px;padding-right: 50px;">
                <div class="icon-box featured-box icon-box-left text-left" style="text-align: left;display: flex;">
                    <div class="icon-box-img" style="width: 62px">
                        <div class="icon">
                            <div class="icon-inner">
                                <img width="62" height="62" src="./public/frontend/images/tn.png"
                                    class="attachment-medium size-medium" alt="img_outleft"> 
                            </div>
                        </div>
                    </div>
                    <div class="icon-box-text last-reset" style="padding-left: 1em;">
                        <h3 style="font-family: 'Dancing Script', cursive;">Chứng Nhận Mỹ Phẩm Chính Hãng</h3>
                        <br>
                        <p style="font-family: 'MuseoModerno', cursive;"><em
                                style="font-size:16px;font-family: 'MuseoModerno', cursive;">Mi Mèo Cosmetics cung cấp các sản phẩm chính hãng mang đến giải pháp chăm sóc cho phái đẹp.</em></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="height:240px;width:100%;background-color:white;">
    <div class="col-md-9" style="height:200px;padding-left: 200px;padding-right: 200px;width: 100%;">
        <div class=" col-inner" style="margin-top: 20px;width: auto;">
            <div class="icon-box featured-box icon-box-left text-left" style="text-align: left;display: flex;">
                <div class="icon-box-img" style="width: 150px">
                    <div class="icon">
                        <div class="icon-inner">
                            <img width="150px" height="150px" src="./public/frontend/images/logo1.png"
                                class="attachment-medium size-medium" alt="img_outleft"> </div>
                    </div>
                </div>
                <div class="icon-box-text last-reset" style="padding-left: 1em;margin-top:30px;font-size:20px">
                    <h3 style="font-family: 'Dancing Script', cursive;">Mi Mèo Cosmetics</h3>
                    <br>
                    <p style="font-size:20px"><em style="font-size:16px;font-family: 'MuseoModerno', cursive;">Với
                            nhiều kinh nghiệm
                            nghiên cứu về mỹ phẩm, Mi Mèo Cosmetics tin rằng có thể mang đến
                            cho
                            các bạn những trải nghiệm tuyệt vời nhất.</em></p>
                </div>
                <div><img src="./public/frontend/images/gi1.gif"
                        style="height: 160px;padding-top: 10px;padding-left: 10px;border-radius: 99px;"></img></div>
            </div>
        </div>
    </div>
</section>

<section style="width: 100%;" style="float:left">
    <div class="" style="text-align:center">
        <h3
            style="width:100%;text-align: center;text-decoration: none;font-size: 28px;display: inline-block;font-family: 'Dancing Script', cursive;padding-left: 200px;padding-right: 200px;padding-bottom: 5px;padding-top: 5px;">
            --- Sản Phẩm Mới ---</h3>
        <ul>
            <?php foreach ($productNew as $item):?>
            <li class="clearfix" style="float:left;padding:20px 20px 20px 45px">
                <a href="chi-tiet-san-pham.php?id= <?php echo $item['id'] ?>">
                    <img src="<?php echo uploads() ?>/product/<?php echo $item['thunbar']?>"
                        style="width:200px;height:200px;border-radius:50%" class="img-responsive">
                    <div class="info" style="float:left;width:200px">
                        <p class="name" style="width:200px;text-align: center;text-decoration: none;padding:20px 0px">
                            <?php echo $item['name'] ?></p>
                        <?php if ($item['sale'] > 0): ?>
                        <p> <strike class="sale"><?php echo formatPrice($item['price']) ?>
                            </strike></br> <b
                                class="price"><?php echo formatpricesale($item['price'],$item['sale']) ?></b>
                            <?php else: ?>
                            <b class="price"><?php echo formatPrice($item['price']) ?></b>
                            <?php endif ?>
                    </div>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        <a href="main.php"
            style="width:1220px;padding:5px 450px;color:4c4c4c;text-align: center;text-decoration: none;font-size: 20px;display: inline-block;font-family: 'Dancing Script', cursive;">
           ( Xem Thêm Sản Phẩm )
        </a>
    </div>
</section>

<section style="margin-top:10px;float:left;height:700px;width: 100%;background-image:url(./public/frontend/images/banner4.jpg);">
    <div style="padding:80px 60px"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.539857495006!2d108.21987485914129!3d16.03745145583485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219e968f14dfb%3A0xe5c21c68cbecec49!2zMzggUGhhbiDEkMSDbmcgTMawdSwgSG_DoCBDxrDhu51uZyBC4bqvYywgSOG6o2kgQ2jDonUsIMSQw6AgTuG6tW5nLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1609815249239!5m2!1svi!2s" width="1200" height="550" frameborder="0" style="border-radius:20px;border:0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <h2
            style="width:1220px;padding:5px 450px;color:black;text-align: center;text-decoration: none;font-size: 28px;display: inline-block;font-family: 'Dancing Script', cursive;">
            <i class="fas fa-map-marker-alt"
                style="color:black;text-align: center;text-decoration: none;font-size: 28px;display: inline-block;padding-right:15px"></i>Đà Nẵng - Việt Nam
        </h2>
    </div>
</section>

<?php require_once  __DIR__. "/layouts/footer.php"; ?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');
</style>
<style>
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Fahkwang:wght@200&display=swap');
</style>
</div>

<section id="footer" style="
    width: 100%;
">
    <div class="container" style="
    width: 1329px;
">
        <div class="col-md-3 pull-right" id="shareicon">
            <ul>
                <li>
                    <a href="https://www.facebook.com/iamchuppyy"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/_chuppyy_/"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                    <a href="https://www.pinterest.com/iamchuppyy/boards/"><i class="fa fa-pinterest"></i></a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCcB8cwKPjjLuuOFI4QkpnQg"><i class="fa fa-youtube"></i></a>
                </li>
            </ul>
        </div>
        <div class="col-md-8" id="title-block">
            <div class="pull-left">
            </div>
            <div class="pull-right">
            </div>
        </div>
    </div>
</section>

<div class="row"
    style="height:240px;background-image:url(./public/frontend/images/gif2.gif);width: 100%;margin-right: 0px;margin-left: 0px;">
    <div class="col-md-4 box-footer" style="
    margin-left: 100px;
    margin-right: 100px;
    border-left-width: 0px;
">
        <h3 class="title-footer" style="color:white;font-family: 'Lemonada', cursive;"> Thông Tin</h3>
        <br>
        <p style="font-size: 16px;color:white;font-family: 'Lemonada', cursive;">Shop được thành lập năm 2019, chủ yếu phân phối các dòng mỹ phẩm trong nước.<br>Các sản phẩm của Mi Mèo Cosmetics được lựa chọn một cách cẩn thận và đã được chủ shop trải nghiệm trước khi bán cho khách hàng. Vì vậy bạn có thể phần nào yên tâm về chết lượng sản phẩm.</p>
    </div>
    <div class="col-md-5" id="footer-support" style="padding-left:50px;">
        <h3 class="title-footer" style="color:white;font-family: 'Lemonada', cursive;">Liên Hệ</h3>
        <p style="font-size: 16px;color:white;font-family: 'Lemonada', cursive;"><strong style="font-family: 'Lemonada', cursive;font-size: 20px;color:white;">Mi Mèo Cosmetics<br></strong>
            – Địa chỉ: <span class="_2iem" style="font-size: 16px;color:white;font-family: 'Lemonada', cursive;">38 Phan Đăng Lưu, phường Hòa Cường Nam, quận Hải Châu, 
            TP. Đà Nẵng, Việt Nam<br>
            – Điện thoại: 0903 514 227</p>
    </div>
</div>

<div class="container-pluid" style="
    width: 100%;
">
    <section id="ft-bottom">
        <p class="text-center">@2020 Bản quyền webmypham mỹ phẩm Mi Mèo Cosmetics</p>
    </section>
</div>
</div>
</div>
</div>
</div>
<script src="/webmypham/public/frontend/js/slick.min.js"></script>
</body>

</html>
<script type="text/javascript">
$(function() {
    $hidenitem = $(".hidenitem");
    $itemproduct = $(".item-product");
    $itemproduct.hover(function() {
        $(this).children(".hidenitem").show(100);
    }, function() {
        $hidenitem.hide(500);
    })
})
$(function() {
    $updatecart = $(".updatecart");
    $updatecart.click(function(e) {
        e.preventDefault();
        $qty = $(this).parents("tr").find("#qty").val();
        console.log($qty);
        $key = $(this).attr("data-key");
        $.ajax({
            url: 'cap-nhat-gio-hang.php',
            type: 'GET',
            data: {
                'qty': $qty,
                'key': $key
            },
            success: function(data) {
                if (data == 1) {
                    alert("Cập nhật thành công");
                    location.href = 'gio-hang.php';
                }
            }
        });
    })
})
</script>
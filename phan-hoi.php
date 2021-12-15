<?php 
	require_once  __DIR__. "/autoload/autoload.php";   
	$data = 
	[
		'name' => postInput("name"),
		'email' => postInput("email"),
		'content' => postInput("content"),
		
	];	
		$error = [];
	  if ($_SERVER["REQUEST_METHOD"] == "POST") 
	  {	  	
	  	if($data['name'] == '')
	  	{
	  		$error['name'] = "Tên không được để trống";
	  	}
	  	
	  	if($data['email'] == '')
	  	{
	  		$error['email'] = "Email không được để trống";
	  	}
	  	
	  	if($data['content'] == '')
	  	{
	  		$error['content'] = "Nội dung không được để trống";
	  	}  	
	  	//Kiem tra mang error
	  	if (empty($error)) 
	  	{
	  		$id_insert = $db->insert("feedback",$data);
	  		if($id_insert > 0)
	  		{
	  			$_SESSION['success'] = "Phản hồi thành công. Cảm ơn sự góp ý của bạn, Chúng tôi sẽ ghi nhận và khắc phục để mang đến cho khách hàng những trải nghiệm tuyệt vời nhất. <3";
	  			header("localtion:index.php");
	  		}
	  		else
	  		{
	  			echo "Thất bại";
	  		}
	  	}
	  }
?>
<?php require_once  __DIR__. "/layouts/header.php"; ?>
<div class="col-md-9 bor" style="
    width: 1349px;
    padding-right: 0px;
    padding-left: 0px;
    border-left-width: 0px;
    border-right-width: 0px;
">
    <section class="box-main1" style="background-image:url(./public/frontend/images/banner6.jpg);height:780px;">
        <h3 class="title-main"><a href=""> Phản hồi về
                chúng tôi</a> </h3>
        <?php if (isset($_SESSION['success'])): ?>
        <div class="alert alert-success">
            <strong></strong> <?php echo $_SESSION['success']; unset($_SESSION['success']) ?>
        </div>
        <?php endif ?>
        <form action="" method="POST" class="form-horizontal formcustome" role="form" style="margin-top: 150px">
            <div class="form-group" style="
    margin-right: 0px;
    margin-left: 0px;
">
                <label class="col-md-2 col-md-offset-1" style="font-size:16px;color: white;"> Họ tên</label>
                <div class="col-md-5">
                    <input type="text" name="name" placeholder="Tên" class="form-control"
                        value="<?php echo $data['name'] ?>">
                    <?php if (isset($error['name'])): ?>
                    <p class="text-danger"> <?php echo $error['name'] ?></p>
                    <?php endif ?>
                </div>
            </div>
            <div class="form-group" style="
    margin-right: 0px;
    margin-left: 0px;
">
                <label class="col-md-2 col-md-offset-1" style="font-size:16px;color: white;"> Email</label>
                <div class="col-md-5">
                    <input type="email" name="email" placeholder="...@gmail.com" class="form-control"
                        value="<?php echo $data['email'] ?>">
                    <?php if (isset($error['email'])): ?>
                    <p class="text-danger"><?php echo $error['email'] ?></p>
                    <?php endif ?>
                </div>
            </div>
            <div class="form-group" style="
    margin-right: 0px;
    margin-left: 0px;
">
                <label class="col-md-2 col-md-offset-1" style="font-size:16px;color: white;"> Nội dung</label>
                <div class="col-md-5">
                    <textarea type="text" name="content" placeholder="" class="form-control"
                        value="<?php echo $data['content'] ?>" rows="5">
            				</textarea>
                    <?php if (isset($error['content'])): ?>
                    <p class="text-danger"><?php echo $error['content'] ?></p>
                    <?php endif ?>
                </div>
            </div>
            <button type="submit" class="btn btn-success col-md-1 col-md-offset-4" style="margin-top: 0px;position:absolute;border: none;border-radius: 99px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;background-color:#FE2E2E">Gửi</button>
        </form>
        <div class="like" style="
    padding-left: 380px;
    padding-top: 50px;
">
        <img src="./public/frontend/images/like.gif" style="width:250px; height:200px;border-radius:200px"></img>
        </div>
</div>

</section>
</div>
<?php require_once  __DIR__. "/layouts/footer.php"; ?>
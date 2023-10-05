<?php 
    class Room
    {
        function __construct($name,$services1, $services2, $services3, $services4, $services5, $people, $acreage, $image, $price){
            $this->name=$name;
            $this->services1=$services1;
            $this->services2=$services2;
            $this->services3=$services3;
            $this->services4=$services4;
            $this->services5=$services5;
            $this->people=$people;
            $this->acreage=$acreage;
            $this->image=$image;
            $this->price=$price;
        }
    }

    $dataSignleRoom = array(
        array('phòng đơn tiêu chuẩn','tag_icon_1.svg','','','tag_icon_4.svg','tag_icon_5.svg','02','20','phong1.webp','500.000'),
        array('phòng đơn view thành phố','tag_icon_1.svg','tag_icon_2.svg','','tag_icon_4.svg','tag_icon_5.svg','02','25','phong2.webp','700.000'),
        array('phòng đơn view sân vườn','tag_icon_1.svg','tag_icon_2.svg','','tag_icon_4.svg','tag_icon_5.svg','02','25','phong3.webp','800.000'),
        array('phòng đơn view biển','tag_icon_1.svg','tag_icon_2.svg','','tag_icon_4.svg','tag_icon_5.svg','01','25','phong4.webp','900.000'),
    );
    
    $singleRoom = array();
    foreach($dataSignleRoom as $key => $value){
        array_push($singleRoom,new Room($value[0],$value[1],$value[2],$value[3],$value[4],$value[5],$value[6],$value[7],$value[8],$value[9]));
    }

    $dataDoubleRoom = array(
        array('phòng đôi tiêu chuẩn','tag_icon_1.svg','tag_icon_2.svg','tag_icon_3.svg','tag_icon_4.svg','tag_icon_5.svg','02','25','phongdoi1.webp','950.000'),
        array('phòng đôi view thành phố','tag_icon_1.svg','tag_icon_2.svg','tag_icon_3.svg','tag_icon_4.svg','tag_icon_5.svg','02','30','phongdoi2.webp','1.100.000'),
        array('phòng đôi view sân vườn','tag_icon_1.svg','tag_icon_2.svg','tag_icon_3.svg','tag_icon_4.svg','tag_icon_5.svg','02','30','phongdoi3.webp','1.200.000'),
        array('phòng đôi 2 giường đôi','tag_icon_1.svg','tag_icon_2.svg','tag_icon_3.svg','tag_icon_4.svg','tag_icon_5.svg','04','32','phongdoi4.webp','1.500.000'),
    );

    $doubleRoom = array();
    foreach($dataDoubleRoom as $key => $value){
        array_push($doubleRoom,new Room($value[0],$value[1],$value[2],$value[3],$value[4],$value[5],$value[6],$value[7],$value[8],$value[9]));
    }

    class VipRoom
    {
        
        function __construct($name, $image, $price){
            $this->name=$name;
            $this->image=$image;
            $this->price=$price;
        }
    }

    $dataVipRoom = array(
        array('phòng gia đình','phongvip2.webp','3.000.000'),
        array('căn hộ chung cư','phongvip3.webp','2.700.000'),
        array('phòng hạng sang','phongvip4.webp','3.500.000'),
        array('phòng đôi nối liền','phongvip5.webp','4.000.000'),
    );

    
    $vipRoom = array();
    foreach($dataVipRoom as $key => $value){
        array_push($vipRoom,new VipRoom($value[0],$value[1],$value[2]));
    }

    class News
    {
        function __construct($title, $text, $author, $image, $postDate){
            $this->title=$title;
            $this->text=$text;
            $this->author=$author;
            $this->image=$image;
            $this->postDate=$postDate;
		}
   	}

	$dataNews = array(
	    array('10 xu hướng thịnh hành trong ngành khách sạn 2022','Không gian ngoài trời mở rộng hơn, nâng cấp công nghệ để hạn chế tối đa tiếp xúc là những xu hướng mới nhiều khách','By Bean Hotel','tintuc1.webp','06/12/2022'),
	    array('Những điều kiêng kị khi ở khách sạn mà bạn nên biết','Để không gặp nhiều phiền toái và giữ an toàn cho chính bản thân trong mỗi chuyến đi, bạn nên cẩn thận tìm hiểu một','By Bean Hotel','tintuc2.webp','06/12/2022'),
	    array('Ý nghĩa việc khách sạn để chocolate lên gối khi dọn phòng','Các quản lý khách sạn phát hiện ra dịch vụ này nhận được nhiều lời khen từ khách thuê phòng hơn bất kỳ hoạt động.','By Bean Hotel','tintuc3.webp','06/12/2022'),
	);

	$News = array();
	foreach($dataNews as $key => $value){
	    array_push($News,new News($value[0],$value[1],$value[2],$value[3],$value[4]));
	}

	class Food
    {
        
        function __construct($name, $image, $price, $discount, $salePrice){
            $this->name=$name;
            $this->image=$image;
            $this->price=$price;
            $this->discount=$discount;
            $this->salePrice=$salePrice;
        }
    }

    $dataDish = array(
        array('mì xào bò','monan1.webp','80.000', '20', '100.000'),
        array('bún xào thịt heo','monan2.webp','75.000', '17', '90.000'),
        array('bún bò huế','monan3.webp','95.000', '5', '100.000'),
        array('mì xào thịt heo','monan4.webp','85.000', '12', '97.000'),
        array('bánh mì ốp la trứng','monan5.webp','40.000', '', ''),
        array('bánh mì bò kho','monan6.webp','70.000', '22', '90.000'),
        array('bún bò - heo','monan7.webp','80.000', '11', '90.000'),
        array('cơm sườn trứng','monan8.webp','50.000', '17', '60.000'),
    );

    
    $dish = array();
    foreach($dataDish as $key => $value){
        array_push($dish,new Food($value[0],$value[1],$value[2],$value[3],$value[4]));
    }

    $dataDrink = array(
        array('trà đào cam sả','douong1.webp','30.000', '25', '40.000'),
        array('matcha đá xay','douong2.webp','55.000', '', ''),
        array('cam vắt','douong3.webp','45.000', '', ''),
        array('trà quế cam thảo','douong4.webp','80.000', '11', '90.000'),
        array('trà xanh hoa hài','douong5.webp','60.000', '25', '80.000'),
        array('cafe dừa sala','douong6.webp','50.000', '17', '60.000'),
        array('trà yogurt đào','douong7.webp','90.000', '', ''),
        array('trà hoa hồng kem','douong8.webp','60.000', '', ''),
    );

    $drink = array();
    foreach($dataDrink as $key => $value){
        array_push($drink,new Food($value[0],$value[1],$value[2],$value[3],$value[4]));
    }

    $dataCake = array(
        array('trà đào cam sả','douong1.webp','30.000', '25', '40.000'),
        array('matcha đá xay','douong2.webp','55.000', '', ''),
        array('cam vắt','douong3.webp','45.000', '', ''),
        array('trà quế cam thảo','douong4.webp','80.000', '11', '90.000'),
        array('trà xanh hoa hài','douong5.webp','60.000', '25', '80.000'),
        array('cafe dừa sala','douong6.webp','50.000', '17', '60.000'),
        array('trà yogurt đào','douong7.webp','90.000', '', ''),
        array('trà hoa hồng kem','douong8.webp','60.000', '', ''),
    );

    $cake = array();
    foreach($dataCake as $key => $value){
        array_push($cake,new Food($value[0],$value[1],$value[2],$value[3],$value[4]));
    }
?>

<style type="text/css">
	/*SLIDER*/
	.slider__list .card_img {
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 45vw;
    }

	/*INTRODUCE*/
	.introduce__content {
	   padding-top: 48px;
	}

	.introduce__title {
	    color: var(--clr-border-about);
	}

	.introduce__title > span {
	    background-color: currentColor;
	}

	.introduce__title .line-top {
	 	top: 0;
 	 	left: 0;
	    height: 4px;
	    width: 172px;
	}

	.introduce__title .line-right {
		left: 172px;
	    width: 5px;
	}

	.introduce__title .line-bottom {
		bottom: 0;
		left: 0;
	    height: 5px;
	    width: 172px;
	}

	.introduce__title .line-left {
		left: 0;
	    width: 5px;
	    height: 100%;
	}

	.introduce__title .line-mask {
	    width: 6px;
	    height: calc(100% - 26px);
	    top: 13px;
	    left: 172px;
	    z-index: 50;
	    background-color: var(--clr-white);
	}

	.introduce__title-inner {
		padding: 11px 0 11px 80px;
		margin: 4px 10px;
	    z-index: 150;
	}

	.introduce__title-inner strong {
    	font-size: 26px;
	}

	.introduce__title-inner span {
    	font-size: 22px;
	}

	.introduce__wrap {
	    margin-left: 90px;
	}

	.introduce__wrap .btnReadmore {
	    padding: 15px 40px;
	}

	/*ROOM*/
	.room {
		background-color: var(--clr-bg-room);
	}

	/*VIP*/
	.vip .card-title a {
		font-size: 20px;
	}

	.vip .card .image-thumb img {
	    transition: all 0.5s ease-in-out ;
     	transform: scale(1);
	}

	.vip .card .image-thumb:hover img {
		transform: scale(1.1);
	}

	.vip__desc {
		left: 0;
		bottom: 0;
		z-index: 10;
	}

	.vip__desc::before {
		content: "";
	    position: absolute;
	    width: 100%;
	    height: 100%;
	    bottom: 0;
	    left: 0;
	    background: linear-gradient(0deg, rgba(0,0,0,0.8) 0, transparent);
	    z-index: 1;
	}

	.vip__desc span {
		z-index: 2;
		font-size: 12px;
		line-height: 1.7;
	}

	.vip__desc span:nth-child(1):hover {
		color: var(--clr-primary) !important;
	}

	.vip__desc .price {
		padding: 3px 5px;
	    color: var(--clr-white);
	    background-color: var(--clr-red);
	}

	.vipRoom.owl-carousel .owl-item img {
        width: auto;
   	}

	/*MENU*/
	.menu .nav-tabs .nav-link {
		font-size: 18px;
		color: inherit;
		line-height: 1;
		z-index: 1;
	    -webkit-background-clip: text;
    	-webkit-text-fill-color: transparent;
		background-image: linear-gradient(to right, #cd9a2b, #cd9a2b 50%, #323c42 50%);
	    background-size: 200% 100%;
	    background-position: -100%;
	    transition: all 0.3s ease-in-out;
	}

	.menu .nav-tabs .nav-link::before {
		display: block;
		content: "";
		position: absolute;
		height: 3px;
		width: 0;
		left: 0;
		bottom: 0;
		z-index: 0;
		background-color: var(--clr-primary);
		transition: all 0.3s ease-in-out;
	}

	.menu .nav-tabs .nav-link.active, .food .nav-tabs .nav-link:hover {
		background-position: 0%;
	}

	.menu .nav-tabs .nav-link.active::before, .food .nav-tabs .nav-link:hover::before {
		width: 100%;
	}

	.menu__btn a {
	 	font-size: 13px;
		padding-left: 20px;
		padding-right: 20px;
	}

	.menu__item .price {
        font-size: 18px;
    }

    .menu__item .salePrice {
        font-size: 14px;
        font-weight: 300;
        color: var(--clr-price);
        margin-left: 5px;
    }

    .menu__item .discount-label {
        top: 10px;
        right: 10px;
        letter-spacing: -1px;
        padding: 5px 10px;
        z-index: 3;
    }

    .menu__item .discount-label .percent {
        font-size: 13px;
        height: 35px;
        width: 35px;
        line-height: 35px;
        background-color: var(--clr-red);
        border-radius: 4px;
    }

    .menu__item .discount-label .percent::before, .menu__item .discount-label .percent::after {
        content: "";
        position: absolute;
        background: inherit;
        height: inherit;
        width: inherit;
        top: 0;
        left: 0;
        z-index: -1;
        transform: rotate(30deg);
        border-radius: 4px;
    }

    .menu__item .discount-label .percent::after {
        transform: rotate(60deg);
    }

    .menu__action {
        right: 15px;
        top: 15px;
        width: 50px;
        z-index: 5;
    }

    .menu__action button, .menu__action a {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: var(--clr-primary);
        margin-bottom: 10px;
        transform: scale(0);
        transition: all 0.3s ease-in-out;
    }

    .menu__action button:hover, .menu__action a:hover {
        background-color: var(--clr-red);
    }

    .menu__item .card-heading:hover button, .menu__item .card-heading:hover a {
        transform: scale(1);
    }

    .menu__item .card-heading:hover .discount-label {
        opacity: 0;
    }

	/*SERVICES*/
	.services {
		padding-top: 20px;
		padding-bottom: 20px;
    	background-color: var(--clr-bg-gray2);
	}

	.services .nav-tabs {
		background-color: var(--clr-bg-grayLight);
	}

	.services .nav-link {
		padding-left: 15px;
		padding-right: 15px;
	}

	.services .nav-link span{
		font-size: 13px;
		color: var(--clr-text);
	 	line-height: 1;
	    padding-top: 5px;
	    padding-bottom: 5px;
	    z-index: 1;
	}

	.services .nav-link span::before {
		position: absolute;
		display: block;
	    content: '';
	    width: 100%;
	    height: 1px;
	    left: 0;
	    bottom: 0px;
	    z-index: 0;
	    background-color: var(--clr-text);
	    transition: all 0.3s ease-in-out;
	}

	.services .nav-link.active {
		background-color: var(--clr-primary);
	}

	.services .nav-link.active img{
		filter: brightness(0) invert(1);
	}

	.services .nav-link.active span {
		color: var(--clr-white);
	}

	.services .nav-link.active span::before {
		background-color: var(--clr-white);
	}

	.services .tab-content {
		background-color: var(--clr-primary);
	}

	.services__title p {
		font-family: initial;
	    font-size: 30px;
	    color: var(--clr-services-title);
     	line-height: 32px;
	    padding-left: 20px;
	    padding-right: 20px;
	}

	.services__desc {
	 	font-family: initial;
	    color: var(--clr-text1);
	    padding-top: 14px;
	    padding-bottom: 14px;
	    background-color: rgba(255,255,255,0.6);
	}

	.services__desc p {
		line-height: 1.7;
		margin-bottom: 10px;
	}

	.services__desc .heading {
		font-size: 30px;
		line-height: 30px;
	}

	.services__desc .desc {
		font-size: 14px;
	}

	.services__desc .more {
		font-size: 12px; 
	}

	/*NEWS*/
	.news {
		margin-bottom: 80px;
	}

    .news__title a {
    	font-size: 22px;
	    height: 56px;
	    line-height: 28px;
	    margin: 10px 0px;
	    word-break: break-word;
	    display: -webkit-box;
	    -webkit-line-clamp: 2;
	    -webkit-box-orient: vertical;
	    text-overflow: ellipsis;
	    overflow: hidden;
	    transition: all 0.3s ease;
    }

    .news__title a:hover {
    	color: var(--clr-primary) !important;
    }

    .news__text {
    	font-size: 15px;
    	color: var(--clr-text-news);
    	height: 66px;
    	line-height: 22px;
	    word-break: break-word;
	    display: -webkit-box;
	    -webkit-line-clamp: 3;
	    -webkit-box-orient: vertical;
	    text-overflow: ellipsis;
	    overflow: hidden;
    }

    .news__postDate {
    	margin-bottom: 30px;
    	font-size: 14px;
    }

    .news__btn a {
    	line-height: inherit;	
    	padding: 8px 8px;
	    right: -20px;
	    bottom: -25px;
    }

    .news__title a {
		font-size: 20px;
	}

	.news__postDate {
    	font-size: 12px;
    	margin-bottom: 15px;
    }

	.news__desc {
	    text-align: center;
	    width: 100%;
	    box-shadow: none;
	    padding: 10px;
	    border-radius: 0px;
	    margin: -2px auto;
	}

	/*ROOM LIST*/
	.room__list .card {
        box-shadow: 0 1px 2px 0 rgba(0,0,0,0.1);
    }

    .room__list .card-body {
        padding: 5px;
    }

   .room__list .roomInfor::before {
        position: absolute;
        content: "";
        width: 36%;
        height: 3px;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        border-bottom: 3px double var(--clr-navlink);
    }

    .owl-carousel .owl-item img[width] {
        width: 26px !important;
    }

	/*TABLET*/
	@media (min-width: 768px) {
		/*SERVICES*/
		.services .nav-link span {
			font-size: 18px;
		}

		.services__desc {
			margin-top: 45px;
		}

		.room__list .price {
            font-size: 18px;
        }

		/*MENU*/
        .news__desc {
	    	width: 90%;
	    	padding: 5px 15px 5px;
		    margin: -45px auto;
	      	border-radius: 3px;
	    	background-color: var(--clr-bg-news);
		    box-shadow: 0px 4px 10px rgba(0,0,0,0.19);
	    }

	    .menu__item .salePrice {
            margin-left: 10px;
        }
	}
	
	/*PC*/
	@media (min-width: 1400px) {
		/*SLIDER*/
		.slider__list .card_img {
            height: 520px;
        }

		/*SERVICES*/
		.services__desc {
			padding: 70px 30px;
		 	margin-left: 20px;
		 	margin-right: 20px;
		}

		.services__desc .desc {
			font-size: 16px;
		}

		.services__desc .more {
			font-size: 14px; 
		}
	}
</style>


<!------------------------------------- START SLIDER -------------------------------------->
<div class="slider row">
    <div class="px-0">
        <div class="slider__list owl-carousel owl-theme">
            <div class="bg card_img laydata2" style="background-image:url(public/demo/slider_1.webp)" data-hinh2="url(public/demo/slider_1.webp)"></div>
        </div>   
    </div>
</div>
<!-------------------------------------- END SLIDER --------------------------------------->


<!----------------------------------- START INTRODUCE ------------------------------------->
<div class="introduce row justify-content-center py-4">
	<div class="max-width d-flex flex-wrap justify-content-center px-45">
		<div class="col-12 col-lg-6 px-10 text-center image-thumb">
			<img src="public/demo/about.webp" class="img-fluid h-100 " alt="BeanHotel About">
		</div>
		<div class="col-12 col-lg-6 px-10 introduce__content">
			<div class="introduce__title d-inline-block position-relative">
				<span class="line-top position-absolute"></span>
				<span class="line-right position-absolute h-100"></span>
				<span class="line-bottom position-absolute"></span>
				<span class="line-left position-absolute"></span>
				<span class="line-mask position-absolute"></span>
				<div class="introduce__title-inner d-inline-block position-relative text-black">
					<strong>Bean Hotel</strong><br>
					<span class="fw-600">Giới thiệu về chúng tôi</span>
				</div>
			</div>
			<div class="introduce__wrap py-10">
				<p>
					Là khách sạn 5 sao đẳng cấp quốc tế, tọa lạc tại giao điểm của bốn quận chính, nơi được xem như trái tim và trung tâm của TP. Hồ Chí Minh. Với hệ thống phòng tiêu chuẩn và phòng hạng sang thiết kế đẹp mắt và trang nhã được chú trọng tới từng chi tiết sẽ đem lại sự tiện nghi và thoải mái tối đa cho quý khách dù là thời gian nghỉ ngơi thư giãn hay trong chuyến công tác...
				</p>
				<a href="#" title="Xem thêm" class="btnCustom btnReadmore d-inline-block text-decoration-none text-white mt-2">Xem thêm</a>
			</div>
		</div>
	</div>
</div>
<!------------------------------------ END INTRODUCE -------------------------------------->


<!------------------------------------- START ROOM ---------------------------------------->
<div class="room row justify-content-center">
	<div class="max-width d-flex flex-wrap justify-content-center px-45">
		<div class="col-12">
			<h2 class="title text-center"><a href="#" class="text-decoration-none">Phòng</a></h2>
			
			<!-- Single Room -->
			<div class="room__list d-md-flex flex-wrap justify-content-center align-items-center d-none">
			    <?php
			        foreach ($singleRoom as $key => $value) {                
			    ?>
			    <div class="col-12 col-md-6 col-lg-3 px-2 h-100 align-self-stretch mb-3">
			        <div class="card border-0 rounded-0">
			            <a href="#" target="_blank" class="image-thumb">
			                <img class="img-fluid w-100" src="public/demo/<?php echo $value->image ?>" alt="BeanHotel Single Room">
			            </a>
			            <div class="card-body">
			                <h4 class="card-title text-center">
			                    <a class="text-decoration-none text-uppercase fw-600" href="#" target="_blank"> <?php echo $value->name ?></a>
			                </h4>
			                <div class="d-flex justify-content-center align-items-center gap-3 mb-2">
			                    <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services1 ?>" alt="BeanHotel Services">
			                    <?php 
			                        if($value->services2) {
			                    ?>
			                        <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services2 ?>" alt="BeanHotel Services">
			                    <?php } ?>
			                    <?php 
			                        if($value->services3) {
			                    ?>
			                        <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services3 ?>" alt="BeanHotel Services">
			                    <?php } ?>
			                    <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services4 ?>" alt="BeanHotel Services">
			                    <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services5 ?>" alt="BeanHotel Services">
			                </div>
			                <div class="roomInfor d-flex justify-content-center align-items-center gap-3 position-relative py-10">
			                    <span class="d-inline-block"><?php echo $value->people ?> Khách</span>
			                    <span class="d-inline-block"><?php echo $value->acreage ?>m²</span>
			                </div>
			                <div class="price d-flex justify-content-between align-items-center">
			                    <span class="d-inline-block fw-600"><?php echo $value->price ?>₫/Đêm</span>
			                    <a href="#" class="d-inline-block text-decoration-none">Đặt phòng</a>
			                </div>
			            </div>
			        </div>
			    </div>
			    <?php } ?>
			</div>

			<!-- Single Room Slider -->
			<div class="room__list singleRoom d-md-none owl-carousel owl-theme">
			    <?php
			        foreach ($singleRoom as $key => $value) {                
			    ?>
			    <div class="h-100 align-self-stretch mb-3 px-2">
			        <div class="card border-0">
			            <a href="#" target="_blank" class="image-thumb">
			                <img class="img-fluid w-100" src="public/demo/<?php echo $value->image ?>" alt="BeanHotel Single Room">
			            </a>
			            <div class="card-body ">
			                <h4 class="card-title text-center">
			                    <a class="text-decoration-none text-uppercase fw-600" href="#" target="_blank"> <?php echo $value->name ?></a>
			                </h4>
			                <div class="d-flex justify-content-center align-items-center gap-3 mb-2">
			                    <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services1 ?>" alt="BeanHotel Services">
			                    <?php 
			                        if($value->services2) {
			                    ?>
			                        <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services2 ?>" alt="BeanHotel Services">
			                    <?php } ?>
			                    <?php 
			                        if($value->services3) {
			                    ?>
			                        <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services3 ?>" alt="BeanHotel Services">
			                    <?php } ?>
			                    <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services4 ?>" alt="BeanHotel Services">
			                    <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services5 ?>" alt="BeanHotel Services">
			                </div>
			                <div class="roomInfor d-flex justify-content-center align-items-center gap-3 position-relative py-10">
			                    <span class="d-inline-block"><?php echo $value->people ?> Khách</span>
			                    <span class="d-inline-block"><?php echo $value->acreage ?>m²</span>
			                </div>
			                <div class="price d-flex justify-content-between align-items-center">
			                    <span class="d-inline-block fw-600"><?php echo $value->price ?>₫/Đêm</span>
			                    <a href="#" class="d-inline-block text-decoration-none">Đặt phòng</a>
			                </div>
			            </div>
			        </div>
			    </div>
			    <?php } ?>
			</div>
		</div>

		<div class="col-12">
			<h2 class="title text-center"><a href="#" class="text-decoration-none">Phòng đôi</a></h2>

			<!-- DOUBLE ROOM -->
			<div class="room__list d-md-flex flex-wrap justify-content-center align-items-center d-none">
			    <?php
			        foreach ($doubleRoom as $key => $value) {                
			    ?>
			    <div class="col-md-6 col-lg-3 px-2 h-100 align-self-stretch mb-3">
			        <div class="card border-0 rounded-0">
			            <a href="#" target="_blank" class="image-thumb">
			                <img class="img-fluid w-100" src="public/demo/<?php echo $value->image ?>" alt="BeanHotel Single Room">
			            </a>
			            <div class="card-body">
			                <h4 class="card-title text-center">
			                    <a class="text-decoration-none text-uppercase fw-600" href="#" target="_blank"> <?php echo $value->name ?></a>
			                </h4>
			                <div class="d-flex justify-content-center align-items-center gap-3 mb-2">
			                    <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services1 ?>" alt="BeanHotel Services">
			                    <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services2 ?>" alt="BeanHotel Services">
			                    <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services3 ?>" alt="BeanHotel Services">
			                    <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services4 ?>" alt="BeanHotel Services">
			                    <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services5 ?>" alt="BeanHotel Services">
			                </div>
			                <div class="roomInfor d-flex justify-content-center align-items-center gap-3 position-relative py-10">
			                    <span class="d-inline-block"><?php echo $value->people ?> Khách</span>
			                    <span class="d-inline-block"><?php echo $value->acreage ?>m²</span>
			                </div>
			                <div class="price d-flex justify-content-between align-items-center">
			                    <span class="d-inline-block fw-600"><?php echo $value->price ?>₫/Đêm</span>
			                    <a href="#" class="d-inline-block text-decoration-none">Đặt phòng</a>
			                </div>
			            </div>
			        </div>
			    </div>
			    <?php } ?>
			</div>   

			<!-- DOUBLE ROOM SLIDER -->
			<div class="room__list doubleRoom d-md-none owl-carousel owl-theme">
			    <?php
			        foreach ($doubleRoom as $key => $value) {     
			    ?>
			    <div class="col-sm-12 h-100 align-self-stretch mb-3 px-2">
			        <div class="card border-0">
			            <a href="#" target="_blank" class="image-thumb">
			                <img class="img-fluid w-100" src="public/demo/<?php echo $value->image ?>" alt="BeanHotel Single Room">
			            </a>
			            <div class="card-body ">
			                <h4 class="card-title text-center">
			                    <a class="text-decoration-none text-uppercase fw-600" href="#" target="_blank"> <?php echo $value->name ?></a>
			                </h4>
			                <div class="d-flex justify-content-center align-items-center gap-3 mb-2">
			                    <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services1 ?>" alt="BeanHotel Services">
			                    <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services2 ?>" alt="BeanHotel Services">
			                    <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services3 ?>" alt="BeanHotel Services">
			                    <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services4 ?>" alt="BeanHotel Services">
			                    <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services5 ?>" alt="BeanHotel Services">
			                </div>
			                <div class="roomInfor d-flex justify-content-center align-items-center gap-3 position-relative py-10">
			                    <span class="d-inline-block"><?php echo $value->people ?> Khách</span>
			                    <span class="d-inline-block"><?php echo $value->acreage ?>m²</span>
			                </div>
			                <div class="price d-flex justify-content-between align-items-center">
			                    <span class="d-inline-block fw-600"><?php echo $value->price ?>₫/Đêm</span>
			                    <a href="#" class="d-inline-block text-decoration-none">Đặt phòng</a>
			                </div>
			            </div>
			        </div>
			    </div>
			    <?php } ?>
			</div>
		</div>
	</div>
</div>
<!-------------------------------------- END ROOM ----------------------------------------->


<!------------------------------------- START VIP ----------------------------------------->
<div class="vip row justify-content-center">
	<div class="max-width d-flex flex-wrap justify-content-center px-45">
		<div class="col-12">
			<h2 class="title text-center"><a href="#" class="text-decoration-none">Phòng vip</a></h2>
		</div>
		<div class="col-12 d-flex flex-wrap justify-content-center">
			<div class="vip__left col-12 col-lg-5 px-2 mb-3">
				 <div class="card rounded-0">
		            <a href="#" target="_blank" class="image-thumb h-auto">
		                <img class="img-fluid w-100" src="public/demo/phongvip1.webp" alt="BeanHotel VIP Room">
		            </a>
		            <div class="card-body px-10 py-10">
		                <h4 class="card-title">
		                    <a class="text-decoration-none text-uppercase fw-600 mt-0" href="#" target="_blank">Phòng đơn vip</a>
		                </h4>
		                <div class="d-flex justify-content-between align-items-center mb-2">
			                <div class="roomInfor d-flex justify-content-center align-items-center gap-1 gap-md-3 position-relative">
			                    <span class="d-inline-block d-flex align-items-center gap-1">
			                    	<img class="img-fluid" src="public/demo/tag-user.svg" width="26" height="26">
			                    	02 Khách
			                	</span>
			                    <span class="d-inline-block d-flex align-items-center gap-1">
			                    	<img class="img-fluid" src="public/demo/tag-meters.svg" width="26" height="26">
			                    	35m²
			                    </span>
			                </div>
			                 <div class="d-flex justify-content-center align-items-center gap-1 gap-md-3">
			                    <img class="img-fluid" width="26" height="26" src="public/demo/tag_icon_1.svg" alt="BeanHotel Services">
			                    <img class="img-fluid" width="26" height="26" src="public/demo/tag_icon_2.svg" alt="BeanHotel Services">
			                    <img class="img-fluid" width="26" height="26" src="public/demo/tag_icon_3.svg" alt="BeanHotel Services">
			                    <img class="img-fluid" width="26" height="26" src="public/demo/tag_icon_4.svg" alt="BeanHotel Services">
			                    <img class="img-fluid" width="26" height="26" src="public/demo/tag_icon_5.svg" alt="BeanHotel Services">
			                </div>
		                </div>
		                <p class="mb-0">
							Với tiêu chí ngày càng nâng cao và đáp ứng mọi nhu cầu của khách hàng chúng tôi cung cấp thêm loại phòng đơ...
		                </p>
		                <div class="price py-10">
		                    <a href="#" class="d-inline-block text-decoration-none fw-600">ÐẶT PHÒNG TỪ 2.500.000₫/Đêm</a>
		                </div>
		            </div>
		        </div>
			</div>

			<!-- Vip Room -->
			<div class="vip__right col-12 col-lg-7 d-none d-md-flex flex-wrap">
			    <?php
			        foreach ($vipRoom as $key => $value) {                
			    ?>
			    <div class="col-6 px-2 mb-3">
			        <div class="position-relative h-100">
			            <a href="#" class="image-thumb h-100">
			                <img class="img-fluid w-100 h-100" src="public/demo/<?php echo $value->image ?>" alt="BeanHotel VIP Room">
			            </a>
			            <div class="vip__desc position-absolute d-flex align-items-center gap-3 w-100 px-10 py-10">
			                <span class="text-uppercase text-white position-relative cursor"><?php echo $value->name ?></span>
			                <span class="price position-relative"><?php echo $value->price ?>₫/Đêm</span>
			            </div>
			        </div>
			    </div>
			    <?php } ?>
			</div>
			
			<!-- Vip Room Slider -->
			<div class="vip__right vipRoom col-12 col-lg-7 d-md-none owl-carousel owl-theme">
			    <?php
			        foreach ($vipRoom as $key => $value) {                
			    ?>
			    <div class="px-2">
			        <div class="position-relative h-100">
			            <a href="#" class="image-thumb h-100 d-flex justify-content-center">
			                <img class="img-fluid py-sm-5 mb-sm-4" src="public/demo/<?php echo $value->image ?>" alt="BeanHotel VIP Room">
			            </a>
			            <div class="vip__desc position-absolute d-flex align-items-center gap-3 w-100 px-10 py-10">
			                <span class="text-uppercase text-white position-relative cursor"><?php echo $value->name ?></span>
			                <span class="price position-relative"><?php echo $value->price ?>₫/Đêm</span>
			            </div>
			        </div>
			    </div>
			    <?php } ?>
			</div>
		</div>
	</div>
</div>
<!-------------------------------------- END VIP ------------------------------------------>


<!------------------------------------- START MENU ---------------------------------------->
<div class="menu row justify-content-center mb-3">
	<div class="max-width d-flex flex-wrap justify-content-center px-45">
		<div class="col-12">
			<h2 class="title text-center"><a href="#" class="text-decoration-none">Ẩm thực</a></h2>
		</div>
		<div class="col-12">
			<div class="nav nav-tabs justify-content-center border-0 gap-sm-4 mb-3" id="nav-tab" role="tablist">
				<button class="nav-link active border-0 text-uppercase fw-600 position-relative px-0 mx-2 mx-sm-3" id="foods" data-bs-toggle="tab" data-bs-target="#nav-foods" type="button" role="tab" aria-controls="nav-foods" aria-selected="true">Món ăn</button>
				<button class="nav-link border-0 text-uppercase fw-600 position-relative px-0 mx-2 mx-sm-3" id="drinks" data-bs-toggle="tab" data-bs-target="#nav-drinks" type="button" role="tab" aria-controls="nav-drinks" aria-selected="false">Đồ uống</button>
				<button class="nav-link border-0 text-uppercase fw-600 position-relative px-0 mx-2 mx-sm-3" id="cake" data-bs-toggle="tab" data-bs-target="#nav-cake" type="button" role="tab" aria-controls="nav-cake" aria-selected="false">Bánh ngọt</button>
			</div>
			<div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-foods" role="tabpanel" aria-labelledby="foods" tabindex="0">
					<!-- Dish List -->
					<div class="d-flex flex-wrap">
					    <?php
					        foreach ($dish as $key => $value) {                
					    ?>
					    <div class="menu__item col-6 col-lg-3 px-2 mb-3">
					        <div class="card rounded-0">
					            <div class="card-heading position-relative">
					                <a href="#" target="_blank" class="image-thumb">
					                    <img class="img-fluid w-100" src="public/demo/<?php echo $value->image ?>" alt="BeanHotel Food">
					                </a>
					                <?php 
					                    if($value->discount) {
					                ?>
					                    <div class="discount-label position-absolute">
					                        <span class="percent fw-600 position-relative d-inline-block text-center text-white align-middle">- <?php echo $value->discount ?>% </span>
					                    </div>
					                <?php } ?>
					                <div class="menu__action position-absolute">
					                    <button class="d-inline-flex align-items-center justify-content-center border-0" title="Mua ngay">
					                        <img width="24" height="24" src="public/demo/cart-add.svg" alt="Mua ngay">
					                    </button>
					                    <a href="#" class="d-inline-flex align-items-center justify-content-center" title="Xem nhanh">
					                        <img width="24" height="24" src="public/demo/view.svg" alt="Xem nhanh">
					                    </a>
					                </div>
					            </div>
					            <div class="card-body px-10 py-10">
					                <h4 class="card-title">
					                    <a class="text-decoration-none text-uppercase fw-600 my-0" href="#" target="_blank"><?php echo $value->name ?></a>
					                </h4>
					                <div class="price">
					                    <span class="fw-600"><?php echo $value->price ?>đ</span>
					                    <?php 
					                        if($value->salePrice) {
					                    ?>
					                        <span class="salePrice text-decoration-line-through"><?php echo $value->salePrice ?>đ</span>
					                    <?php } ?>
					                </div>
					            </div>
					        </div>
					    </div>
					    <?php } ?>
					</div>
				</div>
				<div class="tab-pane fade" id="nav-drinks" role="tabpanel" aria-labelledby="drinks" tabindex="0">
					<!-- Drink List -->
					<div class="d-flex flex-wrap">
					    <?php
					        foreach ($drink as $key => $value) {                
					    ?>
					    <div class="menu__item col-6 col-lg-3 px-2 mb-3">
					        <div class="card rounded-0">
					            <div class="card-heading position-relative">
					                <a href="#" target="_blank" class="image-thumb">
					                    <img class="img-fluid w-100" src="public/demo/<?php echo $value->image ?>" alt="BeanHotel Food">
					                </a>
					                <?php 
					                    if($value->discount) {
					                ?>
					                    <div class="discount-label position-absolute">
					                        <span class="percent fw-600 position-relative d-inline-block text-center text-white align-middle">- <?php echo $value->discount ?>% </span>
					                    </div>
					                <?php } ?>
					                <div class="menu__action position-absolute">
					                    <button class="d-inline-flex align-items-center justify-content-center border-0" title="Mua ngay">
					                        <img width="24" height="24" src="public/demo/cart-add.svg" alt="Mua ngay">
					                    </button>
					                    <a href="#" class="d-inline-flex align-items-center justify-content-center" title="Xem nhanh">
					                        <img width="24" height="24" src="public/demo/view.svg" alt="Xem nhanh">
					                    </a>
					                </div>
					            </div>
					            <div class="card-body px-10 py-10">
					                <h4 class="card-title">
					                    <a class="text-decoration-none text-uppercase fw-600 my-0" href="#" target="_blank"><?php echo $value->name ?></a>
					                </h4>
					                <div class="price">
					                    <span class="fw-600"><?php echo $value->price ?>đ</span>
					                    <?php 
					                        if($value->salePrice) {
					                    ?>
					                        <span class="salePrice text-decoration-line-through"><?php echo $value->salePrice ?>đ</span>
					                    <?php } ?>
					                </div>
					            </div>
					        </div>
					    </div>
					    <?php } ?>
					</div>
				</div>
				<div class="tab-pane fade" id="nav-cake" role="tabpanel" aria-labelledby="cake" tabindex="0">
					<!-- Cake List -->
					<div class="d-flex flex-wrap">
					    <?php
					        foreach ($cake as $key => $value) {                
					    ?>
					    <div class="menu__item col-6 col-lg-3 px-2 mb-3">
					        <div class="card rounded-0">
					            <div class="card-heading position-relative">
					                <a href="#" target="_blank" class="image-thumb">
					                    <img class="img-fluid w-100" src="public/demo/<?php echo $value->image ?>" alt="BeanHotel Food">
					                </a>
					                <?php 
					                    if($value->discount) {
					                ?>
					                    <div class="discount-label position-absolute">
					                        <span class="percent fw-600 position-relative d-inline-block text-center text-white align-middle">- <?php echo $value->discount ?>% </span>
					                    </div>
					                <?php } ?>
					                <div class="menu__action position-absolute">
					                    <button class="d-inline-flex align-items-center justify-content-center border-0" title="Mua ngay">
					                        <img width="24" height="24" src="public/demo/cart-add.svg" alt="Mua ngay">
					                    </button>
					                    <a href="#" class="d-inline-flex align-items-center justify-content-center" title="Xem nhanh">
					                        <img width="24" height="24" src="public/demo/view.svg" alt="Xem nhanh">
					                    </a>
					                </div>
					            </div>
					            <div class="card-body px-10 py-10">
					                <h4 class="card-title">
					                    <a class="text-decoration-none text-uppercase fw-600 my-0" href="#" target="_blank"><?php echo $value->name ?></a>
					                </h4>
					                <div class="price">
					                    <span class="fw-600"><?php echo $value->price ?>đ</span>
					                    <?php 
					                        if($value->salePrice) {
					                    ?>
					                        <span class="salePrice text-decoration-line-through"><?php echo $value->salePrice ?>đ</span>
					                    <?php } ?>
					                </div>
					            </div>
					        </div>
					    </div>
					    <?php } ?>
					</div>
				</div>
			</div>
			<div class="menu__btn  text-center my-2">
				<a href="#" class="btnCustom d-inline-block text-decoration-none text-white text-uppercase py-10">Xem thêm</a>
			</div>
		</div>
	</div>
</div>
<!--------------------------------------- END MENU ---------------------------------------->


<!------------------------------------ START SERVICES ------------------------------------->
<div class="services row justify-content-center py-4">
	<div class="max-width d-flex flex-wrap justify-content-center px-45">
		<div class="col-12 text-center">
			<div class="nav nav-tabs d-inline-block border-0 gap-1 mb-3" id="nav-tab" role="tablist">
				<button class="nav-link active border-0 text-uppercase fw-600 position-relative d-inline-block rounded-0 py-10" id="hotel" data-bs-toggle="tab" data-bs-target="#nav-hotel" type="button" role="tab" aria-controls="nav-hotel" aria-selected="true">
					<img src="public/demo/cutlery.webp" width="32" height="32" alt="BeanHotel Services">
					<span class="text-uppercase d-block position-relative fw-normal">khách sạn</span>
				</button>
				<button class="nav-link border-0 text-uppercase fw-600 position-relative d-inline-block rounded-0 py-10" id="meetingRoom" data-bs-toggle="tab" data-bs-target="#nav-meetingRoom" type="button" role="tab" aria-controls="nav-meetingRoom" aria-selected="false">
					<img src="public/demo/meeting.webp" width="32" height="32" alt="BeanHotel Services">
					<span class="text-uppercase d-block position-relative fw-normal">phòng họp</span>
				</button>
				<button class="nav-link border-0 text-uppercase fw-600 position-relative d-inline-block rounded-0 py-10" id="skinCare" data-bs-toggle="tab" data-bs-target="#nav-skinCare" type="button" role="tab" aria-controls="nav-skinCare" aria-selected="false">
					<img src="public/demo/skin-care.webp" width="32" height="32" alt="BeanHotel Services">
					<span class="text-uppercase d-block position-relative fw-normal">làm đẹp</span>
				</button>
			</div>
			<div class="tab-content py-10" id="nav-tabContent">
				<div class="tab-pane show active" id="nav-hotel" role="tabpanel" aria-labelledby="hotel" tabindex="0">
					<div class="d-flex flex-wrap">
						<div class="col-12 col-md-4 px-10">
							<div class="services__title py-10 my-3 my-md-0">
								<p class="mb-0 text-start text-uppercase fst-italic">Tiện nghi</p>
								<p class="mb-0 text-end text-uppercase fst-italic">Sang trọng</p>
							</div>
							<img class="img-fluid w-100" alt="Khách sạn"src="public/demo/khachsan1.webp" alt="BeanHotel Services">
						</div>
						<div class="col-12 col-md-4 px-10">
							<div class="services__desc text-start px-10 my-10">
								<p class="heading text-uppercase">Khách sạn</p>
								<p class="desc">Chúng tôi mang lại không gian thư giản và tiện nghi đáp ứng mọi nhu cầu cho bạn.</p>
								<p class="more">
									Là khách sạn 5 sao đẳng cấp quốc tế, tọa lạc tại giao điểm của bốn quận chính, nơi được xem như trái tim và trung tâm của TP. Hồ Chí Minh. Với hệ thống phòng tiêu chuẩn và phòng hạng sang thiết kế đẹp mắt và trang nhã được chú trọng tới từng chi tiết sẽ đem lại sự tiện nghi và thoải mái tối đa cho quý khách dù là thời gian nghỉ ngơi thư giãn hay trong chuyến công tác...
								</p>
							</div>
						</div>
						<div class="col-12 col-md-4 px-10">
							<img class="img-fluid w-100 h-100" alt="Khách sạn" src="public/demo/khachsan2.webp" alt="BeanHotel Services">
						</div>
					</div>
				</div>
				<div class="tab-pane" id="nav-meetingRoom" role="tabpanel" aria-labelledby="meetingRoom" tabindex="0">
					<div class="d-flex flex-wrap">
						<div class="col-12 col-md-4 px-10">
							<div class="services__title py-10 my-3 my-md-0">
								<p class="mb-0 text-start text-uppercase fst-italic">Rộng rãi</p>
								<p class="mb-0 text-end text-uppercase fst-italic">Thanh lịch</p>
							</div>
							<img class="img-fluid w-100" alt="Khách sạn"src="public/demo/phonghop1.webp" alt="BeanHotel Services">
						</div>
						<div class="col-12 col-md-4 px-10">
							<div class="services__desc text-start px-10 my-10">
								<p class="heading text-uppercase">Phòng họp</p>
								<p class="desc">Chúng tôi mang lại không gian thư giản và tiện nghi đáp ứng mọi nhu cầu cho bạn.</p>
								<p class="more">
									Là khách sạn 5 sao đẳng cấp quốc tế, tọa lạc tại giao điểm của bốn quận chính, nơi được xem như trái tim và trung tâm của TP. Hồ Chí Minh. Với hệ thống phòng tiêu chuẩn và phòng hạng sang thiết kế đẹp mắt và trang nhã được chú trọng tới từng chi tiết sẽ đem lại sự tiện nghi và thoải mái tối đa cho quý khách dù là thời gian nghỉ ngơi thư giãn hay trong chuyến công tác...
								</p>
							</div>
						</div>
						<div class="col-12 col-md-4 px-10">
							<img class="img-fluid w-100 h-100" alt="Khách sạn" src="public/demo/phonghop2.webp" alt="BeanHotel Services">
						</div>
					</div>
				</div>
				<div class="tab-pane" id="nav-skinCare" role="tabpanel" aria-labelledby="skinCare" tabindex="0">
					<div class="d-flex flex-wrap">
						<div class="col-12 col-md-4 px-10">
							<div class="services__title py-10 my-3 my-md-0">
								<p class="mb-0 text-start text-uppercase fst-italic">Khoẻ và đẹp</p>
								<p class="mb-0 text-end text-uppercase fst-italic">Thư giãn</p>
							</div>
							<img class="img-fluid w-100" alt="Khách sạn"src="public/demo/lamdep1.webp" alt="BeanHotel Services">
						</div>
						<div class="col-12 col-md-4 px-10">
							<div class="services__desc text-start px-10 my-10">
								<p class="heading text-uppercase">Làm đẹp</p>
								<p class="desc">Chúng tôi mang lại không gian thư giản và tiện nghi đáp ứng mọi nhu cầu cho bạn.</p>
								<p class="more">
									Là khách sạn 5 sao đẳng cấp quốc tế, tọa lạc tại giao điểm của bốn quận chính, nơi được xem như trái tim và trung tâm của TP. Hồ Chí Minh. Với hệ thống phòng tiêu chuẩn và phòng hạng sang thiết kế đẹp mắt và trang nhã được chú trọng tới từng chi tiết sẽ đem lại sự tiện nghi và thoải mái tối đa cho quý khách dù là thời gian nghỉ ngơi thư giãn hay trong chuyến công tác...
								</p>
							</div>
						</div>
						<div class="col-12 col-md-4 px-10">
							<img class="img-fluid w-100 h-100" alt="Khách sạn" src="public/demo/lamdep2.webp" alt="BeanHotel Services">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!------------------------------------- END SERVICES -------------------------------------->


<!-------------------------------------- START NEWS --------------------------------------->
<div class="news row justify-content-center py-4">
	<div class="max-width d-flex flex-wrap justify-content-center px-45">
		<div class="col-12">
			<h2 class="title text-center"><a href="#" class="text-decoration-none">Hiểu biết khách sạn</a></h2>
		</div>
		<div class="col-12">
			<!-- News List -->
			<div class="news__list d-sm-flex flex-wrap justify-content-center align-items-center d-none">
			    <?php
			        foreach ($News as $key => $value) {                
			    ?>
			    <div class="col-sm-4 px-2 h-100 align-self-stretch">
			        <div class="card border-0 rounded-0">
			            <a href="#" target="_blank">
			                <img class="img-fluid w-100" src="public/demo/<?php echo $value->image ?>" title="123" alt="BeanHotel News">
			            </a>
			            <div class="card-body p-0">
			            	<div class="news__desc position-relative">
				                <h4 class="news__title text-center">
				                    <a class="text-decoration-none  text-black fw-600" href="#" target="_blank"> <?php echo $value->title ?></a>
				                </h4>
			                    <p class="news__text text-center d-none d-lg-block"><?php echo $value->text ?></p>
				                <div class="news__postDate d-flex justify-content-between align-items-center flex-column flex-lg-row">
				                    <span><?php echo $value->author ?></span>
				                    <span><?php echo $value->postDate ?></span>
				                </div>
				                <div class="news__btn d-none d-lg-block">
				                	<a href="#" class="btnCustom d-inline-block text-decoration-none text-white position-absolute rounded-0">Đọc thêm</a>
				                </div>
			                </div>
			            </div>
			        </div>
			    </div>
			    <?php } ?>
			</div>
			
			<!-- News List Slider -->
			<div class="news__list news__slider d-sm-none owl-carousel owl-theme">
			    <?php
			        foreach ($News as $key => $value) {                
			    ?>
			    <div class="col-sm-4 px-2 h-100 align-self-stretch">
			        <div class="card border-0 rounded-0">
			            <a href="#" target="_blank">
			                <img class="img-fluid w-100" src="public/demo/<?php echo $value->image ?>" title="123" alt="BeanHotel News">
			            </a>
			            <div class="card-body p-0">
			            	<div class="news__desc position-relative">
				                <h4 class="news__title text-center">
				                    <a class="text-decoration-none  text-black fw-600" href="#" target="_blank"> <?php echo $value->title ?></a>
				                </h4>
			                    <p class="news__text text-center d-none d-lg-block"><?php echo $value->text ?></p>
				                <div class="news__postDate d-flex justify-content-between align-items-center flex-column flex-lg-row">
				                    <span><?php echo $value->author ?></span>
				                    <span><?php echo $value->postDate ?></span>
				                </div>
				                <div class="news__btn d-none d-lg-block">
				                	<a href="#" class="btnCustom d-inline-block text-decoration-none text-white position-absolute rounded-0">Đọc thêm</a>
				                </div>
			                </div>
			            </div>
			        </div>
			    </div>
			    <?php } ?>
			</div> 
		</div>
	</div>
</div>
<!--------------------------------------- END NEWS ---------------------------------------->

<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript">
	// Slider
	$(document).ready(function(){
        $('.slider__list').owlCarousel({
            center: false,
            margin:0,
            nav:false,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
            }
        });
    });

	// Single Room Slider
    $(document).ready(function(){
        $('.singleRoom').owlCarousel({
            center: false,
            margin:0,
            nav:false,
            dots:false,
            loop: true,
            responsive:{
                0:{
                    items:1.5,
                },
                576:{
                    items: 1,
                },
            }
        });
    });

    // Double Room Slider
    $(document).ready(function(){
        $('.doubleRoom').owlCarousel({
            center: false,
            margin:0,
            nav:false,
            dots:false,
            loop: true,
            responsive:{
                0:{
                    items: 1.5,
                },
                576:{
                    items: 1,
                }
            }
        });
    });

    // Vip Room Slider
    $(document).ready(function(){
        $('.vipRoom').owlCarousel({
            center: false,
            margin:0,
            nav:false,
            dots:false,
            loop: true,
            responsive:{
                0:{
                    items:1.5,
                },
                576:{
                    items: 1,
                },
            }
        });
    });

    // News List Slider
    $(document).ready(function(){
        $('.news__slider').owlCarousel({
            center: false,
            margin:0,
            nav:false,
            dots:false,
            loop: true,
            responsive:{
                0:{
                    items:1.5,
                },
            }
        });
    });
</script>
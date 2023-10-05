<?php 
    class RoomGroup
    {
        function __construct($name, $services1, $services2, $services3, $services4, $services5, $people, $acreage, $image, $price){
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

    $dataRoomGroup = array(
        array('phòng đơn tiêu chuẩn','tag_icon_1.svg','','','tag_icon_4.svg','tag_icon_5.svg','02','20','phong1.webp','500.000'),
        array('phòng đơn view thành phố','tag_icon_1.svg','tag_icon_2.svg','','tag_icon_4.svg','tag_icon_5.svg','02','25','phong2.webp','700.000'),
        array('phòng đơn view sân vườn','tag_icon_1.svg','tag_icon_2.svg','','tag_icon_4.svg','tag_icon_5.svg','02','25','phong3.webp','800.000'),
        array('phòng đơn view biển','tag_icon_1.svg','tag_icon_2.svg','','tag_icon_4.svg','tag_icon_5.svg','01','25','phong4.webp','900.000'),
        array('phòng đôi tiêu chuẩn','tag_icon_1.svg','tag_icon_2.svg','tag_icon_3.svg','tag_icon_4.svg','tag_icon_5.svg','02','25','phongdoi1.webp','950.000'),
        array('phòng đôi view thành phố','tag_icon_1.svg','tag_icon_2.svg','tag_icon_3.svg','tag_icon_4.svg','tag_icon_5.svg','02','30','phongdoi2.webp','1.100.000'),
        array('phòng đôi view sân vườn','tag_icon_1.svg','tag_icon_2.svg','tag_icon_3.svg','tag_icon_4.svg','tag_icon_5.svg','02','30','phongdoi3.webp','1.200.000'),
        array('phòng đôi 2 giường đôi','tag_icon_1.svg','tag_icon_2.svg','tag_icon_3.svg','tag_icon_4.svg','tag_icon_5.svg','04','32','phongdoi4.webp','1.500.000'),
        array('phòng đơn vip','tag_icon_1.svg','tag_icon_2.svg','tag_icon_3.svg','tag_icon_4.svg','tag_icon_5.svg','02','25','phongvip1.webp','2.500.000'),
        array('phòng gia đình','tag_icon_1.svg','tag_icon_2.svg','tag_icon_3.svg','tag_icon_4.svg','tag_icon_5.svg','02','25','phongvip2.webp','3.000.000'),
        array('căn hộ chung cư','tag_icon_1.svg','tag_icon_2.svg','tag_icon_3.svg','tag_icon_4.svg','tag_icon_5.svg','02','30','phongvip3.webp','2.700.000'),
        array('phòng hạng sang','tag_icon_1.svg','tag_icon_2.svg','tag_icon_3.svg','tag_icon_4.svg','tag_icon_5.svg','02','30','phongvip4.webp','3.500.000'),
        array('phòng đôi nối liền','tag_icon_1.svg','tag_icon_2.svg','tag_icon_3.svg','tag_icon_4.svg','tag_icon_5.svg','04','32','phongvip5.webp','4.000.000'),
    );

    
    $roomGroup = array();
    foreach($dataRoomGroup as $key => $value){
        array_push($roomGroup,new RoomGroup($value[0],$value[1],$value[2],$value[3],$value[4],$value[5],$value[6],$value[7],$value[8],$value[9]));
    }
?>

<style>
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

    @media (min-width: 768px) {
        .room__list .price {
            font-size: 18px;
        }
    }
</style>

<!---------------------------------- START BREADCRUMS ----------------------------------->
<div class="breadcrumb__wrapper row justify-content-center">
	<div class="max-width d-flex flex-wrap align-items-center">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
		  <ol class="breadcrumb mb-0">
		    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Trang chủ</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Phòng</li>
		  </ol>
		</nav>
	</div>
</div>
<!----------------------------------- END BREADCRUMS ------------------------------------>


<!------------------------------------ START FILTER ------------------------------------->
<div class="row justify-content-center">
	<div class="max-width d-flex flex-wrap justify-content-center align-items-center">
		<div class="col-12 filter-group d-flex justify-content-between align-items-center px-10 my-4">
			<h2 class="text-uppercase fw-bold mb-0">Phòng</h2>
			<div class="filter-actions position-relative">
				<img src="public/demo/sort.webp" alt="BeanHotel Sort">
				<span class="filter-title fw-500 me-2">Sắp xếp:</span>
				<div class="filter-value d-inline-block cursor">
					<span class="toggle">
						Mặc định
						<i class="fa-solid fa-angle-down mx-1"></i>
					</span>
					<div class="action-type position-absolute" id="action-type">
						<span class="d-block px-2 py-1 cursor">Mặc định</span>
						<span class="d-block px-2 py-1 cursor">A → Z</span>
						<span class="d-block px-2 py-1 cursor">Z → A</span>
						<span class="d-block px-2 py-1 cursor">Giá tăng dần</span>
						<span class="d-block px-2 py-1 cursor">Giá giảm dần</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!------------------------------------ END FILTER --------------------------------------->


<!------------------------------------- START ROOM -------------------------------------->
<div class="row justify-content-center">
	<div class="max-width d-flex flex-wrap justify-content-center align-items-center">
		<div class="room__list room__group col-12 d-flex flex-wrap align-items-center">
		    <?php
		        foreach ($roomGroup as $key => $value) {                
		    ?>
		    <div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 h-100 align-self-stretch mb-3">
		        <div class="card border-0 rounded-0">
		            <a href="?p=room-detail" target="_blank" class="image-thumb">
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
	</div>
</div>
<!-------------------------------------- END ROOM --------------------------------------->
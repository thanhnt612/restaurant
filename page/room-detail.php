<?php 
    class RoomSlider
    {
        function __construct($image){
            $this->image=$image;
        }
    }

    $dataRoomSlider = array(
        array('anh1.webp'),
        array('anh2.webp'),
        array('anh3.webp'),
    );
    
    $roomSlider = array();
    foreach($dataRoomSlider as $key => $value){
        array_push($roomSlider,new RoomSlider($value[0]));
    }

 	class AnotherRoom
    {
        
        function __construct($name,$services1, $services2, $services3, $services4, $people, $acreage, $image, $price){
            $this->name=$name;
            $this->services1=$services1;
            $this->services2=$services2;
            $this->services3=$services3;
            $this->services4=$services4;
            $this->people=$people;
            $this->acreage=$acreage;
            $this->image=$image;
            $this->price=$price;
        }
    }

    $dataAnotherRoom = array(
        array('phòng đơn view thành phố','tag_icon_1.svg','tag_icon_2.svg','tag_icon_4.svg','tag_icon_5.svg','02','25','phong2.webp','700.000'),
        array('phòng đơn view sân vườn','tag_icon_1.svg','tag_icon_2.svg','tag_icon_4.svg','tag_icon_5.svg','02','25','phong3.webp','800.000'),
        array('phòng đơn view biển','tag_icon_1.svg','tag_icon_2.svg','tag_icon_4.svg','tag_icon_5.svg','01','25','phong4.webp','900.000'),
    );

    
    $anotherRoom = array();
    foreach($dataAnotherRoom as $key => $value){
        array_push($anotherRoom,new AnotherRoom($value[0],$value[1],$value[2],$value[3],$value[4],$value[5],$value[6],$value[7],$value[8],));
    }

    class RoomTop
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

    $dataRoomTop = array(
        array('phòng đơn vip','tag_icon_1.svg','tag_icon_2.svg','tag_icon_3.svg','tag_icon_4.svg','tag_icon_5.svg','02','25','phongvip1.webp','2.500.000'),
        array('phòng gia đình','tag_icon_1.svg','tag_icon_2.svg','tag_icon_3.svg','tag_icon_4.svg','tag_icon_5.svg','02','25','phongvip2.webp','3.000.000'),
        array('căn hộ chung cư','tag_icon_1.svg','tag_icon_2.svg','tag_icon_3.svg','tag_icon_4.svg','tag_icon_5.svg','02','30','phongvip3.webp','2.700.000'),
        array('phòng hạng sang','tag_icon_1.svg','tag_icon_2.svg','tag_icon_3.svg','tag_icon_4.svg','tag_icon_5.svg','02','30','phongvip4.webp','3.500.000'),
    );

    $roomTop = array();
    foreach($dataRoomTop as $key => $value){
        array_push($roomTop,new RoomTop($value[0],$value[1],$value[2],$value[3],$value[4],$value[5],$value[6],$value[7],$value[8],$value[9]));
    }
?>

<style type="text/css">
	/*Room Slider*/
	.room__slider .owl-nav [class*=owl-] {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 50px;
        border-radius: 50%;
        text-align: center;
        color: var(--clr-primary) !important;
        background-color: rgba(0,0,0,0.4) !important;
        cursor: pointer;
    }

    .room__slider .owl-nav [class*=owl-]:hover {
        background-color: var(--clr-black) !important;
    }

    .room__slider>.owl-nav>.owl-next{
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 1vw;
    }

    .room__slider>.owl-nav>.owl-prev{
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 1vw;
    }

	/*Booking*/
	.booking__banner img{
		border-radius: 10px;
	}

	.booking__form form {
	    padding: 26px 5px;
	    background-color: var(--clr-bg-booking);
	    border-radius: 10px;
	}

	.booking__banner-desc {
	    width: 80%;
	    top: 50%;
	    left: 50%;
	    font-size: 16px;
	    padding: 30px;
	    background-color: rgba(0,0,0,0.6);
	    border-radius: 10px;
	    transform: translate(-50%, -50%);n
	    z-index: 3;
	}

	.booking__form input, .booking__form select {
		color: var(--clr-date-booking);
		height: 40px;
	    padding-left: 8px;
	    border-radius: 5px;
	}

	.form__inputDate input {
		flex-grow: 1;
	}

	.form__inputDate svg {
	    width: 30px;
    	border-right: 1px dotted var(--clr-svg-booking);
	}

	.booking__form button {
	    font-size: 16px;
	    border-radius: 5px;
	    line-height: 40px;
	}

	.booking__form .btn-calc {
		background-color: var(--clr-white);
	    border: 1px solid var(--clr-black);
	}

	.booking__form .btn-calc:hover {
		background-color: var(--clr-black);
		color: var(--clr-white);
	}

	.booking__form .btn-booking {
		background-color: var(--clr-primary);
		border: 1px solid var(--clr-primary);
		opacity: 0.6;
	}

	/*ROOMINFOS*/
	.roomDetail__title {
		font-size: 22px;
	}

	.roomDetail__infos {
		border-bottom: 1px solid #cd9a2b;
	}

	.roomDetail__infos > div span {
		font-size: 18px;
	}

	/*ROOMSERVICES*/
	.roomDetail__services .item_ser {
	    font-size: 18px;
	}

	.roomDetail__services img {
	    max-width: 26px;
	    margin-right: 10px;
	}

	/*ROOMDESC*/
	.hotline a {
		color: var(--clr-primary);
	}

	.hotline:hover a {
		color: var(--clr-hotline-hover);
	}

	.convenient-title {
		font-size: 18px;
	}

	.convenient-item h3 {
		font-size: 16px;
		line-height: 22px;
	}

	.convenient-item p {
		padding-left: 16px;
	    background-image: url(//bizweb.dktcdn.net/100/472/947/themes/888072/assets/tick.png?1674028875780);
	    background-size: 12px;
	    background-repeat: no-repeat;
	    background-position: left;
	    margin-top: 5px;
	    margin-bottom: 5px;
	}

	.convenient-item .free-badge {
		background-color: var(--clr-red);
	    padding: 2px 6px;
	    font-size: 12px;
	    line-height: 12px;
	}

	/*ANOTHER ROOM*/
	.another__list .card {
        box-shadow: 0 1px 2px 0 rgba(0,0,0,0.1);
    }

    .another__list .card-body {
        padding: 5px;
    }

   .another__list .roomInfor::before {
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

	/*TOP ROOM*/
	.topRoom > div {
        border-bottom: 2px solid var(--clr-border-gray1);
    }

    .topRoom__desc a:hover {
        color: var(--clr-primary) !important;
    }

	/*PC*/
    @media (min-width: 1400px) {
        .another__list .price {
            font-size: 16px;
        }
    }
</style>

<!---------------------------------- START BREADCRUMS ----------------------------------->
<div class="breadcrumb__wrapper row justify-content-center">
	<div class="max-width d-flex flex-wrap align-items-center px-0">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="px-10">
		  <ol class="breadcrumb mb-0">
		    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Trang chủ</a></li>
		    <li class="breadcrumb-item"><a href="?p=room-list" class="text-decoration-none">Phòng đơn</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Phòng đơn tiêu chuẩn</li>
		  </ol>
		</nav>
	</div>
</div>
<!----------------------------------- END BREADCRUMS ------------------------------------>


<!------------------------------------ START SLIDER ------------------------------------->
<div class="row justify-content-center pt-4 pb-2">
	<div class="max-width d-flex flex-wrap align-items-center px-0">
		<div class="col-12 px-10">
			<div class="room__slider owl-carousel owl-theme">
			    <?php
			        foreach ($roomSlider as $key => $value) {
			    ?>
			        <div class="card h-100 border-0 shadow franchise-carousel-item">
			            <img class="img-fluid" src="public/demo/<?php echo $value->image ?>" alt="BeanHotel Room">
			        </div>
			    <?php } ?>
			</div>   
		</div>
	</div>
</div>
<!------------------------------------ START SLIDER ------------------------------------->


<!----------------------------------- START ROOMINFOS ----------------------------------->
<div class="row justify-content-center">
	<div class="max-width d-flex flex-wrap px-0">
		<div class="col-12 col-lg-8 px-10">
			<h1 class="roomDetail__title mb-3">Phòng đơn tiêu chuẩn</h1>
			<div class="roomDetail__infos d-flex flex-wrap align-items-center mb-3">
				<div class="col-6 col-md-4 py-10 d-flex align-items-center gap-3 mb-2">
					<img src="public/demo/people.webp" width="26" height="26" class="img-fluid" alt="BeanHotel Room">
					<span>02 Người lớn</span>
				</div>
				<div class="col-6 col-md-4 py-10 d-flex align-items-center gap-3 mb-2">
					<img src="public/demo/people.webp" width="26" height="26" class="img-fluid" alt="BeanHotel Room">
					<span>01 Trẻ em</span>
				</div>
				<div class="col-6 col-md-4 py-10 d-flex align-items-center gap-3 mb-2">
					<img src="public/demo/metter.webp" width="26" height="26" class="img-fluid" alt="BeanHotel Room">
					<span> Phòng 20m²</span>
				</div>
			</div>
			<p>
				Các phòng trang nhã và dãy phòng trang nghiêm của chúng tôi gợi nhớ về một thời đại đã qua. Mỗi tính năng như đường cong, thảm sang trọng, trần nhà cao, phòng tắm lát đá cẩm thạch, thiết bị làm sạch và nhiều không gian đều được bố trí một cách chu đáo để gọi cho riêng bạn. Tông màu nâu phong phú và gỗ sồi tự nhiên tạo nên những khu bảo tồn yên tĩnh và yên tĩnh, được tôn lên một cách tuyệt vời bởi đồ nội thất trang nhã.
			</p>
			<div class="roomDetail__services mb-3 mb-lg-0">
				<div class="detailGroup__title text-white fw-600 d-inline-block">Dịch vụ phòng</div>
				<div class="detailGroup__border d-flex flex-wrap py-1 px-3">
					<div class="item_ser d-flex align-items-center col-9 col-sm-6 col-md-4 py-10">
						<img width="32" height="32" src="//bizweb.dktcdn.net/100/472/947/themes/888072/assets/tag_icon_1.svg?1676011628150" alt="Cafe Buổi Sáng"> Cafe Buổi Sáng
					</div>
					<div class="item_ser d-flex align-items-center col-9 col-sm-6 col-md-4 py-10">
						<img width="32" height="32" src="//bizweb.dktcdn.net/100/472/947/themes/888072/assets/tag_icon_4.svg?1676011628150" alt="Bồn Tắm Hoa Sen"> Bồn Tắm Hoa Sen
					</div>
					<div class="item_ser d-flex align-items-center col-9 col-md-4 py-10">
						<img width="32" height="32" src="//bizweb.dktcdn.net/100/472/947/themes/888072/assets/tag_icon_5.svg?1676011628150" alt="Internet Không Dây"> Internet Không Dây
					</div>
				</div>
			</div>
		</div>
		<div class="booking__form col-12 col-lg-4 px-10">
			<form class="h-100">
				<div class="d-flex flex-wrap align-items-center justify-content-between">
					<div class="col-12 col-sm-6 px-10">
						<label class="d-block w-100 mb-2" for="name">Họ và tên*</label>
						<input type="text" placeholder="Họ và tên" name="name" id="name" class="mb-2 w-100 border-0" required>
					</div>
					<div class="col-12 col-sm-6 px-10">
						<label class="d-block w-100 mb-2" for="phone">Số điện thoại*</label>
						<input type="number" id="phone" name="phone" placeholder="Số điện thoại" class="mb-2 w-100 border-0" required>
					</div>
					<div class="col-12 col-sm-6 px-10">
						<label class="d-block w-100 mb-2" for="checkinDate">Ngày nhận</label>
						<div class="form__inputDate d-flex flex-wrap align-items-center bg-white mb-2  position-relative">
							<svg class="px-1 cursor" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#cd9a2b" height="20" width="20" x="0px" y="0px" viewBox="0 0 36.447 36.447" style="enable-background:new 0 0 36.447 36.447;" xml:space="preserve"> <g> <g> <path d="M30.224,3.948h-1.098V2.75c0-1.517-1.197-2.75-2.67-2.75c-1.474,0-2.67,1.233-2.67,2.75v1.197h-2.74V2.75 c0-1.517-1.197-2.75-2.67-2.75c-1.473,0-2.67,1.233-2.67,2.75v1.197h-2.74V2.75c0-1.517-1.197-2.75-2.67-2.75 c-1.473,0-2.67,1.233-2.67,2.75v1.197H6.224c-2.343,0-4.25,1.907-4.25,4.25v24c0,2.343,1.907,4.25,4.25,4.25h24 c2.344,0,4.25-1.907,4.25-4.25v-24C34.474,5.855,32.567,3.948,30.224,3.948z M25.286,2.75c0-0.689,0.525-1.25,1.17-1.25 c0.646,0,1.17,0.561,1.17,1.25v4.896c0,0.689-0.524,1.25-1.17,1.25c-0.645,0-1.17-0.561-1.17-1.25V2.75z M17.206,2.75 c0-0.689,0.525-1.25,1.17-1.25s1.17,0.561,1.17,1.25v4.896c0,0.689-0.525,1.25-1.17,1.25s-1.17-0.561-1.17-1.25V2.75z M9.125,2.75 c0-0.689,0.525-1.25,1.17-1.25s1.17,0.561,1.17,1.25v4.896c0,0.689-0.525,1.25-1.17,1.25s-1.17-0.561-1.17-1.25V2.75z M31.974,32.198c0,0.965-0.785,1.75-1.75,1.75h-24c-0.965,0-1.75-0.785-1.75-1.75v-22h27.5V32.198z"></path> <rect x="6.724" y="14.626" width="4.595" height="4.089"></rect> <rect x="12.857" y="14.626" width="4.596" height="4.089"></rect> <rect x="18.995" y="14.626" width="4.595" height="4.089"></rect> <rect x="25.128" y="14.626" width="4.596" height="4.089"></rect> <rect x="6.724" y="20.084" width="4.595" height="4.086"></rect> <rect x="12.857" y="20.084" width="4.596" height="4.086"></rect> <rect x="18.995" y="20.084" width="4.595" height="4.086"></rect> <rect x="25.128" y="20.084" width="4.596" height="4.086"></rect> <rect x="6.724" y="25.54" width="4.595" height="4.086"></rect> <rect x="12.857" y="25.54" width="4.596" height="4.086"></rect> <rect x="18.995" y="25.54" width="4.595" height="4.086"></rect> <rect x="25.128" y="25.54" width="4.596" height="4.086"></rect> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
							<input type="date" id="checkinDate" placeholder="YYYY-MM-DD" name="checkinDate" class="mb-0 border-0 bg-transparent cursor" required>
						</div>
					</div>
					<div class="col-12 col-sm-6 px-10">
						<label class="d-block w-100 mb-2" for="checkoutDate">Ngày trả</label>
						<div class="form__inputDate d-flex flex-wrap align-items-center bg-white mb-2">
							<svg class="px-1 cursor" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#cd9a2b" height="20" width="20" x="0px" y="0px" viewBox="0 0 36.447 36.447" style="enable-background:new 0 0 36.447 36.447;" xml:space="preserve"> <g> <g> <path  d="M30.224,3.948h-1.098V2.75c0-1.517-1.197-2.75-2.67-2.75c-1.474,0-2.67,1.233-2.67,2.75v1.197h-2.74V2.75 c0-1.517-1.197-2.75-2.67-2.75c-1.473,0-2.67,1.233-2.67,2.75v1.197h-2.74V2.75c0-1.517-1.197-2.75-2.67-2.75 c-1.473,0-2.67,1.233-2.67,2.75v1.197H6.224c-2.343,0-4.25,1.907-4.25,4.25v24c0,2.343,1.907,4.25,4.25,4.25h24 c2.344,0,4.25-1.907,4.25-4.25v-24C34.474,5.855,32.567,3.948,30.224,3.948z M25.286,2.75c0-0.689,0.525-1.25,1.17-1.25 c0.646,0,1.17,0.561,1.17,1.25v4.896c0,0.689-0.524,1.25-1.17,1.25c-0.645,0-1.17-0.561-1.17-1.25V2.75z M17.206,2.75 c0-0.689,0.525-1.25,1.17-1.25s1.17,0.561,1.17,1.25v4.896c0,0.689-0.525,1.25-1.17,1.25s-1.17-0.561-1.17-1.25V2.75z M9.125,2.75 c0-0.689,0.525-1.25,1.17-1.25s1.17,0.561,1.17,1.25v4.896c0,0.689-0.525,1.25-1.17,1.25s-1.17-0.561-1.17-1.25V2.75z M31.974,32.198c0,0.965-0.785,1.75-1.75,1.75h-24c-0.965,0-1.75-0.785-1.75-1.75v-22h27.5V32.198z"></path> <rect x="6.724" y="14.626" width="4.595" height="4.089"></rect> <rect x="12.857" y="14.626" width="4.596" height="4.089"></rect> <rect x="18.995" y="14.626" width="4.595" height="4.089"></rect> <rect x="25.128" y="14.626" width="4.596" height="4.089"></rect> <rect x="6.724" y="20.084" width="4.595" height="4.086"></rect> <rect x="12.857" y="20.084" width="4.596" height="4.086"></rect> <rect x="18.995" y="20.084" width="4.595" height="4.086"></rect> <rect x="25.128" y="20.084" width="4.596" height="4.086"></rect> <rect x="6.724" y="25.54" width="4.595" height="4.086"></rect> <rect x="12.857" y="25.54" width="4.596" height="4.086"></rect> <rect x="18.995" y="25.54" width="4.595" height="4.086"></rect> <rect x="25.128" y="25.54" width="4.596" height="4.086"></rect> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
							<input type="date" id="checkoutDate" placeholder="YYYY-MM-DD" name="checkoutDate" class="mb-0 border-0 bg-transparent cursor position-relative" required>
						</div>
					</div>
					<div class="col-12 col-sm-6 px-10">
						<label class="d-block w-100 mb-2" for="amount-people">Số người</label>
						<input required id="amount-people" type="number" min="1" value="1" placeholder="Số người" name="amount-people" class="mb-2 w-100 border-0">
					</div>
					<div class="col-12 col-sm-6 px-10">
						<label class="d-block w-100 mb-2" for="nameRoom">Trẻ em</label>
						<input required id="amount-children" type="number" min="1" value="0" placeholder="Trẻ em" name="amount-people" class="mb-2 w-100 border-0">
					</div>
					<div class="col-12 mt-2 d-flex flex-wrap">
						<div class="col-6 px-10">
							<button type="submit" class="btn-calc w-100 text-uppercase fw-bold">Tạm tính</button>
						</div>
						<div class="col-6 px-10">
							<button type="submit" class="btn-booking text-white w-100 text-uppercase fw-bold" disabled>Ðặt phòng</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!------------------------------------ END ROOMINFOS ------------------------------------>


<!------------------------------------ START ROOMDESC ----------------------------------->
<div class="row justify-content-center py-4">
	<div class="max-width d-flex flex-wrap align-items-center px-0">
		<div class="col-12 px-10">
			<div class="nav roomDetail__desc" id="nav-tab" role="tablist">
				<button class="active border-0 fw-600 detailGroup__title navTabs d-inline-block" id="desc" data-bs-toggle="tab" data-bs-target="#nav-desc" type="button" role="tab" aria-controls="nav-desc" aria-selected="true">Mô tả</button>
				<button class="border-0 fw-600 detailGroup__title navTabs" id="convenient" data-bs-toggle="tab" data-bs-target="#nav-convenient" type="button" role="tab" aria-controls="nav-convenient" aria-selected="false">Tiện nghi</button>
			</div>
			<div class="tab-content detailGroup__border p-3" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-desc" role="tabpanel" aria-labelledby="desc" tabindex="0">
					<p>
						Với cảnh quan tuyệt đẹp, bạn sẽ tận hưởng đầy đủ kỳ nghỉ với các dịch vụ hoàn hảo. Ngoài ra khách đặt phòng còn được miễn phí ăn sáng. Tiện ích phòng đầy đủ máy lạnh, tivi màn hình phẳng và nhiều tiện ích khác nữa.
					</p>
					<p>
						<strong>Dịch vụ miễn phí: </strong>
						Ăn sáng tự chọn, Nước khoáng trên phòng nghỉ, Dịch Internet không dây (wifi)
					</p>
					<p>
						<strong>Giờ trả phòng: </strong>
						12h00 hàng ngày
					</p>
					<p>
						<strong>Hình thức Thanh toán:</strong>
						Tiền mặt (VND, USD, EURO, …) thẻ tín dụng Visa và Master
					</p>
					<p>* Nếu Quý khách thanh toán bằng ngoại tệ thì theo tỷ giá hối đoái của Ngân hàng hiện thời.</p>
				</div>
				<div class="tab-pane fade" id="nav-convenient" role="tabpanel" aria-labelledby="convenient" tabindex="0">
					<P class="hotline">
						Liên hệ hotline: <a title="1900 6750" href="tel:19006750" class="text-decoration-none fw-500">1900 6750</a> để nhận được ưu đãi đặt phòng sớm nhất !
					</P>
					<p class="convenient-title text-uppercase fw-600">
						Các tiện nghi của Bean Hotel
					</p>
					<div class="d-flex flex-wrap">
						<div class="col-12 col-md-6 convenient-item mb-3">
							<h3 class="mb-3"><i class="fa-solid fa-square-parking me-1"></i>Chỗ đậu xe</h3>
							<p><span class="free-badge text-white">Miễn phí!</span> Chỗ đậu xe miễn phí</p>
							<p>Có chỗ đỗ xe riêng, an toàn</p>
						</div>
						<div class="col-12 col-md-6 convenient-item mb-3">
							<h3 class="mb-3"><i class="fa-solid fa-champagne-glasses me-1"></i>Tiện ích ngoài trời</h3>
							<p>Karaoke</p>
							<p><span class="free-badge text-white">Miễn phí!</span> Truyền hình cáp free</p>
						</div>
						<div class="col-12 col-md-6 convenient-item mb-3">
							<h3 class="mb-3"><i class="fa-solid fa-champagne-glasses me-1"></i>Tiện ích ngoài trời </h3>
							<p>BBQ</p>
							<p>Bàn ghế ngoài trời</p>
							<p>Ban công</p>
							<p>Sân hiên</p>
							<p>Sân vườn &amp; Cây xanh</p>
							<p>Sân thượng</p>
						</div>
						<div class="col-12 col-md-6 convenient-item mb-3">
							<h3 class="mb-3"><i class="fa-solid fa-hand-sparkles me-1"></i>Dịch vụ lau dọn</h3>
							<p>Giặt khô</p>
							<p>Giặt ủi</p>
							<p>Dọn phòng hàng ngày</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!------------------------------------- END ROOMDESC ------------------------------------>


<!------------------------------------ START RECOMMEND ----------------------------------->
<div class="row justify-content-center pb-4">
	<div class="max-width d-flex flex-wrap px-0 align-items-stretch test-table">
		<div class="col-12 col-lg-8 px-10">
			<div class="roomDetail__recommend mb-4 mb-lg-0">
				<div class="detailGroup__title text-white fw-600 d-inline-block">
					<a href="?p=room-detail" class="text-decoration-none text-white">Phòng tương tự</a>
				</div>
				<div class="detailGroup__border d-flex flex-wrap p-3">
					<!-- Another Room List -->
					<div class="another__list anotherRoom owl-carousel owl-theme">
					    <?php
					        foreach ($anotherRoom as $key => $value) {                
					    ?>
					    <div class="h-100 align-self-stretch mb-3 px-2">
					        <div class="card border-0">
					            <a href="?p=room-detail" target="_blank" class="image-thumb">
					                <img class="img-fluid w-100" src="public/demo/<?php echo $value->image ?>" alt="BeanHotel Single Room">
					            </a>
					            <div class="card-body ">
					                <h4 class="card-title text-center">
					                    <a class="text-decoration-none text-uppercase fw-600" href="?p=room-detail" target="_blank"> <?php echo $value->name ?></a>
					                </h4>
					                <div class="d-flex justify-content-center align-items-center gap-3 mb-2">
					                    <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services1 ?>" alt="BeanHotel Services">
					                    <?php 
					                        if($value->services2) {
					                    ?>
					                        <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services2 ?>" alt="BeanHotel Services">
					                    <?php } ?>
					                    <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services3 ?>" alt="BeanHotel Services">
					                    <img class="img-fluid" width="26" height="26" src="public/demo/<?php echo $value->services4 ?>" alt="BeanHotel Services">
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
		<div class="col-12 col-lg-4 px-10">
			<div class="detailGroup__title text-white fw-600 d-inline-block">
				<a href="?p=room" class="text-decoration-none text-white">Phòng tốt nhất</a>
			</div>
			<div class="detailGroup__border d-flex flex-wrap p-3">
				<!-- Top Room List -->
				<div class="topRoom col-12 d-flex flex-wrap">
				    <?php
				        foreach ($roomTop as $key => $value) {                
				    ?>
				    <div class="col-12 col-md-6 col-lg-12 d-flex flex-wrap pb-2 mb-2">
				        <a href="?p=room-detail" class="col-4">
				            <img class="img-fluid" src="public/demo/<?php echo $value->image ?>" alt="BeanHotel VIP Room">
				        </a>
				        <div class="topRoom__desc col-8 ps-2">
				            <a href="?p=room-detail" class="text-decoration-none text-capitalize cursor fw-500"><?php echo $value->name ?></a>
				            <span class="price d-block fw-500"><?php echo $value->price ?>₫</span>
				        </div>
				    </div>
				    <?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!------------------------------------- END RECOMMEND ------------------------------------>

<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript">
	// Room Image Slider
    $(document).ready(function(){
        $('.room__slider').owlCarousel({
            center: true,
            loop:true,
            margin:10,
            nav:true,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:2
                }
            }
        });
        $( ".owl-next").html('<i class="fa-solid fa-angle-right"></i>');
        $( ".owl-prev").html('<i class="fa-solid fa-angle-left"></i>');
    });

    // Another Room Slider
    $(document).ready(function(){
        $('.anotherRoom').owlCarousel({
            center: false,
            margin:0,
            nav:false,
            dots:false,
            responsive:{
                0:{
                    items:1.3,
                    loop: true,
                },
                640:{
                    items: 2,
                    loop: false,
                },
                992:{
                    items: 3,
                }
            }
        });
    });
</script>
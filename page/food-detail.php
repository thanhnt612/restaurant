<?php 
    class AnotherFood
    {
        function __construct($name, $image, $price, $discount, $salePrice){
            $this->name=$name;
            $this->image=$image;
            $this->price=$price;
            $this->discount=$discount;
            $this->salePrice=$salePrice;
        }
    }

    $dataAnotherFood = array(
        array('bún xào thịt heo','monan2.webp','75.000', '17', '90.000'),
        array('bún bò huế','monan3.webp','95.000', '5', '100.000'),
        array('mì xào thịt heo','monan4.webp','85.000', '12', '97.000'),
        array('bánh mì ốp la trứng','monan5.webp','40.000', '', ''),
        array('bánh mì bò kho','monan6.webp','70.000', '22', '90.000'),
        array('bún bò - heo','monan7.webp','80.000', '11', '90.000'),
        array('cơm sườn trứng','monan8.webp','50.000', '17', '60.000'),
    );

    $anotherFood = array();
    foreach($dataAnotherFood as $key => $value){
        array_push($anotherFood,new AnotherFood($value[0],$value[1],$value[2],$value[3],$value[4]));
    }

    class Room
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
?>

<style type="text/css">
	.foodDetail__menu a {
		font-size: 15px;
		color: inherit !important;
	}

	.foodDetail__menu a:hover {
		color: var(--clr-primary) !important;
	}

	.foodDetail__menu .dropdown-menu.show {
		transform: unset !important;
	}

	.foodDetail__title {
		font-size: 26px;
		line-height: 36px;
		margin-bottom: 5px;
	}

	.foodDetail__left {
		line-height: 1.7;
	}

	.foodDetail__left .price {
		margin-bottom: 10px;
		padding-bottom: 10px;
	    border-bottom: 1px solid var(--clr-border-footer);
	}

	.foodDetail__desc {
		margin-bottom: 10px;
	}

	.foodDetail__action input {
	    height: 40px;
	    width: 40px;
	    line-height: 45px;
	    font-size: 16px;
	    border: solid 1px var(--clr-border-btnAdd);
	    border-right: 0;
	}

	.foodDetail__action .btn-action {
    	font-size: 15px;
	 	width: 20px;
    	height: 20px;
    	line-height: 19px;
    	border: 1px solid var(--clr-border-btnAdd);
    	transition: all 0.3s ease;
	}

	.foodDetail__action .btn-action:hover {
		background-color: var(--clr-primary) !important;
		color: var(--clr-white);
	}

	.foodDetail__form, .foodDetail__tags {
	    border-top: 1px solid var(--clr-border-footer);
	}

	.foodDetail__form button[type="submit"] {
	    padding-left: 40px;
	    padding-right: 40px;
	    font-size: 12px;
	    line-height: 40px;
	    height: 40px;
	}

	.foodDetail__form button[type="submit"]:hover {
		background-color: var(--clr-white);
		border-color: var(--clr-primary);
		color: var(--clr-primary) !important;
	}

	.foodDetail__tags span {
		font-size: 12px;
		color: var(--clr-text);
	 	padding: 4px 9px;
	    margin: 5px;
	    border-left: 3px solid var(--clr-red);
	    background-color: var(--clr-tags);
	}

	.foodDetail__tags span::before {
	 	position: absolute;
	 	content: "";
		left: 0;
    	top: 10px;
    	border: 1px solid transparent;
	    border-left-color: var(--clr-red);
	    border-width: 4px;
	}

	.foodDetail__imgGroup img {
		border: 1px solid transparent;
	}

	.foodDetail__imgGroup img:hover {
		border-color: var(--clr-primary);
	}

	.foodDetail__right {
		top: 10px;
		align-self: baseline;
	}

	/*AnotherFood*/
	.anotherFood .owl-nav [class*=owl-] {
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

    .anotherFood .owl-nav [class*=owl-]:hover {
        background-color: var(--clr-black) !important;
    }

    .anotherFood>.owl-nav>.owl-next{
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: -1vw;
    }

    .anotherFood>.owl-nav>.owl-prev{
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: -1vw;
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

	/*Single Room*/
	.signleRoom > div {
        border-bottom: 2px solid var(--clr-border-gray1);
    }

    .signleRoom__desc .price{
        font-size: 14px;
    }

    .signleRoom__desc a {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
    }

    .signleRoom__desc a:hover {
        color: var(--clr-primary) !important;
    }

	/*TABLET*/
    @media (min-width: 768px) {
        .menu__item .salePrice {
            margin-left: 10px;
        }
    }
</style>

<!---------------------------------- START BREADCRUMS ----------------------------------->
<div class="breadcrumb__wrapper row justify-content-center">
	<div class="max-width d-flex flex-wrap align-items-center px-0">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="px-10">
		  <ol class="breadcrumb mb-0">
		    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Trang chủ</a></li>
		    <li class="breadcrumb-item"><a href="?p=room-list" class="text-decoration-none">Món ăn</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Mì xào bò</li>
		  </ol>
		</nav>
	</div>
</div>
<!----------------------------------- END BREADCRUMS ------------------------------------>


<!------------------------------------ START SLIDER ------------------------------------->
<div class="row justify-content-center pt-4">
	<div class="max-width d-flex flex-wrap justify-content-center px-0">
		<div class="col-12 col-lg-9 foodDetail__left mb-3">
			<div class="d-flex flex-wrap justify-content-center">
				<div class="col-12 col-lg-6 px-10 mb-3 mb-lg-0">
					<div>
						<img src="public/demo/sp3c.webp" class="img-fluid w-100 cursor" alt="BeanHotel Food">
					</div>
					<div class="foodDetail__imgGroup d-flex flex-wrap align-items-center gap-2 mt-3">
						<img src="public/demo/sp3c.webp" width="95" height="70" class="img-fluid cursor" alt="BeanHotel Food">
						<img src="public/demo/sp1c.webp" width="95" height="70" class="img-fluid cursor" alt="BeanHotel Food">
						<img src="public/demo/sp2c.webp" width="95" height="70" class="img-fluid cursor" alt="BeanHotel Food">
					</div>
				</div>
				<div class="col-12 col-lg-6 px-10">
					<h1 class="foodDetail__title text-capitalize fw-600">Mì xào bò</h1>
					 <div class="price">
	                    <span class="fw-600">80.000đ</span>
                        <span class="salePrice text-decoration-line-through">100.000đ</span>
	                </div>
	                <p class="foodDetail__desc">
	                	Đĩa mì xào thơm ngon nóng hổi sẽ cung cấp bữa sáng tuyệt vời, đầy đủ dinh dưỡng, năng lượng cho một ngày dài. Sự hòa quyện vị ngọt tự nhiên của rau củ, thịt và gia vị sẽ giúp món mì thêm đậm đà, đượm vị.
	            	</p>
	            	<form class="foodDetail__form d-flex flex-wrap gap-2 py-3">
						<div class="foodDetail__action">
							<div class="d-inline-flex flex-wrap">									
								<input type="text" id="quantity" name="quantity" value="1" maxlength="3" class="text-center">
								<div class="d-flex flex-column">
									<button class="btn-action bg-transparent">+</button>
									<button class="btn-action bg-transparent">-</button>
								</div>
							</div>
						</div>
						<button type="submit" class="btnCustom text-white text-uppercase">Thêm vào giỏ hàng</button>
					</form>
					<div class="foodDetail__tags py-10">
						<label class="fw-600">Tags:</label>
						<span class="d-inline-block position-relative">Mì</span>
						<span class="d-inline-block position-relative">Mì xào bò</span>
					</div>
				</div>
			</div>
			<div class="px-10 mt-3">
				<div class="nav roomDetail__desc" id="nav-tab" role="tablist">
					<button class="active border-0 fw-600 detailGroup__title navTabs d-inline-block" id="desc" data-bs-toggle="tab" data-bs-target="#nav-desc" type="button" role="tab" aria-controls="nav-desc" aria-selected="true">Mô tả sản phẩm</button>
					<button class="border-0 fw-600 detailGroup__title navTabs" id="policy" data-bs-toggle="tab" data-bs-target="#nav-policy" type="button" role="tab" aria-controls="nav-policy" aria-selected="false">Chính sách đổi trả</button>
				</div>
				<div class="tab-content detailGroup__border p-3" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-desc" role="tabpanel" aria-labelledby="desc" tabindex="0">
						<p>
							Mì xào bò là món ăn được chế biến kết hợp từ nhiều loại thực phẩm khác nhau. Đó là trứng, thịt, rau và gia vị. Vì kết hợp nhiều nguyên liệu nên món ăn này có hương vị thơm ngon, hấp dẫn. Và chế biến nhanh, đơn giản nên được nhiều gia đình lựa chọn cho bữa sáng.
						</p>
						<p>
							Nhiều người khá lăn tăn về hàm lượng calo trong một đĩa mì xào . Bởi món ăn là sự kết hợp của nhiều gia vị, nguyên liệu. Do đó để chính xác một đĩa mì này chứa bao nhiêu calo là rất khó. Nhưng theo bảng tính giá trị calo của thực phẩm nói chung thì&nbsp;một đĩa mì xào bò có khoảng 638 calo.
						</p>
						<p>
							Hàm lượng calo trong mì tôm xào bò là khá cao. Nếu như bạn đang giảm cân hoặc thể trạng béo, hãy hạn chế ăn món này nhé. Ngoài ra, ăn nhiều món ăn này cũng dẫn đến gây nóng, nổi mụn, sỏi thận, dễ bị loãng xương, răng yếu,… Dù món mì xào bò thơm ngon, dễ ăn, chế biến không cầu kỳ nhưng bạn cũng không nên ăn quá nhiều. Vì bổ sung nhiều năng lượng nên món mì xào bò bạn có thể chế biến vào bữa sáng để cả ngày tràn đầy năng lượng làm việc.
						</p>
						<p>
							Mì gói xào bò là món ăn nhanh gọn, nhưng chế biến thế nào để vừa thơm ngon mà không mất quá nhiều thời gian. Cùng tham khảo ngay cách chế biến mì xào bò dưới đây.
						</p>
					</div>
					<div class="tab-pane fade" id="nav-policy" role="tabpanel" aria-labelledby="policy" tabindex="0">
						+ Sản phẩm lỗi, hỏng do quá trình sản xuất hoặc vận chuyện<br>
						+ Nằm trong chính sách đổi trả sản phẩm của Bean<br>
						+ Sản phẩm còn nguyên tem mác chưa qua sử dụng và chưa giặt là<br>
						+ Thời gian đổi trả nhỏ hơn 15 ngày kể từ ngày nhận hàng<br>
						+ Chi phí bảo hành về sản phẩm, vận chuyển khách hàng chịu chi phí <br>
						<b>Điều kiện đổi trả hàng</b><br>
						Điều kiện về thời gian đổi trả: trong vòng 01 ngày kể từ khi nhận được hàng và phải liên hệ gọi ngay cho chúng tôi theo số điện thoại trên để được xác nhận đổi trả hàng.<br>
						<b>Điều kiện đổi trả hàng:</b><br>
						- Sản phẩm gửi lại phải còn nguyên đai nguyên kiện<br>
						- Phiếu bảo hành (nếu có) và tem của công ty trên sản phẩm còn nguyên vẹn.<br>
						- Sản phẩm đổi/ trả phải còn đầy đủ hộp, giấy Hướng dẫn sử dụng và chưa qua sử dụng.<br>
						- Quý khách chịu chi phí vận chuyển, đóng gói, thu hộ tiền, chi phí liên lạc tối đa tương đương 20% giá trị đơn hàng.
					</div>
				</div>
			</div>
			<div class="px-10 mt-3">
				<div class="detailGroup__title text-white fw-600 d-inline-block">
					<a href="?p=food-detail" class="text-decoration-none text-white">Sản phẩm liên quan</a>
				</div>
				<div class="detailGroup__border d-flex flex-wrap p-3">
					<!-- Another Food List -->
					<div class="anotherFood owl-carousel owl-theme">
					    <?php
					        foreach ($anotherFood as $key => $value) {                
					    ?>
					    <div class="menu__item px-2 mb-3">
					        <div class="card rounded-0">
					            <div class="card-heading position-relative">
					                <a href="?p=food-detail" target="_blank" class="image-thumb">
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
		</div>
		<div class="foodDetail__right col-12 col-lg-3 px-10 position-sticky">
			<div class="detailGroup__title text-white fw-600 d-none d-lg-inline-block">Danh mục sản phẩm</div>
			<div class="detailGroup__border p-3 d-none d-lg-block">
				<ul class="foodDetail__menu list-unstyled mb-0">
					<li><a href="#" class="nav-link py-2 px-0">Trang chủ</a></li>
					<li><a href="?p=about" class="nav-link py-2 px-0">Về chúng tôi</a></li>
					<li class="dropdown">
						<a href="?p=room" class="nav-link px-0 py-2 position-relative" data-bs-toggle="dropdown" aria-expanded="false" id=offcanvasDropdown1>
							<span>Phòng</span>
							<i class="open_mnu toggle-icon current position-absolute"></i>
						</a>
						<ul class="dropdown-menu py-0 border-0 rounded-0 position-relative">
				            <li><a class="nav-link py-2" href="?p=room-list">Phòng đơn</a></li>
				            <li><a class="nav-link py-2" href="?p=room-list">Phòng đôi</a></li>
				            <li><a class="nav-link py-2" href="?p=room-list">Phòng vip</a></li>
				  		</ul>
					</li>
					<li class="dropdown">
						<a href="?p=food" class="nav-link py-2 px-0 position-relative" data-bs-toggle="dropdown" aria-expanded="false" id=offcanvasDropdown2>
							<span>Ẩm thực</span>
							<i class="open_mnu toggle-icon current position-absolute"></i>
						</a>
						<ul class="dropdown-menu py-0 border-0 rounded-0 position-relative" >
				            <li><a class="nav-link py-2" href="?p=food-list">Món ăn</a></li>
				            <li><a class="nav-link py-2" href="?p=food-list">Đồ uống</a></li>
				            <li><a class="nav-link py-2" href="?p=food-list">Bánh ngọt</a></li>
				  		</ul>
					</li>
					<li><a href="?p=services" class="nav-link py-2 px-0">Dịch vụ</a></li>
					<li><a href="?p=library" class="nav-link py-2 px-0">Thư viện ảnh</a></li>
					<li><a href="?p=contact" class="nav-link py-2 px-0">Liên hệ</a></li>
				</ul>
			</div>
			<div class="mb-lg-3"></div>
			<div class="detailGroup__title text-white fw-600 d-inline-block">
				<a href="?p=room-list" class="text-decoration-none text-white">Có thể bạn thích</a>
			</div>
			<div class="detailGroup__border p-3">
				<!-- Single Room -->
				<div class="signleRoom col-12 d-flex flex-wrap">
				    <?php
				        foreach ($singleRoom as $key => $value) {                
				    ?>
				    <div class="col-12 col-md-6 col-lg-12 d-flex flex-wrap pb-2 mb-2">
				        <a href="?p=room-detail" class="col-4">
				            <img class="img-fluid" src="public/demo/<?php echo $value->image ?>" alt="BeanHotel Normal Room">
				        </a>
				        <div class="signleRoom__desc col-8 ps-2">
				            <a href="?p=room-detail" class="text-decoration-none text-capitalize cursor fw-500"><?php echo $value->name ?></a>
				            <span class="price d-block fw-500"><?php echo $value->price ?>₫</span>
				        </div>
				    </div>
				    <?php } ?>
				</div>
			</div>
			<div class="mb-4"></div>
		</div>
	</div>
</div>
<!------------------------------------ START SLIDER ------------------------------------->

<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.anotherFood').owlCarousel({
            center: false,
            margin:0,
            nav:true,
            dots:false,
            loop: true,
            responsive:{
                0:{
                    items:1.3,
                },
                640:{
                    items: 2,
                    loop: false
                },
                992:{
                    items: 3,
                }
            }
        });
        $( ".owl-next").html('<i class="fa-solid fa-angle-right"></i>');
        $( ".owl-prev").html('<i class="fa-solid fa-angle-left"></i>');
    });
</script>
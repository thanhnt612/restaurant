<?php 
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
?>

<style>
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
        padding-top: 5px;
        padding-bottom: 50px;
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

	/*TABLET*/
    @media (min-width: 768px) {
        .menu__item .salePrice {
            margin-left: 10px;
        }
    }
</style>

<!---------------------------------- START BREADCRUMS ----------------------------------->
<div class="breadcrumb__wrapper row justify-content-center">
	<div class="max-width d-flex flex-wrap align-items-center">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
		  <ol class="breadcrumb mb-0">
		    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Trang chủ</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Món ăn</li>
		  </ol>
		</nav>
	</div>
</div>
<!----------------------------------- END BREADCRUMS ------------------------------------>


<!------------------------------------ START FILTER ------------------------------------->
<div class="row justify-content-center">
	<div class="max-width d-flex flex-wrap justify-content-center align-items-center">
		<div class="col-12 filter-group d-flex justify-content-between align-items-center px-10 my-4">
			<h2 class="text-uppercase fw-bold mb-0">Món ăn</h2>
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
		<div class="col-12 d-flex flex-wrap align-items-center">
		    <?php
		        foreach ($dish as $key => $value) {                
		    ?>
		    <div class="menu__item col-12 col-sm-6 col-md-4 col-lg-3 px-2 mb-3">
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
<!-------------------------------------- END ROOM --------------------------------------->
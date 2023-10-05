<?php 
    class Services
    {
        function __construct($title, $image){
            $this->title=$title;
            $this->image=$image;
		}
   	}

	$dataWedding = array(
	    array('Tổ chức tiệc hội nghị, hội thảo cao cấp','wedding1.webp'),
	    array('Tổ chức tiệc cưới - kết nối nhân duyên','wedding2.webp'),
	    array('Tổ chức tiệc cưới - hỏi ngoài trời','wedding3.webp'),
	    array('Gói hội nghị, hội thảo tổ chức trong ngày','wedding4.webp'),
	);

	$wedding = array();
	foreach($dataWedding as $key => $value){
	    array_push($wedding,new Services($value[0],$value[1]));
	}

	$dataBeauty = array(
	    array('Nghỉ dưỡng kết hợp massage thư giãn với đá nóng','beauty1.webp'),
	    array('Tắm trắng và kết hợp dưỡng da toàn thân','beauty2.webp'),
	    array('Massage body toàn thân bằng tinh dầu và hơi nước','beauty3.webp'),
	    array('Tẩy da chết toàn thân bằng tinh chất cám gạo, ngũ cốc','beauty4.webp'),
	);

	$beauty = array();
	foreach($dataBeauty as $key => $value){
	    array_push($beauty,new Services($value[0],$value[1]));
	}
?>

<style>
   .services__list .card {
   		border-radius: 10px;
    	box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15) !important;
    	overflow: hidden;
   }

   .services__title a {
   		font-size: 18px;
	    height: 64px;
 		line-height: 30px;
	    display: -webkit-box;
	    -webkit-box-orient: vertical;
	    -webkit-line-clamp: 2;
	    text-overflow: ellipsis;
	    overflow: hidden;
   }

   .services__title a:hover {
   		color: var(--clr-primary) !important;
   }
</style>

<!---------------------------------- START BREADCRUMS ----------------------------------->
<div class="breadcrumb__wrapper row justify-content-center">
	<div class="max-width d-flex flex-wrap align-items-center">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
		  <ol class="breadcrumb mb-0">
		    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Trang chủ</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Dịch vụ</li>
		  </ol>
		</nav>
	</div>
</div>
<!----------------------------------- END BREADCRUMS ------------------------------------>


<!----------------------------------- START SERVICES ------------------------------------>
<div class="services__wedding row justify-content-center">
	<div class="max-width justify-content-center align-items-center px-45">
		<div class="col-12">
			<h2 class="title text-center">
				<a href="?p=blog-detail" class="text-decoration-none">Hội nghị - cưới hỏi</a>
			</h2>
			<!-- Wedding List -->
			<div class="services__list d-none d-sm-flex flex-wrap justify-content-center align-items-center mb-5">
			    <?php
			        foreach ($wedding as $key => $value) {                
			    ?>
			    <div class="col-sm-3 px-2">
			        <div class="card border-0">
			            <a href="?p=blog-detail" target="_blank" class="image-thumb">
			                <img class="img-fluid" src="public/demo/<?php echo $value->image ?>" title="<?php echo $value->title ?>" alt="BeanHotel Services">
			            </a>
			            <div class="card-body px-10 py-0">
			                <h4 class="services__title text-center">
			                    <a class="text-decoration-none text-black fw-bold" href="?p=blog-detail" target="_blank"> <?php echo $value->title ?></a>
			                </h4>
			            </div>
			        </div>
			    </div>
			    <?php } ?>
			</div>

			<!-- Wedding Slider -->
			<div class="services__list wedding__slider d-sm-none owl-carousel owl-theme mb-5">
			    <?php
			        foreach ($wedding as $key => $value) {                
			    ?>
			    <div class="px-2">
			        <div class="card border-0 mb-2">
			            <a href="?p=services-detail" target="_blank" class="image-thumb">
			                <img class="img-fluid" src="public/demo/<?php echo $value->image ?>" title="<?php echo $value->title ?>" alt="BeanHotel Services">
			            </a>
			            <div class="card-body px-10 py-0">
			                <h4 class="services__title text-center">
			                    <a class="text-decoration-none text-black fw-bold" href="?p=services-detail" target="_blank"> <?php echo $value->title ?></a>
			                </h4>
			            </div>
			        </div>
			    </div>
			    <?php } ?>
			</div>
		</div>
		<div class="col-12">
			<h2 class="title text-center">
				<a href="?p=blog-detail" class="text-decoration-none">Sức khoẻ - làm đẹp</a>
			</h2>
			<!-- Beauty List -->
			<div class="services__list d-none d-sm-flex flex-wrap justify-content-center align-items-center mb-5">
			    <?php
			        foreach ($beauty as $key => $value) {                
			    ?>
			    <div class="col-sm-3 px-2">
			        <div class="card border-0">
			            <a href="?p=blog-detail" target="_blank" class="image-thumb">
			                <img class="img-fluid" src="public/demo/<?php echo $value->image ?>" title="<?php echo $value->title ?>" alt="BeanHotel Services">
			            </a>
			            <div class="card-body px-10 py-0">
			                <h4 class="services__title text-center">
			                    <a class="text-decoration-none text-black fw-bold" href="?p=blog-detail" target="_blank"> <?php echo $value->title ?></a>
			                </h4>
			            </div>
			        </div>
			    </div>
			    <?php } ?>
			</div>

			<!-- Beauty Slider -->
			<div class="services__list beauty__slider d-sm-none owl-carousel owl-theme mb-5">
			    <?php
			        foreach ($beauty as $key => $value) {                
			    ?>
			    <div class="px-2">
			        <div class="card border-0 mb-2">
			            <a href="?p=blog-detail" target="_blank" class="image-thumb">
			                <img class="img-fluid" src="public/demo/<?php echo $value->image ?>" title="<?php echo $value->title ?>" alt="BeanHotel Services">
			            </a>
			            <div class="card-body px-10 py-0">
			                <h4 class="services__title text-center">
			                    <a class="text-decoration-none text-black fw-bold" href="?p=blog-detail" target="_blank"> <?php echo $value->title ?></a>
			                </h4>
			            </div>
			        </div>
			    </div>
			    <?php } ?>
			</div>
		</div>
	</div>
</div>
<!------------------------------------ END SERVICES ------------------------------------->

<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript">
	// Wedding Slider
    $(document).ready(function(){
        $('.wedding__slider').owlCarousel({
            center: false,
            margin:0,
            nav:false,
            dots:false,
            loop: true,
            responsive:{
                0:{
                    items:1.2,
                },
            }
        });
    });

    // Beauty Slider
     $(document).ready(function(){
        $('.beauty__slider').owlCarousel({
            center: false,
            margin:0,
            nav:false,
            dots:false,
            loop: true,
            responsive:{
                0:{
                    items:1.2,
                },
            }
        });
    });
</script>
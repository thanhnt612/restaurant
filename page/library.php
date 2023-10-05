<?php 
    class Library
    {
        function __construct($image){
            $this->image=$image;
		}
   	}

	$dataLibrary = array(
	    array('library1.webp'),
        array('library2.webp'),
        array('library3.webp'),
        array('library4.webp'),
        array('library5.webp'),
        array('library6.webp'),
        array('library7.webp'),
        array('library8.webp'),
	);

	$library = array();
	foreach($dataLibrary as $key => $value){
	    array_push($library,new Library($value[0]));
	}
?>

<style>
   .library__list .item {
   		border-radius: 10px;
    	box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15) !important;
    	overflow: hidden;
   }
</style>

<!---------------------------------- START BREADCRUMS ----------------------------------->
<div class="breadcrumb__wrapper row justify-content-center">
	<div class="max-width d-flex flex-wrap align-items-center">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
		  <ol class="breadcrumb mb-0">
		    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Trang chủ</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Thư viện ảnh</li>
		  </ol>
		</nav>
	</div>
</div>
<!----------------------------------- END BREADCRUMS ------------------------------------>


<!------------------------------------ START LIBRARY ------------------------------------>
<div class="library row justify-content-center py-5">
	<div class="max-width d-flex flex-wrap justify-content-center align-items-center px-45">
		<div class="col-12">
			<h2 class="title text-center">
				<a href="#" class="text-decoration-none">Thư viện ảnh</a>
			</h2>
			<!-- Image List -->
			<div class="library__list d-flex flex-wrap justify-content-center align-items-center" id="selector">
			    <?php
			        foreach ($library as $key => $value) {                
			    ?>
			    <div class="col-12 col-sm-6 col-md-3 px-2 mb-3">
			        <div class="image-thumb item cursor" data-src="public/demo/<?php echo $value->image ?>" data-sub-html="Bean Hotel">
			            <img class="img-fluid w-100" src="public/demo/<?php echo $value->image ?>" alt="BeanHotel Library">
			        </div>
			    </div>
			    <?php } ?>
			</div>
		</div>
	</div>
</div>
<!------------------------------------- END LIBRARY ------------------------------------->

<script type="text/javascript" src="lib/lightgallery/js/lightgallery.min.js"></script>
<script type="text/javascript" src="lib/lightgallery/js/lg-autoplay.min.js"></script>
<script type="text/javascript" src="lib/lightgallery/js/lg-fullscreen.min.js"></script>
<script type="text/javascript" src="lib/lightgallery/js/lg-zoom.min.js"></script>
<script type="text/javascript" src="lib/lightgallery/js/lg-share.min.js"></script>
<script type="text/javascript" src="lib/lightgallery/js/lg-rotate.min.js"></script>
<script>
    lightGallery(document.getElementById('selector'), {
        selector: '.item',
    });
</script>
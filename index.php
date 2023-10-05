<?php
$dm = 'http://localhost/ks/';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href="<?php echo $dm; ?>" />

	<!-- BOOTSTRAP ICONS CDN -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

	<!-- FONTAWESOME CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- OWL CAROUSEL CSS -->
	<link rel="stylesheet" href="lib/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="lib/owlcarousel/owl.theme.default.min.css">

	<!-- LIGHTGALLERY CSS -->
	<link rel="stylesheet" href="lib/lightgallery/css/lightgallery.css">
	<link rel="stylesheet" href="lib/lightgallery/css/lg-autoplay.css">
	<link rel="stylesheet" href="lib/lightgallery/css/lg-fullscreen.css">
	<link rel="stylesheet" href="lib/lightgallery/css/lg-zoom.css">
	<link rel="stylesheet" href="lib/lightgallery/css/lg-share.css">
	<link rel="stylesheet" href="lib/lightgallery/css/lg-rotate.css">

	<!-- BOOTSTRAP CSS -->
	<link href="public/css/bootstrap.min.css" rel="stylesheet">

	<!-- MAIN CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css?version=<?php echo time(); ?>" />

	<!-- OWL CAROUSEL JS -->
	<script src="lib/owlcarousel/owl.carousel.min.js"></script>

	<!-- BOOTSTRAP JS -->
	<script type="text/javascript" src="public/js/jquery.js"></script>
	<script type="text/javascript" src="public/js/jquery-3.6.3.min.js"></script>
	<script type="text/javascript" src="public/js/popper.min.js" defer></script>
	<script type="text/javascript" src="public/js/bootstrap.bundle.min.js" defer></script>

	<title>Bean Hotel</title>
</head>

<body>
	<div class="container-fluid">
		<?php
		if (@$_GET['p']) {
			$p = $_GET['p'];
			require "page/header.php";
			require "page/" . $p . ".php";
			require "page/footer.php";
		} else {
			require "page/header.php";
			require "page/homepage.php";
			require "page/footer.php";
		}
		?>
	</div>

	<a href="#" class="scrollToTop text-decoration-none text-center fw-bold tex-white" title="Back To Top">
		<i class="fa-sharp fa-solid fa-angle-up text-white"></i>
	</a>

	<script type="text/javascript">
		$(window).scroll(function() {
			if ($(this).scrollTop() > 120) {
				$(".scrollToTop").fadeIn().addClass('show');

			} else {
				$(".scrollToTop").fadeOut().removeClass('show');
			}
		});

		$(".scrollToTop").click(function() {
			$("html, body").animate({
				scrollTop: 0
			}, 1000);
			return false;
		});
	</script>
</body>

</html>
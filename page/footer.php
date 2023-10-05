<style type="text/css">
	/*Mobile*/
	.footer {
		background-image: url('public/demo/bg_footer_1.webp');
		line-height: 1.7;
	}

	.footer a {
		transition: color 0.3s ease;
	}

	.footer a:hover {
		color: var(--clr-primary) !important;
	}

	.footer__inputMail input {
		flex-grow: 1;
		padding-left: 15px;
		padding-right: 15px;
		height: 35px;
		min-height: 35px;
		font-size: 14px;
		color: var(--clr-text-footer);
		border: 1px solid var(--clr-border-footer);
		outline: 0;
	}

	.footer__inputMail button {
		width: 80px;
		font-size: 12px;
		padding-left: 12px;
		padding-right: 12px;
	}

	.footer__socials a {
		height: 35px;
		width: 35px;
		line-height: 35px;
		border-radius: 50%;
		border: 1px solid var(--clr-white);
		font-size: 18px;
		transition: all 0.3s ease-in-out;
	}

	.footer__socials a.facebook:hover {
		background-color: var(--clr-facebook);
		border-color: var(--clr-facebook);
		color: var(--clr-white) !important;
	}

	.footer__socials a.twitter:hover {
		background-color: var(--clr-twitter);
		border-color: var(--clr-twitter);
		color: var(--clr-white) !important;
	}

	.footer__socials a.ins:hover {
		background: var(--clr-ins);
		border-color: var(--clr-ins-border);
		color: var(--clr-white) !important;
	}

	.footer__socials a.youtube:hover {
		background-color: var(--clr-youtube);
		border-color: var(--clr-youtube);
		color: var(--clr-white) !important;
	}

	.footer__locationWrapper > div {
		padding-top: 15px;
	    border-right: 1px solid rgba(255,255,255,0.15);
        border-bottom: 1px solid rgba(255,255,255,0.15);
	}

	.footer__locationWrapper > div:nth-child(3) {
		border-right: 0;
	}

	.footer__location {
		padding-left: 35px;
	}

	.footer__iconLocation {
		top: 3px;
		left: 0;
	}

	.footer__iconLocation i {
		width: 25px;
		height: 25px;
		line-height: 25px;
		border-radius: 50%;
		border: 1px solid var(--clr-white);
	}

	.footer__blogItem {
		margin-bottom: 10px;
    	padding-bottom: 10px;
    	border-bottom: 1px solid rgba(255,255,255,0.15);
	}

	.footer__blogItem:nth-child(4) {
		border-bottom: 0;
	}

	.footer__blog > div span {
		color: var(--clr-text-footer-blog);
	}
</style>


<!------------------------------------- START FOOTER -------------------------------------->
<div class="footer row justify-content-center text-white pt-5 pb-4">
	<div class="max-width d-flex flex-wrap justify-content-center align-items-center px-45">
		<div class="col-12 d-none d-md-flex flex-wrap mb-5">
			<div class="col-6 col-xl-2 px-10 mb-4 mb-xl-0">
				<p class="text-uppercase mb-2">hotline hỗ trợ</p>
				<a href="tel:19006750" class="text-decoration-none text-white">1900 6750</a>
			</div>
			<div class="col-6 col-xl-3 px-10 mb-4 mb-xl-0">
				<p class="text-uppercase mb-2">Email hỗ trợ</p>
				<a href="mailto:support@sapo.vn" class="text-decoration-none text-white">support@sapo.vn</a>
			</div>
			<div class="col-6 col-xl-4 px-10">
				<p class="text-uppercase mb-2 fw-600">Đăng ký nhận tin</p>
				<form class="footer__inputMail d-flex">
					<input type="mail" name="mail" placeholder="Email của bạn">
					<button class="btnCustom text-white fw-500 text-uppercase">Đăng ký</button>
				</form>
			</div>
			<div class="col-6 col-xl-3 px-10">
				<p class="text-uppercase mb-2 fw-600">Kết nối với chúng tôi</p>
				<div class="footer__socials">
					<a href="#" class="text-white d-inline-block text-center facebook mx-1"><i class="fa-brands fa-facebook-f"></i></a>
					<a href="#" class="text-white d-inline-block text-center twitter mx-1"><i class="fa-brands fa-twitter"></i></a>
					<a href="#" class="text-white d-inline-block text-center ins mx-1"><i class="fa-brands fa-instagram"></i></a>
					<a href="#" class="text-white d-inline-block text-center youtube mx-1"><i class="fa-brands fa-youtube"></i></a>
				</div>
			</div>
		</div>
		<div class="col-12 text-uppercase d-none d-md-flex align-items-center justify-content-center mb-4">
			<img src="public/demo/icon-home.webp" width="30" height="28" class="me-2" alt="BeanHotel Location">
			<span class="fw-600">Hệ thống chi nhánh</span>
		</div>
		<div class="col-12 d-none d-md-flex flex-wrap justify-content-center footer__locationWrapper">
			<div class="col-4 px-10">
				<div class="footer__location position-relative">
					<p class="mb-2">Hotel HCM : 772 Điện Biên Phủ, Phường 1, Bình Thạnh</p>
					<p class="mb-3">
						Hotline:
						<a href="tel:0982847974" class="text-decoration-none text-white">0982.847.974</a>
					</p>
					<div class="footer__iconLocation position-absolute">
						<i class="fa-solid fa-location-dot d-inline-block text-center"></i>
					</div>
				</div>
			</div>
			<div class="col-4 px-10">
				<div class="footer__location position-relative">
					<p class="mb-2">Hotel Đà Lạt : 94 Hoàng Hoa Thám, Phường 10</p>
					<p class="mb-3">
						Hotline:
						<a href="tel:0263306997 " class="text-decoration-none text-white">0263.306.997 </a>
					</p>
					<div class="footer__iconLocation position-absolute">
						<i class="fa-solid fa-location-dot d-inline-block text-center"></i>
					</div>
				</div>
			</div>
			<div class="col-4 px-10">
				<div class="footer__location position-relative">
					<p class="mb-2">Hotel Nha Trang : 02 Phạm Văn Đồng, Phường Vĩnh Phước</p>
					<p class="mb-3">
						Hotline:
						<a href="tel:0903307497 " class="text-decoration-none text-white">0903.307.497 </a>
					</p>
					<div class="footer__iconLocation position-absolute">
						<i class="fa-solid fa-location-dot d-inline-block text-center"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 d-none d-md-flex flex-wrap justify-content-center footer__locationWrapper mb-5">
			<div class="col-4 px-10">
				<div class="footer__location position-relative">
					<p class="mb-2">Hotel Phú Quốc : 147 Trần Hưng Đạo, Dương Đông</p>
					<p class="mb-3">
						Hotline:
						<a href="tel:0903307447 " class="text-decoration-none text-white">0903.307.447</a>
					</p>
					<div class="footer__iconLocation position-absolute">
						<i class="fa-solid fa-location-dot d-inline-block text-center"></i>
					</div>
				</div>
			</div>
			<div class="col-4 px-10">
				<div class="footer__location position-relative">
					<p class="mb-2">Hotel ĐăkLăk : 38 Huỳnh Thúc Kháng, Phường Tân Lợi</p>
					<p class="mb-3">
						Hotline:
						<a href="tel:0903307448" class="text-decoration-none text-white">0903.307.448</a>
					</p>
					<div class="footer__iconLocation position-absolute">
						<i class="fa-solid fa-location-dot d-inline-block text-center"></i>
					</div>
				</div>
			</div>
			<div class="col-4 px-10">
				<div class="footer__location position-relative">
					<p class="mb-2">Hotel Hà Nội : 266 Đội Cấn, Ba Đình</p>
					<p class="mb-3">
						Hotline:
						<a href="tel:0903307449" class="text-decoration-none text-white">0903.307.449</a>
					</p>
					<div class="footer__iconLocation position-absolute">
						<i class="fa-solid fa-location-dot d-inline-block text-center"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 d-flex flex-wrap justify-content-md-center">
			<div class="col-md-6 col-lg-3 px-10">
				<img src="public/demo/logo_foo.webp" class="mb-4" alt="BeanHotel Logo">
				<p>
					Nằm ở trung tâm thành phố và nhiều thành phố khác. Chúng tôi cung cấp chỗ nghỉ thanh lịch và đầy phong cách với truy cập Wifi miễn phí trong các khu vực chung. Khách sạn có lễ tân 24 giờ, hồ bơi trong nhà, trung tâm thể dục và bãi đỗ xe miễn phí trong khuôn viên.
				</p>
			</div>
			<div class="col-md-6 col-lg-4 d-none d-md-block px-10 footer__blog">
				<p class="text-uppercase fw-600 mb-3">Bài viết mới</p>
				<div class="footer__blogItem">
					<a href="#" class="d-block text-decoration-none text-white mb-1">
						10 xu hướng thịnh hành trong ngành khách sạn 2022
					</a>
					<span class="fst-italic">Ngày đăng 06/12/2022</span>
				</div>
				<div class="footer__blogItem">
					<a href="#" class="d-block text-decoration-none text-white mb-1">
						Những điều kiêng kị khi ở khách sạn mà bạn nên biết
					</a>
					<span class="fst-italic">Ngày đăng 06/12/2022</span>
				</div>
				<div class="footer__blogItem">
					<a href="#" class="d-block text-decoration-none text-white mb-1">
						Ý nghĩa việc khách sạn để chocolate lên gối khi dọn phòng
					</a>
					<span class="fst-italic">Ngày đăng 06/12/2022</span>
				</div>
			</div>
			<div class="col-12 d-block d-md-none px-10">
				<li class="dropdown list-unstyled">
					<a href="#123" class="nav-link fw-500 text-black p-0 d-flex justify-content-between text-white">
						<span class="text-uppercase fw-600 mb-3">Bài viết mới</span>
						<i class="open_mnu toggle-icon current"></i>
					</a>
				</li>
				<li class="dropdown list-unstyled">
					<a href="#123" class="nav-link fw-500 text-black p-0 d-flex justify-content-between text-white" >
						<span class="text-uppercase fw-600 mb-3">Chính sách</span>
						<i class="open_mnu toggle-icon current"></i>
					</a>
				</li>
			</div>
			<div class="col-md-4 col-lg-2 d-none d-md-block px-10">
				<p class="text-uppercase fw-600 mb-3">Chính sách</p>
				<a href="#" class="d-block text-decoration-none text-white mb-1">Chính sách nhận phòng</a>
				<a href="#" class="d-block text-decoration-none text-white mb-1">Chính sách trả phòng</a>
				<a href="#" class="d-block text-decoration-none text-white mb-1">Chính sách thanh toán</a>
				<a href="#" class="d-block text-decoration-none text-white mb-1">Chính sách bảo mật</a>
			</div>
			<div class="col-md-8 col-lg-3 px-10">
				<p class="text-uppercase fw-600 mb-3">Hình thức thanh toán</p>
				<img src="public/demo/icon_check_out.webp" class="img-fluid" alt="BeanHotel Payment">
			</div>
		</div>
		<div class="col-12 text-center py-10 mt-4 mt-md-0">
			<span>© Bản quyền thuộc về</span>
			<strong>Mr.Bean </strong>
			<span>| Cung cấp bởi</span>
			<a href="#" class="text-decoration-none text-white">Sapo</a>
		</div>
	</div>
</div>
<!-------------------------------------- END HEADER --------------------------------------->
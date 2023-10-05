<style type="text/css">
	/*MOBILE*/
	.header {
		background-color: var(--clr-primary);
		padding-top: 5px;
		padding-bottom: 5px;
		line-height: 1.7;
	}

	.header__btnBooking {
		top: -4px;
		right: 0;
		width: 105px;
		height: 113px;
		background-color: var(--clr-secondary);
		padding-top:20px;
		z-index: 1;
	}

	.header__btnBooking:hover {
		box-shadow: 0 0 5px var(--clr-dropdown-link);
	}

	.header__navigate > a {
		padding-left: 15px;
		padding-right: 15px;
	}

	.header__navigate > a:hover {
		color: var(--clr-primary-opacity) !important;
	}

	.header__navigate .header__search-toggle {
		padding-right: 0;
	}

	.header__search-toggle.show {
		color: var(--clr-primary-opacity) !important;
	}

	.header__search-toggle.show .close-svg {
		display: inline-block !important;
	}

	.header__search-toggle.show .open-svg {
		display: none;
	}

	.header__search {
		right: 0;
		top: calc(100% + 5px);
		background-color: var(--clr-white);
		width: 100%;
		height: 0;
		overflow: hidden;
		transition: all 0.6s ease;
	}
	
	.header__search.show {
    	position: absolute;
    	padding: 20px 30px;
    	border: 1px solid var(--clr-border);
    	border-top: 0;
		z-index: 10;
		height: auto;
		transition: all 0.6s ease;
	}

	.header__search .search-inputGroup input {
		font-size: 14px;
	    color: var(--clr-navlink);
		padding-right: 110px;
		padding-left: 15px;
	    border-bottom: 1px solid var(--clr-primary) !important;
	    box-shadow: none;
	}

	.header__search .search-button {
	    height: 40px;
	    line-height: 39px;
	    padding: 0 20px;
	    background-color: var(--clr-white);
	    border-bottom: 1px solid var(--clr-primary) !important;
	}

	.title-keyword {
	    color: var(--clr-primary);
	}

	.keyword-popular ul li {
	    margin: 12px 4px;
	}

	.keyword-popular ul li a {
		color: var(--clr-gray-dark);
	    border: 1px solid var(--clr-gray-dark);
	    border-radius: 30px;
	    padding: 8px 30px;
	}

	.keyword-popular ul li:hover a {
		border-color: var(--clr-primary);
		color: var(--clr-primary);
	}

	.logo {
		height: 67px;
	    line-height: 67px;
	    padding-top: 4px;
	    padding-bottom: 4px;
	}

	.logo a {
		max-width: 150px;
		width: 150px;
	}

	.navigation__mobile .cart-quantity {
	    position: absolute;
	    right: -12px;
	    top: -9px;
	    width: 20px;
	    line-height: 20px;
	    background-color: var(--clr-primary);
	    border-radius: 50%;
	}

	.offcanvas.show {
		visibility: visible;
	}

	.offcanvas-body ul li {
		line-height: 35px;
	}

	.offcanvas-body a {
		font-size: 15px;
	}

	.offcanvas-body li.dropdown > a[aria-expanded="true"] {
		color: var(--clr-primary) !important;
	}

	.offcanvas-body li.dropdown ul li a {
		font-size: 14px;
		color: var(--clr-navlink);
	}

	.offcanvas-body .dropdown-menu.show {
		transform: unset !important
	}

	.offcanvas-header button {
		color: var(--clr-gray);
	}

	.offcanvas-header button:hover, .offcanvas-header button:focus{
		color: var(--clr-primary);
	}

	 .toggle-icon {
		width: 30px;
	    height: 35px;
	    top: 0;
	    right: 0;
	    transition: all 0.3s ease;
	}

	 .toggle-icon::before, .toggle-icon::after {
		position: absolute;
	    content: '';
	    top: 50%;
	    left: 50%;
	    transform: translate(-50%, -50%) rotate(-90deg);
	    background-color: currentColor;
        transition: transform 0.3s ease;
	}

	 .toggle-icon::before {
		width: 11px;
	    height: 1.5px;
	    opacity: 1;
	}

	 .toggle-icon::after {
		width: 1.5px;
	    height: 11px;
	}

	 li.dropdown > a[aria-expanded="true"] .toggle-icon::before {
		opacity: 0;
	}

	 li.dropdown > a[aria-expanded="true"] .toggle-icon::after{
		transform: translate(-50%, -50%) rotate(90deg);
	}

	/*PC*/
	.navigation__desktop .nav-item {
		line-height: 40px;
	}

	.navigation__desktop .nav-item:hover .nav-link {
		color: var(--clr-primary);
	}

	.navigation__desktop .nav-link {
		font-size: 15px;
	    padding: 7px 8px;
	    color: var(--clr-navlink);
	}

	.navigation__desktop .nav-link i {
		font-size: 10px;
		margin-bottom: 3px;
		margin-left: 3px;
	}

	.navigation__desktop .nav-item.dropdownItem .dropdown-menu {
		box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.1);
	    background-color: var(--clr-white);
	    top: 67px;
	    width: 250px;
	    opacity: 0;
	    visibility: hidden;
	    transition: all 0.3s ease-in-out;
	}

	.navigation__desktop .nav-item.dropdownItem .dropdown-menu li a{
		font-size: 14px;
		line-height: 25px;
		padding: 5px 20px 5px 10px;
	    color: var(--clr-dropdown-link);
	    transition: all 0.2s ease;
	}

	.navigation__desktop .nav-item.dropdownItem .dropdown-menu li a::before {
		position: absolute;
	    content: '';
	    height: 0;
	    width: 2px;
	    left: 0;
	    top: 50%;
	    transform: translateY(-50%);
	    opacity: 0;
	    visibility: hidden;
	    transition: all 0.5s ease;
	}

	.navigation__desktop .nav-item.dropdownItem:hover .dropdown-menu {
		opacity: 1;
		visibility: visible;
	}

	.navigation__desktop .nav-item.dropdownItem .dropdown-menu li:hover {
		background-color: var(--clr-bg-navItem);
	}

	.navigation__desktop .nav-item.dropdownItem .dropdown-menu li:hover a {
		background-color: transparent;
    	color: var(--clr-primary);
	}

	.navigation__desktop .nav-item.dropdownItem .dropdown-menu li:hover a::before {
		height: 100%;
		background-color: var(--clr-primary);
		opacity: 1;
    	visibility: visible;
	}

	/*TABLET*/
	@media (min-width: 768px) {
		.header__navigate {
			padding-right: 100px;
		}

		.header__search {
			right: 105px;
		}

		.header__navigate .header__search-toggle {
			padding-right: 15px;
		}
	}
	
	/*PC*/
	@media (min-width: 1400px){
		.logo {
			height: 80px;
	    	line-height: 80px;
	    	padding-top: 10px;
	    	padding-bottom: 10px;
		}

		.navigation__desktop .nav-link {
		    padding: 7px 15px;
		}

		.navigation__desktop .nav-item.dropdownItem .dropdown-menu {
		    top: 80px;
		}
	}
</style>

<!------------------------------------- START HEADER -------------------------------------->
<div class="header row justify-content-center align-items-center position-relative text-white">
	<div class="max-width d-flex justify-content-end justify-content-lg-between">
		<div class="col-5 d-none d-md-block">Chào mừng bạn đến với Bean Hotel!</div>
		<div class="col-12 col-md-7 position-relative">
			<div class="header__navigate d-flex justify-content-end position-relative">
				<a href="?p=signup" class="position-relative text-decoration-none text-white">Đăng ký</a>
				<span>&nbsp;|&nbsp;</span>

				<a href="?p=signin" class="position-relative text-decoration-none text-white">Đăng nhập</a>
				<span>&nbsp;|&nbsp;</span>

				<a href="?p=cart" class="position-relative text-decoration-none text-white d-flex align-items-center d-none d-lg-inline-flex">
					<img src="public/demo/cart-add.svg" alt="Bean Hotel Cart" height="15" width="15">
					<span class="ps-1">Giỏ hàng (0)</span>
				</a>
				<span class="d-none d-lg-inline">&nbsp;|&nbsp;</span>

				<a class="header__search-toggle position-relative text-decoration-none text-white d-flex align-items-center cursor" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
					<!-- Icon Search -->
					<svg class="open-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" height="16" width="16" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <g> <g> <path fill="#fff" d="M141.367,116.518c-7.384-7.39-19.364-7.39-26.748,0c-27.416,27.416-40.891,65.608-36.975,104.79 c0.977,9.761,9.2,17.037,18.803,17.037c0.631,0,1.267-0.032,1.898-0.095c10.398-1.04,17.983-10.316,16.943-20.707 c-2.787-27.845,6.722-54.92,26.079-74.278C148.757,135.882,148.757,123.901,141.367,116.518z"></path> </g> </g> <g> <g> <path fill="#fff" d="M216.276,0C97.021,0,0,97.021,0,216.276s97.021,216.276,216.276,216.276s216.276-97.021,216.276-216.276 S335.53,0,216.276,0z M216.276,394.719c-98.396,0-178.443-80.047-178.443-178.443S117.88,37.833,216.276,37.833 c98.39,0,178.443,80.047,178.443,178.443S314.672,394.719,216.276,394.719z"></path> </g> </g> <g> <g> <path fill="#fff" d="M506.458,479.71L368.999,342.252c-7.39-7.39-19.358-7.39-26.748,0c-7.39,7.384-7.39,19.364,0,26.748L479.71,506.458 c3.695,3.695,8.531,5.542,13.374,5.542c4.843,0,9.679-1.847,13.374-5.542C513.847,499.074,513.847,487.094,506.458,479.71z"></path> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>

					<!-- Icon Close -->
					<svg class="close-svg d-none" version="1.1" xmlns="http://www.w3.org/2000/svg" height="16" width="16" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <g> <g> <path fill="#fff" d="M256,0C114.508,0,0,114.497,0,256c0,141.493,114.497,256,256,256c141.492,0,256-114.497,256-256 C512,114.507,397.503,0,256,0z M256,472c-119.384,0-216-96.607-216-216c0-119.385,96.607-216,216-216 c119.384,0,216,96.607,216,216C472,375.385,375.393,472,256,472z"></path> </g> </g> <g> <g> <path fill="#fff" d="M343.586,315.302L284.284,256l59.302-59.302c7.81-7.81,7.811-20.473,0.001-28.284c-7.812-7.811-20.475-7.81-28.284,0 L256,227.716l-59.303-59.302c-7.809-7.811-20.474-7.811-28.284,0c-7.81,7.811-7.81,20.474,0.001,28.284L227.716,256 l-59.302,59.302c-7.811,7.811-7.812,20.474-0.001,28.284c7.813,7.812,20.476,7.809,28.284,0L256,284.284l59.303,59.302 c7.808,7.81,20.473,7.811,28.284,0C351.398,335.775,351.397,323.112,343.586,315.302z"></path> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
					<span class="ps-1">Tìm kiếm</span>
				</a>

				<!-- Offcanvas -->
				<div class="header__search position-absolute" data-bs-backdrop="false" id="offcanvasScrolling" >
					<form class="search-form mb-3">
						<div class="search-inputGroup d-flex position-relative">
							<input required="" type="text" id="keyPopular" aria-label="Nhập từ khóa tìm kiếm" class="search-auto form-control w-100 d-block border-0 rounded-0" placeholder="Nhập từ khóa tìm kiếm">
								<button class="search-button d-inline-block text-center cursor border-0" type="submit" aria-label="Tìm kiếm">
									<svg width="16" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <g> <g> <path fill="#cd9a2b" d="M141.367,116.518c-7.384-7.39-19.364-7.39-26.748,0c-27.416,27.416-40.891,65.608-36.975,104.79 c0.977,9.761,9.2,17.037,18.803,17.037c0.631,0,1.267-0.032,1.898-0.095c10.398-1.04,17.983-10.316,16.943-20.707 c-2.787-27.845,6.722-54.92,26.079-74.278C148.757,135.882,148.757,123.901,141.367,116.518z"></path> </g> </g> <g> <g> <path fill="#cd9a2b" d="M216.276,0C97.021,0,0,97.021,0,216.276s97.021,216.276,216.276,216.276s216.276-97.021,216.276-216.276 S335.53,0,216.276,0z M216.276,394.719c-98.396,0-178.443-80.047-178.443-178.443S117.88,37.833,216.276,37.833 c98.39,0,178.443,80.047,178.443,178.443S314.672,394.719,216.276,394.719z"></path> </g> </g> <g> <g> <path fill="#cd9a2b" d="M506.458,479.71L368.999,342.252c-7.39-7.39-19.358-7.39-26.748,0c-7.39,7.384-7.39,19.364,0,26.748L479.71,506.458 c3.695,3.695,8.531,5.542,13.374,5.542c4.843,0,9.679-1.847,13.374-5.542C513.847,499.074,513.847,487.094,506.458,479.71z"></path> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
								</button>
						</div>
					</form>
					<div class="keyword-popular text-center">
						<p class="title-keyword my-3 fs-20 fw-600">TỪ KHÓA PHỔ BIẾN</p>
						<ul class="list-unstyled">
							<li class="d-inline-block fw-500"><a href="#" class="text-decoration-none cursor" title="Phòng đơn">Phòng đơn</a></li>
							<li class="d-inline-block fw-500"><a href="#" class="text-decoration-none cursor" title="Phòng đôi">Phòng đôi</a></li>
							<li class="d-inline-block fw-500"><a href="#" class="text-decoration-none cursor" title="Phòng vip">Phòng vip</a></li>
							<li class="d-inline-block fw-500"><a href="#" class="text-decoration-none cursor" title="Hội nghị">Hội nghị</a></li>
							<li class="d-inline-block fw-500"><a href="#" class="text-decoration-none cursor" title="Dịch vụ spa">Dịch vụ spa</a></li>
							<li class="d-inline-block fw-500"><a href="#" class="text-decoration-none cursor" title="Ẩm thực khách sạn">Ẩm thực khách sạn</a></li>
						</ul>
					</div>
				</div>
			</div>

			<a href="?p=booking-room" class="header__btnBooking d-none d-lg-inline-block position-absolute text-decoration-none text-white text-center fw-600">
				<svg id="outline" height="40" viewBox="0 0 512 512" width="40" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" d="m256 16a80 80 0 1 0 80 80 80.09041 80.09041 0 0 0 -80-80zm0 144a64 64 0 1 1 64-64 64.07239 64.07239 0 0 1 -64 64z"></path><path fill="#fff" d="m277.65674 95.0293-5.73731-40.16114a7.99986 7.99986 0 0 0 -7.91943-6.86816h-16a7.99986 7.99986 0 0 0 -7.91943 6.86816l-5.73731 40.16114a21.877 21.877 0 0 0 38.18408 17.4277c.12952-.14941.25013-.30469.37525-.457h31.09741v-16h-26.2312c-.03174-.32373-.06592-.64722-.11206-.9707zm-17.2168 6.94433a5.87684 5.87684 0 0 1 -10.25781-4.68063l4.75635-33.293h2.123l4.75635 33.293a5.80992 5.80992 0 0 1 -1.37789 4.68063z"></path><path fill="#fff" d="m408 64h-56v16h56a8.00917 8.00917 0 0 1 8 8v384a8.00917 8.00917 0 0 1 -8 8h-304a8.00917 8.00917 0 0 1 -8-8v-384a8.00917 8.00917 0 0 1 8-8h56v-16h-56a24.02718 24.02718 0 0 0 -24 24v384a24.02718 24.02718 0 0 0 24 24h304a24.02718 24.02718 0 0 0 24-24v-384a24.02718 24.02718 0 0 0 -24-24z"></path><path fill="#fff" d="m384 400v-192a8.00008 8.00008 0 0 0 -8-8h-144a8.00008 8.00008 0 0 0 -8 8v40h-88a8.00008 8.00008 0 0 0 -8 8v192a8.00008 8.00008 0 0 0 8 8h96a8.00008 8.00008 0 0 0 8-8v-40h136a8.00008 8.00008 0 0 0 8-8zm-104-56h-40v-32h80v32zm-48 48h-88v-32h128v32zm-8-48h-32v-32h32zm-48 0h-32v-32h32zm192-48h-32v-32h32zm-32 16h32v32h-32zm32-64h-80v-32h80zm-128-32h32v32h-32zm40 48h40v32h-128v-32zm-136 0h32v32h-32zm0 144h32v32h-32zm80 32h-32v-32h32zm64-80h32v32h-32zm80 32h-32v-32h32z"></path><path fill="#fff" d="m152 216h16v16h-16z"></path><path fill="#fff" d="m192 216h16v16h-16z"></path><path fill="#fff" d="m256 424h16v16h-16z"></path><path fill="#fff" d="m296 424h16v16h-16z"></path><path fill="#fff" d="m336 424h16v16h-16z"></path></svg>
				<span class="d-block fs-6">Đặt phòng</span>
			</a>
		</div>
	</div>
</div>
<!-------------------------------------- END HEADER --------------------------------------->


<!--------------------------------------- START NAV --------------------------------------->
<!-- DESKTOP -->
<div class="navigation__desktop row justify-content-center position-relative d-none d-lg-flex">
	<div class="max-width d-flex align-items-center">
		<div class="col-2 logo d-flex align-items-center">
			<a href="#">
				<img src="public/demo/logo.webp" class="img-fluid" alt="BeanHotel Logo">
			</a>
		</div>
		<div class="col-9">
			<ul class="list-unstyled mb-0 ps-3">
				<li class="nav-item d-inline-block"><a href="#" class="nav-link fw-500">Trang chủ</a></li>
				<li class="nav-item d-inline-block"><a href="?p=about" class="nav-link fw-500">Về chúng tôi</a></li>
				<li class="nav-item d-inline-block dropdownItem">
					<a href="?p=room" class="nav-link fw-500">
						Phòng
						<i class="fa-solid fa-angle-down align-middle"></i>
					</a>
					<ul class="dropdown-menu py-0 d-block border-0 rounded-0">
			            <li class="mb-1"><a class="dropdown-item position-relative" href="?p=room-list">Phòng đơn</a></li>
			            <li class="mb-1"><a class="dropdown-item position-relative" href="?p=room-list">Phòng đôi</a></li>
			            <li><a class="dropdown-item position-relative" href="?p=room-list">Phòng vip</a></li>
	          		</ul>
				</li>
				<li class="nav-item d-inline-block dropdownItem">
					<a href="?p=food" class="nav-link fw-500">
						Ẩm thực
						<i class="fa-solid fa-angle-down align-middle"></i>
					</a>
					<ul class="dropdown-menu py-0 d-block border-0 rounded-0">
			            <li class="mb-1"><a class="dropdown-item position-relative" href="?p=food-list">Món ăn</a></li>
			            <li class="mb-1"><a class="dropdown-item position-relative" href="?p=food-list">Đồ uống</a></li>
			            <li><a class="dropdown-item position-relative" href="?p=food-list">Bánh ngọt</a></li>
	          		</ul>
				</li>
				<li class="nav-item d-inline-block"><a href="?p=services" class="nav-link fw-500">Dịch vụ</a>
				</li>
				<li class="nav-item d-inline-block"><a href="?p=library" class="nav-link fw-500">Thư viện ảnh</a></li>
				<li class="nav-item d-inline-block"><a href="?p=contact" class="nav-link fw-500">Liên hệ</a></li>
			</ul>
		</div>
	</div>
</div>

<!-- MOBILE -->
<div class="navigation__mobile row d-lg-none justify-content-betweent">
	<div class="col logo d-flex align-items-center">
		<a href="#">
			<img src="public/demo/logo.webp" class="img-fluid" alt="BeanHotel Logo">
		</a>
	</div>
	<div class="col d-flex justify-content-end align-items-center gap-4">
		<a href="#" class="d-inline-block position-relative">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="26" height="24" viewBox="0 0 475.084 475.085" style="enable-background:new 0 0 475.084 475.085;" xml:space="preserve"> <g> <g> <path d="M365.446,401.998c0,10.092,3.579,18.702,10.711,25.834c7.132,7.139,15.749,10.711,25.845,10.711 c10.081,0,18.698-3.572,25.83-10.711c7.139-7.132,10.711-15.742,10.711-25.834s-3.568-18.702-10.711-25.841 c-7.132-7.132-15.749-10.704-25.83-10.704c-10.096,0-18.713,3.572-25.845,10.704C369.025,383.296,365.446,391.906,365.446,401.998 z"></path> <path d="M469.658,78.51c-3.618-3.617-7.898-5.426-12.848-5.426H113.918c-0.193-1.331-0.621-3.756-1.287-7.277 c-0.666-3.523-1.188-6.329-1.569-8.425c-0.383-2.087-1.093-4.611-2.142-7.561c-1.047-2.952-2.284-5.286-3.711-6.995 c-1.425-1.718-3.328-3.189-5.708-4.43c-2.378-1.233-5.092-1.853-8.136-1.853H18.276c-4.952,0-9.234,1.812-12.85,5.424 C1.809,45.583,0,49.868,0,54.816s1.809,9.231,5.426,12.847c3.619,3.617,7.902,5.424,12.85,5.424h58.237l50.532,234.976 c-0.378,0.76-2.329,4.373-5.852,10.848c-3.521,6.475-6.328,12.135-8.42,16.988c-2.093,4.859-3.14,8.616-3.14,11.279 c0,4.948,1.809,9.232,5.424,12.854c3.621,3.606,7.902,5.421,12.851,5.421h18.272h255.815h18.261c4.948,0,9.232-1.814,12.847-5.421 c3.62-3.621,5.427-7.905,5.427-12.854c0-4.949-1.807-9.233-5.427-12.847c-3.614-3.614-7.898-5.428-12.847-5.428h-262.66 c4.57-9.138,6.854-15.222,6.854-18.268c0-1.909-0.238-4.004-0.715-6.283s-1.047-4.805-1.713-7.569 c-0.667-2.752-1.093-4.799-1.283-6.133l298.077-34.831c4.753-0.575,8.658-2.614,11.703-6.14c3.046-3.518,4.565-7.562,4.565-12.133 V91.363C475.082,86.415,473.278,82.132,469.658,78.51z"></path> <path d="M109.632,401.998c0,10.092,3.567,18.702,10.706,25.834c7.141,7.139,15.75,10.711,25.841,10.711 c10.085,0,18.699-3.572,25.835-10.711c7.139-7.132,10.71-15.742,10.71-25.834s-3.568-18.702-10.71-25.841 c-7.137-7.132-15.75-10.704-25.835-10.704c-10.09,0-18.704,3.572-25.841,10.704C113.203,383.296,109.632,391.906,109.632,401.998z "></path> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
			<span class="cart-quantity text-center text-white">0</span>
		</a>
		<button class="border-0 outline-0 bg-transparent" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
			<i class="fa-solid fa-bars fs-3"></i>
		</button>
	</div>
</div>
<!---------------------------------------- END NAV ---------------------------------------->


<!--------------------------------- START OFFCANVAS NAV ----------------------------------->
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
	<div class="offcanvas-header justify-content-end pb-0">
		<button type="button" class="border-0 bg-transparent shadow-none" data-bs-dismiss="offcanvas" aria-label="Close">
			<i class="fa-solid fa-xmark fs-4"></i>
		</button>
	</div>
	<div class="offcanvas-body p-0">
		<ul class="list-unstyled mb-0 ps-3">
			<li><a href="#" class="nav-link fw-500 text-black ps-3 pe-4 py-0">Trang chủ</a></li>
			<li><a href="?p=about" class="nav-link fw-500 text-black ps-3 pe-4 py-0">Về chúng tôi</a></li>
			<li class="dropdown">
				<a href="?p=room" class="nav-link fw-500 text-black ps-3 pe-4 py-0 d-flex justify-content-between" data-bs-toggle="dropdown" aria-expanded="false" id=offcanvasDropdown1>
					<span>Phòng</span>
					<i class="open_mnu toggle-icon current position-relative d-flex justify-content-center align-items-center cursor"></i>
				</a>
				<ul class="dropdown-menu py-0 ps-3 border-0 rounded-0 position-relative">
		            <li><a class="nav-link py-0" href="?p=room-list">Phòng đơn</a></li>
		            <li><a class="nav-link py-0" href="?p=room-list">Phòng đôi</a></li>
		            <li><a class="nav-link py-0" href="?p=room-list">Phòng vip</a></li>
		  		</ul>
			</li>
			<li class="dropdown">
				<a href="?p=food" class="nav-link fw-500 text-black ps-3 pe-4 py-0 d-flex justify-content-between" data-bs-toggle="dropdown" aria-expanded="false" id=offcanvasDropdown2>
					<span>Ẩm thực</span>
					<i class="open_mnu toggle-icon current position-relative d-flex justify-content-center align-items-center cursor"></i>
				</a>
				<ul class="dropdown-menu py-0 ps-3 border-0 rounded-0 position-relative" >
		            <li><a class="nav-link py-0" href="?p=food-list">Món ăn</a></li>
		            <li><a class="nav-link py-0" href="?p=food-list">Đồ uống</a></li>
		            <li><a class="nav-link py-0" href="?p=food-list">Bánh ngọt</a></li>
		  		</ul>
			</li>
			<li><a href="?p=services" class="nav-link fw-500 text-black ps-3 pe-4 py-0">Dịch vụ</a></li>
			<li><a href="?p=library" class="nav-link fw-500 text-black ps-3 pe-4 py-0">Thư viện ảnh</a></li>
			<li><a href="?p=contact" class="nav-link fw-500 text-black ps-3 pe-4 py-0">Liên hệ</a></li>
		</ul>
	</div>
</div>
<!---------------------------------- END OFFCANVAS NAV ------------------------------------>


<!-------------------------------------- JAVASCRIPT --------------------------------------->
<script type="text/javascript">
	const toggleSearchEl = document.querySelector(".header__search-toggle");
	toggleSearchEl.addEventListener("click", function () {
		toggleSearchEl.classList.toggle('show')
	})
</script>
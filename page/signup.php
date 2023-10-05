<style type="text/css">
	.auth__wrapper {
	    box-shadow: 0px 1px 69.16px 6.84px rgba(20,64,51,0.05);
	    border-radius: 10px;
	}

	.auth__title {
		font-size: 26px;
		color: var(--clr-primary);
		padding-bottom: 20px;
	}

	.auth__title::before, .auth__title::after {
		content: "";
		position: absolute;
		height: 5px;
		left: 0;
	    right: 0;
	    bottom: 0;
	    margin: 0 auto;
	    border-radius: 3px;
	}
	
	.auth__title::before {
	    background-color: var(--clr-primary);
	    width: 50px;
	    z-index: 1;
	}

	.auth__title::after {
	 	background-color: var(--clr-signin-gray);
    	width: 100%;
	}

	.auth__wrapper input {
		height: 45px;
		line-height: 45px;
	    padding-left: 20px;
	    padding-right: 20px;
    	border: 1px solid var(--clr-border-filterGroup);
	}

	.auth__wrapper button {
		height: 45px;
		line-height: 42px;
		font-size: 12px;
    	border-radius: 4px;    
	}

	.auth__wrapper button:hover {
		background-color: var(--clr-white);
		border-color: var(--clr-primary);
		color: var(--clr-primary) !important;
	}

	.auth__actions .redirect-signin {
		color: var(--clr-primary) !important;
	}

	.auth__actions .redirect-signin:hover {
		color: inherit !important;
	}
</style>

<!---------------------------------- START BREADCRUMS ----------------------------------->
<div class="breadcrumb__wrapper row justify-content-center">
	<div class="max-width d-flex flex-wrap align-items-center">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
		  <ol class="breadcrumb mb-0">
		    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Trang chủ</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Đăng ký tài khoản</li>
		  </ol>
		</nav>
	</div>
</div>
<!----------------------------------- END BREADCRUMS ------------------------------------>


<!------------------------------------ START SIGNUP ------------------------------------->
<div class="row align-items-center justify-content-center pt-4 pb-5">
	<div class="max-width d-flex flex-wrap justify-content-center align-items-center px-45">
		<div class="col-12 col-md-4">
			<div class="auth__wrapper px-10 py-10">
				<div class="text-center">
					<h1 class="auth__title text-uppercase mb-3 fw-500 position-relative d-inline-block"><span>Đăng ký</span></h1>
				</div>
				<div class="auth__actions mb-3 text-center">
					Đã có tài khoản, đăng nhập		
					<a href="?p=signin" class="redirect-signin text-decoration-none">tại đây</a>
				</div>
				<form>
					<div class="mb-3">
						<input type="text" class="w-100" value="" name="surname" id="customer_surname" placeholder="Họ" required>
					</div>
					<div class="mb-3">
						<input type="text" class="w-100" value="" name="firstName" id="customer_firstName" placeholder="Tên" required>
					</div>
					<div class="mb-3">
						<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" class="w-100" value="" name="email" id="customer_email" placeholder="Email" required>
					</div>
					<div class="mb-3">
						<input type="number" class="w-100" value="" name="phone" id="customer_phone" placeholder="Số điện thoại" required>
					</div>
					<div class="mb-3">
						<input type="password" class="w-100" value="" name="password" id="customer_password" placeholder="Mật khẩu" required>
					</div>
					<button class="btnCustom text-white w-100 text-uppercase mb-3">Đăng ký</button>
				</form>
				<div class="mb-4">
					<div class="text-center mb-4"><span>hoặc đăng nhập bằng</span></div>
					<div class="d-flex flex-wrap justify-content-center">
						<a href="#" class="col-6 text-end px-10">
							<img src="public/demo/fb-btn.svg" width="130" alt="BeanHotel Facebook Signin">
						</a>
						<a href="#" class="col-6 px-10">
							<img src="public/demo/gp-btn.svg" width="130" alt="BeanHotel Google Signin">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!------------------------------------- END SIGNUP -------------------------------------->
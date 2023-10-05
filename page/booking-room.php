<style type="text/css">
	.booking__banner img{
		border-radius: 10px;
	}

	.booking__form form {
	    padding: 26px 15px;
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

	.booking__form button:hover {
		background-color: var(--clr-white);
	    border: 1px solid var(--clr-primary);
	    color: var(--clr-primary) !important;
	}
</style>

<!---------------------------------- START BREADCRUMS ----------------------------------->
<div class="breadcrumb__wrapper row justify-content-center">
	<div class="max-width d-flex flex-wrap align-items-center">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
		  <ol class="breadcrumb mb-0">
		    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Trang chủ</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Đặt phòng</li>
		  </ol>
		</nav>
	</div>
</div>
<!----------------------------------- END BREADCRUMS ------------------------------------>


<!------------------------------------ START BOOKING ------------------------------------>
<div class="row justify-content-center py-4">
	<div class="max-width d-flex flex-wrap justify-content-center align-items-center px-0">
		<div class="col-12">
			<h2 class="title text-center">
				<a href="?p=booking-room" class="text-decoration-none">Đặt phòng</a>
			</h2>
		</div>
		<div class="col-12 d-flex flex-wrap align-items-center align-items-stretch">
			<div class="booking__banner col-12 col-lg-6 px-10 position-relative mb-3 mb-lg-0">
				<img src="public/demo/banner_booking.webp" class="img-fluid d-inline-block w-100 h-100">
				<div class="booking__banner-desc position-absolute text-white d-flex justify-content-center align-items-center text-center">
					<p>
						Để lại thông tin đặt phòng và chúng tôi sẽ liên hệ bạn sớm nhất có thể. Cảm ơn bạn đã tin tưởng chúng tôi.<br>
						Bean Hotel trân trọng!
					</p>
				</div>
			</div>
			<div class="booking__form col-12 col-lg-6 px-10">
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
							<label class="d-block w-100 mb-2" for="nameRoom">Chọn phòng</label>
							<select id="nameRoom" name="nameRoom" class="mb-2 w-100 border-0">
								<option value="Phòng đơn tiêu chuẩn">Phòng đơn tiêu chuẩn</option>
								<option value="Phòng đơn view thành phố">Phòng đơn view thành phố</option>
								<option value="Phòng đôi tiêu chuẩn">Phòng đôi tiêu chuẩn</option>
								<option value="Phòng đôi nối liền">Phòng đôi nối liền</option>
								<option value="Phòng vip">Phòng vip</option>
								<option value="Phòng gia đình">Phòng gia đình</option>
								<option value="Phòng hạng sang">Phòng hạng sang</option>
							</select>
						</div>
						<div class="col-12 mt-2 px-10">
							<button type="submit" class="btnCustom text-white w-100">Ðặt phòng</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!------------------------------------ END BOOKING -------------------------------------->
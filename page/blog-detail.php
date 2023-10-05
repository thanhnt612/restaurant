<?php 
    class BlogTop
    {
        function __construct($title, $text, $author, $image, $postDate){
                $this->title=$title;
                $this->text=$text;
                $this->author=$author;
                $this->image=$image;
                $this->postDate=$postDate;
		}
   	}

	$dataBlogTop = array(
	    array('10 xu hướng thịnh hành trong ngành khách sạn 2022','','By Bean Hotel','tintuc1.webp','06/12/2022'),
	    array('Nghỉ dưỡng kết hợp massage thư giãn với đá nóng','','By Bean Hotel','beauty1.webp','06/12/2022'),
	    array('Tắm trắng và kết hợp dưỡng da toàn thân','','By Bean Hotel','beauty2.webp','06/12/2022'),
	    array('Massage body toàn thân bằng tinh dầu và hơi nước','','By Bean Hotel','beauty3.webp','06/12/2022'),
	    array('Tẩy da chết toàn thân bằng tinh chất cám gạo, ngũ cốc','','By Bean Hotel','beauty4.webp','06/12/2022')
	);

	$blogTop = array();
	foreach($dataBlogTop as $key => $value){
	    array_push($blogTop,new BlogTop($value[0],$value[1],$value[2],$value[3],$value[4]));
	}
?>

<style type="text/css">
	.blogTop__left {
		top: 8px;
		align-self: baseline;
	}

	.blogDetail__blogs, .blogDetail__tags, .blogDetail__menu {
		border-radius: 10px;
    	border: 1px solid var(--clr-bg-grayLight);
    	padding: 10px 15px;
    	box-shadow: 0 1px 2px rgba(0,0,0,0.08);
    	margin-bottom: 20px;
	}

	.blogDetail__menu {
		background-color: var(--clr-bg-filterGroup);
		border-radius: 5px;
	}

	.blogDetail__menu h3, .blogDetail__blogs h3, .blogDetail__tags h3 {
		font-size: 14px;
	    margin-bottom: 8px;
	}

	.blogDetail__menu .nav-link {
		font-size: 14px;
		color: #323c42 !important;
	}

	.blogDetail__menu .nav-link:hover {
		color: var(--clr-primary) !important;
	}

	.blogDetail__menu .dropdown-menu {
		transform: unset !important;
	}

	.blogDetail__tags h3, .blogDetail__blogs h3 {
		padding-bottom: 5px;
		border-bottom: 1px solid var(--clr-blog-border);
	}

	.blogDetail__tags span {
	    padding: 3px 10px;
	    margin: 3px;
	    border: 1px solid var(--clr-border-btnAdd);
	    border-radius: 3px;
	    transition: all 0.3s ease;
	}

	.blogDetail__tags span:hover {
		background-color: var(--clr-primary);
		border-color: var(--clr-primary);
		color: var(--clr-white);
	}

	/*ARTICLE*/
	.article-title {
	    font-size: 26px;
	    color: var(--clr-navlink);
	    line-height: 34px;
	}

	.article-postTime {
		color: var(--clr-postTime);
	}

	.blogDetail__article .social-sharing {
	    padding-top: 20px;
	    padding-bottom: 20px;
	    margin-bottom: 10px;
	    border-top: solid 1px var(--clr-blog-border2);
	    border-bottom: 1px solid var(--clr-blog-border2);
	}

	.blogDetail__article h3 {
		font-size: 16px;
		color: var(--clr-navlink);
    	margin-bottom: 5px;
	}

	.blogDetail__article input {
		height: 40px;
    	border: solid 1px var(--clr-blog-border2);
	}

	.blogDetail__article textarea {
		border: 1px solid var(--clr-border-footer);
		padding-top: 5px;
		padding-bottom: 5px;
		padding-right: 110px;
	}

	.blogDetail__article textarea:focus, .blogDetail__article textarea:active {
		outline: 0;
	}

	.blogDetail__article button {
	    height: 40px;
    	line-height: 38px;
    	padding-left: 25px;
    	padding-right: 25px;
		margin-top: 10px;
    	font-size: 12px;
    	border-radius: 6px;
	}

	.blogDetail__article .social-item {
		padding: 3px 12px;
		font-size: 10px;
	}

	.blogDetail__article .social-item.facebook {
		background-color: var(--clr-facebook);
	}

	.blogDetail__article .social-item.twitter {
		background-color: var(--clr-twitter);
	}

	/*BLOG TOP*/
	.blogTop > div {
        border-bottom: 1px solid var(--clr-border-gray1);
    }

    .blogTop__desc .price{
        font-size: 14px;
    }

    .blogTop__desc a {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
    }

    .blogTop__desc a:hover {
        color: var(--clr-primary) !important;
    }

    .blogTop__desc span {
    	font-size: 13px;
    }
</style>

<!---------------------------------- START BREADCRUMS ----------------------------------->
<div class="breadcrumb__wrapper row justify-content-center">
	<div class="max-width d-flex flex-wrap align-items-center">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="px-10">
		  <ol class="breadcrumb mb-0">
		    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Trang chủ</a></li>
		    <li class="breadcrumb-item"><a href="?p=services" class="text-decoration-none">Hội nghị - cưới hỏi</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Tổ chức tiệc cưới - kết nối nhân duyên</li>
		  </ol>
		</nav>
	</div>
</div>
<!----------------------------------- END BREADCRUMS ------------------------------------>


<!-------------------------------- START SERVICES DETAIL -------------------------------->
<div class="row justify-content-center py-4">
	<div class="max-width d-flex flex-wrap justify-content-center">
		<div class="col-3 px-10 blogTop__left position-sticky">
			<div class="blogDetail__menu">
				<h3>Danh mục</h3>
				<ul class="list-unstyled mb-0">
					<li><a href="#" class="nav-link py-2 px-0">Trang chủ</a></li>
					<li><a href="?p=about" class="nav-link py-2 px-0">Về chúng tôi</a></li>
					<li class="dropdown">
						<a href="?p=room" class="nav-link px-0 py-2 position-relative" data-bs-toggle="dropdown" aria-expanded="false" id=offcanvasDropdown1>
							<span>Phòng</span>
							<i class="open_mnu toggle-icon current position-absolute"></i>
						</a>
						<ul class="dropdown-menu py-0 border-0 rounded-0 position-relative bg-transparent">
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
						<ul class="dropdown-menu py-0 border-0 rounded-0 position-relative bg-transparent">
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
			<div class="blogDetail__tags">
				<h3 class="text-uppercase fw-bold">Tags</h3>
				<span class="d-inline-block cursor">Hội nghị</span>
				<span class="d-inline-block cursor">Hội thảo</span>
				<span class="d-inline-block cursor">Ngoài trời</span>
				<span class="d-inline-block cursor">Tiệc cưới</span>
			</div>
			<div class="blogDetail__blogs">
				<h3 class="text-uppercase fw-bold">Tin tức nổi bật</h3>
				<!-- Blog Top List -->
				<div class="blogTop d-flex flex-wrap justify-content-center">
					<?php
					    foreach ($blogTop as $key => $value) {                
					?>
						<div class="col-12 d-flex flex-wrap pb-2 mb-2">
					        <a href="?p=blog-detail" class="col-4">
					            <img class="img-fluid h-100" src="public/demo/<?php echo $value->image ?>" alt="BeanHotel News">
					        </a>
					        <div class="blogTop__desc col-8 ps-2">
					            <a href="?p=blog-detail" class="text-decoration-none fw-500"><?php echo $value->title ?></a>
					            <span class="fst-italic"><?php echo $value->postDate ?></span>
					        </div>
					    </div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="blogDetail__article col-9 px-10">
			<h1 class="article-title fw-bold mb-3">10 xu hướng thịnh hành trong ngành khách sạn 2022</h1>
			<div class="d-flex flex-wrap gap-3 article-postTime mb-3">
				<div class="d-flex align-items-center">
					<svg class="me-2" aria-hidden="true" focusable="false" data-prefix="fal" width="15" height="15" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-clock fa-w-16"><path fill="#acacac" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path></svg>
					
					Thứ Ba,
					06/12/2022
				</div>
				<div class="d-flex align-items-center">
					<svg class="me-2" aria-hidden="true" focusable="false" data-prefix="fas" width="15" height="15" data-icon="user" role="img"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-user fa-w-14"><path fill="#acacac" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z" class=""></path></svg>
					<span>Bean Hotel</span>
				</div>
			</div>
			<div>
				<p>Không gian ngoài trời mở rộng hơn, nâng cấp công nghệ để hạn chế tối đa tiếp xúc là những xu hướng mới nhiều khách sạn áp dụng.</p>
				<p>Dưới đây là một số xu hướng trong khách sạn mà du khách có thể bắt gặp trong năm 2021, theo các dữ liệu và phân tích từ GlobalData.</p>
				<p>Vấn đề vệ sinh luôn đặt lên hàng đầu</p>
				<p>
					Ngành khách sạn đã nhanh chóng thực hiện các quy trình an toàn và vệ sinh chuyên sâu trong đại dịch. Năm 2022, các cơ sở lưu trú trên toàn thế giới có thể tiếp tục xây dựng và cải thiện các chương trình vệ sinh, nhằm hạn chế tối đa sự lây lan của dịch bệnh, thu hút khách đặt phòng.
				</p>
				<div>
					<img src="public/demo/anh-tt1.webp" alt="BeanHotel Article">
				</div>
				<p><strong>Khách thuê phòng dài ngày hơn</strong></p>
				<p>
					Nhiều khách sạn, khu nghỉ dưỡng đã giới thiệu các chương trình, gói lưu trú kéo dài vào năm 2021 và xu hướng đó sẽ tiếp tục trong năm nay. Lý do là đại dịch vẫn diễn biến phức tạp, du khách có xu hướng lưu trú tại một nơi dài ngày hơn.
				</p>
				<p>
					Nhà phân tích du lịch và lữ hành Ralph Hollister của GlobalData cho biết du khách có thể ít đi du lịch hơn nhưng họ sẽ lưu trú lâu hơn. Sự phức tạp của dịch bệnh sẽ khiến nhiều người dốc toàn lực để đầu tư một chuyến đi lớn, thay vì mạo hiểm với những chuyến đi nhỏ lẻ, có thể bị hủy bỏ.
				</p>
				<p><strong>Phòng khách sạn tạo điều kiện thuận lợi cho người làm từ xa</strong></p>
				<p>
					Khi du lịch dài ngày hơn, du khách cũng không muốn công việc bị ảnh hưởng. Đó là lý do họ sẽ vừa nghỉ dưỡng, vừa làm việc từ xa. Do đó, một căn phòng khách hàng cần là nơi vừa có thể làm việc thoải mái, vừa tận hưởng những giây phút thư giãn riêng tư. Wi-Fi trong phòng nhanh cũng là một điểm cộng, và đôi khi có thể là yếu tố quyết định đối với nhiều du khách muốn du lịch công vụ trong năm 2022.
				</p>
				<p><strong>Tăng cường áp dụng công nghệ</strong></p>
				<p>
					Khách sạn giống như sân bay, nhà hàng... đều là những nơi có nhiều người qua lại. Do đó, nâng cao và áp dụng triệt để công nghệ, hạn chế tiếp xúc là mục tiêu chính của ngành du lịch của năm nay. Thay vì thanh toán trực tiếp, du khách có thể trả tiền phòng qua các ứng dụng di động, mã QR... để giảm nguy cơ lây nhiễm virus.
				</p>
				<p>
					"Trong năm 2022, các khách sạn sẽ tăng cường áp dụng công nghệ để giảm tiếp xúc. Những điều sẽ dần phổ biến hơn phải kể đến việc khách hàng có thể check-in và check-out trực tuyến, mở cửa phòng bằng chìa khóa trên điện thoại, điều khiển các thiết bị trong phòng bằng công nghệ IoT... Sử dụng IoT còn cho phép khách sạn thu thập thêm dữ liệu về khách hàng, từ đó cá nhân hóa trải nghiệm cho khách hàng khi họ trở lại", Hollister nhận định.
				</p>
				<p><strong>Phục vụ ẩm thực không tiếp xúc</strong></p>
				<p>
					Giảm tiếp xúc bằng công nghệ có nghĩa là hạn chế tiếp xúc giữa người với người trong cả dịch vụ ăn uống. Những giải pháp khách sạn đưa ra là tùy chọn cho khách mua đồ ăn mang đi tại sảnh, nhân viên đặt bữa ăn ở cửa phòng khách hoặc đặt món qua điện thoại bằng mã QR.
				</p>
				<p><strong>Chính sách hoàn, hủy linh hoạt</strong></p>
				<p>Những khách sạn có chính sách hoàn tiền đặt phòng 100% khi khách hủy vào phút chót, cùng với các chính sách giảm thiểu rủi ro khác sẽ được đa số lựa chọn.</p>
				<p>Khách hàng yêu thích những nơi riêng tư</p>
				<p>
					Khách du lịch sẽ tìm kiếm không gian riêng tư nhiều hơn trong năm nay. Do đó, dịch vụ thuê phòng ngắn hạn thông qua các ứng dụng như Airbnb, Vrbo... cũng như các kỳ nghỉ tại một biệt thự riêng biệt sẽ được nhiều du khách hướng tới. Lý do là những nơi này mang tới không gian riêng tư nhiều hơn khách sạn, nhà nghỉ. Đây cũng là năm mà các cơ sở lưu trú, hàng quán ở những nơi hẻo lánh, xa xôi có cơ hội tiếp đón nhiều khách hàng hơn, bởi tại đây họ ít phải lo lắng về các lệnh hạn chế đi lại,
				</p>
				<p><strong>Không gian ngoài trời được ưu ái hơn</strong></p>
				<p>
					Du khách sẽ cảm thấy an toàn hơn khi dành thời gian ở ngoài trời so với không gian kín ở nơi công cộng. Do đó, các khách sạn sẽ tìm cách kết hợp nhiều hơn nữa không gian ngoài trời vào các trải nghiệm như tập yoga, cà phê, ăn uống, spa...
				</p>
				<div>
					<img src="public/demo/anh-2tt1.webp" alt="BeanHotel Article">
				</div>
				<p><strong>Phát triển du lịch bền vững</strong></p>
				<p>
					Các khu nghỉ dưỡng đã trở nên thân thiện với môi trường hơn sau thời gian dài vắng khách. Xu hướng đó có thể tiếp tục trong năm nay khi nhiều khách du lịch tìm cách hạn chế tác động của họ đến môi trường và văn hóa địa phương. Tiết kiệm nước, giảm thiểu chất thải, cũng như tìm nguồn cung ứng thực phẩm địa phương trong các quán bar, nhà hàng... vẫn là chiến lược của nhiều khách sạn muốn tạo sự khác biệt trong tương lai.
				</p>
				<p><strong>Khách du lịch chi tiêu nhiều hơn</strong></p>
				<p>
					Nhiều người sẽ phải đối mặt với ngân sách du lịch hạn chế, vì vậy các cơ sở lưu trú cần thu hút những khách hàng ở tầng lớp trung lưu. Họ là những người sẽ tìm kiếm mức giá thuê phòng thấp, nhưng cũng sẵn sàng chi tiêu nhiều hơn nếu chất lượng dịch vụ xứng đáng với số tiền họ bỏ ra.
				</p>
				<p>Nguồn: <em>Fox News</em></p>
			</div>
			<div class="social-sharing d-flex flex-wrap align-items-center">
				<span class="me-1">Chia sẻ:</span>
				<p class="social-item facebook d-inline-block mb-0 mx-1 text-white rounded-2 cursor">
					<i class="fa-solid fa-thumbs-up me-1"></i>
					<span>Thích 0</span>
				</p>
				<p class="social-item facebook d-inline-block mb-0 mx-1 text-white rounded-2 cursor">
					<i class="fa-brands fa-facebook me-1"></i>
					<span>Chia sẻ 0</span>
				</p>
				<p class="social-item twitter d-inline-block mb-0 mx-1 text-white rounded-3 cursor">
					<i class="fa-brands fa-twitter me-1"></i>
					<span>Twitter</span>
				</p>
			</div>
			<h3 class="pb-3 fw-500">Viết bình luận của bạn</h3>
			<form class="d-flex flex-wrap justify-content-center">
				<div class="col-12 col-md-6 pe-3">
					<input placeholder="Họ và tên" type="text" id="full-name" class="w-100 px-3 mb-3" name="Author" required>
				</div>
				<div class="col-12 col-md-6 ps-3">
					<input placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" class="w-100 px-3 mb-3" type="email" name="Email" required>
				</div>
				<div class="col-12">	
					<textarea placeholder="Nội dung" id="comment" name="Body" class="w-100 outline-0 ps-3" rows="6" required></textarea>
				</div>
				<div class="col-12">
					<button type="submit" class="btnCustom text-white text-uppercase fw-bold">Gửi thông tin</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--------------------------------- END SERVICES DETAIL --------------------------------->
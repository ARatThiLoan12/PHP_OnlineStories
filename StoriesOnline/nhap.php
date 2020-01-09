<?php
$db= new mysqli("localhost","root","","storiesonline");
$sql = "SELECT * FROM products";
$result = $db->query($sql)->fetch_all();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="CSS/sheetStyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body>
	<header>
		<div class="pos-f-t">
			<nav class="navbar navbar-dark bg-dark">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<h3 style="color: white">Đọc Truyện Online - Kho Truyện Của Loan</h3>
				<div id="login">
					<button class="btn"><a href="Login.php">  
						<i class="fas fa-sign-in-alt"></i>LogIn</a></button>
					<button class="btn">
						<a href="SignUp.php"><i class="far fa-user"></i>SignUp</a></button>
				</div>
			</nav>
		</div>
	</header>
	<div class="container">
	<p>Triệu Mặc Sênh lặng người nhìn cặp trai gái đứng trước quầy bán rau, một lần nữa chị cảm nhận sự lạ lùng của số phận. Bảy năm trước, chính họ khiến chị quyết định ra đi. Bây giờ họ lại cùng nhau đi mua sắm, vậy là cuối cùng họ vẫn cùng nhau! May mà hồi ấy chị bỏ ra đi, nếu không…Mặc Sênh không dám nghĩ thêm…</p>
	<p>Hà Dĩ Thâm, Hà Dĩ Văn, sao mình ngốc thế, tại sao cứ một mực cho rằng hai người ấy tên giống nhau thì nhất định là anh em?</p>
	<p>“Chúng tôi không phải là anh em, trước đây hai gia đình chúng tôi là hàng xóm của nhau, đều họ Hà cho nên cũng đặt tên cho các con giống nhau. Về sau, cha mẹ Dĩ Thâm đột ngột qua đời, cha mẹ tôi nhận nuôi Dĩ Thâm.”</p>
	<p>“Chị tưởng, chị mạnh hơn tình cảm hai mươi năm giữa tôi và Dĩ Thâm sao?”</p>
	<p>“Hôm nay tôi chính thức cho chị biết, tôi yêu Dĩ Thâm, nhưng tôi không muốn yêu thầm yêu vụng. Tôi và chị sẽ cạnh tranh công khai.”</p>
	<p>Năm19 tuổi, một ngày trước sinh nhật Mặc Sênh, cô bạn gái Hà Dĩ Văn vốn điềm đạm, bỗng nhiên thẳng thắn tuyên bố với chị. Một người dịu dàng, không bao giờ tranh giành với ai như Dĩ Văn mà quả quyết như vậy, chắc hẳn cô ấy phải yêu Dĩ Thâm nhiều lắm.</p>
	<p>Còn chị? Chị có gì để cạnh tranh với Dĩ Văn? Chính vào ngày Dĩ Văn tuyên chiến, chị đã thua, sau đó chị đã chạy trốn sang Mỹ suốt bảy năm trời.</p>
	<p>Ôi, Hà Dĩ Thâm” – Nghĩ đến ánh mắt lạnh lùng, những lời nói tuyệt tình của anh ta, Mặc Sênh thấy nhoi nhói trong lòng. Tuy cảm giác rất mơ hồ, khó nhận ra, nhưng chắc chắn là có thật.</p>
	<p>Anh đi về phía chị, bàn tay Mặc Sênh nắm chặt tay đẩy xe hàng đến mức các đầu khớp ngón tay trắng bệch, như sắp long ra. Nhưng siêu thị lúc đó quá đông, chị lại đang đẩy cái xe chứa hàng nên hoàn toàn không thể dễ dàng quay người bỏ chạy. Tuy nhiên ngay lập tức chị nghĩ, vì sao mình phải lẩn tránh? Mình nên bình thản nói với họ một câu đại loại: “Ồ, đã lâu không gặp.”</p>
	<p>Rồi kiêu hãnh quay đi, để lại cho họ một hình ảnh đẹp về mình mới phải.</p>
	<p>Nhưng, có thể họ không nhận ra mình. Có thể lắm chứ, mình đã thay đổi nhiều, mái tóc dài buông xõa năm xưa giờ biến thành mái tóc ngắn chấm tai, làn da trắng nõn ngày nào giờ đã sạm đi nhiều bởi cái nắng bang California, lại còn quần bò, áo phông rộng thùng thình, giày thể thao, khác xưa nhiều quá!</p>
	<p>Họ bước từng bước, chầm chậm tiến lại gần nhau, rồi… lướt qua nhau.</p>
	<p>Đau đớn quá!</p>
	<p>Hình như có tiếng nói vẳng lại.</p>
	<p>“Có cần mua thêm sữa không?” – Đúng là tiếng Dĩ Văn rồi, vẫn nhỏ nhẹ như xưa.</p>
	<p>Chị không nghe rõ câu trả lời. Nhớ quá, giọng nói trầm ấm như tiếng vĩ cầm của Dĩ Thâm luôn vẳng bên tai Mặc Sênh trong suốt bảy năm chị lưu lạc xứ người.</p>
	<p>Hẫng hụt, nhưng đồng thời cũng thấy nhẹ nhõm. Mặc Sênh ngẩng đầu nãy giờ vẫn cúi, quả quyết bước đi.</p>
</div>
	<div class="foot">
		<h5>Liên hệ: (+84) 911 475 691</h5>
		<p>Chúc bạn đọc truyện vui vẻ :)</p>
	</div>
</body>
</html>
<?php
include_once('Data.php');

$page = 0;
$MAX_PAGE = 1498;

if (isset($_GET['keyword'])) {
	$keyword = $_GET['keyword'];
} else if (isset($_GET['page']))
	$page = $_GET['page'];
else $keyword = null;

if (isset($keyword)) {
	if (is_numeric($keyword)) {
		// KEYWORD INPUTED IS NUMBER
		$page = $keyword;
	} else {
		// KEYWORD INPUTED IS A WORD
		$objectData = new Data();
		$row = $objectData->getRow($keyword);
		//var_dump($row);
		$string_page = $row['page'];
		$string_page = substr($string_page, 2, 4);
	}
}

if ($page > 0 && $page < 10) {
	$page = '000' . $page;
} else if ($page < 100) {
	$page = '00' . $page;
} else if ($page < 1000) {
	$page = '0' . $page;
}

if (isset($string_page)) {
	$page = $string_page;
}

if ($page > 0 && $page <= $MAX_PAGE) {
	$header = 'Đang hiển thị trang <span class="page">' . $page . '</span>';
	$title = 'Trang ' . $page;
} else if ($page == 0) {
	$imgurl = "http://vietnamtudien.org/chunom-trichdan/tdcntd-biatruoc.jpg";
	$title = 'Trang bìa';
	$header = 'Bắt đầu bằng cách nhập số trang hoặc từ khóa vào khung tìm kiếm và nhấn phím Enter';
} else {
	$header = 'Không tìm thấy trang';
	$title = 'Không tìm thấy trang';
	$imgurl = 'https://learn.getgrav.org/user/pages/11.troubleshooting/01.page-not-found/error-404.png';
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $title ?> - Tự Điển Chữ Nôm Trích Dẫn - Lookup Tool</title>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<link href="https://fonts.googleapis.com/css?family=Bungee+Shade&display=swap" rel="stylesheet">
	<script src="jquery-3.4.1.min.js"></script>
	<script src="scripts.js"></script>


</head>

<body>
	<div class="page-container">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">WebSiteName</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="#">Home</a>
					</li>
					<li>
						<a href="words">Search by words</a>
					</li>
					<li>
						<a href="about">About</a>
					</li>
				</ul>
				<form class="navbar-form navbar-left" method="get" action="index">
					<div class="form-group">
						<input name="keyword" type="text" class="form-control" placeholder="Input keyword or page">
					</div>
					<button type="submit" class="btn btn-default">Search</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#">
							<span class="glyphicon glyphicon-plus-sign"></span> Add char</a>
					</li>
					<li>
						<a href="#">
							<span class="glyphicon glyphicon-user"></span> Sign Up</a>
					</li>
					<li>
						<a href="#">
							<span class="glyphicon glyphicon-log-in"></span> Login</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="main">
			<?php if ($page > 0 && $page <= $MAX_PAGE) { ?>

				<div class="page-info">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="center">
									<h2>
										<?php echo $header; ?>
									</h2>
								</div>
							</div>
							<div class="col-md-6">
								<div class="change-page center">
									<div class="row">
										<div class="col-md-6">
											<a class="btn btn-primary" href="index?page=<?php echo $page - 1 ?>">
												<div class="icon">⇦</div>
											</a>
										</div>
										<div class="col-md-6">
											<a class="btn btn-primary" href="index?page=<?php echo $page + 1 ?>">
												<div class="icon">⇨</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>



				</div>
				<div class="img full-image">
					<img class="img-responsive center" src="http://vietnamtudien.org/chunom-trichdan/tr<?php echo $page ?>.png" alt="Tự điển Chữ Nôm Trích dẫn trang <?php echo $page ?>" />
				</div>

				<div class="panel left-side vertical-text">TRÁI</div>
				<div class="panel right-side vertical-text">PHẢI</div>

				<div class="img side-crop left-part center hidden">
					<img src="http://vietnamtudien.org/chunom-trichdan/tr<?php echo $page ?>.png" alt="Tự điển Chữ Nôm Trích dẫn nửa trang <?php echo $page ?>">
				</div>
				<div class="img side-crop right-part right-crop center hidden">
					<img src="http://vietnamtudien.org/chunom-trichdan/tr<?php echo $page ?>.png" alt="Tự điển Chữ Nôm Trích dẫn nửa trang <?php echo $page ?>">
				</div>


			<?php } else if ($page == 0) { ?>
				<div class="container">
					<h2>
						<?php echo $header; ?>
					</h2>
					<img class="center origin" src="<?php echo $imgurl ?>" alt="Trang bìa Tự điển Chữ Nôm Trích dẫn">
				</div>
			<?php } else { ?>
				<div class="container">
					<h2>
						<?php echo $header; ?>
					</h2>
					<img class="center origin" src="<?php echo $imgurl ?>" alt="Không tìm thấy">
				</div>
			<?php } ?>
		</div>
		<?php if ($page == 0 or $page > $MAX_PAGE) { ?>
			<footer>
				<div class="footer">
					<span>
						&copy Fiong 2018 |
					</span>
					<span>
						Trang nguồn (Đặng Thế Kiệt):
						<a href="http://vietnamtudien.org/chunom-trichdan/">vietnamtudien.org/chunom_trichdan</a>
					</span>
				</div>
			</footer>
		<?php } ?>
	</div>
</body>

</html>
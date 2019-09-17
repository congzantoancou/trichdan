<?php 
if (isset($_GET['page']))
	$page = $_GET['page'];
else $page = 0;

if ($page < 10) {
	$page = '000' . $page;
} else if ($page < 100) {
	$page = '00' . $page;
} else if ($page < 1000) {
	$page = '0' . $page;
}

$header = null;
if ($page > 0) {
	$header = 'Đang hiển thị trang <span class="page">'.$page.'</span>';
} else {
	$header = 'Không tìm thấy trang';
}
								

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tự Điển Chữ Nôm Trích Dẫn - Lookup Tool</title>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<link href="https://fonts.googleapis.com/css?family=Bungee+Shade&display=swap" rel="stylesheet">
	<script src="jquery-3.4.1.min.js"></script>
	<script src="scripts.js"></script>


</head>

<body>
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
					<a href="#">Page 1</a>
				</li>
				<li>
					<a href="#">Page 2</a>
				</li>
			</ul>
			<form class="navbar-form navbar-left" method="get" action="index">
				<div class="form-group">
					<input name="page" type="text" class="form-control" placeholder="Input number of page">
				</div>
				<button type="submit" class="btn btn-default">Search</button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="add-char">
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

	<?php if ($page > 0) { ?>
	<div class="main">
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
			<img class="img-responsive center" src="http://vietnamtudien.org/chunom-trichdan/tr<?php echo $page ?>.png"
			 alt="Từ điển chữ Nôm trích dẫn trang <?php echo $page ?>" />
		</div>

		<div class="panel left-side vertical-text">LEFT</div>
		<div class="panel right-side vertical-text">RIGHT</div>

		<div class="img side-crop left-part center hidden">
			<img src="http://vietnamtudien.org/chunom-trichdan/tr<?php echo $page ?>.png"
			 alt="Từ điển chữ Nôm trích dẫn nửa trang <?php echo $page ?>">
		</div>
		<div class="img side-crop right-part right-crop center hidden">
			<img src="http://vietnamtudien.org/chunom-trichdan/tr<?php echo $page ?>.png"
			 alt="Từ điển chữ Nôm trích dẫn nửa trang <?php echo $page ?>">
		</div>


	</div>
	<?php } else { ?>
	<div class="container">
		<h2>
			<?php echo $header; ?>
		</h2>
	</div>
	<?php } ?>
</body>

</html>
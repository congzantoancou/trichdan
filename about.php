<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css">
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
					<a href="about">About</a>
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
	<div class="container">
        <h2>Thông tin liên hệ</h2>
        <ul>
            <li><a href="mailto:congdantoancau@mail.com" target="_blank">Send mail to Phuong Tran</a></li>
            <li><a href="https://www.messenger.com/t/cozatoca" target="_blank">Send Messenger to Phuong Tran</a></li>
        </ul>
	</div>
</body>

</html>
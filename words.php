<?php
$title = null;
$page = null;

if (isset($_GET['page'])) {
	$keyword = $_GET['page'];
} else $keyword = null;

if ($keyword) {
    if (is_numeric($keyword)) {
        // KEYWORD INPUTED IS NUMBER
        echo "<script> location.href='index?page=$keyword'; </script>";
        exit;
    } else {
        // KEYWORD INPUTED IS A WORD

    // Get the contents of the JSON file 
    $strJsonFileContents = file_get_contents("keywords.json");
    //var_dump($strJsonFileContents); // show contents
    // Convert to array 
    $arrayKeywords = json_decode($strJsonFileContents, true);
    //var_dump($arrayKeywords); // print array

    $result = array_search($keyword, array_column($arrayKeywords, 'word'));
    //var_dump($result);

    if ($result) {
        $word_data = $arrayKeywords[$result];
        var_dump($word_data);   
        $page = $word_data['page'];
    }

    }
}

if (isset($word_data)) {
    $title = "Result of '$keyword'";
} else {
    $title = "Not found";
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>
		<?php echo $title ?>- Tự Điển Chữ Nôm Trích Dẫn - Lookup Tool</title>
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
					<a href="words">Search by words</a>
				</li>
				<li>
					<a href="about">About</a>
				</li>
			</ul>
			<form class="navbar-form navbar-left" method="get" action="words">
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

	<div class="main">
		<div class="page-info">
			<div class="container">
				<h2>
					<?php echo $title; ?>
				</h2>
			</div>
		</div>
		<?php if (isset($word_data)) { ?>
		<div class="img full-image">
			<img class="img-responsive center" src="http://vietnamtudien.org/chunom-trichdan/<?php echo $page ?>"
			 alt="Từ điển chữ Nôm trích dẫn trang <?php echo $page ?>" />
		</div>
        <?php } ?>
	</div>
</body>

</html>
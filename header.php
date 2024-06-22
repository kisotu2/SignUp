<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $pageTitle;?></title>
		<link rel="stylesheet" href="../SignUp/styles.css" type="text/css">
	</head>
	<body>
		<div class="header">
			<div class="wrapper">
				<h1 class="branding-title"><a href = "">Personal Media Library</a></h1>
				<ul class="nav">
					<li class = "books <?php if($section=="books"){ echo "on";}?>"><a href = "catalog.php?cat=books">Books</a></li>
					<li class="movies <?php if($section == "movies"){echo "on";}?>"><a href = "catalog.php?cat=movies" >Movies</a></li>
					<li class="music <?php if($section=="music"){echo "on";}?>"><a href = "catalog.php?cat=music">Music</a></li>
					<li class = "suggest"><a href = "suggest.php?cat=suggest">Suggest</a></li>
				</ul>
			</div>
		</div>

		<div id="content"></div>
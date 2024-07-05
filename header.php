<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $pageTitle;?></title>
		<link rel="stylesheet" href="../SignUp/styles.css" type="text/css">
	</head>
	<body>
		<div class="header">
			<div class="wrapper">
				<h1 class="branding-title"><a href = "index.php" img = "../SignUp/image/branding-title.png">Personal Media Library</a></h1>
				
				<ul class="nav">
				   
					<li class = "books <?php if($section=="books"){ echo "on";}?>"><a href = "catalog.php?cat=books" img src="../SignUp/image/nav-sprite.png">Books</a></li>
					<li class="movies <?php if($section == "movies"){echo "on";}?>"><a href = "catalog.php?cat=movies" img src="../SignUp/image/nav-sprite.png">Movies</a></li>
					<li class="music <?php if($section=="music"){echo "on";}?>"><a href = "catalog.php?cat=music" img src="../SignUp/image/nav-sprite.png">Music</a></li>
					<li class = "suggest"><a href = "suggest.php?cat=suggest" img  src="../SignUp/image/nav-sprite.png">Suggest</a></li>
				</ul>
			</div>
		</div>

		
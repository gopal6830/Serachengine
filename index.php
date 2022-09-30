<?php
include 'connection.php';
$ob=new sample();
if (isset($_POST['save'])) 
{
	$search = trim($_POST['search']);
		$rows=$ob->search($search);
	}

	
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link
	href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
	rel="stylesheet"
	/>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>google</title>
</head>
<body>
	<div class="container">
		<header>
			<ul>
				<li><a href="#">Gmail</a></li>
				<li><a href="#">Images</a></li>
				<li><a href="#"><img src="img/bars.png"></a></li>
				<li><button>Sign In</button></li>
			</ul>
		</header>
		<div style="margin-left:76%;position: fixed;margin-top: 356px">
			<button onclick="myFunction()" class="hoverss" style="white-space: nowrap;position: fixed;">Night Mode</button>
		</div>
		
		<div class="main">
			<img src="img/google.png" width="270">
			<form method="post" action="search.php">
				<div class="search-area">
					<div class="tooltip">
						<div class=""><img src="img/search.png" width="20" style="margin-left: 10px;margin-top: 4px"></div>
					</div>
					
					<input type="text" placeholder="Search Google or type a URL" name="search"/>
					<input type="submit" name="save" value="Search" class="hovers" style="width: 100px;">
				</div>
			</form>
			<div class="buttons">
				<button>Google Search</button>
				<button>I'm Feeling Lucky</button>
			</div>
			<ul class="lang">
				<li>Google offered in:</li>
				<li><a href="#">हिन्दी</a></li>
				<li><a href="#">English</a></li>
				<li><a href="#">मराठी</a></li>
				<li><a href="#">ગુજરાતી</a></li>
				<li><a href="#">Spanish</a></li>
				<li><a href="#">ਪੰਜਾਬੀ</a></li> 
				<li><a href="#">ગુજરાતી</a></li>
				<li><a href="#">French</a></li>
			</ul>
		</div>	

		<div class="footer">

			<div class="row row1">
				<p class="country">India</p>
			</div>
			<div class="row row2">
				<ul>
					<li><a href="#">About</a></li>
					<li><a href="#">Advertising</a></li>
					<li><a href="#">Business</a></li>
					<li><a href="#">How Search works</a></li>
				</ul>
				<ul style="float: right; padding-bottom: 15px;" >
					<li><a href="#">Privacy</a></li>
					<li><a href="#">Terms</a></li>
					<li><a href="#">Settings</a></li>
				</ul>
			</div>
		</div>
	</div>


	<script>
		function myFunction() {
			var element = document.body;
			element.classList.toggle("dark-mode");
		}
	</script>
</body>
</html>
<?php $page="about"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Bienvenu - CCAA RDC</title>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
	<!-- <link href='https://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet' type='text/css'> -->
</head>
<body>
	<div class="page">
		
		<!-- Insertion du header du site, avec menu y compris -->
		<?php require("./includes/header.php"); ?>

		<section class="page__content">
			<div class="container">

				<article class="article">
					<h2 class="page__title">A home page</h2>

					<div class="post">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, est rem pariatur impedit ipsum tempore. Consequatur reiciendis impedit laudantium, maxime, amet accusantium quisquam, quo deleniti molestias velit a numquam ipsam.</p>
					</div>
					<div class="post">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, est rem pariatur impedit ipsum tempore. Consequatur reiciendis impedit laudantium, maxime, amet accusantium quisquam, quo deleniti molestias velit a numquam ipsam.</p>
					</div>
					<div class="post">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, est rem pariatur impedit ipsum tempore. Consequatur reiciendis impedit laudantium, maxime, amet accusantium quisquam, quo deleniti molestias velit a numquam ipsam.</p>
					</div>
				</article>
				
				<!-- Insertion de la sidebar qui revient sur toutes les pages en quelques sortes -->
				<?php require("./includes/sidebar.php"); ?>
				
			</div>
		</section>

		<!-- Insertion du footer du site, contenant aussi le copyright -->
		<?php require("./includes/footer.php"); ?>
		
	</div>
</body>
</html>
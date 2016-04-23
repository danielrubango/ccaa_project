<?php
	
	$pages = [
		"home" => "HOME",
		"about" => "ABOUT US",
		"services" => "OUR SERVICES",
		"contact" => "CONTACT US"
	];

	function putAtive($page, $p = "home")
	{
		if ( $page == $p ) {
			echo "active";
		}
	}

?>

<div class="menu">
	<ul class="menu__container">

		<?php foreach ($pages as $p => $legend): $_p = ( $p == "home" ) ? "/" : "$p.php" ; ?>
			<li class="nav__item <?php putAtive($page, $p); ?>">
				<a href="<?= $_p; ?>">
					<?= $legend; ?>
				</a>
			</li>
		<?php endforeach; ?>

	</ul>
</div>
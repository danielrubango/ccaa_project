<!-- Imports tete de page -->
<?php
	$page_legend="contact";
	$page_title="Nous contacter";
	$page_description="Contact";

	$page_h2_title		= "Nous contacter";

	require("./includes/layouts/top.php");
?>


<!-- Contenu de la page -->
	<div class="post">
		<form action="/">
			<div class="form-group">
				<legend>Item 1</legend>
				<input type="text">
			</div>
			<div class="form-group">
				<legend>Item 1</legend>
				<input type="email">
			</div>
			<div class="form-group">
				<textarea name="message" id="message" cols="30" rows="10">Something here...</textarea>
			</div>
			<hr>
			<div class="form-group">
				<legend>Item 1</legend>
				<input type="button" value="Envoyer">
			</div>
		</form>
	</div>
<!-- Fin contenu de la page -->


<!-- Imports pied de page -->
<?php require("./includes/layouts/foot.php"); ?>
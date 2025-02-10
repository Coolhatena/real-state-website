<?php

	require 'includes/functions.php';
	includeTemplate('header'); 
?>

	<main class="container section centered-content">
		<h1>Iniciar sesion</h1>
		<form class="form">
			<fieldset>
				<legend>Email y password</legend>
				<label for="email">Email</label>
				<input type="email" placeholder="Tu Email" name="email" id="email">

				<label for="password">Password</label>
				<input type="password" placeholder="Tu Password" name="password" id="password">
			</fieldset>

			<input type="submit" value="Iniciar Sesión" class="button button-green">
		</form>


	</main>

	<?php includeTemplate('footer'); ?>
	
	<script src="build/js/bundle.min.js"></script>
</body>
</html>
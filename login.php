<?php
	// Import connection
	require 'includes/config/database.php';
	$db = connectDB();

	// Autenticate user
	$errors = [];

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
		$password = mysqli_real_escape_string($db, $_POST['password']);
		
		if (!$email) {
			$errors[] = "Proporcione un email valido";
		}

		if (!$password) {
			$errors[] = "El Password es obligatorio";
		}

		if (empty($errors)) {
			
		}
	}


	require 'includes/functions.php';
	includeTemplate('header'); 
?>

	<main class="container section centered-content">
		<h1>Iniciar sesion</h1>

		<?php foreach($errors as $error): ?>
			<div class="alert error">
				<?php echo $error; ?>
			</div>
		<?php endforeach; ?>

		<form class="form" method="POST" novalidate>
			<fieldset>
				<legend>Email y password</legend>
				<label for="email">Email</label>
				<input type="email" placeholder="Tu Email" name="email" id="email" required>

				<label for="password">Password</label>
				<input type="password" placeholder="Tu Password" name="password" id="password" required>
			</fieldset>

			<input type="submit" value="Iniciar Sesión" class="button button-green">
		</form>


	</main>

	<?php includeTemplate('footer'); ?>
	
	<script src="build/js/bundle.min.js"></script>
</body>
</html>
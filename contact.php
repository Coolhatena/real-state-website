<?php

	require 'includes/app.php';
	includeTemplate('header'); 
?>

	<main class="container section">
		<h1>Contacto</h1>
		<picture>
			<source srcset="build/img/destacada3.webp" type="image/webp">
			<source srcset="build/img/destacada3.jpg" type="image/jpeg">
			<img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen contacto">
		</picture>

		<h2>Llene el formulario de contacto</h2>
		<form action="" class="form">
			<fieldset>
				<legend>Información Personal</legend>
				<label for="name">Nombre</label>
				<input type="text" placeholder="Tu Nombre" name="name" id="name">

				<label for="email">Email</label>
				<input type="email" placeholder="Tu Email" name="email" id="email">

				<label for="phone">Telefono</label>
				<input type="tel" placeholder="Tu Telefono" name="phone" id="phone">

				<label for="message">Mensaje</label>
				<textarea name="message" id="message"></textarea>
			</fieldset>

			<fieldset>
				<legend>Informacion sobre la propiedad</legend>
				<label for="options">Compra / Venta:</label>
				<select name="options" id="options">
					<option value="" disabled selected>-- Seleccione --</option>
					<option value="buy">Compra</option>
					<option value="sell">Venta</option>
				</select>

				<label for="price">Precio / Presupuesto</label>
				<input type="number" placeholder="Tu precio / presupuesto" name="price" id="price">
			</fieldset>

			<fieldset>
				<legend>Contacto</legend>
				<p>¿Como desea ser contactado?:</p>
				<div class="contact-form">
					<label for="contact-phone">Teléfono</label>
					<input name="contact-preference" type="radio" value="phone" id="contact-phone">

					<label for="contact-email">Email</label>
					<input name="contact-preference" type="radio" value="email" id="contact-email">
				</div>

				<p>Si eligó teléfono, elija la fecha y hora en la que desea ser contactado</p>

				<label for="date">Fecha</label>
				<input type="date" name="date" id="date">

				<label for="time">Hora</label>
				<input type="time" name="time" id="time" min="09:00" max="18:00">
			</fieldset>

			<input type="submit" value="Enviar" class="button-green">
		</form>
	</main>

	<?php includeTemplate('footer'); ?>
	
	<script src="build/js/bundle.min.js"></script>
</body>
</html>
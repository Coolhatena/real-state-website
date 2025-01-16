<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bienes Raices</title>
	<link rel="stylesheet" href="/build/css/app.css">

</head>
<body>

	<header class="header <?php echo $isAlt ? 'main' : '' ?>">
		<div class="container header-content">
			<div class="bar">
				<a href="/"><img src="/build/img/logo.svg" alt="Logotipo de Bienes Raices" class="header-logo"></a>

				<div class="mobile-menu">
					<img src="/build/img/barras.svg" alt="Icono Menu responsive">
				</div>

				<div class="header-right">
					<nav class="navigation">
						<a href="us.php">Nosotros</a>
						<a href="ads.php">Anuncios</a>
						<a href="blog.php">Blog</a>
						<a href="contact.php">Contacto</a>
					</nav>
					<img src="/build/img/dark-mode.svg" alt="Icono modo oscuro" class="dark-mode-button">
				</div>
				
			</div>
			<?php echo $isAlt ? '<h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>' : '' ?>
		</div> <!-- End bar -->
	</header>
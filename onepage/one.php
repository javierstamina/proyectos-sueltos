<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo de página web en PHP</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
	<style>
		.slider {
			margin: 50px auto;
			width: 80%;
		}
		.slider img {
			max-width: 100%;
			height: auto;
		}
	</style>
</head>
<body>
	<header>
		<h1>Bienvenido a mi página web en PHP</h1>
	</header>

	<section>
		<p>Este es un párrafo de presentación de la página web en PHP. Aquí puedes escribir sobre el contenido de tu sitio web o cualquier otra información relevante que quieras compartir con tus visitantes.</p>
	</section>

	<section>
		<div class="slider">
			<div>
				<img src="imagen1.jpg">
			</div>
			<div>
				<img src="imagen2.jpg">
			</div>
			<div>
				<img src="imagen3.jpg">
			</div>
			<div>
				<img src="imagen4.jpg">
			</div>
			<div>
				<img src="imagen5.jpg">
			</div>
			<div>
				<img src="imagen6.jpg">
			</div>
		</div>
	</section>

	<section>
		<h2>Formulario de contacto</h2>
		<form action="enviar.php" method="post">
			<label for="nombre">Nombre:</label>
			<input type="text" id="nombre" name="nombre" required>

			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>

			<label for="mensaje">Mensaje:</label>
			<textarea id="mensaje" name="mensaje" required></textarea>

			<input type="submit" value="Enviar">
		</form>
	</section>

	<footer>
		<p>Derechos reservados &copy; 2023</p>
	</footer>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
	<script>
		$('.slider').slick({
			dots: true,
			infinite: true,
			speed: 500,
			slidesToShow: 3,
			slidesToScroll: 3,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
						infinite: true,
						dots: true
					}
				},
				{
					breakpoint: 600,
					settings: {
					
        slidesToShow: 1,
        slidesToScroll: 1
        }
        }
        ]
        });
        </script>

</body>
</html>
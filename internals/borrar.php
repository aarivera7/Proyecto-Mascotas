<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Happy Pets</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="icon" href="images/logo.png" sizes="32x32" />
    <link rel="icon" href="images/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="images/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
<div class="contenedor">
	<header class="cabeceraPrincipal">
		<section class="logotipo"><img src="../images/logotipoPet.png"></section>
		<nav class="menuPrincipal">
			<a href="../">Inicio</a>
			<a href="servicios.php">Servicios</a>
			<a href="#">Productos</a>
			<a href="#">Adopción</a>
			<a href="#">Contactos</a>
		</nav>
	</header>
	<main>
        <h2>Ingrese el ID a eliminar</h2>
        <form method="post" action="borrarid.php">
            <div class="grupoInput">
                <label for="idpersonal">ID del personal <span class="alerta">*</span></label>
                <input type="number" name="idpersonal" id="idpersonal" placeholder="Ingrese el ID del personal a eliminar" required>
            </div>
            
        </form>
        
    </main>
	<section class="sponsor">
		<figure class="logoSponsors">
            <a href="https://www.utpl.edu.ec"><img src="https://www.utpl.edu.ec/sites/default/files/Recurso%201%403x.png" alt="UTPL" class="utpl img"></a>
			<a href=".."><img src="../images/logotipoPet.png" alt="Pets" class="imgPets img"></a>
        </figure>
	</section>
	</section>
	<footer class="piePagina">
		<section class="derechos">
			<h6>Derechos Reservados UTPL 2022</h6>
		</section>
		<nav class="redesSociales">
			<a href=""><i class="fa-brands fa-facebook"></i></a>
			<a href=""><i class="fa-brands fa-instagram"></i></a>
			<a href=""><i class="fa-brands fa-tiktok"></i></a>
		</nav>
	</footer>
</div>
</body>
</html>

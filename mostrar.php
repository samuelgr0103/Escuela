<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Tienda Bit</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="menu">
		<ul>
			<li><a href="index.html">Inicio</a></li>
			<li><a href="Insertar.html">Insertar</a></li>
			<li class="current_page_item"><a href="mostrar.php">Mostrar</a></li>
			<li><a href="buscar.html">Buscar</a></li>
			<li><a href="editar.php">Editar</a></li>
			<li><a href="eliminar.php">Eliminar</a></li>
		</ul>
	</div>
	<div id="header">
		<div id="logo">
			
		</div>
	</div>
	<div id="page"><div class="inner_copy"></div>
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<br><br>	
					<?php	
						$mostrar=fopen('datos.txt','r');
						while(!feof($mostrar))
						{
							$codigo=fgets($mostrar);
							$nombre=fgets($mostrar);
							$clasificacion=fgets($mostrar);
							$genero=fgets($mostrar);
							$precio=fgets($mostrar);
							if($codigo!=""){
							echo "Codigo: ".$codigo."<br>";
							echo "Nombre: ".$nombre."<br>";
							echo "Clasificacion: ".$clasificacion."<br>";
							echo "Genero: ".$genero."<br>";
							echo "Precio: ".$precio."<br><br>";
							}
						}
					?>
					<br>
					<div style="clear:both">&nbsp;</div>
				</div>

				
				<div style="clear:both">&nbsp;</div>
			</div>
		</div>
	</div>
</div>
<div id="footer">
	<div class="fleft"><p>Copyright statement.</p></div>
	<div class="fright"><p><a href="http://www.itchilpancingo.edu.mx/" target="_blank">Instituto Tecnologico de Chilpancingo</a></p></div>
	<div class="fcenter"><p>Edit by: Samuel Garcia</p></div><br>
		<div class="fcenter">
		<ul>
			<li><a href="http://www.facebook.com/"><img src="images\face.png" width="50" heigth="50"></a></li>
			<li><a href="http://www.twitter.com/"><img src="images\twitter.png" width="50" heigth="50"></a></li>
			<li><a href="http://www.youtube.com/"><img src="images\youtube.png" width="50" heigth="50"></a></li>
		</ul>
	</div>
	<div class="fclear"></div>
</div>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>INSTITUTO TECNOLOGICO DE CHILPANCINGO</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="menu">
		<ul>
			<li><a href="index.html">Inicio</a></li>
			<li><a href="Insertar.html">Insertar</a></li>
			<li><a href="mostrar.php">Mostrar</a></li>
			<li><a href="buscar.html">Buscar</a></li>
			<li><a href="editar.php">Editar</a></li>
			<li class="current_page_item"><a href="eliminar.php">Eliminar</a></li>
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
						$bus=(int)"$_REQUEST[id]";
						$leer=fopen("datos.txt","r");
						$escribir=fopen("temp.txt","a+");
						while(!feof($leer)){					
							$id=fgets($leer);
							$nombre=fgets($leer);
							$apellidos=fgets($leer);
							$edad=fgets($leer);
							$puesto=fgets($leer);
							if($bus!=$id){						
								fputs($escribir,$id);
								fputs($escribir,$nombre);
								fputs($escribir,$apellidos);
								fputs($escribir,$edad);
								fputs($escribir,$puesto);
							}
						}
						fclose($leer);
						fclose($escribir);
						if(rename("temp.txt","datos.txt"))
							echo "Registro eliminado correctamente!!!!!<br>";
					?>
					<br>
					<div style="clear:both">&nbsp;</div>
				</div>
				<div id="sidebar">
					<ul>
						<li>
							<div id="search" >
								<form method="get" action="#">
									<div>
										<input type="text" name="s" id="search-text" value="" />
										<input type="submit" id="search-submit" value="GO" />
									</div>
								</form>
							</div>
							<div style="clear:both">&nbsp;</div>
						</li>
						<li>
							<h2>Instituto Tecnologico de Chilpancingo</h2>
							<p>Crear Tecnologia es Forjar Libertad</p>
						</li>
						<li>
							<h2>Eventos</h2>
							<ul>
								<li><a href="#">Semana de Ingenieria</a></li>
								<li><a href="#">Rendicion de cuentas 2015</a></li>
								<li><a href="#">Semana Academica de Sistemas Computacionales</a></li>
								<li><a href="#">Conferencia: “Pautas para publicar en revistas con arbitraje”</a></li>
							</ul>
						</li>
						<li>
							<h2>Archivos</h2>
							<ul>
								<li><a href="#">Galeria</a></li>
								<li><a href="#">Calendario Institucional</a></li>
								<li><a href="#">Convocatoria Becas Manuntencion</a></li>
								<li><a href="#">Convocatoria Becas del Idioma Ingles</a></li>
							</ul>
						</li>
					</ul>
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
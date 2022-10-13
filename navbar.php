<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<style>
		*{
    margin: 0px;
    padding: 0px;
    font-family: Avenir, sans-serif;
}
		.nav {
			display: flex;
			width: 100%;
			margin: 0;
			padding: 30px 0;
			align-items: center;
			justify-content: center;
			background-color: #1473A3;
			
			
		}
		.nav:hover{
			
		}

		.logo {
			width: 50px;
		}

		.nav figure {
			width: 150px;
		}

		.nav ul {
			display: flex;
			align-items: center;
			justify-content: space-around; 
		}
		.nav ul li {
			list-style: none;
			display: inline-block;
			margin: 0 20px;
			position: relative;
			align-items: center;
			justify-content: center;
		}

		.nav ul li a {
			text-decoration: none;
			color: #E0E0E0;
			text-transform: uppercase;
		}
		.nav ul li a:hover{
			color : white ; 
		}
		#menu-deroulant, #menu-deroulant ul {
    padding: 0;
    margin: 0;
    list-style: none;
}
#menu-deroulant {
/* on centre le menu dans la page */
    text-align: center;
}
#menu-deroulant li {
/* on place les liens du menu horizontalement */
    display: inline-block;
}
#menu-deroulant ul li {
/* on enlève ce comportement pour les liens du sous menu */
    display: inherit;
}

#menu-deroulant a {
    text-decoration: none;
    display: block;
	color:#E0E0E0;
}
#menu-deroulant ul {
    position: absolute;
/* on cache les sous menus complètement sur la gauche */
    left: -999em;
    text-align: left;
    z-index: 1000;
}
#menu-deroulant li:hover ul {
/* Au survol des li du menu on replace les sous menus */
    left: auto;
	display: flex;
  flex-flow: column wrap;


}
		
	</style>
</head>
<body>
	
	<nav class="nav">
		<ul>
			<li>
				<figure>
					<a href="index.html">
						<img src="img/logo_philips.png" alt="car-logo" class="logo">
					</a>
				</figure>
			</li>
			<li><a href="cartes.php"><i class="fas fa-map-marker-alt"></i></a></li>
			
			
				<ul id="menu-deroulant">
					<li><a href="#">Modalités &ensp;</a>
						<ul>
							<li><a href="map-ia.php">IA</a></li>
							<li><a href="#">IC</a></li>
						</ul>	
					<li>

				</ul>
				<?php include('search_bar.php') ?>
			</li>
			<li><a href="list_personne.php"><i class="fas fa-users"></i></a></li>
			<li><a href="form.php"><i class="fas fa-user-plus"></i></a></li>
			<li><a href="contact.php">Nous contacter</a></li>
				</ul>
		</ul>
	</nav>
</body>
</html>
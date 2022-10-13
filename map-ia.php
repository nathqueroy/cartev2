<?php
require_once('pdo.php')
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="cartes.css">
	<title>map image</title>
</head>

<body>
	<?php include_once('navbar.php') ?>

	<section class="intro">
		<ul>
			<li>
				<select>
					<option value="">Modalités</option>
					<option value="paris">Paris</option>
					<option value="lyon">Lyon</option>
					<option value="marseille">Marseille</option>
					<option value="rennes">Rennes</option>
					<option value="toulouse">Toulouse</option>
				</select>
			</li>
			<li>
				<select>
					<option value="">Zone</option>
					<option value="95">95</option>
					<option value="94">94</option>
					<option value="13">13</option>
					<option value="45">45</option>
					<option value="26">26</option>
				</select>
			</li>
		</ul>
	</section>
<aff class="aff">
	<ul style="list-style-type:none">
	<!-- MAP -->
		
		<?php include_once('IA.php') ?>
		

			
		<br>
		<li>
			

		</li>
		<hr />
	</ul>
</aff>
<br><br><br>
<?xml version="1.0" standalone="no"?>

<svg width="1000px" height="50"  xmlns="http://www.w3.org/2000/svg"
  version="1.1">
   <line  x1="100" y1="0" x2="3000" y2="0"
  style="stroke:grey;stroke-width:1; "/> 
 </svg>
 <div class="signature">
 Développé par Nathan QUEROY
</div>
<style>
.aff ul {

	display : flex ;
	align-items: center;
	justify-content: space-evenly; 
}

.aff ul li :not(.dep_affichage){
	display : flex;
	font-family: 'Open Sans', sans-serif;
	
	justify-content :center ; 
	align-items: center;
	font-style: italic;
	
}
.dep_affichage{
	display:flex;
	justify-content : center ;
	font-weight: bold;
	font-size:15px;

}

}

}

	<section class="afficher_user">
		<!--
	fonction afficher user non fonctionelle 
	<?php
	if ($allusers->rowcount() > 0) {
		if ($user = $allusers->fetch()) {
	?>
			<p><?= $user['prenom']; ?><p>
			<?php
		}
	} else {
			?>
		<p> aucun utilisateur trouvé</p><
		<?php
	}
		?>
-->
	</section>
</body>

</html>
	<!doctype html>
<html lang="fr">
    <head>
	 <meta charset="utf-8" />
	 <title>Site personnel Rémi DUPUY</title>
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
     <link rel="icon" href="ressources/logo_white.png">
	 <link rel="stylesheet" href="style.css"/>
	 <link rel="stylesheet" href="animate.css"/>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	 <link href='https://fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css'>
	 <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

	
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	</head>

	<body>
		<div id='div_load'>
			<p>Chargement...</p>
			<div class="page">
			  <div class="circle-loader">
			    <div class="circle-line">
			      <div class="circle circle-blue"></div>
			      <div class="circle circle-blue"></div>
			      <div class="circle circle-blue"></div>
			    </div>
			    <div class="circle-line">
			      <div class="circle circle-yellow"></div>
			      <div class="circle circle-yellow"></div>
			      <div class="circle circle-yellow"></div>
			    </div>
			    <div class="circle-line">
			      <div class="circle circle-red"></div>
			      <div class="circle circle-red"></div>
			      <div class="circle circle-red"></div>
			    </div>
			    <div class="circle-line">
			      <div class="circle circle-green"></div>
			      <div class="circle circle-green"></div>
			      <div class="circle circle-green"></div>
			    </div>
			  </div>
			</div>
			<!-- <span class="loading style-1"></span> -->
		</div>
		<div id="body_content">
			<div id ="site_content">
				<header>
					<a class='link_logo' href='#mid_content'>
						<img class='logo' src="ressources/logo_white.png" height="50px">
					</a>
					<!-- <h1>Rémi DUPUY</h1> -->
						<ul class="topnav">
							<li class="start_item"><a href="#infos">Infos générales</a></li>
							<li class="start_item"><a href="#folio">Folio</a></li>
							<li class="start_item"><a href="#competences">Compétences</a></li>
							<li class="last_item"><a href="#contact">Me contacter</a></li>
							<li class="icon">
								<a href="javascript:void(0);">&#9776;</a>
							</li>
						</ul>
				</header>
				<div id="mid_content">
				<?php 
					include_once ('info.html');
				?>
				</div>

			</div>

		<footer>
			<p>Copyright &copy Rémi Dupuy<br>
				Site créé en 2016 par Rémi DUPUY</p>
		</footer>
		</div>

	</body>
	<script src="responsive.js"></script>
	<script src="app.js"></script>
</html>

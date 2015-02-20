<html lang="en">
<head>
	<meta charset="utf-8">
    <!-- Estilos -->
    <link rel="stylesheet" href="<?php echo base_url() . FOUND; ?>css/foundation.css" />
    <script type="text/javascript" src="<?php echo base_url() . FOUND; ?>js/vendor/modernizr.js"></script>
    <script type="text/javascript" src="<?php echo base_url() . FOUND; ?>js/vendor/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url() . FOUND; ?>js/foundation.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() . CSS; ?>home.css" />
	<title>ExpoOrienta 2015</title>
	<style type="text/css">
	</style>
</head>
<body>
	<div id="panel" class="row">
		<div id="logo1" class"small-8 columns"><img src="<?php echo base_url().IMG; ?>logo expo-02.png"></div>
            <div id="subtabpanel" class="small-4 columns">
				<ul class="tabs" data-tab>
					<li class="tab-title active"><a href="#panel1">Inicio</a></li>
					<li class="tab-title"><a href="#panel2">Test Vocacional</a></li>
					<li class="tab-title"><a href="#panel3">Registro</a></li>
				</ul>
            </div>
			<div class="tabs-content" id="container">
				<div class="content active" id="panel1">
					<center>
						<ul class="example-orbit-content" data-orbit>
				  		<li data-orbit-slide="headline-1">
				  			<img src="<?php echo base_url().IMG; ?>p1.jpg" alt="slide 1" />
				  		</li>
				  		<li data-orbit-slide="headline-2">
				  			<img src="<?php echo base_url().IMG; ?>p2.jpg" alt="slide 2" />
				  		</li>
				  		<li data-orbit-slide="headline-3">
				  			<img src="<?php echo base_url().IMG; ?>p3.jpg" alt="slide 3" />
				  		</li>
				  	</ul>
				  </center>
				</div>
				<div class="content" id="panel2">
					<p>This is the second panel of the basic tab example. This is the second panel of the basic tab example.</p>
				</div>
				<div class="content" id="panel3">
					<p>This is the third panel of the basic tab example. This is the third panel of the basic tab example.</p>
				</div>
			</div>
		</div>
	<p class="footer">Renderizacion de la pagina en<strong>{elapsed_time}</strong> segundos</p>
</body>
<script>
	$(document).foundation({
		orbit: {
			animation: 'slide',
			timer_speed: 5000,
	    	pause_on_hover: true,
	    	animation_speed: 5000,
	    	navigation_arrows: true,
	    	bullets: false
	    }
	});
	</script>
</html>
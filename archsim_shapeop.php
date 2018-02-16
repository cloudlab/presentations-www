<?php 
include 'functions.php';
$x = 0;
?>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>A4707 Models in Architectural Simulation</title>
    
    <meta name="description" content="Design Amplification" />
    <meta name="author" content="Mark Collins" />
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,400italic,700,700italic,200,300' rel='stylesheet' type='text/css'>
    <link href="css/impress-demo.css" rel="stylesheet" />
</head>

<body class="impress-not-supported">


<div class="fallback-message">
    <p>Your browser <b>doesn't support the features required</b> by impress.js, so you are presented with a simplified version of this presentation.</p>
    <p>For the best experience please use the latest <b>Chrome</b>, <b>Safari</b> or <b>Firefox</b> browser.</p>
</div>

<div id="impress">

	<!-- BEGIN PRESENTATION -->
		
	<div id="start" class="step slide" data-x="0" data-y="0" style="background-color:#000;background-image:url('images/archsim/qatar2.jpg');">
        <h1 style="font-size:48px;">A4707 ARCH<span style="color:#fff;"><b>SIM</b></span></h1>
        <br>
        <h2><b>Advanced Models in Architectural Simulation</b></h2>
        Day/Time: Th 7:00pm - 9:00pm<br>
		Location: 115 Avery Hall<Br>
		Arch Technology Sequence, Elective<Br>

        <div style="">
			<div style="padding:20px;color:#DDD;font-size:24px;">
				Instructors:<br>
				<b>Mark Collins</b> mlc2115 @ProxyMark<br>
				<b>Toru Hasegawa</b> th2114 @ProxyToru
			</div>
        </div>
        
    </div>


	<!-- The Models -->	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:30px;font-size:20px;">
		<h1 style="color:#fff;">OUR MODEL TAXONOMY</h1>
		<table style="color:#ccc;">
		<tr>
			<td style="padding:20px;">

				<h3><span style="color:#fff;">CHEMICAL MODELS</span></h3>
				<ul>
				<li>Reaction Diffusion</li>
				<li>Cellular Automata</li>
				<li>Diffusion Limited Aggregation</li>
				<li>Leaf Venation</li>
				<li>Medial Axis/Skeletonization</li>
				</span>
				</ul>
				<br>
				
				<h3><span style="color:#fff;">PHYSICS BASED SHAPE OPTIMIZATION</span></h3>
				<ul>
				<li><span style="color:#fff;">Dynamic Relaxation, Hanging Chain Models</span></li>
				<li>Soap Film Optimization</li>
				</ul>
				</span>
				<br>
				
				<h3><span style="color:#fff;">TOPOLOGICAL OPTIMIZATION</span></h3>
				<ul>
				<li>Solid Isotropic Material Penalization</li>
				<li>Bi-Directional Evolutionary Structural Optimization</li>
				</ul>
			</td>
			<td style="padding:20px;">

				<h3><span style="color:#fff;">AGENT BASED MODELS</span></h3>
				<ul>
				<li>Ant Colony Optimization</li>
				<li>Space Colonization Algorithm</li>
				<li>Crowd Steering Behaviors</li>
				</ul>
				<br>
				
				<h3><span style="color:#fff;">HUMAN PERCEPTION &amp; COGNITION</span></h3>
				<ul>
				<li>Convolutional Neural Networks</li>
				</ul>
				<Br>
				
				<h3><span style="color:#fff;">EVOLUTIONARY</span></h3>
				<ul>
				<li>Genetic Algorithm</li>
				</ul>
			</td>
		</tr></table>
	</div>	
	
	<!-- Whats in the reading and notes -->
	
<?php


function archSimDefinition($word, $definition){
	echo '<span style="line-height:16pt; font-size:16pt;"><b>'. $word . '</b> <i style="color:#aaa;">'.$definition.'</i><br><br></span>';
}

function archSimPaper($author, $title, $year){
	echo '<span style="line-height:16pt; font-size:16pt;"><b>'. $author . '</b>, '.$title.'<i> ['.$year.']</i><br><br></span>';}
?>
	
		
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Dynamic relaxation</b> is a numerical method which can be used do "form-finding" for cable and fabric structures. The aim is to find a geometry where all forces are in equilibrium. In the past this was done by direct modelling, using hanging chains and weights (see Gaudi), or by using soap films, which have the property of adjusting to find a "minimal surface".
		<?php makeGenericSlideWithHeight("","Rhino Grasshopper, Kangaroo output", "images/archsim/7e0090ee96e1026ae5a303b2eeff60da.jpg", "330"); ?>
	</div>
	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		Analog computing and Antoni Gaudi: chain models
		<?php makeGenericSlideWithHeight("","", "images/archsim/1103.jpg", "473"); ?>
	</div>		
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Antoni Gaudi, Sagrada Familia, Catenary Arches", "images/archsim/2-img_2151.png", "461"); ?>
	</div>	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Antoni Gaudi,  1/15-sized reproduction of Gaudí’s hanging model for the Colònia Güell ", "images/archsim/Gaudi-3D-master-1024x768.jpg", "615"); ?>
	</div>
	
	<!-- Kangaroo Video -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVimeoSlide("","","8842130"); ?> <!-- alt: 8706003 -->
	</div>
	
	
	<!-- HOOKE'S LAW -->
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<b>Hooke's law</b> is a principle of physics that states that the force (F) needed to extend or compress a spring by some distance X scales linearly with respect to that distance. That is: F = kX, where k is a constant factor characteristic of the spring: its stiffness, and X is small compared to the total possible deformation of the spring.
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/146782-004-1CD38EA0.jpg", "400"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/fluid-part-two-21.jpg", "178"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		RUNGE KUTTA, a fourth-order approximation method for iteratively solving differential equations.<br><Br>
	<img src="images/archsim/runnge_kutta.png" />
	</div>	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Math for Game Developers", "images/archsim/runge-kutta.png", "460"); ?>
	</div>	

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVimeoSlide("","","8842130"); ?> <!-- alt: 8706003 -->
	</div>
	
	
	<!-- TOPOLOGY SEGWAY TO TOPO OP -->
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("","Frei Otto and the Institute for Lightweight Structures","-IW7o25NmeA"); ?> 
	</div>


	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<span style="font-size:48px;">Topology</span>
		<br><br>	
		<img src="https://aminsaied.github.io/images/coffeetodonut.gif" /img>
	</div>	
		
	<!-- END PRESENTATION -->	
    
</div>

<div class="hint">
    <p>Use a spacebar or arrow keys to navigate</p>
</div>
<script>
if ("ontouchstart" in document.documentElement) { 
    document.querySelector(".hint").innerHTML = "<p>Tap on the left or right to navigate</p>";
}
</script>

<script src="js/impress.js"></script>
<script>impress().init();</script>

</body>
</html>



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


<?php

function archSimDefinition($word, $definition){
	echo '<span style="line-height:16pt; font-size:16pt;"><b>'. $word . '</b> <i style="color:#aaa;">'.$definition.'</i><br><br></span>';
}

function archSimPaper($author, $title, $year){
	echo '<span style="line-height:16pt; font-size:16pt;"><b>'. $author . '</b>, '.$title.'<i> ['.$year.']</i><br><br></span>';
}
?>


<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
<h1>NEW PAPERS</h1><br>
		<?php archSimPaper("Dorigo", "The Any System", "1996"); ?>
		<?php archSimPaper("Luh Lin", "Structural topology optimization using Ant colony algorithm", "2009"); ?>

</div>

<!-- The Models -->	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:30px;font-size:20px;">
		<?php readfile("models_slide.php");  ?>
	</div>
	
<!-- ANTS -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		ANT COLONY OPTIMIZATION
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("","Ant Pheremone Video","UZ2HTTeM3aQ"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/The_Ant_System-2.png", "560"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","From Swarm Intelligence", "images/archsim/Swarm Intelligence-43.png", "530"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/Swarm Intelligence-48.png", "750"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;;color:#ccc;">
		<h1>Ant Colony Optimization of Structures</h1><br>
		A modified ACO algorithm that derives from a specific definition of pheromone and cooperation mechanism between ants is applied for solving topology optimization problem of structure. Mesh topology of finite element model for structure was treated as possible paths for ant’s movement. A tour on mesh topology map for seeking food finished by ant is transformed into a structure and the finite element method was applied to analyze the structure for calculating pheromone deposited on the path. The amount of accumulated pheromone deposited on every element by different ants was used to find optimum structural design. 
	</div>
	
	<div class="step" data-x="<?php echo $x+=0;?>" data-y="0" style="line-height:36px;font-size:24px;;color:#aaa;">
		<h1>Ant Colony Optimization of Structures</h1><br>
		A modified ACO algorithm that derives from a specific definition of <span style="color:#fff">pheromone and cooperation mechanism between ants</span> is applied for solving topology optimization problem of structure. <span style="color:#fff">Mesh topology of finite element model for structure was treated as possible paths for ant’s movement</span>. <span style="color:#fff">A tour on mesh</span> topology map for seeking food finished by ant is <span style="color:#fff">transformed into a structure</span> and the <span style="color:#fff">finite element method was applied to analyze the structure</span> for calculating pheromone deposited</span> on the path. The amount of accumulated pheromone deposited on every element by different ants was used to find optimum structural design. 
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/Structural Design through Ant Conoly Optmization-3.png", "714"); ?>
	</div>


	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/ij_23-alife99-9.png", "815"); ?>
	</div>
	

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","From Swarm Intelligence", "images/archsim/Swarm Intelligence-52.png", "540"); ?>
	</div>
	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/Ant_Colony_2.jpg", "319"); ?>
	</div>


<!-- ANT PROJECTS -->


	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Qatar National Convention Centre by Arata Isozaki and Mitsuro Sazaki", "images/archsim/dezeen_Qatar-National-Convention-Centre-by-Arata-Isozaki_1sq.jpg", "468"); ?>
	</div>
	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Qatar National Convention Centre by Arata Isozaki and Mitsuro Sazaki", "images/archsim/sasaki.png", "600"); ?>
	</div>
	
<!-- CLOSING -->


	
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



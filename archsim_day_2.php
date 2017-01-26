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

	
	<!-- DO THIS NOW! Download, accept dropbox invite or send email with dropbox account name, look in email -->
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
 DO THIS NOW!<br><br>
 <b>Download Processing</b> http://processing.org<Br>
<b>Confirm Rhino and Grasshopper installation</b> and send versions to th2114<br>
 <b>Accept Dropbox invitation</b> (or send your preferred dropbox email to mlc2115)<bR>
	</div>


	<!-- Starting off simple with Chemical -->	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">

		<h1 style="color:#fff;">OUR MODEL TAXONOMY</h1>

		<table style="color:#aaa;">
		<tr>
			<td style="padding:20px;">

				<h3 style="color:#fff;">CHEMICAL MODELS</h3>
				<ul>
				<span style="color:#fff;">
				<li><b>Reaction Diffusion</b></li>
				<li><b>Leaf Venation</b></li>
				</span>
				<li>Diffusion Limited Aggregation</li>
				<li>Medial Axis/Skeletonization</li>
				<li>Cellular Automata</li>
				</ul>

				<br>
				<h3 style="color:#fff;">PHYSICS BASED SHAPE OPTIMIZATION</h3>
				<ul>
				<li>Hanging Chain Models</li>
				<li>Soap Film Optimization</li>
				</ul>

				<br>
				<h3 style="color:#fff;">TOPOLOGICAL OPTIMIZATION</h3>
				<ul>
				<li>Morphological evolutionary structural optimization MESO</li>
				<li>Bi-Directional evolutionary structural optimization BESO</li>
				<li>Solid Isotropic Material Penalization SIMP</li>
				</ul>
			</td>
			
			<td style="padding:20px;">

				<h3 style="color:#fff;">AGENT BASED MODELS</h3>
				<ul>
				<li>Space Colonization Algorithm</li>
				<li>Ant Colony Optimization</li>
				</ul>

				<br>
				<h3 style="color:#fff;">HUMAN PERCEPTION, COGNITION, ACTION</h3>
				<ul>
				<li>Schelling Model of Separation</li>
				<li>Neural Networks</li>
				<li>Isovist Fields</li>
				</ul>

				<br>
				<h3 style="color:#fff;">EVOLUTIONARY</h3>
				<ul>
				<li>Genetic Algorithm</li>
				</ul>
			</td>
		</tr></table>
	
	</div>	

	<!-- Opening slide - reaction diffusion map -->	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">

		<?php makeGenericSlideWithHeight("","Reaction diffusion, resulting patterns when the kill rate varies along the x axis (from .045 to .07) and the feed rate varies along the y axis (from .01 to .1). Some areas are stable with solid A or solid B, but a crescent shaped zone between these gives various types of complex behaviors. From http://www.karlsims.com/rd.html", "images/archsim/rd_map.png", "599"); ?>

	</div>

<?php

function archSimDefinition($word, $definition){
	echo '<span style="line-height:16pt; font-size:16pt;"><b>'. $word . '</b> <i>'.$definition.'</i><br><br></span>';
}

function archSimPaper($author, $title, $year){
	echo '<span style="line-height:16pt; font-size:16pt;"><b>'. $author . '</b>, '.$title.'<i> ['.$year.']</i><br><br></span>';}
?>

	<!-- Vocab for Today -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		Keywords for Today<br><br>

		<?php archSimDefinition("Self organization", "systemic order arising from the interaction of initially disordered parts"); ?>
		<?php archSimDefinition("Reaction Diffusion", "model that describes pattern formation in many biological, mathematical and physical systems"); ?>
		<?php archSimDefinition("Gray Scott Equations", "specific set of equations that govern interactions between reactants"); ?>
		<?php archSimDefinition("A &amp; B", "Names given to the two reactants in the RD formula"); ?>
		<?php archSimDefinition("k-factor", "Determines speed at which reactants diffuse, or spread outs"); ?>
		<?php archSimDefinition("Moore's neighborhood", "in a grid, all neighboring pixels or cell to a given cell"); ?>
		
	</div>

	<!-- Whats in the reading and notes -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">

		<?php archSimPaper("Turing", "The Chemical Basis for Morphogenesis", "1952"); ?>
		<?php archSimPaper("Gierer and Meinhardt", "A Theory of Biological Pattern Formation", "1972"); ?>
		<?php archSimPaper("Gray Scott", "Autocatalytic reactions in the isothermal, continuous stirred tank reactor", "1984"); ?>
		<?php archSimPaper("Pearson", "Complex Patterns in a Simple System", "1993"); ?>

	</div>


	<!-- Explainers and Demo Websites -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	
		1: Explorable map of F-k combinations<br>
		<i>http://mrob.com/pub/comp/xmorphia/</i><br><br>
		
		3: Karl Sims Reaction Diffusion Tutorial<br>
		<i>http://www.karlsims.com/rd.html</i><br><br>
				
		3:Gray Scott Reaction Diffusion Interactive<br>
		<i>https://pmneila.github.io/jsexp/grayscott/</i>
	</div>		


	<!-- Lets take it into grasshopper -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		Lets take it into grasshopper now for...<Br><Br>
		
		Image Retrieval/Analysis<br>
		Panelization Demo<br>
	</div>
	
	
	<!-- Schedule -->	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	
		<h2>Schedule</h2>
		<div style="float:left;width:240px;color:#ccc;">
			Class 1<br>
			Class 2<br>
			Class 3<br>
			Class 4<br>
			Class 5<br>
			Class 6<br>
			Class 7<br>
			Class 8<br>
			Class 9<br>
			Class 10<br>
			Class 11<br>
			Class 12<br>
			Class 13<br>
		</div>
	
		<div style="float:left;color:#ccc;">
		
			Course Introduction, Q&A<br>
			Presentation and Demo: Chemical Models<br>
			<span style="color:#fff;">Workshop: “Hello World” Grashopper</span><br> <!-- Grashopper as Simulation and Visualization Engine<br> -->
			Presentation and Demo: Physics Based Models<br>
			<span style="color:#fff;">Workshop: Chain Models and Kangaroo Physics</span><br>
			Presentation and Demo: Agent/Foraging Models<br>
			Project Meetings<br>
			Presentation: Genetic and Evolutionary Models<br>
			<span style="color:#fff;">Workshop: Galapagos Grashopper</span><br>
			Project Meetings<br>
			Presentation: Models of Human Behavior<br>
			<span style="color:#fff;">Workshop: Isovist</span><br>
			Project Meetings<br>
			Reading Roundtable Discussion<br>
		</div>	
	</div>
	
	<!-- Next Class -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;	">
      
		<span style="font-size:48pt;">		Questions?		</span><Br><Br>
		<br>
		<b>For Next Week</b>		
		<li>Bring a computer with Rhino Grasshopper</li>
		<li>We will introduce the semester project next week</li>
		<li>We will introduce readings next week as well</li>
		<Br>
		<Br>
       <h1 style="font-size:48px;line-height:50px;">A4707 ARCH<span style="color:#fff;"><b>SIM</b></span></h1>
   Advanced Models in Architectural Simulation<Br>
        Day/Time: Th 7:00pm - 9:00pm<br>
		Location: 115 Avery Hall<Br>
		Mark (mlc2115) &amp; Toru (th2114)
		<Br>
		<Br>
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



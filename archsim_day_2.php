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

	<!-- Syllabus Intro -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">

		<p style="color:#aaa;"><span style="color:#fff;">This seminar introduces a powerful set of models to simulate, predict and even improve architectural design. </span>
		We look at models that reduce systems to their most critical relationships while opening them to new conjectures and productivity. 
		Pulled from the worlds of material computing, biomimetics, computational geometry and data science, these simulation-based models are 
		well documented and highly applicable to architectural design.
		</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Class Syllabus at http://proxyarch.com/archsim.pdf", 'images/archsim/archsim-SyllabusAccent.png', 620,350,100); ?>

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
				<li>Hanging Chain Models</li>
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
				<li>Isovist Fields</li>
				</ul>
				
				<Br>
				
				<h3><span style="color:#fff;">EVOLUTIONARY</span></h3>
				<ul>
				<li>Genetic Algorithm</li>
				</ul>
			</td>
		</tr></table>
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

		<?php archSimPaper("Gierer and Meinhardt", "A Theory of Biological Pattern Formation", "1972"); ?>
		<?php archSimPaper("Pearson", "Complex Patterns in a Simple System", "1993"); ?>
		<?php archSimPaper("Wolfram", "Cellular Automata as Models of Complexity", "1984"); ?>
		
		<?php archSimPaper("Killian", "Particle-Spring Systems For Structural Form Finding, Killian", "2006"); ?>
		<?php archSimPaper("Schrandt &amp; Ulam", "On Recursively Defined Geometrical Objects and Patterns", "1970"); ?>
		<?php archSimPaper("Witten &amp; Sander", "Diffusion-Limited Aggregation, a Kinetic Critical Phenomenon", "1984"); ?>

		<?php archSimPaper("Michell", "The limits of economy of material in frame-structures", "1904"); ?>
		<?php archSimPaper("Bendsøe and Kikuchi ", "Generating optimal topologies in structural design", "1988"); ?>

		<?php archSimPaper("Xie", "A simple evolutionary procedure for structural optimization (BESO)", "1993"); ?>
		<?php archSimPaper("Dorigo", "The Any System", "1996"); ?>
		<?php archSimPaper("Luh Lin", "Structural topology optimization using Ant colony algorithm", "2009"); ?>
		
		<?php archSimPaper("Karl Sims","Evolving 3D Morphology and Behavior by Competition", "1994"); ?>
		<?php archSimPaper("John Holland", "Genetic Algorithms", "2014"); ?>
		<?php archSimPaper("M L Bendikt", "Isovist &amp; Isovist Fields", "1979"); ?>
</div>



	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">

		<h2>Schedule</h2>
		<div style="float:left;width:200px;color:#ccc;">
			Class 1<br>
			Class 2<br>
			Class 3<br>
			Class 4<br>
			Class 5<br>
			Class 6 MT<br>
			Class 7 MT<br>
			Class 8 Kinne<br>
			Class 9<br>
			Class 10<br>
			Class 11<br>
			Class 12<br>
			Class 13<br>
			Paper<br>
		</div>

		<div style="float:left;color:#aaa;width:620px;">
	
			Course Introduction, Q&A<br>
			<span style="color:#fff;">Workshop: Kangaroo for GH</span><br>
			Presentation: Chemical &amp; Physics Based Models<Br>
			<span style="color:#fff;">Workshop: Millipede for GH</span><br>
			Presentation: Topological Optimization<br>
			Roundtable discussion<br>
			<span style="color:#fff;">Workshop: Physarealm for GH</span><br>
			Project Meeting (or Abstract due if Kinne)<br>
	Presentation: Agent Based Models &amp; Genetic Algorithms<br>
			<span style="color:#fff;">Workshop: Galapagos for GH</span><br>
			Project Meetings, Grasshopper Help<br>
			Project Meetings, Technical Presentation Draft<br>
			Technical Presentations, Class Close Out<br>
			Email Submission Deadline is May #
		</div>	
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



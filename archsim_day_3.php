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



	<!-- Whats in the reading and notes -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		FOR TODAY...<Br><br>
<b>Download Netlogo https://ccl.northwestern.edu/netlogo</b><BR>
	3 new models<br>
	4 new papers<br>
	Jump from <b>chemistry</b> to <b>physics</b><Br>
	Jump from <b>cellular</b> structures to <b>vector</b> structures<Br><br>


	WHATS IN THE DROPBOX?<Br>
<span	style="line-height:14pt;font-size:18pt;">
		<li>Papers for all examples today </li><Br>
				<li>Class notes for today with links &amp; references</li><Br>
								<li>Links to presentations</li><Br>
								</span>
								<br>
			<h1>PAPERS</h1>
		<?php archSimPaper("Killian", "Particle-Spring Systems For Structural Form Finding, Killian", "2006"); ?>
		<?php archSimPaper("Schrandt &amp; Ulam", "On Recursively Defined Geometrical Objects and Patterns", "1970"); ?>
		<?php archSimPaper("Wolfram", "Cellular Automata as Models of Complexity", "1984"); ?>
		<?php archSimPaper("Witten &amp; Sander", "Diffusion-Limited Aggregation, a Kinetic Critical Phenomenon", "1984"); ?>
	</div>
	
<?php


function archSimDefinition($word, $definition){
	echo '<span style="line-height:16pt; font-size:16pt;"><b>'. $word . '</b> <i style="color:#aaa;">'.$definition.'</i><br><br></span>';
}

function archSimPaper($author, $title, $year){
	echo '<span style="line-height:16pt; font-size:16pt;"><b>'. $author . '</b>, '.$title.'<i> ['.$year.']</i><br><br></span>';}
?>


	<!-- The Models -->	
	
<div class="step" data-x="<?php echo $x+=2000;?>" data-y="0" style="line-height:30px;font-size:20px;">
		<h1 style="color:#fff;">OUR MODEL TAXONOMY</h1>
		<table style="color:#aaa;">
		<tr>
			<td style="padding:20px;">

				<h3><span style="color:#fff;">CHEMICAL MODELS</span></h3>
				<ul>
				<li>Reaction Diffusion</li>
				<span style="color:#fff;">
				<li>Cellular Automata</li>
				<li>Diffusion Limited Aggregation</li>
				</span>
				</ul>
				<br>
				
				<h3><span style="color:#fff;"><b>PHYSICS BASED SHAPE OPTIMIZATION</b></span></h3>
				<span style="color:#fff;">
				<ul>
				<li>Hanging Chain Models</li>
				<li>Soap Film Optimization</li>
				</ul>
				</span>
								<br>
				<h3><span style="color:#fff;">TOPOLOGICAL OPTIMIZATION</span></h3>
				<ul>
				<li>Morphological evolutionary structural optimization</li>
				<li>Bi-Directional evolutionary structural optimization</li>
				<li>Solid Isotropic Material Penalization</li>
				</ul>
			</td>
			<td style="padding:20px;">
				<h3><span style="color:#fff;">AGENT BASED MODELS</span></h3>
				<ul>
				<li>Space Colonization Algorithm</li>
				<li>Ant Colony Optimization</li>
				<li>Schelling Model of Separation</li>
				</ul>
				<br>
				
				<h3><span style="color:#fff;">EVOLUTIONARY</span></h3>
				<ul>
				<li>Genetic Algorithm</li>
				<Br>
				<h3><span style="color:#fff;">HUMAN PERCEPTION &amp; COGNITION</span></h3>
				<ul>
				<li>Neural Networks</li>
				<li>Isovist Fields</li>
				</ul>
				</ul>
			</td>
		</tr></table>
	</div>	
	

<!-- CA-->


	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Cellular Aggregation","Schrandt, Ulam, 1970, On Recursively Defined Geometrical Objects and Patterns of Growth", "images/archsim/revursive_combined.jpg", "438"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Cellular Aggregation","Schrandt, Ulam, 1970, On Recursively Defined Geometrical Objects and Patterns of Growth", "images/archsim/Untitled-1.jpg", "600"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Cellular Automata","John Frazer, Seed Structure", "images/archsim/frazer-cellular_growth.jpg", "606"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Cellular Automata","John Frazer, Reptile Structuring System", "images/archsim/reptile2.jpg", "606"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Cellular Automata","", "images/archsim/ca_explainer.jpg", "660"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Cellular Automata","Wolfram Cellular Automata as Models of Complexity, Nature 1984", "images/archsim/Cellular_Automata_Wolfram_Brian-8.png", "559"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Cellular Automata","", "images/evodes/Cellular_Automata_Wolfram_Brian-6.png", "560"); ?>
	</div>
		
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Cellular Automata","Simple 3D growth, Wolfram", "images/archsim/Wolfram-simple_Ca.gif", "661"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Cellular Automata","The code 1635 3-color totalistic cellular automaton", "images/archsim/page67.jpg", "606"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Cellular Automata","Francis Bitonti, Molecule Shoes with Adobe and Stratasys", "images/archsim/Francis_Bitonti_Molecule_3D_printed_shoes_dezeen_468_4.jpg", "606"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	NETLOGO<br>
	Model Library, CA
	</div>

	
<div class="step" data-x="<?php echo $x+=2000;?>" data-y="0" style="line-height:30px;font-size:20px;">
		<h1 style="color:#fff;">OUR MODEL TAXONOMY</h1>
		<table style="color:#aaa;">
		<tr>
			<td style="padding:20px;">

				<h3><span style="color:#fff;">CHEMICAL MODELS</span></h3>
				<ul>
				<li>Reaction Diffusion</li>
				<span style="color:#fff;">
				<li>Cellular Automata</li>
				<li>Diffusion Limited Aggregation</li>
				</span>
				</ul>
				<br>
				
				<h3><span style="color:#fff;"><b>PHYSICS BASED SHAPE OPTIMIZATION</b></span></h3>
				<span style="color:#fff;">
				<ul>
				<li>Hanging Chain Models</li>
				<li>Soap Film Optimization</li>
				</ul>
				</span>
								<br>
				<h3><span style="color:#fff;">TOPOLOGICAL OPTIMIZATION</span></h3>
				<ul>
				<li>Morphological evolutionary structural optimization</li>
				<li>Bi-Directional evolutionary structural optimization</li>
				<li>Solid Isotropic Material Penalization</li>
				</ul>
			</td>
			<td style="padding:20px;">
				<h3><span style="color:#fff;">AGENT BASED MODELS</span></h3>
				<ul>
				<li>Space Colonization Algorithm</li>
				<li>Ant Colony Optimization</li>
				<li>Schelling Model of Separation</li>
				</ul>
				<br>
				
				<h3><span style="color:#fff;">EVOLUTIONARY</span></h3>
				<ul>
				<li>Genetic Algorithm</li>
				<Br>
				<h3><span style="color:#fff;">HUMAN PERCEPTION &amp; COGNITION</span></h3>
				<ul>
				<li>Neural Networks</li>
				<li>Isovist Fields</li>
				</ul>
				</ul>
			</td>
		</tr></table>
	</div>	
	
	
<!-- DLA -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Diffusion Limited Aggregation", "images/archsim/Of7_p0001_15h.jpg", "640"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/Vector_Diagram.png", "640"); ?>
	</div>


	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","A \"Random Walk\", or Brownian Motion", "images/archsim/Random_Walk.png", "640"); ?>
	</div>
	
	
		<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
NETLOGO<br>
Model Library, Code Examples: Random Walk Example
<!--netlogo_random.jpg-->
</div>


	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/DLA_Diagram.png", "640"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/DLA_2.png", "444"); ?>
	</div>
	
		<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Aggregation: Complexity out of Simplicity, Andy Lomas 2005", "images/archsim/aggregation_006.jpg", "644"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("","Aggregation: Complexity out of Simplicity, Andy Lomas 2005","6Vg54g51nb4"); ?>
	</div>

		
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/DLA_Topological_scaling.jpg", "617"); ?>
	</div>
	

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
NETLOGO<Br>
Model Library, Sample Models, Chemistry and Physics<br>Diffusion Limited Aggregation - DLA Simple
<!--NETLOGO_DLA.jpg-->
</div>

<div class="step" data-x="<?php echo $x+=2000;?>" data-y="0" style="line-height:30px;font-size:20px;">
		<h1 style="color:#fff;">OUR MODEL TAXONOMY</h1>
		<table style="color:#aaa;">
		<tr>
			<td style="padding:20px;">

				<h3><span style="color:#fff;">CHEMICAL MODELS</span></h3>
				<ul>
				<li>Reaction Diffusion</li>
				<li>Leaf Venation</li>
				<li>Diffusion Limited Aggregation</li>
				<li>Cellular Automata</li>
				</ul>
				<br>
				
				<h3><span style="color:#fff;"><b>PHYSICS BASED SHAPE OPTIMIZATION</b></span></h3>
				<span style="color:#fff;">
				<ul>
				<li>Hanging Chain Models</li>
				<li>Soap Film Optimization</li>
				</ul>
				</span>
								<br>
				<h3><span style="color:#fff;">TOPOLOGICAL OPTIMIZATION</span></h3>
				<ul>
				<li>Morphological evolutionary structural optimization</li>
				<li>Bi-Directional evolutionary structural optimization</li>
				<li>Solid Isotropic Material Penalization</li>
				</ul>
			</td>
			<td style="padding:20px;">
				<h3><span style="color:#fff;">AGENT BASED MODELS</span></h3>
				<ul>
				<li>Space Colonization Algorithm</li>
				<li>Ant Colony Optimization</li>
				<li>Schelling Model of Separation</li>
				</ul>
				<br>
				
				<h3><span style="color:#fff;">EVOLUTIONARY</span></h3>
				<ul>
				<li>Genetic Algorithm</li>
				<Br>
				<h3><span style="color:#fff;">HUMAN PERCEPTION &amp; COGNITION</span></h3>
				<ul>
				<li>Neural Networks</li>
				<li>Isovist Fields</li>
				</ul>
				</ul>
			</td>
		</tr></table>
	</div>	
	
	<!-- Vocab for Today -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">

		<h1>KEYWORDS</h1><br>
		<?php archSimDefinition("Vector", "a magnitude and a length"); ?>
		<?php archSimDefinition("Funicular", "a structure which can achieve equilibrium state by adopting a mechanism of a 'right' form (shape/geometry) corresponding to the applied loads."); ?>
		<?php archSimDefinition("Dynamic Relaxation", "a numerical process by which a network of physically connected nodes can be used do \"form-finding\" for cable and fabric structures by applying weights and stiffness through time until the structure achieves equilibrium"); ?>
		<?php archSimDefinition("Mean Curvature", "locally describes the curvature of an embedded surface at any given point"); ?>
		<?php archSimDefinition("Minimal Surface ", "a surface with zero mean curvature at all points (such as a catanoid)"); ?>
	</div>
			
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		Analog Computing: Antoni Gaudi, Frei Otto
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Antoni Gaudi, Sagrada Familia, Catenary Arches", "images/archsim/2-img_2151.png", "461"); ?>
	</div>	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Antoni Gaudi,  1/15-sized reproduction of Gaudí’s hanging model for the Colònia Güell ", "images/archsim/Gaudi-3D-master-1024x768.jpg", "615"); ?>
	</div>	

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Olympic Park Munich, Frei Otto", "images/archsim/Olympic_park_12.jpg", "461"); ?>
	</div>	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Soap Film Model, Frei Otto", "images/archsim/f2817978de08430d05291d9970fbca93.jpg", "461"); ?>
	</div>		

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("","Frei Otto and the Institute for Lightweight Structures","-IW7o25NmeA"); ?> 
	</div>		

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Surface Curvature - A Quick and Dirty Introduction to the Curvature of Surfaces", "images/archsim/ddg_principal_curvature.jpg", "439"); ?>
	</div>		
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Mathematical True Minimals, Costa Minimal Surface", "images/archsim/Costa5-large.jpg", "615"); ?>
	</div>		

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		Chain Models
		<?php makeGenericSlideWithHeight("","", "images/archsim/1103.jpg", "473"); ?>

	</div>		
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	MODEL: DYNAMIC RELAXATION<br><br>
	Dynamic relaxation is a numerical method, which, among other things, can be used do "form-finding" for cable and fabric structures. The aim is to find a geometry where all forces are in equilibrium. In the past this was done by direct modelling, using hanging chains and weights (see Gaudi), or by using soap films, which have the property of adjusting to find a "minimal surface".
		<?php makeGenericSlideWithHeight("","Rhino Grasshopper, Kangaroo output", "images/archsim/7e0090ee96e1026ae5a303b2eeff60da.jpg", "330"); ?>
	</div>

<!--

	Hookes Law

	-->

		<!-- Soft Body Physics Cadenary Paper -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
Soft Body Dynamics
		<?php
		$hanging = array(
					'images/archsim/Elastically_Deformable_Models-1.jpg',
					'images/archsim/Elastically_Deformable_Models-2.jpg');
		makeImageGrid("", "", $hanging, 2); ?>
	</div>
	
	<!-- Soft Body Physics Cadenary Paper -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php
		$hanging = array(
					'images/dd/killian-1.png',
					'images/dd/killian-2.png');
		makeImageGrid("", "", $hanging, 2); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("","Axel Kilian, Future of Technology, 13:20 for Cadenary","QDf8YYqWYqQ"); ?> 
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">	
		<?php makeGenericSlideWithHeight("","Funicular funnel shells FROM ETH ZURICH, Phillipe Block", "images/archsim/funicularfunnel_vaultmodel_picture_nervimodel_022_1425051452_1920x1080.jpg", "461"); ?>
	</div>	

	<!-- Kangaroo Video -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVimeoSlide("","","8842130"); ?> <!-- alt: 8706003 -->
	</div>
	
	
	
	<!-- Schedule -->	
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
		</div>
	
		<div style="float:left;color:#ccc;width:620px;">
		
			Course Introduction, Q&A<br>
			<span style="color:#fff;">Workshop &amp; Demo: Hello World &amp; Reaction Diffusion</span><br>
			Presentation: Chemical &amp; Physics Based Models<Br>
			<span style="color:#fff;">Workshop &amp; Demo: Chain Models</span><br>
			Presentation: Foraging Models &amp; Topological Optimization<br>
			<span style="color:#fff;">Workshop: Karamba &amp; Millipede</span><br>
			Presentation: Genetic &amp; Neural Networks<br>
			Project Meeting (or Abstract due if Kinne)<br>
			<span style="color:#fff;">Workshop: Galapagos Grashopper and Isovist</span><br>
			Project Meetings<br>
			Reading Roundtable Discussion<br>
			Project Meetings<br>
			Technical Presentation<br>
		</div>	
	</div>
	
	<!-- Next Class -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;	">
      
		<span style="font-size:48pt;">		For Next Week	</span><Br>
		<br>
		<li>We'll be using Kangaroo and Processing</li>
		<li>Bring a computer (even if no Rhino)</li>
		<li>Stay on top of new readings!</li>
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



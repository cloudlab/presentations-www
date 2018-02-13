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
				<li>Dynamic Relaxation, Hanging Chain Models</li>
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

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	FOR TODAY...<Br><br>
	Download Netlogo https://ccl.northwestern.edu/netlogo<BR><br>
	4 models<br>
	...<b>chemistry</b> to <b>physics</b><Br>
	...<b>cellular</b> structures to <b>vector</b> structures<Br>
	...<b>very small</b>  to <b>very large</b><Br>
	...<b>diffusion</b>  to <b>gravity</b><Br><br>


	WHATS IN THE DROPBOX?<Br><Br>
<span	style="line-height:14pt;font-size:18pt;">
		<li>Papers for all examples today </li><Br>
				<li>Class notes for today with links &amp; references</li><Br>
								<li>Links to presentations</li><Br>
								</span>
</div>


	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
			
		<h1>PAPERS</h1><Br>
		
		<?php archSimPaper("Turing", "The Chemical Basis for Morphogenesis", "1952"); ?>
		<?php archSimPaper("Schrandt &amp; Ulam", "On Recursively Defined Geometrical Objects and Patterns", "1968"); ?>
		<?php archSimPaper("Gierer and Meinhardt", "A Theory of Biological Pattern Formation", "1972"); ?>
		<?php archSimPaper("Wolfram", "Cellular Automata as Models of Complexity", "1984"); ?>
		<?php archSimPaper("Witten &amp; Sander", "Diffusion-Limited Aggregation, a Kinetic Critical Phenomenon", "1984"); ?>
		<?php archSimPaper("Pearson", "Complex Patterns in a Simple System", "1993"); ?>
		<?php archSimPaper("Killian", "Particle-Spring Systems For Structural Form Finding, Killian", "2006"); ?>
	</div>
	
<?php


function archSimDefinition($word, $definition){
	echo '<span style="line-height:16pt; font-size:16pt;"><b>'. $word . '</b> <i style="color:#aaa;">'.$definition.'</i><br><br></span>';
}

function archSimPaper($author, $title, $year){
	echo '<span style="line-height:16pt; font-size:16pt;"><b>'. $author . '</b>, '.$title.'<i> ['.$year.']</i><br><br></span>';}
?>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
 	Connecting to Grasshopper from last class<br><br>
 	<b>Initial conditions - Solver - Solution</b>
	</div>
	
	<!-- Vocab for Today -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">

		<h1>KEYWORDS</h1><br>
		<?php archSimDefinition("Brownian Motion", "seemingly random movement of small particles arising from microvariations in the environment"); ?>
		<?php archSimDefinition("Self organization", "systemic order arising from the interaction of initially disordered parts"); ?>
		<?php archSimDefinition("Reaction Diffusion", "model that describes pattern formation in many biological, mathematical and physical systems"); ?>
		<?php archSimDefinition("Gray Scott Equations", "specific set of equations that govern interactions between reactants"); ?>
		<?php archSimDefinition("A &amp; B", "names given to the two reactants in the RD formula"); ?>
		<?php archSimDefinition("K &amp; F", "Kill and Feed rates at every cell, must be carefully calabrated"); ?>
		<?php archSimDefinition("Moore's neighborhood", "in a grid, all neighboring pixels or cell to a given cell"); ?>
	</div>

	<!-- BROWNIAN MOTION -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
    	<?php 
		$imagesb = array(
		'images/archsim/Brownian_motion_large (1).gif',
		'images/archsim/Brownianmotion5particles150frame.gif');
		makeImageGrid("", "Brownian Motion", $imagesb, 2); 
		?>
	</div>

	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		...the discovery of this phenomenon is often credited to the botanist Robert Brown in 1827. Brown was studying pollen grains of the plant Clarkia pulchella suspended in water under a microscope when he observed minute particles, ejected by the pollen grains, executing a jittery motion. By repeating the experiment with particles of inorganic matter he was able to rule out that the motion was life-related, although its origin was yet to be explained.
		<br><Br>
		This was followed by "On the movement of small particles suspended in a stationary liquid demanded by the molecular-kinetic theory of heat" in 1905 by Albert Einstein, introducing new statistical/mechanical analysis for describing behavior of atoms.
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","A \"Random Walk\", or Brownian Motion", "images/archsim/Random_Walk.png", "640"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/Vector_Diagram.png", "640"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		NETLOGO<br>
		Model Library, Code Examples<br>
		Random Walk Example
	</div>
	
	
	<!-- DLA -->
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Diffusion Limited Aggregation", "images/archsim/Of7_p0001_15h.jpg", "640"); ?>
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
		<?php makeGenericSlideWithHeight("","Benjamin Busch, Adaptive Structure from Rome Generative Art Conference 2011", "images/archsim/adaptive-growth.gif", "547"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","KOROX studio, Coral Pavilion", "images/archsim/b49136_e93baf539b1f4156bcfb80a741ee0ba8_mv2.png", "362"); ?>
	</div>	
		
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		NETLOGO<Br>
		Model Library, Sample Models, Chemistry and Physics<br>
		Diffusion Limited Aggregation - DLA Simple
		<!--NETLOGO_DLA.jpg-->
	</div>
	
	
	<!-- Reaction Diffusion -->

	<!-- reaction diffusion map -->	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","<br><b>Reaction diffusion</b>, resulting patterns when the kill rate varies along the x axis (from .045 to .07) and the feed rate varies along the y axis (from .01 to .1). A crescent shaped zone gives various types of complex behaviors. From http://www.karlsims.com/rd.html<br>", "images/archsim/rd_map.png", "534"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("","Reaction-Diffusion Example, Gray-Scott model, Karl Sims","8dTmUr5qKvI"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Reaction Diffusion Patterns", "images/archsim/Diffusion_1.png", "620"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Reaction Diffusion Equations", "images/archsim/rd-equation.png", "340"); ?>
	</div>	

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Reaction Diffusion Patterns", "images/archsim/rd_process.jpg", "261"); ?>
	</div>	

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Reaction Diffusion Algorithm Explained", "images/archsim/Reaction_training.jpg", "511"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Reaction Diffusion with biases", "images/archsim/diffusion_patterns.jpg", "660"); ?>
	</div>
	
	<!--  reaction diffusion map -->	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","<br><b>Reaction diffusion</b>, resulting patterns when the kill rate varies along the x axis (from .045 to .07) and the feed rate varies along the y axis (from .01 to .1). A crescent shaped zone gives various types of complex behaviors. From http://www.karlsims.com/rd.html<br>", "images/archsim/rd_map.png", "534"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Leaf Venation, Nervous Systems", "images/archsim/folium_patterns.jpg", "517"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Diffusion in 3D, Michael Hansmeyer", "images/archsim/voxels1.jpg", "400"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Cyclic Symmetric Multi-Scale Turing Patterns, Jonathan McCabe", "images/archsim/turingpatterns.jpg", "581"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	 	<?php makeGenericSlideWithHeight(
	 	"",
	 	"Mechaneu, Proxy Design Studio, 2012", 
	 	"images/digdet/mechaneu.jpg", 
	 	"580"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"", 
		"Mechaneu v1 Spherical Patterning 00:14", 
		"l3xxDxlsIdA"); ?>
	</div>
	  
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	 	<?php makeGenericSlideWithHeight(
	 	"How the Zebra got its Stripes",
	 	"From Endless Forms Most Beautiful: The Science of Evo Devo", 
	 	"images/evodes/zebra.jpg", 
	 	"559"); ?>
	</div>	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	 	<?php makeGenericSlideWithHeight(
	 	"How the Zebra got its Stripes",
	 	"From Endless Forms Most Beautiful: The Science of Evo Devo", 
	 	"images/evodes/Carroll Endless Forms Most Beautiful-65.png", 
	 	"500"); ?>
	</div>	
	

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	 	<?php makeGenericSlideWithHeight(
	 	"How the Zebra got its Stripes",
	 	"From Endless Forms Most Beautiful: The Science of Evo Devo", 
	 	"images/evodes/Carroll Endless Forms Most Beautiful-88.png", 
	 	"559"); ?>
	</div>	


	<!-- Explainers and Demo Websites -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<h1>DEMOS</h1><br>
		
		<span style="color:#aaa;">1: Karl Sims Reaction Diffusion Tutorial</span><br>
		<i>www.karlsims.com/rd.html</i><br><br>
				
		<span style="color:#aaa;">2: Gray Scott Reaction Diffusion Interactive</span><br>
		<i>pmneila.github.io/jsexp/grayscott/</i><br><br>
		
		<span style="color:#aaa;">3: Explorable map of F-k combinations</span><br>
		<i>mrob.com/pub/comp/xmorphia/</i><br><br>
	</div>
	

	<!-- CA-->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Cellular Automata","The code 1635 3-color totalistic cellular automaton", "images/archsim/page67.jpg", "606"); ?>
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
		<?php makeGenericSlideWithHeight("Cellular Automata","Francis Bitonti, Molecule Shoes with Adobe and Stratasys", "images/archsim/Francis_Bitonti_Molecule_3D_printed_shoes_dezeen_468_4.jpg", "606"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Michael Silver, Automason: Dhaka Office Block", "images/archsim/axos.jpg", "495"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("", "Automason, Exporting a Brick Pattern as a Playlist and loading it in iTunes", "ww4njEYklWY"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Michael Silver, Masonry robot, SMART University of Buffalo", "images/archsim/327afd724a8a301be09c4d2b6ab9d881-4-OSCR-2.jpg", "550"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	NETLOGO<br>
	Model Library, CA
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
				<li>Dynamic Relaxation, Hanging Chain Models</li>
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
	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		MODEL: DYNAMIC RELAXATION<br><br>
		Dynamic relaxation is a numerical method, which, among other things, can be used do "form-finding" for cable and fabric structures. The aim is to find a geometry where all forces are in equilibrium. In the past this was done by direct modelling, using hanging chains and weights (see Gaudi), or by using soap films, which have the property of adjusting to find a "minimal surface".
		<?php makeGenericSlideWithHeight("","Rhino Grasshopper, Kangaroo output", "images/archsim/7e0090ee96e1026ae5a303b2eeff60da.jpg", "330"); ?>
	</div>
	
	
	<!-- Vocab for Today -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">

		<h1>KEYWORDS</h1><br>
		<?php archSimDefinition("Vector", "a data structure holding a magnitude and a length"); ?>
		<?php archSimDefinition("Funicular", "a structure which can achieve equilibrium state by adopting a mechanism of a 'right' form (shape/geometry) corresponding to the applied loads."); ?>
		<?php archSimDefinition("Dynamic Relaxation", "a numerical process by which a network of physically connected nodes can be used do \"form-finding\" for cable and fabric structures by applying weights and stiffness through time until the structure achieves equilibrium"); ?>
		<?php archSimDefinition("Mean Curvature", "locally describes the curvature of an embedded surface at any given point"); ?>
		<?php archSimDefinition("Minimal Surface ", "a surface with zero mean curvature at all points (such as a catanoid)"); ?>
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
	

	<!-- Physics Based Modeling -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:32px;font-size:20px;">
		<div style="float:right;">
			<?php addAccentImageWithCreditAndHeight("Force Directed Graph", 'images/dd/force_directed_sm.png', 400, 253, 50); ?>
		</div>
		
		Computational Physics Based Modeling
		<li>Physical forces applied to structures</li>
		<li>Dynamical, not static</li>
		<li>Will often converge to a solution</li>
		<li>Solutions can be structurally optimal</li>
		<li>Subject to chaos due to how forces are applied</li>
		<li>Forces are applied iteratively in small steps</li>
		<li>Smaller increments = less error</li>
	</div>

	
	<!-- The Blob -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Soft Body Physics","The Blob - Greg Lynn Embriological House", "images/dd/greg_lynn_embriological_house.jpg", "559"); ?>
	</div>

	<!-- Soft Body Physics Cadenary Paper -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		Soft Body Dynamics
		<?php
		$hanging = array(
					'images/archsim/Elastically_Deformable_Models-1.jpg',
					'images/archsim/Elastically_Deformable_Models-2.jpg');
		makeImageGrid("", "", $hanging, 2); ?>
	</div>
		
	<!-- Soft Body Physics Cadenary -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Soft Body Physics","Cadenary Software, Processing", "images/dd/CADenary_AxelKilian_clipped.jpg", "559"); ?>
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
		<?php makeGenericSlideWithHeight("","Math for Game Developers", "images/archsim/runge-kutta.png", "460"); ?>
	</div>	

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
	
	<!-- Next Class -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;	">
      
		<span style="font-size:48pt;">		For Next Week	</span><Br>
		<br>
		<li>We'll be using Millipede and Grasshopper</li>
		<li>Bring a computer (even if no Rhino)</li>
		<li>Start reading!</li>
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
	
	
		
	<!-- SOAP FILMS 
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
	
	-->
	
	<!-- RIGID BODY PHYSICS
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Example: Rigid Body Physics","Angry Birds", "images/dd/Angry-Birds-Games.jpg", "559"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Example: Rigid Body Physics","MOS Sand", "images/dd/mos-sand.jpg", "559"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("Example: Rigid Body Physics", "Sphere Packing for Advanced Media Studio", "_uY9C18ydAI"); ?>
	</div>
	
	 -->
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



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
	
	<!-- Whats a model? -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;color:#ccc;">

	<b style="font-size:40pt;color:#fff;">What is a model?</b>
	<br>
	<br>
	<span style="font-size:18pt;">
	<span style="color:#fff;">A model</span> is a task-driven, purposeful simplification or abstraction<br>
	<span style="color:#fff;">A simulation</span> is an unpacked instance of a model
	</span>
	<br><br>

		Models... do work<br>
		Models... are invented<br>
		Models... are refined<br>
		Models... are connectable<br>
		Models... think?
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
	
	<!-- Objectives -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;color:#ccc;">
		<b style="color:#fff;">Course Goals & Objectives</b>

		<li>Learn proven models for architectural generation</li>
		<li>Learn to use simulation tools and apply them to design problems</span></li>
		<li>Develop a critical approach to the use of simulation tools</li>
		<li>Examine the gap between digital models and real world physical processes</li>
		<li>Document work in a technical format<Br>
				<br>
		<?php addAccentImageWithCreditAndHeight("EZCT Architecture, Chair", 'images/dd/20090907174005.jpg', 600, 200, 50); ?>

	</div>
		
	<!-- Workshop -->
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		
		<h1>Computing experience?</h1>
		
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:44px;font-size:36px;color:#aaa;">
		
		<span style="color:#fff;">Software: Rhino Grasshopper</span><br><br>
		
		Plugins<br>
		<span style="color:#fff;">Millipede - Finite Element Models</span><br>
		<span style="color:#fff;">Physarealm - Agent Based Models</span><br>
		<span style="color:#fff;">Kangaroo - Physics Based Models</span><br>
		<span style="color:#fff;">Galapagos - Evolutionary Models</span><br>
		
		<Br>
		Utilities<br>
		<span style="color:#fff;">
		MeshEdit<br>
		Net Logo<br>
		Processing<br>
		</span>
	</div>
	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("","Topological Optimization (Rhino Grasshopper + Millipede)","igRFFMSfwSQ"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("","Agent based modeling (Rhino Grasshopper + Physarealm)","BM0Wdgoifr0"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVimeoSlide("","Physics based modeling (Rhino Grasshopper + Kangaroo)","8842130"); ?> <!-- alt: 8706003 -->
	</div>

	<!-- READING???? -->








	<!-- Project -->
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Semester Project</b>

		<li>Work in small groups (2) or individually</li>
		<li>A focused application of one of the class models or pre-approved other</li>
		<li>Clearly defined goals and benchmarking of results</li>
		<li>Compile simulation results (images, data, diagrams) in a tech presentation</li>
	</div>
	


	<!-- Past Work -->
	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	<?php 
 
    	$imagesc = array(
'images/evodes/BST_CollinsHasegawa_ChristopherBotham_TravisHeim_FA14_01 copy.png',
'images/evodes/BST_CollinsHasegawa_ChristopherBotham_TravisHeim_FA14_02.png',
'images/evodes/BST_CollinsHasegawa_Extra_01.png',
'images/evodes/BST_CollinsHasegawa_LorenzoVillaggi_FA14_01.png',
);
    	makeImageGrid("", "Excerpts from Student Technical Papers", $imagesc, 3); 
    	?>
    </div>    

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	<?php 
		$imagesb = array(
		'images/dd/FA09_kooho_jung_and_jea_hee_han.png',
		'images/dd/FA10_ivy_chan.png',
		'images/dd/FA12_michelle_o_carroll.png',
		'images/dd/FA12_rui_wang.tif',
		'images/dd/FA12_thomas_heltzel_and_margaret_zyro.tif',
		'images/dd/FA12_yan_zhang_01.tif');
		makeImageGrid("Past Student Work", "Excerpts from Student Technical Papers", $imagesb, 3); 
		?>
    </div>    


	<!-- The Models -->	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:30px;font-size:20px;">
		<h1 style="color:#fff;">OUR MODEL TAXONOMY</h1>
		<table style="color:#aaa;">
		<tr>
			<td style="padding:20px;">

				<h3><span style="color:#fff;">CHEMICAL MODELS</span></h3>
				<ul>
				<li>Reaction Diffusion</li>
				<li>Cellular Automata</li>
				<li>Diffusion Limited Aggregation</li>
				<li>Leaf Venation</li>
				<li>Medial Axis Skeletonization</li>
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
				<li>Convolution Neural Networks</li>
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
	
  	<!-- DLA -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Chemical: Diffusion Limited Aggregation","Aggregation: Complexity out of Simplicity, Andy Lomas 2005", "images/archsim/aggregation_006.jpg", "644"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("","Aggregation: Complexity out of Simplicity, Andy Lomas 2005","6Vg54g51nb4"); ?>
	</div>

	<!-- reaction diffusion -->
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Chemical: Reaction Diffusion","Reaction Diffusion Patterns", "images/archsim/Diffusion_1.png", "620"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Reaction Diffusion Algorithm Explained", "images/archsim/Reaction_training.jpg", "511"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("","Reaction-Diffusion Example, Gray-Scott model, Karl Sims","8dTmUr5qKvI"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Reaction Diffusion with biases", "images/archsim/diffusion_patterns.jpg", "647"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Leaf Venation, Nervous Systems", "images/archsim/folium_patterns.jpg", "517"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Diffusion in 3D, Michael Hansmeyer", "images/archsim/voxels1.jpg", "400"); ?>
	</div>

	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<span style="font-size:36pt;line-height:48pt;">Physics Based Models</span><Br>
	<b>Dynamic relaxation</b> is a numerical method, which, among other things, can be used do "form-finding" for cable and fabric structures. The aim is to find a geometry where all forces are in equilibrium.
		<?php makeGenericSlideWithHeight("","Rhino Grasshopper, Kangaroo output", "images/archsim/7e0090ee96e1026ae5a303b2eeff60da.jpg", "330"); ?>
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

	<!-- Soft Body Physics Cadenary Paper -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php
		$hanging = array(
					'images/dd/killian-1.png',
					'images/dd/killian-2.png');
		makeImageGrid("", "A funicular structure could be said to be a structure which can achieve equilibrium state by adopting a mechanism of a 'right' form (shape/geometry) corresponding to the applied loads", $hanging, 2); ?>
	</div>

	<!-- Kangaroo Video -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVimeoSlide("","","8842130"); ?> <!-- alt: 8706003 -->
	</div>
	
	<!-- BESO -->
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Evolutionary Structural Optimization","Luca Frattari for solidThinking Inspire ", "images/archsim/28ea0440327b205666cc0b3ee93bb6e4.jpg", "559"); ?>
	</div>

	<!-- Sawapan Structural Optimization -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("","Sawapan TopoStruct Software","OCc-s6mxQqc"); ?>
	</div>

	<!-- Bone Chair -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/dd/soft_kill-1.png", "811"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVimeoSlide("","Bone Chair, Joris Laarman","146039736"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("","SOLID THINKING INSPIRE INTRODUCTION","QnfkEzoD_ZA"); ?>
	</div>


<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","An Iterative Structural Optimization Process", "images/archsim/multiphysics_optimization.png", "481"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","", "images/archsim/2007_WCSMO7-5.png", "900"); ?>
</div>


	<!-- microstructures and FGM -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","BESO in Topogly Optimization of Microstructure", 
										 "images/archsim/BESO in Topogly Optimization of Microstructure-202.jpg", "496"); ?>
	</div>
	
	<!-- stigmergy -->
	

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/The_Ant_System-2.png", "560"); ?>
	</div>


	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("","Ant Pheremone Video","UZ2HTTeM3aQ"); ?>
	</div>


	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Agent Based: Ant Colony Optimization","Stigmergy is a mechanism of indirect coordination, through the environment, between agents or actions. The principle is that the trace left in the environment by an action stimulates the performance of a next action, by the same or a different agent. In that way, subsequent actions tend to reinforce and build on each other, leading to the spontaneous emergence of coherent, apparently systematic activity.", "images/archsim/Ant_Colony_2.jpg", "319"); ?>
	</div>
	
	<!-- Quatar -->
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Qatar National Convention Centre by Arata Isozaki and Mitsuro Sazaki", "images/archsim/dezeen_Qatar-National-Convention-Centre-by-Arata-Isozaki_1sq.jpg", "468"); ?>
	</div>
	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Qatar National Convention Centre by Arata Isozaki and Mitsuro Sazaki", "images/archsim/sasaki.png", "600"); ?>
	</div>
	


	<!-- virtual creatures -->
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Evolutionary Models","Karl Sims, Evolving Virtual Creatures", "images/evodes/sim-3.png", "530"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
			<?php makeGenericSlideWithHeight("","Karl Sims", "images/evodes/sim-2.png", "590"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<span style="font-size:10pt;line-height:12pt;">
		This video shows results from a research project involving simulated Darwinian evolutions of virtual block creatures. A population of several hundred creatures is created within a supercomputer, and each creature is tested for their ability to perform a given task, such the ability to swim in a simulated water environment. Those that are most successful survive, and their virtual genes containing coded instructions for their growth, are copied, combined, and mutated to make offspring for a new population. The new creatures are again tested, and some may be improvements on their parents. As this cycle of variation and selection continues, creatures with more and more successful behaviors can emerge.
		</span>

		<?php makeVideoSlide(
		"", 
		"Karl Sims - Evolved Virtual Creatures, Evolution Simulation, 1994", 
		"JBgG_VSP7f8"); ?>
		
	</div>

	<!-- neural networks -->
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("AI &amp; Neural Networks","Artificial Neural Network Diagram", "images/archsim/296px-Colored_neural_network.jpg", "500"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Neural net dreams generated purely from random noise, using a network trained on places by MIT Computer Science and AI Laboratory.", "images/archsim/building-dreams.png", "395"); ?>
	</div>
	
	
	<!-- The Models -->	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:30px;font-size:20px;">
		<h1 style="color:#fff;">OUR MODEL TAXONOMY</h1>
		<table style="color:#aaa;">
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
				<li>Neural Networks</li>
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

<?php

function archSimDefinition($word, $definition){
	echo '<span style="line-height:16pt; font-size:16pt;"><b>'. $word . '</b> <i style="color:#aaa;">'.$definition.'</i><br><br></span>';
}

function archSimPaper($author, $title, $year){
	echo '<span style="line-height:16pt; font-size:16pt;"><b>'. $author . '</b>, '.$title.'<i> ['.$year.']</i><br><br></span>';
}
?>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">

		<?php archSimPaper("Turing", "The Chemical Basis for Morphogenesis", "1952"); ?>
		<?php archSimPaper("Gierer and Meinhardt", "A Theory of Biological Pattern Formation", "1972"); ?>
		<?php archSimPaper("Gray Scott", "Autocatalytic reactions in the isothermal, continuous stirred tank reactor", "1984"); ?>
		<?php archSimPaper("Pearson", "Complex Patterns in a Simple System", "1993"); ?>

		<?php archSimPaper("Killian", "Particle-Spring Systems For Structural Form Finding, Killian", "2006"); ?>
		<?php archSimPaper("Schrandt &amp; Ulam", "On Recursively Defined Geometrical Objects and Patterns", "1970"); ?>
		<?php archSimPaper("Wolfram", "Cellular Automata as Models of Complexity", "1984"); ?>
		<?php archSimPaper("Witten &amp; Sander", "Diffusion-Limited Aggregation, a Kinetic Critical Phenomenon", "1984"); ?>

		<?php archSimPaper("Maxwell", "On Reciprocal Figures, Frames, and Diagrams of Forces", "1870"); ?>
		<?php archSimPaper("Michell", "The limits of economy of material in frame-structures", "1904"); ?>
		<?php archSimPaper("Bendsøe and Kikuchi ", "Generating optimal topologies in structural design", "1988"); ?>
		<?php archSimPaper("Xie", "A simple evolutionary procedure for structural optimization (BESO)", "1993"); ?>
		<?php archSimPaper("Dorigo", "The Any System", "1996"); ?>
		<?php archSimPaper("Luh Lin", "Structural topology optimization using Ant colony algorithm", "2009"); ?>
		
		<?php archSimPaper("Karl Sims","Evolving 3D Morphology and Behavior by Competition", "1994"); ?>
		<?php archSimPaper("John Holland", "Genetic Algorithms", "2014"); ?>
		<?php archSimPaper("M L Bendikt", "Isovist &amp; Isovist Fields", "1979"); ?>
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



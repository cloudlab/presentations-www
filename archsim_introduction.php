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


    <!-- Main Theme #1  -->
	<div id="" class="step" data-x="1000" data-y="1000" data-rotate="90" data-scale="1.0">        
        <?php makeThemeSlide(
        "Explore Alteratives in Design Process and Externalize Design Intelligence",
        "Theme #1: Methodology",
        "images/evodes-bone-chair.jpg"); ?>
    </div>
    
    
 	<!-- Main Theme #2   -->
	<div id="" class="step" data-x="900" data-y="1500" data-rotate="180" data-scale="1.0">
    	<?php makeThemeSlide(
    	"Incorporating Time, Forces and the Environment into Architectural Ideation",
    	"Theme #2: Simulation",
    	"images/evodes-simulation.png"); ?>
    </div>


  	<!-- Main Theme #3   -->
    <div id="" class="step" data-x="<?php echo $x+=1000;?>" data-y="1000" data-rotate="90" data-scale="1.0">
    	<?php makeThemeSlide(
    	"Thinking through fitness, evaluation and selection",
    	"Theme #3: Performance &amp; Environment",
    	"images/evodes-galapagos.png"); ?>
    </div>


    
	<!-- Syllabus Intro -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">


		<p style="color:#aaa;"><span style="color:#fff;">This seminar introduces a powerful set of models to simulate, predict and even improve architectural design. </span>
		We look at models that reduce systems to their most critical relationships while opening them to new conjectures and productivity. 
		Pulled from the worlds of material computing, biomimetics, computational geometry and data science, these simulation-based models are 
		well documented and highly applicable to architectural design.
		</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Class Syllabus", 'images/archsim/archsim-SyllabusAccent.png', 620,350,100); ?>

	</div>
	
	<!-- Whats a model? -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">

	<b>What is a model?</b>
	<br>
	<br>
	<i>A model</i> is a task-driven, purposeful simplification and abstraction of a perception of reality.<br><br>
	<i>A simulation</i> is the implementation of a model.<br><br>

	For our purposes, a model does <i>work</i>.<br><br>


	</div>
	
	

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		Models... do work<br>
		Models... are invented<br>
		Models... are refined<br>
		Models... are insightful<Br>
		Models... are portable<br>
		Models... think?
	</div>


	<!-- The Models -->	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">

		<h1 style="color:#fff;">OUR MODEL TAXONOMY</h1>

		<table style="color:#aaa;">
		<tr>
			<td style="padding:20px;">

				<h3 style="color:#fff;">CHEMICAL MODELS</h3>
				<ul>
				<li>Reaction Diffusion</li>
				<li>Leaf Venation</li>
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
	
<!-- DLA -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("","Hastings Levitov model, Henry Jackson","4lSfK6S7Qvk"); ?>
	</div>


	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/DLA_Topological_scaling.jpg", "617"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/DLA_2.png", "444"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		Nervous Systems
	</div>


<!-- reaction diffusion -->

	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Reaction Diffusion Patterns", "images/archsim/Diffusion_1.png", "620"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("","Reaction-Diffusion Example, Gray-Scott model, Karl Sims","8dTmUr5qKvI"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Reaction Diffusion Algorithm Explained", "images/archsim/Reaction_training.jpg", "511"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Reaction Diffusion with biases", "images/archsim/diffusion_patterns.jpg", "647"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Leaf Venation, Nervous Systems", "images/archsim/folium_patterns.jpg", "517"); ?>
	</div>

<!-- CA-->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/Cellular_Automata_Wolfram_Brian-8.png", "559"); ?>
	</div>
	
		<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/fire_spread_neighbors.jpg", "559"); ?>
	</div>


<!-- physical models -->


	<!-- Soft Body Physics Cadenary -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Cadenary Software, Processing", "images/dd/CADenary_AxelKilian_clipped.jpg", "559"); ?>
	</div>

	<!-- Soft Body Physics Cadenary Paper -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php
		$hanging = array(
					'images/dd/killian-1.png',
					'images/dd/killian-2.png');
		makeImageGrid("", "Cadenary Software, Processing", $hanging, 2); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Cadenary Software, Processing", "images/archsim/killian.jpg", "597"); ?>
	</div>
	
	
	<!-- Kangaroo Video -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVimeoSlide("","","8842130"); ?> <!-- alt: 8706003 -->
	</div>

	

<!-- topological optimization -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/Arup-3d-printed-steel_dezeen_468_1.jpg", "559"); ?>
	</div>
	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Luca Frattari used solidThinking Inspire ", "images/archsim/28ea0440327b205666cc0b3ee93bb6e4.jpg", "559"); ?>
	</div>

	
	<!-- Sawapan Structural Optimization -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("","","OCc-s6mxQqc"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		Altair’s OptiStruct topology optimization software was used to explore architectural design variants for the Bionic Tower high-rise proposal.
		Altair and LAVA Laboratory for Visionary Architecture.
	</div>
	
		<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","BESO in Topogly Optimization of Microstructure", 
										 "images/archsim/BESO in Topogly Optimization of Microstructure-202.jpg", "496"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/nafems_2001-9.jpg", "559"); ?>
	</div>
				
		  
	<!-- Metal Printing -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
		"Fabrication & Microstructures",
		"Within Lab Tibial Tray medical implant",
		"images/digdet/WithinLabPlate.png",
		560);?>
	</div>
	
		
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	2007_WCSMO7-5.jpg	
	</div>
	
<!-- agent based -->

	<!-- Quatar -->
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/9610b044e60728168229a02793070111.jpg", "559"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/Ant_Colony.jpg", "559"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/qatar.jpg", "200"); ?>
	</div>
	
	
<!-- human -->	

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/Benedikt-Isovist-1979-9.jpg", "559"); ?>
	</div>
	
<!-- Genetic -->
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("","","PpKV071KXO0"); ?>
		http://000studio.com/detail/2262/
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/BESO-MarxerBuilding-OptimisationStep2-©BollingerGrohmann.gif", "559"); ?>
		Geometry Optimization by Genetic Algorithm (Given topology of column configuration from Step 1 ‘BESO‘. Rotational adjustment of ‘column trees‘ where Genes = Rotations)
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	Karl Sims
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">

	Genetic evolution of a wheeled vehicle with Box2d
	https://www.youtube.com/watch?v=uxourrlPlf8
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	Attenanae and Satellite Boom
	</div>
	
<!-- The Models -->	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">

		<h1 style="color:#fff;">OUR MODEL TAXONOMY</h1>

		<table style="color:#aaa;">
		<tr>
			<td style="padding:20px;">

				<h3 style="color:#fff;">CHEMICAL MODELS</h3>
				<ul>
				<li>Reaction Diffusion</li>
				<li>Leaf Venation</li>
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
	
	<!-- Approach -->
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
	
		<b style="color:#fff;">Our Approach</b>
		<li><span style="color:#fff;">Hands on.</span> Learn by doing and applying to proto design problems.</li>
		<li><span style="color:#fff;">Design is always foregrounded.</span> The primary question is always how does this benefit the design process or design outcomes.</li>
		<li><span style="color:#fff;">Computing is the 21st century literacy.</span> We need to understand the underlying mechanics of the software we use, both to push the structures of today but also to envision the structures of tomorrow.</li> 
		<Br>
		<?php addAccentImageWithCredit("Biometric Workshop", 'images/dd/eyetracking_820.png', 305); ?>

	</div>
	
	<!-- Objectives -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		<b style="#fff;">Course Goals & Objectives</b>

		<li><span style="color:#fff;">Learn proven models for architectural generation</span></li>
		<li>Learn to use simulation tools and apply them to design problems</span></li>
		<li>Develop a critical approach to the use of simulation tools</li>
		<li>Examine the gap between digital models and real world physical processes</li>
		<li>Document work in a technical format<Br>
				<br>
		<?php addAccentImageWithCreditAndHeight("EZCT Architecture, Chair", 'images/dd/20090907174005.jpg', 600, 200, 50); ?>

	</div>
		
	<!-- Workshop -->
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		
		<span style="color:#fff;">Rhino Grasshopper</span><br>
		<span style="color:#aaa;">Galapagos, Kangaroo, Custom Modules and C#</span>
		
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		
		<span style="color:#fff;">Net Logo, Processing</span><br>
				<span style="color:#aaa;">Interactive demos, explainers, model code<span>
	</div>

	<!-- Project -->
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		Semester Project

		<li>Work in small groups (2) or individually</li>
		<li>A focused application of performance in the evolution of a design prototype</li>
		<li>Clear definition and evaluation of a performance-based methodology</li>
		<li>Compile simulation results (images, data, diagrams) in a tech presentation</li>
		<li>Should reference and build upon one of the presented models</li>
	</div>
	
	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		
		Computing experience?
		
	</div>

	<!-- Past Work -->
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	<?php 
    	$images = array('images/dd/Paper_DavidZhai_SimonMcGrown_GeorgeValdes-1.jpg',
						'images/dd/Paper_DavidZhai_SimonMcGrown_GeorgeValdes-2.jpg',
						'images/dd/Paper_DavidZhai_SimonMcGrown_GeorgeValdes-3.jpg',
						'images/dd/Paper_Eduardo Mayoral Gonzalez-1.jpg',
						'images/dd/Paper_Eduardo Mayoral Gonzalez-2.jpg',
						'images/dd/Paper_Kooho Jung and Jea Hee Han-8.jpg',
						'images/dd/Paper_SangYunLee-1.png',
						'images/dd/Paper_SangYunLee-2.png');
    	makeImageGrid("Past Student Work", "Excerpts from Student Technical Papers", $images, 4); 
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

	<!-- Closing -->	
	<div class="step"  style="font-size:18pt;"  data-x="<?php echo $x+=1000;?>" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
		Why Now?<Br>

		<li>Explosion of Computing Power, Highly Optimized Hardware</li>
		<li>CNC Fabrication &amp; Additive Manufacturing</li>
		<li>Tough math is largely abstracted</li>
		<li>Accessibility through Grasshopper</li>
	
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

		<b>For Next Week</b>		
		<li>Bring a computer with Rhino Grasshopper</li>
		<li>We will introduce the semester project next week</li>
		<li>We will introduce readings next week as well</li>
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



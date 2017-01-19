<?php 
include 'functions.php';
?>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>Digital Detailing: Testing and Analysis Intro</title>
    
    <meta name="description" content="Design Amplification" />
    <meta name="author" content="Mark Collins" />
	<!-- <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,400italic,700,700italic,200,300' rel='stylesheet' type='text/css'> -->

    <link href="css/impress-demo.css" rel="stylesheet" />
        
</head>

<body class="impress-not-supported">

<div class="fallback-message">
    <p>Your browser <b>doesn't support the features required</b> by impress.js, so you are presented with a simplified version of this presentation.</p>
    <p>For the best experience please use the latest <b>Chrome</b>, <b>Safari</b> or <b>Firefox</b> browser.</p>
</div>

<div id="impress">

	<!-- BEGIN PRESENTATION -->
		
	
	<!-- Schedule -->
	<div id="start" class="step"  data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		        A4707 Digital Detailing: Simulation and Analysis
<Br>
		<h2>Schedule</h2>

		<div style="float:left;width:200px;">

			Class 1<br>
			<b>Class 2</b><br>
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

		<div style="float:left;">
			Course Introduction<br>
			<b>Lecture, Worlding the World</b><br>
			Workshop #1, Ecotect Solar and Acoustics, Geco<br>
			Workshop #2, Ecotect Fluid, Air Flow, Radiance<br>
			Workshop #3, Rhino Geometric Analysis & Galapagos<br>
			Individual Meetings<br>
			Workshop #4, Biometric Workshop - Eyetracking<br>
			Individual Meetings<br>
			Workshop #5, Solidworks Finite Element Analysis<br>
			No Class (Election Day)<br>
			Individual Meetings<br>
			Group Presentation<br>
			Individual Meetings<br>
		</div>


	</div>	 
	

    
	
	<!-- Goals for Today -->
	<div class="step"  data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<p>Goals for Today</p>
		<li>Introduce approaches to using simulation in the design process</li>
		<li>Get introduced to simulation vocabulary and concepts</li>
		<li>Get under the hood</li>
		<li>Jump start to project thinking: how can you use simulation?</li>
		<Br>
		<?php addAccentImageWithCreditAndHeight("Class Syllabus", 'images/dd/SyllabusAccent.jpg', 620,350,100); ?>

	</div>	 
	
	<!-- Math Apology -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
	Sorry for the math!
	</div>
	
	<!-- Title Slide - Simulation, worlding the world -->
	<div class="step slide" data-x="5000" data-y="0" style="background-image:url('images/dd/whole_earth.png');">
        <span style="font-size:70px;line-height:80px;">Simulation</span><br>
        <span style="font-size:50px;line-height:75px;">Worlding the World</span><br>    
    </div>
    
    
	<!-- Outline -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		
		<li>Algebraic and Geometric Methods<Br></li>
		<li>Physics Based Modeling</li>
		<li>Agent Based Modeling</li>
		<li>Evolutionary Methods</li>
		<li>Machine Learning and Hybrid Techniques</li>

	</div>	 
	
    <!-- Extensive vs Intensive -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
	 	 <?php makeGenericSlideWithHeight("What are we trying to do?","Intensive and Extensive, RUR Atlas of Novel Tectonics", "images/dd/Rur_extensive_v_intensive_01.jpg", "660"); ?>
	</div>
	
	 <!-- Extensive vs Intensive -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
	 	 <?php makeGenericSlideWithHeight("What are we trying to do?","Intensive and Extensive, RUR Atlas of Novel Tectonics", "images/dd/Rur_extensive_v_intensive_02.jpg", "660"); ?>
	</div>
	
	
	<!-- How do we do it? Closed Loop Systems -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight("How? Make Explicit and Reduce Complexity...","Closed Loop Systems", "images/dd/closed_loop_system.png", "559"); ?>
	</div>

	<!-- How do we do it? Math Formulas -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php
		$math_images = array(
						'images/dd/c2c4a7f57947a786b00bba66d08b109d.png',
						'images/dd/4fef570fa684173cbc6e70a904dd5e66.png',
						'images/dd/bernoulli.png');
    	
    	makeImageGrid("How? Apply Mathematical Formulas", "Hookes Law, Navier Stokes Equations, Euler–Bernoulli Beam Equations", $math_images, 3); ?>
	</div>
	
	<!-- How do we do it? Mathematics Structures from Comp Geometry -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">	
		<?php
		$math_images = array(
						'images/dd/directed_graph.jpg',
						'images/dd/tensor_example.png',
						'images/dd/Example_of_2D_mesh.png');
    	
    	makeImageGrid("How? Use Mathematical Structures", "Graph, Tensor and Mesh", $math_images, 3); ?>
	</div>

	
	<!-- END MAJOR THEMES -->
	
	<!-- SECTION 1 ALGEBRAIC/GEOMETRIC TECHNIQUES -->
	
	
	<!-- ALGEBRAIC/Geometric -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		Algebraic/Geometric Methods
	</div>
	
	
	<!-- Heuristic -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
	
		<div style="float:right;">
			<?php addAccentImageWithCreditAndHeight("Eye Tracking Code, Processing.org", 'images/dd/Algebraic_equation_notation.svg.png', 400, 253, 50); ?>
		</div>
		
		Algebraic and Heuristic Models

		<li>Geometry is idealized</li>
		<li>Relationships are codified in weighted equations</li>
		<li>Doesn't capture local detail</li>

	</div>
	
	<!-- World Modeler -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Heuristic Based Prediction","World Modeler 3", "images/dd/WorldModel_combined.jpg", "559"); ?>
	</div>
	
	<!-- Acoustic Response -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">		
		<?php makeGenericSlideWithHeight("Heuristic Based Prediction","Acoustic Resonance in an Idealized Container", "images/dd/acoustic_resonance.png", "559"); ?>
	</div>
	
	<!-- Geometric -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		
		Geometric Methods
		
	</div>
	
	
	<!-- Curvature Analysis -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Curvature Analysis","Freeform surfaces from single curved panels, Evolute", "images/dd/Curvature_Analysis.jpg", "559"); ?>
	</div>
	
	<!-- Ray Casting -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Raycasting","Autodesk Ecotect", "images/dd/reflectance-combined.jpg", "559"); ?>
	</div>
	
	<!-- Ray Casting Optimizations: Revese  -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Optimization: Reverse","Autodesk Ecotect", "images/dd/raycasting_explanation.png", "559"); ?>
	</div>
	
	<!-- Ray Casting Optimizations: sampling -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Optimization","Sampling Density", "images/dd/Subdivisions.png", "559"); ?>
	</div>
	
	<!-- Ray Casting Optimizations: Shadow Maps -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Closing the Loop: Weather Data","Ecotect Shadow Maps", "images/dd/sky_dome.png", "548"); ?>
	</div>
	
	<!-- Ecotect Shadow Maps-->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Closing the Loop: Weather Data","Adding weather info to shadow maps", "images/dd/weather_data.png", "550"); ?>
	</div>

	<!-- Ecotect Radiance Results -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Results","Solar Insolation", "images/dd/ecotect-2.png", "559"); ?>
	</div>

	<!-- Ray Casting: Acoustics-->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Raycasting: Acoustics?","Acoustic Example", "images/dd/acousticAccent.png", "559"); ?>
	</div>
	
	<!-- Physics Based Modeling -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<div style="float:right;">
			<?php addAccentImageWithCreditAndHeight("Force Directed Graph", 'images/dd/force_directed_sm.png', 400, 253, 50); ?>
		</div>
		
		Physics Based Modeling

		<li>Incorporating time and energy</li>
		<li>Dynamical, not static</li>
		<li>Subject to chaos</li>
		
	</div>


	<!-- The Blob -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Soft Body Physics","The Blob - Greg Lynn Embriological House", "images/dd/greg_lynn_embriological_house.jpg", "559"); ?>
	</div>
	
	
	<!-- Soft Body Physics Gaudi Chain Models -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Soft Body Physics","Gaudi Chain Models", "images/dd/gaudi.png", "559"); ?>
	</div>
	
	
	<!-- Force Directed Graph -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Soft Body Physics","Gaudi Chain Models", "images/dd/force_directed.png", "559"); ?>
	</div>
	
	
	<!-- Force Directed Graph Animation -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("Force Directed Graph", "Studio Professors and Startups at GSAPP", "QlXRapQW4q0"); ?>
	</div>


	<!-- Soft Body Physics Cadenary -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Soft Body Physics","Cadenary Software, Processing", "images/dd/CADenary_AxelKilian_clipped.jpg", "559"); ?>
	</div>


	<!-- Soft Body Physics Cadenary Paper -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php
		$hanging = array(
					'images/dd/killian-1.png',
					'images/dd/killian-2.png');
		makeImageGrid("Soft Body Physics", "Cadenary Software, Processing", $hanging, 2); ?>
	</div>
		
		
	<!-- Intro to FEA -->

	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Finite Element Analysis","FEA Process", "images/dd/introToFEA_02.jpg", "559"); ?>
	</div>

		
	<!-- FEA Phillipe Morel -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php 
		$chairs = array(
				'images/dd/20090907172612.jpg',
				'images/dd/20090907172938.jpg',
				'images/dd/20090907173145.jpg',
				'images/dd/20090907173416.jpg' );
    	makeImageGrid("Finite Element Analysis", "EZCT Architecture", $chairs, 4); ?>
	</div>
		
	
	<!-- FEA Softkill -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php 
		$soft_images = array(
						'images/dd/soft_kill-1.png',	
						'images/dd/soft_kill-2.png',
						'images/dd/soft_kill-3.png'); 
		makeImageGrid("Finite Element Analysis", "Soft Kill", $soft_images, 3); ?>
	</div>

	<!-- Finite Volume -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		
	<?php
		$volume_images = array(
						'images/dd/Fluid flow for the rest of us-clip_01.jpg',
						'images/dd/Fluid flow for the rest of us-clip-02.jpg');
		makeImageGrid("Finite Volume Method", "Computational Fluid Dynamics", $volume_images, 2); ?>
</div>
	
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Fluid Dynamics","Winair and Ecotect", "images/dd/fluid_flow.png", "559"); ?>
	</div>

	<!-- Agent Based -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<div style="float:right;">
			<?php addAccentImageWithCreditAndHeight("Evolution as Design Agency", 'images/dd/4445999.gif', 400, 253, 50); ?>
		</div>
		
		Agent Based - Modeling Intelligence
	</div>
	
	<!-- Agent Based - Crowd Flows -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php 
		$crowd_images = array(
							'images/dd/crowd_flows-1.png',
							'images/dd/crowd_flows-2.png');
		makeImageGrid("Egress Modeling", "Crowd flows - University of Washington Sigraph 2006", $crowd_images, 2); ?>
	</div>
	
	
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("Agent Based Simulation", "Continuum Crowds", "lGOvYyJ6r1c"); ?>
	</div>

	<!-- Slum Growth -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Agent Based Modeling","Joanna Barros, City of Slums", "images/dd/barros_slum_growth.jpg", "559"); ?>
	</div>
	
	
	<!-- Evolutionary -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<div style="float:right;">
			<?php addAccentImageWithCreditAndHeight("Evolution as Design Agency", 'images/dd/paleoweb-evolution-poster-sm.jpg', 400, 500, 50); ?>
		</div>
		
		Evolutionary Design

		<li>Optimizes search process</li>
		<li>Complex multi-variable spaces</li>
		<li>Key principals: Iteration. Selection. Mutation.</li>		
	</div>


	<!-- Endless Forms -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Evolutionary","Endless Forms", "images/dd/Endless_Forms_Website.jpg", "559"); ?>
	</div>
	
	
	<!-- Machine Learning -->
	
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">

	Machine Learning - modeling value from big data<br>
	Uniting heuristics (generalizations) with local contingencies.<Br>
	
	<b>Unsupervised Learning</b>
		<li>Feature Discovery i.e. clustering</li>
		<li>Drives recommendation engines</li>
		<li>Google Flu Project</li>

	<b>Supervised Learning</b>
		Computer is able to make useful assertions<br>	Why its important: Labeling/Scoring<Br>

			<li>This is suspicious activity, probably a burglar</li>
			<li>There is a face in this image.</li>
			<li>This is an attractive building</li>
			<li>This person can afford a mortgage.</li>
				
	</div>
	
	
	<!-- Pauls Project -->
	
	<!-- RSVP  -->
 	<div class="step" data-x="5000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
        <?php makeGenericSlideWithHeight("Rapid Serial Visual Presentation","Columbia University Laboratory for Intelligent Imaging and Neural Computing", "images/BCI1.png", "633"); ?>
    </div>
 
    <!-- A-Ha!	and Oh No!  -->
 	<div class="step" data-x="5000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
        <?php makeGenericSlideWithHeight("Neural Recognition and the P300","Columbia University Laboratory for Intelligent Imaging and Neural Computing", "images/BciRecognition.jpg", "633"); ?>
    </div>
       
	<!-- Neuroscience Collaboration	  -->
     <div class="step" data-x="5000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	 <?php makeGenericSlideWithHeight("Cloud Lab: Neuroscience and Spatial Cognition","Columbia University Laboratory for Intelligent Imaging and Neural Computing", "images/644902068-7.png", "559"); ?>
    </div>
    

	<!-- combinatory many worlds browsing -->
		<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("Combinatory Approaches", "Many Worlds Browsing,", "dAjYi4ePHmQ"); ?>
	</div>
	
	
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;	">

		<b>For Next Week</b>		
		<li>Install Ecotect Trial</li>
		<li>Bring a model</li>
		<li>We will use it in the workshop</li>
		<li>OBJ file is ideal. Be careful of units</li>
		<li>&lt; 100,000 faces</li>
		<li>You can use the "mesh" command in Rhino</li>
		<li>We will introduce the semester project as well</li>
		
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



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
		
	
	<!-- Schedule -->
	<div id="start" class="step"  data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		        A4707 Digital Detailing: Simulation and Analysis
<Br>
		<h2>Schedule</h2>

		<div style="float:left;width:200px;">

			Class 1<br>
			Class 2<br>
			Class 3<br>
			Class 4<br>
			<b>Class 5</b><br>
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
			Lecture, Worlding the World<br>
			Workshop #1, Ecotect Solar and Acoustics, Geco<br>
			Workshop #2, Ecotect Fluid, Air Flow, Radiance<br>
			<b>Workshop #3, Rhino Geometric Analysis & Galapagos</b><br>
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
		<li>Introduce to Rhino and Grasshopper</li>
		<li>Recapping the concept of Modeling/Representation</li>
		<li>How to think and model topologically</li>
		<li>Getting our hands dirty with Geometry!</li>
		<Br>
		<?php addAccentImageWithCreditAndHeight("Class Syllabus", 'images/dd/SyllabusAccent.jpg', 620,350,100); ?>

	</div>	 
	
	
	<!-- MAJOR THEMES START -->	
	
	<!-- Outline -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		
		<b>Modeling / Representation</b>

	</div>
	
	<!-- Modeling/Representation -->

	<!-- Title Slide - Simulation, worlding the world -->
	<div class="step slide" data-x="5000" data-y="0" style="background-image:url('images/dd/whole_earth.png');">
        <span style="font-size:70px;line-height:80px;">Simulation</span><br>
        <span style="font-size:50px;line-height:75px;">Worlding the World</span><br>    
    </div>
    
    
    <!-- World to Model -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Thought Process","Mental map", "images/dd/Representation_media/world_to_model.png", "450"); ?>
	</div>


    <!-- Different methods of representation -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Methods of Representation","Examples of human as model", "images/dd/Representation_media/methods_of_representation.png", "450"); ?>
	</div>
    
    
	<!-- Our method of representation -->
	
	<!-- Computational Geometry -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Methods of Representation for Analysis</b><br>
		- Background of Computational Geometry
		
	</div>
	

	<!-- TRON and Boolean Logic -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Boolean Logic","Primitive geometry, add, subtract and union", "images/dd/Representation_media/image8.jpg", "559"); ?>
	</div>

	<!-- TRON and Boolean Logic -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Boolean Logic","Primitive geometry, add, subtract and union", "images/dd/Representation_media/image7.jpg", "559"); ?>
	</div>

	<!-- Spline Geometry -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php 
		$chairs = array(
				"images/dd/Representation_media/image18.gif",
				"images/dd/Representation_media/image19.gif",
				"images/dd/Representation_media/image20.gif",
				"images/dd/Representation_media/image21.gif" );
    	makeImageGrid("Spline Geometry", "Degrees of Curvature", $chairs, 2); ?>
	</div>

	<!-- NURBS Surface -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Mathematical Surfaces","NURBS Geometry", "images/dd/Representation_media/image22.jpg", "559"); ?>
	</div>

	<!-- NURBS Surface -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("UV Mapping","NURBS Geometry", "images/dd/Representation_media/image26.jpg", "559"); ?>
	</div>


	<!-- Why choose one over the other? -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		
		<b>Why choose one over the other?</b>
		
	</div>


	<!-- Topological thinking / Graph -->
	
	
	<!-- Measurment -->

	
	<!-- Curvature Analysis -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Measurement","Freeform surfaces from single curved panels, Evolute", "images/dd/Curvature_Analysis.jpg", "559"); ?>
	</div>
	
	<!-- Ray Casting -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Measurement","Autodesk Ecotect", "images/dd/reflectance-combined.jpg", "559"); ?>
	</div>
	
	<!-- Ray Casting Optimizations: sampling -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Measurement","Sampling Density", "images/dd/Subdivisions.png", "559"); ?>
	</div>
	

	<!-- Intro to FEA -->

	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Discretization","FEA Process", "images/dd/introToFEA_02.jpg", "559"); ?>
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
		
	

	<!-- Header to lead into Prezi Topological Thinking -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">

		Thinking and Modeling Topologically
				
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



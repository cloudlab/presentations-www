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
	<div id="start" class="step"  data-x="0" data-y="0" style="line-height:36px;font-size:24px;">
		        A4707 Digital Detailing: Simulation and Analysis
<Br>
		<h2>Schedule</h2>

		<div style="float:left;width:200px;color:#ccc;">

			Class 1<br>
			Class 2<br>
			Class 3<br>
			Class 4<br>
			Class 5<br>
			Class 6<br>
			<b style="color:#fff">Class 7</b><br>
			Class 8<br>
			Class 9<br>
			Class 10<br>
			Class 11<br>
			Class 12<br>
			Class 13<br>
		</div>

		<div style="float:left;color:#ccc;">
			Course Introduction<br>
			Lecture, Worlding the World<br>
			Workshop #1, Ecotect Solar Insolation and Acoustics<br>
			Workshop #2, Rhino Grasshopper and Geometric Analysis<br>
			Workshop #3, Geco, Winair and Radiance<br>
			Individual Meetings<br>
			<b style="color:#fff">Workshop #4, Physics Based Modeling</b><br>
			Individual Meetings<br>
			Workshop #5, Biometric or FEA<br>
			No Class (Election Day)<br>
			Individual Meetings<br>
			Group Presentation on Research<br>
			Individual Meetings<br>
		</div>


	</div>	 
	

    
	
	<!-- Goals for Today -->
	<div class="step"  data-x="1000" data-y="0" style="line-height:48px;font-size:36px;">
		<p>Goals for Today</p>
		<li>Introduce physics based modeling paradigm</li>
		<li>Part #1 Processing and Force Directed Graphs</li>
		<li>Part #2 Kangaroo and Optimization</li>

	</div>	 
	
	
	<!-- Physics Based Modeling -->
	<div class="step" data-x="2000" data-y="0" style="line-height:40px;font-size:24px;">
		<div style="float:right;">
			<?php addAccentImageWithCreditAndHeight("Force Directed Graph", 'images/dd/force_directed_sm.png', 400, 253, 50); ?>
		</div>
		
		Physics Based Modeling
		<li>Physical forces applied to structures</li>
		<li>Dynamical, not static</li>
		<li>Will often converge to a solution</li>
		<li>Solutions can be structurally optimal</li>
		<li>Subject to chaos due to how forces are applied</li>
		<li>Forces are applied iteratively in small increments</li>
		<li>Smaller increments = less error</li>
	</div>


	<!-- Angry Birds -->
	<div class="step" data-x="3000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Example: Rigid Body Physics","Angry Birds", "images/dd/Angry-Birds-Games.jpg", "559"); ?>
	</div>
	
	<!-- Moss Stack -->
	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Example: Rigid Body Physics","MOS Sand", "images/dd/mos-sand.jpg", "559"); ?>
	</div>
	
	<!-- AMS -->
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("Example: Rigid Body Physics", "Sphere Packing for Advanced Media Studio", "_uY9C18ydAI"); ?>
	</div>
	
	<!-- The Blob -->
	<div class="step" data-x="6000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Example: Soft Body Physics","The Blob - Greg Lynn Embriological House", "images/dd/greg_lynn_embriological_house.jpg", "559"); ?>
	</div>
	
	<!-- Soft Body Physics Cadenary -->
	<div class="step" data-x="7000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Soft Body Physics","Cadenary Software, Processing", "images/dd/CADenary_AxelKilian_clipped.jpg", "559"); ?>
	</div>
	
	<!-- Force Directed Graph Animation -->
	<div class="step" data-x="8000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("Example: Force Directed Graph", "Studio Professors and Startups at GSAPP, Proxy Design Studio", "QlXRapQW4q0"); ?>
	</div>

	<!-- Part 1 -->
	<div class="step" data-x="9000" data-y="0" style="line-height:36px;font-size:24px;">
	Physics Based Modeling Part #1<br>&nbsp;<br>
		<b><span style="line-height:48px;font-size:36px;">Spring Dynamics</span></b><br>&nbsp;<br>
		
		<b>Processing</b> http://processing.org<br>
		<b>Traer Physics Library</b> http://murderandcreate.com/physics/<br>
		<b>In Class Examples</b> http://proxyarch.com/dd/physics_examples.zip<br>&nbsp;<br>
		
	Example 1 - Pendulum
	<li>Experiment with variables</li>
Example 2 - Cloth
<li>Experiment with variables</li>
Example 3 - Tree
<li>Experiment with variables</li>
Example 4 - Catenary
<li>Create your own network</li>
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



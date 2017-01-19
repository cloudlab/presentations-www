<?php 
include 'functions.php';
?>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>A4707 Evolutionary Design Day #5</title>
    
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
		
	<div id="start" class="step slide" data-x="0" data-y="0" style="background-image:url('images/evodes-intro-cover.png');">
        
     <h2><b>A4707 Evolutionary Design</b></h2>
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

	<!-- Schedule -->
	
	<div class="step" data-x="1000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0" style="line-height:36px;font-size:24px;">
		
		A4707 Evolutionary Design Schedule
		<Br><br>
		
		<div style="float:left;width:140px;color:#888;">
		 	Tech Intro<br>
			Class 1<br>
			Class 2<br>
			Class 3<br>
			Class 4<br>
			Class 5<br>
			<span style="color:#fff;">Class 6</span><br>
			<span style="color:#ccc;">
			Class 7<br>
			Class 8<br>
			Class 9<br>
			Class 10<br>
			Class 11<br>
			Class 12<br>
			TBD<br>
			</span>
		</div>
		
		<div style="float:left;width:140px;color:#888;">
		 	n/a<br>
			Lecture<br>
			Workshop<br>
			Workshop<br>
			Discussion<br>
			Meetings<br>
			<span style="color:#fff;">Workshop</span><br>
			<span style="color:#ccc;">
			Meetings<br>
			Workshop<br>
			Meetings<br>
			Discussion<br>
			Present<br>
			Lecture<br>
			Final<br>
			</span>
		</div>
		
		<div style="float:left;color:#888;">
			Course Introduction<br>
			Crash Course: Evolutionary Principles<br>
			Analysis & Visualization in Rhino Grasshopper<br>
			Environment Simulation in Ladybug<br>
			Evolution Reading Discussion <br>
			Individual or Group Meetings<br>
			<span style="color:#fff;">Morphogenesis in Grasshopper</span><br>
			<span style="color:#ccc;">
			Individual or Group Meetings<br>
			Evolutionary Solver in Rhino Galapagos<br>
			Individual or Group Meetings<br>
			Technical Paper Reading Discussion<br>
			Short Presentations of Research to Class<br>
			Beyond Evo, Advanced Computing in Architecture<br>
			Paper Submission and Review<br>
			</span>
		</div>
	</div>	

	
     <div class="step" data-x="2000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	 <?php makeGenericSlideWithHeight("Workshop Goal #1","Explore Grids in Unit Space and UV Space", "images/evodes/Morphology1.PNG", "290"); ?>
    </div>
    
    
     <div class="step" data-x="3000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	 <?php makeGenericSlideWithHeight("Workshop Goal #2","Generate patterns with Simplex Noise, Boolean operations to build complex patterns", "images/evodes/Morphology2.PNG", "290"); ?>
    </div>
    
    
     <div class="step" data-x="4000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	 <?php makeGenericSlideWithHeight("Workshop Goal #3","Use pattern output to map modules to complex surfaces", "images/evodes/Morphology3.PNG", "290"); ?>
    </div>


	<!-- Lets Workshop -->

	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Workshop time!</b>
		<br>
		Make sure your running latest Grasshopper possible<br>
		Download samples files (Emailed)<br>
		Download and Install 4D Noise:<br><li>http://www.food4rhino.com/project/4dnoise</li><br>		
	</div>	
		

	<!-- Next Class -->
	
	<div class="step"  data-x="6000" data-y="0" style="line-height:36px;font-size:24px;">

		<span style="font-size:48px;line-height:56px;">
		<b>Next Class: Group Meetings</b>
		</span>
		<br>
		<b>For Next Week</b>		
		<li>Have started a Grasshopper module based on our discussion</li>
		<li>Follow up on any decisions or research suggested at last meeting</li>
		<li>Simple statement of purpose - what is the fitness, and what is the generative procedure?</li>
	</div>
    
    
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



<?php  include 'functions.php';
$head = 0;
$headY = 0;
 ?>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>A4707 Digital Detailing Intro</title>
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
		
	<div id="start" class="step slide" data-x="0" data-y="0" style="background-image:url('images/digdet/Dig_Det_cover.jpg');">
        <h2><b>A4707 Digital Detailing</b></h2>
        Day/Time: Th 6:00pm - 8:00pm<br>
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
	
	
	<!-- Syllanus Intro -->
	 <div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:48px;font-size:42px;">	
	 	Course Syllabus<Br><br>
	 	<?php addRecessedImage(
	 	"images/digdet/DigitalDetailingSyllabus-1.jpg", 
	 	"600",
	 	"400",
	 	"200"); ?>
	</div>
	  
	  
	<!-- Goals and Motivations -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;color:#eee;">
		<b style="color:#fff;">Course Goals &amp; Objectives</b>
		<li><b>Exploration of geometric rationalization, computational fabrication and automated construction</b></li>
		<li>Learn to use simulation tools and apply them to design problems</li>   <!-- false color? -->
		<li>Develop a critical approach to the use of simulation tools</li>		<!-- world modeler? -->
		<li>Examine the gap between digital models and real world physical processes</li>	<!-- air flow? -->
		<li>Understand fundamentals of computational geometry and analysis</li>		<!-- Fea polygon? -->
		<li><b>Evaluate new software, utilities and protocols for design analysis</b></li>			<!--  -->
	</div>
		
  	
  	<!-- Evo Des vs Dig Det -->
  	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"",
	 	"", 
	 	"images/digdet/EvoDesAndDigDet.png", 
	 	"718"); ?>
	</div>


	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:48px;font-size:36px;color:#eee;">
		
		<b>Topics Covered</b><Br>
		
		Geometric Rationalization<br>
		Computational Fabrication &amp; Microstructures<Br>
		Construction &amp; Logistics Automation<br>
		Reality Computing<br>
	</div>
	
	<!-- Spline Geometry -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php 
		$chairs = array(
				"images/dd/Representation_media/image18.gif",
				"images/dd/Representation_media/image19.gif",
				"images/dd/Representation_media/image20.gif",
				"images/dd/Representation_media/image21.gif" );
    	makeImageGrid("Geometric Rationalization", "Spline Geometry, Degrees of Curvature", $chairs, 2); ?>
	</div>

	<!-- Metal Printing -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
		"Fabrication & Microstructures",
		"Within Lab Tibial Tray medical implant",
		"images/digdet/WithinLabPlate.png",
		560);?>
	</div>
	
    <!-- Parallel Robot  -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0">
		<?php makeVideoSlide("Construction & Logistics Automation", "Adept Quattro Parallel Robot", "0-Kpv-ZOcKY"); ?>
    </div>
	
    <!-- Self Assembling Robot  -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0">
		<?php makeVideoSlide("Construction & Logistics Automation", "Programmable self-assembly in a thousand-robot swarm (01:06)", "xK54Bu9HFRw"); ?>
    </div>
    
    
	<!-- Allen Lab -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
		"Reality Computing",
		"View Planning and Automated Data Acquisition for Complex Sites, CU Robotics Group",
		"images/digdet/AllenResults.png",
		400);?>
	</div>
	
	<!-- Vrep -->
  	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeRecessiveSlideWithHeight(
	 	"Robotic Simulation",
	 	"VRep Library of Typical Robots, Effectors, Actuators", 
	 	"images/digdet/Robots.png", 
	 	"550"); ?>
	</div>
	  

	 <!-- Vrep Video #1  -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0">
		<?php makeVideoSlide("Robotics Simulation", "Robot Simulator: V-REP Demo Video January 2014", "gBYqOBdIcaY"); ?>
    </div>
	
    
    <!--Class Schedule -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0" data-rotate="0" data-scale="1.0" style="line-height:36px;font-size:24px;">		
		Digital Detailing<Br>
		<h2>Schedule</h2>
		<div style="float:left;width:240px;color:#ccc;">
		 	Building Tech Intro
			Class 1<br>
			<b style="color:#fff">Class 2</b><br>
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
			-<br>
			Course Introduction, Q&A<br>
			<b style="color:#fff">Readings Intro, “Hello World” Workshop</b><br>
			Workshop #1: Model Customization and Model Import<br>
			Reading Roundtable Discussion<br>
			Project Meetings<br>
			Lecture: Geometry, GCode & Automation<br>
			Workshop #2: Cutting, Welding & Spraying<br>
			Project Meetings (Kinne Week)<br>
			Workshop #3: LUA Scripting<br>
			Project Meetings<br>
			Lecture: Reality Computing & Emerging Bldg Tech<br>
			Project Presentations<br>
			Project Meetings<br>
		</div>
	</div>	 
	
	
	
	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php 
		$images = array(
				"images/digdet/Turing_Paper_1936-1.png",
				"images/digdet/lynn-1.png",
				"images/digdet/9780415278201.jpg",
				"images/digdet/Singularity-chap_5_8-1.png",
				"images/digdet/Brooks-0.png",
				"images/digdet/ooc-Industrial-1.png"
				 );
    	makeImageGrid("Readings", "", $images, 6); ?>
	</div>

	
	<!-- Reading  -->
	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
		<?php makeRecessiveSlideWithHeight(
	 	"Readings",
	 	"On Computable Numbers, Alan Turing, 1936", 
	 	"images/digdet/Turing_Paper_1936-1.png", 
	 	"550"); ?>
	</div>
	
	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php 
		$images = array(
				"images/digdet/07874383-photo-l-interieur-de-la-bombe-de-turing.jpg",
				"images/digdet/Enigma-Machine.jpg"
				 );
    	makeImageGrid("Readings", "The Bomb and The Enigma Machine", $images, 2); ?>
	</div>


	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
			<?php 
		$images = array(
				"images/digdet/lynn-1.png",
				"images/digdet/lynn-3.png"
				 );
    	makeImageGrid("Readings", "Folds, Bodies & Blobs, Grey Lynn 1988", $images, 2); ?>
	</div>



	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php 
		$images = array(
				"images/digdet/9780415278201.jpg",
				"images/digdet/Digital_Morphogenesis_s-3.png",
				"images/digdet/Digital_Production_s-4.png"
				 );
    	makeImageGrid("Readings", "Architecture in the Digital Age: Design and Manufacturing, Branko Kolarevic 2005", $images, 3); ?>
	</div>



	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php 
		$images = array(
				"images/digdet/Singularity-chap_5_8-1.png",
				"images/digdet/Singularity-chap_5_8-19.png",
				"images/digdet/Singularity-ChapterOne-9.png"
				 );
    	makeImageGrid("Readings", "The Singularity Is Near: When Humans Transcend Biology, Ray Kurzweil 2006", $images, 3); ?>
	</div>



<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php 
		$images = array(
				"images/digdet/Brooks-0.png",
				"images/digdet/Brooks-2.png",
				"images/digdet/Brooks-1.png"
				 );
    	makeImageGrid("Readings", "Fast, Cheap and Out of Control, Rodney Brooks 1987, 1989", $images, 3); ?>
	</div>



<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php 
		$images = array(
				"images/digdet/ooc-Industrial-1.png",
				"images/digdet/ooc-Industrial-2.png"
				 );
    	makeImageGrid("Readings", "Out Of Control: The New Biology Of Machines, Social Systems, And The Economic World: Kevin Kelly, 1995", $images, 3); ?>
	</div>



	<!-- Next Class -->
	<div class="step"  data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<span style="font-size:48px;line-height:56px;">
		<b>Now: Hello World V-Rep Workshop</b>
		</span>
		<br>
		
	</div>
	
	<!-- Next Class -->
	<div class="step"  data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<span style="font-size:48px;line-height:56px;">
		<b>Next Class: Workshop, Model Customization and Model Import</b>
		</span>
		<br>
		<b>For Next Week</b>		
		<li>Make Sure You Are <b>Registered</b></li>
		<li>Bring Charged Laptop</li>
		
		<br>
							<div style="text-align:right;color:#DDD;font-size:24px;">
						 		<h2><b>A4707 Digital Detailing</b></h2>
								Arch Technology Sequence, Elective<Br>
								<div style="">
								<div style="padding:0px;color:#DDD;font-size:24px;">
									 mlc2115 @ProxyMark &nbsp;&nbsp;<b>Mark Collins</b><br>
									 th2114 @ProxyToru &nbsp;&nbsp;<b>Toru Hasegawa</b>
								</div>
								</div>
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

<!--
    
    The `impress()` function also gives you access to the API that controls the presentation.
    
    Just store the result of the call:
    
        var api = impress();
    
    and you will get three functions you can call:
    
        `api.init()` - initializes the presentation,
        `api.next()` - moves to next step of the presentation,
        `api.prev()` - moves to previous step of the presentation,
        `api.goto( idx | id | element, [duration] )` - moves the presentation to the step given by its index number
                id or the DOM element; second parameter can be used to define duration of the transition in ms,
                but it's optional - if not provided default transition duration for the presentation will be used.
    
    You can also simply call `impress()` again to get the API, so `impress().next()` is also allowed.
    Don't worry, it wont initialize the presentation again.
    
    For some example uses of this API check the last part of the source of impress.js where the API
    is used in event handlers.
    
-->

</body>
</html>



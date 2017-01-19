<?php  include 'functions.php';
$head = 0;
$headY = 0;
 ?>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>Search Algorithmic Design Day #1</title>
    
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
		
	<div id="start" class="step slide" data-x="0" data-y="0" style="background-image:url('images/matt_mirror.jpg');">
        
        <h2><b>Search: Algorithmic Design</b></h2>
        A4711 TU 7:00pm - 9:00pm<br>
		Visual Studies Sequence, Session A<Br>

        <div style="">
			<div style="padding:20px;color:#fff;font-size:24px;">
				Instructors:<br>
				<b>Mark Collins</b> mlc2115 @ProxyMark<br>
				<b>Toru Hasegawa</b> th2114 @ProxyToru
			</div>
        </div>
    </div>

	<!-- Welcome -->
	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<span style="font-size:48px;">Welcome!</span>	
	</div>

	<!-- Goals for Today -->
		
	<div class="step"  data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:48px;font-size:36px;">
		<p>Goals for Today</p>
		<li><b>Why Algorithmic Design?</b></li>
		<li><b>Day #1 Workshop: Intro to Processing</b></li>
		<li>Schedule</li>
		<li>Project</li>
		<li>For Next Class</li>
	</div>	 
	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<b>Why Algorithms?</b> Why Processing?
	</div>
	
	<!--
	SOJ2.jpg
	SOJ3.jpg
	SOJ4.jpg
	-->
	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeRecessiveSlideWithHeight(
	 	"Why Processing?",
	 	"Stabile Center Perforation Study", 
	 	"images/SOJ3.jpg", 
	 	"550"); ?>
	 </div>


	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Why Algorithms?<br><span style=\"font-size:18pt;\">Where We Started</span>", 
		"Stabile Center Perforation Study in Processing", 
		"GCnnlVKjMXo"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Why Algorithms?<br><span style=\"font-size:18pt;\">Where We're Going</span>", 
		"On Demand Architecture, GSAPP Brain Hacking Studio", 
		"sW-L8D--ZF0"); ?>
	</div>

	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Why Algorithms?<br><span style=\"font-size:18pt;\">Visualize Data</span>", 
		"Van Alen Brain Hacking Workshop", 
		"GmrQRuO2RkQ"); ?>
	</div>	
		
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Why Algorithms?<br><span style=\"font-size:18pt;\">Augment Your Workflow</span>", 
		"Eye Tracking Architecture in Processing, Anna Stork Brain Hacking Studio", 
		"G2Zvr32iJUU"); ?>
	</div>

	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Why Algorithms?<br><span style=\"font-size:18pt;\">Build the Impossible</span>", 
		"Mechaneu v1 Spherical Patterning", 
		"l3xxDxlsIdA"); ?>
	</div>
	

    <!-- Other Architects Using Processing  -->

	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeRecessiveSlideWithHeight(
	 	"Why Algorithms?",
	 	"Branching Morphogenesis, Sabin+Jones LabStudio", 
	 	"images/search/branching-morphogenesis-9-hires.jpg", 
	 	"550"); ?>
	 	<!--
	 		branching-morphogenesis-9-hires.jpg
	branching-morphogenesis-bg.jpg
	 	-->
	 
	</div>
	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeRecessiveSlideWithHeight(
	 	"Why Algorithms?",
	 	"Platonic Solids, Michael Hansmeyer", 
	 	"images/search/platonic_solids2.jpg", 
	 	"550"); ?>
	 	
	 	<!--
	platonic_solids2.jpg
	platonic_solids6.jpg
		-->
	</div>
	
	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeRecessiveSlideWithHeight(
	 	"Why Algorithms?",
	 	"Nervous System Labs, Apps", 
	 	"images/search/nervous.jpg", 
	 	"550"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		Why Algorithms? <b>Why Processing?</b>
	</div>
	
	
	<!--
	processing_ide.png
	processing_window.jpg
	-->	
	
    <!-- About Processing  -->

	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Why Processing?",
	 	"What is Processing?", 
	 	"images/search/processing_environment_cropped.png", 
	 	"570"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Why Processing?",
	 	"What is Processing?", 
	 	"images/search/processing_help.png", 
	 	"570"); ?>
	</div>

	<!--Workshop start -->	
	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0" data-rotate="0" data-scale="1.0" style="line-height:36px;font-size:24px;">
		<span style="font-size:40px;line-height:50px;" >
		Now Code!<Br>
		<span style="font-size:24px;">Workshop: Getting Started with Processing</span>
		</span>
	</div>
	
	<!--Workshop end -->
	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Lecture Video", 
		"Email will follow - please register to receive it!", 
		"WHsYBz4iFlI"); ?>
	</div>
	
	<!--Class Schedule -->
	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0" data-rotate="0" data-scale="1.0" style="line-height:36px;font-size:24px;">
		
		Search Algorithmic Design<Br>
		
		<h2>Schedule</h2>

		<div style="float:left;width:200px;color:#ccc;">
		 	VS Introduction
			<b style="color:#fff">Class 1</b><br>
			Class 2<br>
			Class 3<br>
			Class 4<br>
			Class 5<br>
			Class 6<br>
			TBD<br>
			Project Due<br>
		</div>

		<div style="float:left;color:#ccc;">
			Course Introduction<br>
			<b style="color:#fff">Workshop #1, Intro to Processing</b><br>
			Workshop #2, Objects and Behaviors<br>
			Individual Meetings<br>
			Workshop #3, Hierarchies and Relationships<br>
			Individual Meetings<br>
			Workshop #4, Working with Data<br>
			Last Troubleshooting/Help Session<br>
			Submit Processing Sketch<br>
		</div>
	</div>	 
	
			
	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Course Project", 
		"Past Student Work, Search Algorithmic Design", 
		"Wk5Q_hBof64"); ?>
	</div>


	<!-- Questions & Office Hours -->
	
	<div  class="step"  data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
	
		<span style="font-size:48px;line-height:56px;">
		<b>Questions and Office Hours</b>
		</span>
		<li>Email is always a good option! Make sure to send to <b>both</b> mlc2115 and th2114</li>
		<li>If you have a question about the class (or anything else!) you can also find us after class each week</li>
		<li>Once projects are underway, we will have individual meetings during class times as well as additional scheduled office hours</li>
		
		<br>
		<br>
		<b>Auditing?</b>
		<li>It never works out - for you or us!</li>
		<li>Please be registered for the course</li>
		<li>Exceptions can be granted in extenuating circumstances</li>
	</div>
	
	
	<!-- Next Class -->
	<div class="step"  data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		
		<span style="font-size:48px;line-height:56px;">
		<b>Next Workshop: Objects and Behaviors</b>
		</span>
		<br>
		<b>For Next Week</b>		
		<li>Be registered</li>
		<li>Class materials for next week's workshop will be sent out via email</li>
		<li>We'll ask you take a look through a short tutorial on objects before class</li>
		<li>Charge your laptops!</li>
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



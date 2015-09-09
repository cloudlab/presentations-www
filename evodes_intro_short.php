<?php 
include 'functions.php';
$x = 0;
$shift = 1000;
?>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>A4707 Evolutionary Design Intro</title>
    <meta name="description" content="Evolutionary Design Short Introduction for GSAPP Tech Presentations" />
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
		
	<div id="start" class="step slide" data-x="<?php echo $x+=$shift;?>" data-y="0" style="background-image:url('images/evodes-intro-cover.png');">
        
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


	<!-- Syllabus Recap -->

	<div class="step" data-x="<?php echo $x+=$shift;?>" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Evolutionary Design</b>
		<p style="color:#aaa;">This seminar presents evolutionary systems and models, alongside other iterative 
		design approaches, as pragmatic and open-ended tools for realizing architectural structures. 
		Evolution provides a powerful framework and example of how natural systems can bootstrap to 
		increasingly sophisticated outcomes.<br><br>
		</p>
		<?php
			$imagesb = array(
		'images/evodes/EvoDes_Syllabus-1.png',
		'images/evodes/EvoDes_Syllabus-2.png');
makeImageGrid("", "", $imagesb, 3); 
	?>
	
	<!--	<?php addAccentImageWithCreditAndHeight("Class Syllabus", 'images/evodes-SyllabusAccent.jpg', 620,350,100); ?> -->

	</div>
	
	
	<div class="step" data-x="<?php echo $x+=$shift;?>" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		<b style="#fff;">Course Goals & Objectives</b>
		<span style="color:#fff;">
		<li>Exploration of evolutionary and iterative design paradigm</li>
		<li>Learn to use simulation tools and apply them to design problems</li>   <!-- false color? -->
		</span>
		<li>Develop a critical approach to the use of simulation tools</li>		<!-- world modeler? -->
		<li>Examine the gap between digital models and real world physical processes</span></li>	<!-- air flow? -->
		<li>Understand fundamentals of computational geometry and analysis</li>		<!-- Fea polygon? -->
		<li>Evaluate new software, utilities and protocols for design analysis</li>			<!-- bci`? -->
		<li>Document work in a technical format meeting publications standards</li><Br>			<!-- tech paper -->

		<?php addAccentImageWithCreditAndHeight("EZCT Architecture, Chair", 'images/dd/20090907174005.jpg', 600, 200, 50); ?>
		<!-- <?php addAccentImageWithCreditAndHeight("Many Worlds Browsing, 2011", 'images/dd/ManyWorlds_620.png', 600, 200, 50); ?>	 -->
	</div>
	
	
	<div class="step" data-x="<?php echo $x+=$shift;?>" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		
		<div style="float:right;">
			<?php addAccentImageWithCreditAndHeight("Galapagos Genetic Solver for Rhino", 'images/dd/Galapagos_Interface_Iteration3_sm.png', 400, 253, 50); ?>
		</div>
		
		Workshops include...<br><br>

		
		Software Category<br>
		
		<span style="color:#fff;"><li>Evolutionary Solvers</li></span>
		<li>Surface Analysis and Data Analysis</li>
		<li>Environmental Modeling</li>
		<li>Physics Based Modeling</li>

		<br>
		
		Workshop Software<br>

		<span style="color:#fff;"><li>Rhino Grasshopper & Galapagos</li></span>
		<li>Rhino Grasshopper</li>
		<li>Autodesk Ecotect & Geco for Grasshopper</li>
		<li>Kangaroo Physics for Rhino Grasshopper</li>		<!-- kangaroo -->
	</div>
	

	
	<!-- Project -->

	<div class="step" data-x="<?php echo $x+=$shift;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<span style="color:#ccc;">
		Semester Project
		<li>A focused application of performance in the evolution of a design prototype</li>
		<li>Clear definition and evaluation of a performance-based methodology</li>
		<li>Not just Visualization, <span style="color:#fff;">Quantification</span></li>
</span>
    	<?php 
    	$images = array(
'images/evodes/BST_CollinsHasegawa_ChristopherBotham_TravisHeim_FA14_01 copy.png',
'images/evodes/BST_CollinsHasegawa_ChristopherBotham_TravisHeim_FA14_02.png',
'images/evodes/BST_CollinsHasegawa_Extra_01.png',
'images/evodes/BST_CollinsHasegawa_LorenzoVillaggi_FA14_01.png',
'images/evodes/BST_CollinsHasegawa_BrianGalyean_LindseyWikstrom_FA14_01.png',
'images/evodes/BST_CollinsHasegawa_BrianGalyean_LindseyWikstrom_FA14_02.png'
);
    	makeImageGrid("", "Excerpts from Student Technical Papers", $images, 4); 
    	?>
    </div>	
	

	<div class="step" data-x="<?php echo $x+=$shift;?>" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
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
    
	<!-- Schedule -->
	
	<div class="step" data-x="<?php echo $x+=$shift;?>" data-y="0" data-z="0" data-rotate="0" data-scale="1.0" style="line-height:36px;font-size:24px;">
		
		A4707 Evolutionary Design Schedule
		<Br><br>
		
		<div style="float:left;width:140px;color:#ccc;">
		 	Tech Intro<br>
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
		</div>
		
		<div style="float:left;width:140px;color:#ccc;">
		 	n/a<br>
			Lecture<br>
			Workshop<br>
			Workshop<br>
			Discussion<br>
			Meetings<br>
			Workshop<br>
			Meetings<br>
			Workshop<br>
			Discussion<br>
			Meetings<br>
			Lecture<br>
			Present<br>
		</div>
		
		<div style="float:left;color:#eee;">
			Course Introduction<br>
			Crash Course: Evolutionary Principles<br>
			Analysis & Visualization in Rhino Grasshopper<br>
			Environment Simulation in Ecotect <br>
			Evolution Reading Discussion <br>
			Individual or Group Meetings<br>
			Physics Based Simulation in Kangaroo<br>
			Individual or Group Meetings<br>
			Evolutionary Solver in Rhino Galapagos<br>
			Technical Paper Reading Discussion<br>
			Individual or Group Meetings<br>
			Beyond Evo, Advanced Computing in Architecture<br>
			Final Presentations<br>
		</div>

	</div>	 

	<!-- Closer - "a place to think through our biomemetic future" -->
    
	<div class="step" data-x="<?php echo $x+=$shift;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Our Biomimetic Future as Designers",
	 	"Within Lab and Arup Engineers, 2014", 
	 	"images/evodes/Arup-3d-printed-steel_dezeen_468_1.jpg", 
	 	"559"); ?>
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



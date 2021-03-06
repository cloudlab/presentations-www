<?php 
include 'functions.php';
?>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>A4707 Evolutionary Design Day #1</title>
    
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

	
	<!-- Welcome -->
	
	<div class="step" data-x="500" data-y="0" style="line-height:36px;font-size:24px;">
		<span style="font-size:48px;">Welcome!</span>
	</div>

	<!-- Goals -->
	
	<div class="step"  data-x="1000" data-y="0" style="line-height:48px;font-size:36px;">
		<p>Goals for Today</p>
		<li>Recap Class Introduction</li>
		<li>Go Over Workshop Software and Schedule</li>
		<li>Crash Course in Evolutionary Design Vocabulary</li>
		<li>For Next Class...</li>
	</div>	 
	
	
	<!-- Intro to ourselves -->
	
	<div class="step" data-x="1500" data-y="0" style="line-height:36px;font-size:24px;">
		<br>
		Exploring computation in architecture from different perspectives<br>
		<br>

    	<span style="font-size:40px;color:#FFF;margin-left:20px;">Cloud Lab</span><br>
    	<span style="font-size:24px;color:#FFF;margin-left:40px;"><a href="http://thecloudlab.org">http://thecloudlab.org</a></span><br>
    	<span style="font-size:30px;color:#BBB;margin-left:40px;">Individual and group research projects on device culture and its potential impacts on the built environment</span>
    	<br>
    	<br>
    	<span style="font-size:40px;color:#FFF;margin-left:20px;">Proxy Design Studio</span><br>
    	<span style="font-size:24px;color:#FFF;margin-left:40px;"><a href="http://proxyarch.com">http://proxyarch.com</a></span><br>
    	<span style="font-size:30px;color:#BBB;margin-left:40px;">Applied research and collaboration with companies, institutions and individuals.</span>
    	<br>
    	<br>
    	<span style="font-size:40px;color:#FFF;margin-left:20px;">Morpholio Project</span><br>
    	<span style="font-size:24px;color:#FFF;margin-left:40px;"><a href="http://mymorpholio.com">http://mymorpholio.com</a></span><br>
    	<span style="font-size:30px;color:#BBB;margin-left:40px;">Consumer facing project to explore oportunities in scale through mass adoption and interconnection.</span><br>
    	<span style="font-size:20px;color:#666;margin-left:40px;">With Jeff and Anna Kenoff</span>
    </div>    
	
	
	  <!-- Main Theme #1  Accelerate -->
	<div id="" class="step" data-x="1000" data-y="1000" data-rotate="90" data-scale="1.0">        
        <?php makeThemeSlide("Common Theme #1","Accelerating Technological Growth","images/Kurzweil.jpg"); ?>
    </div>
    
    <!-- Main Theme #2  Amplify -->
	<div id="" class="step" data-x="900" data-y="1500" data-rotate="180" data-scale="1.0">
    	<?php makeThemeSlide("Common Theme #2","Amplifying Effects of Technology","images/Amplification.png"); ?>
    </div>
    
	<!-- Externilization Ishiguro	  -->
    <div id="" class="step" data-x="2000" data-y="1000" data-rotate="90" data-scale="1.0">
    	<?php makeThemeSlide("Common Theme #3","Automate and Externalize",""); ?>
    	<div class="translateDown" style="float:left;border-style:solid;border-width:10px;border-color:#666;position:relative;top:-400px;left:-50px;width:320px;height:213px;background-image:url('images/hiroshi_ishiguro_ge_258984c.jpg');font-size:20px;color:#FFF;" ></div>
    </div>
    
    
    
	<!-- Goals for Today -->
	
	
	<!-- Syllabus Recap -->

	<div class="step" data-x="2000" data-y="0" style="line-height:36px;font-size:24px;">

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

	</div>
	
	
	<!-- Course Goals Recap -->
	
	<div class="step" data-x="2500" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		<b style="#fff;">Course Goals & Objectives</b>

		<span style="color:#fff;"><li>Exploration of evolutionary and iterative design paradigm</li></span>
		<li>Learn to use simulation tools and apply them to design problems</span></li>   <!-- false color? -->
		<li>Develop a critical approach to the use of simulation tools</li>		<!-- world modeler? -->
		<li>Examine the gap between digital models and real world physical processes</li>	<!-- air flow? -->
		<li>Understand fundamentals of computational geometry and analysis</li>		<!-- Fea polygon? -->
		<li>Evaluate new software, utilities and protocols for design ideation</li>			<!-- bci`? -->
		<li>Document work in a technical format meeting publications standards<Br>			<!-- tech paper -->
	
		<span style="color:#AAA;margin-left:30px;">Ex: for submission to ACADIA or other similar conference</span></li>
		<br>
		<?php addAccentImageWithCreditAndHeight("EZCT Architecture, Chair", 'images/dd/20090907174005.jpg', 600, 200, 50); ?>

	</div>
	
	<div class="step" data-x="2500" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		<b style="#fff;">Course Goals & Objectives</b>

		<li>Exploration of evolutionary and iterative design paradigm</li>
		<li><span style="color:#fff;">Learn to use simulation tools and apply them to design problems</span></li>   <!-- false color? -->
		<li>Develop a critical approach to the use of simulation tools</li>		<!-- world modeler? -->
		<li>Examine the gap between digital models and real world physical processes</li>	<!-- air flow? -->
		<li>Understand fundamentals of computational geometry and analysis</li>		<!-- Fea polygon? -->
		<li>Evaluate new software, utilities and protocols for design ideation</li>			<!-- bci`? -->
		<li>Document work in a technical format meeting publications standards<Br>			<!-- tech paper -->
	
		<span style="color:#AAA;margin-left:30px;">Ex: for submission to ACADIA or other similar conference</span></li>
		<br>
		<?php addAccentImageWithCreditAndHeight("30 St Mary Axe, Norman Foster and Arup", 'images/dd/BDSP_02.jpg', 600, 200, 50); ?>

	</div>
	
	<div class="step" data-x="2500" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		<b style="#fff;">Course Goals & Objectives</b>
		<li>Exploration of evolutionary and iterative design paradigm</li>
		<li>Learn to use simulation tools and apply them to design problems</li>   <!-- false color? -->
		<li><span style="color:#fff;">Develop a critical approach to the use of simulation tools</span></li>		<!-- world modeler? -->
		<li><span style="color:#fff;">Examine the gap between digital models and real world physical processes</span></li>	<!-- air flow? -->
		<li>Understand fundamentals of computational geometry and analysis</li>		<!-- Fea polygon? -->
		<li>Evaluate new software, utilities and protocols for design ideation</li>			<!-- bci`? -->
		<li>Document work in a technical format meeting publications standards<Br>			<!-- tech paper -->
	
		<span style="color:#AAA;margin-left:30px;">Ex: for submission to ACADIA or other similar conference</span></li>
		<br>
		<?php addAccentImageWithCreditAndHeight("World3 Computer Simulation, The Limits to Growth 1972", 'images/dd/WorldModel_combined_sm.jpg', 600, 200, 50); ?>
	
	</div>
		
	<div class="step" data-x="2500" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		<b style="#fff;">Course Goals & Objectives</b>

		<li>Exploration of evolutionary and iterative design paradigm</li>
		<li>Learn to use simulation tools and apply them to design problems</li>   <!-- false color? -->
		<li>Develop a critical approach to the use of simulation tools</li>		<!-- world modeler? -->
		<li>Examine the gap between digital models and real world physical processes</li>	<!-- air flow? -->
		<li><span style="color:#fff;">Understand fundamentals of computational geometry and analysis</span></li>		<!-- Fea polygon? -->
		<li>Evaluate new software, utilities and protocols for design ideation</li>			<!-- bci`? -->
		<li>Document work in a technical format meeting publications standards<Br>			<!-- tech paper -->
	
		<span style="color:#AAA;margin-left:30px;">Ex: for submission to ACADIA or other similar conference</span></li>
		<br>
		<?php addAccentImageWithCreditAndHeight("Beijing National Aquatics Center and Weaire–Phelan structure, Arup", 'images/dd/WaterCube-2.png', 600, 200, 50); ?>
	
	</div>
	
	<div class="step" data-x="2500" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		<b style="#fff;">Course Goals & Objectives</b>

		<li>Exploration of evolutionary and iterative design paradigm</li>
		<li>Learn to use simulation tools and apply them to design problems</li>   <!-- false color? -->
		<li>Develop a critical approach to the use of simulation tools</li>		<!-- world modeler? -->
		<li>Examine the gap between digital models and real world physical processes</span></li>	<!-- air flow? -->
		<li>Understand fundamentals of computational geometry and analysis</li>		<!-- Fea polygon? -->
		<li><span style="color:#fff;">Evaluate new software, utilities and protocols for design ideation</span></li>			<!-- bci`? -->
		<li><span style="color:#fff;">Document work in a technical format meeting publications standards</span><Br>			<!-- tech paper -->
	
		<span style="color:#AAA;margin-left:30px;">Ex: for submission to ACADIA or other similar conference</span></li>
		<br>
		<?php addAccentImageWithCreditAndHeight("Many Worlds Browsing, 2011", 'images/dd/ManyWorlds_620.png', 600, 200, 50); ?>
	
	</div>
	
	
	<!-- Workshop Recap -->
	
	<div class="step" data-x="3000" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		
		<div style="float:right;">
			<?php addAccentImageWithCreditAndHeight("Galapagos Genetic Solver for Rhino", 'images/dd/Galapagos_Interface_Iteration3_sm.png', 400, 400, 50); ?>
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
		<li>Ecotect & Geco for Grasshopper</li>
		<li>Kangaroo Physics for Rhino Grasshopper</li>		<!-- kangaroo -->
	</div>
	
	<div class="step" data-x="3000" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		
		<div style="float:right;">
			<?php addAccentImageWithCreditAndHeight("Solar Design in Ecotect", 'images/dd/ecotect-2.png', 400, 400, 50); ?>
		</div>
		
		Workshops include...<br><br>

		Software Category<br>
		
		<li>Evolutionary Solvers</li></span>
		<li>Surface Analysis and Data Analysis</li>
		<span style="color:#fff;"><li>Environmental Modeling</li></span>
		<li>Physics Based Modeling</li>

		<br>
		Workshop Software<br>

		<li>Rhino Grasshopper & Galapagos</li>
		<li>Rhino Grasshopper</li>
		<span style="color:#fff;"><li>Ecotect & Geco for Grasshopper</li></span>
		<li>Kangaroo Physics for Rhino Grasshopper</li>		<!-- kangaroo -->
	</div>
	
	<div class="step" data-x="3000" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		
		<div style="float:right;">
			<?php addAccentImageWithCreditAndHeight("Kangaroo Physics Examples", 'images/dd/kangaroo.PNG', 400, 400, 50); ?>
		</div>
		
		Workshops include...<br><br>
		
		Software Category<br>
		
		<li>Evolutionary Solvers</li></span>
		<li>Surface Analysis and Data Analysis</li>
		<li>Environmental Modeling</li>
		<span style="color:#fff;"><li>Physics Based Modeling</li></span>

		<br>		
		Workshop Software<br>

		<li>Rhino Grasshopper & Galapagos</li>
		<li>Rhino Grasshopper</li>
		<li>Ecotect & Geco for Grasshopper</li>
		<span style="color:#fff;"><li>Kangaroo Physics for Rhino Grasshopper</li></span>		<!-- kangaroo -->
	</div>
	
	<!-- Project -->

	<div class="step" data-x="3500" data-y="0" style="line-height:36px;font-size:24px;">
		Semester Project

		<li>Work in small groups or individually</li>
		<li>A focused application of performance in the evolution of a design prototype</li>
		<li>Clear definition and evaluation of a performance-based methodology</li>
		<li>Compile simulation results (images, data, diagrams) in a technical presentation</li>
		<li>Should incorporate one or more of the workshop softwares</li>
		<li>Encouraged to include software, techniques or data sets from outside the workshops<br>
		<span style="color:aaa;margin-left:30px;">Ex. GIS, Data Mining, Processing, Arduino</span></li>
	</div>
	

	<div class="step" data-x="3700" data-y="0" style="line-height:36px;font-size:24px;">
		<span style="color:#ccc;">
		<?php 
    	$images = array(
			'images/evodes/BST_CollinsHasegawa_ChristopherBotham_TravisHeim_FA14_01 copy.png',
			'images/evodes/BST_CollinsHasegawa_ChristopherBotham_TravisHeim_FA14_02.png',
			'images/evodes/BST_CollinsHasegawa_Extra_01.png',
			'images/evodes/BST_CollinsHasegawa_LorenzoVillaggi_FA14_01.png',
			'images/evodes/BST_CollinsHasegawa_BrianGalyean_LindseyWikstrom_FA14_01.png',
			'images/evodes/BST_CollinsHasegawa_BrianGalyean_LindseyWikstrom_FA14_02.png'
			);
    	makeImageGrid("Past Student Work", "Excerpts from Student Technical Papers", $images, 4); 
    	?>
    </div>	

	
	<div class="step" data-x="4000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
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
    

	<div class="step" data-x="4500" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
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

	<div class="step" data-x="5000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0" style="line-height:36px;font-size:24px;">
		
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
	
	
	<!-- Crash Course -->
	
	<div class="step" data-x="5500" data-y="0" data-z="0" data-rotate="0" data-scale="1.0" style="line-height:36px;font-size:24px;">

		<span style="font-size:48px;line-height:56px;">
		Crash Course: Evolutionary Design Principles
		</span>
		<li>Genes and Blueprints</li>
		<li>Every Possible Result: CA and the Genotype</li>
		<li>How the Zebra Got It's Stripes</li>
		<li>Cell Fates and the Phenotype</li>
		<li>Selection and Extinction</li>
		<li>Artificial Life and Evolving Locomotion</li>
		<li>Optimal Failure: The Chair You Can't Sit On</li>
		<li>Our Biomimetic Future</li>

	</div>
	

	<!--Darwinians mechanism of genes -->
	
	<div class="step" data-x="6000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0" style="line-height:36px;font-size:24px;">
		
		<span style="font-size:48px;line-height:56px;">
		<b>Genes and Blueprints</b>
		</span>
		<br>
		<div style="float:right;position:relative;right:-50px;">
		<img src="images/evodes/haeckel_drawings.jpg" />
		</div>
		
		<span style="line-height:24px;font-size:18px;">
		Featured:<br>
		On the Origin of Species, Charles Darwin<br>
		Watson and Crick<br>
		Cell Computation<br>
		</span>
		
		<br>
		<b>genotype</b> The genotype of an organism is that organism's full hereditary information, even if not expressed.
		
	</div>
	


	<div class="step" data-x="6000" data-y="250" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Genes and Blueprints",
	 	"Darwin's Finches and First Evolutionary Tree Sketch, On the Origin of Species 1859", 
	 	"images/evodes/Darwins_finches_by_Gould.png", 
	 	"650"); ?>
	</div>
	
	
	<div class="step" data-x="6000" data-y="500" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Genes and Blueprints",
	 	"Watson and Crick model of DNA, 1953", 
	 	"images/evodes/Watson-Crick-DNA-model.jpg", 
	 	"650"); ?>
	</div>
	
	<div class="step" data-x="6000" data-y="1000" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Genes and Blueprints",
	 	"Endless Forms Most Beautiful, Sean Carroll", 
	 	"images/evodes/Carroll Endless Forms Most Beautiful-39.png", 
	 	"650"); ?>
	</div>
	

	<div class="step" data-x="6000" data-y="1500" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Genes and Blueprints",
	 	"Endless Forms Most Beautiful, Sean Carroll", 
	 	"images/evodes/Carroll Endless Forms Most Beautiful-40.png", 
	 	"485"); ?>
	</div>	
	
	<div class="step" data-x="6000" data-y="2000" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Genes and Blueprints", 
		"DNA Transcription: Inner Life of a Cell BioVisions & Xvivo, 2006", 
		"5MfSYnItYvg"); ?>
	</div>

	<div class="step" data-x="6000" data-y="2500" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Genes and Blueprints", 
		"Protein Synthesis: Inner Life of a Cell BioVisions & Xvivo, 2006", 
		"TfYf_rPWUdY"); ?>
	</div>
	
	<div class="step" data-x="6000" data-y="3000" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Genes and Blueprints", 
		"Protein Complexes: Inner Life of a Cell BioVisions & Xvivo, 2014", 
		"uHeTQLNFTgU"); ?>
	</div>
	
	
		<div class="step" data-x="6000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0" style="line-height:36px;font-size:24px;">
		
		<span style="font-size:48px;line-height:56px;">
		<b>Genes and Blueprints</b>
		</span>
		<br>
		<div style="float:right;position:relative;right:-50px;">
		<img src="images/evodes/haeckel_drawings.jpg" />
		</div>
		
		<span style="line-height:24px;font-size:18px;">
		Featured:<br>
		On the Origin of Species, Charles Darwin<br>
		Watson and Crick<br>
		Cell Computation<br>
		</span>
		
		<br>
		<b>genotype</b> The genotype of an organism is that organism's full hereditary information, even if not expressed.
		
	</div>
	
	
	<!--CA, complexity from simple rules - Genotype -->
	
	<div class="step"  data-x="6500" data-y="0" style="line-height:36px;font-size:24px;">
	
		<span style="font-size:48px;line-height:56px;">
		<b>Every Possible Outcome</b>
		</span>
		<br>
		
		<br><Br>
		<span style="line-height:24px;font-size:18px;">
		Featured:<br>
		Wolfram, Cellular Automata<br>
		Many Worlds Browsing<br>
		
		<br>
		<span class="pres-keyword">Keyword: Genotype</span>
				
	</div>
	
	<div class="step" data-x="6500" data-y="500" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Every Possible Outcome",
	 	"Cellular Automata, Stephen Wolfram", 
	 	"images/evodes/Cellular_Automata_Wolfram_Brian-6.png", 
	 	"559"); ?>
	</div>	
	
	<div class="step" data-x="6500" data-y="1000" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Every Possible Outcome",
	 	"Cellular Automata, Stephen Wolfram", 
	 	"images/evodes/Cellular_Automata_Wolfram_Brian-8.png", 
	 	"559"); ?>
	</div>	
	
	<div class="step" data-x="6500" data-y="1500" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Every Possible Outcome",
	 	"Cellular Automata, Stephen Wolfram", 
	 	"images/evodes/Cellular_Automata_Wolfram_Brian-12.png", 
	 	"559"); ?>
	</div>	
	
	<div class="step" data-x="6500" data-y="2000" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Every Possible Outcome",
	 	"Cellular Automata, Stephen Wolfram", 
	 	"images/evodes/Wolframe Cellular Automata-11.jpg", 
	 	"559"); ?>
	</div>	
	
		<div class="step" data-x="6500" data-y="2500" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Every Possible Outcome",
	 	"Conway's Game of Life", 
	 	"images/evodes/Gospers_glider_gun.gif", 
	 	"559"); ?>
	</div>	
		


	<div class="step"  data-x="6500" data-y="0" style="line-height:36px;font-size:24px;">
	
		<span style="font-size:48px;line-height:56px;">
		<b>Every Possible Outcome</b>
		</span>
		<br>
		
		<br><Br>
		<span style="line-height:24px;font-size:18px;">
		Featured:<br>
		Wolfram, Cellular Automata<br>
		Many Worlds Browsing<br>
		
		<br>
		<span class="pres-keyword">Keyword: Genotype</span>
				
	</div>
	
	<!--How does the Zebra get its stripes? -->
	
	<div class="step"  data-x="7000" data-y="0" style="line-height:36px;font-size:24px;">
	
		<span style="font-size:48px;line-height:56px;">
		<b>How the Zebra got its Stripes</b>
		</span>
		<br>
		<br>
		
		<span style="line-height:24px;font-size:18px;">
		Featured:<br>
		Endless Forms Most Beautiful, Sean Carroll<br>
		Embryological Patterning, Processing<br>
		</span>
		
		<br>
		<br>
		
				
	</div>
	
	<div class="step" data-x="7000" data-y="500" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"How the Zebra got its Stripes",
	 	"From Endless Forms Most Beautiful: The Science of Evo Devo", 
	 	"images/evodes/zebra.jpg", 
	 	"559"); ?>
	</div>	
	
	<div class="step" data-x="7000" data-y="1000" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"How the Zebra got its Stripes",
	 	"From Endless Forms Most Beautiful: The Science of Evo Devo", 
	 	"images/evodes/Carroll Endless Forms Most Beautiful-88.png", 
	 	"559"); ?>
	</div>	
	
	<div class="step" data-x="7000" data-y="1500" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"How the Zebra got its Stripes",
	 	"From Endless Forms Most Beautiful: The Science of Evo Devo", 
	 	"images/evodes/Carroll Endless Forms Most Beautiful-65.png", 
	 	"500"); ?>
	</div>	
	
		
	<div class="step" data-x="7000" data-y="2000" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"How the Zebra got its Stripes", 
		"Cellular Development and Patterning, Search Algorithmic Design GSAPP", 
		"AyHNVMZcnnI"); ?>
	</div>
	
	
	<div class="step"  data-x="7000" data-y="0" style="line-height:36px;font-size:24px;">
	
		<span style="font-size:48px;line-height:56px;">
		<b>How the Zebra got its Stripes</b>
		</span>
		<br>
		<br>
		
		<span style="line-height:24px;font-size:18px;">
		Featured:<br>
		Endless Forms Most Beautiful, Sean Carroll<br>
		Embryological Patterning, Processing<br>
		</span>
		
		<br>
		<br>
		
				
	</div>
	
	<!-- Worm DNA visualization -->
	
	<div class="step"  data-x="7500" data-y="0" style="line-height:36px;font-size:24px;">
				
		<span style="font-size:48px;line-height:56px;">
		<b>Cell Fates and the Phenotype</b>
		</span>
		
		<br><Br>
		
		<span style="line-height:24px;font-size:18px;">
		Featured:<br>
 		C elegans<br>	
		Epigenetic Landscapes<br>
		</span>
		
		<br>
		<b>phenotype</b> An organism's observed characteristics, such as morphology, development, or behavior.
		<Br>
		<img src="images/evodes/Suggestion for coverMerged.jpg" />
		
	</div>
	
	<div class="step" data-x="7500" data-y="500" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Cell Fates and the Phenotype",
	 	"Complete Cell Lineage of C elegans worm", 
	 	"images/evodes/Complete_cell_lineage_of_C_elegans.png", 
	 	"559"); ?>
	</div>	
	
	<div class="step" data-x="7500" data-y="1000" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Cell Fates and the Phenotype",
	 	"Complete Cell Lineage of C elegans worm", 
	 	"images/evodes/CelegansGastrulationLineage.jpg", 
	 	"650"); ?>
	</div>	
	
	<div class="step" data-x="7500" data-y="1500" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Cell Fates and the Phenotype",
	 	"Epigenetic Landscape, Cell Fate as Chaotic System", 
	 	"images/evodes/figure4A.jpg", 
	 	"559"); ?>
	</div>	
	
	<div class="step" data-x="7500" data-y="1500" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Cell Fates and the Phenotype",
	 	"Epigenetic Landscape, Cell Fate as Chaotic System", 
	 	"images/evodes/nature08180-f2.2.jpg", 
	 	"559"); ?>
	</div>	
	
	
	<div class="step"  data-x="7500" data-y="0" style="line-height:36px;font-size:24px;">
				
		<span style="font-size:48px;line-height:56px;">
		<b>Cell Fates and the Phenotype</b>
		</span>
		
		<br><Br>
		
		<span style="line-height:24px;font-size:18px;">
		Featured:<br>
 		C elegans<br>	
		Epigenetic Landscapes<br>
		</span>
		
		<br>
		<b>phenotype</b> An organism's observed characteristics, such as morphology, development, or behavior.
		<Br>
		<img src="images/evodes/Suggestion for coverMerged.jpg" />
		
	</div>
		
	
	<!--1 / 1000 live extinction pattern. Failure -->
	
	<div class="step"  data-x="8000" data-y="0" style="line-height:36px;font-size:24px;">
	
		<span style="font-size:48px;line-height:56px;">
		<b>Selection and Extinction</b>
		</span>
		<br>
		<br>
		<b>selection</b> A selection process probabilistically chooses the fittest individuals to reproduce (with variation resulting from crossover and mutation); their offspring make up the next generation.
		<br><br>
		<b>punctuated equilibrium</b> The hypothesis that species exhibit genetic and morphogenic stability for most of their existence, with changes coming in short (on a relative scale) period of dramatic speciation, before settling into new long-term equilibria.
	
	</div>
	
	<div class="step" data-x="8000" data-y="500" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Selection and Extinction",
	 	"Geological Time Spiral", 
	 	"images/evodes/Geological_time_spiral.png", 
	 	"700"); ?>
	</div>	
		
		
	<div class="step" data-x="8000" data-y="1000" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Selection and Extinction",
	 	"Extinction Branches", 
	 	"images/evodes/Evo_large.png", 
	 	"350"); ?>
	</div>	
	
	<div class="step" data-x="8000" data-y="1000" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Selection and Extinction",
	 	"Extinction Branches", 
	 	"images/evodes/Evo_large_blowup.png", 
	 	"620"); ?>
	</div>	
	
		<div class="step"  data-x="8000" data-y="0" style="line-height:36px;font-size:24px;">
	
		<span style="font-size:48px;line-height:56px;">
		<b>Selection and Extinction</b>
		</span>
		<br>
		<br>
		<b>selection</b> A selection process probabilistically chooses the fittest individuals to reproduce (with variation resulting from crossover and mutation); their offspring make up the next generation.
		<br><br>
		<b>punctuated equilibrium</b> The hypothesis that species exhibit genetic and morphogenic stability for most of their existence, with changes coming in short (on a relative scale) period of dramatic speciation, before settling into new long-term equilibria.
	
	</div>
	
	
	
	<!--Artificial Life, universal constructor, Theo Jansen -->
	
	<div class="step"  data-x="8500" data-y="0" style="line-height:36px;font-size:24px;">
	
		<span style="font-size:48px;line-height:56px;">
		Artificial Life: Evolving Locomotion
		</span>
		<br>
	
		<br><Br>
		<span style="line-height:24px;font-size:18px;">
		Featured:<br>
		Karl Sims<br>
		Theo Jansen<Br>
		</span>
		<br>
		<br>
		<b>artificial life</b> Artificial life is a field of study that examines life and life-like systems through the use of computer, mechanical, and chemical models. Some topics of interest in the field include but are not limited to the origin of life, what life is and could be, self-organization, self-replication, and evolution.
		
	</div>
	
	<div class="step" data-x="8500" data-y="500" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Evolving Locomotion", 
		"Locomotion Studies - MIT - Karl Sims (1987)", 
		"aUdCS1lLiYs"); ?>
	</div>

	<div class="step" data-x="8500" data-y="1000" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Evolving Locomotion", 
		"Karl Sims - Evolved Virtual Creatures, Evolution Simulation, 1994", 
		"JBgG_VSP7f8"); ?>
		
		<span style="font-size:10pt;line-height:12pt;">
		This video shows results from a research project involving simulated Darwinian evolutions of virtual block creatures. A population of several hundred creatures is created within a supercomputer, and each creature is tested for their ability to perform a given task, such the ability to swim in a simulated water environment. Those that are most successful survive, and their virtual genes containing coded instructions for their growth, are copied, combined, and mutated to make offspring for a new population. The new creatures are again tested, and some may be improvements on their parents. As this cycle of variation and selection continues, creatures with more and more successful behaviors can emerge.
		</span>
	</div>

	<div class="step" data-x="8500" data-y="1500" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Evolving Locomotion",
	 	"Karl Sims, Siggraph 1996", 
	 	"images/evodes/sim-3.png", 
	 	"559"); ?>
	</div>
	
	<div class="step" data-x="8500" data-y="1500" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Evolving Locomotion",
	 	"Karl Sims, Siggraph 1996", 
	 	"images/evodes/sim-2.png", 
	 	"559"); ?>
	</div>
	

	<div class="step" data-x="8500" data-y="2000" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Evolving Locomotion", 
		"Theo Jansen: My creations, a new form of life (Ted)", 
		"b694exl_oZo"); ?>
	</div>
	
	
	<div class="step"  data-x="8500" data-y="0" style="line-height:36px;font-size:24px;">
	
		<span style="font-size:48px;line-height:56px;">
		Artificial Life: Evolving Locomotion
		</span>
		<br>
	
		<br><Br>
		<span style="line-height:24px;font-size:18px;">
		Featured:<br>
		Karl Sims<br>
		Theo Jansen<Br>
		</span>
		<br>
		<br>
		<b>artificial life</b> Artificial life is a field of study that examines life and life-like systems through the use of computer, mechanical, and chemical models. Some topics of interest in the field include but are not limited to the origin of life, what life is and could be, self-organization, self-replication, and evolution.
		
	</div>
	
	<!--Philip morel chair - Fitness - The moral is there are gaps in the logic.  - Over optimize. -->
	
	<div class="step"  data-x="9000" data-y="0" style="line-height:36px;font-size:24px;">
	
		<span style="font-size:48px;line-height:56px;">
		<b>Optimal Failure</b>
		</span>
		<br>
		<br>
		
		<span style="line-height:24px;font-size:18px;">
		Featured:<br>
		EZCT Genetically Optimized Chair
		</span>
		
		<br>
		<br>
		<b>genetic algorithm</b> Genetic algorithms are a family of computational search and learning methods inspired by biological evolution.  Evolution takes place on a population of individuals, each of which represents a candidate solution to a given problem.  At a given generation, each individual's fitness is calculated according to a user-defined fitness function.  A selection process probabilistically chooses the fittest individuals to reproduce (with variation resulting from crossover and mutation); their offspring make up the next generation.   The algorithm runs for either a fixed number of generations, or until an individual is found whose fitness is above a user-defined threshold. 
		
	</div>

		
	<div class="step" data-x="9000" data-y="500" style="line-height:36px;font-size:24px;">
		<?php makeVimeoSlide(
		"Optimal Failure", 
		"Evolution for some of the chairs of the Computational Chair Design project", 
		"3226203"); ?>
	</div>

	
	<div class="step" data-x="9000" data-y="1000" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Optimal Failure",
	 	"EZCT Architecture and Marc Schoenauer", 
	 	"images/evodes/20090907174005.jpg", 
	 	"372"); ?>
	</div>	
	
	<div class="step" data-x="9000" data-y="1500" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Optimal Failure",
	 	"EZCT Architecture and Marc Schoenauer", 
	 	"images/evodes/20090907172938.jpg", 
	 	"560"); ?>
	</div>	
	
	
	<div class="step"  data-x="9000" data-y="0" style="line-height:36px;font-size:24px;">
	
		<span style="font-size:48px;line-height:56px;">
		<b>Optimal Failure</b>
		</span>
		<br>
		<br>
		
		<span style="line-height:24px;font-size:18px;">
		Featured:<br>
		EZCT Genetically Optimized Chair
		</span>
		
		<br>
		<br>
		<b>genetic algorithm</b> Genetic algorithms are a family of computational search and learning methods inspired by biological evolution.  Evolution takes place on a population of individuals, each of which represents a candidate solution to a given problem.  At a given generation, each individual's fitness is calculated according to a user-defined fitness function.  A selection process probabilistically chooses the fittest individuals to reproduce (with variation resulting from crossover and mutation); their offspring make up the next generation.   The algorithm runs for either a fixed number of generations, or until an individual is found whose fitness is above a user-defined threshold. 
		
	</div>


	<!--Biomimtec Design SKO -->

	<div class="step"  data-x="9500" data-y="0" style="line-height:36px;font-size:24px;">
	
	 	<span style="font-size:48px;line-height:56px;">
		<b>Our Biomimetic Future</b>
		</span>
		<br>
		<Br>
		<span style="line-height:24px;font-size:18px;">
		Featured:<br>
		NASA Attenna Design<br>
		Arup Tensegrity Connection<br>
		</span>
		
		<br>
		<b>attractor</b> In dynamical systems, an attractor is a value or set of values for the variables of a system to which they will tend towards over enough time, or enough iterations. Examples include fixed-point attractors, periodic attractors (also called limit cycles), and chaotic (also called "strange") attractors.
	</div>


	<div class="step" data-x="9500" data-y="1000" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Our Biomimetic Future",
	 	"Gregory S. Hornby for NASA, 2005", 
	 	"images/evodes/GeneticallyGrownAntennas_NASA-web.jpg", 
	 	"559"); ?>
	</div>

	<div class="step" data-x="9500" data-y="1000" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Our Biomimetic Future",
	 	"Within Lab and Arup Engineers, 2014", 
	 	"images/evodes/Arup-3d-printed-steel_dezeen_468_1.jpg", 
	 	"559"); ?>
	</div>
	
	<div class="step" data-x="9500" data-y="1000" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Our Biomimetic Future",
	 	"Arup Engineers & Within Lab, 2014", 
	 	"images/evodes/Arup-3d-printed-steel_dezeen_468_4.jpg", 
	 	"559"); ?>
	</div>
	
	
	<!-- Conclusion -->
	
	<div class="step"  data-x="10000" data-y="0" style="line-height:36px;font-size:24px;">
	
		<span style="font-size:48px;line-height:56px;">
		Crash Course: Evolutionary Design Principles
		</span>
		<li>Genes and Blueprints</li>
		<li>Every Possible Result: CA and the Genotype</li>
		<li>How the Zebra Got It's Stripes</li>
		<li>Cell Fates and the Phenotype</li>
		<li>Selection and Extinction</li>
		<li>Artificial Life and Evolving Locomotion</li>
		<li>Optimal Failure: The Chair You Can't Sit On</li>
		<li>Our Biomimetic Future</li>

	</div>
	

	<!--Class Schedule Recap -->
	
	<div class="step"  data-x="10500" data-y="0" style="line-height:36px;font-size:24px;">
		A4707 Evolutionary Design<Br>
		<h2>Schedule</h2>

		<div style="float:left;width:200px;color:#ccc;">
		 	AT Introduction
			<b style="color:#fff">Class 1</b><br>
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
			Course Introduction<br>
			<b style="color:#fff">Crash Course Evolutionary Design</b><br>
			Workshop #1, Data Visualization in Rhino<br>
			Workshop #2, Ecotect Solar Insolation<br>
			Class Discussion, Readings on Creative Evolutionary Systems<br>
			Workshop #3, Geco &amp; Ecotect Solar Insolation<br>
			Individual Meetings<br>
			Workshop #4, Physics Based Modeling<br>
			Workshop #5, Solidworks and FEA<br>
			Individual Meetings<br>
			Election Day<br>
			Individual Meetings<br>
			Group Presentation on Research<br>
			Individual Meetings<br>
		</div>
	</div>
	

	
	<!-- Questions & Office Hours -->
	
	<div  class="step"  data-x="11000" data-y="0" style="line-height:36px;font-size:24px;">
	
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
	<div class="step"  data-x="11500" data-y="0" style="line-height:36px;font-size:24px;">

		<span style="font-size:48px;line-height:56px;">
		<b>Workshop #1: Visualization</b>
		</span>
		<br>
		<b>For Next Week</b>		
		<li>Install Grasshopper</li>
		<li>Bring Charged Laptop</li>
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



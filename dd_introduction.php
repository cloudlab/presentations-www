<?php 

function addImageWithCredit($credit, $image, $height){
    echo '<div class="translateUp" style="width:820px;height:'.$height.'px;background-image:url(\''.$image.'\');" ></div>';
	echo '<br>';
	echo '<p style="font-size:20px;margin-top:'. 40 . 'px;text-align:right;color:#999;">'.$credit.'</p>';
}

function addAccentImageWithCredit($credit, $image, $height){
    addAccentImageWithCreditAndHeight($credit, $image, 600, $height, 300);
}

function addAccentImageWithCreditAndHeight($credit, $image, $width, $height, $offset){
    echo '<div class="translateUp" style="position:relative;left:'.$offset.'px;width:'.$width.'px;height:'.$height.'px;background-image:url(\''.$image.'\');" ></div>';
	echo '<br>';
	echo '<p style="font-size:20px;margin-top:'. 40 . 'px;text-align:right;color:#999;">'.$credit.'</p>';
}

function makeGenericSlide($title, $credit, $image){	
	makeGenericSlideWithHeight($title, $credit, $image, 400);
}

function makeGenericSlideWithHeight($title, $credit, $image, $height){
	echo '<span style="font-size:36px;color:#CCC;">'.$title.'</span>';
	echo '<br>';
    echo '<div class="translateDown" style="width:820px;height:'.$height.'px;background-image:url(\''.$image.'\');" ></div>';
	echo '<br>';
	echo '<p style="font-size:20px;margin-top:'. -60 . 'px;text-align:right;color:#999;">'.$credit.'</p>';
}

function makeImageGrid($title, $credit, $images, $columns){
	
	echo '<span style="font-size:36px;color:#CCC;">'.$title.'</span>';
	echo '<br>';

	$i = 0;
	$w = 960;
	echo '<div class="" style="margin-left:-70px;width:'.$w.'px;height:500px;">';
	echo '<div>';
	foreach($images as $image){
		
		// make image container
		$i++;
		echo '<div style="float:left;padding:10px;">';
		echo '<img src="'.$image.'"  width="'. (($w - $columns*20)/$columns) .'"/>';
		echo '</div>';
		if($i % $columns == 0){
			if(count($images) > $i){
				echo '</div>';
				echo '<div style="">';
			}
		}
	}
	echo '</div>';
	
	echo '</div>';
    echo '<br>';
	echo '<p style="font-size:20px;margin-top:-60px;text-align:right;color:#999;">'.$credit.'</p>';
}



function makeThemeSlide($title, $subtitle, $image){
	if($image == "")
		$image = "images/Ishiguro1.jpg";
    echo '<br><Br><Br><span style="font-size:30px;color:#888;">'.$title.'</span><br>';
    echo '<p align="center" style="text-size:40px;"><b class="">'.$subtitle.'</b></p>';
    echo '<div class="translateDown" style="float:left;position:relative; top:-100px; left:350px; width:640px; height: 400px;background-image:url(\''.$image.'\');"></div>';
}

function makeVimeoSlide($title, $subtitle, $video){
	echo '<p class="translateDown" style="font-size:36px;color:#CCC;">'.$title.'</p>';
	echo '<br>';

	echo '<iframe style="border-style:solid;border-width:10px;border-color:#666;"  src="http://player.vimeo.com/video/'.$video.'" 
			width="820" height="460" frameborder="0" 
			webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
	echo '<br>';
	echo '<p  class="translateDown" style="font-size:20px;margin-top:60px;text-align:right;color:#999;">'.$subtitle.'</p>';
}

function makeVideoSlide($title, $subtitle, $video){
	
	echo '<p class="translateDown" style="font-size:36px;color:#CCC;">'.$title.'</p>';
	echo '<br>';
	echo '<iframe style="border-style:solid;border-width:10px;border-color:#666;" class="" width="820" height="460" ';
	echo 'src="http://www.youtube.com/embed/'.$video.'?rel=0&autoplay=0&showinfo=0&theme=dark&controls=1" frameborder="0" allowfullscreen></iframe>';
	echo '<br>';
	echo '<p  class="translateDown" style="font-size:20px;margin-top:60px;text-align:right;color:#999;">'.$subtitle.'</p>';
}

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
		
	<div id="start" class="step slide" data-x="0" data-y="0" style="background-image:url('images/Eduardo Mayoral Gonzalez_Page_17a.png');">
        
        <h2>A4707 Digital Detailing: Simulation and Analysis</h2>
        Day/Time: T 1:00pm - 3:00pm<br>
		Location: 115 Avery Hall<Br>
		Arch Technology Sequence, Elective<Br>

        <div style="">
			<div style="padding:20px;color:#DDD;font-size:24px;">
				Instructors:<br>
				Mark Collins, mlc2115 or @ProxyMark<br>
				Toru Hasegawa, th2114 or @ProxyToru
			</div>
        </div>
        
    </div>

 	<!-- Affiliations  -->
	<div class="step" data-x="0" data-y="500" style="line-height:36px;font-size:24px;">
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
    

	<div class="step" data-x="0" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Digital Detailing: Simulation and Analysis</b>
		<p style="color:#aaa;">The seminar introduces a series of techniques for quantifying the performance of design models
		 using a plurality of software, plugins and scripts. Students' proposals are supported through multiple 
		 stages of design, prototyping, and simulation in a workshop-based environment.</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Class Syllabus", 'images/dd/SyllabusAccent.jpg', 620,350,100); ?>

	</div>
	
	<div class="step" data-x="0" data-y="0" style="line-height:36px;font-size:24px;color:#666;">

		<b>Digital Detailing: Simulation and Analysis</b>
		<p>The seminar introduces a series of techniques for quantifying the performance of design <span style="color:#fff;">models</span>
		 using a plurality of software, plugins and scripts. Students' proposals are supported through multiple 
		 stages of design, prototyping, and simulation in a workshop-based environment</p>
		<br>
		
		<?php addAccentImageWithCreditAndHeight("Class Syllabus", 'images/dd/FEMAccent.jpg', 620,350,100); ?>

	</div>
	
	<div class="step" data-x="0" data-y="0" style="line-height:36px;font-size:24px;color:#666;">

		<b>Digital Detailing: Simulation and Analysis</b>
		<p>The seminar introduces a series of techniques for quantifying the performance of design models
		 using a plurality of software, plugins and scripts. Students' proposals are supported through multiple 
		 stages of design, prototyping, and  <span style="color:#fff;">simulation</span> in a workshop-based environment</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Arup Acoustics, London City Hall Foster and Partners", 'images/dd/acousticAccent.png', 620,350,100); ?>

	</div>
	
	<div class="step" data-x="0" data-y="0" style="line-height:36px;font-size:24px;color:#666;">

		<b>Digital Detailing: Simulation and Analysis</b>
		<p>The seminar introduces a series of techniques for <span style="color:#fff;">quantifying</span> the performance of design models
		 using a plurality of software, plugins and scripts. Students' proposals are supported through multiple 
		 stages of design, prototyping, and simulation in a workshop-based environment.</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Brain Computer Interface Research at GSAPP. Cloud Lab 2012", 'images/BciMapsAccent.jpg', 620,350,100); ?>

	</div>
	
	<!-- COURSE MOTIVATIONS -->
	
	<div class="step" data-x="1000" data-y="0" style="line-height:28px;font-size:24px; color:#ccc;">
		
		<b style="color:#fff">Course Motivations</b>
		<li>Exploration of the concept of fitness in an evolutionary design paradigm<br>
			<span style="color:#888;;margin-left:30px;">In parallel with generation and selective modes</span> </li>
		<li>Fundamental research into the Body/Environment continuum<br>
			<span style="color:#888;;margin-left:30px;">Can we tightly couple biometric tech, environmental analysis and tectonics?</span></li>
		<li>Think forwards about the nature of design software<Br>
		<span style="color:#888;margin-left:30px;"> What information is present when we design?</span></li>
		<Br>&nbsp;<br>
		<?php addAccentImageWithCredit("Evolutionary Paradigm", 'images/dd/feedback_flow_sm.png', 305); ?>
		
 	</div>
	
	<div class="step" data-x="1000" data-y="0" style="line-height:28px;font-size:24px; color:#aaa;">
		
		<b style="color:#fff">Course Motivations</b>
		<li><span style="color:#fff;">Exploration of the concept of fitness in an evolutionary design paradigm</span><br>
			<span style="color:#ccc;;margin-left:30px;">In parallel with generation and selective modes</span> </li>
		<li>Fundamental research into the Body/Environment continuum<br>
			<span style="color:#888;;margin-left:30px;">Can we tightly couple biometric tech, environmental analysis and tectonics?</span></li>
		<li>Think forwards about the nature of design software<Br>
		<span style="color:#888;margin-left:30px;"> What information is present when we design?</span></li>
		<Br>&nbsp;<br>
		<?php addAccentImageWithCredit("EZCT Architecture, Chair", 'images/dd/20090907174005.jpg', 305); ?>
		
 	</div>
	
	<div class="step" data-x="1000" data-y="0" style="line-height:28px;font-size:24px; color:#aaa;">
		
		<b style="color:#fff">Course Motivations</b>
		<li>Exploration of the concept of fitness in an evolutionary design paradigm</span><br>
			<span style="color:#888;;margin-left:30px;">In parallel with generation and selective modes</span> </li>
		<li><span style="color:#fff;">Fundamental research into the Body/Environment continuum</span><br>
			<span style="color:#ccc;;margin-left:30px;">Can we tightly couple biometric tech, environmental analysis and tectonics?</span></li>
		<li>Think forwards about the nature of design software<Br>
		<span style="color:#888;margin-left:30px;"> What information is present when we design?</span></li>
		<Br>&nbsp;<br>
		<?php addAccentImageWithCredit("Brain Computer Inteface", 'images/dd/bci.png', 305); ?>
		
 	</div>

	<div class="step" data-x="1000" data-y="0" style="line-height:28px;font-size:24px; color:#aaa;">
		
		<b style="color:#fff">Course Motivations</b>
		<li>Exploration of the concept of fitness in an evolutionary design paradigm<br>
			<span style="color:#888;;margin-left:30px;">In parallel with generation and selective modes</span> </li>
		<li>Fundamental research into the Body/Environment continuum<br>
			<span style="color:#888;;margin-left:30px;">Can we tightly couple biometric tech, environmental analysis and tectonics?</span></li>
		<li><span style="color:#fff;">Think forwards about the nature of design software</span><Br>
		<span style="color:#ccc;margin-left:30px;"> What information is present when we design?</span></li>
		<Br>&nbsp;<br>
		<?php addAccentImageWithCredit("The Morpholio Project", 'images/dd/FC_Page_05.png', 305); ?>
		
 	</div>
	
	<div class="step" data-x="2000" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
	
		<b style="color:#fff;">Our Approach</b>
		<li><span style="color:#fff;">Hands on.</span> Learn by doing and applying to proto design problems.</li>
		<li><span style="color:#fff;">Design is always foregrounded.</span> The primary question is always how does this benefit the design process or outcomes.</li>
		<li><span style="color:#fff;">Computation is the 21st century literacy.</span> We need to understand the underlying mechanics of the software we use, both to push the tools of today but also to envision the tools of tomorrow.</li> 
		<Br>
		<?php addAccentImageWithCredit("Biometric Workshop", 'images/dd/eyetracking_820.png', 305); ?>

	</div>
	
	
	
	<div class="step" data-x="3000" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		<b style="#fff;">Course Goals & Objectives</b>

		<li><span style="color:#fff;">Learn to use simulation tools and apply them to design problems</span></li>   <!-- false color? -->
		<li>Develop a critical approach to the use of simulation tools</li>		<!-- world modeler? -->
		<li>Examine the gap between digital models and real world physical processes</li>	<!-- air flow? -->
		<li>Understand fundamentals of computational geometry and analysis</li>		<!-- Fea polygon? -->
		<li>Evaluate new software, utilities and protocols for design analysis</li>			<!-- bci`? -->
		<li>Document work in a technical format meeting publications standards<Br>			<!-- tech paper -->
	
		<span style="color:#AAA;margin-left:30px;">Ex: for submission to ACADIA or other similar conference</span></li>
		<br>
		<?php addAccentImageWithCreditAndHeight("30 St Mary Axe, Norman Foster and Arup", 'images/dd/BDSP_02.jpg', 600, 200, 50); ?>
	
	</div>
	
	<div class="step" data-x="3000" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		<b style="#fff;">Course Goals & Objectives</b>

		<li>Learn to use simulation tools and apply them to design problems</li>   <!-- false color? -->
		<li><span style="color:#fff;">Develop a critical approach to the use of simulation tools</span></li>		<!-- world modeler? -->
		<li><span style="color:#fff;">Examine the gap between digital models and real world physical processes</span></li>	<!-- air flow? -->
		<li>Understand fundamentals of computational geometry and analysis</li>		<!-- Fea polygon? -->
		<li>Evaluate new software, utilities and protocols for design analysis</li>			<!-- bci`? -->
		<li>Document work in a technical format meeting publications standards<Br>			<!-- tech paper -->
	
		<span style="color:#AAA;margin-left:30px;">Ex: for submission to ACADIA or other similar conference</span></li>
		<br>
		<?php addAccentImageWithCreditAndHeight("World3 Computer Simulation, The Limits to Growth 1972", 'images/dd/WorldModel_combined_sm.jpg', 600, 200, 50); ?>
	
	</div>
	
	
	
	<div class="step" data-x="3000" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		<b style="#fff;">Course Goals & Objectives</b>

		<li>Learn to use simulation tools and apply them to design problems</li>   <!-- false color? -->
		<li>Develop a critical approach to the use of simulation tools</li>		<!-- world modeler? -->
		<li>Examine the gap between digital models and real world physical processes</li>	<!-- air flow? -->
		<li><span style="color:#fff;">Understand fundamentals of computational geometry and analysis</span></li>		<!-- Fea polygon? -->
		<li>Evaluate new software, utilities and protocols for design analysis</li>			<!-- bci`? -->
		<li>Document work in a technical format meeting publications standards<Br>			<!-- tech paper -->
	
		<span style="color:#AAA;margin-left:30px;">Ex: for submission to ACADIA or other similar conference</span></li>
		<br>
		<?php addAccentImageWithCreditAndHeight("Beijing National Aquatics Center and Weaire–Phelan structure, Arup", 'images/dd/WaterCube-2.png', 600, 200, 50); ?>
	
	</div>
	
	<div class="step" data-x="3000" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		<b style="#fff;">Course Goals & Objectives</b>

		<li>Learn to use simulation tools and apply them to design problems</li>   <!-- false color? -->
		<li>Develop a critical approach to the use of simulation tools</li>		<!-- world modeler? -->
		<li>Examine the gap between digital models and real world physical processes</span></li>	<!-- air flow? -->
		<li>Understand fundamentals of computational geometry and analysis</li>		<!-- Fea polygon? -->
		<li><span style="color:#fff;">Evaluate new software, utilities and protocols for design analysis</span></li>			<!-- bci`? -->
		<li><span style="color:#fff;">Document work in a technical format meeting publications standards</span><Br>			<!-- tech paper -->
	
		<span style="color:#AAA;margin-left:30px;">Ex: for submission to ACADIA or other similar conference</span></li>
		<br>
		<?php addAccentImageWithCreditAndHeight("Many Worlds Browsing, 2011", 'images/dd/ManyWorlds_620.png', 600, 200, 50); ?>
	
	</div>
	
	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		
		<div style="float:right;">
			<?php addAccentImageWithCreditAndHeight("Galapagos Genetic Solver for Rhino", 'images/dd/Galapagos_Interface_Iteration3_sm.png', 400, 253, 50); ?>
		</div>
		
		Workshop software include...

		<span style="color:#fff;"><li>Rhino Grasshopper & Galapagos</li></span>
		<li>Autodesk Ecotect & Geco</li>
		<li>Winair</li>
		<li>Dessault Solidworks</li>				<!-- solidworks fea -->
		<li>Kangaroo Physics for Rhino</li>		<!-- kangaroo -->
		<li>Eyewriter Eyetracker</li>				<!-- eyetracker -->
 		
		<br>
		Performance algorithms include...
		
		<li>Finite Element Analysis</li>
		<li>Solar Analysis</li>
		<li>Acoustic Analysis</li>
		<li>Computational Fluid Dynamics</li> 
		<li>Physics Based Modeling</li>
		<li>Biometric Analysis</li>

	</div>

		
	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		
		<div style="float:right;">
			<?php addAccentImageWithCreditAndHeight("Solar Design in Ecotect", 'images/dd/ecotect-2.png', 400, 337, 50); ?>
		</div>
		
		Workshop software include...

		<li>Rhino Grasshopper & Galapagos</li>
		<span style="color:#fff;"><li>Autodesk Ecotect & Geco</li>
		<li>Winair</li></span>
		<li>Dessault Solidworks</li>				<!-- solidworks fea -->
		<li>Kangaroo Physics for Rhino</li>		<!-- kangaroo -->
		<li>Eyewriter Eyetracker</li>				<!-- eyetracker -->
 		
		<br>
		Performance algorithms include...
		
		
		<li>Finite Element Analysis</li>
		<span style="color:#fff;"><li>Solar Analysis</li>
		<li>Acoustic Analysis</li></span>
		<li>Computational Fluid Dynamics</li>
		<li>Physics Based Modeling</li>
		<li>Biometric Analysis</li>

	</div>

	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		
		<div style="float:right;">
			<?php addAccentImageWithCreditAndHeight("Finite Element Analysis in Solidworks", 'images/dd/FEA_isocrv_sm.jpg', 400, 253, 50); ?>
		</div>
		
		Workshop software include...

		<li>Rhino Grasshopper & Galapagos</li>
		<li>Autodesk Ecotect & Geco</li>
		<li>Winair</li>
		<span style="color:#fff;"><li>Dessault Solidworks</li>	</span>			<!-- solidworks fea -->
		<li>Kangaroo Physics for Rhino</li>		<!-- kangaroo -->
		<li>Eyewriter Eyetracker</li>				<!-- eyetracker -->
 		
		<br>
		Performance algorithms include...
		
		<span style="color:#fff;"><li>Finite Element Analysis</li></span>
		<li>Solar Analysis</li>
		<li>Acoustic Analysis</li>
		<li>Computational Fluid Dynamics</li> 
		<li>Physics Based Modeling</li>
		<li>Biometric Analysis</li>

	</div>

	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		
		<div style="float:right;">
			<?php addAccentImageWithCreditAndHeight("Kangaroo Physics Examples", 'images/dd/kangaroo.PNG', 400, 320, 50); ?>
		</div>
		
		Workshop software include...

		<li>Rhino Grasshopper & Galapagos</li>
		<li>Autodesk Ecotect & Geco</li>
		<li>Winair</li>
		<li>Dessault Solidworks</li>				<!-- solidworks fea -->
		<span style="color:#fff;"><li>Kangaroo Physics for Rhino</li></span>		<!-- kangaroo -->
		<li>Eyewriter Eyetracker</li>				<!-- eyetracker -->
 		
		<br>
		Performance algorithms include...
		
		<li>Finite Element Analysis</li>
		<li>Solar Analysis</li>
		<li>Acoustic Analysis</li>
		<li>Computational Fluid Dynamics</li> 
		<span style="color:#fff;"><li>Physics Based Modeling</li></span>
		<li>Biometric Analysis</li>

	</div>

	
	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		
		<div style="float:right;">
			<?php addAccentImageWithCreditAndHeight("Eye Tracking Code, Processing.org", 'images/Eye3_400.jpg', 400, 253, 50); ?>
		</div>
		
		Workshop software include...

		<li>Rhino Grasshopper & Galapagos</li>
		<li>Autodesk Ecotect & Geco</li>
		<li>Winair</li>
		<li>Dessault Solidworks</li>				<!-- solidworks fea -->
		<li>Kangaroo Physics for Rhino</li>	<!-- kangaroo -->
		<span style="color:#fff;"><li>Eyewriter Eyetracker</li>	</span>				<!-- eyetracker -->
 		
		<br>
		Performance algorithms include...
		
		<li>Finite Element Analysis</li>
		<li>Solar Analysis</li>
		<li>Acoustic Analysis</li>
		<li>Computational Fluid Dynamics</li> 
		<li>Physics Based Modeling</li>
		<span style="color:#fff;"><li>Biometric Analysis</li></span>

	</div>

	
	
	

	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		Semester Project

		<li>Work in small groups or individually</li>
		<li>A focused application of performance in the evolution of a design prototype</li>
		<li>Clear definition and evaluation of a performance-based methodology</li>
		<li>Compile results (images, data, diagrams) in	 a technical presentation</li>
		<li>Should incorporate one or more of the workshop softwares</li>
		<li>Encouraged to include software or data sets from outside the workshops<br>
		<span style="color:aaa;margin-left:30px;">Ex. GIS, Data Mining, Processing, Arduino</span></li>
	</div>
	
	<div class="step" data-x="6000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	<?php 
    	$images = array('images/dd/Paper_DavidZhai_SimonMcGrown_GeorgeValdes-1.jpg',
						'images/dd/Paper_DavidZhai_SimonMcGrown_GeorgeValdes-2.jpg',
						'images/dd/Paper_DavidZhai_SimonMcGrown_GeorgeValdes-3.jpg',
						'images/dd/Paper_Eduardo Mayoral Gonzalez-1.jpg',
						'images/dd/Paper_Eduardo Mayoral Gonzalez-2.jpg',
						'images/dd/Paper_Kooho Jung and Jea Hee Han-8.jpg',
						'images/dd/Paper_SangYunLee-1.png',
						'images/dd/Paper_SangYunLee-2.png');
    	
    	makeImageGrid("Past Student Work", "Excerpts from Student Technical Papers", $images, 4); ?>
    </div>
    

	<div class="step" data-x="6500" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	<?php 
    	
$imagesb = array(
'images/dd/FA09_kooho_jung_and_jea_hee_han.png',
//'images/dd/FA10_brian_thomas.png',
'images/dd/FA10_ivy_chan.png',
//'images/dd/FA10_mark_paz.png',
'images/dd/FA12_michelle_o_carroll.png',
'images/dd/FA12_rui_wang.tif',
'images/dd/FA12_thomas_heltzel_and_margaret_zyro.tif',
'images/dd/FA12_yan_zhang_01.tif');

    	
    	makeImageGrid("Past Student Work", "Excerpts from Student Technical Papers", $imagesb, 3); ?>
    </div>
    


     <div class="step" data-x="7000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	 <?php makeGenericSlideWithHeight("Seeing the Unseen","False Color Map of Moon Topography", "images/dd/Moon.png", "559"); ?>
    </div>
    
	<!-- SOJ  -->
	<div class="step" data-x="5000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	<?php makeGenericSlideWithHeight("Stabile Center Pattern Generation","with Marble Fairbanks Architects", "images/SOJ4.jpg", "565"); ?>
    </div>
    
    <div class="step" data-x="5500" data-y="0" data-z="1000" data-rotate="0" data-scale="1.0">
    	<?php makeGenericSlideWithHeight("Stabile Center Pattern Generation","with Marble Fairbanks Architects", "images/SOJ3.jpg", "599"); ?>
    </div>

	<div class="step" data-x="5000" data-y="0" data-z="2000" data-rotate="0" data-scale="1.0">
    	<?php makeGenericSlideWithHeight("Stabile Center Pattern Generation","with Marble Fairbanks Architects", "images/SOJ1.png", "500"); ?>
    </div>

    <div class="step" data-x="5500" data-y="0" data-z="3000" data-rotate="0" data-scale="1.0">
		<?php makeVideoSlide("Stabile Center Pattern Generation", "with Marble Fairbanks Architects", "GCnnlVKjMXo"); ?>
	</div>
	
	<div class="step" data-x="5000" data-y="0" data-z="4000" data-rotate="0" data-scale="1.0">
    	<?php makeGenericSlideWithHeight("Nth Dimension Browser","with Marble Fairbanks Architects", "images/SOJ2.jpg", 545); ?>
    </div>    
    
    <!-- How to Choose? The Human Elemenent	  -->
 	<div class="step" data-x="7000" data-y="0" data-rotate="0" data-scale="1.0">
    	<div class="" style="font-size:40px;color:#CCC;">The Problem</div>
    	<div class="" style="font-size:80px;color:#CCC;">How to choose?</div>
    	<div class="" style="font-size:30px;color:#AAA;">Many design candidates fulfill engineering criteria</div><br>
    	<div class="translateUp" style="font-size:30px;color:#CCC;">Human eye/brain can still easily and efficiently discriminate in ways the computer can't. How can we take advantage of this?</div>
    </div>
        
	<!-- Neuroscience Collaboration	  -->
     <div class="step" data-x="8000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	 <?php makeGenericSlideWithHeight("Cloud Lab: Neuroscience and Spatial Cognition","Columbia University Laboratory for Intelligent Imaging and Neural Computing", "images/644902068-7.png", "559"); ?>
    </div>
    
    <!-- A-Ha!	and Oh No!  -->
 	<div class="step" data-x="9000" data-y="0" data-z="1000" data-rotate="0" data-scale="1.0">
        <?php makeGenericSlideWithHeight("Neural Recognition and the P300","Columbia University Laboratory for Intelligent Imaging and Neural Computing", "images/BciRecognition.jpg", "633"); ?>
    </div>
    
    <!-- RSVP  -->
 	<div class="step" data-x="10000" data-y="0" data-z="2000" data-rotate="0" data-scale="1.0">
        <?php makeGenericSlideWithHeight("Rapid Serial Visual Presentation","Columbia University Laboratory for Intelligent Imaging and Neural Computing", "images/BCI1.png", "633"); ?>
    </div>
    
    <!-- BCI Based Design Video  -->
	<div class="step" data-x="9000" data-y="0" data-z="3000">
		<?php makeVideoSlide("BCI Hardware", "Collaboration between Cloud Lab and LIINC", "tvweccUUS9Q"); ?>
    </div>
    
    <!-- BCI Based Analysis -->
	<div class="step" data-x="10000" data-y="0" data-z="4000">
		<?php makeGenericSlideWithHeight("BCI Data Analysis", "Collaboration between Cloud Lab and LIINC", "images/BciMaps.jpg", 484); ?>
    </div>
    
	<!-- BCI Based Design Video  -->
	<div class="step" data-x="9000" data-y="0" data-z="5000">
		<?php makeVideoSlide("BCI Based Design Process", "Collaboration between Cloud Lab and Neuromatters LLC", "Pl7EiCtfB-A"); ?>
    </div>
    
    
    <!--- GIST -->
     <div class="step" data-x="10000" data-y="0" data-z="6000" data-rotate="0" data-scale="1.0">
    	<?php makeGenericSlideWithHeight("GIST Processing of Images", "with Neuromatters LLC", "images/BCI2.png",600); ?>
	</div>

     <div class="step" data-x="9000" data-y="0" data-z="7000" data-rotate="0" data-scale="1.0">
    	<?php makeGenericSlideWithHeight("Design Outcomes", "Student Work, GSAPP Advanced Studio Hasegawa/Collins", "images/matt.jpg",463); ?>
	</div>

 
    <!--- Spatial Recognition -->
     <div class="step" data-x="9500" data-y="0" data-z="8000" data-rotate="0" data-scale="1.0">
    	<?php makeGenericSlideWithHeight("Spatial Cognition Research", "Collaboration between Cloud Lab and LIINC", "images/spatialCog.png",432); ?>
	</div>


    <!-- Eye Tracking Our Software -->
     <div class="step" data-x="10000" data-y="0" data-rotate="0" data-scale="1.0">
    	<?php makeGenericSlideWithHeight("Eyetracking 3D Structures", "with Anna Stork", "images/Eye3.jpg",462); ?>
    </div>
    

    <div class="step" data-x="11000" data-y="0" data-z="500">
    	<p class="translateDown" style="font-size:36px;color:#CCC;">Eye Tracking</p><Br>
   		 <iframe width="640" height="480" src="http://www.youtube.com/embed/7Gsw4IJuzLI?rel=0" frameborder="0" allowfullscreen></iframe>
    	<Br><p  class="translateDown" style="font-size:20px;margin-top:60px;text-align:right;color:#999;">Tracking gaze direction, focus and pupil dilation through OpenCV</p>
    </div>


    <!-- EyeWriter -->
 	<div class="step" data-x="10000" data-y="0" data-z="1500" data-rotate="0" data-scale="1.0">
    	<?php makeGenericSlideWithHeight("EyeWriter Open Source Hardware", "Graffiti Research Lab http://eyewriter.org", "images/Eye5.JPG",544); ?>
    </div>

    <!-- Yarbus to EyeWriter -->
    <div class="step" data-x="11000" data-y="0" data-z="2000" data-rotate="0" data-scale="1.0">
    	<?php makeGenericSlideWithHeight("Old Technology, New Accessibility", "Yarbus", "images/YarbusFull.jpg",458); ?>
    </div>
    
    <!-- EyeTracking Video  -->
	<div class="step" data-x="10000" data-y="0" data-z="2500" data-rotate="0" data-scale="1.0">
		<?php makeVideoSlide("Eye Tracking 3D Structures", "with Anna Stork", "G2Zvr32iJUU"); ?>
    </div>
    
      <!-- EyeTracking Stills  -->
	<div class="step" data-x="11000" data-y="0" data-z="3000">
    	<?php makeGenericSlideWithHeight("Eyetracking 3D Structures", "with Anna Stork", "images/Eye4.jpg",463); ?>
    </div>
    
    
    <!--
    <div class="step" data-x="21000" data-y="0" style="font-size:24px;">
		We build projects that increase the bandwidth between humans, 
		their built environment and the information systems that surround them. 
		In both the product and the process, the creative power of humans is always 
		the primary motive force for the the amplifying effects of machines and environments.
	</div>
    <div class="step" data-x="21000" data-y="2000" data-rotate="80" data-scale="6">
        <p><q><b>Amplify</b> <i>environment. thoughts. intentions.</i></q></p>
    </div>
    -->
	
	
	
	<!-- END PRESENTATION -->
	
	
	
	
	
	
	
	
	
	
    <!--    
        So to make a summary of all the possible attributes used to position presentation steps, we have:
        
        * `data-x`, `data-y`, `data-z` - they define the position of **the center** of step element on
            the canvas in pixels; their default value is 0;
        * `data-rotate-x`, `data-rotate-y`, 'data-rotate-z`, `data-rotate` - they define the rotation of
            the element around given axis in degrees; their default value is 0; `data-rotate` and `data-rotate-z`
            are exactly the same;
        * `data-scale` - defines the scale of step element; default value is 1
        
        These values are used by impress.js in CSS transformation functions, so for more information consult
        CSS transfrom docs: https://developer.mozilla.org/en/CSS/transform
        
    -->
    
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



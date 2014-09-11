<?php 


function makeTriSlideWithHeight($title, $credit, $imageA, $imageB, $imageC){
	echo '<div class="translateDown" style="float:left;position:relative; left:-100px; top:-30px;">';
	echo '<span style="font-size:36px;color:#CCC;">'.$title.'</span>';
	echo '</div>';
	echo '<br>';
	
	echo '<div class="translateUp" style="float:right;position:relative; top:50px; right:50px; width:320px; height:240px;">';
	echo '<img src='.$imageA.' width=100%><br><br>GSAPP<br><span style="font-size:10pt;line-height:11pt;">The Avery Library and GSAPP</span>';
	echo '</div>';
	
	echo '<div class="translateDown" style="float:left;position:relative; left:-120px; top:50px; right:0px; width:480px; height:340px;">';
	echo '<img src='.$imageB.' width=100%><br><br>Studio Culture<br><span style="font-size:10pt;line-height:11pt;">GSAPP Studio Workspace</span>';
	echo '</div>';
	
	echo '<div class="" style="float:right;position:relative; top:0px; right:-120px; width:620px; height:160px;">';
	echo '<img src='.$imageC.' width=100%><br>Computing<br><span style="font-size:10pt;line-height:11pt;">From Microsoft Being Human</span>';
	echo '</div>';

 }


function makeMajorMinorSlideWithHeight($title, $credit, $imageMajor, $imageMinor, $commentMinor, $height){
	echo '<div class="translateDown" style="float:left;position:relative; left:-100px; top:-30px;">';
	echo '<span style="font-size:36px;color:#CCC;">'.$title.'</span>';
	echo '</div>';
	echo '<br>';
	
	echo '<div class="translateUp" style=";float:right;position:relative; top:-40px; right:0px; width:320px; padding:20px;">';
	echo '<img src='.$imageMinor.' width=100%>';
	
		echo '<div style="float:left;position:relative;left:0px;top:0px;height:40px;">';
			echo '<span style="font-size:12pt;line-height:14pt;color:#000;"><br>'.$commentMinor . '</span>';
		echo '</div>';
		echo '<div style="float:left;position:relative;left:-1px;top:-41px;">';
			echo '<span style="font-size:12pt;line-height:14pt;;color:#fff;"><br>'.$commentMinor . '</span>';
		echo '</div>';
	echo '</div>';

    echo '<div class="" style="width:820px;height:'.$height.'px;background-image:url(\''.$imageMajor.'\');" ></div>';
	echo '<br>';
	echo '<p style="font-size:20px;margin-top:'. -80 . 'px;text-align:right;color:#999;">'.$credit.'</p>';
}



function makeMajorMinorSlideWithHeightWide($title, $credit, $imageMajor, $imageMinor, $commentMinor, $height){
	echo '<div class="translateUp" style="float:left;position:relative; top:0px; right:0px; >';
	echo '<span style="font-size:36px;color:#CCC;">'.$title.'</span>';
	echo '</div>';
	echo '<br>';
	echo '<div class="translateUp" style="bacground-color:#000;float:right;position:relative; top:0px; right:0px; width:320px; height:440px;">';
	echo '<img src='.$imageMinor.' width=100%>';
		echo '<div style="float:left;position:relative;left:0px;top:0px;height:40px;">';
			echo '<span style="font-size:12pt;line-height:14pt;color:#000;"><br>'.$commentMinor . '</span>';
		echo '</div>';
		echo '<div style="float:left;position:relative;left:-1px;top:-41px;">';
			echo '<span style="font-size:12pt;line-height:14pt;;color:#fff;"><br>'.$commentMinor . '</span>';
		echo '</div>';	echo '</div>';

    echo '<div class="" style="width:820px;height:'.$height.'px;background-image:url(\''.$imageMajor.'\');" ></div>';
	echo '<br>';
	echo '<p style="font-size:20px;margin-top:'. -60 . 'px;text-align:right;color:#999;">'.$credit.'</p>';
}

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
    echo '<div class="translateDown" style="float:left;position:relative; top:-80; left:350px; width:640px; height: 400px;background-image:url(\''.$image.'\');"></div>';
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
    <title>A4707 Evolutionary Design Intro</title>
    
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
    <div id="" class="step" data-x="2000" data-y="1000" data-rotate="90" data-scale="1.0">
    	<?php makeThemeSlide(
    	"Thinking through fitness, evaluation and selection",
    	"Theme #3: Performance &amp the Environment",
    	"images/evodes-galapagos.png"); ?>
    </div>




    
	<!-- Syllanus Intro -->

	<div class="step" data-x="0" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Evolutionary Design</b>
		<p style="color:#aaa;">This seminar presents evolutionary systems and models, alongside other iterative 
		design approaches, as pragmatic and open-ended tools for realizing architectural structures. 
		Evolution provides a powerful framework and example of how natural systems can bootstrap to 
		increasingly more sophisticated outcomes.
		</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Class Syllabus", 'images/evodes-SyllabusAccent.jpg', 620,350,100); ?>

	</div>
	
	
	<!-- EVOLUTIONARY MECHANICS -->
	
	
	<div class="step" data-x="0" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Evolutionary Design</b>
		<p style="color:#aaa;">This seminar presents <span style="color:#fff;">evolutionary systems</span> and models, alongside other iterative 
		design approaches, as pragmatic and open-ended tools for realizing architectural structures. 
		Evolution provides a powerful framework and example of how natural systems can bootstrap to 
		increasingly more sophisticated outcomes.
		</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Karl Sims Biomorphs in Richard Dawkins' The Blind Watchmaker, 1986", 'images/evodes-biomorph.png', 620,350,100); ?>

	</div>
	
	
	
	
	<div class="step" data-x="0" data-y="0" style="line-height:36px;font-size:24px;color:#666;">

		<b>Evolutionary Design</b>
		<p style="color:#888;">This seminar presents evolutionary systems and models, alongside other <span style="color:#fff;">iterative 
		design approaches</span>, as pragmatic and <span style="color:#fff;">open-ended tools</span> for realizing architectural structures. 
		Evolution provides a powerful framework and example of how natural systems can bootstrap to 
		increasingly more sophisticated outcomes.
		</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Arup Acoustics, London City Hall Foster and Partners", 'images/dd/acousticAccent.png', 620,350,100); ?>

	</div>
	
	
	<div class="step" data-x="0" data-y="0" style="line-height:36px;font-size:24px;color:#666;">

		<b>Evolutionary Design</b>
		<p style="color:#888;">This seminar presents evolutionary systems and <span style="color:#fff;">models</span>, alongside other iterative 
		design approaches, as pragmatic and open-ended tools for realizing architectural structures. 
		Evolution provides a powerful framework and example of how natural systems can bootstrap to 
		increasingly more sophisticated outcomes.
		</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Finite Element Analysis", 'images/dd/FEMAccent.jpg', 620,350,100); ?>

	</div>
	
	
	<div class="step" data-x="0" data-y="0" style="line-height:36px;font-size:24px;color:#666;">

		<b>Evolutionary Design</b>
		<p style="color:#888;">This seminar presents evolutionary systems and models, alongside other iterative 
		design approaches, as pragmatic and open-ended tools for realizing architectural structures. 
		Evolution provides a powerful framework and example of how natural systems can  <span style="color:#fff;">bootstrap to 
		increasingly more sophisticated outcomes</span>.
		</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Evolution of Life on Earth", 'images/evodes-paleo.jpg', 620,350,100); ?>

	</div>
	
	
	
	<!-- COURSE MOTIVATIONS -->
	<!--

	
	<div class="step" data-x="1000" data-y="0" style="line-height:28px;font-size:24px; color:#888;">		
		<b style="color:#fff">Course Motivations</b>
		<li>
			<span style="color:#fff;">
			Exploration of alternative design methodologies
			</span>
			<br><span style="color:#fff;;margin-left:30px;">
			Iterative, Generative &amp; Evolutionary 
			</span>
		</li>
		<li>
			Assess and incorporate novel simulation tools into design
			<br><span style="color:#888;;margin-left:30px;">
			From workflows, plugins to programming
			</span>
		</li>
		<li>
			Harness computing in new ways
			<Br><span style="color:#888;margin-left:30px;"> 
			How can we evolve our own working methods?
			</span>
		</li>
		<Br>&nbsp;<br>
		
		<?php addAccentImageWithCredit("Evolutionary Paradigm", 'images/dd/feedback_flow_sm.png', 305); ?>
 	</div>



	<div class="step" data-x="1000" data-y="0" style="line-height:28px;font-size:24px; color:#888;">		
		<b style="color:#fff">Course Motivations</b>
		<li>
			Exploration of alternative design methodologies
			<br><span style="color:#888;;margin-left:30px;">
			Iterative, Generative &amp; Evolutionary 
			</span>
		</li>
		<li>
			<span style="color:#fff;">
			Assess and incorporate novel simulation tools into design
			</span>
			<br><span style="color:#fff;;margin-left:30px;">
			From workflows, plugins to programming
			</span>
		</li>
		<li>
			Harness computing in new ways
			<Br><span style="color:#888;margin-left:30px;"> 
			How can we evolve our own working methods?
			</span>
		</li>
		<Br>&nbsp;<br>
		
		<?php addAccentImageWithCredit("EZCT Architecture, Chair", 'images/dd/20090907174005.jpg', 305); ?>

 	</div>





	<div class="step" data-x="1000" data-y="0" style="line-height:28px;font-size:24px; color:#888;">		
		<b style="color:#fff">Course Motivations</b>
		<li>
			Exploration of alternative design methodologies
			<br><span style="color:#888;;margin-left:30px;">
			Iterative, Generative &amp; Evolutionary 
			</span>
		</li>
		<li>
			Assess and incorporate novel simulation tools into design
			<br><span style="color:#888;;margin-left:30px;">
			From workflows to plugins to programming
			</span>
		</li>
		<li>
			<span style="color:#fff;">
			Harness computing in new ways
			</span>
			<Br><span style="color:#fff;margin-left:30px;"> 
			How can we evolve our own working methods?
			</span>
		</li>
		<Br>&nbsp;<br>
		
		<?php addAccentImageWithCredit("Brain Computer Inteface Research at GSAPP Cloud Lab", 'images/dd/bci.png', 305); ?>

 	</div>
	-->
	
	
	<!-- Approach -->
	
	<div class="step" data-x="2000" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
	
		<b style="color:#fff;">Our Approach</b>
		<li><span style="color:#fff;">Hands on.</span> Learn by doing and applying to proto design problems.</li>
		<li><span style="color:#fff;">Design is always foregrounded.</span> The primary question is always how does this benefit the design process or design outcomes.</li>
		<li><span style="color:#fff;">Computing is the 21st century literacy.</span> We need to understand the underlying mechanics of the software we use, both to push the structures of today but also to envision the structures of tomorrow.</li> 
		<Br>
		<?php addAccentImageWithCredit("Biometric Workshop", 'images/dd/eyetracking_820.png', 305); ?>

	</div>
	

	
	<div class="step" data-x="3000" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		<b style="#fff;">Course Goals & Objectives</b>

		<li><span style="color:#fff;">Exploration of evolutionary paradigm as well as other iterative design methodologies</span></li>
		<li>Learn to use simulation tools and apply them to design problems</span></li>   <!-- false color? -->
		<li>Develop a critical approach to the use of simulation tools</li>		<!-- world modeler? -->
		<li>Examine the gap between digital models and real world physical processes</li>	<!-- air flow? -->
		<li>Understand fundamentals of computational geometry and analysis</li>		<!-- Fea polygon? -->
		<li>Evaluate new software, utilities and protocols for design analysis</li>			<!-- bci`? -->
		<li>Document work in a technical format meeting publications standards<Br>			<!-- tech paper -->
	
		<span style="color:#AAA;margin-left:30px;">Ex: for submission to ACADIA or other similar conference</span></li>
		<br>
		<?php addAccentImageWithCreditAndHeight("EZCT Architecture, Chair", 'images/dd/20090907174005.jpg', 600, 200, 50); ?>

	</div>
		
	
	<div class="step" data-x="3000" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		<b style="#fff;">Course Goals & Objectives</b>

		<li>Exploration of evolutionary paradigm as well as other iterative design methodologies</li>
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
		<li>Exploration of evolutionary paradigm as well as other iterative design methodologies</li>
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

			<li>Exploration of evolutionary paradigm as well as other iterative design methodologies</li>
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

				<li>Exploration of evolutionary paradigm as well as other iterative design methodologies</li>
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
 		
		<br>
		Performance algorithms include...
		
		<li>Finite Element Analysis</li>
		<li>Solar Analysis</li>
		<li>Acoustic Analysis</li>
		<li>Computational Fluid Dynamics</li> 
		<li>Physics Based Modeling</li>

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
 		
		<br>
		Performance algorithms include...
		
		
		<li>Finite Element Analysis</li>
		<span style="color:#fff;"><li>Solar Analysis</li>
		<li>Acoustic Analysis</li></span>
		<li>Computational Fluid Dynamics</li>
		<li>Physics Based Modeling</li>

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
 		
		<br>
		Performance algorithms include...
		
		<span style="color:#fff;"><li>Finite Element Analysis</li></span>
		<li>Solar Analysis</li>
		<li>Acoustic Analysis</li>
		<li>Computational Fluid Dynamics</li> 
		<li>Physics Based Modeling</li>

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
 		
		<br>
		Performance algorithms include...
		
		<li>Finite Element Analysis</li>
		<li>Solar Analysis</li>
		<li>Acoustic Analysis</li>
		<li>Computational Fluid Dynamics</li> 
		<span style="color:#fff;"><li>Physics Based Modeling</li></span>

	</div>

	

	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		Semester Project

		<li>Work in small groups or individually</li>
		<li>A focused application of performance in the evolution of a design prototype</li>
		<li>Clear definition and evaluation of a performance-based methodology</li>
		<li>Compile simulation results (images, data, diagrams) in a technical presentation</li>
		<li>Should incorporate one or more of the workshop softwares</li>
		<li>Encouraged to include software, techniques or data sets from outside the workshops<br>
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
    	makeImageGrid("Past Student Work", "Excerpts from Student Technical Papers", $images, 4); 
    	?>
    </div>
    

	<div class="step" data-x="6500" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
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
    


     <div class="step" data-x="7000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	 <?php makeGenericSlideWithHeight("Seeing the Unseen","False Color Map of Moon Topography", "images/dd/Moon.png", "559"); ?>
    </div>
    







    
	
	
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



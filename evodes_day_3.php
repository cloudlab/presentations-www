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
	echo '<br>';	
	echo '<div class="translateUp" style=";float:right;position:relative; top:-40px; right:0px; width:320px; padding:20px;">';
	echo '<img src=\''.$imageMinor.'\' width=100%>';
	
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
	echo '<iframe style="border-style:solid;border-width:10px;border-color:#666;margin-top:20px;" class="" width="820" height="460" ';
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
    <title>A4707 Evolutionary Design Day #3</title>
    
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
		
		<div style="float:left;width:140px;color:#ccc;">
		 	Tech Intro<br>
			Class 1<br>
			Class 2<br>
			<b><span style="color:#fff;">Class 3</span></b><br>
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
			<b><span style="color:#fff;">Workshop</span></b><br>
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
			<b><span style="color:#fff;">Environment Simulation in Ladybug</span></b><br>
			Evolution Reading Discussion <br>
			Individual or Group Meetings<br>
			Morphogenesis (Homeobox) in Grasshopper<br>
			Individual or Group Meetings<br>
			Evolutionary Solver in Rhino Galapagos<br>
			Technical Paper Reading Discussion<br>
			Individual or Group Meetings<br>
			Beyond Evo, Advanced Computing in Architecture<br>
			Final Presentations<br>
		</div>
	</div>	
	
	<!-- Goals for Today -->
	
	<div class="step"  data-x="2000" data-y="0" style="line-height:48px;font-size:36px;">
		<p>Goals for Today</p>
		<li>Reading Reminder</li>
		<li>Intro, Raycasting</li>
		<li><b>Workshop: Environmental Simulation in Ladybug</b></li>
		<li>For Next Class...</li>
	</div>	 
	
	<!-- Readings -->

	<div class="step" data-x="3000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	<?php 
    	$images = array('images/evodes/readings/alife94-1.png',
'images/evodes/readings/alife94-3.png',
'images/evodes/readings/Bentley - Creative Evolutionary Systems (Academic, 2002)-1.png',
'images/evodes/readings/Bentley - Creative Evolutionary Systems (Academic, 2002)-40.png',
'images/evodes/readings/Carroll Endless Forms Most Beautiful-1.png',
'images/evodes/readings/Carroll Endless Forms Most Beautiful-52.png',
//'images/evodes/readings/Intro_to_an_evolutionary_architecture_small-1.png',
'images/evodes/readings/Intro_to_an_evolutionary_architecture_small-20.png',
'images/evodes/readings/Kelly - artificial evolution-1.png',
'images/evodes/readings/Kelly - artificial evolution-16.png',
'images/evodes/readings/Performative_Architecture_reading-2.png',
'images/evodes/readings/The_Blind_Watchmaker-1.png',
'images/evodes/readings/The_Blind_Watchmaker-66.png');
    	makeImageGrid("Readings", "Readings are each excerpted from these books and papers", $images, 6); 
    	?>
    </div>
   
   <div class="step" data-x="3500" data-y="0" data-z="0" data-rotate="0" data-scale="1.0" style="line-height:36px;font-size:24px;">
		
		Evolutionary Design Workshops
		<Br><br>
		
		<div style="float:left;width:220px;color:#ccc;">
		 	<b><span style="color:#fff;">#1 Environment</span></b><br>
			#2 Morphogenesis<br>
			#3 Evolution<br>
		</div>
		
		<div style="float:left;width:240px;color:#ccc;">
		 	<b><span style="color:#fff;">Fitness</span></b><br>
			Genes<br>
			Selection/Mutation<br>
		</div>
		
		<div style="float:left;color:#eee;">
			<b><span style="color:#fff;">Ladybug for Grasshopper</span></b><br>
			Automata in Grasshopper<br>
			Galapagos for Grasshopper<br>			
		</div>
	</div>	
	
	
	
	<!-- Ray Casting -->

	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Environmental Simulation","Solar Design in Ecotect", 'images/evodes/11-950x473.jpg', "478"); ?>
	</div>

	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Raycasting","Autodesk Ecotect", "images/dd/reflectance-combined.jpg", "350"); ?>
	</div>
	
	
	<!-- Ray Casting Optimizations: Revese  -->
	<div class="step" data-x="6000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Raycasting: Reverse Casting","Autodesk Ecotect", "images/dd/raycasting_explanation.png", "559"); ?>
	</div>
	
	<!-- Ray Casting Optimizations: sampling -->
	<div class="step" data-x="7000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Raycasting: Sampling","Sampling Density", "images/dd/Subdivisions.png", "559"); ?>
	</div>
	
	<!-- Ray Casting Optimizations: Shadow Maps -->
	<div class="step" data-x="8000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Incorporating the Observed: Weather Data","Ecotect Shadow Maps", "images/dd/sky_dome.png", "548"); ?>
	</div>
	
	<!-- Ecotect Shadow Maps-->
	<div class="step" data-x="9000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Closing the Loop: Shadow Maps","Adding weather info to shadow maps", "images/dd/weather_data.png", "550"); ?>
	</div>

	<!-- Ecotect Radiance Results -->
	<div class="step" data-x="10000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Results","Solar Insolation", "images/dd/ecotect-2.png", "559"); ?>
	</div>

	
	<!-- Lets Workshop -->

	<div class="step" data-x="11000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Workshop time!</b>
		<br>
		Make sure your running Grasshopper<br>
		Install GHPython for Grashopper<Br>
		Install Ladybug and Honeybee for Grashopper<Br>
		Download samples files<br>
	</div>	
		

	<!-- Next Class -->
	
	<div class="step"  data-x="12000" data-y="0" style="line-height:36px;font-size:24px;">

		<span style="font-size:48px;line-height:56px;">
		<b>Reading Discussion</b>
		</span>
		<br>
		<b>For Next Week</b>		
		<li>Carefully go over your reading and be ready to field a question or two</li>
		<li>Come ready to discuss</li>
		<li>We want to hear about your goals, questions and interests</li>
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



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
	

	<!--Class Schedule -->
	
	<div class="step" data-x="1000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0" style="line-height:36px;font-size:24px;">
		A4707 Evolutionary Design Schedule
		<br><br>

		<div style="float:left;width:200px;color:#ccc;">
		 	GSAPP Tech Intro
			Class 1</b><br>
			Class 2<br>
			<b style="color:#fff">Class 3</b><br>
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
			Crash Course: Evolutionary Design Principles<br>
			Workshop #1, Data Visualization in Rhino<br>
			<b style="color:#fff">Workshop #2, Environmental Modeling in Ecotect</b><br>
			Workshop #3, Forces in Grasshopper Kangaroo<br>
			Class Discussion, Readings on Creative Evolutionary Systems<br>
			Workshop #4, Evolution in Grasshopper Galapagos<br>
			Individual Meetings<br>
			Workshop #5, Optimization in Solidworks<br>
			Individual Meetings<br>
			No Class (Fall Break)<br>
			Individual Meetings<br>
			Group Presentation on Research<br>
			Individual Meetings<br>
		</div>
	</div>
	
	<!-- Goals for Today -->
	
	<div class="step"  data-x="2000" data-y="0" style="line-height:48px;font-size:36px;">
		<p>Goals for Today</p>
		<li>Introduce Readings</li>
		<li>Intro, Modeling the Environment</li>
		<li>Focus, Raycasting in Ecotect</li>
		<li><b>Workshop: Environmental Simulation in Ecotect</b></li>
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
    
	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		
		<div style="float:right;">
			<?php addAccentImageWithCreditAndHeight("", 'images/evodes/a02_p02_sm.jpg', 300, 200, 0); ?>
		</div>
		
		<span style="color:#fff;">
		Intro: Modeling the Environment
		</span>
		
		<li>Parametric/Heuristic vs Physical Simulation</li>
		<li>Survey of Environmental Modeling Methods</li>
		<li>Focus: Raycasting in Ecotect</li>
		
	</div>
	
	
	<!-- Environmental Simulation -->
		<!-- Parametric/Heuristic vs Physical Simulation -->
		<!-- Aspects of the Environment we Simulate -->
		<!-- Models and Mechanics of Simulation -->
			<!-- Acoustic -->
			<!-- Airflow -->
			<!-- Insolation -->
			<!-- Radiance -->
		<!-- Mechanics: Raytracing -->
			<!-- need ????? -->
	<!-- -->

	<!--
	NCCS_greencomputers_525px.jpg
NCCS_merra_flood93_spechud.jpg	
This close-up view shows one row--approximately 2,000 computer processors--of the "Discover" supercomputer at the NASA Center for Climate Simulation (NCCS). Discover has a total of nearly 15,000 processors. Credit: NASA/Pat Izzo
http://svs.gsfc.nasa.gov/Gallery/NCCS.html#HighResImages
The Modern Era Retrospective-analysis for Research and Applications (MERRA) is producing a comprehensive record of Earth's weather and climate from 1979, the beginning of the operational Earth observing satellite era, up to the present. This visualization depicts specific atmospheric humidity on June 17, 1993, during the Great Flood that hit the Midwestern United States.
http://svs.gsfc.nasa.gov/Gallery/NCCS.html#HighResImages
-->


	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Heuristic Modeling","World3 Computer Simulation, The Limits to Growth 1972", 'images/dd/WorldModel_combined_sm.jpg', "500"); ?>
	</div>
		
		
	<div class="step" data-x="6000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Heuristic Modeling","Still from \"An Inconvenient Truth\", Al Gore demonstrating escalation of man-made CO2 in the Environment", 'images/evodes/off-the-charts.jpg', "500"); ?>
	</div>

	
	<!-- Models -->
	<div class="step" data-x="7000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	<?php 
    	$images = array(
'images/evodes/NAMA.jpg',
'images/evodes/Planetarium_in_Putnam_Gallery_2,_2009-11-24.jpg',
'images/evodes/neosolarsys_tip_30_phi_60_4_AU_2011-04-28_1210_Slide6n_rs_.jpg');
    	makeImageGrid("Physical Simulation", "Models of the Solar System", $images, 3); 
    	?>
    </div>
    	
	
	<!--
1000px-Conservation_of_mass.png
CFD-main.png
Components_stress_tensor_cartesian.svg.png
navier_stokes.jpg
particle-plume.jpg
-->
	
	<div class="step" data-x="8000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Sound, Air &amp; Light: Acoustics","Arup Acoustics, London City Hall Foster and Partners", 'images/dd/acousticAccent.png', "400"); ?>
	</div>


	<div class="step" data-x="9000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Sound, Air &amp; Light: Acoustics","Acoustic Resonance Patterns", 'images/dd/acoustic_resonance.png', "400"); ?>
	</div>


	<!--
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Computational Fluid Dynamics", "30 St Mary Axe, Norman Foster and Arup", 'images/dd/BDSP_02.jpg', "500"); ?>
	</div>
	-->
	
	<div class="step" data-x="10000" data-y="0" style="line-height:36px;font-size:24px;">
		
		<?php makeGenericSlideWithHeight("Sound, Air &amp; Light: Air","NASA's Sustainability Base", 'images/evodes/640370main_sustainability_base_fluid.jpg', "480"); ?>
		<span style="font-size:10pt;line-height:12pt;">	In NASA's Sustainability Base, computational fluid dynamics is used to simulate environmental flows inside and outside the building. Simulated external flows include seasonal wind patterns in varying weather conditions. Internal simulations include air circulation patterns throughout the building, which are used to assess flow-control devices, such as automated windows and heating, ventilation and air conditioning (HVAC) units. Both sets of simulation data allow the building's control system to develop strategies for maintaining maximum comfort while minimizing energy demands.
		http://www.nasa.gov/centers/ames/news/features/2012/sustainability_base_feature.html
		</span>
		
	</div>

	<div class="step" data-x="11000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Sound, Air &amp; Light: Air", "CFD Tensor Field", 'images/evodes/CFD-main.png', "600"); ?>
	</div>

	<div class="step" data-x="12000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Sound, Air &amp; Light: Air", "Navier Stokes CFD Equations", 'images/evodes/navier_stokes_b.jpg', "350"); ?>
	</div>

	<div class="step" data-x="13000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Sound, Air &amp; Light: Air", "Still image from Fire Dynamic Simulator. Temperatures at 5 ft above the floor. Image credit: NIST", 'images/evodes/winddrivenhomefiresimulation600_1.jpg', "400"); ?>
	</div>
	
	
	<!-- Ray Casting -->

	<div class="step" data-x="14000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Sound, Air &amp; Light: Light","Solar Design in Ecotect", 'images/evodes/11-950x473.jpg', "478"); ?>
	</div>

	<div class="step" data-x="15000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Raycasting","Autodesk Ecotect", "images/dd/reflectance-combined.jpg", "350"); ?>
	</div>
	
	
	<!-- Ray Casting Optimizations: Revese  -->
	<div class="step" data-x="16000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Raycasting: Reverse Casting","Autodesk Ecotect", "images/dd/raycasting_explanation.png", "559"); ?>
	</div>
	
	<!-- Ray Casting Optimizations: sampling -->
	<div class="step" data-x="17000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Raycasting: Sampling","Sampling Density", "images/dd/Subdivisions.png", "559"); ?>
	</div>
	
	<!-- Ray Casting Optimizations: Shadow Maps -->
	<div class="step" data-x="18000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Incorporating the Observed: Weather Data","Ecotect Shadow Maps", "images/dd/sky_dome.png", "548"); ?>
	</div>
	
	<!-- Ecotect Shadow Maps-->
	<div class="step" data-x="19000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Closing the Loop: Shadow Maps","Adding weather info to shadow maps", "images/dd/weather_data.png", "550"); ?>
	</div>

	<!-- Ecotect Radiance Results -->
	<div class="step" data-x="20000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Results","Solar Insolation", "images/dd/ecotect-2.png", "559"); ?>
	</div>

	
	<!-- Lets Workshop -->

	<div class="step" data-x="21000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Workshop time!</b>
		<br>
		Ecotect Analysis 2011<br>
		Autodesk<Br>
		Created by Andrew Marsh, SquareOne Software<br>
		http://usa.autodesk.com/ecotect-analysis/
	</div>	
		

	<!-- Next Class -->
	
	<div class="step"  data-x="22000" data-y="0" style="line-height:36px;font-size:24px;">

		<span style="font-size:48px;line-height:56px;">
		<b>Workshop #3, Forces in Grasshopper Kangaroo</b>
		</span>
		<br>
		<b>For Next Week</b>		
		<li>Bring Charged Laptop</li>
		<li>Download and Install Grasshopper Kangaroo (food4rhino.com)</li>
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



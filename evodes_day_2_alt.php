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
    <title>A4707 Evolutionary Design Day #2</title>
    
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


	<!-- Goals for Today -->
	
	
	<div class="step"  data-x="1000" data-y="0" style="line-height:48px;font-size:36px;">
		<p>Goals for Today</p>
		<li>Worlding the World Lecture</li>
		<li>Workshop on Data Visualization in Rhino</li>
		<li>For Next Class...</li>
	</div>	 
	
	    
	<!-- Worlding the World Lecture -->
		<!-- What, How we're measuring the world -->
		<!-- What are we measuring? -->
		<!-- How are we measuring? -->

	<div class="step" data-x="2000" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		
		<div style="float:right;">
			<?php addAccentImageWithCreditAndHeight("Whole Earth Catalogue", 'images/wtw/world_catalogue.jpg', 400, 500, 50); ?>
		</div>
		
		<span style="color:#fff;">
		Worlding the World
		</span>
		
		<li>Measurements Role in Design</li>
		<li>Intensive vs Extensive</li>
		<li>Modeling the Extensive: Computational Geometry</li>
		<li>Modeling the Intensive: Data Visualization</li>
		<br>
		<b>Workshop time: Working with Data in Grasshopper.</b>
		
	</div>
	
	<div class="step" data-x="2000" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		
		<div style="float:right;">
			<?php addAccentImageWithCreditAndHeight("Whole Earth Catalogue", 'images/wtw/closed_eco_system.jpg', 400, 500, 50); ?>
		</div>
		
		<span style="color:#fff;">
		Worlding the World
		</span>
		
		<li>Measurements Role in Design</li>
		<li>Intensive vs Extensive</li>
		<li>Modeling the Extensive, Computational Geometry</li>
		<li>Modeling the Intensive, Data Visualization</li>
		<br>
		<b>Workshop time: Working with Data in Grasshopper.</b>
		
	</div>
	
	
	<!-- Intensive vs Extensive Properties -->
		<!-- Intensive vs Extensive -->
		<!-- more -->
		<!-- Vector Field, Descritization of matter (the how) -->
		
	<div class="step" data-x="3000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Intensive vs Extensive</b>
		<br><br>
		<?php addAccentImageWithCreditAndHeight("Atlas", 'images/wtw/intensive_extensive_02.jpg', 620,400,100); ?>

	</div>

	<div class="step" data-x="3000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Intensive vs Extensive</b>
		<br><br>
		<?php addAccentImageWithCreditAndHeight("Atlas", 'images/wtw/intensive_extensive_01.jpg', 620,400,100); ?>

	</div>

	<div class="step" data-x="3000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Intensive vs Extensive</b>
		<br><br>
		<?php addAccentImageWithCreditAndHeight("Atlas", 'images/wtw/intensive_extensive_03.jpg', 620,400,100); ?>

	</div>

	<!-- Historic Modeling Techniques -->
		<!-- Boolean Logic -->
		<!-- more, Tron -->
		<!-- Platonic geometry (Polygon) -->
		<!-- Polygon basics -->
		<!-- NURBS (Non-Uniform Rational B-Splines -->
		<!-- UV Mapping -->
		<!-- Developmental Surfaces -->
		<!-- Sub-division Surfaces -->
	
	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Extensive: Computational Geometry</b>
		<p style="color:#aaa;">
		Boolean Logic
		</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Boolean Logic", 'images/wtw/geom_01.jpg', 600,400,100); ?>

	</div>

	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Extensive: Computational Geometry</b>
		<p style="color:#aaa;">
		First 3d movie was modeled and rendered this way
		</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Boolean Logic", 'images/wtw/geom_02.jpg', 600,400,100); ?>

	</div>
	
	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Extensive: Computational Geometry</b>
		<p style="color:#aaa;">
		Platonic Solids
		</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Boolean Logic", 'images/wtw/geom_03.jpg', 600,400,100); ?>

	</div>
	
	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Extensive: Computational Geometry</b>
		<p style="color:#aaa;">
		Geometric construct
		</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Boolean Logic", 'images/wtw/geom_04.jpg', 600,400,100); ?>

	</div>
	
	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Extensive: Computational Geometry</b>
		<p style="color:#aaa;">
		Bad conditions
		</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Boolean Logic", 'images/wtw/geom_05.jpg', 600,400,100); ?>

	</div>
	
	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Extensive: Computational Geometry</b>
		<p style="color:#aaa;">
		NURBS Paradigm
		</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Boolean Logic", 'images/wtw/geom_06.png', 600,400,100); ?>

	</div>
	
	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Extensive: Computational Geometry</b>
		<p style="color:#aaa;">
		NURBS Paradigm equations
		</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Boolean Logic", 'images/wtw/geom_nurbs_01.gif', 600,400,100); ?>

	</div>

	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Extensive: Computational Geometry</b>
		<p style="color:#aaa;">
		NURBS Paradigm equations
		</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Boolean Logic", 'images/wtw/geom_nurbs_02.gif', 600,400,100); ?>

	</div>

	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Extensive: Computational Geometry</b>
		<p style="color:#aaa;">
		NURBS Paradigm equations
		</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Boolean Logic", 'images/wtw/geom_nurbs_03.gif', 600,400,100); ?>

	</div>
	
	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Extensive: Computational Geometry</b>
		<p style="color:#aaa;">
		NURBS Paradigm equations
		</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Boolean Logic", 'images/wtw/geom_nurbs_04.gif', 600,400,100); ?>

	</div>

	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Extensive: Computational Geometry</b>
		<p style="color:#aaa;">
		UV Mapping
		</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Boolean Logic", 'images/wtw/geom_07a.jpg', 600,400,100); ?>

	</div>

	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Extensive: Computational Geometry</b>
		<p style="color:#aaa;">
		UV Mapping
		</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Boolean Logic", 'images/wtw/geom_09c.jpg', 600,400,100); ?>

	</div>
	
	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Extensive: Computational Geometry</b>
		<p style="color:#aaa;">
		Sub-division Surface
		</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Boolean Logic", 'images/wtw/geom_10.jpg', 600,400,100); ?>

	</div>
	
	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Extensive: Computational Geometry</b>
		<p style="color:#aaa;">
		Sub-division Surface
		</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Boolean Logic", 'images/wtw/geom_11.jpg', 600,400,100); ?>

	</div>

	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Extensive: Computational Geometry</b>
		<p style="color:#aaa;">
		Sub-division Surface
		</p>
		<br>
		<?php addAccentImageWithCreditAndHeight("Boolean Logic", 'images/wtw/geom_12.jpg', 600,400,100); ?>

	</div>
	
	
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Intensive: Data Visualization</b>
		<br>
		<br>
		The Geometry of Performance:<br>
		<li>False Color Representation</li>
		<li>Isometric Curves</li>
		<li>Octree and Quadtree Spatial Partitions</li>
		
	</div>	
	

	
	<div class="step" data-x="6000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Intensive: Data Visualization</b> <br>
		<p style="color:#aaa;">
		False Color Representation, 2D
		</p>
		<br><br>
		<?php addAccentImageWithCreditAndHeight("False Color Representation of Wind Vorticity (local spinning motion)", 'images/wtw/zha-fig4.jpg', 600,400,100); ?>

	</div>
	
	<div class="step" data-x="6000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Intensive: Data Visualization</b> <br>
		<p style="color:#aaa;">
		False Color Representation, 3D
		</p>
		<br><br>
		<?php addAccentImageWithCreditAndHeight("Radiance Luminance False-Color rendering facing the Mall, LMN Tech Studio", 'images/wtw/Med-Mart-Daylight-Glare.png', 600,400,100); ?>

	</div>
	
	
	<div class="step" data-x="7000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Intensive: Data Visualization</b> <br>
		<p style="color:#aaa;">
		Isometric Curves, 2D
		</p>
		<br><br>
		<?php addAccentImageWithCreditAndHeight("Iso Representation", 'images/wtw/Loop_isallobaric_tendencies.gif', 600,400,100); ?>

	</div>
	
	<div class="step" data-x="7000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Intensive: Data Visualization</b> <br>
		<p style="color:#aaa;">
		Isometric Curves, 3D
		</p>
		<br><br>
		<?php addAccentImageWithCreditAndHeight("Electrostatic potential of C60. Contours indicate charge on 3D surface", 'images/wtw/b712694h-f2.gif', 600,400,100); ?>

	</div>
	
	<div class="step" data-x="8000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Intensive: Data Visualization</b> <br>
		<p style="color:#aaa;">
		Quadtree Partitions, 2D
		</p>
		<br><br>
		<?php addAccentImageWithCreditAndHeight("Quad Tree Generation", 'images/wtw/RTEmagicC_Octree_jpg_03.jpg', 600,400,100); ?>

	</div>
	
	<div class="step" data-x="8000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Intensive: Data Visualization</b> <br>
		<p style="color:#aaa;">
		Octree Partitions, 3D
		</p>
		<br><br>
		<?php addAccentImageWithCreditAndHeight("Oct Tree", 'images/wtw/Octree2.png', 820,480,0); ?>

	</div>
	
	<div class="step" data-x="8000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Intensive: Data Visualization</b> <br>
		<p style="color:#aaa;">
		Octree Partitions, 3D
		</p>
		<br><br>
		<?php addAccentImageWithCreditAndHeight("Automatically generated Octree mesh around a complex airplane model, Jens Zudrop", 'images/wtw/octree_mesh.png', 820,400,0); ?>

	</div>

	<div class="step" data-x="8000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Intensive: Data Visualization</b> <br>
		<p style="color:#aaa;">
		Voronoi Partitioning, 2D
		</p>
		<br><br>
		<?php addAccentImageWithCreditAndHeight("Voronoi Generation", 'images/wtw/vor2.png', 600,400,100); ?>

	</div>

	<div class="step" data-x="8000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Intensive: Data Visualization</b> <br>
		<p style="color:#aaa;">
		Voronoi Partitioning, 2D
		</p>
		<br><br>
		<?php addAccentImageWithCreditAndHeight("Robot Path derived from Voronoi of Campus Plan, CU Computer Science Path Planner", 'images/wtw/path.jpg', 600,400,100); ?>

	</div>
		

	<div class="step" data-x="8000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Modeling the Intensive: Data Visualization</b> <br>
		<p style="color:#aaa;">
		Voronoi Partitioning, 3D
		</p>
		<br><br>
		<?php addAccentImageWithCreditAndHeight("Voronoi Morphologies, MATSYS 2006", 'images/wtw/drawings_01_voronoi3d.jpg', 600,400,100); ?>

	</div>
		
	
	
	
	<!-- Lets Workshop -->

	<div class="step" data-x="9000" data-y="0" style="line-height:36px;font-size:24px;">

		<b>Workshop time!</b>
		<br>
	</div>	
		
	<!-- Recap for next week -->
	
	
	<!-- Workshop Recap -->



	<!--Class Schedule -->
	
	<div class="step" data-x="10000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0" style="line-height:36px;font-size:24px;">
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
			Crash Course: Evolutionary Design Principles<br>
			<b style="color:#fff">Workshop #1, Data Visualization in Rhino</b><br>
			Workshop #2, Ecotect Acoustics and Airflow<br>
			Class Discussion, Readings on Creative Evolutionary Systems<br>
			Workshop #3, Geco &amp; Ecotect Solar Insolation<br>
			Individual Meetings<br>
			Workshop #4, Physics Based Modeling<br>
			Workshop #5, Solidworks and FEA<br>
			Individual Meetings<br>
			Holiday<br>
			Individual Meetings<br>
			Group Presentation on Research<br>
			Individual Meetings<br>
		</div>

	</div>
	
	<!-- Next Class -->
	
	<div class="step"  data-x="11000" data-y="0" style="line-height:36px;font-size:24px;">

		<span style="font-size:48px;line-height:56px;">
		<b>Workshop #2, Ecotect</b>
		</span>
		<br>
		<b>For Next Week</b>		
		<li>Bring Charged Laptop</li>
		<li>Download and Install Autodesk Ecotect (free edu edition)</li>
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



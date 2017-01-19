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
    <title>A4707 Evolutionary Design Schedule</title>
    
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


	<!-- Schedule -->
	
	<div class="step" data-x="1000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0" style="line-height:36px;font-size:24px;">
		
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
			Dec 17 (th)<br>
			Dec 22 (tu)<br>
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
			Meetings<br>
			Discussion<br>
			Present<br>
			Lecture<br>
			Help<br>
			Final<br>
		</div>
		
		<div style="float:left;color:#eee;">
			Course Introduction<br>
			Crash Course: Evolutionary Principles<br>
			Analysis & Visualization in Rhino Grasshopper<br>
			Environment Simulation in Ladybug<br>
			Evolution Reading Discussion <br>
			Individual or Group Meetings<br>
			Morphogenesis in Grasshopper<br>
			Individual or Group Meetings<br>
			Evolutionary Solver in Rhino Galapagos<br>
			Individual or Group Meetings<br>
			Kangaroo Solver Workshop<br>
			Tech Paper Workshop and Short Presentation<br>
			Beyond Evolution, Human Computer Interaction<br>
			Open Office Hours<br>
			Paper Submission and Review<br>
		</div>
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



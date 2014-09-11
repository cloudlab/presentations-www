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
        Day/Time: T 6:00pm - 8:00pm<br>
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
	
	<div class="step" data-x="500" data-y="0" style="line-height:36px;font-size:24px;">
	
	
		<span style="font-size:48px;">Welcome!</span>
	
	</div>


	<!-- Goals for Today -->
	
		
	<div class="step"  data-x="1000" data-y="0" style="line-height:48px;font-size:36px;">
		<p>Goals for Today</p>
		<li><b>Why Algorithmic Design?</b></li>
		<li><b>Day #1 Workshop: Intro to Processing</b></li>
		<li>Schedule</li>
		<li>Class Wiki</li>
		<li>For Next Class</li>
	</div>	 
	
	

	
	
	
	<div class="step" data-x="2000" data-y="0" style="line-height:36px;font-size:24px;">
	 Why Algorithms? Why Processing? Why code?
	</div>
	

	<div class="step" data-x="3000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Why Algorithms?", 
		"On Demand Architecture, GSAPP Brain Hacking Studio", 
		"sW-L8D--ZF0"); ?>
	</div>
	
	
	
	
	<div class="step" data-x="4000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Why Algorithms?", 
		"Generative Cellular Simulation, Proxy Design Studio", 
		"hez89qT3LWI"); ?>
	</div>
	
	
	<div class="step" data-x="5000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Why Algorithms?", 
		"NYU Advanced Media Studio Animation, Proxy Design Studio", 
		"hNlBkaxg26Y"); ?>
	</div>
	
	
	<div class="step" data-x="6000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Why Algorithms?", 
		"Force Directed Graph, Proxy Design Studio", 
		"QlXRapQW4q0"); ?>
	</div>
	
	
	<div class="step" data-x="7000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Why Algorithms?", 
		"Sectioning a Force-Directed Graph in Processing, ComputationalGeometry Library", 
		"2yRFmHEYptA"); ?>
	</div>
	
	<div class="step" data-x="8000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Why Algorithms?", 
		"Kinect Digital Lathe, GSAPP Cloud Lab", 
		"kNDCIUM-iUk"); ?>
	</div>
	
	<div class="step" data-x="9000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Why Algorithms?", 
		"Eye Tracking Architecture in Processing, Anna Stork Brain Hacking Studio", 
		"G2Zvr32iJUU"); ?>
	</div>
		
	
	<div class="step" data-x="10000" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Why Algorithms?", 
		"Past Student Work, Search Algorithmic Design", 
		"Wk5Q_hBof64"); ?>
	</div>

	
	<!--Class Schedule -->
	
	<div class="step" data-x="12000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0" style="line-height:36px;font-size:24px;">
	
		<span style="font-size:40px;line-height:50px;" >
		Now Code!
		</span>
	
	</div>
	
	
	<!--Class Schedule -->
	
	<div class="step" data-x="13000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0" style="line-height:36px;font-size:24px;">
		
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
		</div>

		<div style="float:left;color:#ccc;">
			Course Introduction<br>
			<b style="color:#fff">Workshop #1, Intro to Processing</b><br>
			Workshop #2, Objects and Behaviors<br>
			Individual Meetings<br>
			Workshop #3, Hierarchies and Relationships<br>
			Individual Meetings<br>
			Workshop #4, Working with Data<br>
		</div>

	</div>	 
	
	
	<!-- Questions & Office Hours -->
	
	<div  class="step"  data-x="14000" data-y="0" style="line-height:36px;font-size:24px;">
	
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
	<div class="step"  data-x="15000" data-y="0" style="line-height:36px;font-size:24px;">
		
		<span style="font-size:48px;line-height:56px;">
		<b>Next Workshop: Objects and Behaviors</b>
		</span>
		<br>
		<b>For Next Week</b>		
		<li>Visit the Wiki at http://proxyarch.com/wiki</li>
		<li>Bring Charged Laptop</li>
		<li>Signed up for a Topic</li>
		<li>Go through Lab #1 on wiki Individually</li>
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



<?php 


function makeGenericSlide($title, $credit, $image){	
	makeGenericSlideWithHeight($title, $credit, $image, 400);
}

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


function makeGenericSlideWithHeight($title, $credit, $image, $height){
	echo '<span style="font-size:36px;color:#CCC;">'.$title.'</span>';
	echo '<br>';
    echo '<div class="translateDown" style="width:820px;height:'.$height.'px;background-image:url(\''.$image.'\');" ></div>';
	echo '<br>';
	echo '<p style="font-size:20px;margin-top:'. -60 . 'px;text-align:right;color:#999;">'.$credit.'</p>';
}

function makeThemeSlide($title, $subtitle, $image){
	if($image == "")
		$image = "images/Ishiguro1.jpg";
    echo '<br><Br><Br><span style="font-size:30px;color:#888;">'.$title.'</span><br>';
    echo '<p align="center" style="text-size:40px;"><b class="">'.$subtitle.'</b></p>';
    echo '<div class="translateDown" style="float:left;position:relative; top:-100px; left:275px; width:640px; height: 400px;background-image:url(\''.$image.'\');"></div>';
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
    <title>The GSAPP Cloud Lab</title>
    
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
	

	
	
	<div id="start" class="step slide" data-x="0" data-y="0" data-scale=".75" style="background-image:url('images/BciSkullCap_dark.png');">
        
        <br><br><br><br><br>
        <span style="font-size:60pt;line-height:68pt;">The Cloud Lab</span><br>
        <span style="font-size:24px;line-height:24px;">
        Graduate School of Architecture Planning &amp; Preservation <Br>    
        Columbia University
        </span>
        <br>
		<br>

        <div style="float:left; width:350px;">
			<b>Mark Collins</b>
			<div style="padding:20px;color:#DDD;padding-top:5px;">
				<span style="font-size:24px;line-height:24px;"><b>@ProxyMark</b><br>Columbia University GSAPPP
				<br>Cloud Lab
				</span>
			</div>
        </div>
        
        <div style="float:left;width:350px;">
        	<b>Toru Hasegawa</b>
        	<div style="padding:20px;color:#DDD;padding-top:5px;">
        		<span style="font-size:24px;line-height:24px;"><b>@ProxyToru</b><br>Columbia University GSAPPP
        		<br>Cloud Lab
				</span>
        	</div>
        </div>
        
    </div>




    <!-- Mission  -->
	<div class="step" data-x="0" data-y="700" style="line-height:28px;font-size:24px;">
		
    	<span style="font-size:30px;color:#BBB;margin-left:0px;">
    	    	The mission of the Cloud Lab is to understand the implications of our exploding device culture for how we design the physical environment.
		</span>
		<br>
		<Br>

    	<div class="scaleUp translateUp" style="height:600px;">
			<Br>    	
			<img src="images/CloudLab.png" width="100%" />
    	</div>
   		
    </div>    
   
   
   
    <!-- at the GSAPP  -->
	<div class="step" data-x="0" data-y="1500" style="line-height:28px;font-size:24px;">

		<?php makeTriSlideWithHeight("Graduate School of Architecture Planning & Preservation",
		"Leveraging the values &amp; culture of the design world to think forward about technology role in our lives",
		"images/avery.png", 
		"images/sleepystudio.jpg", 
		"images/Microsoft-Being-Human.png"); ?>
   		
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
    	<?php makeThemeSlide("Common Theme #3","Human Values, Post Human Reality",""); ?>
    	<div class="translateDown" style="float:left;border-style:solid;border-width:10px;border-color:#666;position:relative;top:-400px;left:-50px;width:320px;height:213px;background-image:url('images/hiroshi_ishiguro_ge_258984c.jpg');font-size:20px;color:#FFF;" ></div>
    </div>
    

    
    
    <!--
    
    Speaker Intro
    
    Cloud Lab Mission Statement
    
    Inside the GSAPP - What is a Lab?
    
    Cloud Lab Theme 1: 
    Cloud Lab Theme 2: Amplify
    Cloud Lab Theme 3: Question
    
    How do we work?
   
   	Programming Literacy
   	 	Code Dojo
    
    We work with students
    	Eye Tracking
    	
    We collaborate with others labs in the university and private sector
  		3D Scanning of Low Library - Paul Allen and CS Lab
   		BCI Design Process - LIINC
   
    We work with public groups and institutions
   	Van Alen and the Dumbo Neural Cartography Project 	
  	
  	Public Conversation around Technology
! 		Volume Interviews
  	 
  	 		
	Conclusion:
		Find extraodinary roles for design and the environnment to play in the culture of mobility. 


	Optional:
	
	Code Projects at the Lab
  		ComputationalGeometry
  		EEG NeuroSky P5 
		TinyCode
		Kinect Exporter
		Kinect Digital Lathe
		Experiment Creator
		    
    -->

 	
 
    <!-- Evangelize Code Dojo -->

    <div class="step" data-x="3000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	<!--<?php makeGenericSlideWithHeight("Evangelize Code Literacy in Design","Code Dojo, 2012", "images/Dojo.jpg", "510"); ?>-->
    	<?php makeMajorMinorSlideWithHeight("Evangelize Code Literacy in Design",
    	"<br>Code Dojo, 2012", 
    	"images/Dojo.jpg",
    	"images/processing.jpg",
    	"Processing.org", "510"); ?>    	
    </div>

    <div class="step" data-x="4000" data-y="0" data-z="1000" data-rotate="0" data-scale="1.0">
    	<?php makeMajorMinorSlideWithHeight("Evangelize Code Literacy in Design","Challenge Cards from Code Dojo, 2012", "images/DojoCards.png", "images/card021-0-8-7-10.png", "A typical Code Dojo Challenge Card","622"); ?>
    </div>   

 	
 	
 	
    <!-- Taking an Experimental Approach -->
    <div class="step" data-x="5000" data-y="0" data-rotate="0" data-scale="1.0">
  		<?php makeMajorMinorSlideWithHeightWide("Advance a Culture of Experimentation", "Eyetracking 3D Structures with Anna Stork, Brain Hacking Studio", "images/Eye3.jpg","images/Eye4.jpg", "We look at how people process scenes in different contexts.",462); ?>
	</div>
  
    <!-- EyeTracking Video  -->
	<div class="step" data-x="6000" data-y="0" data-z="1000" data-rotate="0" data-scale="1.0">
		<?php makeVideoSlide("Eye Tracking 3D Structures", "with Anna Stork, Brain Hacking Studio", "G2Zvr32iJUU"); ?>
    </div>    
 
  	
 
 
   <!-- Engage Experts - Low Library -->
 	<div class="step" data-x="7000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
        <?php makeMajorMinorSlideWithHeightWide("Engage Experts and Extend Resources","3D Scanning of Low Library with Peter Allen &amp; the Columbia University Robotics Group",
         "images/6505Search_IMG_3057_Low.jpg", "images/Search_LowLibrary_overview.jpg",
         "Point cloud rendering of the acquired model",
         "535"); ?>
    </div>

    <!-- Low Library Video -->
	<div class="step" data-x="8000" data-y="0" data-z="1000">
		<?php makeVideoSlide("3D Scanning of Low Library", "With Peter Allen &amp; the Columbia University Robotics Group", "aMygRT-ORFY"); ?>
    </div>




	<!-- Research Revolutionary Design Tech: Neuroscience Collaboration	  -->
     <div class="step" data-x="9000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	 <?php makeGenericSlideWithHeight("Research Revolutionary Design Tech","Neuromatters &amp; Columbia University Laboratory for Intelligent Imaging and Neural Computing", "images/644902068-7.png", "559"); ?>
    </div>
    
    <!-- BCI Based Design Video  -->
	<div class="step" data-x="10000" data-y="0" data-z="1000">
		<?php makeVideoSlide("BCI Based Design Process", "Collaboration between Cloud Lab and Neuromatters LLC", "Pl7EiCtfB-A"); ?>
    </div>


    

    <!-- Harnessing Public Participation: Van Alen -->
 	<div class="step" data-x="11000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
        <?php makeMajorMinorSlideWithHeight("Harnessing Public Participation",
        "<Br>How Does the Brain Respond to the City? with the Van Alen Institute, 2014", 
        "images/Elsewhere_Presentation_Cloudlab_2.jpg", 
        "images/neural_cartography_data.png",
        "Sample data collected from participants",
         "548"); ?>
    </div>
    
    
    <!-- Neural Cartography Video  -->
	<div class="step" data-x="12000" data-y="0" data-z="1000" data-rotate="0" data-scale="1.0">
		<?php makeVideoSlide("Neural Cartography", "With the Van Alen Institute", "GmrQRuO2RkQ"); ?>
    </div>   
    
    
    
    
    <!-- More or Next: Distribute Source Code, Assess Equipment, New Design Tools, Workshops, Interviews -->
	<div class="step slide" data-x="13000" data-y="0" data-z="0" data-rotate="-45" data-scale=".75" style="background-image:url('images/vlcsnap-2011-07-21-22h34m23s20.png');">
		<br>
		<Br>
		Next for the Cloud Lab		
		<li>Open Source Our Tools and Knowledge</li>
		<li>Continue to Access and Assess New Devices and Tech</li>
		<li>Expose Opportunities for Design in Tech and Tech in Design</li>
		<li>Collaborate and Participate in Ground Breaking Research</li>
		<li>Creating a Dialogue around Breakthrough Tech with Interviews, Conferences and Events</li>
		<li>Train, Evangelize and Interact in Workshops at the GSAPP and Beyond</li>
		
		
	</div>    
    




	<div id="" class="step slide" data-x="14000" data-y="0" data-rotate="0" data-scale=".75"  style="background-image:url('images/BciSkullCap_dark.png');">
        
        <br><br><br><br><br>
        <span style="font-size:60pt;line-height:68pt;">The Cloud Lab</span><br>
        <span style="font-size:24px;line-height:24px;">
        Graduate School of Architecture Planning &amp; Preservation <Br>    
        Columbia University
        </span>
        <br>
		<br>

        <div style="float:left; width:350px;">
			<b>Mark Collins</b>
			<div style="padding:20px;color:#DDD;padding-top:5px;">
				<span style="font-size:24px;line-height:24px;"><b>@ProxyMark</b><br>Columbia University GSAPPP
				<br>Cloud Lab
				</span>
			</div>
        </div>
        
        <div style="float:left;width:350px;">
        	<b>Toru Hasegawa</b>
        	<div style="padding:20px;color:#DDD;padding-top:5px;">
        		<span style="font-size:24px;line-height:24px;"><b>@ProxyToru</b><br>Columbia University GSAPPP
        		<br>Cloud Lab
				</span>
        	</div>
        </div>
        
    </div>

        
    
    <!-- Open SimSim -->
    <!--
    <div class="step" data-x="25000" data-y="0" data-z="2500" data-rotate="0" data-scale="1.0">
		<?php makeVideoSlide("OpenJapan", "with OpenSimSim", "a8c4X2Ls2-Q"); ?>
	</div>   
    -->
	
    <!--
	<div class="step" data-x="26000" data-y="0" data-z="500" data-rotate="0" data-scale="1.0">
    	<?php makeGenericSlideWithHeight("Whats Next?","Fulfillment Center by the Brain Hacking Studios", "images/about_us_revised.jpg", "622"); ?>
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



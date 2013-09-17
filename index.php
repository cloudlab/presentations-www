<?php 


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
    <title>Design Amplification</title>
    
    <meta name="description" content="Design Amplification" />
    <meta name="author" content="Mark Collins" />
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,400italic,700,700italic,200,300' rel='stylesheet' type='text/css'>

    <!--
        
        Impress.js doesn't depend on any external stylesheet. Script adds all styles it needs for
        presentation to work.
        
        This style below contains styles only for demo presentation. Browse it to see how impress.js
        classes are used to style presentation steps, or how to apply fallback styles, but I don't want
        you to use them directly in your presentation.
        
        Be creative, build your own. We don't really want all impress.js presentations to look the same,
        do we?
        
        When creating your own presentation get rid of this file. Start from scratch, it's fun!
        
    -->
    <link href="css/impress-demo.css" rel="stylesheet" />
        
</head>

<!--
    
    Body element is used by impress.js to set some useful class names, that will allow you to detect
    the support and state of the presentation in CSS or other scripts.
    
    First very useful class name is `impress-not-supported`. This class means, that browser doesn't
    support features required by impress.js, so you should apply some fallback styles in your CSS.
    It's not necessary to add it manually on this element. If the script detects that browser is not
    good enough it will add this class, but keeping it in HTML means that users without JavaScript
    will also get fallback styles.
    
    When impress.js script detects that browser supports all required features, this class name will
    be removed.
    
    The class name on body element also depends on currently active presentation step. More details about
    it can be found later, when `hint` element is being described.
    
-->
<body class="impress-not-supported">

<!--
    For example this fallback message is only visible when there is `impress-not-supported` class on body.
-->
<div class="fallback-message">
    <p>Your browser <b>doesn't support the features required</b> by impress.js, so you are presented with a simplified version of this presentation.</p>
    <p>For the best experience please use the latest <b>Chrome</b>, <b>Safari</b> or <b>Firefox</b> browser.</p>
</div>

<!--
    
    Now that's the core element used by impress.js.
    
    That's the wrapper for your presentation steps. In this element all the impress.js magic happens.
    It doesn't have to be a `<div>`. Only `id` is important here as that's how the script find it.
    
    You probably won't need it now, but there are some configuration options that can be set on this element.
    
    To change the duration of the transition between slides use `data-transition-duration="2000"` giving it
    a number of ms. It defaults to 1000 (1s).
    
    You can also control the perspective with `data-perspective="500"` giving it a number of pixels.
    It defaults to 1000. You can set it to 0 if you don't want any 3D effects.
    If you are willing to change this value make sure you understand how CSS perspective works:
    https://developer.mozilla.org/en/CSS/perspective
    
    But as I said, you won't need it for now, so don't worry - there are some simple but interesing things
    right around the corner of this tag ;)
    
-->
<div id="impress">

    <!--
        
        Here is where interesting thing start to happen.
        
        Each step of the presentation should be an element inside the `#impress` with a class name
        of `step`. These step elements are positioned, rotated and scaled by impress.js, and
        the 'camera' shows them on each step of the presentation.
        
        Positioning information is passed through data attributes.
        
        In the example below we only specify x and y position of the step element with `data-x="-1000"`
        and `data-y="-1500` attributes. This means that **the center** of the element (yes, the center)
        will be positioned in point x = -1000px and y = -1500px of the presentation 'canvas'.
        
        It will not be rotated or scaled.
        
    -->


	<!-- BEGIN PRESENTATION -->
	
	<!--
	Theme 1-3 - Extra image (Accelerating-  simulation slide?  Amplifying- BCI head  Externalizing- geminoid)
	
	Platforms (maya -> processing -> apps)
	Software Evolution (software projects mapped)
	Good image for neuroscience collab + paul
		
	Studio Software Video
	-->
	
	<div id="start" class="step slide" data-x="0" data-y="0" style="background-image:url('images/poster.png');">
        
        <br>&nbsp;<br><br><br><br>
        <q>Design Amplification</q>
        Human Computer Interaction in the creation of the environment<Br>        
        <br>

        <div style="float:left; width:350px;">
			<b>Mark Collins</b>
			<div style="padding:20px;color:#DDD;">
				<span style="font-size:24px;line-height:24px;"><b>@ProxyMark</b><br>Columbia University GSAPPP<br>Proxy Design Studio<br>Morpholio Project</span>
			</div>
        </div>
        
        <div style="float:left;width:350px;">
        	<b>Toru Hasegawa</b>
        	<div style="padding:20px;color:#DDD;">
        		<span style="font-size:24px;line-height:24px;"><b>@ProxyToru</b><br>Columbia University GSAPPP<br>Proxy Design Studio<br>Morpholio Project</span>
        	</div>
        </div>
        
    </div>

    <!--        
        The hash part of the url when this step is active will be `#/step-2`.
        You can also use `#step-2` in a link, to point directly to this particular step.
    -->
    
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
    
    <!-- Proxy Log -->
    <div class="step" data-x="2500" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	<?php makeGenericSlideWithHeight("An Example: Proxy Log","Proxy 2010", "images/Cover_revised.png", 590); ?>
    </div>
    
    <div class="step" data-x="3000" data-y="0" data-z="500" data-rotate="0" data-scale="1.0">
    	<?php makeGenericSlideWithHeight("An Example: Proxy Log","Proxy 2010", "images/LogMockup.png", 683); ?>
    </div>
    
    <div class="step" data-x="2500" data-y="0" data-z="1000" data-rotate="0" data-scale="1.0">
    	<?php makeGenericSlideWithHeight("An Example: Proxy Log","Proxy 2010", "images/LogSample.jpg", 607); ?>
    </div>
    
        
	<!-- Evolution - Software Timeline  -->
	 <div class="step" data-x="3000" data-y="0" data-rotate="0" data-scale="1.0" style="background-image:url('');">
    	<?php makeGenericSlideWithHeight("Software Evolution","From scripting to programming to developing", "images/Evolve.png", "562"); ?>
    </div>
    

	<!-- Automation CNC -->
 	<div class="step" data-x="4000" data-y="0" data-rotate="0" data-scale="1.0">
    	<span style="font-size:50px;">Automation & Optimization</span>

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
	
	
	
	<!-- HIV	  -->
     <div class="step" data-x="6000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	<?php makeGenericSlideWithHeight("Virus Visualization","Proxy 2007 with Sagmesiter Inc", "images/Search2.jpg", 506); ?>
    </div>
    	
	 <div class="step" data-x="6000" data-y="0" data-z="-1000" data-rotate="40" data-scale=".25">
    	<?php makeGenericSlideWithHeight("Virus Visualization","Proxy 2007 with Sagmesiter Inc", "images/HIV_chosen_06946.jpg", 625); ?>
    </div>
    
	 <div class="step" data-x="6000" data-y="0" data-z="2000" data-rotate="0" data-scale="3.0">
    	<div style="position:relative;top:-50px;left:-300px;width:1600px;height:1200px;background-image:url('images/HIVLarge.jpg');"></div>;
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
    
    
    <!-- Scalability	  -->
    <div class="step" data-x="12000" data-y="0" data-z="1500" data-rotate="0" data-scale="1.0">
    	<span style="font-size:50px;">Scalability</span>
    </div>
    
    <!-- Building Beat	  -->
    <div class="step" data-x="13000" data-y="0" data-rotate="0" data-scale="1.0">
		<?php makeVideoSlide("Crowd-sourcing: Building Beat", "Connecting through Device Culture", "AcvqEKZ9cxc"); ?>
    </div>
    
    
    <!-- Morpholio -->
    
    <div class="step" data-x="14000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	<?php makeGenericSlideWithHeight("Design and the Device: Morpholio", "with Jeff and Anna Kenoff", "images/Morpholio.jpg",462); ?>
	</div>

    <div class="step" data-x="15000" data-y="0" data-z="1000" ddata-rotate="0" data-scale="1.0">
    	<?php makeVimeoSlide("Design and the Device: Morpholio", "with Jeff and Anna Kenoff", "64464387"); ?>
    </div>
    
    <!-- Trace -->
      <div class="step" data-x="16000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	<?php makeGenericSlideWithHeight("Morpholio Trace", "with Jeff and Anna Kenoff", "images/Trace.jpg",531); ?>
	</div>

    
    <div class="step" data-x="17000" data-y="0"  data-z="1000" data-rotate="0" data-scale="1.0">
    	<?php makeVimeoSlide("Morpholio Trace", "with Jeff and Anna Kenoff", "50059894"); ?>
    </div>
    
    <!-- Whats next? -->
    <div class="step" data-x="18000" data-y="0" data-rotate="0" data-scale="1.0">
    	<span style="font-size:50px;">What's next?</span>
    </div>
    
    <!-- Morpholio -->
    <div class="step" data-x="19000" data-y="0" data-rotate="0" data-scale="1.0">
		Big upgrades and new apps from Morpholio...	
	</div>
    
    
    <!-- Code Dojo -->
    <div class="step" data-x="20000" data-y="0" data-rotate="0" data-scale="1.0">
    	<?php makeGenericSlideWithHeight("Coding Education & Literacy: Code Dojo","Challenge Cards from Code Dojo, 2012", "images/Dojo.jpg", "510"); ?>
    </div>
   
   <div class="step" data-x="21000" data-y="0" data-z="500" data-rotate="0" data-scale="1.0">
    	<?php makeGenericSlideWithHeight("Coding Education & Literacy: Code Dojo","Challenge Cards from Code Dojo, 2012", "images/DojoCards.png", "622"); ?>
    </div>
   
    <!-- Telling Stories through Models -->
    <div class="step" data-x="22000" data-y="0" data-rotate="0" data-scale="1.0">
        <?php makeGenericSlideWithHeight("Telling Stories through Models","GSAPP Advanced Studio VI Spring 2013, Hasegawa/Collins", "images/StudioDemo1.png", "615"); ?>
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



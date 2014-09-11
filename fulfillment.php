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
	
	
   
    <!-- About Us -->
     <div class="step" data-x="1000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	 <?php makeGenericSlideWithHeight("","", "images/about_us_revised.jpg", "615"); ?>
    </div>
    
    
    <!-- Syllabus	  -->
     <div class="step" data-x="2000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	 <?php makeGenericSlideWithHeight("", "", "images/ADV_IV_Hasegawa_Collins_Syllabus_Revised_highlighted-1.jpg", "1061"); ?>
    </div>
    
    
    <!-- Kinne	  -->
     <div class="step" data-x="3000" data-y="0" data-z="0" data-rotate="0" data-scale="1.0">
    	 <?php makeGenericSlideWithHeight("", "", "images/studio_kinne.jpg", "579"); ?>
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



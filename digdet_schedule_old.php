<?php  include 'functions.php';
$head = 0;
$headY = 0;
 ?>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>A4707 Digital Detailing Intro</title>
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
	
    
    <!--Class Schedule -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0" data-rotate="0" data-scale="1.0" style="line-height:36px;font-size:24px;">		
		<h2>Digital Detailing Schedule</h2><br>
		<div style="float:left;width:150px;color:#ccc;">
		 	Class 1<br>
			Class 2<br>
			Class 3<br>
			Class 4<br>
			Class 5<br>
			Class 6<br>
			Class 7<br>
			Class 8<br>
			<span style="color:#666;">n/a</span><br>
			Class 9<br>
			Class 10<br>
			Class 11<br>
			Class 12<br>
			Class 13<br>
		</div>
		
		<div style="float:left;width:140px;color:#ccc;">
			1/22<br>
			1/29<br>
			2/5<br>
			2/12<br>
			2/19<br>
			2/26<br>
			3/5<br>
			3/12<br>
			<span style="color:#666;">3/19</span><br>
			3/26<br>
			4/2<br>
			4/9<br>
			4/16<br>
			4/23<br>
		</div>
		
		<div style="float:left;color:#ccc;">
			Course Introduction, Q&A<br>
			Readings Intro, Workshop #1: Vrep “Hello World”<br>
			Workshop #2: Linking Objects in Vrep<br>
			Project Meetings<br>
			Reading Roundtable Discussion<br>
			Workshop #3: Vrep, Project Focus<br>
			Project Meetings<br>
			Robot Arm Build (Kinne Week)<br>
			<span style="color:#666;">Spring Break</span><br>
			Workshop #4: LUA Scripting<br>
			CompGeo Technical Paper Discussion<br>
			Project Meetings<br>
			Project Presentations<br>
			Paper Draft Meetings<br>
			
			<!-- Lecture: Geometry, GCode & Automation -->
			<!-- Workshop #2: Cutting, Welding & Spraying -->
		</div>
	</div>	 
	

	
	<!-- END PRESENTATION -->
	
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



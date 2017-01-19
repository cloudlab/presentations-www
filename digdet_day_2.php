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
		
	<div id="start" class="step slide" data-x="0" data-y="0" style="background-image:url('images/gramazio.png');">
        <h2><b>A4707 Digital Detailing</b></h2>
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
	

    <!--Class Schedule -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0" data-rotate="0" data-scale="1.0" style="line-height:36px;font-size:24px;">		
		<h2>Schedule</h2><br>
		<div style="float:left;width:200px;color:#ccc;">
			<b style="color:#fff">Class 1</b><br>
			Class 2<br>
			Class 3<br>
			Class 4<br>
			Class 5<br>
			Class 6 (midterm)<br>
			Class 7 (midterm)<br>
			Class 8 (kinne)<br>
			Class 9<br>
			Class 10<br>
			Class 11<br>
			Class 12<br>
			Class 13<br>
		</div>
		<div style="float:left;color:#ccc;">
			<b style="color:#fff">Course Introduction, Q&A</b><br>
			<span style="color:#FF9999;"><b>Workshop: Getting Started in Vrep, Physical simulation</span></b><br>
			<span style="color:#FF9999;">Workshop: Working with Effectors and Actuators</span><br>
			Project Meetings<br>
			Reading Roundtable Discussion<br>
			<span style="color:#FF9999;">Workshop: Path Planning and Movement</span><br>
			Project Meetings<br>
			Open Work Session or Build Session<br>
			<span style="color:#FF9999;">Workshop: Scripting in Vrep</span><br>
			Project Meetings<br>
			<span style="color:#FF9999;">Workshop: Vrep and Rhino/Grasshopper</span><br>
			Lecture: Reality Computing & Emerging Bldg Tech<br>
			Project Presentations<br>
		</div>
	</div>	 

		
	
	<!-- Today -->
	<div class="step"  data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<span style="font-size:48px;line-height:56px;">
		<b>Today's Workshop: Intro to Vrep</b><Br>
		</span>
		Download Vrep at http://www.coppeliarobotics.com/<br>
		We'll cover:<Br>
		<div style="margin-left:20px;">
		Creating and Customizing a Simulation<br>
		Working with Objects, Models & Hierarchies<br>
		Working with Windows and Visualization<br>		
		Exporting to Video<br>	
		</div>
			
	</div>

	
	<!-- Next Class -->
	<div class="step"  data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<span style="font-size:48px;line-height:56px;">
		<b>Next Class: Workshop, Effectors and Actuators</b>
		</span>
		<br><br>
		<b>For Next Week</b>		
		<li>Make Sure You Are <b>Registered</b></li>
		<li>Bring Charged Laptop</li>
		<br>
		<br>
		<div style="text-align:right;color:#DDD;font-size:24px;">
			<h2><b>A4707 Digital Detailing</b></h2>
			Arch Technology Sequence, Elective<Br>
    	    <div style="">
			<div style="padding:0px;color:#DDD;font-size:24px;">
				 mlc2115 @ProxyMark &nbsp;&nbsp;<b>Mark Collins</b><br>
				 th2114 @ProxyToru &nbsp;&nbsp;<b>Toru Hasegawa</b>
			</div>
        	</div>
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



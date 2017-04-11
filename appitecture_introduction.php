<?php  include 'functions.php';
$head = 0;
$headY = 0;
 ?>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>A4793 Appitecture</title>
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
		
	<div id="start" class="step slide" data-x="0" data-y="0" style="background-image:url('images/internet-of-things.png');">
        <h2><b>A4793 Appitecture</b></h2>
        Day/Time: Tu 7:00pm - 9:00pm<br>
		Location: 114 Avery Hall<Br>
		Visual Studies Session B<Br>
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


		<div style="float:left;width:120px;color:#fff;">
			03/07<Br>
			<span style="color:#aaa">03/14</span><br>
			03/21<br>
			03/28<br>
			04/04<br>
			04/11<br>
			04/18<br>
			05/02-04<br>
			05/05<br>

		</div>
		
		<div style="float:left;width:100px;color:#ccc;">
Class 1<br>
<br>
Class 2<br>
Class 3<br>
Class 4<br>
Class 5<br>
Class 6<br>
<br>
<br>

		</div>

		<div style="float:left;color:#fff;">
			Course Introduction, Device Provisioning<br>
			<span style="color:#aaa">Spring Break</span><br>
			Workshop: XCode, App Bootstrapping, Hello World<br>
			Workshop: Basic Objects and UI, View Hierarchy<br>
			Workshop: Maps<br>
			Workshop: Multimedia and Data<br>
			Workshop: Prototype Labs<br>
			Office Hours/Help TBD<br>
			Prototypes and Wireframes Due<br>
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



<?php  
include 'functions.php';
$head = 0;
$headY = 0;
?>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>Search Algorithmic Design Day #3</title>
    
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
    
    <!--Class Schedule -->
	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0" data-rotate="0" data-scale="1.0" style="line-height:36px;font-size:24px;">
		
		Search Algorithmic Design<Br>
		<h2>Schedule</h2>

		<div style="float:left;width:200px;color:#ccc;">
		 	VS Introduction
			Class 1<br>
			Class 2<br>
			Class 3<br>
			<b style="color:#fff">Class 4</b><br>
			Class 5<br>
			Class 6<br>
		</div>

		<div style="float:left;color:#ccc;">
			Course Introduction<br>
			Workshop #1, Intro to Processing<br>
			Class Cancelled<br>
			Workshop #2, Objects and Behaviors<br>
			<b style="color:#fff">Individual Meetings &amp; Workshop #3, Data Structures</b><br>
			In Class Coding Session<br>
			Workshop #4, Working with Data &amp; Code Dojo<br>
		</div>

	</div>	 

	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Last Time", 
		"Workshop #1: Arrays &amp; Loops", 
		"WHsYBz4iFlI"); ?>
	</div>

	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Last Time", 
		"Workshop #2: Objects and Vectors", 
		"AJF6o0e8k6A"); ?>
	</div>
	
	<!-- Goals for Today -->	

	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Today", 
		"Workshop #3: Data Structures, Voxels", 
		"WnfrXnpLUwY"); ?>
	</div>
	
	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Today", 
		"Workshop #3: Data Structures, Graphs &amp; Libraries", 
		"r7OTwTDtCXk"); ?>
	</div>
	

	<!--Class Schedule -->
	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0" data-rotate="0" data-scale="1.0" style="line-height:36px;font-size:24px;">
	
		<span style="font-size:40px;line-height:50px;" >
		Now Code!
		</span>
	
	</div>
	
	

	
	
	<!-- Next Class -->
	<div class="step"  data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		
		<span style="font-size:48px;line-height:56px;">
		<b>Next Class: In-Class Coding Session</b>
		</span>
		<br>
		<b>For Next Week</b>		
		<li>Shared In Class Coding Sessions & Individual Help</li>
		<li>Have Started Your Code</li>
		<li>Bring Iterate Illustrated Object Narrative</li>
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



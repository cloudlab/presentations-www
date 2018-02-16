<?php 
include 'functions.php';
$x = 0;
?>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>A4707 Models in Architectural Simulation</title>
    
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
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">

		<h2>Schedule</h2>
		<div style="float:left;width:200px;color:#ccc;">
			Class 1<br>
			Class 2<br>
			Class 3<br>
			Class 4<br>
			Class 5<br>
			Class 6 MT<br>
			Class 7 MT<br>
			Class 8 Kinne<br>
			Class 9<br>
			Class 10<br>
			Class 11<br>
			Class 12<br>
			Class 13<br>
			Paper<br>
		</div>

		<div style="float:left;color:#aaa;width:620px;">
	
			Course Introduction, Q&A<br>
			<span style="color:#fff;">Workshop: Kangaroo for GH</span><br>
			Presentation: Chemical &amp; Physics Based Models<Br>
			<span style="color:#fff;">Workshop: Millipede for GH</span><br>
			Presentation: Topological Optimization<br>
			Roundtable discussion<br>
			<span style="color:#fff;">Workshop: Physarealm for GH</span><br>
			Project Meeting (or Abstract due if Kinne)<br>
	Presentation: Agent Based Models &amp; Genetic Algorithms<br>
			<span style="color:#fff;">Workshop: Galapagos for GH</span><br>
			Project Meetings, Grasshopper Help<br>
			Project Meetings, Technical Presentation Draft<br>
			Technical Presentations, Class Close Out<br>
			Email Submission Deadline is May #
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



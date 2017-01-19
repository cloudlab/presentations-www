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
	
 	<!-- Affiliations  -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
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
	<div id="" class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-rotate="0" data-scale="1.0">        
        <?php makeThemeSlide("Common Theme #1","Accelerating Technological Growth","images/Kurzweil.jpg"); ?>
    </div>
    
    <!-- Main Theme #2  Amplify -->
	<div id="" class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-rotate="0" data-scale="1.0">
    	<?php makeThemeSlide("Common Theme #2","Amplifying Effects of Technology","images/Amplification.png"); ?>
    </div>

	<!-- Approach -->	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		<b style="color:#fff;">Common Approach</b>
		<li><span style="color:#fff;">Hands on.</span> Learn by doing and applying to proto design problems.</li>
		<li><span style="color:#fff;">Design is always foregrounded.</span> The primary question is always how does this benefit the design process or design outcomes.</li>
		<li><span style="color:#fff;">Computing is the 21st century literacy.</span> We need to understand the underlying mechanics of the software we use, both to push the structures of today but also to envision the structures of tomorrow.</li> 
		<Br>
		<?php addAccentImageWithCredit("Biometric Workshop", 'images/dd/eyetracking_820.png', 305); ?>
	</div>
	
	<!-- Syllanus Intro -->
	 <div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:48px;font-size:42px;">	
	 	Course Syllabus<Br><br>
	 	<?php addRecessedImage(
	 	"images/digdet/DigitalDetailingSyllabus-1.jpg", 
	 	"600",
	 	"400",
	 	"200"); ?>
	</div>
	
  	
  	<!-- Evo Des vs Dig Det -->
  	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"",
	 	"", 
	 	"images/digdet/EvoDesAndDigDet.png", 
	 	"718"); ?>
	</div>
	
	<!-- Evo Des vs Dig Det -->
  	
	<!--
  	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 <?php 	makeMajorMinorSlideWithHeightWide(
	 "Intelligence in Physicality", 
	 "<Br>Rodney Brooks", 
	 "images/digdet/65776-004-16019FEB.jpg", 
	 "images/digdet/530_1baxter1.jpg", 
	 "Robotics Genghis Prototype", 
	 400); ?>
	</div>
	-->
		
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:72px;font-size:62px;text-indent:100px;">	
	 	What is muscle in <b>architecture</b>?
	 	<br><p stlye="text-align:right;"><font size="+3">...and how is getting amplified?</font></p>
	</div>
	
   <!-- Coop Himmelblau  -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0">
		<?php makeVideoSlide("Construction Automation", "Coop Himmelb(l)au Museum of Contemporary Art & Planning Exhibition, Shenzhen", "PiJ8wt75SYo"); ?>
    </div>
          
   <!-- Drone Building  -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0">
		<?php makeVideoSlide("Construction Automation", "Flight Assembled Architecture", "JnkMyfQ5YfY"); ?>
    </div>
    
	<!-- Artaic Tile  -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0">
		<?php makeVimeoSlide("Construction Automation", "Artaic Innovative Mosaic (00:50)", "46766951"); ?>
    </div>
    
    <!-- Self Assembling Robot  -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0">
		<?php makeVideoSlide("Construction Automation", "Programmable self-assembly in a thousand-robot swarm (01:06)", "xK54Bu9HFRw"); ?>
    </div>
    
    <!-- Metal Printing -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Construction Automation",
	 	"Arup Engineers & Within Lab, 2014", 
	 	"images/evodes/Arup-3d-printed-steel_dezeen_468_1.jpg", 
	 	"559"); ?>
	</div>
	  	  
	<!-- Metal Printing -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
		"Construction Automation",
		"Within Lab Tibial Tray Medical Implant",
		"images/digdet/WithinLabPlate.png",
		560);?>
	</div>
	
  	<!-- 4D Printing -->
  	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Construction Automation",
	 	"4D Printing Self-Folding Strand into 3D Cube, MIT Self Assmebly Lab", 
	 	"images/digdet/Stratasys_MIT_Cubefolding_Combined.jpg", 
	 	"559"); ?>
	</div>

	<!-- 4D Printing  -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0">
		<?php makeVimeoSlide("Construction Automation", "4D Printing MIT Self-Folding Strand", "59185591"); ?>
    </div>

    <!-- Drone Printing  -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0">
		<?php makeVideoSlide("Construction Automation", "New Scientitst: Take off for world's first 3D printing, flying robot", "DyAvbq8o7xI"); ?>
    </div>
  	

	<!-- Syllanus Intro -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:48px;font-size:42px;">	
	 Course Syllabus<Br><br>
	 	<?php addRecessedImage(
	 	"images/digdet/DigitalDetailingSyllabus-1.jpg", 
	 	"600",
	 	"400",
	 	"200"); ?>
	</div> 

	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:40px;font-size:32px;">
		
		<b>Topics Covered</b><Br>
		&nbsp;&nbsp;&nbsp;&nbsp;Emerging Technologies for Construction<Br>		
		&nbsp;&nbsp;&nbsp;&nbsp;Physics-Based Simulation<Br>
		&nbsp;&nbsp;&nbsp;&nbsp;Inverse and Forward Kinematics<br>
		&nbsp;&nbsp;&nbsp;&nbsp;Path Planning and Computer Vision for Construction<br>
		<br>
		
		
		For each topic, we will try to:<br>
		&nbsp;&nbsp;&nbsp;&nbsp;<b>Demystify</b> - Explain the algorithm<br>
		&nbsp;&nbsp;&nbsp;&nbsp;<b>Empower</b> - Learn by doing<br> 
		&nbsp;&nbsp;&nbsp;&nbsp;<b>Envision</b> - Whats the next step for building?<Br>
		<BR>
		<span style="font-size:24px;line-height:32px;">
		no coding necessary</i>
		</span>
	</div>
	
	<!-- Project -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:40px;font-size:32px;">
		Semester Project<br><Br>
		<li>Work in small groups or individually</li>
		<li>Describe a novel construction system or component</li>
		<li>Demonstrate your systems range of outputs</li>
		<li>Quantify your system through simulation tools</li> 
		<li>Deliverables: Simulation Animations and Results</li>
		<li>Formatted as Video and Short Paper</li>
	</div>
	
  	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeRecessiveSlideWithHeight(
	 	"Robotic Simulation",
	 	"VRep Library of Typical Robots, Effectors, Actuators", 
	 	"images/digdet/Robots.png", 
	 	"550"); ?>
	</div>
	  
	<!-- V-Rep -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		V-REP is the Swiss army knife among robot simulators: you won't find a simulator with more functions, features, or more elaborate APIs:
		<li><b>Import from Rhino, Maya, Max</b></li>
		<li><b>Model browser with drag-and-drop functionality</b></li>
		<li><b>Tons of existing components</b></li>
		<li><b>Cross platform, Free and Unlimited for Edu</b></li>
		<li>script in 6 programming languages (C/C++, Python, Java, <b>Lua</b>, Matlab, and Urbi)</li>
		<li>more than 400 different API functions</li>
		<li>2 physics engines (ODE and Bullet)</li>
		<li>Full kinematics solver</li>
		<li>Mesh-mesh interference detection or minimum distance calculation</li>
		<li>Path planning</li>
		<li>Vision sensors with built-in image processing</li>
		<li>Built-in custom user interfaces</li>
		<li>Data recording and visualisation</li>
		<li>Paint and Routing Simulation</li>
		<li>Movie recorder</li>
	</div>
	 

	 <!-- Vrep Video #1  -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0">
		<?php makeVideoSlide("Robotics Simulation", "Robot Simulator: V-REP Demo Video January 2014", "gBYqOBdIcaY"); ?>
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
			Class 6<br>
			Class 7<br>
			Class 8<br>
			Class 9<br>
			Class 10<br>
			Class 11<br>
			Class 12<br>
			Class 13<br>
		</div>
		<div style="float:left;color:#ccc;">
			<b style="color:#fff">Course Introduction, Q&A</b><br>
			<span style="color:#FF9999;">Workshop: Getting Started in Vrep, Physical simulation</span><br>
			<span style="color:#FF9999;">Workshop: Working with Effectors and Actuators</span><br>
			Project Meetings<br>
			Reading Roundtable Discussion<br>
			<span style="color:#FF9999;">Workshop: Path Planning and Movement</span><br>
			Project Meetings<br>
			<span style="color:#FF9999;">Workshop: Scripting in Vrep</span><br>
			Project Meetings<br>
			<span style="color:#FF9999;">Workshop: Vrep and Rhino/Grasshopper</span><br>
			Open Work Session or Build Session<br>
			Lecture: Reality Computing & Emerging Bldg Tech<br>
			Project Presentations<br>
		</div>
	</div>	 
	
	
	<!-- Questions & Office Hours -->
	<div  class="step"  data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
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
	</div>
	
	
	<!-- Next Class -->
	<div class="step"  data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<span style="font-size:48px;line-height:56px;">
		<b>Next Class: “Hello World” Workshop</b>
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



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
		
	<div id="start" class="step slide" data-x="0" data-y="0" style="background-image:url('images/digdet/Dig_Det_cover.jpg');">
        <h2><b>A4707 Digital Detailing</b></h2>
        Day/Time: Th 6:00pm - 8:00pm<br>
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
	<div id="" class="step" data-x="1000" data-y="0" data-rotate="90" data-scale="1.0">        
        <?php makeThemeSlide("Common Theme #1","Accelerating Technological Growth","images/Kurzweil.jpg"); ?>
    </div>
    
    <!-- Main Theme #2  Amplify -->
	<div id="" class="step" data-x="1500" data-y="0" data-rotate="180" data-scale="1.0">
    	<?php makeThemeSlide("Common Theme #2","Amplifying Effects of Technology","images/Amplification.png"); ?>
    </div>
    
	<!-- Externilization Ishiguro	  -->
    <div id="" class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-rotate="90" data-scale="1.0">
    	<?php makeThemeSlide("Common Theme #3","Automate and Externalize",""); ?>
    	<div class="translateDown" style="float:left;border-style:solid;border-width:10px;border-color:#666;position:relative;top:-400px;left:-50px;width:320px;height:213px;background-image:url('images/hiroshi_ishiguro_ge_258984c.jpg');font-size:20px;color:#FFF;" ></div>
    </div>


	
	<!-- Approach -->	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		<b style="color:#fff;">Our Approach</b>
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
	  
	  
	<!-- Goals and Motivations -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;color:#eee;">
		<b style="color:#fff;">Course Goals &amp; Objectives</b>
		<li><b>Exploration of geometric rationalization, computational fabrication and automated construction</b></li>
		<li>Learn to use simulation tools and apply them to design problems</li>   <!-- false color? -->
		<li>Develop a critical approach to the use of simulation tools</li>		<!-- world modeler? -->
		<li>Examine the gap between digital models and real world physical processes</li>	<!-- air flow? -->
		<li>Understand fundamentals of computational geometry and analysis</li>		<!-- Fea polygon? -->
		<li><b>Evaluate new software, utilities and protocols for design analysis</b></li>			<!--  -->
	</div>
		
  	
  	<!-- Evo Des vs Dig Det -->
  	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"",
	 	"", 
	 	"images/digdet/EvoDesAndDigDet.png", 
	 	"718"); ?>
	</div>

		

	<!-- What is physicality in architecture? -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:72px;font-size:62px;text-indent:100px;">	
	 	What is muscle in <b>architecture</b>?
	</div>
	  
	
	<!-- What is physicality in architecture? -->
	<div class="step" data-x="<?php echo $head;?>" data-y="<?php echo $headY+=500;?>" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Trusset",
	 	"Digital Detailing, 2006", 
	 	"images/digdet/Trusset.jpg", 
	 	"559"); ?>
	</div>
	
	
	<div class="step" data-x="<?php echo $head;?>" data-y="<?php echo $headY+=500;?>" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Mechaneu",
	 	"Proxy Design Studio, 2012", 
	 	"images/digdet/mechaneu.jpg", 
	 	"580"); ?>
	</div>
	  
	<?php  $headY+=(-500*2); ?>
	
	<div class="step" data-x="<?php echo $head;?>" data-y="0" style="line-height:72px;font-size:62px;text-indent:100px;">	
	 	What is muscle in <b>architecture</b>?
	 	<br><p stlye="text-align:right;"><font size="+3">..and where is it going?</font></p>
	</div>
	
	 <div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:42px;font-size:32px;">	
	 	Our tools are like us, but amplified...
	 		 	
	 	<?php makeGenericSlideWithHeight(
	 	"",
	 	"Baxter Interactive Production Robot by Rethink Robotics", 
	 	"images/digdet/Baxter.png", 
	 	"467"); ?>
	</div>
	  

	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:48px;font-size:36px;color:#eee;">
		
		<b>Topics Covered</b><Br>
		
		Geometric Rationalization<br>
		Computational Fabrication &amp; Microstructures<Br>
		Construction &amp; Logistics Automation<br>
		Reality Computing<br>
		<br>
		
		
	</div>
		
	<!-- CNC Applications -->
	<!--
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;color:#aaa;">
		
		Topics Covered
		<br>
		<b>Cutting</b>
			<li>Plasma Torch</li>
			<li>Water Jet</li>
			<li>Laser</li>
			<li>Router</li>
		<b>Forming</b>
			<li>Break, Bending</li>
		<b>Finishing</b>
			<li>Painting</li>
			<li>Welding</li>
		<b>Vision</b>
			<li>3D Acquisition</li>
			<li>Visual Inspection (Parts, Fabric, etc)</li>
			<li>Label Scanning</li>
		<b>Logistics</b>
			<li>Selecting, Sorting</li>
			<li>Palletizing</li>
			<li>Conveying</li>
	</div>
	-->
	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0" style="line-height:36px;font-size:32px;">
		<b>Geometric Rationalization</b><br>
		Computational Geometry, Surfacing, Toolpathing, GCode
    </div>
    
	
	<!-- Spline Geometry -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php 
		$chairs = array(
				"images/dd/Representation_media/image18.gif",
				"images/dd/Representation_media/image19.gif",
				"images/dd/Representation_media/image20.gif",
				"images/dd/Representation_media/image21.gif" );
    	makeImageGrid("Geometric Rationalization", "Spline Geometry, Degrees of Curvature", $chairs, 2); ?>
	</div>

	<!-- NURBS Surface -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("Geometric Rationalization","UV Mapping, NURBS Geometry", "images/dd/Representation_media/image26.jpg", "559"); ?>
	</div>
	

	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:36px;">
		Geometric Rationalization
		<br><br><br>
		<?php addAccentImageWithCreditAndHeight("Developable Surface Algorithm, Evolute", 'images/wtw/geom_15.jpg', 600,400,100); ?>
	</div>

	
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:36px;">
		Geometric Rationalization
		<br><br><br>
		<?php addAccentImageWithCreditAndHeight("Mastercam ToolPath", 'images/wtw/geom_09b.jpg', 600,400,100); ?>
	</div>
	
	
	<!-- COMMENT - THIS BRINGS US UP TO DATE WITH THE LAST DECADE. ITS FUNDAMENTAL, BUT CATCH UP TO AN EARLY ADOPTER CULTURE -->
		
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0" style="line-height:36px;font-size:32px;">
		<b>Microstructures</b><br>
		3D Printing
    </div>
        
  	<!-- COMMENT - REMEMBER TECHNOLOGY DOES NOT STAND STILL. IT EXPONENTIATES. PEOPLE ARE ALREADY INNOVATING OUT OF THIS TYPICAL MODE -->

    <!-- Metal Printing -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Fabrication & Microstructures",
	 	"Arup Engineers & Within Lab, 2014", 
	 	"images/evodes/Arup-3d-printed-steel_dezeen_468_1.jpg", 
	 	"559"); ?>
	</div>
	  
	<!-- Microstructure  -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0">
		<?php makeVideoSlide("Fabrication & Microstructures", "Within Enhance Weight Optimisation demo (01:50)", "xxRykr8RTEs"); ?>
    </div>  
	  
	<!-- Metal Printing -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
		"Fabrication & Microstructures",
		"Within Lab Tibial Tray medical implant",
		"images/digdet/WithinLabPlate.png",
		560);?>
	</div>
	
  	<!-- 4D Printing -->
  	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Fabrication & Microstructures",
	 	"4D Printing Self-Folding Strand into 3D Cube, MIT Self Assmebly Lab", 
	 	"images/digdet/Stratasys_MIT_Cubefolding_Combined.jpg", 
	 	"559"); ?>
	</div>

	<!-- 4D Printing  -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0">
		<?php makeVimeoSlide("Fabrication & Microstructures", "4D Printing MIT Self-Folding Strand", "59185591"); ?>
    </div>
    
    <!-- COMMENT - LOGISTICS (AKA AMAZON) INFLUENCING EVERYTHING FROM CONSTRUCTION TO FARMING -->

    <div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0" style="line-height:36px;font-size:32px;">
		<b>Industrial &amp; Logistics Automation</b><br>
		Robotics, Scanning, Internet of Things
    </div>
    
	<!-- Artaic Tile  -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0">
		<?php makeVimeoSlide("Construction & Logistics Automation", "Artaic Innovative Mosaic (00:50)", "46766951"); ?>
    </div>

	 <!-- Parallel Robot  -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0">
		<?php makeVideoSlide("Construction & Logistics Automation", "Adept Quattro Parallel Robot", "0-Kpv-ZOcKY"); ?>
    </div>
	
	 <!-- Baxter Trainable Robot  -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0">
		<?php makeVideoSlide("Construction & Logistics Automation", "Baxter, Interactive Production Robot by Rethink Robotics", "DKR_pje7X2A"); ?>
    </div>
    
	<!-- Drone Building  -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0">
		<?php makeVideoSlide("Construction & Logistics Automation", "Flight Assembled Architecture", "JnkMyfQ5YfY"); ?>
    </div>
    
    <!-- Drone Printing  -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0">
		<?php makeVideoSlide("Construction & Logistics Automation", "New Scientitst: Take off for world's first 3D printing, flying robot", "DyAvbq8o7xI"); ?>
    </div>
  	
    <!-- Self Assembling Robot  -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0">
		<?php makeVideoSlide("Construction & Logistics Automation", "Programmable self-assembly in a thousand-robot swarm (01:06)", "xK54Bu9HFRw"); ?>
    </div>
    
    
    <!-- COMMENT: SO FAR WE'VE LOOKED AT WRITE, NOW LETS LOOK AT READ. EVENTUALLY THEY COLLAPSE -->

    <div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0" style="line-height:36px;font-size:32px;">
		<b>Reality Computing</b><br>
		3D Scanning, Vision, Model Acquisition
    </div>    

   	<!-- COMMENT: WE'VE HAVE INNOVATORS NEXT DOOR -->

	<!-- Allen Lab -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
		"Reality Computing",
		"View Planning and Automated Data Acquisition for Complex Sites, CU Robotics Group",
		"images/digdet/AllenRobotAlt.png",
		400);?>
	</div>
	
	<!-- Allen Lab -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
		"Reality Computing",
		"View Planning and Automated Data Acquisition for Complex Sites, CU Robotics Group",
		"images/digdet/AllenResults.png",
		400);?>
	</div>
	
 	<!-- COMMENT: AGAIN, EVERYTHING IS EXPONENTIATING -->

    <!-- Point Clouds Before and After -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0">
		<?php makeVideoSlide("Reality Computing", "Point Clouds - Before & After Autodesk ReCap", "qHVdgt84hdo"); ?>
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
		For each topic, we will try to:<br>
		<b>Demystify</b> Explain whats actually happening<br>
		<b>Debunk</b> Examine the limits as well as the promise<Br> 
		<b>Empower</b> Learn by doing<br> 
		<b>Envision</b> Whats the next step for building?<Br>
		<BR>
		<span style="font-size:24px;line-height:32px;">
		<i>No coding necessary.<br>
		Desire to learn new things a must.</i>
		</span>
	</div>
	
	<!-- Project -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		Semester Project
		<li>Work in small groups or individually</li>
		<li>Describe a novel construction system or component</li>
		<li>Explore and quantify your system through simulation tools</li> 
		<li>Deliverables: Simulation Animations and Results</li>
		<li>Formatted as Video and Short Paper</li>
	</div>

	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		Think about using... (and available through VRep)
		<li>Routers, Torches and Painting Arms</li>
		<li>Industrial Robotic Arms</li>
		<li>Palletizing Robots</li>
		<li>Parallel/Delta Robots (Pick and Place)</li>
		<li>Quad Copters</li>
		<li>Snake Robots</li>
		<li>Range Finding and Laser Scanning</li>
		<li>Kinect</li>
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
		<li><b>Import from Rhino, Maya, Max (COLLADA)</b></li>
		<li><b>Model browser with drag-and-drop functionality</b></li>
		<li><b>Tons of existing components</b></li>
		<li><b>Cross platform</b></li>
		<li><b>Free and Unlimited for Edu</b></li>
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
	
	 <!-- Vrep Video #2  -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0">
		<?php makeVideoSlide("Robotics Simulation", "V-REP Simulation of a Paint Bomb in a City", "GTsndZC29wg"); ?>
    </div>

	 <!-- Vrep Video #3  -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0">
		<?php makeVideoSlide("Robotics Simulation", "Velodyne Lidar in V-REP", "D8gptIuB-0Q"); ?>
    </div>	
	
    
    <!--Class Schedule -->
	<div class="step" data-x="<?php echo $head+=800;?>" data-y="0" data-z="0" data-rotate="0" data-scale="1.0" style="line-height:36px;font-size:24px;">		
		Digital Detailing<Br>
		<h2>Schedule</h2>
		<div style="float:left;width:240px;color:#ccc;">
		 	Building Tech Intro
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
			-<br>
			<b style="color:#fff">Course Introduction, Q&A</b><br>
			Project & Readings Intro, “Hello World” Workshop<br>
			Workshop #1: Simulation Setup & Components<br>
			Reading Roundtable Discussion<br>
			Project Meetings<br>
			Lecture: Geometry, GCode & Automation<br>
			Workshop #2: Cutting, Welding & Spraying<br>
			Project Meetings (Kinne Week)<br>
			Workshop #3: LUA Scripting<br>
			Project Meetings<br>
			Lecture: Reality Computing & Emerging Bldg Tech<br>
			Project Presentations<br>
			Project Meetings<br>
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
		<li>Exceptions can be granted in extenuating circumstances</li>
	</div>
	
	
	<!-- Next Class -->
	<div class="step"  data-x="<?php echo $head+=800;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<span style="font-size:48px;line-height:56px;">
		<b>Next Class: Project &amp; Readings Intro, “Hello World” Workshop</b>
		</span>
		<br>
		<b>For Next Week</b>		
		<li>Make Sure You Are <b>Registered</b></li>
		<li>Bring Charged Laptop</li>
		
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



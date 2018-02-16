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
		
	<div id="start" class="step slide" data-x="0" data-y="0" style="background-color:#000;background-image:url('images/archsim/qatar2.jpg');">
        <h1 style="font-size:48px;">A4707 ARCH<span style="color:#fff;"><b>SIM</b></span></h1>
        <br>
        <h2><b>Advanced Models in Architectural Simulation</b></h2>
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

<?php

function archSimDefinition($word, $definition){
	echo '<span style="line-height:16pt; font-size:16pt;"><b>'. $word . '</b> <i style="color:#aaa;">'.$definition.'</i><br><br></span>';
}

function archSimPaper($author, $title, $year){
	echo '<span style="line-height:16pt; font-size:16pt;"><b>'. $author . '</b>, '.$title.'<i> ['.$year.']</i><br><br></span>';
}
?>


<!-- The Models -->	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:30px;font-size:20px;">
		<h1 style="color:#fff;">OUR MODEL TAXONOMY</h1>
		<table style="color:#aaa;">
		<tr>
			<td style="padding:20px;">

				<h3><span style="color:#fff;">CHEMICAL MODELS</span></h3>
				<ul>
				<li>Reaction Diffusion</li>
				<li>Cellular Automata</li>
				<li>Diffusion Limited Aggregation</li>
				</span>
				</ul>
				<br>
				
				<h3><span style="color:#fff;">PHYSICS BASED SHAPE OPTIMIZATION</span></h3>
				<ul>
				<li>Hanging Chain Models</li>
				<li>Soap Film Optimization</li>
				</ul>
				</span>
								<br>
				<h3><span style="color:#fff;">TOPOLOGICAL OPTIMIZATION</span></h3>
				<span style="color:#fff;">
				<ul>
				<li>Solid Isotropic Material Penalization</li>
				<li>Bi-Directional evolutionary structural optimization</li>
				</span>
				</ul>
			</td>
			<td style="padding:20px;">

				<h3><span style="color:#fff;">AGENT BASED MODELS</span></h3>
				<ul>
				<li>Ant Colony Optimization</li>
				<li>Space Colonization Algorithm</li>
				<li>Schelling Model of Separation</li>
				</ul>
				<br>
				
				<h3><span style="color:#fff;">EVOLUTIONARY</span></h3>
				<ul>
				<li>Genetic Algorithm</li>
				<Br>
				<h3><span style="color:#fff;">HUMAN PERCEPTION &amp; COGNITION</span></h3>
				<ul>
				<li>Neural Networks</li>
				<li>Isovist Fields</li>
				</ul>
				</ul>
			</td>
		</tr></table>
	</div>	


	
<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeVideoSlide("","Topological Optimization (grasshopper + Millipede)","igRFFMSfwSQ"); ?>
</div>


<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
<h1>NEW PAPERS</h1><br>
		<?php archSimPaper("Maxwell", "On Reciprocal Figures, Frames, and Diagrams of Forces", "1870"); ?>
		<?php archSimPaper("Michell", "The limits of economy of material in frame-structures", "1904"); ?>
		<?php archSimPaper("Bendsøe and Kikuchi ", "Generating optimal topologies in structural design using a homogenization method", "1988"); ?>
		<?php archSimPaper("Xie", "A simple evolutionary procedure for structural optimization (BESO)", "1993"); ?>
</div>

<!-- ASSUMPTIONS -->

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:30px;font-size:20px;">
	<?php makeGenericSlideWithHeight("ASSUMPTIONS","Structural Mechanics", "images/archsim/1200px-Bending.png", "487"); ?>
</div>


<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:30px;font-size:20px;">
	<?php makeGenericSlideWithHeight("","<Br>Mesh Discretization and Finite Elements", "images/archsim/image2.jpg", "499"); ?>
</div>


<!-- BEFORE TOPOLOGICAL OPTIMIZATION -->


<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;color:#ccc;">
	<?php makeGenericSlideWithHeight("","Photoelastic Photography", "images/archsim/020801_1_1.jpeg", "449"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;color:#ccc;">
	<?php makeGenericSlideWithHeight("","Photoelastic Photography", "images/archsim/crane-hook.jpg", "499"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;color:#ccc;">
	<?php makeGenericSlideWithHeight("","Beauvais Cathedral. Choir model, photoelastic interference pattern produced by simulated wind loading (from Mark 1982)", "images/archsim/capalm-2.png", "620"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","Michells' Cantelever - The limits of economy of material in frame-structures, 1904", "images/archsim/michel_simple.png", "608"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","Michell Frames and the existence of optimal topology", "images/archsim/MaxwellReciprocalDiagramandDiscreteMichellFrames-9.png", "800"); ?>
</div>


<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
Topological Optimization: The Problem
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
<?php makeGenericSlideWithHeight("","Topological Optimization Of Structures, Krell Institute", "images/archsim/Topological_Optimization_Of_Structures_Krell_Presentation-4.png", "615"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","An Iterative Structural Optimization Process", "images/archsim/multiphysics_optimization.png", "481"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","", "images/archsim/2007_WCSMO7-5.png", "900"); ?>
</div>


<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","", "images/archsim/bike-gif.gif", "430"); ?>
</div>


<!-- SIMP -->
<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;color:#ccc;">
	Solid Isotropic Material Penalization
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;color:#ccc;">
	<h1 style="color:#fff;">Homogenization</h1><br>
	The central idea of the homogenization method is to convert the topology optimization problem to a large sizing optimization problem by defining topology as material distribution. Many of the well-known topology optimization methods adopted the material distribution approach. This includes Solid Isotropic Microstructures with Penalization (SIMP) and Bi-directional Evolutionary Structural Optimization (BESO) methods.
</div>

<div class="step" data-x="<?php echo $x+=0;?>" data-y="0" style="line-height:36px;font-size:24px;;color:#aaa;">
	<h1 style="color:#fff;">Homogenization</h1><br>
	The central idea of the <span style="color:#fff;">homogenization method</span> is to convert the topology optimization problem to a large sizing optimization problem by <span style="color:#fff;">defining topology as material distribution</span>. Many of the well-known topology optimization methods adopted the material distribution approach. This includes  <span style="color:#fff;">Solid Isotropic Microstructures with Penalization (SIMP) and Bi-directional Evolutionary Structural Optimization (BESO)</span> methods.
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","", "images/archsim/microstructures.png", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","From Suitability of SIMP and BESO Topology Optimization Algorithms for Additive Manufacture", "images/archsim/flow.png", "667"	); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","Output of SIMP with different parameters", "images/archsim/simp_output.png", "692"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;;color:#fff;">
	<h1>Instabilities</h1><br>
	Sigmund and Petersson (1998): most topology optimization methods (including SIMP and BESO) are prone to three common numerical instabilities: mesh-dependency, formation of checkerboard patterns, and the local minima problem. 
</div>


<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","Mesh Dependency", "images/archsim/Shape_optimization_by_the_homogenization_method-39.png", "600"); ?>
</div>
	
<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","Checkerboarding", "images/archsim/A0128-6.png", "844"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeVideoSlide("","Sawapan TopoStruct Software","OCc-s6mxQqc"); ?>
</div>

<!-- BESO -->

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	Bi-directional Evolutionary Optimization (BESO)
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeVideoSlide("","Bi-directional Evolutionary Optimization (BESO) of truss (non-linear material)","LkTam7bev14"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","BESO Algorithm", "images/archsim/Cazacu Razvan(Mechanics)-OVERVIEW OF STRUCTURAL TOPOLOGY OPTIMIZATION METHODS FOR PLANE AND SOLID STRUCTURES-4.png", "720"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","", "images/archsim/Cazacu Razvan(Mechanics)-OVERVIEW OF STRUCTURAL TOPOLOGY OPTIMIZATION METHODS FOR PLANE AND SOLID STRUCTURES-5.png", "415"); ?>
</div>


<!-- BESO Projects -->

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	BESO Projects
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","Luca Frattari for solidThinking Inspire ", "images/archsim/28ea0440327b205666cc0b3ee93bb6e4.jpg", "559"); ?>
</div>



	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/dd/soft_kill-1.png", "811"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVimeoSlide("","Bone Chair, Joris Laarman","146039736"); ?>
	</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
<?php makeGenericSlideWithHeight("","Zaha Hadid", "images/archsim/1b19fce9cc47d14914c630cbdd9bc470.jpg", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","Generate by Frustum", "images/archsim/image003_jyhta6.jpg", "493"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeVideoSlide("","Solid Thinking, Inspire: Peter Macapia","ua1fqpRH6F8"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeVideoSlide("","Solid Thinking, Inspire: morphogenesis","y06RWQmo2XI"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","3D printed EDAG Light Cocoon concept car, with Next Generation Spaceframe, EDAG Engineering, Laser Zentrum Nord, Concept Laser, and the BLM Group ", "images/archsim/does-3d-printed-nextgen-spaceframe-represent-future-automobile-design-5.jpg", "547"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","3D printed EDAG Light Cocoon concept car, with Next Generation Spaceframe, EDAG Engineering, Laser Zentrum Nord, Concept Laser, and the BLM Group ", "images/archsim/does-3d-printed-nextgen-spaceframe-represent-future-automobile-design-3.png", "690"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","SOM and University of Illinois", "images/archsim/11stromberg_towardgroupoptimization.png", "580"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","AADRL Domino House", "images/archsim/aadrl.png", "560"); ?>
</div>

<!-- NEXT DEVELOPMENTS -->

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<h1>Current Developments</h1>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","Autodesk Dreamcatcher", "images/archsim/drone-sequence.gif", "500"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeVideoSlide("","Autodesk Dreamcatcher ","CtYRfMzmWFU"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","A multi-resolution method for 3D multi-material topology optimization", "images/archsim/A multi-resolution method for 3D multi-material topology optimization-11.png", "720"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","BESO in Topogly Optimization of Microstructure", 
									 "images/archsim/BESO in Topogly Optimization of Microstructure-202.jpg", "496"); ?>
</div>
	
<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","Level Set Method", "images/archsim/DETC2016-59350-9.png", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeVideoSlide("","Level Set Method","bvf6Dm_HF4A"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeVideoSlide("","GPU-Based High Resolution Optimization","Ng6MV4x5t6k"); ?>
</div>


	
<!-- CLOSING -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/630px-Metaheuristics_classification.svg.png", "579"); ?>
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

</body>
</html>



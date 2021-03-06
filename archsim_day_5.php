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



	<!-- Whats in the reading and notes -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		FOR TODAY...<Br><br>
		<span style="color:#ccc;">
	<li>3 new models</li>
	<li>4 new papers</li>
	<li>Jump from <b>vector</b> structures back to <b>pixels</b></li>
	<li>Jump from <b>discrete</b> to <b>continuous</b></li>
	<li>Try our best to avoid math</li><br>
	</span>

	WHATS IN THE DROPBOX?<Br><Br>
<span	style="line-height:14pt;font-size:18pt;color:#ccc;">
		<li>Papers for all examples today </li><Br>
				<li>Class notes for today with links &amp; references</li><Br>
								<li>Links to presentations</li><Br>
								</span>
								<br>

	</div>
	
<?php

function archSimDefinition($word, $definition){
	echo '<span style="line-height:16pt; font-size:16pt;"><b>'. $word . '</b> <i style="color:#aaa;">'.$definition.'</i><br><br></span>';
}

function archSimPaper($author, $title, $year){
	echo '<span style="line-height:16pt; font-size:16pt;"><b>'. $author . '</b>, '.$title.'<i> ['.$year.']</i><br><br></span>';
}
?>


<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
<h1>NEW PAPERS</h1><br>
		<?php archSimPaper("Maxwell", "On Reciprocal Figures, Frames, and Diagrams of Forces", "1870"); ?>
		<?php archSimPaper("Michell", "The limits of economy of material in frame-structures", "1904"); ?>
		<?php archSimPaper("Bendsøe and Kikuchi ", "Generating optimal topologies in structural design using a homogenization method", "1988"); ?>
		<?php archSimPaper("Xie", "A simple evolutionary procedure for structural optimization (BESO)", "1993"); ?>
		<?php archSimPaper("Dorigo", "The Any System", "1996"); ?>
		<?php archSimPaper("Luh Lin", "Structural topology optimization using Ant colony algorithm", "2009"); ?>

</div>

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
				<span style="color:#fff;">
				<li>Ant Colony Optimization</li>
				</span>
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

<!-- ASSUMPTIONS -->

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:30px;font-size:20px;">

	<?php makeGenericSlideWithHeight("","Structural Mechanics", "images/archsim/1200px-Bending.png", "487"); ?>

</div>


<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:30px;font-size:20px;">

	<?php makeGenericSlideWithHeight("","<Br>Mesh Discretization and Finite Elements", "images/archsim/image2.jpg", "499"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Rhino Grasshopper, Kangaroo output", "images/archsim/7e0090ee96e1026ae5a303b2eeff60da.jpg", "330"); ?>
	</div>




	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Soap Film Model, Frei Otto", "images/archsim/f2817978de08430d05291d9970fbca93.jpg", "461"); ?>
	</div>		

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("","Frei Otto and the Institute for Lightweight Structures","-IW7o25NmeA"); ?> 
	</div>		



<!-- BEFORE TOPILOGICAL OPTIMIZATION -->


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
	<?php makeGenericSlideWithHeight("","Palazzo Littorio, Giuseppe Terragni and Pietro Lingeri, 1934, Rome, Italy (unbuilt). Photo-elastic study", "images/archsim/bell_02_body.jpg", "600"); ?>
</div>



<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","Michells' Cantelever - The limits of economy of material in frame-structures, 1904", "images/archsim/michel_simple.png", "608"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","Michell Frames and the existence of optimal topology", "images/archsim/MaxwellReciprocalDiagramandDiscreteMichellFrames-9.png", "800"); ?>
</div>



<!-- TOPILOGICAL OPTIMIZATION -->

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	Topological Optimization In Design and Process
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeVideoSlide("","SOLID THINKING INSPIRE INTRODUCTION","QnfkEzoD_ZA"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","", "images/archsim/inspire.png", "570"); ?>
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


<!-- ANTS -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/630px-Metaheuristics_classification.svg.png", "579"); ?>
	</div>
	

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		ANT COLONY OPTIMIZATION
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("","Ant Pheremone Video","UZ2HTTeM3aQ"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/The_Ant_System-2.png", "560"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","From Swarm Intelligence", "images/archsim/Swarm Intelligence-43.png", "530"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/Swarm Intelligence-48.png", "750"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;;color:#ccc;">
		<h1>Ant Colony Optimization of Structures</h1><br>
		A modified ACO algorithm that derives from a specific definition of pheromone and cooperation mechanism between ants is applied for solving topology optimization problem of structure. Mesh topology of finite element model for structure was treated as possible paths for ant’s movement. A tour on mesh topology map for seeking food finished by ant is transformed into a structure and the finite element method was applied to analyze the structure for calculating pheromone deposited on the path. The amount of accumulated pheromone deposited on every element by different ants was used to find optimum structural design. 
	</div>
	
	<div class="step" data-x="<?php echo $x+=0;?>" data-y="0" style="line-height:36px;font-size:24px;;color:#aaa;">
		<h1>Ant Colony Optimization of Structures</h1><br>
		A modified ACO algorithm that derives from a specific definition of <span style="color:#fff">pheromone and cooperation mechanism between ants</span> is applied for solving topology optimization problem of structure. <span style="color:#fff">Mesh topology of finite element model for structure was treated as possible paths for ant’s movement</span>. <span style="color:#fff">A tour on mesh</span> topology map for seeking food finished by ant is <span style="color:#fff">transformed into a structure</span> and the <span style="color:#fff">finite element method was applied to analyze the structure</span> for calculating pheromone deposited</span> on the path. The amount of accumulated pheromone deposited on every element by different ants was used to find optimum structural design. 
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/Structural Design through Ant Conoly Optmization-3.png", "714"); ?>
	</div>


	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/ij_23-alife99-9.png", "815"); ?>
	</div>
	

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","From Swarm Intelligence", "images/archsim/Swarm Intelligence-52.png", "540"); ?>
	</div>
	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/Ant_Colony_2.jpg", "319"); ?>
	</div>



<!-- ANT PROJECTS -->


	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Qatar National Convention Centre by Arata Isozaki and Mitsuro Sazaki", "images/archsim/dezeen_Qatar-National-Convention-Centre-by-Arata-Isozaki_1sq.jpg", "468"); ?>
	</div>
	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Qatar National Convention Centre by Arata Isozaki and Mitsuro Sazaki", "images/archsim/sasaki.png", "600"); ?>
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
	
	
<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeVideoSlide("","Topological Optimization (grasshopper + Millipede)","igRFFMSfwSQ"); ?>
</div>

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
		</div>

		<div style="float:left;color:#ccc;width:620px;">
	
			Course Introduction, Q&A<br>
			<span style="color:#fff;">Workshop &amp; Demo: Hello World &amp; Reaction Diffusion</span><br>
			Presentation: Chemical &amp; Physics Based Models<Br>
			<span style="color:#fff;">Workshop &amp; Demo: Chain Models</span><br>
			Snow Day<br>
			Presentation: Foraging Models &amp; Topological Optimization<br>
			<span style="color:#fff;">Workshop: Karamba &amp; Millipede</span><br>
			First Project Meeting (or Abstract due if Kinne)<br>
			Presentation: Genetic &amp; Neural Networks<br>
						Project Meetings<br>
			<span style="color:#fff;">Workshop: Galapagos Grashopper and Isovist</span><br>
			Reading Roundtable Discussion<br>
			Project Meetings<br>
			Technical Presentation<br>
		</div>	
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;	">
  
		<span style="font-size:48pt;">		For Next Week	</span><Br>
		<br>
		<li>Workshop: Grashopper, Millipede, Karamba</li>
		<li>Bring a laptop if you are able (even if no Rhino)</li>
		<li>Toru will contact you re: plugin downloads and workshop grouping</li>
		<li>Look out for Dropbox update and stay on top of new readings!</li>
		<Br>
		<Br>
	   <h1 style="font-size:48px;line-height:50px;">A4707 ARCH<span style="color:#fff;"><b>SIM</b></span></h1>
	Advanced Models in Architectural Simulation<Br>
		Day/Time: Th 7:00pm - 9:00pm<br>
		Location: 115 Avery Hall<Br>
		Mark (mlc2115) &amp; Toru (th2114)
		<Br>
		<Br>
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



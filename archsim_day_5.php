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
				<li>Morphological evolutionary structural optimization</li>
				<li>Bi-Directional evolutionary structural optimization</li>
				<li>Solid Isotropic Material Penalization</li>
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
	Beam Equation
</div>


<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:30px;font-size:20px;">
	Discretization
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:30px;font-size:20px;">
	Tie back to soap films
</div>		

<!-- BEFORE TOPILOGICAL OPTIMIZATION -->

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;color:#ccc;">
	<h1 style="color:#fff;">Photoelastic Analog Computation</h1><br>
	<?php makeGenericSlideWithHeight("","Beauvais Cathedral. Choir model, photoelastic interference pattern produced by simulated wind loading (from Mark 1982)", "images/archsim/10.png", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;color:#ccc;">
	<h1 style="color:#fff;">Photoelastic Analog Computation</h1><br>
	<?php makeGenericSlideWithHeight("","", "images/archsim/crane-hook.jpg", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","Palazzo Littorio, Giuseppe Terragni and Pietro Lingeri, 1934, Rome, Italy (unbuilt). Photo-elastic study", "images/archsim/bell_02_body.jpg", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;color:#ccc;">
	<h1 style="color:#fff;">Michell Frames and the existence of optimal topology</h1>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;color:#ccc;">
	<h1 style="color:#fff;">Photoelastic Analog Computation</h1><br>
	<?php makeGenericSlideWithHeight("","", "images/archsim/020801_1_1.jpeg", "600"); ?>
</div>


<!-- TOPILOGICAL OPTIMIZATION -->

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	SOLID THINKING INSPIRE INTRODUCTION
	QnfkEzoD_ZA
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","", "images/archsim/inspire.png", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeVideoSlide("","Topological Optimization (grasshopper + Millipede)","igRFFMSfwSQ"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","", "images/archsim/multiphysics_optimization.png", "401"); ?>
</div>



<!-- TO -->

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","", "images/archsim/MaxwellReciprocalDiagramandDiscreteMichellFrames-9.png", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","", "images/archsim/Cazacu Razvan(Mechanics)-OVERVIEW OF STRUCTURAL TOPOLOGY OPTIMIZATION METHODS FOR PLANE AND SOLID STRUCTURES-2.png", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","", "images/archsim/2007_WCSMO7-5.png", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","", "images/archsim/2007_WCSMO7-4.png", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","", "images/archsim/bike-gif.gif", "600"); ?>
</div>


<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","", "images/archsim/inspire.png", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
Optimality criteria methods are indirect optimization approaches that arrive at optimal solution by satisfying a set of conditions related to the performance of the structure. 

In  contrast  to  the  classical  mathematical  optimization  methods,  which  make  use  of  the differential  equations  for  solution,  the  structural optimization  methods  often  use  simplified  algebraic  equations  which  are  solved  in  an  iterative  numerical  procedure.  In  a  simple maximization  problem,  the  structural  topology  optimization  techniques  often  involve  the following general steps: <br><br>
1.Selection of the initial design variables (material type, thickness of plate...)<br>
2. Evaluation of the objective function for the current setting of design variables <br>
3. Comparison between the current properties with the prescribed values <Br>
4. A  procedure  to  update  the  design  variables,  so  that the  objective  function  is improved and repetition of steps 2 to 4 until no further improvement of the result is achievable <Br>

Bi-directional Evolutionary Structural Optimization (BESO) for Topology Optimization of Material’s Microstructure, Arash Radman 2013
</div>


<!-- SIMP -->

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;color:#ccc;">
	<h1 style="color:#fff;">Homogenization</h1><br>
	The central idea of the homogenization method is to convert the topology optimization problem to a large sizing optimization problem by defining topology as material distribution. Many of the well-known topology optimization methods adopted the material distribution approach. This includes Solid Isotropic Microstructures with Penalization (SIMP) and Bi-directional Evolutionary Structural Optimization (BESO) methods.
</div>

<div class="step" data-x="<?php echo $x+=0;?>" data-y="0" style="line-height:36px;font-size:24px;;color:#aaa;">
	<h1 style="color:#fff;">Homogenization</h1><br>
	The central idea of the <span style="color:#fff;">homogenization method</span> is to convert the topology optimization problem to a large sizing optimization problem by <span style="color:#fff;">defining topology as material distribution</span>. Many of the well-known topology optimization methods adopted the material distribution approach. This includes  <span style="color:#fff;">Solid Isotropic Microstructures with Penalization (SIMP) and Bi-directional Evolutionary Structural Optimization (BESO)</span> methods.
</div>


<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;;color:#fff;">
	<h1>Instabilities</h1><br>
	According to Sigmund and Petersson (1998), most topology optimization methods (including SIMP and BESO) are prone to three common numerical instabilities: mesh-dependency, formation of checkerboard patterns, and the local minima problem. 
</div>


<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","", "images/archsim/003104j.15.jpeg", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","OVERVIEW OF STRUCTURAL TOPOLOGY OPTIMIZATION METHODS FOR PLANE AND SOLID STRUCTURES", "images/archsim/Cazacu Razvan(Mechanics)-OVERVIEW OF STRUCTURAL TOPOLOGY OPTIMIZATION METHODS FOR PLANE AND SOLID STRUCTURES-3.png", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","", "images/archsim/A0128-6.png", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","", "images/archsim/Shape_optimization_by_the_homogenization_method-39.png", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","", "images/archsim/microstructures.png", "600"); ?>
</div>

<!-- BESO -->

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","", "images/archsim/chaise.gif", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	Bi-directional Evolutionary Optimization (BESO) of truss (non-linear material)<br>
	https://www.youtube.com/watch?v=LkTam7bev14<br>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","", "images/archsim/Cazacu Razvan(Mechanics)-OVERVIEW OF STRUCTURAL TOPOLOGY OPTIMIZATION METHODS FOR PLANE AND SOLID STRUCTURES-4.png", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","", "images/archsim/Cazacu Razvan(Mechanics)-OVERVIEW OF STRUCTURAL TOPOLOGY OPTIMIZATION METHODS FOR PLANE AND SOLID STRUCTURES-5.png", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","", "images/archsim/image003_jyhta6.jpg", "600"); ?>
</div>

	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Luca Frattari for solidThinking Inspire ", "images/archsim/28ea0440327b205666cc0b3ee93bb6e4.jpg", "559"); ?>
	</div>

	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("","Sawapan TopoStruct Software","OCc-s6mxQqc"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","BESO in Topogly Optimization of Microstructure", 
										 "images/archsim/BESO in Topogly Optimization of Microstructure-202.jpg", "496"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/dd/soft_kill-1.png", "811"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVimeoSlide("","Bone Chair, Joris Laarman","146039736"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight("", "Within Lab Tibial Tray medical implant","images/digdet/WithinLabPlate.png",560);?>
	</div>
	
	
	
<!-- BESO Projects -->
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","3D printed tension joint, Arup Engineers and Within Labs", "images/archsim/Arup-3d-printed-steel_dezeen_468_1.jpg", "559"); ?>
	</div>
	
	
<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
<?php makeGenericSlideWithHeight("","Zaha Hadid", "images/archsim/1b19fce9cc47d14914c630cbdd9bc470.jpg", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","Generate by Frustum", "images/archsim/AAEAAQAAAAAAAAeOAAAAJDgxY2Q1YzcwLTE5MGUtNDYwOS1hYmRmLWFlNDU4YzE4NjY1NQ.png", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","Generate by Frustum", "images/archsim/image003_jyhta6.jpg", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	Solid Thinking, Inspire: Peter macapia<br>
	https://www.youtube.com/watch?v=ua1fqpRH6F8<br>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	Solid Thinking, Inspire: morphogenesis (stadium)<br>
	https://www.youtube.com/watch?v=y06RWQmo2XI<br>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","D printed EDAG Light Cocoon concept car, with Next Generation Spaceframe, EDAG Engineering, Laser Zentrum Nord, Concept Laser, and the BLM Group ", "images/archsim/does-3d-printed-nextgen-spaceframe-represent-future-automobile-design-3.jpg", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","D printed EDAG Light Cocoon concept car, with Next Generation Spaceframe, EDAG Engineering, Laser Zentrum Nord, Concept Laser, and the BLM Group ", "images/archsim/does-3d-printed-nextgen-spaceframe-represent-future-automobile-design-5.jpg", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","SOM and University of Illinois", "images/archsim/11stromberg_towardgroupoptimization.png", "600"); ?>
</div>



<!-- ANTS -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/ij_23-alife99-9.png", "600"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;;color:#fff;">
		<h1>Ant Colony Optimization of Structures</h1><br>
		A modified ACO algorithm that derives from specific definition of pheromone and cooperation mechanism between ants was applied for solving topology optimization problem of structure. Mesh topology of finite element model for structure was treated as possible paths for ant’s movement. A tour on mesh topology map for seeking food finished by ant is transformed into a structure and the finite element method was applied to analyze the structure for calculating pheromone deposited on the path. The amount of accumulated pheromone deposited on every element by different ants was used to find optimum structural design. From the results studied in this paper, the purposed ACO algorithm provides as alternate optimization method that has high potential in finding the best design for topology optimization of structure successfully and efficiently.
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Stigmergy is a mechanism of indirect coordination, through the environment, between agents or actions. . The principle is that the trace left in the environment by an action stimulates the performance of a next action, by the same or a different agent. In that way, subsequent actions tend to reinforce and build on each other, leading to the spontaneous emergence of coherent, apparently systematic activity.", "images/archsim/Ant_Colony_2.jpg", "319"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("","Ant Pheremone Video","UZ2HTTeM3aQ"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/Structural Design through Ant Conoly Optmization-3.png", "600"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/The_Ant_System-2.png", "600"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/Swarm Intelligence-42.png", "600"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/Swarm Intelligence-43.png", "600"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/Swarm Intelligence-48.png", "600"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/Swarm Intelligence-52.png", "600"); ?>
	</div>
<!-- ANT PROJECTS -->


	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Qatar National Convention Centre by Arata Isozaki and Mitsuro Sazaki", "images/archsim/dezeen_Qatar-National-Convention-Centre-by-Arata-Isozaki_1sq.jpg", "468"); ?>
	</div>

	


<!-- NEXT DEVELOPMENTS -->


<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<h1>Current Developments</h1>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","Autodesk Dreamcatcher", "images/archsim/drone-sequence.gif", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
Autodesk Dreamcatcher 
https://www.youtube.com/watch?v=CtYRfMzmWFU
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","A multi-resolution method for 3D multi-material topology optimization", "images/archsim/A multi-resolution method for 3D multi-material topology optimization-11.png", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	<?php makeGenericSlideWithHeight("","Level Set Method", "images/archsim/DETC2016-59350-9.png", "600"); ?>
</div>

<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
	Level Set Method<br>
	https://www.youtube.com/watch?v=bvf6Dm_HF4A<br>
</div>


<!-- CLOSING -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/630px-Metaheuristics_classification.svg.png", "600"); ?>
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
		<li>Workshop: Grashopper and Millipeda</li>
		<li>Bring (or reserve form AV) a computer (even if no Rhino)</li>
		<li>Stay on top of new readings!</li>
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



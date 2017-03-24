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
		<li>2 new models</li>
		<li>Several new papers</li>
	</span><Br>

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
		<?php archSimPaper("Karl Sims","Evolving 3D Morphology and Behavior by Competition", "1994"); ?>
		<?php archSimPaper("John Holland", "Genetic Algorithms", "2014"); ?>
		<?php archSimPaper("M L Bendikt", "Isovist &amp; Isovist Fields", "1979"); ?>
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
				<ul>
				<li>Solid Isotropic Material Penalization</li>
				<li>Bi-Directional evolutionary structural optimization</li>
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
				
				<h3><span style="color:#fff;">HUMAN PERCEPTION &amp; COGNITION</span></h3>
				<ul>
				<span style="color:#fff;">
				<li>Isovist Fields</li>
				</span>
				</ul>
				
				<Br>
				
				<h3><span style="color:#fff;">EVOLUTIONARY</span></h3>
				<ul>
				<span style="color:#fff;">
				<li>Genetic Algorithm</li>
				</span>
				</ul>
			</td>
		</tr></table>
	</div>	


	<!-- META HEAURISTICS, SEARCH, FITNESS LANDSCAPE -->



	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/630px-Metaheuristics_classification.svg.png", "579"); ?>
	</div>



	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:36px;">
	<b>What <i>is</i> Evolution?</b>
	</div>


	<!- INTRO TO EVOLUTION -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0"  style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Genes and Blueprints",
	 	"Darwin's Finches and First Evolutionary Tree Sketch, On the Origin of Species 1859", 
	 	"images/evodes/Darwins_finches_by_Gould.png", 
	 	"450"); ?>
	</div>
	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Genes and Blueprints",
	 	"Watson and Crick model of DNA, 1953", 
	 	"images/evodes/Watson-Crick-DNA-model.jpg", 
	 	"550"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0"  style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Genes and Blueprints",
	 	"Endless Forms Most Beautiful, Sean Carroll", 
	 	"images/evodes/Carroll Endless Forms Most Beautiful-39.png", 
	 	"650"); ?>
	</div>
	
	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0"  style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Genes and Blueprints",
	 	"from http://www.yourgenome.org/facts/what-is-a-chromosome", 
	 	"images/archsim/chromosome_dna_yourgenome.png", 
	 	"700"); ?>
</div>
	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0"  style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Genes and Blueprints",
	 	"Endless Forms Most Beautiful, Sean Carroll", 
	 	"images/evodes/Carroll Endless Forms Most Beautiful-40.png", 
	 	"485"); ?>
	</div>	
	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0"  style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Genes and Blueprints", 
		"DNA Transcription: Inner Life of a Cell BioVisions & Xvivo, 2006", 
		"5MfSYnItYvg"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0"  style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Genes and Blueprints", 
		"Protein Synthesis: Inner Life of a Cell BioVisions & Xvivo, 2006", 
		"TfYf_rPWUdY"); ?>
	</div>

	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Selection and Extinction",
	 	"Geological Time Spiral", 
	 	"images/evodes/Geological_time_spiral.png", 
	 	"700"); ?>
	</div>	
		
		
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Selection and Extinction",
	 	"Extinction Branches", 
	 	"images/evodes/Evo_large.png", 
	 	"350"); ?>
	</div>	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
	 	"Selection and Extinction",
	 	"Extinction Branches", 
	 	"images/evodes/Evo_large_blowup.png", 
	 	"620"); ?>
	</div>	
	
	
	<!-- ABOUT FITNESS LANDSCAPE -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		Abstracting nature's algorithm
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","John Holland, Adaptation in Natural and Artificial Systems 1975", "images/archsim/holland_1.png", "320"); ?>
	</div>
	

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Flowchart of Genetic Algorithm", "images/archsim/ga-7.jpg", "800"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Flowchart of Phenotype Selection", "images/archsim/ksf01.gif", "500"); ?>
	</div>


    <div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
    	<?php 
    	$images = array(
'images/archsim/process_01.png',
'images/archsim/process_02.png',
'images/archsim/process_03.png',
'images/archsim/process_07.png');
    	makeImageGrid("", "", $images, 2); 
    	?>
    </div>
    
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/rutten-1.jpg", "600"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/fitnesslandscapetopologies.png", "600"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
    	<?php 
    	$images = array(
'images/archsim/minbboxlandscape_bot.jpg',
'images/archsim/minbboxlandscape_top.jpg',
'images/archsim/MinBBoxAnimation.gif',
'images/archsim/MinBBox.png');
makeImageGrid("", "A SIMPLE SCENARIO", $images, 2); 
    	?>
    </div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		Mutation, Coupling &amp; Coalescence
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
    	<?php 
    	$images = array(
'images/archsim/mutation_01.png',
'images/archsim/mutation_03.png',
'images/archsim/mutation_02.png',
'images/archsim/mutation_00.png');
    	makeImageGrid("", "MUTATION", $images, 2); 
    	?>
    </div>
    
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
    	<?php 
    	$images = array(
'images/archsim/subpopulation_00.png',
'images/archsim/genomegraph_02.png',
'images/archsim/genomegraph_03.png',
'images/archsim/genomegraph_04.png');
    	makeImageGrid("", "COUPLING", $images, 2); 
    	?>
    </div>
    
        
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Crossover, Blend and Preferenced-Blend, from David Rutton Galapagos", "images/archsim/coalescence_algorithms.png", "200"); ?>
    </div>
    
    
	<!-- THE GENETIC ALGORITHM -->
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		Creative Evolutionary Systems
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/ga-3.jpg", "460"); ?>
	</div>
	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/ga-4.jpg", "540"); ?>
	</div>


	<!-- PROJECT: DAWKINS BIOMORPHS -->


	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
    	<?php 
		 	$images = array(
'images/archsim/The_Blind_Watchmaker-1.png',
'images/archsim/The_Blind_Watchmaker-66.png');
    	makeImageGrid("", "", $images, 2); 
    	?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/dawkins_2.jpg", "900"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/dawkins_3.jpg", "500"); ?>
	</div>
	

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Richard Dawkins Biomorphs, The Blind Watchmaker, 1986", "images/archsim/evodes-biomorph.png", "540"); ?>
	</div>
		
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Richard Dawkins Biomorphs", "images/archsim/dawkins-set.jpg", "590"); ?>
	</div>


	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
				<?php makeVideoSlide(
		"", 
		"Richard Dawkins Biomorphs", 
		"0EjZw7A3ii8"); ?>

	</div>
	


	<!-- PROJECT: MUTATOR -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Mutator, William Latham and Stephen Todd 1989-92", "images/archsim/Mutator1Software1987Q2No2.jpeg", "540"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Mutator, William Latham and Stephen Todd 1989-92", "images/archsim/w_Page_026.jpg", "600"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
					<?php makeVideoSlide(
		"", 
		"Clip from 1989, by William Latham and Stephen Todd, Evolutionary Art and Computer 1992s",
		"Wm_4ju5t3M4"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Mutator, William Latham and Stephen Todd 1989-92", "images/archsim/SciAmericanPress1993Q4No1.jpg", "700"); ?>
	</div>	
	

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Mutator, William Latham and Stephen Todd 1989-92", "images/archsim/w_Page_018.jpg", "600"); ?>
	</div>
	

	<!-- PROJECT: BLOOM -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Jon McCormack, Bloom 2006", "images/archsim/bloom-2.jpg", "900"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Jon McCormack, Bloom 2006", "images/archsim/bloom-3.jpg", "450"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Jon McCormack, Bloom 2006", "images/archsim/bloom.jpg", "900"); ?>
	</div>
	
	
	<!-- Asthetic selection -->
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Human-Based Selection", "images/archsim/screen.jpg", "564"); ?>
	</div>
		
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:36px;">
	<b>Fitness: Locomotion</b>
	</div>

	<!-- PROJECT: EVOLVING LOCOMOTION -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Karl Sims, Evolving Virtual Creatures", "images/evodes/sim-3.png", "530"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
			<?php makeGenericSlideWithHeight("","Karl Sims", "images/evodes/sim-2.png", "590"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"",		"Locomotion Studies - MIT - Karl Sims (1987)", 
		"aUdCS1lLiYs"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"",		"Karl Sims - Evolved Virtual Creatures, Evolution Simulation, 1994", 
		"JBgG_VSP7f8"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Evolving Locomotion", 
		"Theo Jansen: My creations, a new form of life (TED) 03:10" , 
		"b694exl_oZo"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:36px;">	
	 	What other fitness criteria are out there?
	</div>

    <!-- PROJECT: antenna DESIGN -->
   
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight("", "Design of an antenna by Genetic Algorithm, Gregory S. Hornby for NASA, 2005", "images/evodes/GeneticallyGrownAntennas_NASA-web.jpg", "520"); ?>
	</div>
	
    <!-- PROJECT: OPTICS -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Conceptual Evolutionary Design by a Genetic Algorithm, Peter Bentley 1996", "images/archsim/lens-1.jpg", "632"); ?>
	</div>
	
		<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Conceptual Evolutionary Design by a Genetic Algorithm, Peter Bentley 1996", "images/archsim/prisims.jpg", "632"); ?>
	</div>

	<!-- PROJECT: GA PLANE SONIC BOOM -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/ga-13.jpg", "700"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/ga-9.jpg", "760"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","", "images/archsim/ga-10.jpg", "380"); ?>
	</div>
	
	<!-- PROJECT: BOOM -->
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","The Design of a Satellite Boom with Enhanced Vibration Performance Using Genetic Algorithms, 1996", "images/archsim/boom.jpg", "690"); ?>
	</div>
	
    <!-- PROJECT: STRUCTURAL OPTIMIZATION -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Genetic Algorithms as an Approach to Configuration and Topology Design, 94 MIT CAD lab", "images/archsim/topop-2.jpg", "560"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Genetic Algorithms as an Approach to Configuration and Topology Design, 94 MIT CAD lab", "images/archsim/topop-3.jpg", "560"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Genetic Algorithms as an Approach to Configuration and Topology Design, 94 MIT CAD lab", "images/archsim/topop-1.jpg", "560"); ?>
	</div>

	
	<!-- PROJECT: EZCT CHAIR -->
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","EZCT", "images/archsim/b8c818dbb285092e0a0a8febc44207f9.jpg", "440"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVimeoSlide(
		"",
		"Evolution for some of the chairs of the Computational Chair Design project", 
		"3226203"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
		"",	 	"EZCT Architecture and Marc Schoenauer", 
	 	"images/evodes/20090907174005.jpg", 
	 	"372"); ?>
	</div>	
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">	
	 	<?php makeGenericSlideWithHeight(
		"",	 	"EZCT Architecture and Marc Schoenauer", 
	 	"images/evodes/20090907172938.jpg", 
	 	"560"); ?>
	</div>	

	
	<!-- PROJECT - TOPOLOGICAL GRID -->
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("","000 Studio (Shohei Matsukawa) Topological Grid genetic algorithm for space planning","PpKV071KXO0"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","000 Studio (Shohei Matsukawa) Topological Grid genetic algorithm for space planning", "images/archsim/topologicalgrid3.jpg", "820"); ?>
	</div>
		
	
	<!-- GALAPAGOS -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0"  style="line-height:36px;font-size:24px;">
		...and next week - you!
	</div>
	
	

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0"  style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide("","Galapagos by David Rutton and McNeel","TGVwz4c6ieY"); ?>
	</div>
	
	<!-- ? Transition to Problem? -->
	 
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:48px;font-size:48px;">
	Where's our Cambrian explosion?
	</div>
	
	<!-- ? Transition to Problem? -->
	 
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
<b>Problems</b><Br><br>
Difficulty of Expressing Fitness<br>
Difficulty of Expressing Space/Geometry Relationships As Genes<br>

Genetic Algorithms as an Approach to Configuration and Topology Design, 94 MIT

	</div>
	
	
   <!-- SPACE SYNTAX -->

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:28px;font-size:20px;">
		<span  style="line-height:48px;font-size:36px;">Space Syntax</span>
		<br><br>
		The general idea is that spaces can be broken down into components, analyzed as networks of choices, then represented as maps and graphs that describe the relative connectivity and integration of those spaces. It rests on three basic conceptions of space:
		<br><br>
		<ul>
		<li>
			an <b>isovist</b> (popularised by Michael Benedikt at University of Texas), or viewshed or visibility polygon, the field of view from any particular point<br><Br>
		</li>
		<li>
			<b>axial space</b> (idea popularized by Bill Hillier at UCL), a straight sight-line and possible path<br><Br>
		</li>
		<li>
			<b>convex space</b> (popularized by John Peponis and his collaborators at Georgia Tech), an occupiable void where, if imagined as a wireframe diagram, no line between two of its points goes outside its perimeter: all points within the polygon are visible to all other points within the polygon.
		</li>
		</ul>
	</div>


   <!-- ISOVIST -->
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Isovist Fields - a new model for spatial representation and computation", "images/archsim/Benedikt-Isovist-1979-9.jpg", "590"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Isovist Fields - a new model for spatial representation and computation", "images/archsim/Benedikt-Isovist-1979-11.png", "590"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Isovist Fields - a new model for spatial representation and computation", "images/archsim/isovist-3.jpg", "580"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Isovist Fields - a new model for spatial representation and computation", "images/archsim/isovist-4.jpg", "440"); ?>
	</div>
	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","Isovist Fields - a new model for spatial representation and computation", "images/archsim/isovist-barcelona.jpg", "380"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeGenericSlideWithHeight("","from Designcoding", "images/archsim/2012_05_26-isovist.gif", "320"); ?>
	</div>

	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;">
		<?php makeVimeoSlide("","Isovist Urban Analysis, ETH","74328341"); ?>
	</div>

	<!-- CLOSING -->

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

		<div style="float:left;color:#ccc;width:620px;">
	
			Course Introduction, Q&A<br>
			<span style="color:#fff;">Workshop &amp; Demo: Hello World &amp; Reaction Diffusion</span><br>
			Presentation: Chemical &amp; Physics Based Models<Br>
			<span style="color:#fff;">Workshop &amp; Demo: Chain Models</span><br>
			Snow Day<br>
			Presentation: Topological Optimization<br>
			<span style="color:#fff;">Workshop: Karamba &amp; Millipede</span><br>
			First Project Meeting (or Abstract due if Kinne)<br>
	Presentation: Agent Based Models &amp; Genetic Algorithms<br>
			<span style="color:#fff;">Workshop: Galapagos Grashopper and Isovist</span><br>
			<span style="color:#fff;">Project Meetings: Grasshopper (Final Abstracts Due)</span><br>
			Project Meetings, Technical Presentation Draft<br>
			Technical Presentations, Close Out and Final Thoughts<br>
			Email Submission Deadline is May 5
		</div>	
	</div>
		
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0" style="line-height:36px;font-size:24px;	">
  
		<span style="font-size:48pt;">		For Next Week	</span><Br>
		<br>
		<li>Galapagos and Isovists in Grasshopper</li>
		<li>You should have a great start already to your grasshopper</li>
		<li>You should have an draft abstract sent to us for approval</li>
		<li>Everyone must have an approved topic and Grasshopper model by class after next</li>
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

	
	<div class="step" data-x="<?php echo $x+=1000;?>" data-y="0"  style="line-height:36px;font-size:24px;">
		<?php makeVideoSlide(
		"Genes and Blueprints", 
		"Protein Complexes: Inner Life of a Cell BioVisions & Xvivo, 2014", 
		"uHeTQLNFTgU"); ?>
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



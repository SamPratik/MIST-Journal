<?php session_start(); ?>

<?php
	if(isset($_SESSION["authorLoginEmail"])) {
		header("location: authorLoggedin.php");	
	}
?>

<?php
	if(isset($_SESSION["editorLoginEmail"])) {
		header("location: editorLoggedin.php");	
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editorial Board</title>
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="css/editorialBoard.css">
<link rel="stylesheet" href="css/reviewerRegistrationForm.css">
<link rel="stylesheet" href="css/authorRegistrationForm.css">
<link rel="stylesheet" href="css/sectionEditorRegistrationForm.css">
<link rel="stylesheet" href="css/editorRegistrationForm.css">
<link rel="stylesheet" href="css/journalManagerRegistrationForm.css">
<link rel="stylesheet" href="css/layoutEditorRegistrationForm.css">
<link rel="stylesheet" href="css/copytEditorRegistrationForm.css">
<link rel="stylesheet" href="css/proofreaderRegistrationForm.css">
<link rel="stylesheet" type="text/css" href="css/scrollBar.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<style>

	button:not(.not) {
		margin-top:30px;	
	}
	
	button h1 {
		
		display:block;
		margin:auto;
		position:relative;
		text-align:center;	
	}
	
	button {
		height:100px;
		border-radius:15px;	
		position:relative;
	}
	
	button i {
		position:absolute;	
		top:0px;
		right:0px;
		color:white;
		transition:color .3s linear;
	}
	
	button:hover i {
		color:#4CAF50;	
	}
	
	 
</style>
</head>

<body>

	<?php include_once("navigationBar.php"); ?>
    
    <div class="content">
        <div class="w3-accordion">
        
        
          <!---------------Journal Manager---------------->
          <button onclick="myFunction('#Demo1')" class="w3-btn-block w3-green w3-left-align not w3-hover-white w3-hover-text-green">
            <h1 style="width:390px;">Journal Manager<i class="fa fa-caret-down w3-jumbo"></i></h1>
          </button>
          <div id="Demo1" class="w3-accordion-content">
            <ul class="w3-ul">
              <li class="w3-container">
              	<div style="float:left; width:200px; height:200px;">
                	<img class="w3-circle w3-card-8" src="images/abdul hamid.jpg" height="200" width="200">
                </div>
                <div style="float:left; padding-left:30px; padding-top:30px;">
                    <span class="w3-xlarge"><strong>Jason Stajich</strong></span><br/>
                    <span>Plant Pathology and Microbiology, University of California-Riverside</span><br/>
                   	<span>Riverside, California, USA</span><br/>
                    <span><strong>Expertise: </strong>Evolutionary genomics of fungi and bioinformatics methods</span>
                </div>
                <div style="clear:both;"></div>
              </li>
            </ul>
          </div><!---------------Journal Manager---------------->
          
          
          
          <!---------------Editors---------------->
          <button onclick="myFunction('#Demo2')" class="w3-btn-block w3-green w3-left-align w3-hover-white w3-hover-text-green">
            <h1 style="width:220px;">Editors<i class="fa fa-caret-down w3-jumbo"></i></h1>
          </button>
          <div id="Demo2" class="w3-accordion-content">
            <ul class="w3-ul">
              <li class="w3-padding-16 w3-row">
               	<div style="float:left; width:20%; height:200px; padding-left:5px;">
                	<img class="w3-circle w3-card-8" src="images(editorial borad)/editor/3" height="200" width="200">
                </div>             
                 <div style="float:left; padding-left:60px; padding-top:30px; padding-right:30px; width:80%;">
                    <span class="w3-xlarge"><strong>Vipul Bansal</strong></span><br/>
                    <span>Director, Ian Potter NanoBioSensing Facility, Leader, NanoBiotechnology Research Laboratory (NBRL),
                     School of Applied Sciences, RMIT University</span><br/>
                   	<span>Melbourne, Victoria, Australia</span><br/>
                    <span><strong>Expertise: </strong>Nanobiotechnology and materials chemistry for biosensing, drug-delivery,
                     theranostic, imaging and catalysis</span>
                </div>   
                <div style="clear:both;"></div>             
              </li>
              <li class="w3-padding-16">
               	<div style="float:left; width:20%; height:200px; padding-left:5px;">
                	<img class="w3-circle w3-card-8" src="images(editorial borad)/editor/1" height="200" width="200">
                </div>             
                 <div style="float:left; padding-left:60px; padding-top:30px; padding-right:30px; width:80%;">
                    <span class="w3-xlarge"><strong>Jean-Claude Baron</strong></span><br/>
                    <span>INSERM U894, Centre de Psychiatrie et Neurosciences, Hôpital Sainte-Anne and Université Paris 5</span><br/>
                   	<span>Paris, France</span><br/>
                    <span><strong>Expertise: </strong>The pathophysiology of stroke and dementia using mainly imaging and
                     behavioral measures in both patients and rodent models</span>
                </div>   
                <div style="clear:both;"></div>               
              </li>
              <li class="w3-padding-16">
               	<div style="float:left; width:20%; height:200px; padding-left:5px;">
                	<img class="w3-circle w3-card-8" src="images(editorial borad)/editor/2" height="200" width="200">
                </div>             
                 <div style="float:left; padding-left:60px; padding-top:30px; padding-right:30px; width:80%;">
                    <span class="w3-xlarge"><strong>Bernhard Baune</strong></span><br/>
                    <span>Professor of Psychiatry, Chair of Discipline of Psychiatry, School of Medicine, University of Adelaide
                    </span><br/>
                   	<span>Adelaide, Australia</span><br/>
                    <span><strong>Expertise: </strong>Psychiatric neuroscience, mood disorders, cognitive 
                     function,neuroimmunology</span>
                </div>   
                <div style="clear:both;"></div>             
              </li>
            </ul>
          </div><!---------------Editors---------------->
          
          
          
          <!---------------Section Editors---------------->
          <button onclick="myFunction('#Demo3')" class="w3-btn-block w3-green w3-left-align w3-hover-white w3-hover-text-green">
            <h1 style="width:360px;">Section Editors<i class="fa fa-caret-down w3-jumbo"></i></h1>
          </button>
          <div id="Demo3" class="w3-accordion-content">
            <ul class="w3-ul">
              <li class="w3-padding-16 w3-row">
               	<div style="float:left; width:20%; height:200px; padding-left:5px;">
                	<img class="w3-circle w3-card-8" src="images(editorial borad)/section editor/1" height="200" width="200">
                </div>             
                 <div style="float:left; padding-left:60px; padding-top:30px; padding-right:30px; width:80%;">
                    <span class="w3-xlarge"><strong>Adam Ratner</strong></span><br/>
                    <span>Associate Professor, Pediatrics, Columbia University</span><br/>
                   	<span>New York, New York, USA</span><br/>
                    <span><strong>Expertise: </strong>Infectious diseases, pediatrics, congenital and perinatal infections, pore-forming toxins</span>
                </div>   
                <div style="clear:both;"></div>             
              </li>
              <li class="w3-padding-16">
               	<div style="float:left; width:20%; height:200px; padding-left:5px;">
                	<img class="w3-circle w3-card-8" src="images(editorial borad)/section editor/2" height="200" width="200">
                </div>             
                 <div style="float:left; padding-left:60px; padding-top:30px; padding-right:30px; width:80%;">
                    <span class="w3-xlarge"><strong>Madhukar Pai</strong></span><br/>
                    <span>Professor of Epidemiology & Director of Global Health Programs, McGill University</span><br/>
                   	<span>Montreal, Quebec, Canada</span><br/>
                    <span><strong>Expertise: </strong>Improving the diagnosis and management of tuberculosis in high-burden countries</span>
                </div>   
                <div style="clear:both;"></div>               
              </li>
              <li class="w3-padding-16">
               	<div style="float:left; width:20%; height:200px; padding-left:5px;">
                	<img class="w3-circle w3-card-8" src="images(editorial borad)/section editor/3" height="200" width="200">
                </div>             
                 <div style="float:left; padding-left:60px; padding-top:30px; padding-right:30px; width:80%;">
                    <span class="w3-xlarge"><strong>Wayne A. Phillips</strong></span><br/>
                    <span>Professor, Division of Cancer Research, Peter MacCallum Cancer Centre
                    </span><br/>
                   	<span>Melbourne, Australia</span><br/>
                    <span><strong>Expertise: </strong>Cancer biology, PI3K pathway, Barrett's oesophagus, oesophageal cancer, preclinical models</span>
                </div>   
                <div style="clear:both;"></div>             
              </li>
              <li class="w3-padding-16">
               	<div style="float:left; width:20%; height:200px; padding-left:5px;">
                	<img class="w3-circle w3-card-8" src="images(editorial borad)/section editor/4" height="200" width="200">
                </div>             
                 <div style="float:left; padding-left:60px; padding-top:30px; padding-right:30px; width:80%;">
                    <span class="w3-xlarge"><strong>Douglas Nixon</strong></span><br/>
                    <span>Chairman of the Department of Microbiology, Immunology & Tropical Medicine,The George Washington University School of Medicine and Health Sciences
                    </span><br/>
                   	<span>Washington, DC, USA</span><br/>
                    <span><strong>Expertise: </strong>HIV-1 infection, T cell immunity, common variable immunodeficiency disorders</span>
                </div>   
                <div style="clear:both;"></div>             
              </li>             
            </ul>
          </div> <!---------------Section Editors---------------->   
          
          
          
          <!---------------Reviewers---------------->
          <button onclick="myFunction('#Demo4')" class="w3-btn-block w3-green w3-left-align w3-hover-white w3-hover-text-green">
            <h1 style="width:290px;">Reviewers<i class="fa fa-caret-down w3-jumbo"></i></h1>
          </button>
          <div id="Demo4" class="w3-accordion-content">
            <ul class="w3-ul">
              <li class="w3-padding-16">Jill</li>
              <li class="w3-padding-16">Eve</li>
              <li class="w3-padding-16">Adam</li>
            </ul>
          </div><!---------------Reviewers---------------->   
          
          
          
          <!---------------Copyeditors---------------->
          <button onclick="myFunction('#Demo5')" class="w3-btn-block w3-green w3-left-align w3-hover-white w3-hover-text-green">
            <h1 style="width:300px;">Copyeditors<i class="fa fa-caret-down w3-jumbo"></i></h1>
          </button>
          <div id="Demo5" class="w3-accordion-content">
            <ul class="w3-ul">
              <li class="w3-padding-16 w3-row">
               	<div style="float:left; width:20%; height:200px; padding-left:5px;">
                	<img class="w3-circle w3-card-8" src="images(editorial borad)/section editor/1" height="200" width="200">
                </div>             
                 <div style="float:left; padding-left:60px; padding-top:30px; padding-right:30px; width:80%;">
                    <span class="w3-xlarge"><strong>Adam Ratner</strong></span><br/>
                    <span>Associate Professor, Pediatrics, Columbia University</span><br/>
                   	<span>New York, New York, USA</span><br/>
                    <span><strong>Expertise: </strong>Infectious diseases, pediatrics, congenital and perinatal infections, pore-forming toxins</span>
                </div>   
                <div style="clear:both;"></div>             
              </li>
              <li class="w3-padding-16">
               	<div style="float:left; width:20%; height:200px; padding-left:5px;">
                	<img class="w3-circle w3-card-8" src="images(editorial borad)/section editor/2" height="200" width="200">
                </div>             
                 <div style="float:left; padding-left:60px; padding-top:30px; padding-right:30px; width:80%;">
                    <span class="w3-xlarge"><strong>Madhukar Pai</strong></span><br/>
                    <span>Professor of Epidemiology & Director of Global Health Programs, McGill University</span><br/>
                   	<span>Montreal, Quebec, Canada</span><br/>
                    <span><strong>Expertise: </strong>Improving the diagnosis and management of tuberculosis in high-burden countries</span>
                </div>   
                <div style="clear:both;"></div>               
              </li>
              <li class="w3-padding-16">
               	<div style="float:left; width:20%; height:200px; padding-left:5px;">
                	<img class="w3-circle w3-card-8" src="images(editorial borad)/section editor/3" height="200" width="200">
                </div>             
                 <div style="float:left; padding-left:60px; padding-top:30px; padding-right:30px; width:80%;">
                    <span class="w3-xlarge"><strong>Wayne A. Phillips</strong></span><br/>
                    <span>Professor, Division of Cancer Research, Peter MacCallum Cancer Centre
                    </span><br/>
                   	<span>Melbourne, Australia</span><br/>
                    <span><strong>Expertise: </strong>Cancer biology, PI3K pathway, Barrett's oesophagus, oesophageal cancer, preclinical models</span>
                </div>   
                <div style="clear:both;"></div>             
              </li>
              <li class="w3-padding-16">
               	<div style="float:left; width:20%; height:200px; padding-left:5px;">
                	<img class="w3-circle w3-card-8" src="images(editorial borad)/section editor/4" height="200" width="200">
                </div>             
                 <div style="float:left; padding-left:60px; padding-top:30px; padding-right:30px; width:80%;">
                    <span class="w3-xlarge"><strong>Douglas Nixon</strong></span><br/>
                    <span>Chairman of the Department of Microbiology, Immunology & Tropical Medicine,The George Washington University School of Medicine and Health Sciences
                    </span><br/>
                   	<span>Washington, DC, USA</span><br/>
                    <span><strong>Expertise: </strong>HIV-1 infection, T cell immunity, common variable immunodeficiency disorders</span>
                </div>   
                <div style="clear:both;"></div>             
              </li>             
            </ul>
          </div><!---------------Copyeditors---------------->  
          
          
          
          <!--------------------Layout Editors---------------->
          <button onclick="myFunction('#Demo6')" class="w3-btn-block w3-green w3-left-align w3-hover-white w3-hover-text-green">
            <h1 style="width:330px;">Layout Editors<i class="fa fa-caret-down w3-jumbo"></i></h1>
          </button>
          <div id="Demo6" class="w3-accordion-content">
            <ul class="w3-ul">
              <li class="w3-padding-16 w3-row">
               	<div style="float:left; width:20%; height:200px; padding-left:5px;">
                	<img class="w3-circle w3-card-8" src="images(editorial borad)/editor/3" height="200" width="200">
                </div>             
                 <div style="float:left; padding-left:60px; padding-top:30px; padding-right:30px; width:80%;">
                    <span class="w3-xlarge"><strong>Vipul Bansal</strong></span><br/>
                    <span>Director, Ian Potter NanoBioSensing Facility, Leader, NanoBiotechnology Research Laboratory (NBRL),
                     School of Applied Sciences, RMIT University</span><br/>
                   	<span>Melbourne, Victoria, Australia</span><br/>
                    <span><strong>Expertise: </strong>Nanobiotechnology and materials chemistry for biosensing, drug-delivery,
                     theranostic, imaging and catalysis</span>
                </div>   
                <div style="clear:both;"></div>             
              </li>
              <li class="w3-padding-16">
               	<div style="float:left; width:20%; height:200px; padding-left:5px;">
                	<img class="w3-circle w3-card-8" src="images(editorial borad)/editor/1" height="200" width="200">
                </div>             
                 <div style="float:left; padding-left:60px; padding-top:30px; padding-right:30px; width:80%;">
                    <span class="w3-xlarge"><strong>Jean-Claude Baron</strong></span><br/>
                    <span>INSERM U894, Centre de Psychiatrie et Neurosciences, Hôpital Sainte-Anne and Université Paris 5</span><br/>
                   	<span>Paris, France</span><br/>
                    <span><strong>Expertise: </strong>The pathophysiology of stroke and dementia using mainly imaging and
                     behavioral measures in both patients and rodent models</span>
                </div>   
                <div style="clear:both;"></div>               
              </li>
              <li class="w3-padding-16">
               	<div style="float:left; width:20%; height:200px; padding-left:5px;">
                	<img class="w3-circle w3-card-8" src="images(editorial borad)/editor/2" height="200" width="200">
                </div>             
                 <div style="float:left; padding-left:60px; padding-top:30px; padding-right:30px; width:80%;">
                    <span class="w3-xlarge"><strong>Bernhard Baune</strong></span><br/>
                    <span>Professor of Psychiatry, Chair of Discipline of Psychiatry, School of Medicine, University of Adelaide
                    </span><br/>
                   	<span>Adelaide, Australia</span><br/>
                    <span><strong>Expertise: </strong>Psychiatric neuroscience, mood disorders, cognitive 
                     function,neuroimmunology</span>
                </div>   
                <div style="clear:both;"></div>             
              </li>
            </ul>
          </div><!--------------------Layout Editors---------------->
          
          
          
          <!--------------------Proofreaders---------------->
          <button onclick="myFunction('#Demo7')" class="w3-btn-block w3-green w3-left-align w3-hover-white w3-hover-text-green">
            <h1 style="width:310px;">Proofreaders<i class="fa fa-caret-down w3-jumbo"></i></h1>
          </button>
          <div id="Demo7" class="w3-accordion-content">
            <ul class="w3-ul">
              <li class="w3-padding-16 w3-row">
               	<div style="float:left; width:20%; height:200px; padding-left:5px;">
                	<img class="w3-circle w3-card-8" src="images(editorial borad)/editor/3" height="200" width="200">
                </div>             
                 <div style="float:left; padding-left:60px; padding-top:30px; padding-right:30px; width:80%;">
                    <span class="w3-xlarge"><strong>Vipul Bansal</strong></span><br/>
                    <span>Director, Ian Potter NanoBioSensing Facility, Leader, NanoBiotechnology Research Laboratory (NBRL),
                     School of Applied Sciences, RMIT University</span><br/>
                   	<span>Melbourne, Victoria, Australia</span><br/>
                    <span><strong>Expertise: </strong>Nanobiotechnology and materials chemistry for biosensing, drug-delivery,
                     theranostic, imaging and catalysis</span>
                </div>   
                <div style="clear:both;"></div>             
              </li>
              <li class="w3-padding-16">
               	<div style="float:left; width:20%; height:200px; padding-left:5px;">
                	<img class="w3-circle w3-card-8" src="images(editorial borad)/editor/1" height="200" width="200">
                </div>             
                 <div style="float:left; padding-left:60px; padding-top:30px; padding-right:30px; width:80%;">
                    <span class="w3-xlarge"><strong>Jean-Claude Baron</strong></span><br/>
                    <span>INSERM U894, Centre de Psychiatrie et Neurosciences, Hôpital Sainte-Anne and Université Paris 5</span><br/>
                   	<span>Paris, France</span><br/>
                    <span><strong>Expertise: </strong>The pathophysiology of stroke and dementia using mainly imaging and
                     behavioral measures in both patients and rodent models</span>
                </div>   
                <div style="clear:both;"></div>               
              </li>
              <li class="w3-padding-16">
               	<div style="float:left; width:20%; height:200px; padding-left:5px;">
                	<img class="w3-circle w3-card-8" src="images(editorial borad)/editor/2" height="200" width="200">
                </div>             
                 <div style="float:left; padding-left:60px; padding-top:30px; padding-right:30px; width:80%;">
                    <span class="w3-xlarge"><strong>Bernhard Baune</strong></span><br/>
                    <span>Professor of Psychiatry, Chair of Discipline of Psychiatry, School of Medicine, University of Adelaide
                    </span><br/>
                   	<span>Adelaide, Australia</span><br/>
                    <span><strong>Expertise: </strong>Psychiatric neuroscience, mood disorders, cognitive 
                     function,neuroimmunology</span>
                </div>   
                <div style="clear:both;"></div>             
              </li>
            </ul>
          </div><!--------------------Proofreaders---------------->                                         
        </div>    
    </div>

	<?php include_once("footer.php"); ?>
    
    <!-----------accordion JS------------->
	<script>
		var i = 0;
		if(i == 0) {
			$("#Demo1").slideDown(500);
			$("#Demo2").slideDown(500);
			i++;
		}
		
		function myFunction(id) {
			$(id).slideToggle(500);
		}
    </script>
    
    <!------------Adding active Class---------->
    
    <script>
		document.getElementsByClassName("make-active")[1].className += " active";
	</script>
</body>
</html>
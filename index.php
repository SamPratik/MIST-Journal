<?php session_start(); ?>
 
 <?php  
/* if(isset($_SESSION["authorLoginEmail"]) && isset($_SESSION["authorLoginId"]))  
 {  
      header("location: authorLoggedin.php");  
 } */ 
 ?>  

<?php
if(isset($_SESSION["editorLoginEmail"])) {
	header("location: editorLoggedin.php");	
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIST Journal</title>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>   
	<script>
    jQuery(document).ready(function() {
            
        jQuery('.carousel[data-type="multi"] .item').each(function(){
            var next = jQuery(this).next();
            if (!next.length) {
                next = jQuery(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo(jQuery(this));
          
            for (var i=0;i<2;i++) {
                next=next.next();
                if (!next.length) {
                    next = jQuery(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));
            }
        });
            
    });
    </script>
    
    <style>
	
		* {
			box-sizing:border-box;
			padding:0px;
			margin:0px;	
		}
        
        /* jssor slider bullet navigator skin 01 css */
        /*
        .jssorb01 div           (normal)
        .jssorb01 div:hover     (normal mouseover)
        .jssorb01 .av           (active)
        .jssorb01 .av:hover     (active mouseover)
        .jssorb01 .dn           (mousedown)
        */
        .jssorb01 {
            position: absolute;
        }
        .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
            position: absolute;
            /* size of bullet elment */
            width: 12px;
            height: 12px;
            filter: alpha(opacity=70);
            opacity: .7;
            overflow: hidden;
            cursor: pointer;
            border: #000 1px solid;
        }
        .jssorb01 div { background-color: gray; }
        .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
        .jssorb01 .av { background-color: #fff; }
        .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }

        /* jssor slider arrow navigator skin 02 css */
        /*
        .jssora02l                  (normal)
        .jssora02r                  (normal)
        .jssora02l:hover            (normal mouseover)
        .jssora02r:hover            (normal mouseover)
        .jssora02l.jssora02ldn      (mousedown)
        .jssora02r.jssora02rdn      (mousedown)
        */
        .jssora02l, .jssora02r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('img/a02.png') no-repeat;
            overflow: hidden;
        }
        .jssora02l { background-position: -3px -33px; }
        .jssora02r { background-position: -63px -33px; }
        .jssora02l:hover { background-position: -123px -33px; }
        .jssora02r:hover { background-position: -183px -33px; }
        .jssora02l.jssora02ldn { background-position: -3px -33px; }
        .jssora02r.jssora02rdn { background-position: -63px -33px; }
		
		
		.cover {
			position:absolute;
			top:0px;
			bottom:0px;
			left:0px;
			right:0px;
			background-color:rgba(0,0,0,0.2);	
		}
		

    </style>
    
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/reviewerRegistrationForm.css">
    <link rel="stylesheet" href="css/authorRegistrationForm.css">
    <link rel="stylesheet" href="css/sectionEditorRegistrationForm.css">
    <link rel="stylesheet" href="css/editorRegistrationForm.css">
    <link rel="stylesheet" href="css/journalManagerRegistrationForm.css">
    <link rel="stylesheet" href="css/layoutEditorRegistrationForm.css">
    <link rel="stylesheet" href="css/copytEditorRegistrationForm.css">
    <link rel="stylesheet" href="css/proofreaderRegistrationForm.css">
    <link rel="stylesheet" type="text/css" href="css/scrollBar.css">
</head>
<body style="padding:0px; margin:0px; background-color:white;font-family:Arial, sans-serif">
 
    <!-- #region Jssor Slider Begin -->

    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: http://www.jssor.com/demos/image-slider.slider -->
    
    <!-- This demo works with jquery library -->

    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider-21.1.5.mini.js"></script>

    <!-- use jssor.slider-21.1.5.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:0,d:600,y:-290,e:{y:27}}],
              [{b:0,d:1000,y:185},{b:1000,d:500,o:-1},{b:1500,d:500,o:1},{b:2000,d:1500,r:360},{b:3500,d:1000,rX:30},{b:4500,d:500,rX:-30},{b:5000,d:1000,rY:30},{b:6000,d:500,rY:-30},{b:6500,d:500,sX:1},{b:7000,d:500,sX:-1},{b:7500,d:500,sY:1},{b:8000,d:500,sY:-1},{b:8500,d:500,kX:30},{b:9000,d:500,kX:-30},{b:9500,d:500,kY:30},{b:10000,d:500,kY:-30},{b:10500,d:500,c:{x:87.50,t:-87.50}},{b:11000,d:500,c:{x:-87.50,t:87.50}}],
              [{b:0,d:600,x:410,e:{x:27}}],
              [{b:-1,d:1,o:-1},{b:0,d:600,o:1,e:{o:5}}],
              [{b:-1,d:1,c:{x:175.0,t:-175.0}},{b:0,d:800,c:{x:-175.0,t:175.0},e:{c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1},{b:0,d:600,x:-570,o:1,e:{x:6}}],
              [{b:-1,d:1,o:-1,r:-180},{b:0,d:800,o:1,r:180,e:{r:7}}],
              [{b:0,d:1000,y:80,e:{y:24}},{b:1000,d:1100,x:570,y:170,o:-1,r:30,sX:9,sY:9,e:{x:2,y:6,r:1,sX:5,sY:5}}],
              [{b:2000,d:600,rY:30}],
              [{b:0,d:500,x:-105},{b:500,d:500,x:230},{b:1000,d:500,y:-120},{b:1500,d:500,x:-70,y:120},{b:2600,d:500,y:-80},{b:3100,d:900,y:160,e:{y:24}}],
              [{b:0,d:1000,o:-0.4,rX:2,rY:1},{b:1000,d:1000,rY:1},{b:2000,d:1000,rX:-1},{b:3000,d:1000,rY:-1},{b:4000,d:1000,o:0.4,rX:-1,rY:-1}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $Idle: 2000,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions,
                $Breaks: [
                  [{d:2000,b:1000}]
                ]
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1000);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

	<!---------navigation-bar-------->
	<?php include_once("navigationBar.php"); ?>
    <!---------navigation-bar-------->

	<!-----header-slider---------->
    <?php include_once("header.php"); ?>
    <!------header-slider--------->
    
    <div class="notice-about">
    
        <div class="notice" style="height:365px;">
            <div class="marquee">
            	<img style="display:block;margin:auto;" src="animated fots/NfzVFewS.gif">
                <div class="notice-text">
                    <p class="w3-large" style="color:#3F681C;font-family:josefin slab;font-size:20px"><strong>Volume-5, Issue-4
                     published...</strong></p>
                    <p class="w3-large" style="color:#3F681C;font-family:josefin slab;font-size:20px"><strong>Calling Papers For
                     Volume 5, Issue 5 Last Deadeline For Paper Submission 15 October 2016 Posted by Admin</strong></p>
                </div>
            </div>
        </div>
        
<!--<link type="text/css" rel="stylesheet" href="css/jquery.bxslider.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>-->

        
        
<script>
	/*$(document).ready(function(){
	  $('.slider8').bxSlider({
		mode: 'vertical',
		slideWidth: 300,
		minSlides: 2,
		slideMargin: 10
	  });
	});*/
</script>

<!--<div style="position:relative;width:500px;">
    <div class="slider8 w3-display-container" style="width:100%;">
      <div class="slide" style="width:100%;"><img style="width:100%;" src="http://placehold.it/300x100&text=FooBar1"></div>
      <div class="slide" style="width:100%;"><img style="width:100%;" src="http://placehold.it/300x100&text=FooBar2"></div>
      <div class="slide" style="width:100%;"><img style="width:100%;" src="http://placehold.it/300x100&text=FooBar3"></div>
      <div class="slide" style="width:100%;"><img style="width:100%;" src="http://placehold.it/300x100&text=FooBar4"></div>
      <div class="slide" style="width:100%;"><img style="width:100%;" src="http://placehold.it/300x100&text=FooBar5"></div>
      <div class="slide" style="width:100%;"><img style="width:100%;" src="http://placehold.it/300x100&text=FooBar6"></div>
      <div class="slide" style="width:100%;"><img style="width:100%;" src="http://placehold.it/300x100&text=FooBar7"></div>
      <div class="slide" style="width:100%;"><img style="width:100%;" src="http://placehold.it/300x100&text=FooBar8"></div>
      <div class="slide" style="width:100%;"><img style="width:100%;" src="http://placehold.it/300x100&text=FooBar9"></div>
      <div class="slide" style="width:100%;"><img style="width:100%;" src="http://placehold.it/300x100&text=FooBar10"></div>
    </div>
    
    <a class="w3-btn-floating w3-display-left" style="position:absolute;top:50%;left:-7px;">&#10094;</a>
    <a class="w3-btn-floating w3-display-right" style="position:absolute;top:50%;rigth:7px;">&#10095;</a>
</div>-->
        
        
        <div class="about">
        	<h2>About the journal</h2>
            <p style="font-family:josefin slab;font-size:20px;">In this section, you will get a clear concept about review 
            process, author guidelines, copyright notice, security of journal, publication scheduling, payment process</p>
            <a href="aboutTheJournal.php" 
            class="w3-btn w3-red" style="width:195px;display:block;margin:auto;margin-top:10px;">know about MIST journal</a>
        </div>
        <div style="clear:both;"></div>
        
    </div>
    
    <div class="members">
    	<div class="members-cover"></div>
        
        <div class="container  members-carousel">
            <!--The main div for carousel-->
            <div class="container text-center">
                <div class="carousel slide row" data-ride="carousel" data-type="multi" data-interval="2000" id="fruitscarousel">
                
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-md-3 col-sm-4 col-xs-12">
                            	<h2>Journal Manager</h2>
                                <p>The Journal Manager manages the overall publishing system. This does not involve any advanced technical skills, but entails filling out templates and uploading files. The JOurnal Manager does the setup for the journal, and enrols the Editors, Section Editors, Copyeditors...</p>
                                <a class="w3-btn" href="#">Read More</a>
                            </div>
                        </div>     
                        <div class="item">
                            <div class="col-md-3 col-sm-4 col-xs-12">
                            	<h2>Editors</h2>
                                <p>The editor oversees entire editorial and publish process. The Editor, working with the Journal Manager, typically establishes the policies and procedures for the journal, which are used in setting up the journal. In the editorial Process, the Editor assigns submissions to the Section Editors...</p>
                                <a href="#" class="w3-btn">Read More</a>
                            </div>
                        </div>  
                        <div class="item">
                            <div class="col-md-3 col-sm-4 col-xs-12">
                            	<h2>Section Editors</h2>
                                <p>The Section Editor manages the Review and Editing of submissions in those Sections (e.g.,Articles,Book Reviews, etc.) for which they have been assigned responsibilty.If the article is accepted for publication,the Section Editor may also oversee the editing process...
                                 </p>
                                <a href="#" class="w3-btn">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-3 col-sm-4 col-xs-12">
                            	<h2>Reviewers</h2>
                                <p>The Reviewer is seleccted by the Section Editor to review a submission.Reviewers are asked to submit reviews to the journal's web siteand are able to upload attachments for the use of the editor and author.Reviewers may be rated bu section Editors...</p>
                                <a href="#" class="w3-btn">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-3 col-sm-4 col-xs-12">
                            	<h2>Copy Editors</h2>
                                <p>The Copyeditor edits submissions to improve grammar and clarity, works with authors to ensure everything is in place, and ensures strict adherence to journal's bibliographic and textual style  and produces a clean,edited copy for the layout editior to turn into the galleys that...
                                 </p>
                                <a class="w3-btn" href="#">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-3 col-sm-4 col-xs-12">
                            	<h2>Layout Editors</h2>
                                <p>The Layout Editor transforms the copyedited versions of the submission into galley files in
                                 HTML, PDF, PS, etc., depending on which formats the journal has elected to use for electronic
                                  publication. The system does not provide software for converting word processing...</p>
                                <a class="w3-btn" href="#">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-3 col-sm-4 col-xs-12">
                            	<h2>Proofreaders</h2>
                                <p>The Prrofreader carefully reads over the galleys in the various formats in ehich the journal publishes (as does the author),checking for typographic and formatting errors, which the layout editor will fix.In the case of some journals, the Editor ans Section Editors play this role...
                                 </p>
                                <a class="w3-btn" href="#">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-3 col-sm-4 col-xs-12">
                            	<h2>Author</h2>
                                <p>Authors are able to register and submit items to the journal directly through the journal's website.The Author is asked to upload the item, as well as provide metadata or indexing information associated with the item, to improve the search capacity for research online...</p>
                                <a class="w3-btn" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                
                    <a class="left carousel-control" href="#fruitscarousel" data-slide="prev"><i class="glyphicon 
                    glyphicon-chevron-left w3-text-blue"></i></a>
                    <a class="right carousel-control" href="#fruitscarousel" data-slide="next">
                    <i class="glyphicon glyphicon-chevron-right w3-text-blue"></i></a> 
                
                </div>
                
            </div>
         
        
        </div><!-------container--------->
    </div><!------members--------->
    
    <div class="quote">
    	<div class="abdul-hamid">
        	<img src="images/abdul hamid.jpg">
        </div>
        <div class="abdul-hamid-quote">
        	<i class="fa fa-quote-left" style="font-size:76px; color:white;"></i>
            <p style="color:white;">I am delighted to learn that Military Institute of Science and Technology (MIST) is expanding very fast in the field of technical education and contributing significantly in the process of building a technology-based prosperous nation.</p>
            <h3>- Abdul Hamid</h3>
        </div>
        <div style="clear:both;"></div>
    </div>
    
    <!----------map---------->
    <div class="map">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.4583335727434!2d90.35592911450382!3d23.837853191347794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c141a597fed3%3A0xc573ab03bfbfa7ce!2sMilitary+Institute+of+Science+%26+Technology!5e0!3m2!1sen!2sbd!4v1473676000760" width="1366" height="410" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div><!------map--------->
    
	<?php include_once("footer.php"); ?>
    
    <script>
		document.getElementsByClassName("make-active")[0].className += " active";
	</script>
</body>
</html>

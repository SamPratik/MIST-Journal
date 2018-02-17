<?php session_start(); ?>

<?php $authorLoginId = $_SESSION["authorLoginId"]; ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Article Submission</title>
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" type="text/css" href="css/authorSubmitArticle.css">

<style>

	.topNavbar {
		margin-top:-10px;	
	}
	
	.comment-to-editor {
		position:relative;	
		top:40px;
	}
	
	.envelope-icon {
		float:left;	
		cursor:pointer;
	}
	
	.envelope-paragraph {
		float:left;	
		font-size:25px;
		margin-left:10px;
		padding-top:10px;
	}
	
	.add-author {
		position:relative;
		top:40px;	
	}
	
	.pre-submit-article-form {
		position:relative;
		top:60px;	
	}
	
	.upload-article-form {
		position:relative;
		top:50px;
	}
	
	.error-message {
		font-weight:bold;
		color:red;	
	}
	
	.footer {
		margin-top:20px;	
	}
	
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body>

	<?php include_once("authorNavigationBar.php"); ?>
    
    <div class="author-submit-article-container" style="height:1650px;position:relative;">
    	
        <h1><span>Article Submission</span></h1>
        
        <form class="w3-container">
          <h2 style="color:#32CD99;">Aggreements</h2>
          <p>
          <input class="w3-check checkboxClass" type="checkbox" onChange="checkCount();">
          <label class="w3-validate">The submission has not been previously published nor it before another journal for consideration</label></p>
          <p>
          <input class="w3-check checkboxClass" type="checkbox" onChange="checkCount();">
          <label class="w3-validate">The submission file is Microsoft Word, RTF or WordPerfect document file format</label>
          </p>
          <p>
          <input class="w3-check checkboxClass" type="checkbox" onChange="checkCount();">
          <label class="w3-validate">Where available, URLs for the references have been provided</label></p>
          <p>
          <input class="w3-check checkboxClass" type="checkbox" onChange="checkCount();">
          <label class="w3-validate">The text is single spaced; uses a 12 point font; employs italic rether than underlining(except with URL addresses); and all illustrations, figures, and tables are placed within the text at the appropriate points, rather than at the end.</label>
          </p>     
          <p>
          <input class="w3-check checkboxClass" type="checkbox" onChange="checkCount();">
          <label class="w3-validate">The text adheres to the stylistic and bibligraphic requirements outlined in the 
          <a href="#">Author Guidelines</a></label>
          </p>
          <p>
          <input class="w3-check checkboxClass" type="checkbox" onChange="checkCount();">
          <label class="w3-validate">If submitting to a peer-reviewed section of the journal, the instructions in <a href="#">Ensuring a blind</a> Review have been followed</label>
          </p>              
        </form>
        <div style="clear:both;"></div>
        
        
        <!---------All checkboxes Checked or not----------->
		<script>
            //$(document).ready(function() {
                
                var checkboxObj = document.getElementsByClassName("checkboxClass");
                
                function checkCount() {
                    var count = 0;
                    for(var i=0; i<checkboxObj.length; i++) {
                        if(checkboxObj[i].checked == true) {
                            count = count+1;	
                        }
                    }
                    if(count == 6) {
                        //document.getElementById("authorUploadArticleId").disabled = false;
						document.getElementById("authorArticleSubmitBtnId").disabled = false;
						document.getElementById("authorAddAuthorBtnId").disabled = false;
                    } else {
						//document.getElementById("authorUploadArticleId").disabled = true;
						document.getElementById("authorArticleSubmitBtnId").disabled = true;
						document.getElementById("authorAddAuthorBtnId").disabled = true;
					}
                } //--------change()------
            //}); //----ready()------
        </script>
    
    
        <!------------Comment To Editor---------------->
        <div class="comment-to-editor w3-panel w3-sand w3-border">
        	<i class="fa fa-envelope w3-text-yellow w3-jumbo envelope-icon w3-hover-text-green" aria-hidden="true"></i>
            <p class="envelope-paragraph w3-text-red"><i>Click this envelope icon if you have any comments to Editor</i></p>
            <div style="clear:both;"></div>
        </div>
        <div style="clear:both;"></div>
        
        <!------------Add Author---------------->
        
        <div class="add-author">
            <button id="authorAddAuthorBtnId" onClick="document.getElementById('addAuthorModal').style.display='block';" 
            class="w3-btn w3-blue" style="float:left; margin-top:10px;" disabled>
            <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add Author
            </button>
            
            <p class="envelope-paragraph w3-text-red"><i>Add Author if more than one Author are included</i></p>
            <div style="clear:both;"></div>
        </div>
        <div style="clear:both;"></div>
        
        
        <!-------------------------------------------------
        -------------------Author Add Modal-----------------
        --------------------------------------------------->
		<?php //include_once("authorAddAuthorModal.php"); ?>
        


        <div id="addAuthorModal" class="w3-modal">
          <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
          
            <div class="w3-center"><br>
              <span onclick="document.getElementById('addAuthorModal').style.display='none'" 
              class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
              <!--<img src="images/img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">-->
              <h2 style="color:#32CD99; font-size:50px;font-weight:bold;font-family:lobster;">Add more Authors</h2>
            </div>
        
            <form id="authorAddFormId" class="w3-container" name="authorAddForm" method="post" onSubmit="return false;">
              <div class="w3-section">
        
                <label><b>First Name</b></label>
                <input class="w3-input w3-border" name="authorAddFn" type="text" placeholder="Enter First Name" value="">
                <p class="error-message" id="authorAddFnErr"></p>
                
                <label><b>Last Name</b></label>
                <input class="w3-input w3-border" name="authorAddLn" type="text" placeholder="Enter Last Name" value="">
                <p class="error-message" id="authorAddLnErr"></p>
                
                <label><b>E-mail</b></label>
                <input class="w3-input w3-border w3-margin-bottom" name="authorAddEmail" type="email" placeholder="Enter Your Email" value="">
                <p class="error-message" id="authorAddEmailErr"></p>
        
                <input id="addAuthorBtn" class="w3-btn-block w3-green w3-section w3-padding" type="submit" value="Submit"> <br/>
                
                <p class="error-message" id="authorMissMatchMessage"></p>
                
              </div>
            </form>
        
            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
              <button onclick="document.getElementById('addAuthorModal').style.display='none'" type="button" 
              class="w3-btn w3-red w3-right">Cancel</button>
            </div>
        
          </div>
        </div>
        
        
        
    	<!-----------------------------------------------------
        
        -------------------AJAX CODE FOR ADDING AUTHOR---------
        
        ------------------------------------------------------>
        
        
        <script>
			
			$(document).ready(function() {
				
				$("#addAuthorBtn").click(function() {
					
					var authorAddFnJS = document.forms["authorAddForm"]["authorAddFn"].value;
					var authorAddLnJS = document.forms["authorAddForm"]["authorAddLn"].value;
					var authorAddEmailJS = document.forms["authorAddForm"]["authorAddEmail"].value;
					
					$.post(
					
						"authorAddProcess.php",
						{
							authorAddFn: authorAddFnJS,
							authorAddLn: authorAddLnJS,
							authorAddEmail: authorAddEmailJS,
							authorId: <?php echo $authorLoginId; ?>
						},
						function(output) {
							
							if(output.indexOf("success") != -1) {
								//document.getElementById("seRegSuccessMessage").innerHTML = output;
								alert("Author added successfully!");
								//window.location = "index.php";
								document.getElementById("authorAddFormId").reset();	
								
								document.getElementById("authorAddFnErr").innerHTML = "";
								document.getElementById("authorAddLnErr").innerHTML = "";
								document.getElementById("authorAddEmailErr").innerHTML = "";
							} else {
							
								var seFoo = JSON.parse(output);
								
								document.getElementById("authorAddFnErr").innerHTML = seFoo[0];
								document.getElementById("authorAddLnErr").innerHTML = seFoo[1];
								document.getElementById("authorAddEmailErr").innerHTML = seFoo[2];
							}
						}
					
					);
					
				}); //--------click()------
					
			}); //----------ready()---------
			
		</script>

        
        
        
        <!---------------------------------------------------
        -----------------Submitting Article------------------
        ---------------------------------------------------->
        
        <form class="pre-submit-article-form" name="authorIndexArticleName" id="authorIndexArticleFormId" onSubmit="return false;">
          <h2 style="color:#32CD99;">To submit an article first fill up the abstract & indexing informations</h2>
          <p>
          <label><b style="color:#32CD99;">Abstract of the Article</b></label>
          <textarea class="w3-input w3-border" name="authorArticleAbstract" rows="5"></textarea>
          </p>
          <p class="error-message" id="authorAbstractArticleErr"></p>
        
        
          <h3 style="color:#32CD99;">Indexing Article</h3>
          <select class="w3-select" name="authorScope">
            <option value="" disabled selected>Choose Scope</option>
            <option value="1">Computer Science</option>
            <option value="2">Electrical Engineering</option>
            <option value="3">Mechanical Engineering</option>
            <option value="1">Civil Engineering</option>
            <option value="2">Aeronautical Engineering</option>
            <option value="3">Naval Engineering</option>
            <option value="1">Neuclear Engineering</option>
            <option value="2">Biomedical Engineering</option>
            <option value="3">Architecture</option>
          </select>
          <p class="error-message" id="authorScopeErr"></p>

          
          <p>
          <label><b style="color:#32CD99;">Title of the Article: </b></label>
          <input class="w3-input w3-border" name="authorArticleTitle" type="text">
          </p>
          <p class="error-message" id="authorTitleErr"></p>

          
          <p>
          <label><b style="color:#32CD99;">Keywords: </b></label>
          <input class="w3-input w3-border" name="authorKeywords" type="text">
          </p>
          <p class="error-message" id="authorKeywordsErr"></p>

          
          <p>
          <label><b style="color:#32CD99;">Type: </b></label>
          <input class="w3-input w3-border" name="authorType" type="text">
          </p>
          <p class="error-message" id="authorTypeErr"></p><br/>

          
          <p>
          <label style="color:#32CD99;">Choose File(Article)</label>
          <input id="myFile" style="width:250px;" type="file" name="myFile" /><br/><br/>
          </p>  
          <p class="error-message" id="authorFileErr"></p><br/>
            
                    
          <button id="authorArticleSubmitBtnId" class="w3-btn w3-margin-top" style="background-color:#32CD99; display:block; 
          margin:auto;width:260px;" disabled>submit</button>
          
        </form>
        <div style="clear:both;"></div>
        
    </div> 
        
        
    <!----------------------------------------------------------
    --------------Article Submit Process Using ajax------------- 
    ----------------------------------------------------------->
    
      <script>
		  
		  $(document).ready(function() {
			
			  $("#authorArticleSubmitBtnId").click(function() {
				  
				var fd = new FormData(document.querySelector("#authorIndexArticleFormId"));
				fd.append("authorId",<?php echo $authorLoginId; ?>);
				
				$.ajax({
				  url: "authorSubmitArticleProcess.php",
				  type: "POST",
				  data: fd,
				  processData: false,  // tell jQuery not to process the data
				  contentType: false,   // tell jQuery not to set contentType
				  success: function(output){
						if(output.indexOf("success") != -1) {
							alert("Article has been submitted successfully!");
							document.getElementById("authorIndexArticleFormId").reset();	
							document.getElementById("authorAbstractArticleErr").innerHTML = "";
							document.getElementById("authorScopeErr").innerHTML = "";
							document.getElementById("authorTitleErr").innerHTML = "";
							document.getElementById("authorKeywordsErr").innerHTML = "";
							document.getElementById("authorTypeErr").innerHTML = "";
							document.getElementById("authorFileErr").innerHTML = "";
						} 
						if(output.indexOf("failed") != -1) {
							alert("Something went wrong!");
						} 
						else {
							//alert(output);
							var authorIndexFoo = JSON.parse(output);
							document.getElementById("authorAbstractArticleErr").innerHTML = authorIndexFoo[0];
							document.getElementById("authorScopeErr").innerHTML = authorIndexFoo[1];
							document.getElementById("authorTitleErr").innerHTML = authorIndexFoo[2];
							document.getElementById("authorKeywordsErr").innerHTML = authorIndexFoo[3];
							document.getElementById("authorTypeErr").innerHTML = authorIndexFoo[4];
							document.getElementById("authorFileErr").innerHTML = authorIndexFoo[5];
						}
				  }
				});		
				  
			  }); //---click()
			  
		  }); //---ready()
		  
	  </script>
    
    

	<?php //include_once("footer.php"); ?>
    <div class="footer" style="position:relative;top:100px;">
    
    	<div class="contact">
        	<h3>Contact Us</h3>
            <div style="position:relative; top:27px;"><p><strong class="w3-text-green w3-large">Mailing Address:</strong> Military Institute of Science & Technology (MIST)  Mirpur Cantonment, Dhaka-1216, Bangladesh. <i class="fa fa-map-marker w3-large w3-text-red" style="color:white;"></i> <br/>
            <strong class="w3-text-green w3-large">Director Administration:</strong> <i class="fa fa-phone w3-large w3-text-blue"></i>  +88-02-9013166, <i class="fa fa-phone w3-large w3-text-blue"></i>   +88-02-9010049 Ext:3820 <br/>
            <strong class="w3-text-green w3-large">Colonel Staff:</strong> <i class="fa fa-phone w3-large w3-text-blue"></i>  +88-02-9011414, <i class="fa fa-phone w3-large w3-text-blue"></i>   +88-02-9010049 Ext:3804, <i class="fa fa-phone w3-large w3-text-blue"></i>  +88-02-9011311, <i class="fa fa-envelope w3-large w3-text-yellow"></i> info@mist.ac.bd <br/>
            <strong class="w3-text-green w3-large">Admission Officer:</strong> <i class="fa fa-phone w3-large w3-text-blue"></i> +88-02-8035419,   <i class="fa fa-phone w3-large w3-text-blue"></i> +88-02-9010049 EXT:3842 (Upto 14:30 hrs)</p></div>
        </div>
        <div class="subscribe">
            <h3>Stay tuned! Subscribe to our newsletter</h3>
            <div><p>MIST newsletters are issued regularly to keep you up to date on the latest information, notice, news and events, results, awards, and many interesting topical issues.</p></div>
            <div style="position:relative; top:8px;">
            	<input class="w3-input" type="email" placeholder="Your E-mail address">
                <input class="w3-btn w3-red w3-large w3-round" type="submit" value="Subscribe">
            </div>
            <div class="icons"><i class="fa fa-facebook w3-xlarge" style="background-color:#3b5998;"></i> <i class="fa fa-twitter w3-xlarge w3-blue"></i> <i class="fa fa-linkedin w3-xlarge" style="background-color:#4875B4;"></i> <i class="fa fa-google-plus w3-xlarge" style="background-color:#C63D2D;"></i> <i class="fa fa-youtube w3-xlarge" style="background-color:#FF3333;"></i></div>
            <div style="clear:both;"></div>
        </div>
        <div class="choose-mist">
          <h3>Why Choose MIST?</h3>
          <p>We are a progressive institute with a focus on innovative research that has real impact and is recognized internationally. At MIST, students are at the center of everything we do. Producing career-ready graduates informs what we teach and how we teach it. Our commitment to high-quality teaching, is what makes us educational leaders in science and technology.</p>
        </div> 
         <div style="clear:both;"></div>    
    </div>
    
    <script>
		var authorAnchor = document.getElementsByClassName("header-link");
		authorAnchor[1].classList.add("active");
	</script>
    
</body>
</html>
<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>

<!------Catching the value of author_id & section editor id-------->
<?php
	$getAuthorId = $_GET["author_id"];
	$seId = $_SESSION["seLoginId"];
	$article = $_GET["article"];
?>

<?php
	$selectReviewer = "SELECT * FROM reviewer";
	$resultReviewer = mysqli_query($connection,$selectReviewer);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Select Reviewers</title>

<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" type="text/css" href="css/scrollBar.css">

<style>
	
	* {
		margin:0px;
		padding:0px;
		box-sizing:border-box;
	}	
	
	@font-face {
		font-face:lobster;
		src:url(fonts/Lobster_1.3.otf);	
	}
	
	.topNavbar {
		margin-top:-10px;	
	}
	
	.editor-select-section-editor-container {
		position:relative;
		top:110px;
		min-height:500px;
		/*background-color:#f1f1f1;*/
		width:80%;
		margin:0px auto 10px auto;	
		padding-bottom:100px;
	}
	
	.editor-select-section-editor-container h1 {
		text-align:center;	
		font-family:lobster;
		font-size:50px;
		color:#32CD99;
	}
	
	p.attach-notify-btn-container {
		position:relative;
		bottom:20px;
		top:20px;
	}
	
	.editor-select-section-editor-form li {
		position:relative;	
	}
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body>

	<?php include_once("sectionEditorNavigationBar.php"); ?>
    
    	<div class="editor-select-section-editor-container">
        	
            <h1>Select Reviewers</h1>
            
              <p class="attach-notify-btn-container" style="width:100%">
                  <button type="button" class="w3-red w3-btn w3-right" style="margin-left:5px;" 
                  onClick="document.getElementById('notifyReviewerMessageId').style.display='block'">
                  <i style="margin-right:5px;"  class="fa fa-bell" aria-hidden="true"></i>Notify & Forward File to the selected Reviewers</button>
              </p>
              <div style="clear:both;"></div>
            <form class="editor-select-section-editor-form">
              
                  <ul class="w3-ul">
                  <h1 id="demo"></h1>
                  <?php while($rowReviewer = mysqli_fetch_assoc($resultReviewer)) { ?>
                  	
                  	<?php $rId = $rowReviewer["id"]; ?>
                  	
                    <li class="w3-padding-16">
                      <input style="margin-right:20px;float:left;" class="w3-check rCheckBox" type="checkbox" name="rId" value="<?php echo $rowReviewer["id"]; ?>">
                      <label class="w3-validate" style="width:500px;float:left; display:block;margin-top:-5px;">
                          <strong style="font-size:30px;"><?php echo $rowReviewer["rFn"]." ".$rowReviewer["rLn"]; ?></strong>
                          <span style="display:block;"><strong>Mobile: </strong><?php echo $rowReviewer["rTel"]; ?></span>
                          <span style="display:block;"><strong>Email: </strong><?php echo $rowReviewer["rEmail"]; ?></span>
                          <span style="display:block;"><strong>Academic Degree: </strong><?php echo $rowReviewer["rAd"]; ?></span>
                          <span style="display:block;"><strong>Title: </strong><?php echo $rowReviewer["rTitle"]; ?></span>
                          <span style="display:block;"><strong>Research Areas: </strong><?php echo $rowReviewer["rResearch"]; ?>
                          </span>
                          <span style="display:block;"><strong>Article To be Forwarded: </strong><?php echo $article; ?>
                          </span>
                      </label>
                      <div style="clear:both;"></div>
                    </li>
                    
                    <?php } ?>
                    
                  </ul>
                
            </form> 
            <div style="clear:both;"></div>   
             		
        </div>
        
	  <!-------------Notify Message & Attach File To Reviewers Modal------------->
      <div id="notifyReviewerMessageId" class="w3-modal">
        <div class="w3-modal-content" style="top:100px; padding-bottom:20px;">
          <header class="w3-container w3-light-grey">
            <span onclick="document.getElementById('notifyReviewerMessageId').style.display='none'"
            class="w3-closebtn">&times;</span>
            <h2 style="text-align:center;color:#32CD99;font-family:lobster;font-weight:bold;font-size:50px;">Notify Reviewer & 
            Attach File</h2>
          </header>
          
          <form class="w3-container w3-margin-top" name="seNotifyReviewerForm" style="display:block; margin:auto;" 
          onSubmit="return false;">
                <p>
                  <label class="w3-label">Message: </label>
                  <textarea class="w3-input" name="seMessageReviewer"></textarea>
                </p><br/>
                
              <!--<div class="w3-margin-top">
              	  <label class="w3-label">Attach File: </label>
                  <input type="file" id="myFile" name="myFile">
                  <progress id="prog" value="0" min="0" max="100"></progress>
              </div>-->
            
                <p style="display:block;width:200px;margin:auto;">
  				<button style="width:100%;" type="button" class="w3-btn w3-teal w3-right w3-margin-top" 
                id="seNotifyReviewerMessageSendId">Send</button>
                </p>
          </form>
        </div>
      </div> 
    
    <?php include_once("footer.php"); ?>
    
    
    <script>
		$(document).ready(function() {
			
			
			$("#seNotifyReviewerMessageSendId").click(function() {
				
				<?php
					/*$getLastSpecialId = "SELECT special_id FROM se_select_reviewer ORDER BY id DESC LIMIT 1";
					$resultLastSpecialId = mysqli_query($connection,$getLastSpecialId);
					
					$rowLastSpecialId = mysqli_fetch_assoc($resultLastSpecialId);
					
					if($rowLastSpecialId == NULL) {
						$specialId = 1;	
					} else {
						$specialId = $rowLastSpecialId["special_id"]+1;
					}*/
				
				?>
				
				var rCheckBoxObj = document.getElementsByClassName("rCheckBox");
				var seMessageR = document.forms["seNotifyReviewerForm"]["seMessageReviewer"].value;
				for(var i=0; i < rCheckBoxObj.length; i++) {
					if(rCheckBoxObj[i].checked == true) {
						var rIdJS = rCheckBoxObj[i].value
					} else {
						continue;	
					}
					
					$.post(
					
						"sectionEditorSelectReviewerProcess.php",
						{
							rId: rIdJS,
							seId: <?php echo $seId; ?>,
							authorId: <?php echo $getAuthorId; ?>,
							article: "<?php echo $article; ?>",
							seMessageReviewer: seMessageR
						},
						function(success) {
							if(success.indexOf("Article has been forwarded to the selected Reviewers") != -1) {
								alert("Article has been forwarded to the selected Reviewers");
							}
						}
					
					); //----post()----
					
				} //-----for()---
				
				//------File Upload Plugin--------	
				/*$.fn.upload = function(remote,data,successFn,progressFn) {
					
					//if we dont have post data, move it along
					
					if(typeof data != "object") {
						progressFn = successFn,
						successFn = data;	
					}
					return this.each(function() {
						
						if($(this)[0].files[0]) {
							
							var formData = new FormData();
							formData.append($(this).attr("name"),$(this)[0].files[0]);
							
							//if we have post data too
							if(typeof data == "object") {
								
								for(var i in data) {
									formData.append(i,data[i]);
								}
							}
							
							//do the ajax request
							$.ajax({
								url: remote,
								type: 'POST',
								xhr: function() {
									myXhr = $.ajaxSettings.xhr();
									if(myXhr.upload && progressFn){
										myXhr.upload.addEventListener('progress',function(prog) {
											
											var value = ~~((prog.loaded/prog.total)* 100);
											
											//if we passed a progress function
											if(progressFn && typeof progressFn == "function") {
												progressFn(prog.value);
												
												//if we passed a progress element
											} else if(progressFn) {
												$(progressFn).val(value);
											}
										},false);
									}
									return myXhr;
								},
								data: formData,
								cache: false,
								contentType: false,
								processData: false,
								complete: function(res) {
									if(successFn) successFn(res.responseText);
								}
							});
						}
					});
				}*/
				
				//ajax upload
				/*$("#myFile").upload("seToReviewerFileProcess.php",
					function(success) {
						if(success.indexOf("success") != -1) {
							alert("Selected Reviewers are notified and File has been sent to them");
						}
					},$("#prog")
				);*/ //---upload()------
			
			}); //------click()----	
			
		}); //------ready()-----

	</script>
    
    <script>
        document.getElementsByClassName("header-link")[1].classList.add("active");
    </script>

</body>
</html>
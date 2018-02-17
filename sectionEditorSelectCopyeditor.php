<?php session_start(); ?>
<?php
	$seId = $_SESSION["seLoginId"];
?>
<?php include_once("dbConnector.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Select Copyeditor</title>

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
		min-height:400px;
		/*background-color:#f1f1f1;*/
		width:80%;
		margin:0px auto 10px auto;	
	}
	
	.editor-select-section-editor-container h1 {
		text-align:center;	
		font-family:lobster;
		font-size:50px;
		color:#32CD99;
	}
	
	p.attach-notify-btn-container {
		position:absolute;
		bottom:20px;
		right:20px;
	}
	
	.editor-select-section-editor-form li {
		position:relative;	
	}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body>
<?php  

	$sql = "SELECT * FROM copy_editor";
	$result = mysqli_query($connection,$sql);
	
?>
	<?php include_once("sectionEditorNavigationBar.php"); ?>
    
    	<div class="editor-select-section-editor-container">
        	
            <h1>Select Copyeditor</h1>
            
            <form class="editor-select-section-editor-form">
              
                  <ul class="w3-ul">
                  
                  <?php while($row = mysqli_fetch_assoc($result)) { ?>
                    <li class="w3-padding-16">
                      <input style="margin-right:20px;float:left;" class="w3-radio select_ce" type="radio" name="gender" value="<?php echo $row["id"] ?>">
                      <label class="w3-validate" style="width:500px;float:left; display:block;margin-top:-5px;">
                          <strong style="font-size:30px;"><?php echo $row["ceFn"]." ".$row["ceLn"]; ?></strong>
                          <span style="display:block;"><strong>Mobile: </strong><?php echo $row["ceTel"]; ?></span>
                          <span style="display:block;"><strong>Email: </strong><?php echo $row["ceEmail"]; ?></span>
                      </label>
                      <p class="attach-notify-btn-container">
                          <button class="w3-green w3-btn" type="button" onClick="document.getElementById('notifyMessageId').style.display='block'"> <i class="fa fa-bell" style="margin-right:5px;" aria-hidden="true"></i>Notify Copyeditor</button>
                          <button class="w3-red w3-btn" type="button" onClick="document.getElementById('attachFileId').style.display='block'"> <i style="margin-right:5px;" class="fa fa-paperclip" aria-hidden="true"></i>Attach File</button>
                      </p>
                      <div style="clear:both;"></div>
                    </li>
                  <?php } ?>
                    
                  </ul>
                
            </form>    
             		
        </div>
    
    <?php include_once("footer.php"); ?>
    
    
    <script>
        document.getElementsByClassName("header-link")[1].classList.add("active");
    </script>
    
</body>
</html>

	  <!-------------Notify to Copy Editor And Attach file Message Modal------------->
      <div id="notifyMessageId" class="w3-modal">
        <div class="w3-modal-content" style="top:0px;">
          <header class="w3-container w3-light-grey">
            <span onclick="document.getElementById('notifyMessageId').style.display='none'"
            class="w3-closebtn">&times;</span>
            <h2 style="text-align:center;color:#32CD99;font-family:lobster;font-weight:bold;font-size:40px;">Notifying Message to Copyeditor & Attach File</h2>
          </header>
          
          <form class="w3-container w3-margin-top" name="notifyForm" id="notifyFormId" style="display:block; margin:auto;" 
          onSubmit="return false;">
          
          		<p>
                  <label class="w3-label">Author ID: </label>
                  <input class="w3-input" type="text" name="authorId">
                </p>
          
                <p class="w3-margin-top">
                  <label class="w3-label">Message: </label>
                  <textarea class="w3-input" name="message"></textarea>
                </p>
                
               <!--<div class="w3-margin-top">
               	   <label class="w3-label">Attach File: </label>
                   <input type="file" id="myFile" name="myFile">
                   <progress id="prog" value="0" min="0" max="100"></progress>
               </div>  -->            
            
                <p>
  				<button type="button" class="w3-btn w3-teal w3-right w3-margin-top" id="notifyMessageSendId" 
                onClick="sendNotifyToDb(this.value)">Send</button>
                </p>
                

          </form>
          
          <div class="w3-container w3-border-top w3-padding-16 w3-margin-top w3-light-grey">
            <button onclick="document.getElementById('notifyMessageId').style.display='none'" type="button" class="w3-btn w3-red w3-right">Cancel</button>
          </div>
        </div>
      </div> 
      
	  <!-------------Attach File Modal------------->
      <div id="attachFileId" class="w3-modal">
        <div class="w3-modal-content" style="top:100px;">
          <header class="w3-container w3-light-grey">
            <span onclick="document.getElementById('attachFileId').style.display='none'"
            class="w3-closebtn">&times;</span>
            <h2 style="text-align:center;color:#32CD99;font-family:lobster;font-weight:bold;font-size:50px;">Attach File</h2>
          </header>
          
          <div class="w3-container w3-margin-top" style="display:block; margin:auto; width:225px;">
              <input type="file" id="myFile" name="myFile" style="display:block;margin-bottom:10px;">
              <input class="w3-btn w3-green w3-btn-block" style="display:block;margin-bottom:10px;" type="button" id="upload" value="upload">
            
              <progress id="prog" value="0" min="0" max="100"></progress>
          </div>
          
          <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <button onclick="document.getElementById('attachFileId').style.display='none'" type="button" class="w3-btn w3-red w3-right">Cancel</button>
          </div>
        </div>
      </div>  
      
      <script>
	  	
	  </script>
      
      <script>
	  	$(document).ready(function() {
			
			$("#notifyMessageSendId").click(function() {
				
				var authorIdJS = document.forms["notifyForm"]["authorId"].value;
				var radioBtnObj = document.getElementsByClassName("select_ce");
				var messageJS = document.forms["notifyForm"]["message"].value;
				
				for(var i=0; i<radioBtnObj.length; i++) {
					if(radioBtnObj[i].checked == true) {
						var ceIdJS = radioBtnObj[i].value;
					}
				}
				
				//alert(ceIdJS);
				
				$.post(
					"sectionEditorNotifyCeProcess.php",
					{
						ceId: ceIdJS,
						seId: <?php echo $seId; ?>,
						authorId: authorIdJS,
						message: messageJS
					},
					function(output) {
						if(output.indexOf("Selected copy editor has been notified!!!") != -1) {
							alert("Selected copy editor has been notified!!!");
						}
						if(output.indexOf("Something went wrong!!!") != -1) {
							alert("Something went wrong!!!");
						}
					}
				); //---post()---
				
			}); //---Notify Button click()-----
			
			$("#upload").click(function() {
				//--------File Upload Plugin------	
				$.fn.upload = function(remote,data,successFn,progressFn) {
					
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
				} //-----File Upload Plugin-----
				
				//---------File Upload--------
				$("#myFile").upload("sectionEditorFileCeProcess.php",function(success) {
					if(success.indexOf("File is attached successfully!!!") != -1) {
						alert("Author is notified and file is attached successfully");
						document.getElementById("notifyFormId").reset();
					}
					if(success.indexOf("Something went wrong!!!") != -1) {
						alert("Something went wrong!!!");	
					}
				},$("#prog"));				
			}); //----Attach file Button click()------
				
		}); //------ready()------
	  </script>
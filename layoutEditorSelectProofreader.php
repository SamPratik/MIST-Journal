<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Select Layouteditor</title>

<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
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
</head>

<body>

	<?php include_once("layoutEditorNavigationBar.php"); ?>
    
    	<div class="editor-select-section-editor-container">
        	
            <h1>Proofreader Selection</h1>
            
            <form class="editor-select-section-editor-form">
              
                  <ul class="w3-ul">
                  
                    <li class="w3-padding-16">
                      <input style="margin-right:20px;float:left;" class="w3-radio" type="radio" name="gender" value="male">
                      <label class="w3-validate" style="width:500px;float:left; display:block;margin-top:-5px;">
                          <strong style="font-size:30px;">Christof M. Aegerter</strong>
                          <span style="display:block;"><strong>Mobile: </strong>01689583182</span>
                          <span style="display:block;"><strong>Email: </strong>pratik.anwar@gmail.com</span>
                          <span style="display:block;"><strong>Academic Degree: </strong>Associate's Degree</span>
                          <span style="display:block;"><strong>Title: </strong>Staff Scientist</span>
                          <span style="display:block;"><strong>Research Areas: </strong>Web Development</span>
                      </label>
                      <p class="attach-notify-btn-container">
                          <button type="button" onClick="document.getElementById('attachFileId').style.display='block';" 
                          class="w3-red w3-btn"><i style="margin-right:5px;" class="fa fa-paperclip" aria-hidden="true">
                          </i>Attach File</button>
                          
                          <button class="w3-blue w3-btn" type="button" 
                          onClick="document.getElementById('notifyMessageId').style.display='block';">
                          <i style="margin-right:5px;"  class="fa fa-bell" aria-hidden="true"></i>Notify</button>
                      </p>
                      <div style="clear:both;"></div>
                    </li>
                    
                    <li class="w3-padding-16">
                      <input style="margin-right:20px;float:left;" class="w3-radio" type="radio" name="gender" value="male">
                      <label class="w3-validate" style="width:500px;float:left; display:block;margin-top:-5px;">
                          <strong style="font-size:30px;">Christof M. Aegerter</strong>
                          <span style="display:block;"><strong>Mobile: </strong>01689583182</span>
                          <span style="display:block;"><strong>Email: </strong>pratik.anwar@gmail.com</span>
                          <span style="display:block;"><strong>Academic Degree: </strong>Associate's Degree</span>
                          <span style="display:block;"><strong>Title: </strong>Staff Scientist</span>
                          <span style="display:block;"><strong>Research Areas: </strong>Web Development</span>
                      </label>
                      <p class="attach-notify-btn-container">
                          <button type="button" onClick="document.getElementById('attachFileId').style.display='block';" 
                          class="w3-red w3-btn"><i style="margin-right:5px;" class="fa fa-paperclip" aria-hidden="true">
                          </i>Attach File</button>
                          
                          <button class="w3-blue w3-btn" type="button" 
                          onClick="document.getElementById('notifyMessageId').style.display='block';">
                          <i style="margin-right:5px;"  class="fa fa-bell" aria-hidden="true"></i>Notify</button>
                      </p>
                      <div style="clear:both;"></div>
                    </li>
                    
                    <li class="w3-padding-16">
                      <input style="margin-right:20px;float:left;" class="w3-radio" type="radio" name="gender" value="male">
                      <label class="w3-validate" style="width:500px;float:left; display:block;margin-top:-5px;">
                          <strong style="font-size:30px;">Christof M. Aegerter</strong>
                          <span style="display:block;"><strong>Mobile: </strong>01689583182</span>
                          <span style="display:block;"><strong>Email: </strong>pratik.anwar@gmail.com</span>
                          <span style="display:block;"><strong>Academic Degree: </strong>Associate's Degree</span>
                          <span style="display:block;"><strong>Title: </strong>Staff Scientist</span>
                          <span style="display:block;"><strong>Research Areas: </strong>Web Development</span>
                      </label>
                      <p class="attach-notify-btn-container">
                          <button type="button" onClick="document.getElementById('attachFileId').style.display='block';" 
                          class="w3-red w3-btn"><i style="margin-right:5px;" class="fa fa-paperclip" aria-hidden="true">
                          </i>Attach File</button>
                          
                          <button class="w3-blue w3-btn" type="button" 
                          onClick="document.getElementById('notifyMessageId').style.display='block';">
                          <i style="margin-right:5px;"  class="fa fa-bell" aria-hidden="true"></i>Notify</button>
                      </p>
                      <div style="clear:both;"></div>
                    </li>
                    
                  </ul>
                
            </form>    
             		
        </div>
        
	  <!-------------Notify Message Modal------------->
      <div id="notifyMessageId" class="w3-modal">
        <div class="w3-modal-content" style="top:100px;">
          <header class="w3-container w3-light-grey">
            <span onclick="document.getElementById('notifyMessageId').style.display='none'"
            class="w3-closebtn">&times;</span>
            <h2 style="text-align:center;color:#32CD99;font-family:lobster;font-weight:bold;font-size:50px;">Notifying message to Proofreader</h2>
          </header>
          
          <form class="w3-container w3-margin-top" name="notifyForm" style="display:block; margin:auto;" onSubmit="return false;">
                <p>
                  <label class="w3-label">Message: </label>
                  <textarea class="w3-input" name="message"></textarea>
                </p>
            
                <p>
  				<button type="button" class="w3-btn w3-teal w3-right w3-margin-top" id="notifyMessageSendId">Send</button>
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
    
    <?php include_once("footer.php"); ?>
    
    
    <script>
        document.getElementsByClassName("header-link")[1].classList.add("active");
    </script>
    
</body>
</html>
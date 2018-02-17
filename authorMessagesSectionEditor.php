<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/scrollBar.css">
<link rel="stylesheet" type="text/css" href="css/home.css">
<title>MIST Journal</title>

<link rel="stylesheet" type="text/css" href="css/home.css">

<style>

	@font-face {
		font-family:lobster;
		src:url(fonts/Lobster_1.3.otf);	
	}
	
	* {
		margin:0px;
		padding:0px;
		box-sizing:border-box;	
	}
	
	.textarea-icon-container ::-webkit-scrollbar {
		width: 12px;
	}
	
	.textarea-icon-container ::-webkit-scrollbar-track {
		-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
		border-radius: 10px;
	}
	 
	.textarea-icon-container ::-webkit-scrollbar-thumb {
		border-radius: 10px;
		-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
	}
	
	.author-section-editor-message-container {
		position:relative;
		top:110px;
		min-height:400px;
		width:80%;
		margin:0px auto 10px auto;	
	}
	
	.author-section-editor-message-container h1 {
		color:#32CD99;
		text-shadow:3px 0px 5px black;	
		font-size:50px;
		font-family:lobster;
	}
	
	.author-section-editor-message-container h1 {
		text-align:center;
	}	
	
	.author-section-editor-comment {
		width:100%;
		position:relative;
		background-color:#d3d3d3;
		border-radius:10px;
		padding:20px 40px;	
		margin-bottom:30px;
		/*box-shadow:3px 0px 10px black;*/
	}
	
	.author-comment {
		width:100%;
		background-color:#f1f1f1;
		position:relative;
		padding:20px 40px;
		border-radius:10px;	
		margin-bottom:30px;
		/*box-shadow:3px 0px 10px black;*/
	}
	
	.topNavbar {
		margin-top:-10px;	
	}
	
	strong {
		font-size:25px;	
		color:#542a0c;
	}
	
	small {
		font-size:20px;	
		color:#d2691e;
	}
	
	.textarea-icon-container {
		width:100%;
		height:60px;
		background-color:blue;
		position:relative;	
		top:110px;
	}
	
	textarea {
		resize:none;
		position:relative;	
		width:100%;
		height:100%;
		padding-right:40px;
	}
	
	.textarea-icon-container i {
		position:relative;
		cursor:pointer;
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<?php
	$seId = $_GET["seId"];
	$authorId = $_SESSION["authorLoginId"]; 
?>

<body>
	<?php include_once("authorNavigationBar.php"); ?>
    	
        
        <div class="author-section-editor-message-container" id="demo">
        

           	
        </div>
        
       <form id="authorMessageId" class="textarea-icon-container" style="width:80%;margin:0px auto 50px auto;" name="authorMessage" onSubmit="return false;">
          <textarea name="message" placeholder="Type your message..."></textarea>
          <p>
              <button class="w3-btn w3-green w3-right" style="margin-left:5px;" id="sendId">Send</button>
              <button class="w3-btn w3-red w3-right" onClick="document.getElementById('attachFileId').style.display='block'">Attach File</button>
          </p>
      </form>       
    <?php include_once("footer.php"); ?>
    
    <script>
		$(document).ready(function() {
			$("#sendId").click(function() {
				
				var messageJS = document.forms["authorMessage"]["message"].value;
				
				$.post(
					"authorSeAjaxMessage.php",
					{
						seId: <?php echo $seId; ?>,
						authorId: <?php echo $authorId; ?>,
						message: messageJS
					},
					function(output) {
						if(output.indexOf("success") != -1) {
							document.getElementById("authorMessageId").reset();
						}
					}
				);
				
			}); //----send button click()-----
		});
	</script>
    
    <script>
		$(document).ready(function() {
			setInterval(function() {
			$("#demo").load("authorMessagesSectionEditorLoad.php?seId=<?php echo $seId; ?>&authorId=<?php echo $authorId; ?>");				
			},1000);

		});
	</script>
    
    <script>
    	document.getElementsByClassName("header-link")[2].classList.add("active");
    </script>
</body>
</html>

	  <!-------------Attach File Modal------------->
      <div id="attachFileId" class="w3-modal">
        <div class="w3-modal-content" style="top:100px;">
          <header class="w3-container w3-light-grey">
            <span onclick="document.getElementById('attachFileId').style.display='none'"
            class="w3-closebtn">&times;</span>
            <h2 style="text-align:center;color:#32CD99;font-family:lobster;font-weight:bold;font-size:50px;">Attach File</h2>
          </header>
          
          <form enctype="multipart/form-data" method="post" id="fileForm" class="w3-container w3-margin-top" style="display:block; margin:auto; width:225px;" onSubmit="return false;">
          	  <input type="hidden" name="seid" value="<?php echo $seId; ?>">
              <input type="file" id="myFile" name="myFile" style="display:block;margin-bottom:10px;">
              <input class="w3-btn w3-green w3-btn-block" style="display:block;margin-bottom:10px;" type="button" id="upload" value="upload">
            
              <progress id="prog" value="0" min="0" max="100"></progress>
          </form>
          
          <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <button onclick="document.getElementById('attachFileId').style.display='none'" type="button" class="w3-btn w3-red w3-right">Cancel</button>
          </div>
        </div>
      </div>  
      
	<script>
	
	$(document).ready(function() {
	
		$("#upload").click(function() {
			
			var fd = new FormData(document.querySelector("#fileForm"));
			fd.append("seId", <?php echo $seId; ?>);
			fd.append("authorId", <?php echo $authorId; ?>);
			$.ajax({
			  url: "authorSeAjaxArticle.php",
			  type: "POST",
			  data: fd,
			  processData: false,  // tell jQuery not to process the data
			  contentType: false   // tell jQuery not to set contentType
			}); 
				
		}); //---click()---
		
	}); //--ready()------
	
	
		
	</script>
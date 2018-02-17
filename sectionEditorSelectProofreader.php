<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>
<?php
	$seId = $_SESSION["seLoginId"];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Select Proofreader</title>

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body>
	
    <?php
		$sql = "SELECT * FROM proofreader";
		$result = mysqli_query($connection,$sql);
	?>

	<?php include_once("sectionEditorNavigationBar.php"); ?>
    
    	<div class="editor-select-section-editor-container">
        	
            <h1>Select Proofreader</h1>
            
            <form class="editor-select-section-editor-form">
              
                  <ul class="w3-ul">
                  
                  <?php while($row = mysqli_fetch_assoc($result)) { ?>
                    <li class="w3-padding-16">
                      <input style="margin-right:20px;float:left;" class="w3-radio selectP" type="radio" name="gender" value="<?php echo $row["id"]; ?>">
                      <label class="w3-validate" style="width:500px;float:left; display:block;margin-top:-5px;">
                          <strong style="font-size:30px;"><?php echo $row["pFn"]." ".$row["pLn"]; ?></strong>
                          <span style="display:block;"><strong>Mobile: </strong><?php echo $row["pTel"]; ?></span>
                          <span style="display:block;"><strong>Email: </strong><?php echo $row["pEmail"]; ?></span>
                      </label>
                      <p class="attach-notify-btn-container">
                          <button class="w3-blue w3-btn" type="button" onClick="document.getElementById('notifySeMessageId').style.display='block'"><i style="margin-right:5px;"  class="fa fa-bell" aria-hidden="true"></i>Notify & Attach File</button>
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
      
	  <!-------------Notify Message To Section Editor Modal------------->
      <div id="notifySeMessageId" class="w3-modal">
        <div class="w3-modal-content" style="padding-bottom:20px;">
          <header class="w3-container w3-light-grey">
            <span onclick="document.getElementById('notifySeMessageId').style.display='none'"
            class="w3-closebtn">&times;</span>
            <h2 style="text-align:center;color:#32CD99;font-family:lobster;font-weight:bold;font-size:50px;">Notify Section Editor & Attach File</h2>
          </header>
          
          <form enctype="multipart/form-data" class="w3-container w3-margin-top" name="notifySeForm" id="notifySeId" style="display:block; margin:auto;" method="post" onSubmit="return false;">
                
                <p><label class="w3-label">Author ID:</label>
                <input class="w3-input" type="text" name="authorId"></p><br/>
                
                <p>
                  <label class="w3-label">Message: </label>
                  <textarea class="w3-input" name="message"></textarea>
                </p><br/>
               
                
              <div class="w3-margin-top">
              	  <label class="w3-label">Attach Copyedited File(Final): </label>
                  <input type="file" id="myFile" name="myFile">
              </div>
            
                <p style="display:block;width:200px;margin:auto;">
  				<button style="width:100%;" type="button" class="w3-btn w3-teal w3-right w3-margin-top" id="notifySeMessageSendId">Send</button>
                </p>
          </form>
        </div>
      </div> 

      <script>
	  	$(document).ready(function() {
			
			/*$("#notifySeMessageSendId").click(function() {
				
				var radioBtnObj = document.getElementsByClassName("selectP");
				
				for(var i=0; i<radioBtnObj.length; i++) {
					if(radioBtnObj[i].checked == true) {
						var pIdJS = radioBtnObj[i].value;
					}
				}
				
				//alert(ceIdJS);
				
				var fd = new FormData(document.querySelector("#notifySeId"));
				fd.append("pId", pIdJS);
				fd.append("seId", <?php //echo $seId; ?>);
				$.ajax({
				  url: "sectionEditorNotifyP.php",
				  type: "POST",
				  data: fd,
				  processData: false,  // tell jQuery not to process the data
				  contentType: false,   // tell jQuery not to set contentType
				  success: function(e){
						alert(e);
				  }
				}); 
				
			});*/ //---Notify Button click()-----
			
			$("#notifySeMessageSendId").click(function() {
			
				var radioBtnObj = document.getElementsByClassName("selectP");
				
				for(var i=0; i<radioBtnObj.length; i++) {
					if(radioBtnObj[i].checked == true) {
						var pIdJS = radioBtnObj[i].value;
					}
				}	
				
				var fd = new FormData(document.querySelector("#notifySeId"));
				fd.append("pId", pIdJS);
				fd.append("seId", <?php echo $seId; ?>);
				$.ajax({
				  url: "sectionEditorNotifyP.php",
				  type: "POST",
				  data: fd,
				  processData: false,  // tell jQuery not to process the data
				  contentType: false,   // tell jQuery not to set contentType
				  success: function(e){
						alert(e);
				  }
				}); 		
				
			}); //--click()
				
		}); //------ready()------
	  </script>
<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>
<?php
	$se_id = $_GET["se_id"];
?>

<?php  
	$editorLoginId = $_SESSION["editorLoginId"];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/scrollBar.css">
<link rel="stylesheet" type="text/css" href="css/home.css">
<title>Full Conversession with Section Editor</title>

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
	
	.editor-section-editor-message-container {
		position:relative;
		top:110px;
		min-height:400px;
		width:80%;
		margin:0px auto 10px auto;	
	}
	
	.editor-section-editor-message-container h1 {
		color:#32CD99;
		text-shadow:3px 0px 5px black;	
		font-size:50px;
		font-family:lobster;
	}
	
	.editor-section-editor-message-container h1 {
		text-align:center;
	}	
	
	.editor-section-editor-comment {
		width:100%;
		position:relative;
		background-color:#d3d3d3;
		border-radius:10px;
		padding:20px 40px;	
		margin-bottom:30px;
		/*box-shadow:3px 0px 10px black;*/
	}
	
	.editor-comment {
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
	}
	
	textarea {
		resize:none;
		position:absolute;	
		width:100%;
		height:100%;
		padding-right:40px;
	}
	
	.textarea-icon-container i {
		position:absolute;
		right:20px;
		bottom:10px;
		cursor:pointer;
	}
</style>
</head>

<?php
	$editorSelectMessageSe = "SELECT se_article,editor_article,se_message,editor_message,message_time FROM ";
	$editorSelectMessageSe .= "editor_se_message WHERE se_id={$se_id} AND editor_id={$editorLoginId} ORDER BY id DESC";
	
	$resultEditorSelectMessageSe = mysqli_query($connection,$editorSelectMessageSe);
?>

<?php  
	$selectSeName = "SELECT seFn,seLn FROM section_editor WHERE id={$se_id}";
	$resultSeName = mysqli_query($connection,$selectSeName);
	
	$rowSeName = mysqli_fetch_assoc($resultSeName);
?>

<?php  
	$selectEditorName = "SELECT fn,ln FROM editor WHERE id={$editorLoginId}";
	$resultEditorName = mysqli_query($connection,$selectEditorName);
	
	$rowEditorName = mysqli_fetch_assoc($resultEditorName);
?>

<body>
	<?php include_once("editorNavigationBar.php"); ?>
    	
        
        <div class="editor-section-editor-message-container">
        
          <h1>Full conversession with Section Editor</h1>  
          
          <!--<a name="author-bottom"></a>-->  
          
<?php 
	while($rowEditorSeMessage = mysqli_fetch_assoc($resultEditorSelectMessageSe)) { 
?>
          
          <?php if($rowEditorSeMessage["se_message"] != NULL) { ?>
          <div class="editor-section-editor-comment w3-card-4">
              <strong style="display:block;"><?php echo $rowSeName["seFn"]." ".$rowSeName["seLn"]; ?>(Section Editor)</strong>
              <small style="display:block;"><?php echo $rowEditorSeMessage["message_time"]; ?></small>
              <p><?php echo $rowEditorSeMessage["se_message"]; ?></p>
          </div>
          <?php } ?>

       	
          <?php if($rowEditorSeMessage["editor_message"] != NULL) { ?>
          <div class="editor-comment w3-card-4">
              <strong style="display:block;"><?php echo $rowEditorName["fn"]." ".$rowEditorName["ln"]; ?>(Editor)</strong>
              <small style="display:block;"><?php echo $rowEditorSeMessage["message_time"]; ?></small>
              <p><?php echo $rowEditorSeMessage["editor_message"]; ?></p>
          </div>
          <?php } ?>
          
<?php } ?>  
          
          <div class="textarea-icon-container">
          	  <textarea placeholder="Type your message..."></textarea>
              <i class="fa fa-paperclip w3-text-red w3-xlarge" aria-hidden="true" title="attach-file"></i>
          </div>
           	
        </div>
        
        
    <?php include_once("footer.php"); ?>
    
    <script>
    	document.getElementsByClassName("header-link")[2].classList.add("active");
    </script>
</body>
</html>
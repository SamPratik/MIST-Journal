<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>

<?php
	$seId = $_SESSION["seLoginId"];
	$eId = $_GET["eId"];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/scrollBar.css">
<link rel="stylesheet" type="text/css" href="css/home.css">
<title>Full Conversession with Copyeditor</title>

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
	
	.editor-copy-editor-message-container {
		position:relative;
		top:110px;
		min-height:400px;
		width:80%;
		margin:0px auto 10px auto;	
	}
	
	.editor-copy-editor-message-container h1 {
		color:#32CD99;
		text-shadow:3px 0px 5px black;	
		font-size:50px;
		font-family:lobster;
	}
	
	.editor-copy-editor-message-container h1 {
		text-align:center;
	}	
	
	.editor-copy-editor-comment {
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
	$sql = "SELECT fn,ln,seFn,seLn,se_message,editor_message,se_article,editor_article FROM editor_se_message AS m, section_editor AS s, editor AS e WHERE s.id={$seId} AND e.id={$eId} AND e.id=m.editor_id AND m.se_id=s.id";
	$result = mysqli_query($connection,$sql);
?>

<body>
	<?php include_once("sectionEditorNavigationBar.php"); ?>
    	
        
        <div class="editor-copy-editor-message-container">
        
          <h1>Full conversession with Editor</h1>  
          
          <!--<a name="author-bottom"></a>-->  
          <?php while($row = mysqli_fetch_assoc($result)) { ?>
          
			  <?php if($row["se_message"] != NULL) { ?>
                  <div class="editor-copy-editor-comment w3-card-4">
                      <strong style="display:block;"><?php echo $row["seFn"]." ".$row["seLn"]; ?>(Section Editor)</strong>
                      <small style="display:block;">SEPTEMBER 14, 2013</small>
                      <p><?php echo $row["se_message"]; ?></p>
                  </div>
              <?php } ?>
          
			  <?php if($row["editor_message"] != NULL) { ?>
                  <div class="editor-comment w3-card-4">
                      <strong style="display:block;"><?php echo $row["fn"]." ".$row["ln"]; ?>(Editor)</strong>
                      <small style="display:block;">SEPTEMBER 17, 2013</small>
                      <p><?php echo $row["editor_message"]; ?></p>
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
    	document.getElementsByClassName("header-link")[1].classList.add("active");
    </script>
</body>
</html>
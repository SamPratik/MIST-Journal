<?php include_once("dbConnector.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Message threads(Editor)</title>

<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" type="text/css" href="css/scrollBar.css">

<style>
	* {
		padding:0px; 
		margin:0px;
		box-sizing:border-box;	
	}
	
	@font-face {
		font-family:lobster;
		src:url(fonts/Lobster_1.3.otf);	
	}
	
	.topNavbar {
		margin-top:-10px;	
	}
	
	.editor-section-editor-message-thread {
		width:80%;
		min-height:400px;
		position:relative;
		top:110px;
		margin:0px auto 10px auto;	
	}
	
	.editor-section-editor-message-thread li {
		height:100px;	
		position:relative;
	}
	
	.editor-section-editor-message-thread a {
		position:absolute;
		top:0px;
		left:0px;
		bottom:0px;
		right:0px;
		margin:8px 0px 0px 16px;
		color:black;
	}
	
	h1 {
		font-family:lobster;
		font-size:50px;
		color:#32CD99;
		text-align:center;
	}
</style>
</head>

<body>

	<?php include_once("sectionEditorNavigationBar.php"); ?>
    
    <?php
		$sql = "SELECT e.id,e.fn,e.ln,e.email,e.tel FROM editor_se_message AS m,editor AS e WHERE e.id=m.editor_id GROUP BY e.fn ORDER BY m.id DESC";
		$result = mysqli_query($connection,$sql);
	?>
    
    <div class="editor-section-editor-message-thread">
    
    	  <h1>Messages of Editors</h1>
          
          <ul class="w3-ul">
          	<?php while($row = mysqli_fetch_assoc($result)) { ?>
            <li class="w3-hover-light-grey">
              <a class="w3-hover-light-grey" href="sectionEditorFullConversessionEditor.php?eId=<?php echo $row["id"]; ?>">
                  <span class="w3-xlarge"><?php echo $row["fn"]." ".$row["ln"]; ?></span><br>
                  <span><?php echo $row["tel"]; ?></span><br/>
                  <span><?php echo $row["email"]; ?></span>
              </a>
            </li>
            <?php } ?>
          </ul>   
           	
    </div>
    
    <?php include_once("footer.php"); ?>

	<script>
		document.getElementsByClassName("header-link")[1].classList.add("active");
	</script>
</body>
</html>
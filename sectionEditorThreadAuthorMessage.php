<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Message threads(Authors)</title>

<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
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

<?php
	$seLoginId = $_SESSION["seLoginId"];
?>

<?php
	$sql = "SELECT a.fn,a.ln,a.tel,a.id,a.email,s.seFn,s.seLn FROM author AS a, section_editor AS s,se_author_message AS m WHERE a.id=m.author_id AND s.id=m.se_id AND s.id={$seLoginId} GROUP BY seFn";
	$result = mysqli_query($connection,$sql);
?>

<body>

	<?php include_once("sectionEditorNavigationBar.php"); ?>
    
    
    
    <div class="editor-section-editor-message-thread">
    
    	  <h1>Messages of Authors</h1>
          
          <ul class="w3-ul">
          
          <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <li class="w3-hover-light-grey">
              <a class="w3-hover-light-grey" href="sectionEditorFullConversessionAuthor.php?authorId=<?php echo $row["id"]; ?>">
                  <strong class="w3-xlarge"><?php echo $row["seFn"]." ".$row["seLn"]; ?></strong><br>
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
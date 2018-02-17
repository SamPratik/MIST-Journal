<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Articles From Editor</title>

<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/home.css">

<style>
	
	* {
		margin:0px;
		padding:0px;
		box-sizing:border-box;	
	}
	
	.editor-submitted-articles-container {
		width:80%;
		display:block;
		margin: 0px auto 10px auto;
		min-height:400px;	
		position:relative;
		top:110px;
		text-align:justify;
	}
	
	.editor-submitted-articles-container li {
		/*position:relative;*/	
	}
	
	.editor-submitted-articles-container a.select-se {
		margin-top:20px;
		float:right;
	}
	
	.editor-submitted-articles-container h2 {
		color:black;
		font-weight:550;	
	}
</style>
</head>

<?php
	$seLoginId = $_SESSION["seLoginId"];
	$sql = "SELECT c.ceFn,c.ceLn,a.fn,a.ln,i.title,i.abstract,article FROM copy_editor AS c, author AS a,author_index_article AS i, ce_send_article_to_se AS cs, section_editor AS s WHERE cs.author_id=a.id AND cs.ce_id=c.id AND cs.author_id=i.author_id AND s.id={$seLoginId}";
	
	$result = mysqli_query($connection,$sql);
?>

<body>

	<?php include_once("sectionEditorNavigationBar.php"); ?>
    
    <div class="editor-submitted-articles-container">
    
      <ul class="w3-ul">
      
      	<?php while($row = mysqli_fetch_assoc($result)) { ?>
        <li class="w3-padding-16">
          <?php //$authorId = $rowEditorSubmittedArticle["author_id"]; ?>
          <h2>Author Name: <span><?php echo $row["fn"]." ".$row["ln"]; ?></span></h2>
          <p><strong>Title: </strong><a href="uploads/<?php echo $row["article"]; ?>"><?php echo $row["title"]; ?></a></p>
          <p><strong>Abstract: </strong><span><?php echo $row["abstract"]; ?></span></p>
          <p><strong>Copyedited by: </strong><span><?php echo $row["ceFn"]." ".$row["ceLn"]; ?></span></p>
          <a class="w3-btn w3-red select-se" href="sectionEditorSelectProofreader.php">
          <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Select Proofreader</a>
          <div style="clear:both;"></div>
        </li>
        <?php } ?>
        
      </ul>  
      
    </div> 
    
    <?php include_once("footer.php"); ?>
    
    <script>
        document.getElementsByClassName("header-link")[3].classList.add("active");
    </script>

</body>
</html>

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

<body>

	<?php include_once("sectionEditorNavigationBar.php"); ?>
    
    <div class="editor-submitted-articles-container">
    
      <ul class="w3-ul">
      
        <li class="w3-padding-16">
          <?php //$authorId = $rowEditorSubmittedArticle["author_id"]; ?>
          <h2>Author Name: <span>Pratik Anwar</span></h2>
          <p><strong>Title: </strong><a href="#">Title1.pdf</a></p>
          <p><strong>Abstract: </strong><span>Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract</span></p>
          <a class="w3-btn w3-red select-se" href="sectionEditorSelectCopyeditor.php">
          <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Select Copyeditor</a>
          <div style="clear:both;"></div>
        </li>
        
        <li class="w3-padding-16">
          <?php //$authorId = $rowEditorSubmittedArticle["author_id"]; ?>
          <h2>Author Name: <span>Pratik Anwar</span></h2>
          <p><strong>Title: </strong><a href="#">Title1.pdf</a></p>
          <p><strong>Abstract: </strong><span>Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract</span></p>
          <a class="w3-btn w3-red select-se" href="sectionEditorSelectCopyeditor.php">
          <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Select Copyeditor</a>
          <div style="clear:both;"></div>
        </li>
        
        <li class="w3-padding-16">
          <?php //$authorId = $rowEditorSubmittedArticle["author_id"]; ?>
          <h2>Author Name: <span>Pratik Anwar</span></h2>
          <p><strong>Title: </strong><a href="#">Title1.pdf</a></p>
          <p><strong>Abstract: </strong><span>Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract</span></p>
          <a class="w3-btn w3-red select-se" href="sectionEditorSelectCopyeditor.php">
          <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Select Copyeditor</a>
          <div style="clear:both;"></div>
        </li>
        
      </ul>  
      
    </div> 
    
    <?php include_once("footer.php"); ?>
    
    <script>
        document.getElementsByClassName("header-link")[3].classList.add("active");
    </script>

</body>
</html>
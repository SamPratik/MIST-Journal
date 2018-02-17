<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Articles From Section Editor</title>

<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/reviewerReviewArticle.css">
<link type="text/css" rel="stylesheet" href="css/home.css">

<style>
	.topNavbar {
		margin-top:-10px;	
	}
	
	li button {
		margin-right:5px;	
	}
</style>
</head>

<body>

	<?php include_once("proofreaderNavigationBar.php"); ?>
    
    <div class="reviewer-review-container">
    	<h1>Articles From Author</h1>
        
         <ul class="w3-ul">
            <li class="w3-padding-16">
              <p><strong class="w3-large">Author Names:</strong>&nbsp;&nbsp;&nbsp; A, B, C</p>
              <p><strong>Article Title: </strong>&nbsp;&nbsp;&nbsp;<a href="#">SomeTitle1.docx</a></p>
              <p>
              <button type="button" class="w3-btn w3-red w3-right" 
              onClick="document.getElementById('attachFileId').style.display='block'">
              <i class="fa fa-paperclip" aria-hidden="true"></i> Author Comments</button>
              </p>
              <div style="clear:both;"></div>
            </li>
            <li class="w3-padding-16">
              <p><strong class="w3-large">Author Names:</strong>&nbsp;&nbsp;&nbsp; A, B, C</p>
              <p><strong>Article Title: </strong>&nbsp;&nbsp;&nbsp;<a href="#">SomeTitle1.docx</a></p>
              <p>
              <button type="button" class="w3-btn w3-red w3-right" 
              onClick="document.getElementById('attachFileId').style.display='block'">
              <i class="fa fa-paperclip" aria-hidden="true"></i> Author Comments</button>
              </p>
              <div style="clear:both;"></div>
            </li>
            <li class="w3-padding-16">
              <p><strong class="w3-large">Author Names:</strong>&nbsp;&nbsp;&nbsp; A, B, C</p>
              <p><strong>Article Title: </strong>&nbsp;&nbsp;&nbsp;<a href="#">SomeTitle1.docx</a></p>
              <p>
              <button type="button" class="w3-btn w3-red w3-right" 
              onClick="document.getElementById('attachFileId').style.display='block'">
              <i class="fa fa-paperclip" aria-hidden="true"></i> Author Comments</button>
              </p>
              <div style="clear:both;"></div>
            </li>
         </ul>    	
    </div>
    
    <?php include_once("footer.php"); ?>
	  
      <script>
	  	  document.getElementsByClassName("header-link")[1].classList.add("active");
	  </script>
</body>
</html>
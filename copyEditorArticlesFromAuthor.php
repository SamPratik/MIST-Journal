<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Articles From Author</title>

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

	<?php include_once("copyEditorNavigationBar.php"); ?>
    
    <div class="reviewer-review-container">
    	<h1>Copyeditable Article</h1>
        
         <ul class="w3-ul">
            <li class="w3-padding-16">
              <p><strong class="w3-large">Author Names:</strong>&nbsp;&nbsp;&nbsp; D, E, F</p>
              <p><strong>Article Title: </strong>&nbsp;&nbsp;&nbsp;<a href="#">SomeTitle2.docx</a>
              <button type="button" class="w3-btn w3-green w3-right" 
              onClick="document.getElementById('notifyMessageId').style.display='block';">
              <i class="fa fa-bell" aria-hidden="true"></i> Comments From Author</button>
              </p>
              <div style="clear:both;"></div>
            </li>
            
            <li class="w3-padding-16">
              <p><strong class="w3-large">Author Names:</strong>&nbsp;&nbsp;&nbsp; D, E, F</p>
              <p><strong>Article Title: </strong>&nbsp;&nbsp;&nbsp;<a href="#">SomeTitle2.docx</a>
              <button type="button" class="w3-btn w3-green w3-right" 
              onClick="document.getElementById('notifyMessageId').style.display='block';">
              <i class="fa fa-bell" aria-hidden="true"></i> Comments From Author</button>
              </p>
              <div style="clear:both;"></div>
            </li>
            
            <li class="w3-padding-16">
              <p><strong class="w3-large">Author Names:</strong>&nbsp;&nbsp;&nbsp; D, E, F</p>
              <p><strong>Article Title: </strong>&nbsp;&nbsp;&nbsp;<a href="#">SomeTitle2.docx</a>
              <button type="button" class="w3-btn w3-green w3-right" 
              onClick="document.getElementById('notifyMessageId').style.display='block';">
              <i class="fa fa-bell" aria-hidden="true"></i> Comments From Author</button>
              </p>
              <div style="clear:both;"></div>
            </li>
         </ul>    	
    </div>
    
    <?php include_once("footer.php"); ?>
	  
      <script>
	  	  document.getElementsByClassName("header-link")[2].classList.add("active");
	  </script>
</body>
</html>
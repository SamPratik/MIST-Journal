<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Publish Article</title>

<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/editorPublishArticle.css">
<link type="text/css" rel="stylesheet" href="css/home.css">

<style>
	.topNavbar {
		margin-top:-10px;	
	}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body>

	<?php
		$eId = $_SESSION["editorLoginId"];
		$sql = "SELECT a.fn,a.ln,a.id,s.seFn,s.seLn,i.title,article FROM author AS a,section_editor AS s,author_index_article AS i,se_send_article_to_editor AS se,editor AS e WHERE a.id=se.author_id AND e.id={$eId} AND se.se_id=s.id AND se.author_id=i.author_id";
		
		$result = mysqli_query($connection,$sql);
	?>

	<?php include_once("editorNavigationBar.php"); ?>

	<div class="reviewer-publish-article-container">
    	<h1>Publish Article</h1>
        
         <ul class="w3-ul">
         	<?php while($row = mysqli_fetch_assoc($result)) { ?>
            <li class="w3-padding-16">
              <p><strong class="w3-large">Author Names:</strong>&nbsp;&nbsp;&nbsp; <?php echo $row["fn"]." ".$row["ln"]; ?></p>
              <p><strong class="w3-large">Author ID:</strong>&nbsp;&nbsp;&nbsp; <?php echo $row["id"]; ?></p>
              <p><strong class="w3-large">Article Title:</strong>&nbsp;&nbsp;&nbsp; <a href="uploads/<?php echo $row["article"]; ?>"><?php echo $row["title"]; ?></a>
              <p><strong class="w3-large">Sent By:</strong>&nbsp;&nbsp;&nbsp; <?php echo $row["seFn"]." ".$row["seLn"]; ?></p>
              <button class="w3-btn w3-blue w3-right" onclick="document.getElementById('publish').style.display='block'">
              Publish</button></p>
              <div style="clear:both;"></div>
            </li>
            <?php } ?>
         </ul>
         
    </div>
    
      <div id="publish" class="w3-modal">
        <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
    
          <div class="w3-center"><br>
            <span onclick="document.getElementById('publish').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
          </div>
    
            <form enctype="multipart/form-data" method="post" class="w3-container" id="publishFormId" name="publishForm" onSubmit="return false;">
              <p>
              <label>Author ID</label>
              <input class="w3-input w3-border" name="authorId" type="text"></p>
              <p>
              <p>
              <label>Volume Number</label>
              <input class="w3-input w3-border" name="volume" type="text"></p>
              <p>
              <p>
              <label>Issue Number</label>
              <input class="w3-input w3-border" name="issue" type="text"></p>
              <p>
              <p>
              <label>Order Number</label>
              <input class="w3-input w3-border" name="order" type="text"></p>
              <p>
              
              <div class="w3-margin-top">
              	  <label class="w3-label">Attach File(Final): </label>
                  <input type="file" id="myFile" name="myFile">
              </div><br/>
              <button type="button" id="publishBtn" class="w3-btn w3-blue" style="display:block; margin:auto;">Submit</button><br/>
            </form>
    
        </div>
      </div>

	<?php include_once("footer.php"); ?>
    
    <script>
		document.getElementsByClassName("header-link")[3].classList.add("active");
	</script>

</body>
</html>

<script>
		  $(document).ready(function() {
			
			  $("#publishBtn").click(function() {
				  
				var fd = new FormData(document.querySelector("#publishFormId"));
				$.ajax({
				  url: "editorPublishProcess.php",
				  type: "POST",
				  data: fd,
				  processData: false,  // tell jQuery not to process the data
				  contentType: false,   // tell jQuery not to set contentType
				  success: function(e){
						alert(e);
				  }
				});				  
				  
			  }); //---click()
			  
		  }); //---ready()
</script>
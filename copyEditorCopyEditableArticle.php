<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>

<?php
	$ceId = $_SESSION["ceLoginId"];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Copyeditable Article</title>

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body>

<?php
	$sql = "SELECT a.fn,a.ln,a.id,s.id AS se_id,i.title,s.seFn,s.seLn,sa.article,i.author_id FROM author AS a, author_index_article AS i, author_submitted_article AS sa, section_editor AS s,se_select_ce AS sc WHERE a.id=sc.author_id AND s.id=sc.se_id AND i.author_id=sc.author_id AND sa.author_id=sc.author_id AND sc.ce_id={$ceId} ORDER BY i.id DESC";
	
	$result = mysqli_query($connection,$sql);
?>

	<?php include_once("copyEditorNavigationBar.php"); ?>
    
    <div class="reviewer-review-container">
    	<h1>Copyeditable Article</h1>
        
         <ul class="w3-ul">
         
         <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <li class="w3-padding-16">
              <?php $authorId = $row["author_id"]; ?>
              <p><strong class="w3-large">Author Names:</strong>&nbsp;&nbsp;&nbsp; <?php echo $row["fn"]." ".$row["ln"]; ?></p>
              <p><strong class="w3-large">Author ID:</strong>&nbsp;&nbsp;&nbsp; <?php echo $row["id"]; ?></p>
              <p><strong>Article Title: </strong>&nbsp;&nbsp;&nbsp;<a href="uploads/<?php echo $row["article"]; ?>"><?php echo $row["title"]; ?></a></p>
              <p><strong class="w3-large">Section Editor ID:</strong>&nbsp;&nbsp;&nbsp; <?php echo $row["se_id"]; ?></p>
              <!--<p><strong class="w3-large">Sent By:</strong>&nbsp;&nbsp;&nbsp; <?php //echo $row["seFn"]." ".$row["seLn"]; ?>(Section Editor)
              <button type="button" class="w3-btn w3-red w3-right" 
              onClick="document.getElementById('attachFileId').style.display='block'">
              <i class="fa fa-paperclip" aria-hidden="true"></i> Attach File</button>
              
              <button type="button" class="w3-btn w3-green w3-right" 
              onClick="document.getElementById('notifyAuthorMessageId').style.display='block'">
              <i class="fa fa-bell" aria-hidden="true"></i> Notify Author</button>
              </p>-->
              
              <p><strong class="w3-large">Sent By:</strong>&nbsp;&nbsp;&nbsp; <?php echo $row["seFn"]." ".$row["seLn"]; ?>(Section Editor)
              
              <button type="button" class="w3-btn w3-green w3-right" 
              onClick="document.getElementById('notifySeMessageId').style.display='block'">
              <i class="fa fa-paperclip" aria-hidden="true"></i> Notify & Attach File to Section Editor</button>
              
              <button type="button" class="w3-btn w3-red w3-right" 
              onClick="document.getElementById('notifyMessageId').style.display='block'">
              <i class="fa fa-paperclip" aria-hidden="true"></i> Notify & Attach File to Auhtor</button>
              
              </p>
              
              <div style="clear:both;"></div>
            </li>
          <?php } ?>
         </ul>    	
    </div>
    
    <?php include_once("footer.php"); ?>
	  
      <script>
	  	  document.getElementsByClassName("header-link")[2].classList.add("active");
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
          
          <form enctype="multipart/form-data" class="w3-container w3-margin-top" name="notifySeForm" id="notifySeId" style="display:block; margin:auto;" onSubmit="return false;">
                
                <p><label class="w3-label">Section Editor ID:</label>
                <input class="w3-input" type="text" name="seId"></p><br/>
                
                <p><label class="w3-label">Author ID:</label>
                <input class="w3-input" type="text" name="seAuthorId"></p><br/>
                
                <p>
                  <label class="w3-label">Message: </label>
                  <textarea class="w3-input" name="seMessage"></textarea>
                </p><br/>
               
                
              <div class="w3-margin-top">
              	  <label class="w3-label">Attach Copyedited File(Final): </label>
                  <input type="file" id="myFile" name="seFile">
              </div>
            
                <p style="display:block;width:200px;margin:auto;">
  				<button style="width:100%;" type="button" class="w3-btn w3-teal w3-right w3-margin-top" id="notifySeMessageSendId">Send</button>
                </p>
          </form>
        </div>
      </div> 
      
      <script>
		  
		  $(document).ready(function() {
			
			  $("#notifySeMessageSendId").click(function() {
				  
				var fd1 = new FormData(document.querySelector("#notifySeId"));
				fd1.append("ceId", <?php echo $ceId; ?>);
				$.ajax({
				  url: "copyEditorSeNotifyProcess.php",
				  type: "POST",
				  data: fd1,
				  processData: false,  // tell jQuery not to process the data
				  contentType: false,   // tell jQuery not to set contentType
				  success: function(e){
						alert(e);
				  }
				});				  
				  
			  }); //---click()
			  
		  }); //---ready()
		  
	  </script>


	  <!-------------Notify Message To Author Modal------------->
      <div id="notifyMessageId" class="w3-modal">
        <div class="w3-modal-content" style="padding-bottom:20px;">
          <header class="w3-container w3-light-grey">
            <span onclick="document.getElementById('notifyMessageId').style.display='none'"
            class="w3-closebtn">&times;</span>
            <h2 style="text-align:center;color:#32CD99;font-family:lobster;font-weight:bold;font-size:50px;">Notify Author & Attach File</h2>
          </header>
          
          <form enctype="multipart/form-data" method="post" class="w3-container w3-margin-top" name="notifyAuthorForm" id="notifyIdForm" style="display:block; margin:auto;" onSubmit="return false;">
                
                <p><label class="w3-label">Author ID:</label>
                <input class="w3-input" name="authorId" type="text"></p><br/>
                
                <p>
                  <label class="w3-label">Message: </label>
                  <textarea class="w3-input" name="authorMessage"></textarea>
                </p><br/>
               
                
              <div class="w3-margin-top">
              	  <label class="w3-label">Attach File(initial): </label>
                  <input type="file" id="myFile" name="authorFile">
              </div>
            
                <p style="display:block;width:200px;margin:auto;">
  				<button style="width:100%;" type="button" class="w3-btn w3-teal w3-right w3-margin-top" id="notifyAuthorMessageSendId">Send</button>
                </p>
          </form>
        </div>
      </div> 
      
      <script>
		  
		  $(document).ready(function() {
			
			  $("#notifyAuthorMessageSendId").click(function() {
				
				var authorIdJS = document.forms["notifyAuthorForm"]["authorId"].value;
				  
				var fd = new FormData(document.querySelector("#notifyIdForm"));
				fd.append("ceId", <?php echo $ceId; ?>);
				fd.append("authorId", authorIdJS);
				$.ajax({
				  url: "copyeditorAuthorNotifyProcess.php",
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
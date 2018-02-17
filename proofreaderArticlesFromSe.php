<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Articles From Section Editor</title>

<link rel="stylesheet" href="css/w3.css">
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

<?php
	$pId = $_SESSION["pLoginId"];
	$sql = "SELECT a.fn,a.id,s.id AS se_id,a.ln,s.seFn,s.seLn,i.title,article FROM author AS a,section_editor AS s,author_index_article AS i,se_select_p AS sp WHERE sp.p_id={$pId} AND sp.se_id=s.id AND sp.author_id=a.id AND i.author_id=sp.author_id";
	$result = mysqli_query($connection,$sql);
?>

<body>

	<?php include_once("proofreaderNavigationBar.php"); ?>
    
    <div class="reviewer-review-container">
    	<h1>Articles From Section Editor</h1>
        
         <ul class="w3-ul">
         
         	<?php while($row = mysqli_fetch_assoc($result)) { ?>
            <li class="w3-padding-16">
              <p><strong class="w3-large">Author Names:</strong>&nbsp;&nbsp;&nbsp; <?php echo $row["fn"]." ".$row["ln"]; ?></p>
              <p><strong class="w3-large">Author ID:</strong>&nbsp;&nbsp;&nbsp; <?php echo $row["id"]; ?></p>
              <p><strong>Article Title: </strong>&nbsp;&nbsp;&nbsp;<a href="uploads/<?php echo $row["article"]; ?>"><?php echo $row["title"]; ?></a></p>
              <p><strong class="w3-large">Sent By:</strong>&nbsp;&nbsp;&nbsp; <?php echo $row["seFn"]." ".$row["seLn"]; ?></p>
              <p><strong class="w3-large">Section Editor ID:</strong>&nbsp;&nbsp;&nbsp; <?php echo $row["se_id"]; ?></p>
              <p>
              <button type="button" class="w3-btn w3-red w3-right" 
              onClick="document.getElementById('notifyMessageId').style.display='block'">
              <i class="fa fa-paperclip" aria-hidden="true"></i> Notify & Attach File to Section Editor</button>
              
              <!--<button type="button" class="w3-btn w3-green w3-right" 
              onClick="document.getElementById('notifyMessageId').style.display='block';">
              <i class="fa fa-bell" aria-hidden="true"></i> Final Comment to Layouteditor</button>-->
              </p>
              <div style="clear:both;"></div>
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

	  <!-------------Notify Message To Section Editor Modal------------->
      <div id="notifyMessageId" class="w3-modal">
        <div class="w3-modal-content" style="padding-bottom:20px;">
          <header class="w3-container w3-light-grey">
            <span onclick="document.getElementById('notifyMessageId').style.display='none'"
            class="w3-closebtn">&times;</span>
            <h2 style="text-align:center;color:#32CD99;font-family:lobster;font-weight:bold;font-size:50px;">Notify Section Editor & Attach File</h2>
          </header>
          
          <form enctype="multipart/form-data" method="post" class="w3-container w3-margin-top" name="notifyAuthorForm" id="notifyIdForm" style="display:block; margin:auto;" onSubmit="return false;">
                
                <p><label class="w3-label">Author ID:</label>
                <input class="w3-input" name="authorId" type="text"></p><br/>
                
                <p><label class="w3-label">Section Editor ID:</label>
                <input class="w3-input" name="seId" type="text"></p><br/>
                
                <p>
                  <label class="w3-label">Message: </label>
                  <textarea class="w3-input" name="message"></textarea>
                </p><br/>
               
                
              <div class="w3-margin-top">
              	  <label class="w3-label">Attach File(initial): </label>
                  <input type="file" id="myFile" name="myFile">
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
				
				  
				var fd = new FormData(document.querySelector("#notifyIdForm"));
				fd.append("pId", <?php echo $pId; ?>);
				$.ajax({
				  url: "proofreaderNotifySeProcess.php",
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
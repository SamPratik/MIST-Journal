<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>
<?php $seId = $_SESSION["seLoginId"]; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Articles From Reviewers</title>

<link rel="stylesheet" href="css/w3.css">
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
	
	.topNavbar {
		margin-top:-18px;	
	}
	
	.btnBar a {
		margin-right:5px;	
	}
	
	.btnBar button {
		margin-right:5px;	
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body>

<?php
	
	$sql = "SELECT fn,ln,title,abstract,rFn,rLn,review_comment,submitted_article,s.author_id,s.r_id FROM se_select_reviewer AS s, author AS a, author_index_article AS i, reviewer AS r WHERE s.r_id=r.id AND s.author_id=i.author_id AND s.author_id=a.id AND s.se_id={$seId} ORDER by s.id DESC";
	$result = mysqli_query($connection,$sql);
?>

	<?php include_once("sectionEditorNavigationBar.php"); ?>
    
    <div class="editor-submitted-articles-container">
    
      <p class="w3-section btnBar" style="text-align:center;">
          <button class="w3-btn w3-green">Ask for Review Again</button>
          <button class="w3-btn w3-green">Acknowledge Review</button>
          <button class="w3-btn w3-green" onClick="document.getElementById('notifyMessageId').style.display='block'">
          Notify Author About Editorial Decision</button>
          <a class="w3-btn w3-green" href="sectionEditorSelectCopyeditor.php">Select Copyeditor</a>	      
      </p>   
        
      <ul class="w3-ul">
      
      	<?php while($row = mysqli_fetch_assoc($result)) { ?>
        
        <li class="w3-padding-16">
          <?php //$authorId = $rowEditorSubmittedArticle["author_id"]; ?>
          <h2>Author Name: <span><?php echo $row["fn"]." ".$row["ln"]; ?></span></h2>
          <p><strong>Title: </strong><a href="uploads/<?php echo $row["submitted_article"]; ?>"><?php echo $row["title"]; ?></a>
          </p>
          <p><strong>Abstract: </strong><span><?php echo $row["abstract"]; ?></span></p>
          <p><strong>Author ID: </strong><span><?php echo $row["author_id"]; ?></span></p>
          <?php $authorId = $row["author_id"]; ?>
          <?php $rId = $row["r_id"]; ?>
          
          <p><strong>On Charge: </strong><?php echo $row["rFn"]." ".$row["rLn"]; ?></p>
          
          <?php if($row["review_comment"] != NULL) { ?>
          	<p><strong>Reviewed</strong></p>
          <?php } else {
			 echo "<strong>Not reviewed yet!!!</strong>"; 
		  }?>
          
          <!-----Watch comment button------>
          <p class="w3-section">
          	<button id="rCommentBtn" class="w3-btn w3-red select-se w3-right" onClick="myFunction(<?php echo $row["author_id"]; ?>,<?php echo $row["r_id"]; ?>)"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Watch Comments
            </button>
            <div style="clear:both;"></div>
          </p>
          

          <div style="clear:both;"></div>
        </li>  
              
        <?php } ?> <!----while()---->  
      </ul> 
      
      <!--<p class="w3-section btnBar" style="text-align:center;">
      <a class="w3-btn w3-green">Ask for Review Again</a><a class="w3-btn w3-green">Acknowledge Review</a><a class="w3-btn w3-green">Notify Author About Editorial Decision</a><a class="w3-btn w3-green" href="sectionEditorSelectCopyeditor.php">Select Copyeditor</a>	      
      </p>-->
      
    </div> 
    
    <?php include_once("footer.php"); ?>
    
    <script>
		function myFunction(authorIdJS,rIdJS) {
			//alert(authorIdJS + " " + rIdJS);
			
			document.getElementById("id01").style.display="block";
			$.post(
				"sectionEditorArticlesFormRProcess.php",
				{
					authorId: authorIdJS,
					rId: rIdJS
				},
				function(output) {
					var foo = JSON.parse(output);
					
					document.getElementById("comment").innerHTML = foo[0];
					document.getElementById("ratting").innerHTML = foo[1];
					document.getElementById("cnc").innerHTML = foo[2];
					document.getElementById("figure").innerHTML = foo[3];
					document.getElementById("ref").innerHTML = foo[4];
					document.getElementById("understable").innerHTML = foo[5];
					document.getElementById("format").innerHTML = foo[6];
				}
			);	//----post()------
		}
	</script>
    
      <!--------Modal--------->      
      <div id="id01" class="w3-modal" style="position:fixed; top:0px;left:0px;z-index:1003;">
        <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
    
          <div class="w3-center"><br>
            <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
          </div>
          
          <style>
		  	  .comment-modal {
				  position:relative;
				  width:100%;
				  padding-left:60px;
				  padding-bottom:30px;
			  }
			  
			  .comment-modal h2 {
				  font-size:25px;  
			  }
			  
			  .comment-modal h2 {
				  color:#32CD99;  
			  }
			  
			  .comment-modal strong {
				  color:#32CD99;  
			  }
		  </style>
          
          <div class="comment-modal">
          	<h2>Reviewer Comment</h2>
            <strong>Rating of the paper's acceptability:</strong>
            <p id="ratting"></p>
            <strong style="margin-bottom:20px;">Aspects of the paper that needs improvement:</strong>
            <p id="cnc"></p>
            <p id="figure"></p>
            <p id="ref"></p>
            <p id="understable"></p>
            <p id="format"></p>
            <strong>Comment:</strong>
            <p id="comment"></p>
          </div>
    
        </div>
      </div><!--------Modal--------->
    
    <script>
        document.getElementsByClassName("header-link")[1].classList.add("active");
    </script>

</body>
</html>

	  <!-------------Notify to Author And Attach file Message Modal------------->
      <div id="notifyMessageId" class="w3-modal">
        <div class="w3-modal-content" style="top:100px;">
          <header class="w3-container w3-light-grey">
            <span onclick="document.getElementById('notifyMessageId').style.display='none'"
            class="w3-closebtn">&times;</span>
            <h2 style="text-align:center;color:#32CD99;font-family:lobster;font-weight:bold;font-size:50px;">Notifying message to Author</h2>
          </header>
          
          <form enctype="multipart/form-data" class="w3-container w3-margin-top" name="notifyForm" id="notifyFormId" style="display:block; margin:auto;" onSubmit="return false;">
          
          		<p>
                  <label class="w3-label">Author ID: </label>
                  <input class="w3-input" type="text" name="authorId">
                </p>
          
                <p class="w3-margin-top">
                  <label class="w3-label">Message: </label>
                  <textarea class="w3-input" name="message"></textarea>
                </p>
                
               <div class="w3-margin-top">
               	   <label class="w3-label">Attach File: </label>
                   <input type="file" id="myFile" name="myFile">
                   <progress id="prog" value="0" min="0" max="100"></progress>
               </div>              
            
                <p>
  				<button type="button" class="w3-btn w3-teal w3-right w3-margin-top" id="notifyMessageSendId" 
                onClick="sendNotifyToDb(this.value)">Send</button>
                </p>
                

          </form>
          
          <div class="w3-container w3-border-top w3-padding-16 w3-margin-top w3-light-grey">
            <button onclick="document.getElementById('notifyMessageId').style.display='none'" type="button" class="w3-btn w3-red w3-right">Cancel</button>
          </div>
        </div>
      </div> 
      
      <script>
		  
		  $(document).ready(function() {
			
			  $("#notifyMessageSendId").click(function() {
				  
				var fd = new FormData(document.querySelector("#notifyFormId"));
				fd.append("seId", <?php echo $seId; ?>);
				
				$.ajax({
				  url: "sectionEditorToAuthorFileProcess.php",
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
      

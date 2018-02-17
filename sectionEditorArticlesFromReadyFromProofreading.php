<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>
<?php
	$seId = $_SESSION["seLoginId"];
?>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body>
	
    <?php 
		$sql = "SELECT a.fn,a.ln,a.id AS author_id,i.title,p.pFn,s.id,p.pLn,article,i.abstract FROM author AS a,author_index_article AS i,proofreader AS p,section_editor AS s,p_send_article_to_se AS ps WHERE ps.se_id={$seId} AND ps.se_id=s.id AND ps.author_id=a.id AND ps.author_id=i.author_id AND ps.p_id=p.id";
		$result = mysqli_query($connection,$sql);
	?>

	<?php include_once("sectionEditorNavigationBar.php"); ?>
    
    <div class="editor-submitted-articles-container">
    
      <ul class="w3-ul">
      
      	<?php while($row = mysqli_fetch_assoc($result)) { ?>
        <li class="w3-padding-16">
          <?php //$authorId = $rowEditorSubmittedArticle["author_id"]; ?>
          <h2>Author Name: <span><?php echo $row["fn"]." ".$row["ln"]; ?></span></h2>
          <p><strong>Author ID: </strong><span><?php echo $row["author_id"]; ?></span></p>
          <p><strong>Title: </strong><a href="uploads/<?php echo $row["article"]; ?>"><?php echo $row["title"]; ?></a></p>
          <p><strong>Abstract: </strong><span><?php echo $row["abstract"]; ?></span></p>
          <p><strong>Proofreaded by: </strong><span><?php echo $row["pFn"]." ".$row["pLn"]; ?></span></p>
          <button type="button" class="w3-btn w3-red select-se w3-right" onClick="document.getElementById('notifyMessageId').style.display='block';">
          <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Notify & Attach File to Editor</button>
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

	<?php $editorId = 3; ?>

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
                <input class="w3-input" name="authorId" type="text" value=""></p><br/>
                
                <p>
                  <label class="w3-label">Message: </label>
                  <textarea class="w3-input" name="message"></textarea>
                </p><br/>
               
                
              <div class="w3-margin-top">
              	  <label class="w3-label">Attach File: </label>
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
				fd.append("seId", <?php echo $seId; ?>);
				fd.append("editorId", <?php echo $editorId; ?>);
				$.ajax({
				  url: "sectionEditorNotifyEditorProcess.php",
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
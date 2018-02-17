
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Articles From Proofreader</title>

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
	
	.editor-submitted-articles-container .select-se {
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

	<?php include_once("layoutEditorNavigationBar.php"); ?>
    
    <div class="editor-submitted-articles-container">
    
      <ul class="w3-ul">
      
        <li class="w3-padding-16">
          <?php //$authorId = $rowEditorSubmittedArticle["author_id"]; ?>
          <h2>Author Name: <span>Pratik Anwar</span></h2>
          <p><strong>Title: </strong><a href="#">Title1.pdf</a></p>
          <p><strong>Abstract: </strong><span>Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract</span></p>
          <p><strong>Sent by: </strong><span>Proofreader1</span></p>
          <p>
          <button class="w3-btn w3-green select-se" onClick="document.getElementById('notifyAttachId').style.display='block';">
          <i class="fa fa-bell" aria-hidden="true"></i> Norify Section Editor & attach layoutedited article</button>
          <a class="w3-btn w3-red select-se" href="sectionEditorSelectLayouteditor.php">
          <i class="fa fa-comment" aria-hidden="true"></i> Comments</a>
          </p>
          <div style="clear:both;"></div>
        </li>
        
        <li class="w3-padding-16">
          <?php //$authorId = $rowEditorSubmittedArticle["author_id"]; ?>
          <h2>Author Name: <span>Pratik Anwar</span></h2>
          <p><strong>Title: </strong><a href="#">Title1.pdf</a></p>
          <p><strong>Abstract: </strong><span>Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract</span></p>
          <p><strong>Sent by: </strong><span>Proofreader2</span></p>
          <p>
          <button class="w3-btn w3-green select-se" onClick="document.getElementById('notifyAttachId').style.display='block';">
          <i class="fa fa-bell" aria-hidden="true"></i> Norify Section Editor & attach layoutedited article</button>
          <a class="w3-btn w3-red select-se">
          <i class="fa fa-comment" aria-hidden="true"></i> Comments</a>
          </p>
          <div style="clear:both;"></div>
        </li>
        
        <li class="w3-padding-16">
          <?php //$authorId = $rowEditorSubmittedArticle["author_id"]; ?>
          <h2>Author Name: <span>Pratik Anwar</span></h2>
          <p><strong>Title: </strong><a href="#">Title1.pdf</a></p>
          <p><strong>Abstract: </strong><span>Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract</span></p>
          <p><strong>Sent by: </strong><span>Proofreader3</span></p>
          <p>
          <button class="w3-btn w3-green select-se" onClick="document.getElementById('notifyAttachId').style.display='block';">
          <i class="fa fa-bell" aria-hidden="true"></i> Norify Section Editor & attach layoutedited article</button>
          <a class="w3-btn w3-red select-se" href="sectionEditorSelectLayouteditor.php">
          <i class="fa fa-comment" aria-hidden="true"></i> Comments</a>
          </p>
          <div style="clear:both;"></div>
        </li>
        
      </ul>  
      
    </div> 
    
    
	  <!-------------Notify-Attach Modal------------->
      <div id="notifyAttachId" class="w3-modal">
        <div class="w3-modal-content" style="top:100px; padding-bottom:20px;">
          <header class="w3-container w3-light-grey">
            <span onclick="document.getElementById('notifyAttachId').style.display='none'"
            class="w3-closebtn">&times;</span>
            <h2 style="text-align:center;color:#32CD99;font-family:lobster;font-weight:bold;font-size:50px;">Notify Section Editor & Attach File</h2>
          </header>
          
          <form class="w3-container w3-margin-top" name="notifyForm" style="display:block; margin:auto;" onSubmit="return false;">
                <p>
                  <label class="w3-label">Message: </label>
                  <textarea class="w3-input" name="message"></textarea>
                </p><br/>
                
              <div class="w3-margin-top">
              	  <label class="w3-label">Attach Copyedited File(Final): </label>
                  <input type="file" id="myFile" name="myFile">
                  <progress id="prog" value="0" min="0" max="100"></progress>
              </div>
            
                <p style="display:block;width:200px;margin:auto;">
  				<button style="width:100%;" type="button" class="w3-btn w3-teal w3-right w3-margin-top" id="notifyMessageSendId">Send</button>
                </p>
          </form>
        </div>
      </div> 
    
    
    <?php include_once("footer.php"); ?>
    
    <script>
        document.getElementsByClassName("header-link")[1].classList.add("active");
    </script>

</body>
</html>
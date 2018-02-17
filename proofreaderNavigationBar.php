
<style>
	a.header-link {
		color:white;
		margin-left:5px;	
	}
	.topNavbar i {
		margin-right:8px;	
	}
</style>
 	<!----------Navigation Bar---------->
    <div class="topNavbar w3-card-2" style="width:100%; height:100px; background-image:url(background%20images/1.gif);
    padding-right:50px; position:fixed; z-index:1000; ">
    	<a href="index.php">
        	<img src="images/mist logo.png" style="height:100px; width:100px; float:left; position:relative; left:30px;">
        </a>
        <ul class="w3-navbar" style="float:right; height:40px; margin-top:30px;">
          <li><a class="header-link make-active w3-hover-red" href="proofreaderLoggedin.php"><i class="fa fa-user" aria-hidden="true"></i>Profile</a></li>
          <!--<li class="w3-dropdown-hover w3-hover-red">
            <a class="header-link make-active w3-hover-red"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i>Select Members <i class="fa fa-caret-down"></i></a>
            <div class="w3-dropdown-content w3-white w3-card-4 w3-animate-zoom" style="background-color:red;">
              <a class="w3-hover-green" href="sectionEditorSelectReviewer.php">Reviewer</a>
              <a class="w3-hover-green" href="sectionEditorSelectCopyeditor.php">Copyeditor</a>
              <a class="w3-hover-green" href="sectionEditorSelectLayouteditor.php">Layouteditor</a>   
              <a class="w3-hover-green" href="sectionEditorSelectProofreader.php">Proofreader</a>          
            </div>
          </li> -->
          <li class="w3-dropdown-hover w3-hover-red">
            <a class="header-link w3-hover-red"><i class="fa fa-envelope" aria-hidden="true"></i>Articles <i class="fa fa-caret-down"></i></a>
            <div class="w3-dropdown-content w3-white w3-card-4 w3-animate-zoom" style="background-color:red;">
              <a class="w3-hover-green" href="proofreaderArticlesFromSe.php">From Section Editor</a>
              <a class="w3-hover-green" href="proofreaderArticlesFromAuthor.php">From Author</a>
            </div>
          </li> 
          
          <li class="w3-dropdown-hover w3-hover-red">
            <a class="header-link w3-hover-red"><i class="fa fa-envelope" aria-hidden="true"></i>Messages <i class="fa fa-caret-down"></i></a>
            <div class="w3-dropdown-content w3-white w3-card-4 w3-animate-zoom" style="background-color:red;">
              <a class="w3-hover-green" href="layoutEditorThreadMessagesSe.php">Section Editor</a>
              <a class="w3-hover-green" href="layoutEditorThreadProofreaderMessage.php">Proofreader</a>
            </div>
          </li>   
       
          <li><a class="header-link make-active w3-hover-red" href="authorLogout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>   

        </ul>
    </div>
    
	  <!-------------Notify Message To Author Modal------------->
      <div id="notifyAuthorMessageId" class="w3-modal">
        <div class="w3-modal-content" style="top:100px; padding-bottom:20px;">
          <header class="w3-container w3-light-grey">
            <span onclick="document.getElementById('notifyAuthorMessageId').style.display='none'"
            class="w3-closebtn">&times;</span>
            <h2 style="text-align:center;color:#32CD99;font-family:lobster;font-weight:bold;font-size:50px;">Comment To Layouteditor About Article</h2>
          </header>
          
          <form class="w3-container w3-margin-top" name="notifyForm" style="display:block; margin:auto;" onSubmit="return false;">
                <p>
                  <label class="w3-label">Comment About the Article: </label>
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
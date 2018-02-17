
<style>
	a.header-link {
		color:white;
		margin-left:0px;	
	}
	.topNavbar i {
		margin-right:3px;	
	}
	li a {
		font-size:12px;	
	}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

 	<!----------Navigation Bar---------->
    <div class="topNavbar w3-card-2" style="width:100%; height:100px; background-image:url(background%20images/1.gif);
    padding-right:50px; position:fixed; z-index:1000; ">
    	<a href="index.php">
        	<img src="images/mist logo.png" style="height:100px; width:100px; float:left; position:relative; left:30px;">
        </a>
        <ul class="w3-navbar" style="float:right; height:40px; margin-top:30px;">
          <li><a class="header-link make-active w3-hover-red" href="editorLoggedin.php"><i class="fa fa-user" aria-hidden="true"></i>Profile</a></li>
          <li><a class="header-link make-active w3-hover-red" style="cursor:pointer;" onClick="document.getElementById('announcement').style.display='block'"><i class="fa fa-paper-plane" aria-hidden="true"></i>Call For Paper</a></li>
          <li><a class="header-link make-active w3-hover-red" style="cursor:pointer;" onClick="document.getElementById('announcement').style.display='block'"><i class="fa fa-paper-plane" aria-hidden="true"></i>Announcement</a></li>
          <li><a class="header-link make-active w3-hover-red" href="editorSubmittedArticle.php"><i class="fa fa-paper-plane" aria-hidden="true"></i>Submitted Articles</a></li>
          <li class="w3-dropdown-hover w3-hover-red">
            <a class="header-link w3-hover-red" href="#"><i class="fa fa-envelope" aria-hidden="true"></i>Messages <i class="fa fa-caret-down"></i></a>
            <div class="w3-dropdown-content w3-white w3-card-4 w3-animate-zoom" style="background-color:red;">
              <a class="w3-hover-green" href="editorThreadSectionEditorMessage.php">Section Editor</a>
              <a class="w3-hover-green" href="editorThreadCopyEditorMessage.php">Copyeditor</a>
              <a class="w3-hover-green" href="editorThreadProofreaderMessage.php">Proofreader</a>          
            </div>
          </li>         
          <li><a class="header-link make-active w3-hover-red" href="editorPublishArticle.php">
          <i class="fa fa-newspaper-o" aria-hidden="true"></i>Publishable Article</a></li>  
          <li><a class="header-link make-active w3-hover-red" href="authorLogout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>   

        </ul>
    </div>
    
	  <!-------------Announcement------------->
      <div id="announcement" class="w3-modal">
        <div class="w3-modal-content" style="padding-bottom:20px;">
          <header class="w3-container w3-light-grey">
            <span onclick="document.getElementById('announcement').style.display='none'"
            class="w3-closebtn">&times;</span>
            <h2 style="text-align:center;color:#32CD99;font-family:lobster;font-weight:bold;font-size:35px;">Announce the Volume no & Issue no to be published</h2>
          </header>
          
          <form  method="post" class="w3-container w3-margin-top" name="announcementForm" id="notifyIdForm" style="display:block; margin:auto;" onSubmit="return false;">
                
                <p><label class="w3-label">Volume No:</label>
                <input class="w3-input" name="volume" type="text"></p><br/>
                
                <p><label class="w3-label">Number of issues:</label>
                <input class="w3-input" name="issue" type="text"></p><br/>
            
                <p style="display:block;width:200px;margin:auto;">
  				<button style="width:100%;" type="button" class="w3-btn w3-teal w3-right w3-margin-top" id="announcementSend">Send</button>
                </p>
          </form>
        </div>
      </div> 
      
      <script>
	  		$(document).ready(function() {
				
				$("#announcementSend").click(function() {
					
					var volumeJS = document.forms["announcementForm"]["volume"].value;
					var issueJS = document.forms["announcementForm"]["issue"].value;
					
					$.post(
						"editorAnnouncementProcess.php",
						{
							volume: volumeJS,
							issue: issueJS
						},
						function(output) {
							if(output.indexOf("You have annouced successfully!!!") != -1) {
								alert("You have annouced successfully!!!");
							} else {
								alert("Something went wrong!!!");
							}
						}
					);
						
				});
					
			});
	  </script>
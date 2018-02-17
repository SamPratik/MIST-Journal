
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
          <li><a class="header-link make-active w3-hover-red" href="sectionEditorLoggedin.php"><i class="fa fa-user" aria-hidden="true"></i>Profile</a></li>
          <!--<li class="w3-dropdown-hover w3-hover-red">
            <a class="header-link make-active w3-hover-red"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i>Select Members <i class="fa fa-caret-down"></i></a>
            <div class="w3-dropdown-content w3-white w3-card-4 w3-animate-zoom" style="background-color:red;">
              <a class="w3-hover-green" href="sectionEditorSelectReviewer.php">Reviewer</a>
              <a class="w3-hover-green" href="sectionEditorSelectCopyeditor.php">Copyeditor</a>
              <a class="w3-hover-green" href="sectionEditorSelectLayouteditor.php">Layouteditor</a>   
              <a class="w3-hover-green" href="sectionEditorSelectProofreader.php">Proofreader</a>          
            </div>
          </li>  -->
          <li class="w3-dropdown-hover w3-hover-red">
            <a class="header-link w3-hover-red"><i class="fa fa-envelope" aria-hidden="true"></i>Messages <i class="fa fa-caret-down"></i></a>
            <div class="w3-dropdown-content w3-white w3-card-4 w3-animate-zoom" style="background-color:red;">
              <a class="w3-hover-green" href="sectionEditorThreadEditorMessage.php">Editor</a>
              <a class="w3-hover-green" href="sectionEditorThreadReviewerMessage.php">Reviewer</a>
              <a class="w3-hover-green" href="sectionEditorThreadCopyEditorMessage.php">Copyeditor</a>
              <a class="w3-hover-green" href="sectionEditorThreadLayoutEditorMessage.php">Layouteditor</a>               
              <a class="w3-hover-green" href="sectionEditorThreadAuthorMessage.php">Author</a>          
            </div>
          </li>   
          <li class="w3-dropdown-hover w3-hover-red">
            <a class="header-link make-active w3-hover-red"><i class="fa fa-newspaper-o" aria-hidden="true"></i>Articles From <i class="fa fa-caret-down"></i></a>
            <div class="w3-dropdown-content w3-white w3-card-4 w3-animate-zoom" style="background-color:red;">
              <a class="w3-hover-green" href="sectionEditorAticlesFormEditor.php">Editor</a>
              <a class="w3-hover-green" href="sectionEditorAticlesFormReviewers.php">Reviewer</a>
              <a class="w3-hover-green" href="sectionEditorArticlesFromCopyEditor.php">Copyeditor</a>
              <a class="w3-hover-green" href="sectionEditorArticlesFromReadyFromProofreading.php">Proofreader</a> 
              <a class="w3-hover-green" href="sectionEditorArticlesFromAuthor.php">Author</a>    
                  
            </div>
          </li>        
          <li><a class="header-link make-active w3-hover-red" href="authorLogout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>   

        </ul>
    </div>
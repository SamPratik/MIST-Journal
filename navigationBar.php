
<style>
	a.header-link {
		color:white;
		margin-left:5px;	
	}
	
	.header-link-icon {
		margin-right:8px;	
	}
</style>
 	<!----------Navigation Bar---------->
    <div class="topNavbar w3-card-2" style="width:100%; height:100px; background-image:url(background%20images/1.gif);
    padding-right:50px; position:fixed; z-index:1000;">
    	<a href="index.php">
        	<img src="images/mist logo.png" style="height:100px; width:100px; float:left; position:relative; left:30px;">
        </a>
        <ul class="w3-navbar" style="float:right; height:40px; margin-top:30px;">
          <li><a class="header-link make-active w3-hover-red" href="index.php"><i class="fa fa-home header-link-icon" aria-hidden="true"></i>Home</a></li>
          <li><a class="header-link make-active w3-hover-red" href="editorialBoard.php"><i class="fa fa-pencil-square-o header-link-icon" 
          aria-hidden="true"></i>Editorial Board</a></li>
          <li><a class="header-link make-active w3-hover-red" href="archive.php"><i class="fa fa-archive header-link-icon" aria-hidden="true"></i>
          Archive</a></li>
          <li class="w3-dropdown-hover w3-hover-red">
            <a class="header-link w3-hover-red" href="#"><i class="fa fa-plus header-link-icon" 
            aria-hidden="true"></i>Register <i class="fa fa-caret-down"></i></a>
            <div class="w3-dropdown-content w3-white w3-card-4 w3-animate-zoom" style="background-color:red;">
              <a class="w3-hover-green" href="#" onClick="document.getElementById('journalManagerReg').style.display='block'">
              Journal Manager</a>
              <a class="w3-hover-green" href="#" onClick="document.getElementById('editorReg').style.display='block'">Editor
              </a>
              <a class="w3-hover-green" href="#" onClick="document.getElementById('sectionEditorReg').style.display='block'">
              Section Editor</a>
              <a class="w3-hover-green" href="#" onclick="document.getElementById('reviewerReg').style.display='block'">
              Reviewer</a>
              <a class="w3-hover-green" href="#" onClick="document.getElementById('copyEditorReg').style.display='block'">
              Copyeditor</a>
              <!--<a class="w3-hover-green" href="#" onClick="document.getElementById('layoutEditorReg').style.display='block'">
              Layout Editor</a>-->
              <a class="w3-hover-green" href="#" onClick="document.getElementById('proofreaderReg').style.display='block'">
              Proofreader</a>   
              <a class="w3-hover-green" href="#" onClick="document.getElementById('authorReg').style.display='block'">Author
              </a>            
            </div>
          </li>
          <li class="w3-dropdown-hover w3-hover-red">
            <a class="header-link w3-hover-red" href="#"><i class="fa fa-sign-in header-link-icon" aria-hidden="true"></i>
            Login <i class="fa fa-caret-down"></i></a>
            <div class="w3-dropdown-content w3-white w3-card-4 w3-animate-zoom" style="background-color:red;">
              <a class="w3-hover-green" href="#" onClick="document.getElementById('journalManagerLogin').style.display='block'">
              Journal Manager</a>
              <a class="w3-hover-green" href="#" onclick="document.getElementById('editorLogin').style.display='block'">Editor
              </a>
              <a class="w3-hover-green" href="#" onClick="document.getElementById('sectionEditorLogin').style.display='block'"
              >Section Editor</a>
              <a class="w3-hover-green" href="#" onClick="document.getElementById('reviewerLogin').style.display='block'">
              Reviewer</a>
              <a class="w3-hover-green" href="#" onClick="document.getElementById('copyEditorLogin').style.display='block'">
              Copyeditor</a>
              <!--<a class="w3-hover-green" href="#" onclick="document.getElementById('layoutEditorLogin').style.display='block'">
              Layout Editor</a>-->
              <a class="w3-hover-green" href="#" onclick="document.getElementById('proofreaderLogin').style.display='block'">
              Proofreader</a>   
              <a class="w3-hover-green" href="#" onclick="document.getElementById('authorLogin').style.display='block'">Author
              </a>            
            </div>
          </li>
        </ul>
    </div>

<?php include_once("sectionEditorRegistrationForm.php"); ?>

<?php include_once("reviewerRegistrationForm.php"); ?>

<?php include_once("editorRegistrationForm.php"); ?>

<?php include_once("journalManagerRegistrationForm.php"); ?>

<?php include_once("layoutEditorRegistrationForm.php"); ?>

<?php include_once("copytEditorRegistrationForm.php"); ?>

<?php include_once("proofreaderRegistrationForm.php"); ?>

<?php include_once("authorRegistrationForm.php"); ?>

<?php include_once("editorLoginForm.php"); ?>

<?php include_once("journalManagerLoginForm.php") ?>

<?php include_once("sectionEditorLoginForm.php"); ?>

<?php include_once("copyEditorLoginForm.php"); ?>

<?php include_once("reviewerLoginForm.php"); ?>

<?php include_once("layoutEditorLoginForm.php"); ?>

<?php include_once("proofreaderLoginForm.php"); ?>

<?php include_once("authorLoginForm.php"); ?>
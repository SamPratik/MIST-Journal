
<?php include_once("dbConnector.php"); ?>
<style>
	a.header-link {
		color:white;
		margin-left:5px;	
	}
</style>

	<?php 
		$authorId = $_SESSION["authorLoginId"];
	?>

	<?php
		$sql1 = "SELECT se_id FROM editor_send_article_to_se WHERE author_id={$authorId}";
		$result1 = mysqli_query($connection,$sql1);
		
		$row1 = mysqli_fetch_assoc($result1);
	?>
    
 	<!----------Navigation Bar---------->
    <div class="topNavbar w3-card-2" style="width:100%; height:100px; background-image:url(background%20images/1.gif);
    padding-right:50px; position:fixed; z-index:1000; ">
    	<a href="index.php">
        	<img src="images/mist logo.png" style="height:100px; width:100px; float:left; position:relative; left:30px;">
        </a>
        <ul class="w3-navbar" style="float:right; height:40px; margin-top:30px;">
          <li><a class="header-link make-active w3-hover-red" href="authorLoggedin.php">Profile</a></li>
          <li><a class="header-link make-active w3-hover-red" href="authorSubmitArticle.php">Submit Article</a></li>
          <li class="w3-dropdown-hover w3-hover-red">
            <a class="header-link w3-hover-red">Messages <i class="fa fa-caret-down"></i></a>
            <div class="w3-dropdown-content w3-white w3-card-4 w3-animate-zoom" style="background-color:red;">
              <a class="w3-hover-green" href="authorMessagesSectionEditor.php?seId=<?php echo $row1["se_id"]; ?>">Section Editor</a>
              <a class="w3-hover-green" href="authorMessagesCopyeditor.php">
              Copyeditor</a>
              <a class="w3-hover-green" href="authorMessagesProofreader.php">
              Proofreader</a>          
            </div>
          </li>         
          <li><a class="header-link make-active w3-hover-red" href="archive.php">Payment</a></li>
          <li><a class="header-link make-active w3-hover-red" href="authorLogout.php">Logout</a></li>   

        </ul>
    </div>
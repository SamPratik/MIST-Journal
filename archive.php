<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>
<?php
	if(isset($_SESSION["authorLoginEmail"])) {
		header("location: authorLoggedin.php");	
	}
?>

<?php
	if(isset($_SESSION["editorLoginEmail"])) {
		header("location: editorLoggedin.php");	
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">                        
<link rel="stylesheet" href="css/reviewerRegistrationForm.css">
<link rel="stylesheet" href="css/authorRegistrationForm.css">
<link rel="stylesheet" href="css/sectionEditorRegistrationForm.css">
<link rel="stylesheet" href="css/editorRegistrationForm.css">
<link rel="stylesheet" href="css/journalManagerRegistrationForm.css">
<link rel="stylesheet" href="css/layoutEditorRegistrationForm.css">
<link rel="stylesheet" href="css/copytEditorRegistrationForm.css">
<link rel="stylesheet" href="css/proofreaderRegistrationForm.css">
<link rel="stylesheet" type="text/css" href="css/scrollBar.css">
<title>Archive</title>

<link rel="stylesheet" href="css/archive.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body>

	<?php include_once("navigationBar.php"); ?>
    
    <nav class="w3-sidenav w3-card-2 sidenav w3-light-grey">
      <div class="w3-container">
        <h2 style="color:black; padding:10px 0px 10px 0px; text-align:center;">scopes</h2>
      </div>
      <a href="#" id="clicked" class="tablink" onclick="openCity(event, 'cse')">Computer Science</a>
      <a href="#" class="tablink" onclick="openCity(event, 'eece')">Electrical Engineering</a>
      <a href="#" class="tablink" onclick="openCity(event, 'me')">Mechanical Engineering</a>
      <a href="#" class="tablink" onclick="openCity(event, 'ce')">Civil Engineering</a>
      <a href="#" class="tablink" onclick="openCity(event, 'ae')">Aeronautical Engineering</a>
      <a href="#" class="tablink" onclick="openCity(event, 'name')">Naval Engineering</a>
      <a href="#" class="tablink" onclick="openCity(event, 'nse')">Neuclear Engineering</a>
      <a href="#" class="tablink" onclick="openCity(event, 'be')">Biomedical Engineering</a>
      <a href="#" class="tablink" onclick="openCity(event, 'are')">Architecture</a>
    </nav>
    
    <div class="content">
      <h1 class="w3-text-blue">List of Publications</h1>
      
        <div class="notice">
            <div class="marquee">
            	<img style="display:block;margin:auto;" src="animated fots/NfzVFewS.gif">
                <div class="notice-text" style="display:block;">
                    <p class="w3-large"><strong>Volume-5, Issue-4 published...
                    </strong></p>
                    <p class="w3-large" style=""><strong>Calling Papers For Volume 5, 
                    Issue 5 Last Deadeline For Paper Submission 15 October 2016 Posted by Admin</strong></p>
                </div>
            </div>
        </div>      
    
    
      <!--------------Computer Science-------------------->
      <div id="cse" class="w3-container list w3-animate-left">
      
      <?php
		$sql = "SELECT * FROM announcement";
		$resutl = mysqli_query($connection,$sql);
		
		while($row = mysqli_fetch_assoc($resutl)) {
			$issue = $row["issue"];
			$volume = $row["volume"];
			
			for($count=1; $count<=$issue; $count++) {
	  ?>
      	<a href="cseArticlesArchive.php?volume=<?php echo $volume; ?>&issue=<?php echo $count; ?>">Volume-<?php echo $volume ?>,Issue-<?php echo $count; ?></a>
      <?php
			}
		}		
	  ?>
        
      </div>
    
      <!--------------Electrical-------------------->
      <div id="eece" class="w3-container list w3-animate-right">
        <a href="#">Volume-5,Issue-4,August (Published on August 25,2016)</a>
        
        <a href="#">Volume-5,Issue-3,June (Published on June 25,2016)</a>
        
        <a href="#">Volume-5,Issue-2,April (Published on April 25,2016)</a>
        
        <a href="#">Volume-5,Issue-1,February (Published on February 25,2016)</a>
        
        <a href="#">Volume-4,Issue-6,December (Published on December 25,2015)</a>
        
        <a href="#">Volume-4,Issue-5,October (Published on October 25,2015)</a>
        
        <a href="#">Volume-4,Issue-4,August (Published on August 25,2015)</a>
        
        <a href="#">Volume-4,Issue-3,June (Published on June 25,2015)</a>
        
        <a href="#">Volume-4,Issue-2,April (Published on April 25,2015)</a>
        
        <a href="#">Volume-4,Issue-1,February (Published on February 25,2015)</a>
        
        <a href="#">Volume-3,Issue-6,December (Published on December 25,2014)</a>
        
        <a href="#">Volume-3,Issue-5,October (Published on October 25,2014)</a>
        
        <a href="#">Volume-3,Issue-4,August (Published on August 25,2014)</a>
        
        <a href="#">Volume-3,Issue-3,June (Published on June 25,2014)</a>
        
        <a href="#">Volume-3,Issue-2,April (Published on April 25,2014)</a>
        
        <a href="#">Volume-3,Issue-1,Febraury (Published on Febraury 25,2014)</a>
        
        <a href="#">Volume-2,Issue-6,December (Published on December 25,2013)</a>
        
        <a href="#">Volume-2,Issue-5,October (Published on October 25,2013)</a>
        
        <a href="#">Volume-2,Issue-4,August (Published on August 25,2013)</a>
        
        <a href="#">Volume-2,Issue-3,June (Published on June 25,2013)</a>
        
        <a href="#">Volume-2,Issue-2,April (Published on April 25,2013)</a>
        
        <a href="#">Volume-2,Issue-1,February (Published on February 25,2013)</a>
        
        <a href="#">Volume-1,Issue-2,December (Published on December 25,2012)</a>
        
        <a href="#">Volume-1,Issue-1,October (Published on October 25,2012)</a>
      </div>
      
      
      <!--------------Mechanicals-------------------->	
      <div id="me" class="w3-container list w3-animate-zoom">
        <a href="#">Volume-5,Issue-4,August (Published on August 25,2016)</a>
        
        <a href="#">Volume-5,Issue-3,June (Published on June 25,2016)</a>
        
        <a href="#">Volume-5,Issue-2,April (Published on April 25,2016)</a>
        
        <a href="#">Volume-5,Issue-1,February (Published on February 25,2016)</a>
        
        <a href="#">Volume-4,Issue-6,December (Published on December 25,2015)</a>
        
        <a href="#">Volume-4,Issue-5,October (Published on October 25,2015)</a>
        
        <a href="#">Volume-4,Issue-4,August (Published on August 25,2015)</a>
        
        <a href="#">Volume-4,Issue-3,June (Published on June 25,2015)</a>
        
        <a href="#">Volume-4,Issue-2,April (Published on April 25,2015)</a>
        
        <a href="#">Volume-4,Issue-1,February (Published on February 25,2015)</a>
        
        <a href="#">Volume-3,Issue-6,December (Published on December 25,2014)</a>
        
        <a href="#">Volume-3,Issue-5,October (Published on October 25,2014)</a>
        
        <a href="#">Volume-3,Issue-4,August (Published on August 25,2014)</a>
        
        <a href="#">Volume-3,Issue-3,June (Published on June 25,2014)</a>
        
        <a href="#">Volume-3,Issue-2,April (Published on April 25,2014)</a>
        
        <a href="#">Volume-3,Issue-1,Febraury (Published on Febraury 25,2014)</a>
        
        <a href="#">Volume-2,Issue-6,December (Published on December 25,2013)</a>
        
        <a href="#">Volume-2,Issue-5,October (Published on October 25,2013)</a>
        
        <a href="#">Volume-2,Issue-4,August (Published on August 25,2013)</a>
        
        <a href="#">Volume-2,Issue-3,June (Published on June 25,2013)</a>
        
        <a href="#">Volume-2,Issue-2,April (Published on April 25,2013)</a>
        
        <a href="#">Volume-2,Issue-1,February (Published on February 25,2013)</a>
        
        <a href="#">Volume-1,Issue-2,December (Published on December 25,2012)</a>
        
        <a href="#">Volume-1,Issue-1,October (Published on October 25,2012)</a>
      </div>
      
      
      <!--------------Civil-------------------->
      <div id="ce" class="w3-container list w3-animate-top">
        <a href="#">Volume-5,Issue-4,August (Published on August 25,2016)</a>
        
        <a href="#">Volume-5,Issue-3,June (Published on June 25,2016)</a>
        
        <a href="#">Volume-5,Issue-2,April (Published on April 25,2016)</a>
        
        <a href="#">Volume-5,Issue-1,February (Published on February 25,2016)</a>
        
        <a href="#">Volume-4,Issue-6,December (Published on December 25,2015)</a>
        
        <a href="#">Volume-4,Issue-5,October (Published on October 25,2015)</a>
        
        <a href="#">Volume-4,Issue-4,August (Published on August 25,2015)</a>
        
        <a href="#">Volume-4,Issue-3,June (Published on June 25,2015)</a>
        
        <a href="#">Volume-4,Issue-2,April (Published on April 25,2015)</a>
        
        <a href="#">Volume-4,Issue-1,February (Published on February 25,2015)</a>
        
        <a href="#">Volume-3,Issue-6,December (Published on December 25,2014)</a>
        
        <a href="#">Volume-3,Issue-5,October (Published on October 25,2014)</a>
        
        <a href="#">Volume-3,Issue-4,August (Published on August 25,2014)</a>
        
        <a href="#">Volume-3,Issue-3,June (Published on June 25,2014)</a>
        
        <a href="#">Volume-3,Issue-2,April (Published on April 25,2014)</a>
        
        <a href="#">Volume-3,Issue-1,Febraury (Published on Febraury 25,2014)</a>
        
        <a href="#">Volume-2,Issue-6,December (Published on December 25,2013)</a>
        
        <a href="#">Volume-2,Issue-5,October (Published on October 25,2013)</a>
        
        <a href="#">Volume-2,Issue-4,August (Published on August 25,2013)</a>
        
        <a href="#">Volume-2,Issue-3,June (Published on June 25,2013)</a>
        
        <a href="#">Volume-2,Issue-2,April (Published on April 25,2013)</a>
        
        <a href="#">Volume-2,Issue-1,February (Published on February 25,2013)</a>
        
        <a href="#">Volume-1,Issue-2,December (Published on December 25,2012)</a>
        
        <a href="#">Volume-1,Issue-1,October (Published on October 25,2012)</a>
      </div>
      
      
      <!--------------Aeronautical-------------------->
      <div id="ae" class="w3-container list w3-animate-opacity">
        <a href="#">Volume-5,Issue-4,August (Published on August 25,2016)</a>
        
        <a href="#">Volume-5,Issue-3,June (Published on June 25,2016)</a>
        
        <a href="#">Volume-5,Issue-2,April (Published on April 25,2016)</a>
        
        <a href="#">Volume-5,Issue-1,February (Published on February 25,2016)</a>
        
        <a href="#">Volume-4,Issue-6,December (Published on December 25,2015)</a>
        
        <a href="#">Volume-4,Issue-5,October (Published on October 25,2015)</a>
        
        <a href="#">Volume-4,Issue-4,August (Published on August 25,2015)</a>
        
        <a href="#">Volume-4,Issue-3,June (Published on June 25,2015)</a>
        
        <a href="#">Volume-4,Issue-2,April (Published on April 25,2015)</a>
        
        <a href="#">Volume-4,Issue-1,February (Published on February 25,2015)</a>
        
        <a href="#">Volume-3,Issue-6,December (Published on December 25,2014)</a>
        
        <a href="#">Volume-3,Issue-5,October (Published on October 25,2014)</a>
        
        <a href="#">Volume-3,Issue-4,August (Published on August 25,2014)</a>
        
        <a href="#">Volume-3,Issue-3,June (Published on June 25,2014)</a>
        
        <a href="#">Volume-3,Issue-2,April (Published on April 25,2014)</a>
        
        <a href="#">Volume-3,Issue-1,Febraury (Published on Febraury 25,2014)</a>
        
        <a href="#">Volume-2,Issue-6,December (Published on December 25,2013)</a>
        
        <a href="#">Volume-2,Issue-5,October (Published on October 25,2013)</a>
        
        <a href="#">Volume-2,Issue-4,August (Published on August 25,2013)</a>
        
        <a href="#">Volume-2,Issue-3,June (Published on June 25,2013)</a>
        
        <a href="#">Volume-2,Issue-2,April (Published on April 25,2013)</a>
        
        <a href="#">Volume-2,Issue-1,February (Published on February 25,2013)</a>
        
        <a href="#">Volume-1,Issue-2,December (Published on December 25,2012)</a>
        
        <a href="#">Volume-1,Issue-1,October (Published on October 25,2012)</a>
      </div>
      
      
      <!--------------Naval-------------------->
      <div id="name" class="w3-container list w3-animate-top">
        <a href="#">Volume-5,Issue-4,August (Published on August 25,2016)</a>
        
        <a href="#">Volume-5,Issue-3,June (Published on June 25,2016)</a>
        
        <a href="#">Volume-5,Issue-2,April (Published on April 25,2016)</a>
        
        <a href="#">Volume-5,Issue-1,February (Published on February 25,2016)</a>
        
        <a href="#">Volume-4,Issue-6,December (Published on December 25,2015)</a>
        
        <a href="#">Volume-4,Issue-5,October (Published on October 25,2015)</a>
        
        <a href="#">Volume-4,Issue-4,August (Published on August 25,2015)</a>
        
        <a href="#">Volume-4,Issue-3,June (Published on June 25,2015)</a>
        
        <a href="#">Volume-4,Issue-2,April (Published on April 25,2015)</a>
        
        <a href="#">Volume-4,Issue-1,February (Published on February 25,2015)</a>
        
        <a href="#">Volume-3,Issue-6,December (Published on December 25,2014)</a>
        
        <a href="#">Volume-3,Issue-5,October (Published on October 25,2014)</a>
        
        <a href="#">Volume-3,Issue-4,August (Published on August 25,2014)</a>
        
        <a href="#">Volume-3,Issue-3,June (Published on June 25,2014)</a>
        
        <a href="#">Volume-3,Issue-2,April (Published on April 25,2014)</a>
        
        <a href="#">Volume-3,Issue-1,Febraury (Published on Febraury 25,2014)</a>
        
        <a href="#">Volume-2,Issue-6,December (Published on December 25,2013)</a>
        
        <a href="#">Volume-2,Issue-5,October (Published on October 25,2013)</a>
        
        <a href="#">Volume-2,Issue-4,August (Published on August 25,2013)</a>
        
        <a href="#">Volume-2,Issue-3,June (Published on June 25,2013)</a>
        
        <a href="#">Volume-2,Issue-2,April (Published on April 25,2013)</a>
        
        <a href="#">Volume-2,Issue-1,February (Published on February 25,2013)</a>
        
        <a href="#">Volume-1,Issue-2,December (Published on December 25,2012)</a>
        
        <a href="#">Volume-1,Issue-1,October (Published on October 25,2012)</a>
      </div>    
      	
        
        <!--------------Neuclear-------------------->
        <div id="nse" class="w3-container list w3-animate-left">
        <a href="#">Volume-5,Issue-4,August (Published on August 25,2016)</a>
        
        <a href="#">Volume-5,Issue-3,June (Published on June 25,2016)</a>
        
        <a href="#">Volume-5,Issue-2,April (Published on April 25,2016)</a>
        
        <a href="#">Volume-5,Issue-1,February (Published on February 25,2016)</a>
        
        <a href="#">Volume-4,Issue-6,December (Published on December 25,2015)</a>
        
        <a href="#">Volume-4,Issue-5,October (Published on October 25,2015)</a>
        
        <a href="#">Volume-4,Issue-4,August (Published on August 25,2015)</a>
        
        <a href="#">Volume-4,Issue-3,June (Published on June 25,2015)</a>
        
        <a href="#">Volume-4,Issue-2,April (Published on April 25,2015)</a>
        
        <a href="#">Volume-4,Issue-1,February (Published on February 25,2015)</a>
        
        <a href="#">Volume-3,Issue-6,December (Published on December 25,2014)</a>
        
        <a href="#">Volume-3,Issue-5,October (Published on October 25,2014)</a>
        
        <a href="#">Volume-3,Issue-4,August (Published on August 25,2014)</a>
        
        <a href="#">Volume-3,Issue-3,June (Published on June 25,2014)</a>
        
        <a href="#">Volume-3,Issue-2,April (Published on April 25,2014)</a>
        
        <a href="#">Volume-3,Issue-1,Febraury (Published on Febraury 25,2014)</a>
        
        <a href="#">Volume-2,Issue-6,December (Published on December 25,2013)</a>
        
        <a href="#">Volume-2,Issue-5,October (Published on October 25,2013)</a>
        
        <a href="#">Volume-2,Issue-4,August (Published on August 25,2013)</a>
        
        <a href="#">Volume-2,Issue-3,June (Published on June 25,2013)</a>
        
        <a href="#">Volume-2,Issue-2,April (Published on April 25,2013)</a>
        
        <a href="#">Volume-2,Issue-1,February (Published on February 25,2013)</a>
        
        <a href="#">Volume-1,Issue-2,December (Published on December 25,2012)</a>
        
        <a href="#">Volume-1,Issue-1,October (Published on October 25,2012)</a>
      </div>
      
      
      <!--------------Biomedical-------------------->
      <div id="be" class="w3-container list w3-animate-right">
        <a href="#">Volume-5,Issue-4,August (Published on August 25,2016)</a>
        
        <a href="#">Volume-5,Issue-3,June (Published on June 25,2016)</a>
        
        <a href="#">Volume-5,Issue-2,April (Published on April 25,2016)</a>
        
        <a href="#">Volume-5,Issue-1,February (Published on February 25,2016)</a>
        
        <a href="#">Volume-4,Issue-6,December (Published on December 25,2015)</a>
        
        <a href="#">Volume-4,Issue-5,October (Published on October 25,2015)</a>
        
        <a href="#">Volume-4,Issue-4,August (Published on August 25,2015)</a>
        
        <a href="#">Volume-4,Issue-3,June (Published on June 25,2015)</a>
        
        <a href="#">Volume-4,Issue-2,April (Published on April 25,2015)</a>
        
        <a href="#">Volume-4,Issue-1,February (Published on February 25,2015)</a>
        
        <a href="#">Volume-3,Issue-6,December (Published on December 25,2014)</a>
        
        <a href="#">Volume-3,Issue-5,October (Published on October 25,2014)</a>
        
        <a href="#">Volume-3,Issue-4,August (Published on August 25,2014)</a>
        
        <a href="#">Volume-3,Issue-3,June (Published on June 25,2014)</a>
        
        <a href="#">Volume-3,Issue-2,April (Published on April 25,2014)</a>
        
        <a href="#">Volume-3,Issue-1,Febraury (Published on Febraury 25,2014)</a>
        
        <a href="#">Volume-2,Issue-6,December (Published on December 25,2013)</a>
        
        <a href="#">Volume-2,Issue-5,October (Published on October 25,2013)</a>
        
        <a href="#">Volume-2,Issue-4,August (Published on August 25,2013)</a>
        
        <a href="#">Volume-2,Issue-3,June (Published on June 25,2013)</a>
        
        <a href="#">Volume-2,Issue-2,April (Published on April 25,2013)</a>
        
        <a href="#">Volume-2,Issue-1,February (Published on February 25,2013)</a>
        
        <a href="#">Volume-1,Issue-2,December (Published on December 25,2012)</a>
        
        <a href="#">Volume-1,Issue-1,October (Published on October 25,2012)</a>
      </div>
      
      
      <!--------------Architecture-------------------->
      <div id="are" class="w3-container list w3-animate-zoom">
        <a href="#">Volume-5,Issue-4,August (Published on August 25,2016)</a>
        
        <a href="#">Volume-5,Issue-3,June (Published on June 25,2016)</a>
        
        <a href="#">Volume-5,Issue-2,April (Published on April 25,2016)</a>
        
        <a href="#">Volume-5,Issue-1,February (Published on February 25,2016)</a>
        
        <a href="#">Volume-4,Issue-6,December (Published on December 25,2015)</a>
        
        <a href="#">Volume-4,Issue-5,October (Published on October 25,2015)</a>
        
        <a href="#">Volume-4,Issue-4,August (Published on August 25,2015)</a>
        
        <a href="#">Volume-4,Issue-3,June (Published on June 25,2015)</a>
        
        <a href="#">Volume-4,Issue-2,April (Published on April 25,2015)</a>
        
        <a href="#">Volume-4,Issue-1,February (Published on February 25,2015)</a>
        
        <a href="#">Volume-3,Issue-6,December (Published on December 25,2014)</a>
        
        <a href="#">Volume-3,Issue-5,October (Published on October 25,2014)</a>
        
        <a href="#">Volume-3,Issue-4,August (Published on August 25,2014)</a>
        
        <a href="#">Volume-3,Issue-3,June (Published on June 25,2014)</a>
        
        <a href="#">Volume-3,Issue-2,April (Published on April 25,2014)</a>
        
        <a href="#">Volume-3,Issue-1,Febraury (Published on Febraury 25,2014)</a>
        
        <a href="#">Volume-2,Issue-6,December (Published on December 25,2013)</a>
        
        <a href="#">Volume-2,Issue-5,October (Published on October 25,2013)</a>
        
        <a href="#">Volume-2,Issue-4,August (Published on August 25,2013)</a>
        
        <a href="#">Volume-2,Issue-3,June (Published on June 25,2013)</a>
        
        <a href="#">Volume-2,Issue-2,April (Published on April 25,2013)</a>
        
        <a href="#">Volume-2,Issue-1,February (Published on February 25,2013)</a>
        
        <a href="#">Volume-1,Issue-2,December (Published on December 25,2012)</a>
        
        <a href="#">Volume-1,Issue-1,October (Published on October 25,2012)</a>
      </div>                              
    	
      <div style="clear:both;"></div>  
        
      <?php include_once("footer.php"); ?>
    </div>
    
	
    
	<script>
    
    var clicked = document.getElementById("clicked");
    clicked.click();
    function openCity(evt, listName) {
      var i, x, tablinks;
      x = document.getElementsByClassName("list");
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < x.length; i++) {
         tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
      }
      document.getElementById(listName).style.display = "block";
      evt.currentTarget.className += " w3-red";
    }
    </script> 
    
    <!----------Adding active Class----------->
    <script>
		document.getElementsByClassName("make-active")[2].className += " active";
	</script>
</body>
</html>
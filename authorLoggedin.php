<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>
<?php 
	$authorLoginId = $_SESSION["authorLoginId"]; 
	$selectProfileInfo = "SELECT * FROM author WHERE id={$authorLoginId}";
	
	$resultProfileInfo = mysqli_query($connection,$selectProfileInfo);
	$row = mysqli_fetch_assoc($resultProfileInfo);
?>

<?php
	$updateAuthorId = "UPDATE author SET author_id={$authorLoginId} WHERE id={$authorLoginId}";
	$resultAuthorId = mysqli_query($connection,$updateAuthorId);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" type="text/css" href="css/scrollBar.css">
<title>MIST Journal</title>

<style>
	@font-face {
		font-family:sign-paint;
		src:url(fonts/American%20Brewery%20Rough.ttf);	
	}
	
	* {
		padding:0px;
		margin:0px;
		box-sizing:border-box;	
	}
	.author-profile-container {
		width:80%;
		position:relative;
		margin:0px auto 10px auto;
		background-color:#f1f1f1;
		min-height:500px;
		top:110px;	
	}
	
	.author-profile-content {
		width:550px;
		display:block;
		margin:auto;	
	}
	
	.author-profile-content {
		padding:20px 25px;	
	}
	
	.author-profile-content strong {
		font-family:sign-paint;	
	}
	
	.author-profile-container p {
		margin-bottom:30px;
	}
	
	.update-btn {
		height:40px;	
	}
	
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body>
    
    <?php include_once("authorNavigationBar.php"); ?>
    
    <div class="author-profile-container">
    
		<div class="author-profile-content">
            <p><strong>Name: </strong><span><?php echo $row["fn"] ." ". $row["ln"]; ?></span></p>
            
            <p>
            <button class="update-btn w3-btn w3-green"
            onClick="document.getElementById('authorChangePassword').style.display='block'">Change Password
            </button>
            </p>
            
            <p><strong>Address: </strong>
            <span id="authorAdress"></span>
            <button class="w3-btn w3-green update-btn" 
            onClick="document.getElementById('authorChangeAddress').style.display='block'">
            Update Address 
            </button>
            </p>
            
            <p>
            <strong>Telephone: </strong><span id="authorTelephone"></span>
            <button class="w3-btn w3-green update-btn" 
            onClick="document.getElementById('authorChangeTel').style.display='block';">
            Update Telephone Number
            </button>
            </p>
            
            <p><strong>Email: </strong><span><?php echo $row["email"]; ?></span></p>
            <p><strong>Website Link: </strong><span></span><?php echo $row["website"]; ?></span></p>
            <p><strong>Department: </strong><span><?php echo $row["dept"]; ?></span></p>
            <p><strong>Institution: </strong><span><?php echo $row["institution"]; ?></span></p>
            <p><strong>Affliation: </strong><span><?php echo $row["affliation"]; ?></span></p>
            <p><strong>Fields of Interest: </strong><span><?php echo $row["foi"]; ?></span></p>
        </div>
    	
    </div>
    
    <?php include_once("footer.php"); ?>
    
    <script>
		var authorAnchor = document.getElementsByClassName("header-link");
		authorAnchor[0].classList.add("active");
	</script>
    
   
   <!-------------Author Password Change Modal------------------>
   <div id="authorChangePassword" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
		
      <div class="w3-center">
      	<p style="position:relative;width:200px; margin:auto;">Change Password</p>
        <span onclick="document.getElementById('authorChangePassword').style.display='none'" 
        class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form name="authorChangePasswordForm" id="authorChangePasswordFormId" class="w3-container" method="post" 
      onSubmit="return false;">
        <div class="w3-section">
        
          <!-------------Current Password------------------>
          <label><b>Current Password: </b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="Enter Current" name="cPass" 
          onChange="enableNewPassword()" required>
          
          <!-------------New Password------------------>
          <label><b>New Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="nPass" required disabled>
          
          <!-------------Change Password Button------------------>
          <button id="authorChangePasswordBtn" class="w3-btn-block w3-green w3-section w3-padding" type="submit">
          Change Password</button>
        </div>
        <span id="authorChangePasswordLoginMessage"></span>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('authorChangePassword').style.display='none'" type="button" 
        class="w3-btn w3-red w3-right">Close</button>
      </div>
		
    </div>
  </div>
  
  
  
  <!-------------------------Author Change Address Modal-------------------->
   <div id="authorChangeAddress" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
		
      <div class="w3-center">
      	<p style="position:relative;width:200px; margin:auto;">Change Address</p>
        <span onclick="document.getElementById('authorChangeAddress').style.display='none'" 
        class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form name="authorChangeAddressForm" id="authorChangeAddressFormId" class="w3-container" method="post" 
      onSubmit="return false;">
      
      	<!-------------------------Change City-------------------->
        <div class="w3-section">
          <label><b>City: </b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter City" name="authorChangeCity" 
          required>
          
          <!-------------------------Change State-------------------->
          <label><b>State: </b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter State" name="authorChangeState" required>
          
          <!-------------------------Change Country-------------------->
          <label><b>Country: </b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Country" 
          name="authorChangeCountry" required>
          
          <!-------------------------Change Address Button-------------------->
          <button id="authorChangeAddressBtn" class="w3-btn-block w3-green w3-section w3-padding" type="submit">
          Change Adress</button>
        </div>
        <span id="authorChangeAddressLoginMessage"></span>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('authorChangeAddress').style.display='none'" type="button" 
        class="w3-btn w3-red w3-right">Close</button>
      </div>
		
    </div>
  </div>
  
  
  <!-------------------------Telephone Number Change Modal-------------------->
   <div id="authorChangeTel" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
		
      <div class="w3-center">
      	<p style="position:relative;width:200px; margin:auto;">Change Telephone Number: </p>
        <span onclick="document.getElementById('authorChangeTel').style.display='none'" 
        class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form name="authorChangeTelephoneForm" id="authorChangeTelephoneFormId" class="w3-container" method="post" 
      onSubmit="return false;">
      
      	<!-------------------------Change Telephone-------------------->
        <div class="w3-section">
        	
          <!---------Update Telephone Number----------->
          <label><b>Update Telephone Number: </b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter telephone number" 
          name="authorChangeTelephone" required>
          
          <!-------------------------Change Telephone Button-------------------->
          <button id="authorChangeTelephoneBtn" class="w3-btn-block w3-green w3-section w3-padding" type="submit">
          Save</button>
        </div>
        <span id="authorChangeTelephoneLoginMessage"></span>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('authorChangeTel').style.display='none'" type="button" 
        class="w3-btn w3-red w3-right">Close</button>
      </div>
		
    </div>
  </div>
  
  <script>
  		function enableNewPassword() {
			var currentPassword = "<?php echo $row["password"]; ?>";
			var currentPasswordInput = document.forms["authorChangePasswordForm"]["cPass"].value;
			
			if(currentPassword == currentPasswordInput) {
				document.forms["authorChangePasswordForm"]["nPass"].disabled = false;		
			} else {
				document.forms["authorChangePasswordForm"]["nPass"].disabled = true;	
			}
			
		}
		
  </script>
  
  
  <!-----------------Sending Change Password Info using jQuery AJAX----------->
  <script>
  		$(document).ready(function() {
            $("#authorChangePasswordBtn").click(function() {
				var currentPasswordInputJS = document.forms["authorChangePasswordForm"]["cPass"].value;
				var newPasswordInputJS = document.forms["authorChangePasswordForm"]["nPass"].value;
				
				if(currentPasswordInputJS.length > 0 && newPasswordInputJS.length > 0) {
					$.post(
						"authorPasswordChange.php",
						{
							newPasswordInput: newPasswordInputJS
						},
						function(output) {
							$("#authorChangePasswordLoginMessage").html(output);
							document.getElementById("authorChangePasswordFormId").reset();
						}
					); //------post()------
				} else {
					$("#authorChangePasswordLoginMessage").html("Current Password and New Password is required to change password");	
				}
					
			}); //------click()--------
        }); //-----ready()------
  </script>
  
  
  <!-------------Sending Change Adress Info using jQuery AJAX-------------->
  <script>
  		$(document).ready(function() {
			$("#authorChangeAddressBtn").click(function() {
				var authorChangeCityJS = document.forms["authorChangeAddressForm"]["authorChangeCity"].value;
				var authorChangeStateJS = document.forms["authorChangeAddressForm"]["authorChangeState"].value;	
				var authorChangeCountryJS = document.forms["authorChangeAddressForm"]["authorChangeCountry"].value;
					
				if(authorChangeCityJS.length > 0 && authorChangeStateJS.length > 0) {	
				
					if(authorChangeCountryJS.length > 0) {
						$.post(
							"authorChangeAddressProcess.php",
							{
								authorChangeCity: authorChangeCityJS,
								authorChangeState: authorChangeStateJS,
								authorChangeCountry: authorChangeCountryJS	
							},
							function(output) {
								$("#authorChangeAddressLoginMessage").html(output);
								document.getElementById("authorChangeAddressFormId").reset();
		
							}
						); //-------------post()----------
					
					}
				
				}
				
			});	//-------click()---------
			
		});  //----------ready()---------

  </script>

  <!---------------Address load each 3 seconds----------->
  <script>
  		$(document).ready(function() {
            setInterval(function() {
				$("#authorAdress").load("authorRetrieveUpdatedAddress.php");
			}, 1000);
        });
  </script>
  
  
  <!-------------Sending Change Telephone Info using jQuery AJAX-------------->
  <script>
  		$(document).ready(function() {
			$("#authorChangeTelephoneBtn").click(function() {
				var authorChangeTelephoneLoginJS = document.forms["authorChangeTelephoneForm"]["authorChangeTelephone"].value;
				
				if(authorChangeTelephoneLoginJS.length > 0) {
					$.post(
						"authorChangeTelephoneProcess.php",
						{
							authorChangeTelephone: authorChangeTelephoneLoginJS	
						},
						function(output) {
							$("#authorChangeTelephoneLoginMessage").html(output);
							document.getElementById("authorChangeTelephoneFormId").reset();
						}
					);	//-------post()---------
				
				}
				
			});	 //---------click()---------
		});  //-----------ready()-----------
  </script>
  
  <script>
  	$(document).ready(function() {
        setInterval(function() {
			$("#authorTelephone").load("authorFetchTelephoneNumber.php");
		},1000);
    });
  </script>
</body>
</html>
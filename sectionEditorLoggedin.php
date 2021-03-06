<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>

<?php
	$seLoginId = $_SESSION["seLoginId"];
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Section Editor</title>

<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/home.css">

<style>

	* {
		margin:0px;
		padding:0px;
		box-sizing:border-box;	
	}
	
	@font-face {
		font-family:sign-paint;
		src:url(fonts/American%20Brewery%20Rough.ttf);	
	}
	
	.editor-prfile-container {
		width:80%;
		margin:0px auto 10px auto;
		background-color:#f1f1f1;
		min-height:400px;
		position:relative;
		top:110px;	
		padding:20px;
	}
	
	.editor-prfile-container strong {
		font-family:sign-paint;	
	}
	
	.editor-prfile-container table {
		width:700px;
		/*border:1px solid black;*/
		margin:auto;	
	}
	
	.editor-prfile-container table td {
		/*border:1px solid black;	*/
		padding-bottom:20px;
	}
	
	.col1 {
		width:200px;	
	}
	
	.col2 {
		width:300px;	
	}
	
	.col3 {
		width:200px;	
	}
</style>
</head>

<body>

	<?php include_once("sectionEditorNavigationBar.php"); ?>
    
    <?php  
		$seSelectProfile = "SELECT * FROM section_editor WHERE id=$seLoginId";
		
		$seResultProfile = mysqli_query($connection,$seSelectProfile);
		$seRowProfile = mysqli_fetch_assoc($seResultProfile);
	?>
    
    <div class="editor-prfile-container">
    	<table>
        	<tr>
            	<td class="col1"><strong>Name:</strong> </td>
                <td class="col2"><?php echo $seRowProfile["seFn"]. " " .$seRowProfile["seLn"]; ?></td>
                <td class="col3"></td>		
            </tr>
            
            <tr>
                <td><button class="w3-btn w3-green" 
                onClick="document.getElementById('sectionEditorChangePassword').style.display='block';">Update Password</button></td>	
            </tr>
            
            <tr>
            	<td class="col1"><strong>Telephone:</strong> </td>
                <td class="col2"><?php echo $seRowProfile["seTel"]; ?></td>
                <td class="col3"><button class="w3-btn w3-green">Update Telephone</button></td>
            </tr>
            
            <tr>
            	<td class="col1"><strong>Email:</strong> </td>
                <td class="col2"><?php echo $seRowProfile["seEmail"]; ?></td>
                <td class="col3"></td>	
            </tr>
            
            <tr>
            	<td class="col1"><strong>Fax:</strong> </td>
                <td class="col2"><?php echo $seRowProfile["seFax"]; ?></td>
                <td class="col3"></td>	
            </tr>
            
            <tr>
            	<td class="col1"><strong>Address:</strong> </td>
                <td class="col2"><?php echo $seRowProfile["seCity"]. ", " .$seRowProfile["seState"]. ", " .$seRowProfile["seCountry"]; ?></td>
                <td class="col3"><button class="w3-btn w3-green">Update Address</button></td>	
            </tr>
            
            <tr>
            	<td class="col1"><strong>Institution:</strong> </td>
                <td class="col2"><?php echo $seRowProfile["seInstitute"]; ?></td>
                <td class="col3"></td>	
            </tr>
            
            <tr>
            	<td class="col1"><strong>Academic Degree: </strong></td>
                <td class="col2"><?php echo $seRowProfile["seAd"]; ?></td>
                <td class="col3"></td>	
            </tr>
            
            <tr>
            	<td class="col1"><strong>Title:</strong> </td>
                <td class="col2"><?php echo $seRowProfile["seTitle"]; ?></td>
                <td class="col3"></td>	
            </tr>
            
            <tr>
            	<td class="col1"><strong>Research Area:</strong> </td>
                <td class="col2"><?php echo $seRowProfile["seResearch"]; ?></td>
                <td class="col3"></td>	
            </tr>
            
            <tr>
            	<td class="col1"><strong>Personal Website:</strong> </td>
                <td class="col2"><?php echo $seRowProfile["seWebsite"]; ?></td>
                <td class="col3"></td>	
            </tr>
        </table>
    </div>
    
    <?php include_once("footer.php"); ?>
    
    <script>
		document.getElementsByClassName("header-link")[0].classList.add("active");
	</script>
    
   <!-------------Section Editor Password Change Modal------------------>
   <div id="sectionEditorChangePassword" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
		
      <div class="w3-center">
      	<p style="position:relative;width:200px; margin:auto;">Change Password</p>
        <span onclick="document.getElementById('editorChangePassword').style.display='none'" 
        class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form name="editorChangePasswordForm" class="w3-container" method="post" onSubmit="return false;">
        <div class="w3-section">
        
          <!-------------Current Password------------------>
          <label><b>Current Password: </b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="Enter Current" name="cPass" 
          onChange="enableNewPassword()" required>
          
          <!-------------New Password------------------>
          <label><b>New Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="nPass" required disabled>
          
          <!-------------Change Password Button------------------>
          <button id="editorChangePasswordBtn" class="w3-btn-block w3-green w3-section w3-padding" type="submit">
          Change Password</button>
        </div>
        <span id="editorChangePasswordLoginMessage"></span>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('editorChangePassword').style.display='none'" type="button" 
        class="w3-btn w3-red w3-right">Close</button>
      </div>
		
    </div>
  </div>
    
    
  <script>
  		function enableNewPassword() {
			var currentPassword = "<?php echo $editorRowProfile["password"]; ?>";
			var currentPasswordInput = document.forms["editorChangePasswordForm"]["cPass"].value;
			
			if(currentPassword == currentPasswordInput) {
				document.forms["editorChangePasswordForm"]["nPass"].disabled = false;		
			} else {
				document.forms["editorChangePasswordForm"]["nPass"].disabled = true;	
			}
			
		}
		
  </script>
  
  
  <!-----------------Sending Change Password Info using jQuery AJAX----------->
  <script>
  		$(document).ready(function() {
            $("#editorChangePasswordBtn").click(function() {
				var editorCurrentPasswordInputJS = document.forms["editorChangePasswordForm"]["cPass"].value;
				var editorNewPasswordInputJS = document.forms["editorChangePasswordForm"]["nPass"].value;
				
				if(editorCurrentPasswordInputJS.length > 0 && editorNewPasswordInputJS.length > 0) {
					$.post(
						"editorPasswordChange.php",
						{
							editorNewPasswordInput: editorNewPasswordInputJS
						},
						function(output) {
							$("#editorChangePasswordLoginMessage").html(output);
						}
					); //------post()------
				} else {
					$("#editorChangePasswordLoginMessage").html("Current Password and New Password is required to change password");	
				}
					
			}); //------click()--------
        }); //-----ready()------
  </script>
</body>
</html>
<div id="editorLogin" class="w3-modal">
  <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
  
    <div class="w3-center"><br>
      <span onclick="document.getElementById('editorLogin').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
      <img src="images/img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
    </div>

    <form name="editorLoginForm" class="w3-container" method="post" onSubmit="return false;">
      <div class="w3-section">
        <label><b>E-mail</b></label>
        <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Username" name="editorLoginEmail" 
        required>

        <label><b>Password</b></label>
        <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="editorLoginPassword" required>

        <button id="editorLoginBtn" class="w3-btn-block w3-green w3-section w3-padding" type="submit">Login</button>
        <p id="incorrectEmail"></p>
        <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
      </div>
    </form>

    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
      <button onclick="document.getElementById('editorLogin').style.display='none'" type="button" class="w3-btn w3-red">Cancel
      </button>
      <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
    </div>

  </div>
</div>

<script>
	$(document).ready(function() {
		$("#editorLoginBtn").click(function() {
			var editorLoginEmailJS = document.forms["editorLoginForm"]["editorLoginEmail"].value;	
			var editorLoginPasswordJS = document.forms["editorLoginForm"]["editorLoginPassword"].value;
			
			$.post(
				"editorLoginFormProcess.php",
				{
					editorLoginEmail: editorLoginEmailJS,
					editorLoginPassword: editorLoginPasswordJS
				},
				function(output) {
					
					if(output.indexOf("success") != -1) {
						window.location = "editorLoggedin.php";
					} else {
						document.getElementById("incorrectEmail").innerHTML = "Icorrect Email & Password";
					}
					
				}
			);
			
		});	//---------click()--------
	}); //-----ready()-------
</script>
<style>
	.error-message {
		color:red;
		font-weight:bold;	
	}
</style>

<div id="reviewerLogin" class="w3-modal">
  <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
  
    <div class="w3-center"><br>
      <span onclick="document.getElementById('reviewerLogin').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
      <img src="images/img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
    </div>

    <form class="w3-container" name="rLoginFormName" onSubmit="return false;">
      <div class="w3-section">
        <label><b>E-mail</b></label>
        <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Username" name="rLoginEmail">
        <p id="rEmailLoginErr" class="error-message"></p>

        <label><b>Password</b></label>
        <input class="w3-input w3-border" name="rLoginPassword" type="password" placeholder="Enter Password">
        <p id="rPasswordLoginErr" class="error-message"></p>

        <button id="rLoginBtn" class="w3-btn-block w3-green w3-section w3-padding" type="submit">Login</button>
        <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
      </div>
      <p id="rMissMatchMessage" class="error-message"></p>
    </form>

    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
      <button onclick="document.getElementById('reviewerLogin').style.display='none'" type="button" class="w3-btn w3-red">Cancel
      </button>
      <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
    </div>

  </div>
</div>

<script>
	$(document).ready(function() {
		
		$("#rLoginBtn").click(function() {
		
			var rLoginEmailJS = document.forms["rLoginFormName"]["rLoginEmail"].value;
			var rLoginPasswordJS = document.forms["rLoginFormName"]["rLoginPassword"].value;
		
			$.post(
				"reviewerLoginProcess.php",
				{
					rLoginEmail: rLoginEmailJS,
					rLoginPassword: rLoginPasswordJS
				},
				function(output) {
					
					if(output.indexOf("Logged in successfully") != -1) {
						window.location = "reviewerLoggedIn.php";
					}
					if(output.indexOf("Login Failed") != -1) {
						document.getElementById("rEmailLoginErr").innerHTML = "";
						document.getElementById("rPasswordLoginErr").innerHTML = "";
						
						document.getElementById("rMissMatchMessage").innerHTML = "Incorrect Email/Password";						
					}
					else {
						var rLoginFoo = JSON.parse(output);
						
						document.getElementById("rMissMatchMessage").innerHTML = "";
						document.getElementById("rEmailLoginErr").innerHTML = rLoginFoo[0];
						document.getElementById("rPasswordLoginErr").innerHTML = rLoginFoo[1];
					}
				}
			);
		
		}); //------click()------
		
	}); //-----ready()-----
</script>
<style>
	.error-message {
		color:red;
		font-weight:bold;	
	}
</style>

<div id="sectionEditorLogin" class="w3-modal">
  <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
  
    <div class="w3-center"><br>
      <span onclick="document.getElementById('sectionEditorLogin').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
      <img src="images/img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
    </div>

    <form class="w3-container" name="seLoginFormName" onSubmit="return false;">
      <div class="w3-section">
        <label><b>E-mail</b></label>
        <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Username" name="seLoginEmail">
        <p id="seLoginEmailErr" class="error-message"></p>

        <label><b>Password</b></label>
        <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="seLoginPassword">
        <p id="seLoginPasswordErr" class="error-message"></p>

        <button class="w3-btn-block w3-green w3-section w3-padding" id="seLoginBtn" type="submit">Login</button>
        <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
      </div>
      
      <p id="missMatchMessage" class="error-message"></p>
    </form>

    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
      <button onclick="document.getElementById('sectionEditorLogin').style.display='none'" type="button" class="w3-btn w3-red">
      Cancel</button>
      <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
    </div>

  </div>
</div>

<script>
	$(document).ready(function() {
		$("#seLoginBtn").click(function() {
			
			var seLoginEmailJS = document.forms["seLoginFormName"]["seLoginEmail"].value;
			var seLoginPasswordJS = document.forms["seLoginFormName"]["seLoginPassword"].value;
			
			$.post(
				"sectionEditorLoginProcess.php",
				{
					seLoginEmail: seLoginEmailJS,
					seLoginPassword: seLoginPasswordJS
				},
				function(output) {
					if(output.indexOf("Login successful") != -1) {
						window.location = "sectionEditorLoggedin.php";	
					}
					if(output.indexOf("Login Failed") != -1) {
						document.getElementById("seLoginEmailErr").innerHTML = "";
						document.getElementById("seLoginPasswordErr").innerHTML = "";
						
						document.getElementById("missMatchMessage").innerHTML = "Incorrect Email/Password";
						//alert("Incorrect Email/Password...");	
					}
					else {
						var seLoginFoo = JSON.parse(output);
						
						document.getElementById("missMatchMessage").innerHTML = "";	
						document.getElementById("seLoginEmailErr").innerHTML = seLoginFoo[0];
						document.getElementById("seLoginPasswordErr").innerHTML = seLoginFoo[1];
					}
				}
			);
			
		}); //----click()----	
	}); //-----ready()-----
</script>
<div id="copyEditorLogin" class="w3-modal">
  <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
  
    <div class="w3-center"><br>
      <span onclick="document.getElementById('copyEditorLogin').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
      <img src="images/img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
    </div>

    <form class="w3-container" name="ceLoginFormName" onSubmit="return false;">
      <div class="w3-section">
        <label><b>E-mail</b></label>
        <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Username" name="ceLoginEmail">
        <p id="ceEmailLoginErr" class="error-message"></p>

        <label><b>Password</b></label>
        <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="ceLoginPassword">
        <p id="cePasswordLoginErr" class="error-message"></p>

        <button id="ceLoginBtnId" class="w3-btn-block w3-green w3-section w3-padding" type="submit">Login</button>
        <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
      </div>
      <p id="ceMissMatchMessage" class="error-message"></p>
    </form>

    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
      <button onclick="document.getElementById('copyEditorLogin').style.display='none'" type="button" class="w3-btn w3-red">
      Cancel</button>
      <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
    </div>

  </div>
</div>

<script>
	$(document).ready(function() {
		
		$("#ceLoginBtnId").click(function() {
			
			var ceLoginEmailJS = document.forms["ceLoginFormName"]["ceLoginEmail"].value;
			var ceLoginPasswordJS = document.forms["ceLoginFormName"]["ceLoginPassword"].value;
			
			$.post(
				"copyEditorLoginProcess.php",
				{
					ceLoginEmail: ceLoginEmailJS,
					ceLoginPassword: ceLoginPasswordJS
				},
				function(output) {
					
					if(output.indexOf("Logged in successfully") != -1) { 
						window.location = "copyEditorLoggedin.php";
					}
					if(output.indexOf("Login Failed") != -1) {
						document.getElementById("ceEmailLoginErr").innerHTML = "";
						document.getElementById("cePasswordLoginErr").innerHTML = "";
						alert("Incorrect Password/Email");
					}
					else {
						var ceLoginFoo = JSON.parse(output);
						
						document.getElementById("ceEmailLoginErr").innerHTML = ceLoginFoo[0];
						document.getElementById("cePasswordLoginErr").innerHTML = ceLoginFoo[1];
					}
				}
			);	
		});
			
	});
</script>
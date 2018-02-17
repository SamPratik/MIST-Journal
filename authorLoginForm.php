
<style>
	.error-message {
		color:red;
		font-weight:bold;	
	}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<div id="authorLogin" class="w3-modal">
  <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
  
    <div class="w3-center"><br>
      <span onclick="document.getElementById('authorLogin').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
      <img src="images/img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
    </div>

    <form class="w3-container" id="authorLoginFormId" name="authorLoginForm" method="post" onSubmit="return false;">
      <div class="w3-section">
        <label><b>E-mail</b></label>
        <input class="w3-input w3-border w3-margin-bottom" id="authorLoginEmailId" type="email" placeholder="Enter Username"
         name="authorLoginEmail">
        <p class="error-message" id="authorLoginEmailErr"></p>

        <label><b>Password</b></label>
        <input class="w3-input w3-border" id="authorLoginPasswordId" type="password" placeholder="Enter Password" 
        name="authorLoginPassword">
        <p class="error-message" id="authorLoginPasswordErr"></p>

        <button id="authorLoginBtn" class="w3-btn-block w3-green w3-section w3-padding">Login</button> <br/>
        
        <p class="error-message" id="authorMissMatchMessage"></p>
        
        <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
      </div>
    </form>

    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
      <button onclick="document.getElementById('authorLogin').style.display='none'" type="button" class="w3-btn w3-red">
      Cancel</button>
      <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
    </div>

  </div>
</div>

<script>
	$(document).ready(function() {
		$("#authorLoginBtn").click(function() {
			var authorLoginEmail = $("#authorLoginEmailId").val();
			var authorLoginPassword = $("#authorLoginPasswordId").val();
			
				/*$.ajax({
					url: "authorLoginFormProcess.php",
					method: "POST",
					data: {authorLoginEmail:authorLoginEmail, authorLoginPassword:authorLoginPassword},
					cache: false
				});*/
				$.post(
					"authorLoginFormProcess.php",
					{
						authorLoginEmail:authorLoginEmail,	
						authorLoginPassword:authorLoginPassword
					},
					function(output) {
						if(output.indexOf("Login successful") != -1) {
							window.location = "authorLoggedin.php";	
						}
						if(output.indexOf("Login Failed") != -1) {
							document.getElementById("authorLoginEmailErr").innerHTML = "";
							document.getElementById("authorLoginPasswordErr").innerHTML = "";
							
							document.getElementById("authorMissMatchMessage").innerHTML = "Incorrect Email/Password";
							//alert("Incorrect Email/Password...");	
						}
						else {
							var seLoginFoo = JSON.parse(output);
							
							document.getElementById("authorMissMatchMessage").innerHTML = "";	
							document.getElementById("authorLoginEmailErr").innerHTML = seLoginFoo[0];
							document.getElementById("authorLoginPasswordErr").innerHTML = seLoginFoo[1];
						}
					}
					
				);  //-------post()---------
			
		}); //------click()--------
	}); //------ready()-------
</script>
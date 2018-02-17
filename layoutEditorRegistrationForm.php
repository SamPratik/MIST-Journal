
<style>
	.error-message {
		color:red;
		font-weight:bold;	
	}
</style>

<div id="layoutEditorReg" class="layout-editor-container" style="position:fixed;height:100%;width:100%;z-index:1001;background-color:rgba(0,0,0,0.9);top:0px;left:0px;display:none;">


	<!---------------------Modal Content(White Background)------------------>
	<div class="layout-editor-registration-content  w3-animate-zoom">
    	
        
        <!---------------------Form------------------>
        <form class="" name="layoutEditorRegFormName" onSubmit="return false;">
        
        
        	<!---------------------Close Buttons------------------>
        	<span class="closeBtn" onclick="document.getElementById('layoutEditorReg').style.display='none'">&times;</span>	
        	<h2>Layout Editor Registration</h2>
            
            
            <!---------------------First Name & Last Name------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>First Name</strong></label>
                <input class="w3-input w3-border" name="leFn" type="text" placeholder="">
                <p id="leFnErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>Last Name</strong></label>
                <input class="w3-input w3-border" name="leLn" type="text" placeholder="">
                <p id="leLnErr" class="error-message"></p>
              </div>
            </div>     
            
            
            
            <!---------------------Password & Repeat Password------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>Password</strong></label>
                <input class="w3-input w3-border" name="lePassword" type="password" placeholder="">
                <p id="lePasswordErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>Repeat Password</strong></label>
                <input class="w3-input w3-border" name="leRepeatPassword" type="password" placeholder="">
              </div>
            </div>   
            
            
            
            <!---------------------City & Province------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>City</strong></label>
                <input class="w3-input w3-border" name="leCity" type="text" placeholder="">
                <p id="leCitytErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>State/Province</strong></label>
                <input class="w3-input w3-border" name="leState" type="text" placeholder="">
                <p id="leStateErr" class="error-message"></p>
              </div>
            </div>
            
            
            
            
            <!---------------------Country & Institute------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>Country</strong></label>
                <input class="w3-input w3-border" name="leCountry" type="text" placeholder="">
                <p id="leCountryErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>Institute</strong></label>
                <input class="w3-input w3-border" name="leInstitute" type="text" placeholder="">
                <p id="leInstituteErr" class="error-message"></p>
              </div>
            </div>  
            
            
            
            
            <!---------------------E-mail------------------>
            <div class="w3-container">
            	<label><strong>E-mail</strong></label>
                <input class="w3-input w3-border w3-animate-input" name="leEmail" type="email" style="width:50%">
                <p id="leEmailErr" class="error-message"></p>
            </div>          
            
            
            
            
            <!---------------------Telephone Number & Fax Number------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>Telephone Number</strong></label>
                <input class="w3-input w3-border" name="leTel" type="text" placeholder="">
                <p id="leTelErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>Fax Number</strong></label>
                <input class="w3-input w3-border" name="leFax" type="text" placeholder="">
                <p id="leFaxErr" class="error-message"></p>
              </div>
            </div> 
            
            
            
            <!---------------------Personal Websites------------------>
            <div class="w3-container">
            	<label><strong>Personal Website</strong></label>
                <input class="w3-input w3-border w3-animate-input" name="leWebsite" type="text" style="width:50%">
                <p id="leWebsiteErr" class="error-message"></p>
            </div>    
            
            <input id="layoutEditorRegBtn" type="submit" style="width:50%; display:block; margin:auto;background-color:#32CD99;height:50px;" class="w3-btn w3-margin-top w3-round-large" value="Submit">                       
            
	    </form>
        
    </div>
</div>

<script>
	$(document).ready(function() {
		
		$("#layoutEditorRegBtn").click(function() {
			
			var leFnJS = document.forms["layoutEditorRegFormName"]["leFn"].value;
			var leLnJS = document.forms["layoutEditorRegFormName"]["leLn"].value;
			var lePasswordJS = document.forms["layoutEditorRegFormName"]["lePassword"].value;
			var leCityJS = document.forms["layoutEditorRegFormName"]["leCity"].value;
			var leStateJS = document.forms["layoutEditorRegFormName"]["leState"].value;
			var leCountryJS = document.forms["layoutEditorRegFormName"]["leCountry"].value;
			var leInstituteJS = document.forms["layoutEditorRegFormName"]["leInstitute"].value;
			var leEmailJS = document.forms["layoutEditorRegFormName"]["leEmail"].value;
			var leTelJS = document.forms["layoutEditorRegFormName"]["leTel"].value;
			var leFaxJS = document.forms["layoutEditorRegFormName"]["leFax"].value;
			var leWebsiteJS = document.forms["layoutEditorRegFormName"]["leWebsite"].value;
			
			$.post(
				"layoutEditorRegistrationProcess.php",
				{
					leFn: leFnJS,
					leLn: leLnJS,
					lePassword: lePasswordJS,
					leCity: leCityJS,
					leState: leStateJS,
					leCountry: leCountryJS,
					leInstitute: leInstituteJS,
					leEmail: leEmailJS,
					leTel: leTelJS,
					leFax: leFaxJS,
					leWebsite: leWebsiteJS
				},
				function(output) {
					
					
					if(output.indexOf("You are registered successfully") != -1) {
						alert(output);
						window.location = "index.php";
					}
					
					else {
						var leFoo = JSON.parse(output);
						
						document.getElementById("leFnErr").innerHTML = leFoo[0];
						document.getElementById("leLnErr").innerHTML = leFoo[1];
						document.getElementById("lePasswordErr").innerHTML = leFoo[2];
						document.getElementById("leCitytErr").innerHTML = leFoo[3];
						document.getElementById("leStateErr").innerHTML = leFoo[4];
						document.getElementById("leCountryErr").innerHTML = leFoo[5];
						document.getElementById("leInstituteErr").innerHTML = leFoo[6];
						document.getElementById("leEmailErr").innerHTML = leFoo[7];
						document.getElementById("leTelErr").innerHTML = leFoo[8];
						document.getElementById("leFaxErr").innerHTML = leFoo[9];
						document.getElementById("leWebsiteErr").innerHTML = leFoo[10];
					}
				}
			);
				
		});
			
	});
</script>
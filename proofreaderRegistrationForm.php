
<style>
	.error-message {
		color:red;
		font-weight:bold;	
	}
</style>

<div id="proofreaderReg" class="proofreader-container" style="position:fixed;height:100%;width:100%;z-index:1001;background-color:rgba(0,0,0,0.9);top:0px;left:0px;display:none;">


	<!---------------------Modal Content(White Background)------------------>
	<div class="proofreader-registration-content  w3-animate-zoom">
    	
        
        <!---------------------Form------------------>
        <form class="" name="pRegFormName" onSubmit="return false;">
        
        
        	<!---------------------Close Buttons------------------>
        	<span class="closeBtn" onclick="document.getElementById('proofreaderReg').style.display='none'">&times;</span>	
        	<h2>Proofreader Registration</h2>
            
            
            <!---------------------First Name & Last Name------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>First Name</strong></label>
                <input name="pFn" class="w3-input w3-border" type="text" placeholder="">
                <p id="pFnErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>Last Name</strong></label>
                <input name="pLn" class="w3-input w3-border" type="text" placeholder="">
                <p id="pLnErr" class="error-message"></p>
              </div>
            </div>     
            
            
            
            <!---------------------Password & Repeat Password------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>Password</strong></label>
                <input name="pPassword" class="w3-input w3-border" type="password" placeholder="">
                <p id="pPasswordErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>Repeat Password</strong></label>
                <input class="w3-input w3-border" type="password" placeholder="">
              </div>
            </div>  
            
            
            
            <!---------------------City & Province------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>City</strong></label>
                <input name="pCity" class="w3-input w3-border" type="text" placeholder="">
                <p id="pCityErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>State/Province</strong></label>
                <input name="pState" class="w3-input w3-border" type="text" placeholder="">
                <p id="pStateErr" class="error-message"></p>
              </div>
            </div>
            
            
            
            
            <!---------------------Country & Institute------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>Country</strong></label>
                <input name="pCountry" class="w3-input w3-border" type="text" placeholder="">
                <p id="pCountryErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>Institute</strong></label>
                <input name="pInstitute" class="w3-input w3-border" type="text" placeholder="">
                <p id="pInstituteErr" class="error-message"></p>
              </div>
            </div>  
            
            
            
            
            <!---------------------E-mail------------------>
            <div class="w3-container">
            	<label><strong>E-mail</strong></label>
                <input name="pEmail" class="w3-input w3-border w3-animate-input" type="email" style="width:50%">
                <p id="pEmailErr" class="error-message"></p>
            </div>           
            
            
            
            
            <!---------------------Telephone Number & Fax Number------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>Telephone Number</strong></label>
                <input name="pTel" class="w3-input w3-border" type="text" placeholder="">
                <p id="pTelErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>Fax Number</strong></label>
                <input name="pFax" class="w3-input w3-border" type="text" placeholder="">
                <p id="pFaxErr" class="error-message"></p>
              </div>
            </div> 
            
            
            
            <!---------------------Personal Websites------------------>
            <div class="w3-container">
            	<label><strong>Personal Website</strong></label>
                <input name="pWebsite" class="w3-input w3-border w3-animate-input" type="text" style="width:50%">
                <p id="pWebsiteErr" class="error-message"></p>
            </div>    
            
            <input id="proofreaderRegBtn" type="submit" style="width:50%; display:block; margin:auto;background-color:#32CD99;height:50px;" class="w3-btn w3-margin-top w3-round-large" value="Submit">                       
            
	    </form>
        
    </div>
</div>

<script>
	$(document).ready(function() {
		
		$("#proofreaderRegBtn").click(function() {
			
			var pFnJS = document.forms["pRegFormName"]["pFn"].value;
			var pLnJS = document.forms["pRegFormName"]["pLn"].value;
			var pPasswordJS = document.forms["pRegFormName"]["pPassword"].value;
			var pCityJS = document.forms["pRegFormName"]["pCity"].value;
			var pStateJS = document.forms["pRegFormName"]["pState"].value;
			var pCountryJS = document.forms["pRegFormName"]["pCountry"].value;
			var pInstituteJS = document.forms["pRegFormName"]["pInstitute"].value;
			var pEmailJS = document.forms["pRegFormName"]["pEmail"].value;
			var pTelJS = document.forms["pRegFormName"]["pTel"].value;
			var pFaxJS = document.forms["pRegFormName"]["pFax"].value;
			var pWebsiteJS = document.forms["pRegFormName"]["pWebsite"].value;
			
			$.post(
				"proofreaderRegistrationProcess.php",
				{
					pFn: pFnJS,
					pLn: pLnJS,
					pPassword: pPasswordJS,
					pCity: pCityJS,
					pState: pStateJS,
					pCountry: pCountryJS,
					pInstitute: pInstituteJS,
					pEmail: pEmailJS,
					pTel: pTelJS,
					pFax: pFaxJS,
					pWebsite: pWebsiteJS
				},
				function(output) {
					
					
					if(output.indexOf("You are registered successfully") != -1) {
						alert(output);
						window.location = "index.php";
					}
					
					else {
						var pFoo = JSON.parse(output);
						
						document.getElementById("pFnErr").innerHTML = pFoo[0];
						document.getElementById("pLnErr").innerHTML = pFoo[1];
						document.getElementById("pPasswordErr").innerHTML = pFoo[2];
						document.getElementById("pCityErr").innerHTML = pFoo[3];
						document.getElementById("pStateErr").innerHTML = pFoo[4];
						document.getElementById("pCountryErr").innerHTML = pFoo[5];
						document.getElementById("pInstituteErr").innerHTML = pFoo[6];
						document.getElementById("pEmailErr").innerHTML = pFoo[7];
						document.getElementById("pTelErr").innerHTML = pFoo[8];
						document.getElementById("pFaxErr").innerHTML = pFoo[9];
						document.getElementById("pWebsiteErr").innerHTML = pFoo[10];
					}
				}
			);
				
		});
			
	});
</script>
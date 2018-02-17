
<style>
	.error-message {
		color:red;
		font-weight:bold;	
	}
</style>

<div id="copyEditorReg" class="copy-editor-container" style="position:fixed;height:100%;width:100%;z-index:1001;background-color:rgba(0,0,0,0.9);top:0px;left:0px;display:none;">


	<!---------------------Modal Content(White Background)------------------>
	<div class="copy-editor-registration-content  w3-animate-zoom">
    	
        
        <!---------------------Form------------------>
        <form class="" name="ceFormName" onSubmit="return false;">
        
        
        	<!---------------------Close Buttons------------------>
        	<span class="closeBtn" onclick="document.getElementById('copyEditorReg').style.display='none'">&times;</span>	
        	<h2>Copyeditor Registration</h2>
            
            
            <!---------------------First Name & Last Name------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>First Name</strong></label>
                <input name="ceFn" class="w3-input w3-border" type="text" placeholder="">
                <p id="ceFnErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>Last Name</strong></label>
                <input name="ceLn" class="w3-input w3-border" type="text" placeholder="">
                <p id="ceLnErr" class="error-message"></p>
              </div>
            </div>     
            
            
            
            <!---------------------Password & Repeat Password------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>Password</strong></label>
                <input name="cePassword" class="w3-input w3-border" type="password" placeholder="">
                <p id="cePasswordErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>Repeat Password</strong></label>
                <input name="nameRepeatPassword" class="w3-input w3-border" type="password" placeholder="">
              </div>
            </div> 
            
            
            <!---------------------City & Province------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>City</strong></label>
                <input name="ceCity" class="w3-input w3-border" type="text" placeholder="">
                <p id="ceCityErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>State/Province</strong></label>
                <input name="ceState" class="w3-input w3-border" type="text" placeholder="">
                <p id="ceStateErr" class="error-message"></p>
              </div>
            </div>
            
            
            
            
            <!---------------------Country & Institute------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>Country</strong></label>
                <input name="ceCountry" class="w3-input w3-border" type="text" placeholder="">
                <p id="ceCountryErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>Institute</strong></label>
                <input name="ceInstitute" class="w3-input w3-border" type="text" placeholder="">
                <p id="ceInstituteErr" class="error-message"></p>
              </div>
            </div>  
            
            
            
            
            <!---------------------E-mail------------------>
            <div class="w3-container">
            	<label><strong>E-mail</strong></label>
                <input name="ceEmail" class="w3-input w3-border w3-animate-input" type="email" style="width:50%">
                <p id="ceEmailErr" class="error-message"></p>
            </div>            
            
            
            
            
            <!---------------------Telephone Number & Fax Number------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>Telephone Number</strong></label>
                <input name="ceTel" class="w3-input w3-border" type="text" placeholder="">
                <p id="ceTelErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>Fax Number</strong></label>
                <input name="ceFax" class="w3-input w3-border" type="text" placeholder="">
                <p id="ceFaxErr" class="error-message"></p>
              </div>
            </div> 
            
            
            
            <!---------------------Personal Websites------------------>
            <div class="w3-container">
            	<label><strong>Personal Website</strong></label>
                <input name="ceWebsite" class="w3-input w3-border w3-animate-input" type="text" style="width:50%">
                <p id="ceWebsiteErr" class="error-message"></p>
            </div>    
            
            <input id="ceSubmitBtnId" type="submit" style="width:50%; display:block; margin:auto;background-color:#32CD99;height:50px;" class="w3-btn w3-margin-top w3-round-large" value="Submit">                       
            
	    </form>
        
    </div>
</div>

<script>
	$(document).ready(function() {
        
		$("#ceSubmitBtnId").click(function() {
			
			var ceFnJS = document.forms["ceFormName"]["ceFn"].value;
			var ceLnJS = document.forms["ceFormName"]["ceLn"].value;
			var cePasswordJS = document.forms["ceFormName"]["cePassword"].value;
			var ceCityJS = document.forms["ceFormName"]["ceCity"].value;
			var ceStateJS = document.forms["ceFormName"]["ceState"].value;
			var ceCountryJS = document.forms["ceFormName"]["ceCountry"].value;
			var ceInstituteJS = document.forms["ceFormName"]["ceInstitute"].value;
			var ceEmailJS = document.forms["ceFormName"]["ceEmail"].value;
			var ceTelJS = document.forms["ceFormName"]["ceTel"].value;
			var ceFaxJS = document.forms["ceFormName"]["ceFax"].value;
			var ceWebsiteJS = document.forms["ceFormName"]["ceWebsite"].value;
			
			$.post(
				"copyEditorRegistrationProcess.php",
				{
					ceFn: ceFnJS,
					ceLn: ceLnJS,
					cePassword: cePasswordJS,
					ceCity: ceCityJS,
					ceState: ceStateJS,
					ceCountry: ceCountryJS,
					ceInstitute: ceInstituteJS,
					ceEmail: ceEmailJS,
					ceTel: ceTelJS,
					ceFax: ceFaxJS,
					ceWebsite: ceWebsiteJS
				},
				function(output) {
					
					if(output.indexOf("You are registered successfully!!!") != -1) {
						alert(output);
						window.location = "index.php";
					} else {
					
						var ceFoo = JSON.parse(output);
						
						document.getElementById("ceFnErr").innerHTML = ceFoo[0];
						document.getElementById("ceLnErr").innerHTML = ceFoo[1];
						document.getElementById("cePasswordErr").innerHTML = ceFoo[2];
						document.getElementById("ceCityErr").innerHTML = ceFoo[3];
						document.getElementById("ceStateErr").innerHTML = ceFoo[4];
						document.getElementById("ceCountryErr").innerHTML = ceFoo[5];
						document.getElementById("ceInstituteErr").innerHTML = ceFoo[6];
						document.getElementById("ceEmailErr").innerHTML = ceFoo[7];
						document.getElementById("ceTelErr").innerHTML = ceFoo[8];
						document.getElementById("ceFaxErr").innerHTML = ceFoo[9];
						document.getElementById("ceWebsiteErr").innerHTML = ceFoo[10];
					}
				}
			);
				
		});
		
    });
</script>
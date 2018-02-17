
<!---------------------reviewer-container(Black Transparent)------------------>
<div  id="reviewerReg" class="reviewer-container w3-modal">

	
    <!---------------------Modal Content(White Background)------------------>
	<div class="reviewer-registration-content  w3-animate-zoom">
    	
        
        <!---------------------Form------------------>
        <form id="rRegFormId" class="" name="rFormName" onSubmit="return false;">
        
        
        	<!---------------------Close Buttons------------------>
        	<span class="closeBtn" onclick="document.getElementById('reviewerReg').style.display='none'">&times;</span>	
        	<h2>Reviewer Registration</h2>
            
            
            <!---------------------First Name & Last Name------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>First Name</strong></label>
                <input name="rFn" class="w3-input w3-border" type="text" placeholder="">
                <p id="rFnErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>Last Name</strong></label>
                <input name="rLn" class="w3-input w3-border" type="text" placeholder="">
                <p id="rLnErr" class="error-message"></p>
              </div>
            </div>
            
            
            
            <!---------------------Password & Repeat Password------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>Password</strong></label>
                <input name="rPassword" class="w3-input w3-border" type="password" placeholder="">
                <p id="rPasswordErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>Repeat Password: </strong></label>
                <input name="rPasswordRepeat" class="w3-input w3-border" type="password" placeholder="">
              </div>
            </div>
            
            
            
            <!---------------------City & Province------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>City</strong></label>
                <input name="rCity" class="w3-input w3-border" type="text" placeholder="">
                <p id="rCityErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>State/Province</strong></label>
                <input name="rState" class="w3-input w3-border" type="text" placeholder="">
                <p id="rStateErr" class="error-message"></p>
              </div>
            </div>
            
            
            
            
            <!---------------------Country & Institute------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>Country</strong></label>
                <input name="rCountry" class="w3-input w3-border" type="text" placeholder="">
                <p id="rCountryErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>Institute</strong></label>
                <input name="rInstitute" class="w3-input w3-border" type="text" placeholder="">
                <p id="rInstituteErr" class="error-message"></p>
              </div>
            </div>  
            
            
            
            
            <!---------------------Academic Degree Radio Buttons------------------>
            <div class="w3-container">	
            	<label><strong>Academic Degree</strong></label>
                <p>
                <input class="w3-radio" type="radio" name="rAd" value="rAsscoDeg">
                <label class="w3-validate">Associate's degree</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="rAd" value="rBachDeg">
                <label class="w3-validate">Bachelor's degree</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="rAd" value="rMasDeg">
                <label class="w3-validate">Master's degree</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="rAd" value="rDocDeg">
                <label class="w3-validate">Doctoral degree</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="rAd" value="rPostDeg">
                <label class="w3-validate">Postdoctoral</label></p>     
                
                <p>
                <input class="w3-radio" type="radio" name="rAd" value="rResearchDocDeg">
                <label class="w3-validate">Research Doctoral degree</label></p>
                
                <p id="rAdErr" class="error-message"></p>
            </div>   
            
            
            
            <!---------------------Title Radio Buttons------------------>
            <div class="w3-container">
            
         	  	<label style=""><strong>Title</strong></label>
              
              	<p>
                <input class="w3-radio" type="radio" name="rTitle" value="rProfessor">
                <label class="w3-validate">Professor</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="rTitle" value="rAProfessor">
                <label class="w3-validate">Assistant Professor</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="rTitle" value="rLecturer">
                <label class="w3-validate">Lecturer</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="rTitle" value="rSLecturer">
                <label class="w3-validate">Senior Lecturer</label></p> 
              
                <p>
                <input class="w3-radio" type="radio" name="rTitle" value="rAsscoProfessor">
                <label class="w3-validate">Associate Professor</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="rTitle" value="rStudent">
                <label class="w3-validate">PhD Student</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="rTitle" value="">
                <label class="w3-validate">Post-doctoral Fellow</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="rTitle" value="">
                <label class="w3-validate">Staff Scientist</label></p> 
              
                <p>
                <input class="w3-radio" type="radio" name="rTitle" value="male">
                <label class="w3-validate">Engineer</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="rTitle" value="rScientist">
                <label class="w3-validate">Research Scientist</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="rTitle" value="rLibrarian">
                <label class="w3-validate">Librarian</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="rTitle" value="rHead">
                <label class="w3-validate">Head of Academic Department/Faculty</label></p> 
                
                <p id="rTitleErr" class="error-message"></p>
            </div>  
            
            
            
            
            <!---------------------E-mail------------------>
            <div class="w3-container">
            	<label><strong>E-Mail</strong></label>
                <input name="rEmail" class="w3-input w3-border w3-animate-input" type="email" style="width:50%">
                <p id="rEmailErr" class="error-message"></p>
            </div>    
            
            
            
            
            <!---------------------Telephone Number & Fax Number------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>Telephone Number</strong></label>
                <input name="rTel" class="w3-input w3-border" type="text" placeholder="">
                <p id="rTelErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>Fax Number</strong></label>
                <input name="rFax" class="w3-input w3-border" type="text" placeholder="">
                <p id="rFaxErr" class="error-message"></p>
              </div>
            </div>  
            
            
            
            <!---------------------Research Areas------------------>
            <div class="w3-container">
            	<label><strong>Research Areas</strong></label>
                <textarea class="w3-input w3-border" name="rResearch" rows="3" cols="40"></textarea>
                <p id="rResearchErr" class="error-message"></p>
            </div> 
            
            
            
            <!---------------------Personal Websites------------------>
            <div class="w3-container">
            	<label><strong>Personal Website</strong></label>
                <input name="rWebsite" class="w3-input w3-border w3-animate-input" type="text" style="width:50%">
            </div>    
            
            <input id="rSubmitBtnId" type="submit" style="width:50%; display:block; margin:auto;background-color:#32CD99;height:50px;" class="w3-btn w3-margin-top w3-round-large" value="Submit">                       
            
	    </form>
        
    </div>
</div>

<script>
	$(document).ready(function() {
		$("#rSubmitBtnId").click(function() {
			
			var rFnJS = document.forms["rFormName"]["rFn"].value;
			var rLnJS = document.forms["rFormName"]["rLn"].value;
			var rPasswordJS = document.forms["rFormName"]["rPassword"].value;
			var rCityJS = document.forms["rFormName"]["rCity"].value;
			var rStateJS = document.forms["rFormName"]["rState"].value;
			var rCountryJS = document.forms["rFormName"]["rCountry"].value;
			var rInstituteJS = document.forms["rFormName"]["rInstitute"].value;
			var rAdJS = document.forms["rFormName"]["rAd"].value;
			var rTitleJS = document.forms["rFormName"]["rTitle"].value;
			var rEmailJS = document.forms["rFormName"]["rEmail"].value;
			var rTelJS = document.forms["rFormName"]["rTel"].value;
			var rFaxJS = document.forms["rFormName"]["rFax"].value;
			var rResearchJS = document.forms["rFormName"]["rResearch"].value;
			var rWebsiteJS = document.forms["rFormName"]["rWebsite"].value;
			
			$.post(
				"reviewerRegistrationProcess.php",
				{
					rFn: rFnJS,
					rLn: rLnJS,
					rPassword: rPasswordJS,
					rCity: rCityJS,
					rState: rStateJS,
					rCountry: rCountryJS,
					rInstitute: rInstituteJS,
					rAd: rAdJS,
					rTitle: rTitleJS,
					rEmail: rEmailJS,
					rTel: rTelJS,
					rFax: rFaxJS,
					rResearch: rResearchJS,
					rWebsite: rWebsiteJS
				},
				function(success) {
					
					if(success.indexOf("You are Registered successfully as a Reviewer!!!") != -1) {
						alert(success);
						//document.getElementById("rRegFormId").reset();	
						window.location = "index.php";
						
						/*document.getElementById("rFnErr").innerHTML = "";
						document.getElementById("rLnErr").innerHTML = "";
						document.getElementById("rPasswordErr").innerHTML = "";
						document.getElementById("rCityErr").innerHTML = "";
						document.getElementById("rStateErr").innerHTML = "";
						document.getElementById("rCountryErr").innerHTML = "";
						document.getElementById("rInstituteErr").innerHTML = "";
						document.getElementById("rAdErr").innerHTML = "";
						document.getElementById("rTitleErr").innerHTML = "";
						document.getElementById("rEmailErr").innerHTML = "";
						document.getElementById("rTelErr").innerHTML = "";
						document.getElementById("rFaxErr").innerHTML = "";
						document.getElementById("rResearchErr").innerHTML = "";
						document.getElementById("rWebsiteErr").innerHTML = "";*/
					}
					if(success.indexOf("something wrong") != -1) {
						alert(success);
					} else {
					
						var rFoo = JSON.parse(success);
						document.getElementById("rFnErr").innerHTML = rFoo[0];
						document.getElementById("rLnErr").innerHTML = rFoo[1];
						document.getElementById("rPasswordErr").innerHTML = rFoo[2];
						document.getElementById("rCityErr").innerHTML = rFoo[3];
						document.getElementById("rStateErr").innerHTML = rFoo[4];
						document.getElementById("rCountryErr").innerHTML = rFoo[5];
						document.getElementById("rInstituteErr").innerHTML = rFoo[6];
						document.getElementById("rAdErr").innerHTML = rFoo[7];
						document.getElementById("rTitleErr").innerHTML = rFoo[8];
						document.getElementById("rEmailErr").innerHTML = rFoo[9];
						document.getElementById("rTelErr").innerHTML = rFoo[10];
						document.getElementById("rFaxErr").innerHTML = rFoo[11];
						document.getElementById("rResearchErr").innerHTML = rFoo[12];
						document.getElementById("rWebsiteErr").innerHTML = rFoo[13];
					}
				}
			);
			
		}); //---click()-----
	}); //----ready()------
</script>
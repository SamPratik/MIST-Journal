<style>
	.error-message {
		color:red;
		font-weight:bold;	
	}
</style>

<div id="sectionEditorReg" class="section-editor-container" style="position:fixed; height:100%;width:100%;background-color:rgba(0,0,0,0.9);z-index:1001;display:none;top:0px;left:0px;">

	<!---------------------Modal Content(White Background)------------------>
	<div class="section-editor-registration-content  w3-animate-zoom">
    	
        
        <!---------------------Form------------------>
        <form name="seFormName" id="seRegFormId" onSubmit="return false;">
        
        
        	<!---------------------Close Buttons------------------>
        	<span class="closeBtn" onclick="document.getElementById('sectionEditorReg').style.display='none'">&times;</span>	
        	<h2>Section Editor Registration</h2>
            
            
            <!---------------------First Name & Last Name------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>First Name</strong></label>
                <input class="w3-input w3-border" name="seFn" type="text" value="" placeholder="">
                <p id="seFnErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>Last Name</strong></label>
                <input class="w3-input w3-border" name="seLn" type="text" value="" placeholder="">
                <p id="seLnErr" class="error-message"></p>
              </div>
            </div>
            
            
            
            
            <!---------------------Password & Repeat Password------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>Password</strong></label>
                <input class="w3-input w3-border" name="sePassword" type="password" placeholder="">
                <p id="sePasswordErr" class="error-message"></p>
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
                <input class="w3-input w3-border" name="seCity" type="text" placeholder="">
                <p id="seCityErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>State/Province</strong></label>
                <input class="w3-input w3-border" name="seState" type="text" placeholder="">
                <p id="seStateErr" class="error-message"></p>
              </div>
            </div>
            
            
            
            
            <!---------------------Country & Institute------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>Country</strong></label>
                <input class="w3-input w3-border" name="seCountry" type="text" placeholder="">
                <p id="seCountryErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>Institute</strong></label>
                <input class="w3-input w3-border" name="seInstitute" type="text" placeholder="">
                <p id="seInstituteErr" class="error-message"></p>
              </div>
            </div>  
            
            
            
            
            <!---------------------Academic Degree Radio Buttons------------------>
            <div class="w3-container">	
            	<label><strong>Academic Degree</strong></label>
                <p>
                <input class="w3-radio" type="radio" name="seAd" value="AssociateD">
                <label class="w3-validate">Associate's degree</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="seAd" value="BachelorD">
                <label class="w3-validate">Bachelor's degree</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="seAd" value="MasterD">
                <label class="w3-validate">Master's degree</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="seAd" value="DoctoralD">
                <label class="w3-validate">Doctoral degree</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="seAd" value="Postdoctoral">
                <label class="w3-validate">Postdoctoral</label></p>     
                
                <p>
                <input class="w3-radio" type="radio" name="seAd" value="ResearchDD">
                <label class="w3-validate">Research Doctoral degree</label></p>
                
                <p id="seAdErr" class="error-message"></p>
            </div>   
            
            
            
            <!---------------------Title Radio Buttons------------------>
            <div class="w3-container">
            
         	  	<label style=""><strong>Title</strong></label>
              
              	<p>
                <input class="w3-radio" type="radio" name="seTitle" value="Professor">
                <label class="w3-validate">Professor</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="seTitle" value="AssistantP">
                <label class="w3-validate">Assistant Professor</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="seTitle" value="Lecturer">
                <label class="w3-validate">Lecturer</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="seTitle" value="SeniorL">
                <label class="w3-validate">Senior Lecturer</label></p> 
              
                <p>
                <input class="w3-radio" type="radio" name="seTitle" value="AssociateP">
                <label class="w3-validate">Associate Professor</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="seTitle" value="PhDS">
                <label class="w3-validate">PhD Student</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="seTitle" value="Post-doctoralF">
                <label class="w3-validate">Post-doctoral Fellow</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="seTitle" value="StaffS">
                <label class="w3-validate">Staff Scientist</label></p> 
              
                <p>
                <input class="w3-radio" type="radio" name="seTitle" value="Engineer">
                <label class="w3-validate">Engineer</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="seTitle" value="ResearchS">
                <label class="w3-validate">Research Scientist</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="seTitle" value="Librarian">
                <label class="w3-validate">Librarian</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="seTitle" value="Head">
                <label class="w3-validate">Head of Academic Department/Faculty</label></p> 
                
                <p id="seTitleErr" class="error-message"></p>
            </div>  
            
            
            
            
            <!---------------------E-mail------------------>
            <div class="w3-container">
            	<label><strong>E-Mail</strong></label>
                <input class="w3-input w3-border w3-animate-input" name="seEmail" type="email" style="width:50%">
                <p id="seEmailErr" class="error-message"></p>
            </div>    
            
            
            
            
            <!---------------------Telephone Number & Fax Number------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>Telephone Number</strong></label>
                <input class="w3-input w3-border" name="seTel" type="text" placeholder="">
                <p id="seTelErr" class="error-message"></p>
              </div>
              <div class="w3-half">
                <label><strong>Fax Number</strong></label>
                <input class="w3-input w3-border" name="seFax" type="text" placeholder="">
                <p id="seFaxErr" class="error-message"></p>
              </div>
            </div>  
            
            
            
            <!---------------------Research Areas------------------>
            <div class="w3-container">
            	<label><strong>Research Areas</strong></label>
                <textarea class="w3-input w3-border" name="seResearch" rows="3" cols="40"></textarea>
                <p id="seResearchErr" class="error-message"></p>
            </div> 
            
            
            
            <!---------------------Personal Websites------------------>
            <div class="w3-container">
            	<label><strong>Personal Website</strong></label>
                <input class="w3-input w3-border w3-animate-input" name="seWebsite" type="text" style="width:50%">
                <p id="seWebsiteErr" class="error-message"></p>
            </div>    
            
            <input id="seSubmitBtnId" type="submit" style="width:50%; display:block; margin:auto;background-color:#32CD99;height:50px;" class="w3-btn w3-margin-top w3-round-large" value="Submit">                       
            
            <p id="seRegSuccessMessage" class="error-message"></p>
	    </form>
        
    </div>
</div>

<script>
	$(document).ready(function() {
		$("#seSubmitBtnId").click(function() {
			
			var seFnJS = document.forms["seFormName"]["seFn"].value;
			var seLnJS = document.forms["seFormName"]["seLn"].value;
			var sePasswordJS = document.forms["seFormName"]["sePassword"].value;
			var seCityJS = document.forms["seFormName"]["seCity"].value;
			var seStateJS = document.forms["seFormName"]["seState"].value;
			var seCountryJS = document.forms["seFormName"]["seCountry"].value;
			var seInstituteJS = document.forms["seFormName"]["seInstitute"].value;
			var seAdJS = document.forms["seFormName"]["seAd"].value;
			var seTitleJS = document.forms["seFormName"]["seTitle"].value;
			var seEmailJS = document.forms["seFormName"]["seEmail"].value;
			var seTelJS = document.forms["seFormName"]["seTel"].value;
			var seFaxJS = document.forms["seFormName"]["seFax"].value;
			var seResearchJS = document.forms["seFormName"]["seResearch"].value;
			var seWebsiteJS = document.forms["seFormName"]["seWebsite"].value;
			
			$.post(
				"sectionEditorRegistrationProcess.php",
				{
					seFn: seFnJS,
					seLn: seLnJS,
					sePassword: sePasswordJS,
					seCity: seCityJS,
					seState: seStateJS,
					seCountry: seCountryJS,
					seInstitute: seInstituteJS,
					seAd: seAdJS,
					seTitle: seTitleJS,
					seEmail: seEmailJS,
					seTel: seTelJS,
					seFax: seFaxJS,
					seResearch: seResearchJS,
					seWebsite: seWebsiteJS
				},
				function(output) {
					
					if(output.indexOf("You are Registered successfully !!!") != -1) {
						//document.getElementById("seRegSuccessMessage").innerHTML = output;
						alert(output);
						//window.location = "index.php";
						document.getElementById("seRegFormId").reset();	
						
						document.getElementById("seFnErr").innerHTML = "";
						document.getElementById("seLnErr").innerHTML = "";
						document.getElementById("sePasswordErr").innerHTML = "";
						document.getElementById("seCityErr").innerHTML = "";
						document.getElementById("seStateErr").innerHTML = "";
						document.getElementById("seCountryErr").innerHTML = "";
						document.getElementById("seInstituteErr").innerHTML = "";
						document.getElementById("seAdErr").innerHTML = "";
						document.getElementById("seTitleErr").innerHTML = "";
						document.getElementById("seEmailErr").innerHTML = "";
						document.getElementById("seTelErr").innerHTML = "";
						document.getElementById("seFaxErr").innerHTML = "";
						document.getElementById("seResearchErr").innerHTML = "";
						document.getElementById("seWebsiteErr").innerHTML = "";
					} else {
					
						var seFoo = JSON.parse(output);
						
						document.getElementById("seFnErr").innerHTML = seFoo[0];
						document.getElementById("seLnErr").innerHTML = seFoo[1];
						document.getElementById("sePasswordErr").innerHTML = seFoo[2];
						document.getElementById("seCityErr").innerHTML = seFoo[3];
						document.getElementById("seStateErr").innerHTML = seFoo[4];
						document.getElementById("seCountryErr").innerHTML = seFoo[5];
						document.getElementById("seInstituteErr").innerHTML = seFoo[6];
						document.getElementById("seAdErr").innerHTML = seFoo[7];
						document.getElementById("seTitleErr").innerHTML = seFoo[8];
						document.getElementById("seEmailErr").innerHTML = seFoo[9];
						document.getElementById("seTelErr").innerHTML = seFoo[10];
						document.getElementById("seFaxErr").innerHTML = seFoo[11];
						document.getElementById("seResearchErr").innerHTML = seFoo[12];
						document.getElementById("seWebsiteErr").innerHTML = seFoo[13];
					}
				}
			); //----post()-----
			
		}); //---click()-----
	}); //----ready()------
</script>
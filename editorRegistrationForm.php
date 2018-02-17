<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<div id="editorReg" class="editor-container" style="position:fixed;height:100%; width:100%;background-color:rgba(0,0,0,0.9);z-index:1001;display:none;top:0px;left:0px;">


	<!---------------------Modal Content(White Background)------------------>
	<div class="editor-registration-content  w3-animate-zoom">
    	
        
        <!---------------------Form------------------>
        <form name="editorForm" class="" method="post" onSubmit="return false;">

        
        	<!---------------------Close Buttons------------------>
        	<span class="closeBtn" onclick="document.getElementById('editorReg').style.display='none'">&times;</span>	
        	<h2>Editor Registration</h2>
         
        	<!----------div#editorOutput--------------->
        	<div id="editorOutput"></div>           
            
            <!---------------------First Name & Last Name------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>First Name</strong></label>
                <input id="editorFn" name="editorFn" class="w3-input w3-border" type="text" placeholder="">
              </div>
              <div class="w3-half">
                <label><strong>Last Name</strong></label>
                <input name="editorLn" class="w3-input w3-border" type="text" placeholder="">
              </div>
            </div>
            
            
            <!---------------------Password------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>Password</strong></label>
                <input style="background-color:#e9e9e9;" class="w3-input w3-border" name="editorPassword" type="password" 
                placeholder="">
                <!--<span class="error"><?php //echo $passwordErr; ?></span>-->
              </div>
              <div class="w3-half">
                <label><strong>Repeat Password</strong></label>
                <input style="background-color:#e9e9e9;" class="w3-input w3-border" name="editorRepeatPassword" 
                type="password" placeholder="">
              </div>
            </div>      
            
                 
            
            <!---------------------City & Province------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>City</strong></label>
                <input name="editorCity" class="w3-input w3-border" type="text" placeholder="">
              </div>
              <div class="w3-half">
                <label><strong>State/Province</strong></label>
                <input name="editorState" class="w3-input w3-border" type="text" placeholder="">
              </div>
            </div>
            
            
            
            
            <!---------------------Country & Institute------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>Country</strong></label>
                <input name="editorCountry" class="w3-input w3-border" type="text" placeholder="">
              </div>
              <div class="w3-half">
                <label><strong>Institute</strong></label>
                <input name="editorInstitution" class="w3-input w3-border" type="text" placeholder="">
              </div>
            </div>  
            
            
            
            
            <!---------------------Academic Degree Radio Buttons------------------>
            <div class="w3-container">	
            	<label><strong>Academic Degree</strong></label>
                <p>
                <input class="w3-radio" type="radio" name="editorAd" value="associateD">
                <label class="w3-validate">Associate's degree</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="editorAd" value="bachelor">
                <label class="w3-validate">Bachelor's degree</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="editorAd" value="master">
                <label class="w3-validate">Master's degree</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="editorAd" value="doctoral">
                <label class="w3-validate">Doctoral degree</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="editorAd" value="postdoctoral">
                <label class="w3-validate">Postdoctoral</label></p>     
                
                <p>
                <input class="w3-radio" type="radio" name="editorAd" value="research">
                <label class="w3-validate">Research Doctoral degree</label></p>
            </div>   
            
            
            
            <!---------------------Title Radio Buttons------------------>
            <div class="w3-container">
            
         	  	<label style=""><strong>Title</strong></label>
              
              	<p>
                <input class="w3-radio" type="radio" name="editorTitle" value="professor">
                <label class="w3-validate">Professor</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="editorTitle" value="assistant">
                <label class="w3-validate">Assistant Professor</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="editorTitle" value="lecturer">
                <label class="w3-validate">Lecturer</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="editorTitle" value="">
                <label class="w3-validate">Senior Lecturer</label></p> 
              
                <p>
                <input class="w3-radio" type="radio" name="editorTitle" value="associateP">
                <label class="w3-validate">Associate Professor</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="editorTitle" value="phd">
                <label class="w3-validate">PHD Student</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="editorTitle" value="postDoctoral">
                <label class="w3-validate">Post-doctoral Fellow</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="editorTitle" value="staff">
                <label class="w3-validate">Staff Scientist</label></p> 
              
                <p>
                <input class="w3-radio" type="radio" name="editorTitle" value="engineer">
                <label class="w3-validate">Engineer</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="editorTitle" value="researchS">
                <label class="w3-validate">Research Scientist</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="editorTitle" value="librarian">
                <label class="w3-validate">Librarian</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="editorTitle" value="head">
                <label class="w3-validate">Head of Academic Department/Faculty</label></p> 
            </div>  
            
            
            
            
            <!---------------------E-mail------------------>
            <div class="w3-container">
            	<label><strong>E-Mail</strong></label>
                <input name="editorEmail" class="w3-input w3-border w3-animate-input" type="email" style="width:50%">
            </div>    
            
            
            
            
            <!---------------------Telephone Number & Fax Number------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>Telephone Number</strong></label>
                <input name="editorTel" class="w3-input w3-border" type="number" placeholder="">
              </div>
              <div class="w3-half">
                <label><strong>Fax Number</strong></label>
                <input name="editorFax" class="w3-input w3-border" type="number" placeholder="">
              </div>
            </div>  
            
            
            
            <!---------------------Research Areas------------------>
            <div class="w3-container">
            	<label><strong>Research Areas</strong></label>
                <textarea name="editorResearch" class="w3-input w3-border"  rows="3" cols="40"></textarea>
            </div> 
            
            
            
            <!---------------------Personal Websites------------------>
            <div class="w3-container">
            	<label><strong>Personal Website</strong></label>
                <input name="editorWebsite" class="w3-input w3-border w3-animate-input" type="text" style="width:50%">
            </div>    
            
            <input id="editorSubmitButtonId" type="submit" style="width:50%; display:block; margin:auto;background-color:#32CD99;height:50px;" class="w3-btn w3-margin-top w3-round-large" value="Submit">                       
            
	    </form>
        
    </div>
</div>

<script>
	$(document).ready(function() {
		$("#editorSubmitButtonId").click(function() {
			
			var editorFnJS = document.forms["editorForm"]["editorFn"].value;
			var editorLnJS = document.forms["editorForm"]["editorLn"].value;
			var editorPasswordJS = document.forms["editorForm"]["editorPassword"].value;
			var editorRepeatPasswordJS = document.forms["editorForm"]["editorRepeatPassword"].value;
			var editorCityJS = document.forms["editorForm"]["editorCity"].value;
			var editorStateJS = document.forms["editorForm"]["editorState"].value;
			var editorCountryJS = document.forms["editorForm"]["editorCountry"].value;
			var editorInstitutionJS = document.forms["editorForm"]["editorInstitution"].value;
			var editorAdJS = document.forms["editorForm"]["editorAd"].value;
			var editorTitleJS = document.forms["editorForm"]["editorTitle"].value;
			var editorEmailJS = document.forms["editorForm"]["editorEmail"].value;
			var editorTelJS = document.forms["editorForm"]["editorTel"].value;
			var editorFaxJS = document.forms["editorForm"]["editorFax"].value; 
			var editorResearchJS = document.forms["editorForm"]["editorResearch"].value;
			var editorWebsiteJS = document.forms["editorForm"]["editorWebsite"].value;

			
			$.post("editorRegistrationProcess.php",
				{
					editorFn: editorFnJS,
					editorLn: editorLnJS,
					editorPassword: editorPasswordJS,
					editorCity: editorCityJS,
					editorState: editorStateJS,
					editorCountry: editorCountryJS,
					editorInstitution: editorInstitutionJS,
					editorAd: editorAdJS,
					editorTitle: editorTitleJS,
					editorEmail: editorEmailJS,
					editorTel: editorTelJS,
					editorFax: editorFaxJS,
					editorResearch: editorResearchJS,
					editorWebsite: editorWebsiteJS
				},
				function(editorOutput) {
					alert(editorOutput);
					//$("#editorOutput").html(editorOutput);	
				});
				
		});	//------click()------
	}); //-------ready()-------
</script>
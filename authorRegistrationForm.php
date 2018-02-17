<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<div id="authorReg" class="author-container" style="position:fixed;height:100%;width:100%;z-index:1001;background-color:rgba(0,0,0,0.9);display:none;top:0px;left:0px;">

	
    <!---------------------Modal Content(White Background)------------------>
	<div class="author-registration-content  w3-animate-zoom">
        
        <!---------------------Form------------------>
        <form name="authorForm" action="authorRegistrationForm.php" method="post" onSubmit="return false;">
        
        	<p id="auhtorOutput"></p>
        	<!---------------------Close Buttons------------------>
        	<span class="closeBtn" onclick="document.getElementById('authorReg').style.display='none'">&times;</span>	
        	<h2>Author Registration</h2>
            
            
            <!---------------------First Name & Last Name------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>First Name</strong></label>
                <input class="w3-input w3-border" name="authorFn" type="text" value="" placeholder="">
                <!--<span class="error"> <?php //echo $fnErr;?></span>-->
              </div>
              <div class="w3-half">
                <label><strong>Last Name</strong></label>
                <input class="w3-input w3-border" name="authorLn" type="text" value="" placeholder="">
                <!--<span class="error"> <?php //echo $lnErr;?></span>-->
              </div>
            </div>
            
            
            
            <!---------------------Password------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>Password</strong></label>
                <input style="background-color:#e9e9e9;" class="w3-input w3-border" name="authorPassword" type="password" 
                placeholder="">
                <!--<span class="error"><?php //echo $passwordErr; ?></span>-->
              </div>
              <div class="w3-half">
                <label><strong>Repeat Password</strong></label>
                <input style="background-color:#e9e9e9;" class="w3-input w3-border" name="authorRepeatPassword" 
                type="password" placeholder="">
              </div>
            </div>
            
            
            
            <!---------------------City & Province------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>City</strong></label>
                <input class="w3-input w3-border" name="authorCity" type="text" value="" placeholder="">
                <!--<span class="error"><?php //echo $cityErr; ?></span>-->
              </div>
              <div class="w3-half">
                <label><strong>State/Province</strong></label>
                <input class="w3-input w3-border" name="authorState" type="text" value="" placeholder="">
                <!--<span class="error"> <?php //echo $stateErr;?></span>-->
              </div>
            </div>
            
            
            
            
            <!---------------------Country------------------>
            <div class="w3-container">
                <label><strong>Country</strong></label>
                <input class="w3-input w3-border w3-animate-input" name="authorCountry" type="text" value=""
                 style="width:50%">
                 <!--<span class="error"> <?php //echo $countryErr;?></span>-->
            </div>    
            


            <!---------------------Depatment & Institution------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>Department</strong></label>
                <input class="w3-input w3-border" name="authorDept" type="text" value="" placeholder="">
                <!--<span class="error"> <?php //echo $deptErr;?></span>-->
              </div>
              <div class="w3-half">
                <label><strong>Institution</strong></label>
                <input class="w3-input w3-border" name="authorInstitution" type="text" value=""
                 placeholder="">
                 <!--<span class="error"> <?php //echo $institutionErr;?> </span>-->
              </div>
            </div>  
            
            
            
             <!---------------------Affliation------------------>
            <div class="w3-container">
            	<label><strong>Affliation</strong></label>
                <input class="w3-input w3-border w3-animate-input" name="authorAffliation" type="text" 
                value="" style="width:50%">
            </div>            
            
            
            
            <!---------------------E-mail------------------>
            <div class="w3-container">
            	<label><strong>E-Mail</strong></label>
                <input class="w3-input w3-border w3-animate-input" name="authorEmail" type="email" value=""
                 style="width:50%">
                 <!--<span class="error"> <?php //secho $emailErr;?></span>-->
            </div>    
            
            
            
            
            <!---------------------Telephone Number & Fax Number------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>Telephone Number</strong></label>
                <input class="w3-input w3-border" name="authorTel" type="text" value="" placeholder="">
                <!--<span class="error"> <?php //echo $telErr;?></span>-->
              </div>
              <div class="w3-half">
                <label><strong>Fax Number</strong></label>
                <input class="w3-input w3-border" name="authorFax" type="text" value="" placeholder="">
                <!--<span class="error"> <?php //echo $faxErr;?></span>-->
              </div>
            </div>  
            
            
            
            <!---------------------Fields of interest------------------>
            <div class="w3-container">
            	<label><strong>Fields of interest</strong></label>
                <textarea class="w3-input w3-border" name="authorFoi"  rows="3" cols="40"></textarea>
                <!--<span class="error"> <?php //echo $foiErr;?></span>-->
            </div> 
            
            
            
            <!---------------------Personal Websites------------------>
            <div class="w3-container">
            	<label><strong>Personal Website</strong></label>
                <input class="w3-input w3-border w3-animate-input" name="authorWebsite" value="" 
                type="text" style="width:50%">
                <!--<span class="error"> <?php //echo $websiteErr;?></span>-->
            </div>    
            
            <input id="authorSubmitButtonId" type="submit" style="width:50%; display:block; margin:auto;background-color:#32CD99;height:50px;" class="w3-btn w3-margin-top w3-round-large" value="Submit">                      
            
	    </form>
        
    </div>
</div>

<script>
	$(document).ready(function() {
		
        $("#authorSubmitButtonId").click(function() {
			
			var authorFn = document.forms["authorForm"]["authorFn"].value;
			var authorLn = document.forms["authorForm"]["authorLn"].value;
			var authorPass = document.forms["authorForm"]["authorPassword"].value;
			var authorCityJS = document.forms["authorForm"]["authorCity"].value;
			var authorStateJS = document.forms["authorForm"]["authorState"].value;
			var authorCountryJS = document.forms["authorForm"]["authorCountry"].value;
			var authorDeptJS = document.forms["authorForm"]["authorDept"].value;
			var authorInstitutionJS = document.forms["authorForm"]["authorInstitution"].value;
			var authorAffliationJS = document.forms["authorForm"]["authorAffliation"].value;
			var authorEmailJS = document.forms["authorForm"]["authorEmail"].value;
			var authorTelJS = document.forms["authorForm"]["authorTel"].value; 
			var authorFaxJS = document.forms["authorForm"]["authorFax"].value;
			var authorFoiJS = document.forms["authorForm"]["authorFoi"].value;
			var authorWebsiteJS = document.forms["authorForm"]["authorWebsite"].value;
			
			$.post("authorRegistrationProcess.php",
					{
						authorFirstName: authorFn,
						authorLastName: authorLn,
						authorPassword: authorPass,
						authorCity: authorCityJS,
						authorState: authorStateJS,
						authorCountry: authorCountryJS,
						authorDept: authorDeptJS,
						authorInstitution: authorInstitutionJS,
						authorAffliation: authorAffliationJS,
						authorEmail: authorEmailJS,
						authorTel: authorTelJS,
						authorFax: authorFaxJS,
						authorFoi: authorFoiJS,
						authorWebsite: authorWebsiteJS
						
					},
					function(output) {
						$("#auhtorOutput").html(output);	
					}
			); //-------post()---------	
			
		}); //----click()-------
    }); //-------ready()--------
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<div id="journalManagerReg" class="journal-manager-container" style="position:fixed;height:100%;width:100%;z-index:1001;background-color:rgba(0,0,0,0.9);display:none;top:0px;left:0px;">

	
    <!---------------------Modal Content(White Background)------------------>
	<div class="journal-manager-registration-content  w3-animate-zoom">
    	
        <div id="jmOutput"></div>
        
        <!---------------------Form------------------>
        <form id="jmForm" action="index.php" method="post">
        
        
        	<!---------------------Close Buttons------------------>
        	<span class="closeBtn" onclick="document.getElementById('journalManagerReg').style.display='none'">&times;</span>	
        	<h2>Journal Manager Registration</h2>
            
            
            <!---------------------First Name & Last Name------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>First Name</strong></label>
                <input class="w3-input w3-border" name="jmfn" type="text" value="" placeholder="">
              </div>
              <div class="w3-half">
                <label><strong>Last Name</strong></label>
                <input class="w3-input w3-border" name="jmln" type="text" placeholder="">
              </div>
            </div>
            
            
            
            <!---------------------City & Province------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>City</strong></label>
                <input class="w3-input w3-border" type="text" placeholder="">
              </div>
              <div class="w3-half">
                <label><strong>State/Province</strong></label>
                <input class="w3-input w3-border" type="text" placeholder="">
              </div>
            </div>
            
            
            
            
            <!---------------------Country & Institute------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>Country</strong></label>
                <input class="w3-input w3-border" type="text" placeholder="">
              </div>
              <div class="w3-half">
                <label><strong>Institute</strong></label>
                <input class="w3-input w3-border" type="text" placeholder="">
              </div>
            </div>  
            
            
            
            
            <!---------------------Academic Degree Radio Buttons------------------>
            <div class="w3-container">	
            	<label><strong>Academic Degree</strong></label>
                <p>
                <input class="w3-radio" type="radio" name="ad" value="male">
                <label class="w3-validate">Associate's degree</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="ad" value="female">
                <label class="w3-validate">Bachelor's degree</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="ad" value="">
                <label class="w3-validate">Master's degree</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="ad" value="">
                <label class="w3-validate">Doctoral degree</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="ad" value="">
                <label class="w3-validate">Postdoctoral</label></p>     
                
                <p>
                <input class="w3-radio" type="radio" name="ad" value="">
                <label class="w3-validate">Research Doctoral degree</label></p>
            </div>   
            
            
            
            <!---------------------Title Radio Buttons------------------>
            <div class="w3-container">
            
         	  	<label style=""><strong>Title</strong></label>
              
              	<p>
                <input class="w3-radio" type="radio" name="title" value="male">
                <label class="w3-validate">Professor</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="title" value="female">
                <label class="w3-validate">Assistant Professor</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="title" value="">
                <label class="w3-validate">Lecturer</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="title" value="">
                <label class="w3-validate">Senior Lecturer</label></p> 
              
                <p>
                <input class="w3-radio" type="radio" name="title" value="male">
                <label class="w3-validate">Associate Professor</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="title" value="female">
                <label class="w3-validate">PhD Student</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="title" value="">
                <label class="w3-validate">Post-doctoral Fellow</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="title" value="">
                <label class="w3-validate">Staff Scientist</label></p> 
              
                <p>
                <input class="w3-radio" type="radio" name="title" value="male">
                <label class="w3-validate">Engineer</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="title" value="female">
                <label class="w3-validate">Research Scientist</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="title" value="">
                <label class="w3-validate">Librarian</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="title" value="">
                <label class="w3-validate">Head of Academic Department/Faculty</label></p> 
            </div>  
            
            
            
            
            <!---------------------E-mail------------------>
            <div class="w3-container">
            	<label><strong>E-Mail</strong></label>
                <input class="w3-input w3-border w3-animate-input" type="email" style="width:50%">
            </div>    
            
            
            
            
            <!---------------------Telephone Number & Fax Number------------------>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>Telephone Number</strong></label>
                <input class="w3-input w3-border" type="number" placeholder="">
              </div>
              <div class="w3-half">
                <label><strong>Fax Number</strong></label>
                <input class="w3-input w3-border" type="number" placeholder="">
              </div>
            </div>  
            
            
            
            <!---------------------Research Areas------------------>
            <div class="w3-container">
            	<label><strong>Research Areas</strong></label>
                <textarea class="w3-input w3-border"  rows="3" cols="40"></textarea>
            </div> 
            
            
            
            <!---------------------Personal Websites------------------>
            <div class="w3-container">
            	<label><strong>Personal Website</strong></label>
                <input class="w3-input w3-border w3-animate-input" type="text" style="width:50%">
            </div>    
            
            <input id="jmSubmitBtn" type="submit" style="width:50%; display:block; margin:auto;background-color:#32CD99;height:50px;" class="w3-btn w3-margin-top w3-round-large" value="Submit">                       
            
	    </form>
        
    </div>
</div>

<script>
	$(document).ready(function() {

		$("#jmSubmitBtn").click(function() {
			var fn = $("input[name='jmfn']").val();
			var ln = $("input[name='jmln']").val();			
			$.post("ProcessJournalManagerRegistrationForm.php",
				{
					firstName: fn,
					lastName: ln
				},
				function(output) {
					$("#jmOutput").html(output);
				});	
			
			$("#jmForm").submit(function() {
				return false;	
			});
		});
	});
</script>
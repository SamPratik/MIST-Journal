<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>modal test</title>

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/modalTest.css">
</head>

<body>

<!--<div id="id01" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content w3-card-8">
    <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id01').style.display='none'"
      class="w3-closebtn">&times;</span>
      <h2>Modal Header</h2>
    </header>
    <div class="w3-container">
      <p>Some text..</p>
      <p>Some text..</p>
    </div>
    <footer class="w3-container w3-teal">
      <p>Modal Footer</p>
    </footer>
  </div>
</div>-->	

<div class="container">
	<div class="content">
    	
        <form class="">
        
        	<span class="closeBtn">&times;</span>	
        	<h2>Reviewer Registration</h2>
            <div class="w3-row-padding">
              <div class="w3-half">
                <label><strong>First Name</strong></label>
                <input class="w3-input w3-border" type="text" placeholder="">
              </div>
              <div class="w3-half">
                <label><strong>Last Name</strong></label>
                <input class="w3-input w3-border" type="text" placeholder="">
              </div>
            </div>
            
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
            
            <div class="w3-container">
                <label><strong>Country</strong></label>
                <input class="w3-input w3-border w3-animate-input" type="text" style="width:50%">
            </div>    
            
            <div class="w3-container">	
            	<label><strong>Academic Degree</strong></label>
                <p>
                <input class="w3-radio" type="radio" name="gender" value="male">
                <label class="w3-validate">Associate's degree</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="gender" value="female">
                <label class="w3-validate">Bachelor's degree</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="gender" value="">
                <label class="w3-validate">Master's degree</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="gender" value="">
                <label class="w3-validate">Doctoral degree</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="gender" value="">
                <label class="w3-validate">Postdoctoral</label></p>     
                
                <p>
                <input class="w3-radio" type="radio" name="gender" value="">
                <label class="w3-validate">Research Doctoral degree</label></p>
            </div>   
            
            <div class="w3-container">
            
         	  	<label style=""><strong>Title</strong></label>
              
              	<p>
                <input class="w3-radio" type="radio" name="gender" value="male">
                <label class="w3-validate">Professor</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="gender" value="female">
                <label class="w3-validate">Assistant Professor</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="gender" value="">
                <label class="w3-validate">Lecturer</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="gender" value="">
                <label class="w3-validate">Senior Lecturer</label></p> 
              
                <p>
                <input class="w3-radio" type="radio" name="gender" value="male">
                <label class="w3-validate">Associate Professor</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="gender" value="female">
                <label class="w3-validate">PhD Student</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="gender" value="">
                <label class="w3-validate">Post-doctoral Fellow</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="gender" value="">
                <label class="w3-validate">Staff Scientist</label></p> 
              
                <p>
                <input class="w3-radio" type="radio" name="gender" value="male">
                <label class="w3-validate">Engineer</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="gender" value="female">
                <label class="w3-validate">Research Scientist</label></p>
                
                <p>
                <input class="w3-radio" type="radio" name="gender" value="">
                <label class="w3-validate">Librarian</label></p> 
                
                <p>
                <input class="w3-radio" type="radio" name="gender" value="">
                <label class="w3-validate">Head of Academic Department/Faculty</label></p> 
            </div>  
            
            <div class="w3-container">
            	<label><strong>E-Mail</strong></label>
                <input class="w3-input w3-border w3-animate-input" type="email" style="width:50%">
            </div>    
            
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
            
            <div class="w3-container">
            	<label><strong>Research Areas</strong></label>
                <textarea class="w3-input w3-border"  rows="3" cols="40"></textarea>
            </div> 
            
            <div class="w3-container">
            	<label><strong>Personal Website</strong></label>
                <input class="w3-input w3-border w3-animate-input" type="text" style="width:50%">
            </div>    
            
            <input style="width:50%; display:block; margin:auto;background-color:#32CD99;height:50px;" class="w3-btn w3-margin-top w3-round-large" value="Submit">                       
            
	    </form>
        
    </div>
</div>
    
</body>
</html>
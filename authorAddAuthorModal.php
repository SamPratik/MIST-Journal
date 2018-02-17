

<div id="addAuthorModal" class="w3-modal">
  <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
  
    <div class="w3-center"><br>
      <span onclick="document.getElementById('addAuthorModal').style.display='none'" 
      class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
      <!--<img src="images/img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">-->
      <h2 style="color:#32CD99; font-size:50px;font-weight:bold;font-family:lobster;">Add more Authors</h2>
    </div>

    <form class="w3-container" name="authorAddForm" method="post" onSubmit="return false;">
      <div class="w3-section">

        <label><b>First Name</b></label>
        <input class="w3-input w3-border" name="authorAddFn" type="text" placeholder="Enter First Name" value="">
        <p class="error-message" id="authorLoginPasswordErr"></p>
        
        <label><b>Last Name</b></label>
        <input class="w3-input w3-border" name="authorAddLn" type="text" placeholder="Enter Last Name" value="">
        <p class="error-message" id="authorLoginPasswordErr"></p>
        
        <label><b>E-mail</b></label>
        <input class="w3-input w3-border w3-margin-bottom" name="authorAddEmail" type="email" placeholder="Enter Your Email" value="">
        <p class="error-message" id="authorLoginEmailErr"></p>

        <input id="addAuthorBtn" class="w3-btn-block w3-green w3-section w3-padding" type="submit" value="Submit"> <br/>
        
        <p class="error-message" id="authorMissMatchMessage"></p>
        
      </div>
    </form>

    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
      <button onclick="document.getElementById('authorLogin').style.display='none'" type="button" 
      class="w3-btn w3-red w3-right">Cancel</button>
    </div>

  </div>
</div>

<script>
	$(document).ready(function() {
        
		$("#addAuthorBtn").click(function() {
			
			var authorAddFnJS = document.forms["authorAddForm"]["authorAddFn"].value;
			var authorAddLnJS = document.forms["authorAddForm"]["authorAddLn"].value;
			var authorAddEmailJS = document.forms["authorAddForm"]["authorAddEmail"].value;
			
			$.post(
				"authorAddProcess.php",
				{
					authorAddFn: authorAddFnJS,
					authorAddLn: authorAddLnJS,
					authorAddEmail: authorAddEmailJS,
					authorId: <?php echo $authorLoginId; ?>
				},
				function(output) {
					if(output.indexOf("success") != -1) {
						alert("Author has been added successfully!!!";	
					} else {
						alert("Something went wrong!!!");	
					}
					//alert(output);
				}
			);
			
		});
		
    });
</script>
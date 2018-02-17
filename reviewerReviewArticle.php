<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>

<?php
	$rLoginId = $_SESSION["rLoginId"];
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Review Article</title>

<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/reviewerReviewArticle.css">
<link type="text/css" rel="stylesheet" href="css/home.css">

<style>
	.topNavbar {
		margin-top:-10px;	
	}
	
	li button {
		margin-right:5px;	
	}
	
	h3 {
		color:black;	
	}
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body>

	<?php include_once("reviewerNavigationBar.php"); ?>
    
    <div class="reviewer-review-container">
    	<h1>Review Article</h1>
        
        <ul class="w3-ul">
        
		<?php
			
			$selectRId = "SELECT author_id,r_id,se_id FROM se_select_reviewer WHERE r_id={$rLoginId}";
			$resultRid = mysqli_query($connection,$selectRId);
		?>
        
        <li class="w3-padding-16">
        
        <?php	
			
			while($rowRid = mysqli_fetch_assoc($resultRid)) {
				/*echo "RID: ".$rowRid["r_id"]."<br/>";	
				echo "Author ID: ".$rowRid["author_id"]."<br/>";*/
				$rId = $rowRid["r_id"];
				$authorId = $rowRid["author_id"];
				$seId = $rowRid["se_id"];
				
				$selectAuthorName = "SELECT fn,ln FROM author WHERE author_id={$authorId}";
				$resultAuthorName = mysqli_query($connection,$selectAuthorName);
				$count = 0;
			?>
            
            <h3>
            <?php
				
				while($rowAuthorName = mysqli_fetch_assoc($resultAuthorName)) {
					if($count == 0) {
						echo $rowAuthorName["fn"]." ".$rowAuthorName["ln"];	
						$count++;
					} else {
						echo " ,".$rowAuthorName["fn"]." ".$rowAuthorName["ln"];
					}
				}
			?>
            </h3>
				
			<?php
				
				$selectATA = "SELECT seFn,seLn,i.title,sa.article,i.abstract FROM author_index_article AS i,author_submitted_article AS sa,section_editor AS se WHERE i.author_id={$authorId} AND sa.author_id={$authorId} AND se.id={$seId}";
				$resultATA = mysqli_query($connection,$selectATA);
				
				while($rowATA = mysqli_fetch_assoc($resultATA)) {
			?>
            		
                  <p><strong>Abstract: </strong>&nbsp;&nbsp;&nbsp;<?php echo $rowATA["abstract"]; ?></p>
                  <p><strong>Article Title: </strong>&nbsp;&nbsp;&nbsp;<a href="uploads/<?php echo $rowATA["article"]; ?>"><?php echo $rowATA["title"]; ?></a></p>
                  <p><strong class="w3-large">Author ID:</strong>&nbsp;&nbsp;&nbsp; <strong><?php echo $authorId; ?></strong></p>
                  <p><strong class="w3-large">Sent By:</strong>&nbsp;&nbsp;&nbsp; <?php echo $rowATA["seFn"]." ".$rowATA["seLn"] ?>
                  (Section Editor)</p>
                  <p>
                  <button type="button" class="w3-btn w3-blue w3-right"><i class="fa fa-paperclip" aria-hidden="true"></i> Attach File</button>
                  <!-----Notify Section Editor Button------>
                  <button type="button" class="w3-btn w3-green w3-right" onClick="openNotifyModal(<?php echo $seId; ?>)">
                  <i class="fa fa-bell" aria-hidden="true"></i> Notify Section Editor</button>
                  <button class="w3-btn w3-red w3-right" onclick="document.getElementById('id01').style.display='block'">
                  <i class="fa fa-signal" aria-hidden="true"></i> Review</button>
                  </p>
                  
                  <div style="clear:both;"></div>
                  
            <?php
				}
			?>
            </li>
            	
		<?php
			
			}
			
		?>
        </ul>
        
           	
    </div>
    
    <?php include_once("footer.php"); ?>
    
      <!--------Modal--------->      
      <div id="id01" class="w3-modal" style="position:fixed; top:0px;left:0px;z-index:1003;">
        <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
    
          <div class="w3-center"><br>
            <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
          </div>
    
    		<!-------review form-------->
            <form id="reviewFormId" class="w3-container" name="reviewForm" onSubmit="return false;">
              <h2 style="color:#32CD99; text-align:center; font-family:lobster; font-size:50px;">Review Article</h2>
              <div class="w3-container">
                  <label style=""><strong style="color:#32CD99;">Provide a rating of the paper's acceptability </strong>
                  </label>
                  <p>
                  <input class="w3-radio" type="radio" name="rating" value="Accepted">
                  <label class="w3-validate">Accept</label></p>
                  <p>
                  <input class="w3-radio" type="radio" name="rating" value="Rejected">
                  <label class="w3-validate">Reject</label></p>
                  <p>
                  <input class="w3-radio" type="radio" name="rating" value="nc">
                  <label class="w3-validate">Need changes</label></p>
              </div>
              
              
            <!-------Checkboxes---------->
              <div class="w3-container">
              	  <label style=""><strong style="color:#32CD99;">Identify aspects of the paper that needs improvement 
                  </strong>
                  </label>
                  <p>
                  <input class="w3-check" name="cNc" type="checkbox" value="cNc">
                  <label class="w3-validate">Statements or passages that could be expressed more clearly & concisely</label>
                  </p>
                  <p>
                  <input class="w3-check" name="figure" type="checkbox" value="figure">
                  <label class="w3-validate"> Figures that are redundant, difficult to understand or missing</label></p>
                  <p>
                  <input class="w3-check" name="ref" type="checkbox" value="reference">
                  <label class="w3-validate">Incomplete or missing references</label></p>
                  <p>
                  <input class="w3-check" name="understable" type="checkbox" value="understable">
                  <label class="w3-validate">Changes that could make the paper more understable to an international readership
                  </label></p>
                  <p>
                  <p>
                  <input class="w3-check" name="format" type="checkbox" value="format">
                  <label class="w3-validate">Problems in formatting, layout editor legibility</label></p>
                  <p>
              </div>
              
              <div class="w3-container">
            	<label><strong style="color:#32CD99;">Write your review of the paper here: </strong></label>
                <textarea class="w3-input w3-border" name="comment" rows="3" cols="40"></textarea>
              </div> 
              
              <div class="w3-container w3-margin-top">
              	  <strong style="color:#32CD99;">Author ID</strong>
                  <input class="w3-input w3-border" name="authorId" type="number">
              </div> 
              
              <button class="w3-btn w3-blue w3-margin-top" type="button" value="" id="reviewBtnId" style="display:block; margin:auto;">Submit</button>
            </form>
    
        </div>
      </div><!--------Modal--------->

      <script>
	  	  $(document).ready(function() {
			$("#reviewBtnId").click(function() {
				
				var ratingJS = document.forms["reviewForm"]["rating"].value;
				if(document.forms["reviewForm"]["cNc"].checked == true) {
					var cncJS = "Statements or passages that could be expressed more clearly & concisely";
				} else {
					var	cncJS = "";
				}
				if(document.forms["reviewForm"]["figure"].checked == true) {
					var figureJS = "Figures that are redundant, difficult to understand or missing";
				} else {
					var figureJS = "";
				}
				if(document.forms["reviewForm"]["ref"].checked == true) {
					var refJS = "Incomplete or missing references";
				} else {
					var refJS = "";
				}
				if(document.forms["reviewForm"]["understable"].checked == true) {
					var understableJS = "Changes that could make the paper more understable to an international readership";
				} else {
					var understableJS = "";
				}
				if(document.forms["reviewForm"]["format"].checked == true) {
					var formatJS = "Problems in formatting, layout editor legibility";
				} else {
					var formatJS = "";	
				}
				var commentJS = document.forms["reviewForm"]["comment"].value;
				var authorIdJS = document.forms["reviewForm"]["authorId"].value;
				
				$.post(
					"reviewerReviewProcess.php",
					{
						rating: ratingJS,
						cnc: cncJS,
						figure: figureJS,
						ref: refJS,
						understable: understableJS,
						format: formatJS,
						comment: commentJS,
						rId: <?php echo $rId; ?>,
						authorId: authorIdJS
					},
					function(output) {
						if(output.indexOf("success") != -1) {
							alert("Review has been done");
							document.getElementById("reviewFormId").reset();
						} else {
							alert("Something went wrong!!!");	
						}
					}
					
				); //post()------
				
			});  //click()-----
			
		  }); //ready()-----
	  </script>      
      


	  <!-------------Notify to Section Editor Message Modal------------->
      <div id="notifyMessageId" class="w3-modal">
        <div class="w3-modal-content" style="top:100px;">
          <header class="w3-container w3-light-grey">
            <span onclick="document.getElementById('notifyMessageId').style.display='none'"
            class="w3-closebtn">&times;</span>
            <h2 style="text-align:center;color:#32CD99;font-family:lobster;font-weight:bold;font-size:50px;">Notifying message to Section Editor</h2>
          </header>
          
          <form class="w3-container w3-margin-top" name="notifyForm" id="notifyFormId" style="display:block; margin:auto;" 
          onSubmit="return false;">
                <p>
                  <label class="w3-label">Message: </label>
                  <textarea class="w3-input" name="message"></textarea>
                </p>
            
                <p>
  				<button type="button" class="w3-btn w3-teal w3-right w3-margin-top" id="notifyMessageSendId" 
                onClick="sendNotifyToDb(this.value)">Send</button>
                </p>
          </form>
          
          <div class="w3-container w3-border-top w3-padding-16 w3-margin-top w3-light-grey">
            <button onclick="document.getElementById('notifyMessageId').style.display='none'" type="button" class="w3-btn w3-red w3-right">Cancel</button>
          </div>
        </div>
      </div> 
      
      <!-------When Notify Section Editor is clicked------->
      <script>
		function openNotifyModal(seId) {
			document.getElementById("notifyMessageId").style.display="block";
			document.getElementById("notifyMessageSendId").value = seId;
		}
	  </script>
      
      <!------When send is clicked---------->
      
      <script>
	  	function sendNotifyToDb(seIdJS) {
			
			//alert(seId + " " + <?php //echo $rId; ?>);
			var messageJS = document.forms["notifyForm"]["message"].value;
			$.post(
				"reviewerSeNotifyProcess.php",
				{
					seId: seIdJS,
					rId: <?php echo $rId; ?>,
					message: messageJS
				},
				function(output) {
					if(output.indexOf("success") != -1) {
						alert("Message has been sent to Section Editor");	
						document.getElementById("notifyFormId").reset();
					}
					if(output.indexOf("failed") != -1) {
						alert("Message can't be sent!!!");
					}
				}
			);
			
		}
	  </script>
       
	  
      <script>
	  	  document.getElementsByClassName("header-link")[1].classList.add("active");
	  </script>
</body>
</html>
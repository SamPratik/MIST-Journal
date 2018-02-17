<?php session_start(); ?>
<?php include_once("dbConnector.php"); ?>

<?php $seLoginId = $_SESSION["seLoginId"]; ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Articles From Editor</title>

<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/home.css">

<style>
	
	* {
		margin:0px;
		padding:0px;
		box-sizing:border-box;	
	}
	
	.editor-submitted-articles-container {
		width:80%;
		display:block;
		margin: 0px auto 10px auto;
		min-height:400px;	
		position:relative;
		top:110px;
		text-align:justify;
	}
	
	.editor-submitted-articles-container li {
		/*position:relative;*/	
	}
	
	.editor-submitted-articles-container a.select-se {
		margin-top:20px;
		float:right;
	}
	
	.editor-submitted-articles-container h3 {
		color:black;
		font-weight:550;
	}
</style>
</head>

<body>



	<?php include_once("sectionEditorNavigationBar.php"); ?>
    
    <div class="editor-submitted-articles-container">
    
      <ul class="w3-ul">
      
		<?php
			$selectSeId = "SELECT author_id,se_id FROM editor_send_article_to_se WHERE se_id={$seLoginId}";
			$resultSeid = mysqli_query($connection,$selectSeId);
		?>
        
        <?php
			
			while($rowSeId = mysqli_fetch_assoc($resultSeid)) {
		?>
        
         <li class="w3-padding-16">
        
        <?php
				//echo "<br/>Section Editor Id: ".$seId = $rowSeId["se_id"]."<br/>";
				//echo "Author Id: ".$authorId = $rowSeId["author_id"]."<br/>"; 
				$seId = $rowSeId["se_id"];
				$authorId = $rowSeId["author_id"];
				
				//--------Selecting Author Names From author table---------
				
				$selectAuthorName = "SELECT fn,ln FROM author WHERE author_id={$authorId}";
				$resultAuhtorName = mysqli_query($connection,$selectAuthorName);
				$count = 0;
		
		?>		
		
        <h3>Author Name: 
        <?php
        
        		while($rowAuthorName = mysqli_fetch_assoc($resultAuhtorName)) {
		
        
				
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
				
				//----Selecting Article,Title,Abstract------------------
				
				$selectATA = "SELECT s.article,i.title,i.abstract FROM author_index_article AS i, author_submitted_article AS s WHERE i.author_id={$authorId} AND s.author_id={$authorId}";
				$resultATA = mysqli_query($connection,$selectATA);
				
				while($rowATA = mysqli_fetch_assoc($resultATA)) {
				
				?>	
                
				  <p><strong>Abstract: </strong><span><?php echo $rowATA["abstract"]; ?></span></p>
				  <p><strong>Article: </strong><span><a href="uploads/<?php echo $rowATA["article"]; ?>"><?php echo $rowATA["title"]; ?></a></span></p>
				  <a class="w3-btn w3-red select-se" href="sectionEditorSelectReviewer.php?author_id=<?php echo $authorId; ?>&article=<?php echo $rowATA["article"]; ?>">
				  <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Select Reviewers</a>
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
    
    <script>
        document.getElementsByClassName("header-link")[3].classList.add("active");
    </script>

</body>
</html>
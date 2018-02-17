
<?php include_once("dbConnector.php"); ?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Submitted Articles</title>

<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

	<?php include_once("editorNavigationBar.php"); ?>
    
    <div class="editor-submitted-articles-container">
    
      <ul class="w3-ul">
      

    
        
        
            <?php
                
                $getAuthorId = "SELECT author_id FROM author_submitted_article";
                $resultAuthorId = mysqli_query($connection,$getAuthorId);
                
                while($rowAuthorId = mysqli_fetch_assoc($resultAuthorId)) {
			?>
            
            <li class="w3-padding-16">  
            
				<?php          
                        $authorId = $rowAuthorId["author_id"];
                        //echo $authorId."<br/>";
                        $selectAuthorName = "SELECT fn,ln FROM author WHERE author_id={$authorId}";
                        $resultAuthorName = mysqli_query($connection,$selectAuthorName);
                        
                        //--------printing Author Names-------
                        
                        $count = 0;
                ?>
                
                <h3>Author Name:
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
                        
                        //-------Select Article,Title,Abstract-------------
                        
                        $selectATA = "SELECT s.article,i.title,i.abstract FROM author_submitted_article AS s, author_index_article AS i WHERE s.author_id={$authorId} AND i.author_id = {$authorId} ";
                        $resultATA = mysqli_query($connection,$selectATA);
                        while($rowATA = mysqli_fetch_assoc($resultATA)) {
                ?>
                
                
                          <p><strong>Title: </strong><span><a href="uploads/<?php echo $rowATA["article"]; ?>">
                          <?php echo $rowATA["title"]; ?></a></span></p>
                          <p><strong>Abstract: </strong><span><?php echo $rowATA["abstract"]; ?></span></p>
                          <a class="w3-btn w3-red select-se w3-right" href="editorSelectSectionEditor.php?authorId=<?php echo $authorId; ?>">
                          <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Select Section Editor</a>
                          <div style="clear:both;"></div>
                <?php
                        }
                        
                    }
                        
                ?>
            
            	<!--<div style="clear:both;"></div>-->
        	</li>
        

      </ul>  
      
    </div> 
    
    <?php include_once("footer.php"); ?>
    
    <script>
        document.getElementsByClassName("header-link")[1].classList.add("active");
    </script>

</body>
</html>
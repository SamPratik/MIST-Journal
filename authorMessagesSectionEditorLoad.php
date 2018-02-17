
<?php include_once("dbConnector.php"); ?>
<?php
	$seId = $_GET["seId"];
	$authorId = $_GET["authorId"]; 
?>

<?php  
	$sqlMessageSe = "SELECT fn,ln,seFn,seLn,se_message,i.title,author_message,se_article,author_article FROM se_author_message AS m,author AS a,section_editor AS s,author_index_article AS i WHERE s.id=m.se_id AND a.id=m.author_id AND m.se_id={$seId} AND m.author_id={$authorId} AND i.author_id=m.author_id";
	$resultMessageSe = mysqli_query($connection,$sqlMessageSe);
?>


          <h1>Author & Section Editor conversession</h1>  
          
          <!--<a name="author-bottom"></a>-->  
          
          <?php while($rowMessageSe = mysqli_fetch_assoc($resultMessageSe)) { ?>
          
          <?php if($rowMessageSe["se_message"] != NULL) { ?>
          <div class="author-section-editor-comment w3-card-4">
              <strong style="display:block;"><?php echo $rowMessageSe["seFn"]." ".$rowMessageSe["seLn"]; ?>(Section Editor)
              </strong>
              <small style="display:block; font-size:18px;">SEPTEMBER 14, 2013</small>
              <p><?php echo nl2br($rowMessageSe["se_message"]); ?></p>
              
              <?php if($rowMessageSe["se_article"] != NULL) { ?>
              <!--<strong style="display:block; font-size:18px;"><?php //echo $rowMessageSe["seFn"]." ".$rowMessageSe["seLn"]; ?>(Section Editor)</strong>-->
              <p><a href="uploads/<?php echo $rowMessageSe["se_article"]; ?>"><?php echo $rowMessageSe["title"]; ?></a></p>              <?php } ?>
          </div>
		  <?php } ?>
          
		  
           <!--<div class="author-section-editor-comment w3-card-4">

          </div>         	  -->
          
          
          <?php if($rowMessageSe["author_message"] != NULL) { ?>
          <div class="author-comment w3-card-4">
              <strong style="display:block;"><?php echo $rowMessageSe["fn"]." ".$rowMessageSe["ln"]; ?>(Author)</strong>
              <small style="display:block;">SEPTEMBER 17, 2013</small>
              <p><?php echo $rowMessageSe["author_message"]; ?></p>
          </div>
          <?php } ?>
          
          <?php if($rowMessageSe["author_article"] != NULL) { ?>
          <div class="author-comment w3-card-4">
              <strong style="display:block;"><?php echo $rowMessageSe["fn"]." ".$rowMessageSe["ln"]; ?>(Author)</strong>
              <small style="display:block;">SEPTEMBER 17, 2013</small>
              <p><a href="uploads/<?php echo $rowMessageSe["author_article"]; ?>"><?php echo $rowMessageSe["title"]; ?></a></p>
          </div>
          <?php } ?>
          
          <?php } ?>
          

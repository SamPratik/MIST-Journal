<?php include_once("dbConnector.php"); ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

	<?php
		$volume = $_GET["volume"];
		$issue = $_GET["issue"];	
		
		
		$sql = "SELECT a.fn,a.ln,article,i.title,i.abstract FROM author AS a,publish_article AS p,author_index_article AS i WHERE a.id=p.author_id AND i.author_id=p.author_id AND volume={$volume} AND issue={$issue}";
		$result = mysqli_query($connection,$sql);
	?>
	<div>
    	
        <?php
			while($row = mysqli_fetch_assoc($result)) {
		?>
        <div><p><strong>Author Name:</strong> <?php echo $row["fn"]." ".$row["ln"]; ?></p>
        <a href="uploads/<?php echo $row["article"]; ?>"><?php echo $row["title"]; ?></a>
        <p><?php echo $row["abstract"]; ?></p></div>
        <?php
			}
		?>
        
    </div>

</body>
</html>
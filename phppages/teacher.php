<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/hpage.css"/>
<script src="../js/jquery-1.12.1.js"></script>
<script src="../js/hpage.js"></script>
<?php 
	include('../phppages/teachphp.php');
 ?>

</head>
<body>
<center><p>Welcome to your profile</p></center> <br/>

<div class="buttons">

<center>

<button class="b1" id="waa" name="waa">Write an article</button>
<button class="b1" id="awte" name="awte">Write a teaching essential</button>
<a href="../phppages/myarticle.php"><button class="b1" style="text-decoration: none;" id="articles" >My Articles</button></a>
<a href="../phppages/myteachess.php"><button class="b1" style="text-decoration: none;" id="te" >My Teaching Essential</button></a>
<a href="../phppages/article.php"><button class="b1" style="text-decoration: none;" id="cote" >Check articles</button></a>
<a href="../phppages/teachess.php"><button class="b1" style="text-decoration: none;" id="cote" >Check teaching essential</button></a><br/>
</center>

</div>

<div class="wyahh">
<center>
<form method="POST" action="">
<textarea class="b1" name="article_text" style="width: 80%; height: 250px;" placeholder="Wrtite your Article here"></textarea><br/>
<select class="ca" name="ptype">
    		<option value="1">Public</option>
    		<option value="2">Private</option>
  		</select>
<button class="b1" type="submit">Submit</button>	
<button class="b1" id="back">Back</button>
</form>
</center>
</div>

<div class="wytehh">
<center>
<form method="POST" action="">
<textarea class="ca" name="teaching_text" style="width: 80%; height: 250px;" placeholder="Wrtite your Teaching Essential here"></textarea><br/>
<select class="ca" name="pertype">
    		<option value="1">Public</option>
    		<option value="2">Private</option>
  		</select>
<button class="b1" type="submit">Submit</button>	
<button class="b1" id="back1">Back</button>
</form>
</center>
</div>

</body>
</html>
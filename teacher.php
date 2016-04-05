<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="hpage.css"/>
<script src="jquery-1.12.1.js"></script>
<script src="hpage.js"></script>
<?php 
	include('teachphp.php');
 ?>

</head>
<body>
<center><p>Welcome to your profile</p></center> <br/>

<div class="buttons">

<center>
<button class="b1" id="waa" name="waa"><strong>Write an article</strong></button>
<button class="b1" id="awte" name="awte">Write a teaching essential</button>
<button class="b1" id="articles" name="articles">Articles</button>
<button class="b1" id="te" name="te">Teaching Essential</button>
<button class="b1" id="cote" name="coa">Check other's articles</button>
<button class="b1" id="cote" name="cote">Check other's teaching essential</button><br/>
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
<textarea class="ca" style="width: 80%; height: 250px;" placeholder="Wrtite your Teaching Essential here"></textarea><br/>
<select class="ca" name="ptype">
    		<option value="1">Public</option>
    		<option value="2">Private</option>
  		</select>
<button class="b1" type="submit">Submit</button>	
<button class="b1" id="back1">Back</button>
</center>
</div>

</body>
</html>
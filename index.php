<?php
require("configuration/config.php");
if(isset($_POST['name']))
	$name=$_POST['name'];
if(isset($_POST['cws']))
	$cws=$_POST['cws'];
if(isset($_POST['phone']))
	$phone=$_POST['phone'];
if(isset($_POST['adults']))
	$adults=$_POST['adults'];
if(isset($_POST['k1']))
	$k1=$_POST['k1'];
if(isset($_POST['k2']))
	$k2=$_POST['k2'];
if(isset($_POST['k3']))
	$k3=$_POST['k3'];
if(isset($_POST['section']))
	$section=$_POST['section'];
if(isset($_POST['souvenir']))
	$souvenir=$_POST['souvenir'];
if(isset($_POST['cws'])&&isset($_POST['name']))
	mysql_query("insert into arrived_list(name,cws,phone,adults,k1,k2,k3,section,souvenir)values('$name','$cws','$phone','$adults','$k1','$k2','$k3','$section','$souvenir')")or die(null);
?>

<!Doctype html>

<html lang="en">
<head>
<meta charset="utf-8" />
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="data/guest_list.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/applicationSpecific.css" />
<link rel="stylesheet" href="css/jquery-ui.min.css" />
<script type="text/javascript" src="View/index_view.js"> </script>
</head>
<body>
<div id="header">
<img src="css/images/cat.png" id="logo">
<h1 class="span4 mainHeader">Family Day Registration Portal</h1>
</div>
<div id="reportsContainer">
<a href="Reports/Count_Inside.php" target="_blank">Total Number of People Inside</a><br/>
<a href="edit.php" target="_blank">Go to Edit Mode</a><br/>
</div>

<div id="registrationContainer" class="container-fluid">


<p class="bg-success">

</p>
<p class="bg-danger">

</p>

<div class="form-group">
<label for="eName">Employee Name: </label>
<input type="text" name="name" id="eName" class="form-control"/>
</div>

<div class="form-group">
<label for="aCount">Adult Count:</label> 
<input type="text" name="adults"class="form-control" id="aCount"/>
</div>
<div id="childrenContainer">
<div class="form-group child">
<label for="c10Count">Children > 10 Years: </label>
<input type="text" name="k3"class="form-control" id="c10Count"/>
</div>

<div class="form-group child">
<label for="c510Count">Children between 5-10 Years: </label>
<input type="text" name="k2"class="form-control" id="c510Count"/>
</div>

<div class="form-group child">
<label for="c5Count">Children < 5 Years:</label>
<input type="text" name="k1"class="form-control" id="c5Count"/>
</div>
</div>
<div class="form-group">
<label for="cws">CWS ID: </label>
<input type="text" name="cws"class="form-control" id="cws"/>
</div>

<div class="form-group">
<label for="phone">Phone: </label>
<input type="text" name="phone"class="form-control" id="phone"/>
</div>

<div class="form-group">
<label>Souvenir: </label>
<input type="checkbox" name="souvenir" id="souvenir"/>
</div>

<div class="form-group">
<label for="section">Section: </label>
<input type="text" name="section"class="form-control" id="section"/>
</div>

<div class="form-group">
<button class="btn btn-primary" id="submitButton">Submit</button>
</div>

</body>

</html>
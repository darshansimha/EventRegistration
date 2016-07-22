<?php
require("../configuration/config.php");
if(isset($_POST['name']))
	$name=$_POST['name'];
if(isset($_POST['aCount']))
	$adults=$_POST['aCount'];
if(isset($_POST['cCount']))
	$kids=$_POST['cCount'];
if(isset($_POST['aCount'])&&isset($_POST['cCount']))
	$total=$adults+$kids+1;
if(isset($_POST['aCount'])&&isset($_POST['cCount'])&&isset($_POST['name']))
	mysql_query("insert into arrived_list(name,adults,kids,total) values('$name','$adults','$kids','$total')")or die(null);
?>
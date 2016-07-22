<?php

include_once("../configuration/config.php");

$result = mysql_query("select id,name,cws,phone,adults,k1,k2,k3,section from arrived_list") or die(null);

$sumAdults=0;
$k1=0;
$k2=0;
$k3=0;
$count = 0;

while($row=mysql_fetch_assoc($result)){
$sumAdults=$sumAdults+$row['adults'];
$k1=$k1+$row['k1'];
$k2=$k2+$row['k2'];
$k3=$k3+$row['k3'];
$count++;
}
$total = $sumAdults+$k1+$k2+$k3+$count;
$employees = $count;

echo"<h1>Count Summary</h1>";
echo "<table class= table .table-hover>
<th>Total Number of Adults</th>
<th>Children > 10 Years</th>
<th>Children between 5-10 Years</th>
<th>Children < 5 Years</th>
<th>Total Number of Employees</th>
<th>Total Number of People</th>
<tr class= table table-hover>
<td>$sumAdults</td>
<td>$k1</td>
<td>$k2</td>
<td>$k3</td>
<td>$employees</td>
<td>$total</td>
<tr>
</table>";
$result1 = mysql_query("select id,name,cws,phone,adults,k1,k2,k3,section,souvenir from arrived_list") or die(null);
echo"<h1>Registered People So Far</h1>";
echo"<table class= table .table-hover>
<tr>
<th>Name</th>
<th>CWS</th>
<th>Phone</th>
<th>Adults</th>
<th>Children > 10 Years</th>
<th>Children between 5-10 Years</th>
<th>Children < 5 Years</th>
<th>Section</th>
<th>Souvenir</th>
</tr>";

while($row1=mysql_fetch_assoc($result1)){
echo"<tr class= table table-hover><td>$row1[name]</td><td>$row1[cws]</td><td>$row1[phone]</td>
<td>$row1[adults]</td><td>$row1[k1]</td><td>$row1[k2]</td><td>$row1[k3]</td><td>$row1[section]</td><td>$row1[souvenir]</td></tr>";
}
echo"</table>";


?>

<html lang="en">
<head>
<meta charset="utf-8" />
<script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../data/guest_list.js"></script>
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/applicationSpecific.css" />
<link rel="stylesheet" href="../css/jquery-ui.min.css" />
</head>
<body>

</body>

</html>
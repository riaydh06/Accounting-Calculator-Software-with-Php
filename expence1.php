<?php
  include("expence.php"); 
$query82 = "SELECT * from data2 WHERE tname3 = 'Expence on cash' or tname3 ='Expence on due' ";
$result882 = mysqli_query($con,$query82);
while($row = mysqli_fetch_array($result882)){
$dno = $row["dno"];
$date = $row["date"];
$balance = $row["balance"];
$t1 = $row["t1"];
$t2 = $row["t2"];
$tt1 = $row["tt1"];
$tt2 = $row["tt2"];
$tname2 = $row["tname2"];
$tname3 = $row["tname3"];
$tname1 = $row["tname1"];
$arr = array('','','','','','','');
$arr[$t1-1] = $balance * $tt1;
$arr[$t2-1] = $balance * $tt2;
if($arr[6]<0){$dc11=$arr[6];$dc22="  ";}
else{$dc11="  ";$dc22=$arr[6];}
$query83 = "insert into expence(dno,date,particular5,debit5,credit5,balance) values ('$dno','$date','($tname3)$tname2','$dc11','$dc22','$dc11 $dc22')";
	
 mysqli_query($con,$query83);
}



$query84 = "select * from expence";
$result884 = mysqli_query($con,$query84);

$sum9=0;
while($row = mysqli_fetch_array($result884)){
$date = $row["date"];
$particular5 = $row["particular5"];
$debit5 = $row["debit5"];
$credit5 = $row["credit5"];
$balance = $row["balance"];
$sum9 = tggg7($date,$particular5,$debit5,$credit5,$balance,$sum9);
}
tggg7_sum($sum9);
function  tggg7($date,$particular5,$debit5,$credit5,$balance,$sum9){
$sum9=$sum9 +$balance;
$debit5*=-1;
echo "
<tr>
  <td>$date</td>
  <td> $particular5  </td>
  <td>=</td>
  <td>$debit5</td>
  <td>$credit5</td>
  <td>$sum9</td>
</tr>";
return $sum9;
}

function tggg7_sum($sum9){
$sum9=$sum9*-1;
$dc=0;
	if($sum9<0)
	$dc='Cr';
	else
	$dc='Dr';
echo "
<tr>
  <td>Total</td>
  <td>   </td>
  <td>=</td>
  <td>   </td>
  <td>   </td>
  <td> $sum9 $dc</td>
</tr>";
  }
?>

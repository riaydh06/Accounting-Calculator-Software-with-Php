<?php
  include("revenue.php"); 
$query72 = "SELECT * from data2 WHERE tname3 = 'Service on cash' or tname3 ='Service on due' or tname3 ='Sell on due' or tname3 ='Sell on cash'";
$result772 = mysqli_query($con,$query72);
while($row = mysqli_fetch_array($result772)){
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
$query73 = "insert into revenue(dno,date,particular5,debit5,credit5,balance) values ('$dno','$date','($tname3)$tname2','$dc11','$dc22','$dc11 $dc22')";
	
mysqli_query($con,$query73);
}



$query74 = "select * from revenue";
$result774 = mysqli_query($con,$query74);

$sum10=0;
while($row = mysqli_fetch_array($result774)){
$date = $row["date"];
$particular5 = $row["particular5"];
$debit5 = $row["debit5"];
$credit5 = $row["credit5"];
$balance = $row["balance"];
$sum10 = tggg8($date,$particular5,$debit5,$credit5,$balance,$sum10);
}
tggg8_sum($sum10);
function  tggg8($date,$particular5,$debit5,$credit5,$balance,$sum10){
$sum10=$sum10 +$balance;
$debit5*=-1;
echo "
<tr>
  <td>$date</td>
  <td> $particular5  </td>
  <td>=</td>
  <td>$debit5</td>
  <td>$credit5</td>
  <td>$sum10</td>
</tr>";
return $sum10;
}

function tggg8_sum($sum10){
$sum10=$sum10*-1;
$dc=0;
	if($sum10<0)
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
  <td> $sum10 $dc</td>
</tr>";
  }
?>

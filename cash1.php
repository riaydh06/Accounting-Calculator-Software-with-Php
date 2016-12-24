<?php
  include("cash.php"); 
  $sum206 =0;
  $query203 = "select * from data3";
$result204 = mysqli_query($con,$query203);

while($row = mysqli_fetch_array($result204)){
	$date = $row["date"];
	$Cash = $row["Cash"];
	$Account_Receiveable = $row["Account_Receiveable"];
	$Supplies = $row["Supplies"];
	$Office_equipment = $row["Office_equipment"];
	$Notes_Payable = $row["Notes_Payable"];
	$Account_payable = $row["Account_payable"];
	$Capital = $row["Capital"];
    $sum206=tg206($date,$Cash,$Account_Receiveable,$Supplies,$Office_equipment,$Notes_Payable,$Account_payable,$Capital,$sum206);
}

function tg206($date,$Cash,$Account_Receiveable,$Supplies,$Office_equipment,$Notes_Payable,$Account_payable,$Capital,$sum206){
$arr2 = array('','','','','','','');
$arr2[0]= $Cash ;
$arr2[1]= $Account_Receiveable ;
$arr2[2]= $Supplies  ;
$arr2[3]= $Office_equipment ;
$arr2[4]= $Notes_Payable ;
$arr2[5]= $Account_payable; 
$arr2[6]= $Capital ; 
$cash1=0; 
$cash2=0;
 if($arr2[0]<0){$cash1=0;$cash2=$arr2[0]*-1;}
 else{$cash1=$arr2[0];$cash2=0;}
 $taka=0;
 $taka=$arr2[0]+$sum206;
 echo "
<tr>
  <td>$date</td>
  <td> Transaction of starting business  </td>
  <td>=</td>
  <td>$cash1</td>
  <td>$cash2 </td>
  <td>$taka</td>
</tr>";
return $taka;
}
  
  
  
$query52 = "SELECT * from data2 WHERE tname1 = 'Cash' or tname2 = 'Cash'";
$result552 = mysqli_query($con,$query52);
while($row = mysqli_fetch_array($result552)){
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
if($arr[0]>0){$dc11=$arr[0];$dc22="  ";}
else{$dc11="  ";$dc22=$arr[0];}
$query13 = "insert into cash (dno,date,particular,debit,credit,balance) values ('$dno','$date','($tname3)$tname2','$dc11','$dc22','$dc11 $dc22')";
	
mysqli_query($con,$query13);
}

$query14 = "select * from cash";
$result114 = mysqli_query($con,$query14);

$sum11 = 0;
while($row = mysqli_fetch_array($result114)){
	$date = $row["date"];
	$particular = $row["particular"];
	$debit = $row["debit"];
	$credit = $row["credit"];
	$balance = $row["balance"];
	$sum11 = tggg($date,$particular,$debit,$credit,$balance, $sum11);
}
$sum11 = tggg_sum($sum11, $con);
function  tggg($date,$particular,$debit,$credit,$balance, $sum11){
$credit*=-1;
$sum2 = 0;
$sum2 = $sum11 +$balance;
echo "
<tr>
  <td>$date</td>
  <td>$particular  </td>
  <td>=</td>
  <td>$debit</td>
  <td>$credit</td>
  <td>$sum2</td>
</tr>";
return $sum2;
}
function tggg_sum($sum2, $con){

    $query2045 = "select * from data3";
	$result2045 = mysqli_query($con,$query2045);
	$Cash =0;
while($row45 = mysqli_fetch_array($result2045)){
	
	$date = $row45["date"];
	$Cash = $row45["Cash"];
	$sum2 += $Cash; 
	
}
$dc=0;
	if($sum2<0)
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
  <td> $sum2  $dc</td>
</tr>";
	return $sum2;
}
?>
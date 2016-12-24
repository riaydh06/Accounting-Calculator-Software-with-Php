<?php
  include("notes.php"); 
  
  $query203 = "select * from data3";
$result204 = mysqli_query($con,$query203);
$sum210 =0;
while($row = mysqli_fetch_array($result204)){
	$date = $row["date"];
	$Cash = $row["Cash"];
	$Account_Receiveable = $row["Account_Receiveable"];
	$Supplies = $row["Supplies"];
	$Office_equipment = $row["Office_equipment"];
	$Notes_Payable = $row["Notes_Payable"];
	$Account_payable = $row["Account_payable"];
	$Capital = $row["Capital"];
	
    $sum210=tg210($date,$Cash,$Account_Receiveable,$Supplies,$Office_equipment,$Notes_Payable,$Account_payable,$Capital,$sum210);
}



function tg210($date,$Cash,$Account_Receiveable,$Supplies,$Office_equipment,$Notes_Payable,$Account_payable,$Capital,$sum210){
$arr2 = array('','','','','','','');
$arr2[0]= $Cash ;
$arr2[1]= $Account_Receiveable ;
$arr2[2]= $Supplies  ;
$arr2[3]= $Office_equipment ;
$arr2[4]= $Notes_Payable ;
$arr2[5]= $Account_payable; 
$arr2[6]= $Capital ; 
 $Notes_Payable1=0; 
 $Notes_Payable2=0;
 if($arr2[4]<0){$Notes_Payable1=0;$Notes_Payable2=$arr2[4]*-1;}
 else{$Notes_Payable1=$arr2[4];$Notes_Payable2=0;}   
 $taka6=0;
 $taka6=$arr2[4]+$sum210;
 echo "
<tr>
  <td>$date</td>
  <td>  Transaction of starting business  </td>
  <td>=</td>
  <td>$Notes_Payable2</td>
  <td>$Notes_Payable1</td>
  <td>$taka6</td>
</tr>";
return $taka6;
}
  
$query52 = "SELECT * from data2 WHERE tname1 = 'Notes Payable' or tname2 = 'Notes Payable'";
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
if($arr[4]<0){$dc11=$arr[4];$dc22="  ";}
else{$dc11="  ";$dc22=$arr[4];}
$query53 = "insert into notes(dno,date,particular5,debit5,credit5,balance) values ('$dno','$date','($tname3)$tname2','$dc11','$dc22','$dc11 $dc22')";
	
mysqli_query($con,$query53);
}


$query54 = "select * from notes";
$result554 = mysqli_query($con,$query54);

$sum15=0;
while($row = mysqli_fetch_array($result554)){
$date = $row["date"];
$particular5 = $row["particular5"];
$debit5 = $row["debit5"];
$credit5 = $row["credit5"];
$balance = $row["balance"];
$sum15 = tggg4($date,$particular5,$debit5,$credit5,$balance,$sum15);
}
$sum15=tggg4_sum($sum15,$con);
function  tggg4($date,$particular5,$debit5,$credit5,$balance,$sum15){
$sum6=0;
$debit5*=-1;
$sum6=$sum15 +$balance;
echo "
<tr>
  <td>$date</td>
  <td> $particular5  </td>
  <td>=</td>
  <td>$debit5</td>
  <td>$credit5</td>
  <td>$sum6</td>
</tr>";
return $sum6;
}

function tggg4_sum($sum6,$con){
$query2049 = "select * from data3";
	$result2049 = mysqli_query($con,$query2049);
	$Notes_Payable =0;
while($row49 = mysqli_fetch_array($result2049)){
	
	$date = $row49["date"];
	$Notes_Payable = $row49["Notes_Payable"];
	$sum6+=$Notes_Payable;
	}
$sum6=$sum6*-1;
$dc=0;
	if($sum6<0)
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
  <td> $sum6 $dc</td>
</tr>";
return $sum6;
  }
?>

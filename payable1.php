<?php
  include("payable.php"); 
  
  $query203 = "select * from data3";
$result204 = mysqli_query($con,$query203);
$sum211 = 0;
while($row = mysqli_fetch_array($result204)){
	$date = $row["date"];
	$Cash = $row["Cash"];
	$Account_Receiveable = $row["Account_Receiveable"];
	$Supplies = $row["Supplies"];
	$Office_equipment = $row["Office_equipment"];
	$Notes_Payable = $row["Notes_Payable"];
	$Account_payable = $row["Account_payable"];
	$Capital = $row["Capital"];
	
    $sum211=tg211($date,$Cash,$Account_Receiveable,$Supplies,$Office_equipment,$Notes_Payable,$Account_payable,$Capital,$sum211);
}



function tg211($date,$Cash,$Account_Receiveable,$Supplies,$Office_equipment,$Notes_Payable,$Account_payable,$Capital,$sum211){
$arr2 = array('','','','','','','');
$arr2[0]= $Cash ;
$arr2[1]= $Account_Receiveable ;
$arr2[2]= $Supplies  ;
$arr2[3]= $Office_equipment ;
$arr2[4]= $Notes_Payable ;
$arr2[5]= $Account_payable; 
$arr2[6]= $Capital ; 
 $Account_payable1=0; 
 $Account_payable2=0;
 if($arr2[5]<0){$Account_payable1=0;$Account_payable2=$arr2[5]*-1;}
 else{$Account_payable1=$arr2[5];$Account_payable2=0;}  
  $taka5=0;
 $taka5=$arr2[5]+$sum211;
 
 echo "
<tr>
  <td>$date</td>
  <td>  Transaction of starting business  </td>
  <td>=</td>
  <td>$Account_payable2</td>
  <td>$Account_payable1</td>
  <td>$taka5</td>
</tr>";
return $taka5;
}
  
$query62 = "SELECT * from data2 WHERE tname1 = 'Account Payable' or tname2 = 'Account Payable'";
$result662 = mysqli_query($con,$query62);
while($row = mysqli_fetch_array($result662)){
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
if($arr[5]<0){$dc11=$arr[5];$dc22="  ";}
else{$dc11="  ";$dc22=$arr[5];}
$query63 = "insert into payable(dno,date,particular5,debit5,credit5,balance) values ('$dno','$date','($tname3)$tname2','$dc11','$dc22','$dc11 $dc22')";
 mysqli_query($con,$query63);
}



$query64 = "select * from payable";
$result664 = mysqli_query($con,$query64);

$sum16=0;
while($row = mysqli_fetch_array($result664)){
$date = $row["date"];
$particular5 = $row["particular5"];
$debit5 = $row["debit5"];
$credit5 = $row["credit5"];
$balance = $row["balance"];
$sum16 = tggg5($date,$particular5,$debit5,$credit5,$balance,$sum16);
}
$sum16=tggg5_sum($sum16,$con);
function  tggg5($date,$particular5,$debit5,$credit5,$balance,$sum16){
$sum7=0;
$debit5*=-1;
$sum7=$sum16 +$balance;
echo "
<tr>
  <td>$date</td>
  <td> $particular5  </td>
  <td>=</td>
  <td>$debit5</td>
  <td>$credit5</td>
  <td>$sum7</td>
</tr>";
return $sum7;
}

function tggg5_sum($sum7,$con){
$query2050 = "select * from data3";
	$result2050 = mysqli_query($con,$query2050);
	$Account_payable =0;
while($row50 = mysqli_fetch_array($result2050)){
	
	$date = $row50["date"];
	$Account_payable = $row50["Account_payable"];
	$sum7+=$Account_payable;
	}
$sum7=$sum7*-1;
$dc=0;
	if($sum7<0)
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
  <td> $sum7  $dc</td>
</tr>";
return $sum7;
  }
?>

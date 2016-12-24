<?php
  include("capital.php");

$query203 = "select * from data3";
$result204 = mysqli_query($con,$query203);
$sum212 =0;
while($row = mysqli_fetch_array($result204)){
	$date = $row["date"];
	$Cash = $row["Cash"];
	$Account_Receiveable = $row["Account_Receiveable"];
	$Supplies = $row["Supplies"];
	$Office_equipment = $row["Office_equipment"];
	$Notes_Payable = $row["Notes_Payable"];
	$Account_payable = $row["Account_payable"];
	$Capital = $row["Capital"];
	
    $sum212=tg212($date,$Cash,$Account_Receiveable,$Supplies,$Office_equipment,$Notes_Payable,$Account_payable,$Capital,$sum212);
}



function tg212($date,$Cash,$Account_Receiveable,$Supplies,$Office_equipment,$Notes_Payable,$Account_payable,$Capital,$sum212){
$arr2 = array('','','','','','','');
$arr2[0]= $Cash ;
$arr2[1]= $Account_Receiveable ;
$arr2[2]= $Supplies  ;
$arr2[3]= $Office_equipment ;
$arr2[4]= $Notes_Payable ;
$arr2[5]= $Account_payable; 
$arr2[6]= $Capital ; 
$Capital1=0; 
 $Capital2=0;
 if($arr2[6]<0){$Capital1=0;$Capital2=$arr2[6]*-1;}
 else{$Capital1=$arr2[6];$Capital2=0;}  
  $taka7=0;
 $taka7=$arr2[6]+$sum212;
 
 echo "
<tr>
  <td>$date</td>
  <td>  Transaction of starting business  </td>
  <td>=</td>
  <td>$Capital2</td>
  <td>$Capital1</td>
  <td>$taka7</td>
</tr>";
return $taka7;
}
  
$query72 = "SELECT * from data2 WHERE tname3 = 'Cash withdrew' or tname3 ='Invest' ";
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
$query73 = "insert into capital(dno,date,particular5,debit5,credit5,balance) values ('$dno','$date','($tname3)$tname2','$dc11','$dc22','$dc11 $dc22')";
	
mysqli_query($con,$query73);
}



$query74 = "select * from capital";
$result774 = mysqli_query($con,$query74);

$sum17=0;
while($row = mysqli_fetch_array($result774)){
$date = $row["date"];
$particular5 = $row["particular5"];
$debit5 = $row["debit5"];
$credit5 = $row["credit5"];
$balance = $row["balance"];
$sum17 = tggg6($date,$particular5,$debit5,$credit5,$balance,$sum17);
}
$sum17=tggg6_sum($sum17,$con);
function  tggg6($date,$particular5,$debit5,$credit5,$balance,$sum17){
$sum8=0;
$debit5*=-1;
$sum8=$sum17 +$balance;
echo "
<tr>
  <td>$date</td>
  <td> $particular5  </td>
  <td>=</td>
  <td>$debit5</td>
  <td>$credit5</td>
  <td>$sum8</td>
</tr>";
return $sum8;
}

function tggg6_sum($sum8,$con){
$query2051 = "select * from data3";
	$result2051 = mysqli_query($con,$query2051);
	$Capital =0;
while($row51 = mysqli_fetch_array($result2051)){
	
	$date = $row51["date"];
	$Capital = $row51["Capital"];
	$sum8+=$Capital;
	}
$sum8=$sum8*-1;
$dc=0;
	if($sum8<0)
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
  <td> $sum8 $dc</td>
</tr>";
return $sum8;
  }
?>

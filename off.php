<?php
  include("of.php"); 
  $query203 = "select * from data3";
$result204 = mysqli_query($con,$query203);
$sum209 =0;
while($row = mysqli_fetch_array($result204)){
	$date = $row["date"];
	$Cash = $row["Cash"];
	$Account_Receiveable = $row["Account_Receiveable"];
	$Supplies = $row["Supplies"];
	$Office_equipment = $row["Office_equipment"];
	$Notes_Payable = $row["Notes_Payable"];
	$Account_payable = $row["Account_payable"];
	$Capital = $row["Capital"];
	
    $sum209=tg209($date,$Cash,$Account_Receiveable,$Supplies,$Office_equipment,$Notes_Payable,$Account_payable,$Capital,$sum209);
}



function tg209($date,$Cash,$Account_Receiveable,$Supplies,$Office_equipment,$Notes_Payable,$Account_payable,$Capital,$sum209){
$arr2 =  array('','','','','','','','');
$arr2[0]= $Cash ;
$arr2[1]= $Account_Receiveable ;
$arr2[2]= $Supplies  ;
$arr2[3]= $Office_equipment ;
$arr2[4]= $Notes_Payable ;
$arr2[5]= $Account_payable; 
$arr2[6]= $Capital ;
 $Office_equipment1=0; 
 $Office_equipment2=0;
 if($arr2[3]<0){$Office_equipment1=0;$Office_equipment2=$arr2[3]*-1;}
 else{$Office_equipment1=$arr2[3];$Office_equipment2=0;}  
 $taka4=0;
 $taka4=$arr2[3]+$sum209;
 echo "
<tr>
  <td>$date</td>
  <td>  Transaction of starting business  </td>
  <td>=</td>
  <td>$Office_equipment1</td>
  <td>$Office_equipment2</td>
  <td>$taka4</td>
</tr>";
return $taka4;
}
  
  $query42 = "SELECT * from data2 WHERE tname1 ='Office Equipment' or tname2 = 'Office Equipment'";
$result442 = mysqli_query($con,$query42);
while($row = mysqli_fetch_array($result442)){
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
if($arr[3]>0){$dc11=$arr[3];$dc22="  ";}
else{$dc11="  ";$dc22=$arr[3];}
$query43 = "insert into of(dno,date,particular4,debit4,credit4,balance) values ('$dno','$date','($tname3)$tname2','$dc11','$dc22','$dc11 $dc22')";
	
 mysqli_query($con,$query43);
}



$query44 = "select * from of";
$result444 = mysqli_query($con,$query44);

$sum14=0;
while($row = mysqli_fetch_array($result444)){
$date = $row["date"];
$particular4 = $row["particular4"];
$debit4 = $row["debit4"];
$credit4 = $row["credit4"];
$balance = $row["balance"];
$sum14 = tggg3($date,$particular4,$debit4,$credit4,$balance,$sum14);
}
$sum14=tggg3_sum($sum14,$con);
function  tggg3($date,$particular4,$debit4,$credit4,$balance,$sum14){
$sum5=0;
$credit4*=-1;
$sum5=$sum14 +$balance;
echo "
<tr>
  <td>$date</td>
  <td> $particular4  </td>
  <td>=</td>
  <td>$debit4</td>
  <td>$credit4</td>
  <td>$sum5</td>
</tr>";
return $sum5;
}
function tggg3_sum($sum5,$con){
$query2048 = "select * from data3";
	$result2048 = mysqli_query($con,$query2048);
	$Office_equipment =0;
while($row48 = mysqli_fetch_array($result2048)){
	
	$date = $row48["date"];
	$Office_equipment = $row48["Office_equipment"];
	$sum5+=$Office_equipment;
	}
	$dc=0;
	if($sum5<0)
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
  <td> $sum5 $dc</td>
</tr>";
return $sum5;
  }
?>

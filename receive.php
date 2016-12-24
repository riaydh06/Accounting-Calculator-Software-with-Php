<?php
  include("Receivable.php"); 
  
  $query203 = "select * from data3";
$result204 = mysqli_query($con,$query203);
$sum207 =0;
while($row = mysqli_fetch_array($result204)){
	$date = $row["date"];
	$Cash = $row["Cash"];
	$Account_Receiveable = $row["Account_Receiveable"];
	$Supplies = $row["Supplies"];
	$Office_equipment = $row["Office_equipment"];
	$Notes_Payable = $row["Notes_Payable"];
	$Account_payable = $row["Account_payable"];
	$Capital = $row["Capital"];
	
    $sum207=tg207($date,$Cash,$Account_Receiveable,$Supplies,$Office_equipment,$Notes_Payable,$Account_payable,$Capital,$sum207);
}



function tg207($date,$Cash,$Account_Receiveable,$Supplies,$Office_equipment,$Notes_Payable,$Account_payable,$Capital,$sum207){
$arr2 = array('','','','','','','');
$arr2[0]= $Cash ;
$arr2[1]= $Account_Receiveable ;
$arr2[2]= $Supplies  ;
$arr2[3]= $Office_equipment ;
$arr2[4]= $Notes_Payable ;
$arr2[5]= $Account_payable; 
$arr2[6]= $Capital ;  
 $Account_Receiveable1=0; 
$Account_Receiveable2=0 ;
 if($arr2[1]<0){$Account_Receiveable1=0;$Account_Receiveable2=$arr2[1]*-1;}
 else{$Account_Receiveable1=$arr2[1];$Account_Receiveable2=0;}
  $taka2=0;
 $taka2=$arr2[1]+$sum207;
 echo "
<tr>
  <td>$date</td>
  <td>  Transaction of starting business  </td>
  <td>=</td>
  <td>$Account_Receiveable1</td>
  <td>$Account_Receiveable2</td>
  <td>$taka2</td>
</tr>";
return $taka2;
}
  
  
  
$query22 = "SELECT * from data2 WHERE tname1 = 'Account Receiveable' or tname2 = 'Account Receiveable'";
$result222 = mysqli_query($con,$query22);
while($row = mysqli_fetch_array($result222)){
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
if($arr[1]>0){$dc11=$arr[1];$dc22="  ";}
else{$dc11="  ";$dc22=$arr[1];}
$query23 = "insert into receive(dno,date,particular,debit,credit,balance) values ('$dno','$date','($tname3)$tname2','$dc11','$dc22','$dc11 $dc22')";
mysqli_query($con,$query23);
}



$query24 = "select * from receive";
$result224 = mysqli_query($con,$query24);


$sum12=0;
while($row = mysqli_fetch_array($result224)){
$date = $row["date"];
$particular = $row["particular"];
$debit = $row["debit"];
$credit = $row["credit"];
$balance = $row["balance"];
$sum12 = tggg1($date,$particular,$debit,$credit,$balance,$sum12);
}
$sum12=tggg1_sum($sum12,$con);
function  tggg1($date,$particular,$debit,$credit,$balance,$sum12){
$sum3=0;
$credit*=-1;
$sum3=$sum12 +$balance;
echo "
<tr>
  <td>$date</td>
  <td> $particular  </td>
  <td>=</td>
  <td>$debit</td>
  <td>$credit</td>
  <td>$sum3</td>
</tr>";
return $sum3;
}
function tggg1_sum($sum3,$con){

$query2046 = "select * from data3";
	$result2046 = mysqli_query($con,$query2046);
	$Account_Receiveable =0;
while($row46 = mysqli_fetch_array($result2046)){
	
	$date = $row46["date"];
	$Account_Receiveable = $row46["Account_Receiveable"];
	$sum3+=$Account_Receiveable;
}
$dc=0;
	if($sum3<0)
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
  <td> $sum3  $dc</td>
</tr>";
return $sum3;
  }
?>
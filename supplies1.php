<?php
  include("supplies.php"); 
  
   $query203 = "select * from data3";
$result204 = mysqli_query($con,$query203);
$sum208 = 0;
while($row = mysqli_fetch_array($result204)){
	$date = $row["date"];
	$Cash = $row["Cash"];
	$Account_Receiveable = $row["Account_Receiveable"];
	$Supplies = $row["Supplies"];
	$Office_equipment = $row["Office_equipment"];
	$Notes_Payable = $row["Notes_Payable"];
	$Account_payable = $row["Account_payable"];
	$Capital = $row["Capital"];
	
    $sum208=tg208($date,$Cash,$Account_Receiveable,$Supplies,$Office_equipment,$Notes_Payable,$Account_payable,$Capital,$sum208);
}



function tg208($date,$Cash,$Account_Receiveable,$Supplies,$Office_equipment,$Notes_Payable,$Account_payable,$Capital,$sum208){
$arr2 = array('','','','','','','');
$arr2[0]= $Cash ;
$arr2[1]= $Account_Receiveable ;
$arr2[2]= $Supplies  ;
$arr2[3]= $Office_equipment ;
$arr2[4]= $Notes_Payable ;
$arr2[5]= $Account_payable; 
$arr2[6]= $Capital ;  
 $Supplies1=0; 
 $Supplies2=0;
 if($arr2[2]<0){$Supplies1=0;$Supplies2=$arr2[2]*-1;}
 else{$Supplies1=$arr2[2];$Supplies2=0;}
 $taka3=0;
 $taka3=$arr2[2]+$sum208;
 echo "
<tr>
  <td>$date</td>
  <td>  Transaction of starting business  </td>
  <td>=</td>
  <td>$Supplies1</td>
  <td>$Supplies2</td>
  <td>$taka3</td>
</tr>";
return $taka3;
}
  
  $query32 = "SELECT * from data2 WHERE tname1 ='Supplies' or tname2 = 'Supplies' ";
$result332 = mysqli_query($con,$query32);
while($row = mysqli_fetch_array($result332)){
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
if($arr[2]>0){$dc11=$arr[2];$dc22="  ";}
else{$dc11="  ";$dc22=$arr[2];}
$query33 = "insert into supplies(dno,date,particular3,debit3,credit3,balance) values ('$dno','$date','($tname3)$tname2','$dc11','$dc22','$dc11 $dc22')";
mysqli_query($con,$query33);
}



$query34 = "select * from supplies";
$result334 = mysqli_query($con,$query34);


$sum13=0;
while($row = mysqli_fetch_array($result334)){
$date = $row["date"];
$particular3 = $row["particular3"];
$debit3 = $row["debit3"];
$credit3 = $row["credit3"];
$balance = $row["balance"];
$sum13 = tggg2($date,$particular3,$debit3,$credit3,$balance,$sum13);
}
$sum13=tggg2_sum($sum13,$con);
function  tggg2($date,$particular3,$debit3,$credit3,$balance,$sum13){
$sum4=0;
$credit3*=-1;
$sum4=$sum13 +$balance;
echo "
<tr>
  <td>$date</td>
  <td> $particular3  </td>
  <td>=</td>
  <td>$debit3</td>
  <td>$credit3</td>
  <td>$sum4</td>
</tr>";
return $sum4;
}

function tggg2_sum($sum4,$con){
$query2047 = "select * from data3";
	$result2047 = mysqli_query($con,$query2047);
	$Supplies =0;
while($row47 = mysqli_fetch_array($result2047)){
	
	$date = $row47["date"];
	$Supplies = $row47["Supplies"];
	$sum4+=$Supplies;
}
$dc=0;
	if($sum4<0)
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
  <td> $sum4  $dc</td>
</tr>";
return $sum4;
  }
?>

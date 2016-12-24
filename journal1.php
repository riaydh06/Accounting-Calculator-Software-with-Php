<?php
include("journal.php"); 

//for transaction 1

$query203 = "select * from data3";
$result204 = mysqli_query($con,$query203);
$sum213 = array('','','','','','','','');
while($row = mysqli_fetch_array($result204)){
	$date = $row["date"];
	$Cash = $row["Cash"];
	$Account_Receiveable = $row["Account_Receiveable"];
	$Supplies = $row["Supplies"];
	$Office_equipment = $row["Office_equipment"];
	$Notes_Payable = $row["Notes_Payable"];
	$Account_payable = $row["Account_payable"];
	$Capital = $row["Capital"];
	
    $sum212=tg213($date,$Cash,$Account_Receiveable,$Supplies,$Office_equipment,$Notes_Payable,$Account_payable,$Capital,$sum213);
}



function tg213($date,$Cash,$Account_Receiveable,$Supplies,$Office_equipment,$Notes_Payable,$Account_payable,$Capital,$sum213){
$arr2 = array('','','','','','','');
$arr2[0]= $Cash ;
$arr2[1]= $Account_Receiveable ;
$arr2[2]= $Supplies  ;
$arr2[3]= $Office_equipment ;
$arr2[4]= $Notes_Payable ;
$arr2[5]= $Account_payable; 
$arr2[6]= $Capital ;

if($arr2[0]>0||$arr2[1]>0||$arr2[2]>0||$arr2[3]>0){$dc="Dr";}
else{$dc="Cr";}
if($arr2[4]>0||$arr2[5]>0||$arr2[6]>0){$dc="Cr";}

else{$dc="Dr";}
$dc2 = $dc=="Dr" ? "Cr" : "Dr";

//for printing output 
  $cash1=0; 
  $cash2=0 ;
 if($arr2[0]<0){$cash1=0;$cash2=$arr2[0]*-1;}
 else{$cash1=$arr2[0];$cash2=0;}
 
 $Account_Receiveable1=0; 
 $Account_Receiveable2=0 ;
 if($arr2[1]<0){$Account_Receiveable1=0;$Account_Receiveable2=$arr2[1]*-1;}
 else{$Account_Receiveable1=$arr2[1];$Account_Receiveable2=0;}
 
 $Supplies1=0; 
 $Supplies2=0;
 if($arr2[2]<0){$Supplies1=0;$Supplies2=$arr2[2]*-1;}
 else{$Supplies1=$arr2[2];$Supplies2=0;}
 
 $Office_equipment1=0; 
 $Office_equipment2=0;
 if($arr2[3]<0){$Office_equipment1=0;$Office_equipment2=$arr2[3]*-1;}
 else{$Office_equipment1=$arr2[3];$Office_equipment2=0;}  
 
 
 $Notes_Payable1=0; 
 $Notes_Payable2=0;
 if($arr2[4]>0){$Notes_Payable1=0;$Notes_Payable2=$arr2[4];}
 else{$Notes_Payable1=$arr2[4]*-1;$Notes_Payable2=0;}
 
 
 $Account_payable1=0; 
 $Account_payable2=0;
 if($arr2[5]>0){$Account_payable1=0;$Account_payable2=$arr2[5];}
 else{$Account_payable1=$arr2[5]*-1;$Account_payable2=0;} 
 
 $Capital1=0; 
 $Capital2=0;
 if($arr2[6]>0){$Capital1=0;$Capital2=$arr2[6];}
 else{$Capital1=$arr2[6]*-1;$Capital2=0;}  
 
 echo "
<tr>
  <td>$date</td>
 <td>Cash   $dc2<br/>Account Receivable  $dc2<br/>Supplies  $dc2<br/>Office Equipment  $dc2<br/>Notes Payable  $dc<br/>Account Payable  $dc<br/>Capital  $dc</td>
  <td>=</td>
  <td>$cash1<br/>$Account_Receiveable1<br/>$Supplies1<br/>$Office_equipment1<br/>$Notes_Payable1<br/>$Account_payable1<br/>$Capital1<br/></td>
  <td>$cash2<br/>$Account_Receiveable2<br/>$Supplies2<br/>$Office_equipment2<br/>$Notes_Payable2<br/>$Account_payable2<br/>$Capital2<br/></td>
</tr>";
}
//for transaction 2
$query = "select * from data";
$result = mysqli_query($con,$query);
$sum = array('','','','','','','');
while($row = mysqli_fetch_array($result)){
$dno = $row["dno"];
$t1 = $row["t1"];
$t2 = $row["t2"];
$tt1 = $row["tt1"];
$tt2 = $row["tt2"];
$date = $row["date"];
$balance = $row["balance"];
}

$query1 = "SELECT name FROM variable WHERE id = $t1";
$query2 = "SELECT name FROM variable WHERE id = $t2";
$query3 = "SELECT name FROM trans WHERE id = $trn1";

$result1 = mysqli_query($con,$query1);
$result2 = mysqli_query($con,$query2);
$result3 = mysqli_query($con,$query3);

$row1 = mysqli_fetch_array($result1);
$row2 = mysqli_fetch_array($result2);
$row3 = mysqli_fetch_array($result3);

$tname1 = $row1["name"];
$tname2 = $row2["name"];
$tname3 = $row3["name"];

$arr = array('','','','','','','');
$arr[$t1-1] = $balance * $tt1;
$arr[$t2-1] = $balance * $tt2;

if($arr[0]>0||$arr[1]>0||$arr[2]>0||$arr[3]>0){$dc="Dr";}
else{$dc="Cr";}
if($arr[4]>0||$arr[5]>0||$arr[6]>0){$dc="Cr";}

else{$dc="Dr";}
$dc2 = $dc=="Dr" ? "Cr" : "Dr";

$query4 = "insert into data2 (dno,date,tname1,dc2,tname2,dc,tname3,balance,t1,tt1,t2,tt2) values ('$dno','$date','$tname1','$dc2','$tname2','$dc','$tname3','$balance','$t1','$tt1','$t2','$tt2')";
	
	$result = mysqli_query($con,$query4);
$query5 = "select * from data2";
$result = mysqli_query($con,$query5);
$sum1=0;
while($row = mysqli_fetch_array($result)){
$date = $row["date"];
$tname1 = $row["tname1"];
$dc2 = $row["dc2"];
$tname2 = $row["tname2"];
$dc = $row["dc"];
$tname3 = $row["tname3"];
$balance = $row["balance"];
$sum1 = tgg($date,$tname1,$dc2,$tname2,$dc,$tname3,$balance,$sum1);
}
tgg_sum($sum1,$con);
function  tgg($date,$tname1,$dc2,$tname2,$dc,$tname3,$balance,$sum1){
$sum1=$sum1 + $balance;
echo "
<tr>
  <td>  $date </td>
  <td>  $tname1 $dc2<br>$tname2 $dc<br/>$tname3</td>
  <td>=</td>
  <td>$balance<br/>0</td>
  <td>0<br/>$balance</td>
</tr>";
return $sum1;
}

function tgg_sum($sum1,$con){
$sum0=0;
$query2044 = "select * from data3";
	$result2044 = mysqli_query($con,$query2044);
	$Cash =0;
	$Account_Receiveable =0;
	$Supplies =0;
	$Office_equipment =0;
	$Notes_Payable =0;
	$Account_payable =0;
	$Capital=0;
while($row44 = mysqli_fetch_array($result2044)){
	$arr2 = array('','','','','','','');
	$date = $row44["date"];
	$Cash = $row44["Cash"];
	$Account_Receiveable = $row44["Account_Receiveable"];
	$Supplies = $row44["Supplies"];
	$Office_equipment = $row44["Office_equipment"];
	$Notes_Payable = $row44["Notes_Payable"];
	$Account_payable = $row44["Account_payable"];
	$Capital = $row44["Capital"];
	
	$arr2[0]+=$Cash;
	$arr2[1]+=$Account_Receiveable;
	$arr2[2]+=$Supplies;
	$arr2[3]+=$Office_equipment;
	$arr2[4]+=$Notes_Payable;
	$arr2[5]+=$Account_payable;
	$arr2[6]+=$Capital;
	
 $cash1=0; 
  $cash2=0 ;
 if($arr2[0]<0){$cash1=0;$cash2=$arr2[0]*-1;}
 else{$cash1=$arr2[0];$cash2=0;}
 
 $Account_Receiveable1=0; 
 $Account_Receiveable2=0 ;
 if($arr2[1]<0){$Account_Receiveable1=0;$Account_Receiveable2=$arr2[1]*-1;}
 else{$Account_Receiveable1=$arr2[1];$Account_Receiveable2=0;}
 
 $Supplies1=0; 
 $Supplies2=0;
 if($arr2[2]<0){$Supplies1=0;$Supplies2=$arr2[2]*-1;}
 else{$Supplies1=$arr2[2];$Supplies2=0;}
 
 $Office_equipment1=0; 
 $Office_equipment2=0;
 if($arr2[3]<0){$Office_equipment1=0;$Office_equipment2=$arr2[3]*-1;}
 else{$Office_equipment1=$arr2[3];$Office_equipment2=0;}  
 
 
 $Notes_Payable1=0; 
 $Notes_Payable2=0;
 if($arr2[4]>0){$Notes_Payable1=0;$Notes_Payable2=$arr2[4];}
 else{$Notes_Payable1=$arr2[4]*-1;$Notes_Payable2=0;}
 
 
 $Account_payable1=0; 
 $Account_payable2=0;
 if($arr2[5]>0){$Account_payable1=0;$Account_payable2=$arr2[5];}
 else{$Account_payable1=$arr2[5]*-1;$Account_payable2=0;} 
 
 $Capital1=0; 
 $Capital2=0;
 if($arr2[6]>0){$Capital1=0;$Capital2=$arr2[6];}
 else{$Capital1=$arr2[6]*-1;$Capital2=0;}  
	
	$sum1=$sum1+$cash1+$Account_Receiveable1+$Supplies1+$Office_equipment1+$Notes_Payable1+$Account_payable1+$Capital1;
	$sum0=$sum0+$cash2+$Account_Receiveable2+$Supplies2+$Office_equipment2+$Notes_Payable2+$Account_payable2+$Capital2;
	
}
//echo $sum0;
echo "
<tr>
  <td>  <h2>Total </h2></td>
  <td>                      </td>
  <td>=</td>
  <td> <h2>$sum1  TK</h2> </td>
  <td> <h2> $sum1  TK</h2></td>
</tr>";

}
?>
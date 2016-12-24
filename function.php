
<?php 
function tg($balance, $date, $t1, $tt1, $t2, $tt2,$sum){
$arr = array('','','','','','','');
$arr[$t1-1] = $balance * $tt1;
$arr[$t2-1] = $balance * $tt2;
$sum[$t1-1] = $sum[$t1-1] + $arr[$t1-1];
$sum[$t2-1] = $sum[$t2-1] + $arr[$t2-1];


echo "
<tr>
	<td>  $date </td>
	<td>  $arr[0]  </td>
	<td>  $arr[1]  </td>
	<td>  $arr[2]  </td>
	<td>  $arr[3]  </td>
	<td>  = </td>
	<td>  $arr[4]  </td>
	<td>  $arr[5]  </td>
	<td>  $arr[6]  </td>
</tr>";
return $sum;
}


function tg_sum($arr,$con){
	
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
	
	$date = $row44["date"];
	$Cash = $row44["Cash"];
	$Account_Receiveable = $row44["Account_Receiveable"];
	$Supplies = $row44["Supplies"];
	$Office_equipment = $row44["Office_equipment"];
	$Notes_Payable = $row44["Notes_Payable"];
	$Account_payable = $row44["Account_payable"];
	$Capital = $row44["Capital"];
	
	$arr[0]+=$Cash;
	$arr[1]+=$Account_Receiveable;
	$arr[2]+=$Supplies;
	$arr[3]+=$Office_equipment;
	$arr[4]+=$Notes_Payable;
	$arr[5]+=$Account_payable;
	$arr[6]+=$Capital;
}
	
echo "
<tr>
	<td>  Total </td>
	<td>  $arr[0]  </td>
	<td>  $arr[1]  </td>
	<td>  $arr[2]  </td>
	<td>  $arr[3]  </td>
	<td>  = </td>
	<td>  $arr[4]  </td>
	<td>  $arr[5]  </td>
	<td>  $arr[6]  </td>
</tr>";
$grand_total1=$arr[0]+$arr[1]+$arr[2]+$arr[3];
$grand_total2=$arr[4]+$arr[5]+$arr[6];
echo "
<tr>
 <td><h2>Grand Total</h2></td>
 <td>     </td>
 <td><h2>    $grand_total1   TK</h2></td>
 <td>     </td>
 <td>     </td>
 <td>=</td>
 <td>     </td>
 <td><h2>$grand_total2   TK</h2></td>
 <td>     </td>
</tr>";
include("balance.php");
}

?>
<?php
 
?>

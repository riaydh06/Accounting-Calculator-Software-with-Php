<?php
$query203 = "select * from data3";
$result204 = mysqli_query($con,$query203);
$sum205 = array('','','','','','','','');
while($row = mysqli_fetch_array($result204)){
	$date = $row["date"];
	$Cash = $row["Cash"];
	$Account_Receiveable = $row["Account_Receiveable"];
	$Supplies = $row["Supplies"];
	$Office_equipment = $row["Office_equipment"];
	$Notes_Payable = $row["Notes_Payable"];
	$Account_payable = $row["Account_payable"];
	$Capital = $row["Capital"];
	
    $sum205=tg205($date,$Cash,$Account_Receiveable,$Supplies,$Office_equipment,$Notes_Payable,$Account_payable,$Capital,$sum205);
}

//tg_sum205($sum);

function tg205($date,$Cash,$Account_Receiveable,$Supplies,$Office_equipment,$Notes_Payable,$Account_payable,$Capital,$sum205){
$arr2 = array('','','','','','','');
$arr2[0]= $Cash ;
$arr2[1]= $Account_Receiveable ;
$arr2[2]= $Supplies  ;
$arr2[3]= $Office_equipment ;
$arr2[4]= $Notes_Payable ;
$arr2[5]= $Account_payable; 
$arr2[6]= $Capital ;  
 
 echo "
<tr>
	<td>  $date </td>
	<td>  $arr2[0]  </td>
	<td>  $arr2[1]  </td>
	<td>  $arr2[2]  </td>
	<td>  $arr2[3]  </td>
	<td>  = </td>
	<td>  $arr2[4]  </td>
	<td>  $arr2[5]  </td>
	<td>  $arr2[6]  </td>
</tr>";
 //return $sum205 ;
}
/*function tg_sum205($arr2){
echo "
<tr>
	<td>  Total </td>
	<td>  $arr2[0]  </td>
	<td>  $arr2[1]  </td>
	<td>  $arr2[2]  </td>
	<td>  $arr2[3]  </td>
	<td>  = </td>
	<td>  $arr2[4]  </td>
	<td>  $arr2[5]  </td>
	<td>  $arr2[6]  </td>
</tr>";
$grand_total1=$arr2[0]+$arr2[1]+$arr2[2]+$arr2[3];
$grand_total2=$arr2[4]+$arr2[5]+$arr2[6];
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

}*/
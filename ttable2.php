<div class="mar fix"><marquee> Accounting </marquee></div>
<h1 class="t11" align="center"> Transaction Table 1</h1>
	    <table  class="t111 fix" align="center" border="1px solid black" width="1100" height="100" color="black">
			<tr bgcolor="#FFCC66" >
			<th >Date</th>
			<th bgcolor="#F4A460">Cash </th>
			<th bgcolor="#F4A460">Account Receiveable</th>
			<th bgcolor="#F4A460">Supplies </th>
			<th bgcolor="#F4A460">Office equipment</th>
			<th width="10">=</th>
			<th bgcolor="#F4A460">Notes payable </th>
			<th bgcolor="#F4A460">Account payable </th>
			<th bgcolor="#F4A460">Revenue & Expence & Owner Equity</th>
			<th>Submit</th>
			</tr>
			<form action="" method="post">
			<tr>
			<td><input name="date" type="date" size="12" />   </td>
			<td> <input name="Cash" type="number" size="12" /> </td> 
			<td><input name="Account_Receiveable" type="number" size="12" /> </td>
			<td><input name="Supplies" type="number" size="12" /> </td>
			<td><input name="Office_equipment" type="number" size="12" /> </td>
			<td>=</td>
			<td><input name="Notes_Payable" type="number" size="12" /> </td>
			<td><input name="Account_payable" type="number" size="12" /> </td>
			<td>  <input name="Capital" type="number" size="12" /> </td>
			<td>  <input name="submit1" type="submit" value="Submit1"  /> </td>
			</tr>
			</form>
		</table>
		<?php if(isset($_POST["submit1"])) {
	$date = $_POST["date"];
	$Cash = $_POST["Cash"];
	$Account_Receiveable = $_POST["Account_Receiveable"];
	$Supplies = $_POST["Supplies"];
	$Office_equipment = $_POST["Office_equipment"];
	$Notes_Payable = $_POST["Notes_Payable"];
	$Account_payable = $_POST["Account_payable"];
	$Capital = $_POST["Capital"];
	
	
	$query201 = "insert into data3 (date,Cash,Account_Receiveable,Supplies,Office_equipment,Notes_Payable,Account_payable,Capital) 
	values ('$date','$Cash','$Account_Receiveable','$Supplies','$Office_equipment','$Notes_Payable','$Account_payable','$Capital')";
	$result202 = mysqli_query($con,$query201);
}
?>

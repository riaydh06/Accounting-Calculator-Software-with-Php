
<?php 
include("header.php");
include("function.php");

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "riaydh");

$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
include("ttable2.php");
include("ttable.php");
error_reporting(0);
?> 
<?php if(isset($_POST["submit2"])) {
	$date = $_POST["date"];
	$trn = $_POST["trn"];
	$trn1 = $_POST["trn1"];
	$price = $_POST["price"];
	
	$query = "select * from tran where no='$trn1'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result);
	if($row["t1"]==3){
		if($trn==2)
			$row["t1"]=4;
	}
	if($row["t2"]==3){
		if($trn==2)
			$row["t2"]=4;
	}
	$t1 = $row["t1"];
	$t2 = $row["t2"];
	$tt1 = $row["tt1"];
	$tt2 = $row["tt2"];
	$query = "insert into data (date,balance,t1,tt1,t2,tt2) values ('$date','$price','$t1','$tt1','$t2','$tt2')";
	$result = mysqli_query($con,$query);
}

?>
<?php
include("btop.php");
include("ttable3.php");

$query = "select * from data";
$result = mysqli_query($con,$query);
$sum = array('','','','','','','','');
while($row = mysqli_fetch_array($result)){
	$t1 = $row["t1"];
	$t2 = $row["t2"];
	$tt1 = $row["tt1"];
	$tt2 = $row["tt2"];
	$date = $row["date"];
	$balance = $row["balance"];
	$sum = tg($balance, $date, $t1, $tt1, $t2, $tt2,$sum);
}
tg_sum($sum,$con);
 include("journal1.php");
 include("cash1.php");
 include("receive.php");
 include("supplies1.php");
 include("off.php");
 include("notes1.php");
 include("payable1.php");
 include("capital1.php");
 include("expence1.php");
 include("revenue1.php");
 include("trial.php");
 include("trial1.php");
 include("name.php"); 
?>

<?php 
include("footer.php"); 
mysqli_close($con);
?>

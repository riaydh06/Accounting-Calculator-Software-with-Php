<?php

$sum22=0;
$sum222=0;
$sum33=0;
$sum333=0;
$sum44=0;
$sum444=0;
$sum55=0;
$sum555=0;
$sum66=0;
$sum666=0;
$sum77=0;
$sum777=0;
$sum88=0;
$sum888=0;
$sum99=0;
$sum999=0;
$sum101=0;
$sum102=0;
if($sum11<0){$sum222=$sum11*-1;$sum22=0;}else{$sum22=$sum11;$sum222=0;}
if($sum12<0){$sum333=$sum12*-1;$sum33=0;}else{$sum33=$sum12;$sum333=0;}
if($sum13<0){$sum444=$sum13*-1;$sum44=0;}else{$sum44=$sum13;$sum444=0;}
if($sum14<0){$sum555=$sum14*-1;$sum55=0;}else{$sum55=$sum14;$sum555=0;}
if($sum15<0){$sum666=$sum15*-1;$sum66=0;}else{$sum66=$sum15;$sum666=0;}
if($sum16<0){$sum777=$sum16*-1;$sum77=0;}else{$sum77=$sum16;$sum777=0;}
if($sum17<0){$sum888=$sum17*-1;$sum88=0;}else{$sum88=$sum17;$sum888=0;}
if($sum9>0){$sum999=$sum9;$sum99=0;}else{$sum99=$sum9*-1;$sum999=0;}
if($sum10>0){$sum102=$sum10;$sum101=0;}else{$sum101=$sum10*-1;$sum102=0;}
$grand_total11=$sum22+$sum33+$sum44+$sum55+$sum66+$sum77+$sum88+$sum99+$sum101;
$grand_total22=$sum222+$sum333+$sum444+$sum555+$sum666+$sum777+$sum888+$sum999+$sum102;
echo "
<tr>	 
<td>Cash<br/>Account Receivable<br/>Supplies<br/>Office Equipment<br/>Notes Payable<br/>Account Payable<br/>Capital<br/>Expence<br/>Revenue</td>
<td>=</td>
<td >$sum22<br/>$sum33<br/>$sum44<br/>$sum55<br/>$sum66<br/>$sum77<br/>$sum88<br/>$sum99<br/>$sum101</td>
<td >$sum222<br/>$sum333<br/>$sum444<br/>$sum555<br/>$sum666<br/>$sum777<br/>$sum888<br/>$sum999<br/>$sum102</td>
</tr>

<tr>	 
<td><h1>Total</h1></td>
<td>=</td>
<td><h1>$grand_total11</h1> </td>
<td ><h1>$grand_total22</h1> </td>
</tr>";
?></div>
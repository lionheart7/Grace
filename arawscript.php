<!DOCTYPE html>
<html>
<body>

<?php
date_default_timezone_set("America/Chicago");
echo date("w") . "<br>";


$wkd = date("w");

 switch ($wkd) {
     case "0":
         cal[0]=$startdate;
         $i=0;
while ($startdate <=  $enddate) {
   $cal[$i]=date("m/d/Y", $startdate);
   $startdate = strtotime("+1 days", $startdate);
   $i++;
}
         break;
     case "1":
                 cal[0]=strtotime("-1 days", $startdate);
                 cal[1]=$startdate;
         $i=1;
while ($startdate <=  68) {
   $cal[$i]=date("m/d/Y", $startdate);
   $startdate = strtotime("+1 days", $startdate);
   $i++;
}
  
         break;
     case "2":
                 cal[0]=strtotime("-2 days", $startdate);
                 cal[1]=$startdate;
         $i=1;
while ($startdate <=  68) {
   $cal[$i]=date("m/d/Y", $startdate);
   $startdate = strtotime("+1 days", $startdate);
   $i++;
         break;
case "3":
                         cal[0]=strtotime("-3 days", $startdate);
                 cal[1]=$startdate;
         $i=1;
while ($startdate <=  68) {
   $cal[$i]=date("m/d/Y", $startdate);
   $startdate = strtotime("+1 days", $startdate);
   $i++;
         break;
case "4":
         echo "Day is 4";
         break;
case "5":
         echo "Day is 5";
         break;
case "6":
         echo "Day is 6";
         break;
     default:
         echo "Your favorite color is neither red, blue, nor green!";
 }

$araw = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

echo "<table width=800 height=800 border=1>";
echo "<tr>";
echo " <th>"  . $araw[0] ."</th> ";
echo " <th>"  . $araw[1] ."</th> ";
echo " <th>"  . $araw[2] ."</th> ";
echo " <th>"  . $araw[3] ."</th> ";
echo " <th>"  . $araw[4] ."</th> ";
echo " <th>"  . $araw[5] ."</th> ";
echo " <th>"  . $araw[6] ."</th> ";
echo "</tr>"; 


$startdate=strtotime("Today");
$enddate=strtotime("+59 days",$startdate);

echo "Episode: ".$startdate. " - ". $enddate. "<br>";
$i=0;
while ($startdate <=  $enddate) {
   $cal[$i]=date("m/d/Y", $startdate);
   $startdate = strtotime("+1 days", $startdate);
   $i++;
}

echo "<tr>";
echo " <td>" . $cal[0] ."</td> ";
echo " <td>" . $cal[1] ."</td> ";
echo " <td>" . $cal[2] ."</td> ";
echo " <td>" . $cal[3] ."</td> ";
echo " <td>" . $cal[4] ."</td> ";
echo " <td>" . $cal[5] ."</td> ";
echo " <td>" . $cal[6] ."</td> ";
echo "</tr>"; 
echo "<tr>";
echo " <td>" . $cal[7] ."</td> ";
echo " <td>" . $cal[8] ."</td> ";
echo " <td>" . $cal[9] ."</td> ";
echo " <td>" . $cal[10] ."</td> ";
echo " <td>" . $cal[11] ."</td> ";
echo " <td>" . $cal[12] ."</td> ";
echo " <td>" . $cal[13] ."</td> ";
echo "</tr>"; 
echo "<tr>";
echo " <td>" . $cal[14] ."</td> ";
echo " <td>" . $cal[15] ."</td> ";
echo " <td>" . $cal[16] ."</td> ";
echo " <td>" . $cal[17] ."</td> ";
echo " <td>" . $cal[18] ."</td> ";
echo " <td>" . $cal[19] ."</td> ";
echo " <td>" . $cal[20] ."</td> ";
echo "</tr>"; 
echo "<tr>";
echo " <td>" . $cal[21] ."</td> ";
echo " <td>" . $cal[22] ."</td> ";
echo " <td>" . $cal[23] ."</td> ";
echo " <td>" . $cal[24] ."</td> ";
echo " <td>" . $cal[25] ."</td> ";
echo " <td>" . $cal[26] ."</td> ";
echo " <td>" . $cal[27] ."</td> ";
echo "</tr>"; 
echo "<tr>";
echo " <td>" . $cal[28] ."</td> ";
echo " <td>" . $cal[29] ."</td> ";
echo " <td>" . $cal[30] ."</td> ";
echo " <td>" . $cal[31] ."</td> ";
echo " <td>" . $cal[32] ."</td> ";
echo " <td>" . $cal[33] ."</td> ";
echo " <td>" . $cal[34] ."</td> ";
echo "</tr>"; 
echo "<tr>";
echo " <td>" . $cal[35] ."</td> ";
echo " <td>" . $cal[36] ."</td> ";
echo " <td>" . $cal[37] ."</td> ";
echo " <td>" . $cal[38] ."</td> ";
echo " <td>" . $cal[39] ."</td> ";
echo " <td>" . $cal[40] ."</td> ";
echo " <td>" . $cal[41] ."</td> ";
echo "</tr>"; 
echo "<tr>";
echo " <td>" . $cal[42] ."</td> ";
echo " <td>" . $cal[43] ."</td> ";
echo " <td>" . $cal[44] ."</td> ";
echo " <td>" . $cal[45] ."</td> ";
echo " <td>" . $cal[46] ."</td> ";
echo " <td>" . $cal[47] ."</td> ";
echo " <td>" . $cal[48] ."</td> ";
echo "</tr>"; 
echo "<tr>";
echo " <td>" . $cal[49] ."</td> ";
echo " <td>" . $cal[50] ."</td> ";
echo " <td>" . $cal[51] ."</td> ";
echo " <td>" . $cal[52] ."</td> ";
echo " <td>" . $cal[53] ."</td> ";
echo " <td>" . $cal[54] ."</td> ";
echo " <td>" . $cal[55] ."</td> ";
echo "</tr>"; 
echo "<tr>";
echo " <td>" . $cal[56] ."</td> ";
echo " <td>" . $cal[57] ."</td> ";
echo " <td>" . $cal[58] ."</td> ";
echo " <td>" . $cal[59] ."</td> ";
echo " <td>" . $cal[60] ."</td> ";
echo " <td>" . $cal[61] ."</td> ";
echo " <td>" . $cal[62] ."</td> ";
echo "</tr>"; 
echo "<tr>";
echo " <td>" . $cal[63] ."</td> ";
echo " <td>" . $cal[64] ."</td> ";
echo " <td>" . $cal[65] ."</td> ";
echo " <td>" . $cal[66] ."</td> ";
echo " <td>" . $cal[67] ."</td> ";
echo " <td>" . $cal[68] ."</td> ";
echo " <td>" . $cal[69] ."</td> ";
echo "</tr>"; 

echo "</table>";


?>

</body>
</html>
</body>
</html>
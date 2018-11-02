<!DOCTYPE html>
<html>
<body>

<?php

 $icd10=file("icd10cm_order_2016.txt");
 foreach ($icd10 as $x => $x_value){
   //list($ICD10CM, $header, $ShortDesc, $LongDesc)=explode(" ",$x_value);
   echo $x_value;
   //echo "$LongDesc<br>";
  }
 ?>  
</body>
</html>
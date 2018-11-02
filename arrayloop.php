<!DOCTYPE html>
<html>
<body>

<?php

$icd10=file("icd10cm_order_2016.txt");

$length=count($icd10);
for($x=0; $x<$length; $x++){
echo $icd10[$x];
}
?>

</body>
</html>
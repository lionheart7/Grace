<!DOCTYPE html>
<html>
<body>

<?php
$date1=date_create("2013-01-01");
$date2=date_create("2013-02-10");
$diff=date_diff($date1,$date2);

// %a outputs the total number of days
echo $diff->format("Total number of days: %a.");
echo "<br>";

// %R outputs + beacause $date2 is after $date1 (a positive interval)
echo $diff->format("Total number of days: %R%a.");
echo "<br>";

// %d outputs the number of days that is not already covered by the month
echo $diff->format("Month: %m, days: %d.");
?>

</body>
</html>
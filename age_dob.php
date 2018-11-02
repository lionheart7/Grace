<!DOCTYPE HTML> 
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="calendar_style.css">
<style>
.error {color: #FF0000;}
table, th, td {
     border: 1px solid black;
}
</style>




</head>
<body>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$age=$DOB=0;

$DOB=$_POST["DOB"];
}

function calculateAge($date){
     list($year,$month,$day) = explode("/",$date);
     $year_diff  = date("Y") - $year;
     $month_diff = date("m") - $month;
     $day_diff   = date("d") - $day;
     if ($day_diff < 0 || $month_diff < 0) $year_diff--;
     return $year_diff;
}
$age=calculateAge($DOB);
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
Dob: <input type="date" name="DOB" placeholder="mm/dd/yyyy" value="<?php echo $DOB;?>">
Age: <input type="number" name="age" value="<?php echo $age;?>">
<input type="submit" name="submit" value="Submit"> 
</form>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>
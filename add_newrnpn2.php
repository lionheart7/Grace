<?php
session_start();
?>
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



<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body> 



<?php
include 'config.php';




$sc1 = $sc2 = $sc3 = $sc4 = $sc5 = $sc6 = $sc7 = $sc8 = "";
$sc1Err = $sc2Err = $sc3Err = $sc4Err = $sc5Err = $sc6Err = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$servicetype = test_input($_POST["servicetype"]);
$sc1 = test_input($_POST["sc1"]);
$sc2 = test_input($_POST["sc2"]);
$sc3 = test_input($_POST["sc3"]);
$sc4 = test_input($_POST["sc4"]);
$sc5 = test_input($_POST["sc5"]);
$sc6 = test_input($_POST["sc6"]);   
$sc7 = test_input($_POST["sc7"]);
$sc8 = test_input($_POST["sc8"]); 

 $pn_id='00000000000000000001';

// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO progressnotes (ServiceType, sc1, sc2, sc3, sc4, sc5, sc6, sc7, sc8)
VALUES ('$servicetype', '$sc1', '$sc2', '$sc3', '$sc4', '$sc5', '$sc6', '$sc7', '$sc8')
ON DUPLICATE KEY UPDATE ServiceType='$servicetype', sc1='$sc1', sc2='$sc2', sc3='$sc3', sc4='$sc4', sc5='$sc5', sc6='$sc6', sc7='$sc7', sc8='$sc8'";



//ON DUPLICATE KEY UPDATE progressnotes SET sc1='$sc1', sc2='$sc2', sc3='$sc3', sc4='$sc4', //sc5='$sc5', sc6='$sc6', sc7='$sc7', sc8='$sc8' WHERE pn_id='$pn_id'";



//INSERT INTO progressnotes (sc1, sc2, sc3, sc4, sc5, sc6, sc7, sc8)
//VALUES ('$sc1', '$sc2', '$sc3', '$sc4', '$sc5', '$sc6', '$sc7', '$sc8')
//";

if (mysqli_query($conn, $sql)) {
    echo "New progress notes record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$sql = "SELECT * FROM progressnotes";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["pn_id"]. " - Name: " . $row["sc1"]. " " . $row["sc2"]. " " . $row["sc3"]. " " . $row["sc4"]. " " . $row["sc5"]. " " . $row["sc6"]. " " . $row["sc7"]. " " . $row["sc8"]. "<br>";
    }
} else {
    echo "0 results";
}



mysqli_close($conn);

}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

function calculateAge($bday){
     list($year,$month,$day) = explode("-",$bday);
     $year_diff  = date("Y") - $year;
     $month_diff = date("m") - $month;
     $day_diff   = date("d") - $day;
     if ($day_diff < 0 || $month_diff < 0) $year_diff--;
     return $year_diff;
}

function agem($birthday){
 list($month, $day, $year) = explode("/", $birthday);
 $year_diff  = date("Y") - $year;
 $month_diff = date("m") - $month;
 $day_diff   = date("d") - $day;
 if ($day_diff < 0 && $month_diff==0) $year_diff--;
 if ($day_diff < 0 && $month_diff < 0) $year_diff--;
 return $year_diff;
}





echo "<h2>Your Input:</h2>";
echo "sc1: ", $sc1;
echo "<br>";
echo "sc2: ", $sc2;
echo "<br>";
echo "sc3: ", $sc3;
echo "<br>";
echo "sc4: ", $sc4;
echo "<br>";
echo "sc5: ", $sc5;
echo "<br>";
echo "sc6: ", $sc6;
echo "<br>";
echo "sc7: ", $sc7;
echo "<br>";
echo "sc8: ", $sc8;
echo "<br>";

?>






    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>



</body>
</html>

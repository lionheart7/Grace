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
$tmp = test_input($_POST["tmp"]);
$sc9 = test_input($_POST["sc9"]);
$sc10 = test_input($_POST["sc10"]);
$sc11 = test_input($_POST["sc11"]);
$sc12 = test_input($_POST["sc12"]);
$sc13 = test_input($_POST["sc13"]);
$temp = test_input($_POST["temp"]);   
$respirations = test_input($_POST["respirations"]);
$saturations = test_input($_POST["saturations"]); 
$apulse = test_input($_POST["apulse"]);
$rpulse = test_input($_POST["rpulse"]);   
$arm = test_input($_POST["arm"]);
$position = test_input($_POST["position"]); 
$weight = test_input($_POST["weight"]); 
$height = test_input($_POST["height"]);
 $pn_id='00000000000000000001';

// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO progressnotes (tmp,sc9, sc10, sc11, sc12, sc13, temp, respirations, saturations, apulse, rpulse, arm, position, weight, height)
VALUES ('$tmp', '$sc9', '$sc10', '$sc11', '$sc12', '$sc13', '$temp', '$respirations', '$saturations', '$apulse', '$rpulse', '$arm', '$position', '$weight', '$height')
ON DUPLICATE KEY UPDATE tmp='$tmp', sc11='$sc11', sc12='$sc12', sc13='$sc13', temp='$temp', respirations='$respirations', saturations='$saturations', apulse='$apulse', rpulse='$rpulse', arm='$arm', position='$position', weight='$weight', height='$height'";



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
        echo "id: " . $row["pn_id"]. " - Name: " . $row["sc9"]. " " . $row["sc10"]. $row["sc11"]. " " . $row["sc12"]. " " . $row["sc13"]. " " . $row["temp"]. " " . $row["respirations"]. " " . $row["saturations"]. " " . $row["arm"]. " " . $row["position"]. $row["systolic"]. " " . $row["diastolic"]. $row["weight"]. " " . $row["height"]. "<br>";
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

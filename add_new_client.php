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

// define variables and set to empty values
$FirstNameErr = $MI = $LastNameErr = $Suffix = $ClientSSNErr = $MedicareNum = $HICN = $MedicaidNum = $GenderErr = "";

$FirstName = $MI = $LastName = $Suffix = $ClientSSN = $MedicareNum = $HICN = $MedicaidNum = $Gender = $comments = $Fullname = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["FirstName"])) {
     $FirstNameErr = "First Name is required";
   } else {
     
     $FirstName = test_input($_POST["FirstName"]);

     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z- ]*$/",$FirstName)) {
       $FirstNameErr = "Only letters and white space allowed"; 
     }

   }


   if (empty($_POST["MI"])) {
     $MI = "";
   } else {
     
     $MI = test_input($_POST["MI"]);

     // check if name only contains letters
     if (!preg_match("/^[a-zA-Z]*$/",$MI)) {
       $FirstNameErr = "Only letters allowed"; 
     }


   }   


   if (empty($_POST["LastName"])) {
     $LastNameErr = "Last Name is required";
   } else {
     
     $LastName = test_input($_POST["LastName"]);

     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z- ]*$/",$LastName)) {
       $LastNameErr = "Only letters and white space allowed"; 
     }

   }   

   if (empty($_POST["Suffix"])) {
     $Suffix = "";
   } else {
     
     $Suffix = test_input($_POST["Suffix"]);

   }   
   
   if (empty($_POST["DOB"])) {
     $DOBErr = "Date of Birth is required";
   } else {
     
     $DOB = $_POST["DOB"]; 
     $age = calculateAge($DOB);
     
   }   

   if (empty($_POST["ClientSSN"])) {
     $ClientSSNErr = "Client Social Security Number is required";
   } else {
     
     $ClientSSN = test_input($_POST["ClientSSN"]);

     // check if name only contains numbers
     if (!preg_match("/^[0-9- ]*$/",$ClientSSN)) {
       $ClientSSNErr = "Only numbers allowed"; 
     }


   }   

   

   $Gender      = test_input($_POST["Gender"]);


   $MedicareNum = test_input($_POST["MedicareNum"]);
   $HICN        = test_input($_POST["MedicareNum"]);
   $MedicaidNum = test_input($_POST["MedicaidNum"]);
   $Street1     = test_input($_POST["Street1"]);  
   $street2     = test_input($_POST["Street2"]);
   $City        = test_input($_POST["City"]); 
   $State       = test_input($_POST["State"]); 
   $ZipCode     = test_input($_POST["ZipCode"]);
   $clienttelno = test_input($_POST["clienttelno"]);
   $clientfaxno = test_input($_POST["clientfaxno"]); 
   $comments    = test_input($_POST["comments"]);






// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

  $FullName     .= $FirstName . $MI . $LastName . $Suffix;
  $FullNamecheck = $FullName;


$sql = "INSERT INTO Client (FirstName, MI, LastName, Suffix, DOB, FullName, Street1, Street2, City, State, ZipCode, ClientSSN, MedicareNum, HICN, age, Gender, clienttelno, clientfaxno, comments)
 VALUES ('$FirstName', '$MI', '$LastName', '$Suffix', '$DOB', '$FullName', '$Street1', '$Street2', '$City', '$State', '$ZipCode', '$ClientSSN', '$MedicareNum', '$HICN', '$age', '$Gender', '$clienttelno', '$clientfaxno', '$comments')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$sql = "SELECT ClientID, FirstName, MI, LastName, Suffix FROM Client";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["ClientID"]. " - Name: " . $row["FirstName"]. " " . $row["MI"]. " " . $row["LastName"]. " " . $row["Suffix"]. " " . $row["ClientSSN"]. " " . $row["MedicareNum"]. " " . $row["Gender"]. " " . $row["comments"]. "<br>";
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



// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT MAX(ClientID) AS last_id FROM Client";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        $last_id = $row["last_id"];
        
        }
} else {
    
    echo "0 results";
}
mysqli_close($conn);



echo "<h2>Your Input:</h2>";
echo "Client ID: ", $last_id;
echo "<br>";
echo "First Name: ", $FirstName;
echo "<br>";
echo "MI: ", $MI;
echo "<br>";
echo "Last Name: ", $LastName;
echo "<br>";
echo "Suffix: ", $Suffix;
echo "<br>";
echo "DOB: ", $DOB;
echo "<br>";
echo "Client SSN: ", $ClientSSN;
echo "<br>";
echo "Medicare Number: ", $MedicareNum;
echo "<br>";
echo "HICN: ", $HICN;
echo "<br>";
echo "Medicaid Number: ", $MedicaidNum;
echo "<br>";
echo "Full Name: ", $FullName;
echo "<br>";
echo "Age: ", $age;
echo "<br>";
echo "Gender: ", $Gender;
echo "<br>";
echo "Street1: ", $Street1;
echo "<br>";
echo "Street2: ", $Street2;
echo "<br>";
echo "City: ", $City;
echo "<br>";
echo "State: ", $State;
echo "<br>";
echo "Zip Code: ", $ZipCode;
echo "<br>";
echo "Client Tel No: ", $clienttelno;
echo "<br>";
echo "Client Fax No: ", $clientfaxno;
echo "<br>";
echo "Comments: ", $comments;
echo "<br>";

?>






    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>



</body>
</html>

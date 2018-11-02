<!DOCTYPE HTML> 
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<style>
.error {color: #FF0000;}
table, th, td {
     border: 1px solid black;
}
</style>




</head>

<body> 




<?php
include 'config.php';

// define variables and set to empty values
$FirstNameErr = $LastNameErr = $MIErr = $SuffixErr = $genderErr = $DOBErr = $Street1Err = $Street2Err = $StateErr = $ZipCodeErr = $ClientIDErr ="";
$FirstName = $LastName = $MI = $Suffix = $gender = $DOB = $age = $Street1 = $Street2 = $State = $ZipCode = $ClientID = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

     // collect value of input field
     $ClientID = $_POST['ClientID']; 
     if (empty($ClientID)) {
         echo "ClientID is empty";
     }

   $LastName = test_input($_POST["LastName"]);
   if (empty($_POST["LastName"]) || $_POST["LastName"]==" ") {
     $LastNameErr = "Last Name is required";
   } else {
     $LastName = test_input($_POST["LastName"]);
     
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z- ]*$/",$LastName)) {
       $LastNameErr = "Only letters and white space allowed"; 
     }

   }
   $FirstName = test_input($_POST["FirstName"]);
   if (empty($_POST["FirstName"]) || $_POST["FirstName"]==" ") {
     $FirstNameErr = "First Name is required";
   } else {
     $FirstName = test_input($_POST["FirstName"]);

     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z- ]*$/",$FirstName)) {
       $FirstNameErr = "Only letters and white space allowed"; 
     }

   }
   $MI = test_input($_POST["MI"]);
   if (empty($_POST["MI"]) || $_POST["MI"]==" ") {
     $MIErr = "";
     $MI = test_input($_POST["MI"]);
   } else {
     $MI = test_input($_POST["MI"]);

     // check if name only contains letters
     if (!preg_match("/^[a-zA-Z]*$/",$MI)) {
       $FirstNameErr = "Only letters allowed"; 
     }
   }
   $Suffix = test_input($_POST["Suffix"]);
   if (empty($_POST["Suffix"])) {
     $Suffix = "";
     
   } else {
     $Suffix = test_input($_POST["Suffix"]);

     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$Suffix)) {
       $SuffixNameErr = "Only letters and white space allowed"; 
     }
   }

   $gender = test_input($_POST["gender"]);
   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
   $DOB = test_input($_POST["DOB"]);
   


   if (empty($_POST["DOB"])) {
     $DOBErr = "Date of Birth is required";
   } else {
     $DOB = test_input($_POST["DOB"]);
        // check if dob only contains numbers
     if (!preg_match("/^[0-9\/-]*$/",$DOB)) {
       $DOBErr = "Only numbers are allowed"; 
     }

   }

   $age = age(test_input($_POST["DOB"]));

   $Street1 = test_input($_POST["Street1"]);
   if (empty($_POST["Street1"])) {
     $Street1Err = "";
   } else {
     $Street1 = test_input($_POST["Street1"]);

     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z0-9 ]*$/",$Street1)) {
       $Street1Err = "Only letters and white space allowed"; 
     }

   }
   $Street2 = test_input($_POST["Street2"]);
   if (empty($_POST["Street2"])) {
     $Street2 = "";
   } else {
     $Street2 = test_input($_POST["Street2"]);

     // check if name only contains letters, numbers and whitespace
     if (!preg_match("/^[a-zA-Z0-9 ]*$/",$Street2)) {
       $Street2Err = "Only letters, numbers and white space allowed"; 
     }

   }
   $City = test_input($_POST["City"]);
   if (empty($_POST["City"])) {
     $City = "";
   } else {
     $City = test_input($_POST["City"]);

     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$City)) {
       $CityErr = "Only letters and white space allowed"; 
     }
   }
   $State = test_input($_POST["State"]);
   if (empty($_POST["State"])) {
     $StateErr = "State is Required";
   } else {
     $State = test_input($_POST["State"]);

     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z- ]*$/",$State)) {
       $StateErr = "Only letters, dash and white space allowed"; 
     }
   }

   $ZipCode = test_input($_POST["ZipCode"]);
   if (empty($_POST["ZipCode"])) {
     $ZipCode = "";
   } else {
     $ZipCode = test_input($_POST["ZipCode"]);

     // check if name only contains letters and whitespace
     if (!preg_match("/^[0-9- ]*$/",$ZipCode)) {
       $ZipCodeErr = "Only letters and white space allowed"; 
     }
   }



   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     
if ( strlen( $_POST[ 'comment'] ) >= 1 && strlen( $_POST[ 'comment' ] ) <= 256 ){

$comment = htmlentities ( trim ( $_POST[ 'comment' ] ) , ENT_NOQUOTES );}
$comment = test_input($_POST["comment"]);
   }

  $FullName .=  $FirstName . $MI . $LastName . $Suffix;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // begin the transaction
    $conn->beginTransaction();
    // our SQL statements

    $conn->exec("INSERT INTO Client (ClientID, LastName, FirstName, MI, FullName, Suffix) 
    VALUES ('$ClientID', '$LastName', '$FirstName', '$MI', '$FullName', 'Suffix')");

    // commit the transaction
    $conn->commit();
    // use exec() because no results are returned
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    echo "New record created successfully. Last inserted ID is: " . $last_id;
 
    }
catch(PDOException $e)
    {
    // roll back the transaction if something failed
    $conn->rollback();
    echo "Error: " . $e->getMessage();
    }

$conn = null;
}




function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

function age($birthday){
 list($year, $month, $day) = explode("-", $birthday);
 $year_diff  = date("Y") - $year;
 $month_diff = date("m") - $month;
 $day_diff   = date("d") - $day;
 if ($day_diff < 0 && $month_diff==0) $year_diff--;
 if ($day_diff < 0 && $month_diff < 0) $year_diff--;
 return $year_diff;
}
/*
function age($birthday){
 list($month, $day, $year) = explode("/", $birthday);
 $year_diff  = date("Y") - $year;
 $month_diff = date("m") - $month;
 $day_diff   = date("d") - $day;
 if ($day_diff < 0 && $month_diff==0) $year_diff--;
 if ($day_diff < 0 && $month_diff < 0) $year_diff--;
 return $year_diff;
}
*/


?>

<?php
include 'config.php';
$FullNamecheck = $FullName;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT ClientID, FullName FROM Client where FullName = '$FullNamecheck'";

$result = $conn->query($sql);

    //if the name exists it gives an error 


if ($result->num_rows > 0 ) {
     echo "Client Already Exisit!";
     echo "<table><tr><th>ID</th><th>Name</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["ClientID"]. "</td><td>" . $row["FullName"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}





$conn->close();
?>  


<?php
include 'config.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT ClientID, FullName FROM Client";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>ID</th><th>Name</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["ClientID"]. "</td><td>" . $row["FullName"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  





<div class="container">
<h2>Add New Client</h2>
<p><span class="error">* required field.</span></p>
<form name="personal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

<div class="form-group">
   <label for="ClientID">Client ID:</label> 
   <input type="text" class="form-control" id="ClientID" onkeypress="return isNumberKey(event)" name="ClientID" maxlength="7" placeholder="Client ID" required value="<?php echo $ClientID;?>">


   <span class="error">* <?php echo $ClientIDErr;?></span>
</div>    
     


<div class="form-group">
   <label for="LastName">Last Name:</label> 
   <input type="text" class="form-control" id="LastName" onkeypress="return isAlphaKey(event)" onkeyup="myFunctiontoUpperCaseu()" name="LastName" maxlength="30" placeholder="Last Name" required value="<?php echo $LastName;?>">


   <span class="error">* <?php echo $LastNameErr;?></span>
</div>    

    <div class="form-group">
      <label for="Suffix">Suffix:</label>
      <select class="form-control" id="Suffix" name="Suffix">
        <option></option>
        <option>Sr</option>
        <option>Jr</option>
        <option>II</option>
        <option>III</option>
        <option>IV</option>
        <option>V</option>
        <option>VI</option>
        <option>VII</option>
        <option>VIII</option>
      </select>
    </div>

   
<div class="form-group">
   <label for="FirstName">First Name:</label>
   <input type="text" class="form-control" id="FirstName" onkeypress="return isletterKey(event)" onkeyup="myFunctiontoUpperCasev()" name="FirstName" maxlength="30" placeholder="First Name" required value="<?php echo $FirstName;?>">
   <span class="error">* <?php echo $FirstNameErr;?></span>
</div>
   
<div class="form-group">
   <label for="MI">MI:</label>
   <input type="text" class="form-control" id="MI" onkeypress="return isAlphaMIKey(event)" onkeyup="myFunctiontoUpperCasew()" name="MI" maxlength="1" placeholder="MI" value="<?php echo $MI;?>">
   <span class="error"><?php echo $MIErr;?></span>
</div>

<div class="form-group">
   <label for="DOB">Date of Birth:</label>
   <input type="date" class="form-control" id="DOB" onkeypress="return isDateKey(event)" onkeyup="myAgeValidation()" onkeydown="return addSlashes(this)" name="DOB" maxlength="10" placeholder="mm/dd/yyyy" required value="<?php echo $DOB;?>"/>
   <span class="error">*<?php echo $DOBErr;?></span>
   
   
   <label id="age" for="age">Age: </label>
   <input type="number" Class="form-control" id="edad" name="age" value = "<?php echo $age;?>">
   <br>
   
   
</div>

<div>   
<label for="gender">Gender:</label>
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">Female
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male
   <span class="error">* <?php echo $genderErr;?></span>
</div>


<div class="form-group">
   <label for="Address1">Street Address1:</label>
   <input type="text" class="form-control" id="Street1" onkeypress="return isAlphaNumericKey(event)" name="Street1" placeholder="Street Address1" onkeyup="myFunctiontoUpperCasex()" value="<?php echo $Street1;?>">
   <span class="error"><?php echo $Address1Err;?></span>
</div>

<div class="form-group">
   <label for="Address2">Street Address2:</label>
   <input type="text" class="form-control" id="Street2" onkeypress="return isAlphaNumericKey(event)" name="Street2" placeholder="Street Address2" onkeyup="myFunctiontoUpperCasey()" value="<?php echo $Street2;?>">
   <span class="error"><?php echo $Address2Err;?></span>
</div>

<div class="form-group">
   <label for="City">City:</label>
   <input type="text" class="form-control" id="City" onkeypress="return isAlphaNumericKey(event)" name="City" placeholder="City" onkeyup="myFunctiontoUpperCasez()" value="<?php echo $City;?>">
   <span class="error"><?php echo $CityErr;?></span>
</div>


<div class="form-group">
    <label id="for-State" for="State"><span class="required">*</span>State</label>
    <select class="form-control" name="State" id="State" rel="addressResult" data="{'dropHeight' : 200, 'maxChars' : 25, maxVisible : 25, definedWidth: 180}">
    <option value="Select">Select</option>
    <option value="AL">AL - Alabama</option>
    <option value="AK">AK - Alaska</option>
    <option value="AS">AS - American Samoa</option>
    <option value="AZ">AZ - Arizona</option>
    <option value="AR">AR - Arkansas</option>
    <option value="CA">CA - California</option>
    <option value="CO">CO - Colorado</option>
    <option value="CT">CT - Connecticut</option>
    <option value="DE">DE - Delaware</option>
    <option value="DC">DC - District of Columbia</option>
    <option value="FM">FM - Federated States of Micronesia</option>
    <option value="FL">FL - Florida</option>
    <option value="GA">GA - Georgia</option>
    <option value="GU">GU - Guam</option>
    <option value="HI">HI - Hawaii</option>
    <option value="ID">ID - Idaho</option>
    <option value="IL">IL - Illinois</option>
    <option value="IN">IN - Indiana</option>
    <option value="IA">IA - Iowa</option>
    <option value="KS">KS - Kansas</option>
    <option value="KY">KY - Kentucky</option>
    <option value="LA">LA - Louisiana</option>
    <option value="ME">ME - Maine</option>
    <option value="MH">MH - Marshall Islands</option>
    <option value="MD">MD - Maryland</option>
    <option value="MA">MA - Massachusetts</option>
    <option value="MI">MI - Michigan</option>
    <option value="MN">MN - Minnesota</option>
    <option value="MS">MS - Mississippi</option>
    <option value="MO">MO - Missouri</option>
    <option value="MT">MT - Montana</option>
    <option value="NE">NE - Nebraska</option>
    <option value="NV">NV - Nevada</option>
    <option value="NH">NH - New Hampshire</option>
    <option value="NJ">NJ - New Jersey</option>
    <option value="NM">NM - New Mexico</option>
    <option value="NY">NY - New York</option>
    <option value="NC">NC - North Carolina</option>
    <option value="ND">ND - North Dakota</option>
    <option value="MP">MP - Northern Mariana Islands</option>
    <option value="OH">OH - Ohio</option>
    <option value="OK">OK - Oklahoma</option>
    <option value="OR">OR - Oregon</option>
    <option value="PW">PW - Palau</option>
    <option value="PA">PA - Pennsylvania</option>
    <option value="PR">PR - Puerto Rico</option>
    <option value="RI">RI - Rhode Island</option>
    <option value="SC">SC - South Carolina</option>
    <option value="SD">SD - South Dakota</option>
    <option value="TN">TN - Tennessee</option>
    <option value="TX">TX - Texas</option>
    <option value="UT">UT - Utah</option>
    <option value="VT">VT - Vermont</option>
    <option value="VI">VI - Virgin Islands</option>
    <option value="VA">VA - Virginia</option>
    <option value="WA">WA - Washington</option>
    <option value="WV">WV - West Virginia</option>
    <option value="WI">WI - Wisconsin</option>
    <option value="WY">WY - Wyoming</option>
    <option value="AA">AA - Armed Forces Americas</option>
    <option value="AE">AE - Armed Forces Africa</option>
    <option value="AE">AE - Armed Forces Canada</option>
    <option value="AE">AE - Armed Forces Europe</option>
    <option value="AE">AE - Armed Forces Middle East</option>
    <option value="AP">AP - Armed Forces Pacific</option>


</select>
</div>


<div class="form-group">
   <label for="ZipCode">Zip Code:</label>
   <input type="text" class="form-control" id="ZipCode" onkeypress="return isNumberKey(event)" name="ZipCode" maxlength="10" placeholder="99999-9999" required value="<?php echo chop(chunk_split($ZipCode,5,"-"),"-");?>">
   <span class="error">* <?php echo $ZipCodeErr;?></span>
   <br>
   
   
</div>

   Comment: <textarea name="comment" rows="5" cols="40" maxlength=255><?php echo $comment;?></textarea>
   <br><br>

   <input type="submit" name="submit" value="Submit" onclick="affirm()"> 
</form>

</div>

<?php
echo "<h2>Your Input:</h2>";
echo $ClientID;
echo "<br>";
echo $LastName;
echo "<br>";
echo $Suffix;
echo "<br>";
echo $FirstName;
echo "<br>";
echo $MI;
echo "<br>";
echo $DOB;
echo "<br>";
echo $age;
echo "<br>";
echo $Street1;
echo "<br>";
echo $Street2;
echo "<br>";
echo $State;
echo "<br>";
echo $City;
echo "<br>";
echo $ZipCode;
echo "<br>";
echo $comment;

?>


<script>
function affirm() {
    var affirm;
    


    if (confirm("Add This New Client?") == true) {
        affirm = "You pressed OK!";
    } else {
        affirm = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = affirm;
}
</script>


   <SCRIPT language=Javascript>

  <!--
      function isAlphaNumericKey(event)
      {
         
         
         var charCode = event.which || event.keyCode

         if ( charCode > 32 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) && (charCode < 48 || charCode > 57))
            return false;

        
     
         return true;
      }
      //-->

   </SCRIPT>


   <SCRIPT language=Javascript>
age=0;

function myAgeValidation() {
var inputDate = document.personal.DOB.value;
 getAge(new Date(inputDate));

} 

function getAge(birth) {

    var today = new Date();
    var nowyear = today.getFullYear();
    var nowmonth = today.getMonth();
    var nowday = today.getDate();

    var birthyear = birth.getFullYear();
    var birthmonth = birth.getMonth();
    var birthday = birth.getDate();
 
    var age = nowyear - birthyear;
    var age_month = nowmonth - birthmonth;
    var age_day = nowday - birthday;


    if(age_month < 0 || (age_month == 0 && age_day <0)) {
            age = parseInt(age) -1;
        }
 

    //document.getElementById("age").innerHTML = "Age: " + age;
    document.getElementById("edad").setAttribute("value", age);
}

  <!--
      function isAlphaKey(event)
      {
         
         
         var charCode = event.which || event.keyCode

         if ( charCode > 31 && charCode != 45 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) )
            return false;

        
     
         return true;
      }
      //-->

   </SCRIPT>

   <SCRIPT language=Javascript>
      <!--
      function isNumberKey(event)
      {
         var charCode = event.which || event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>

   <SCRIPT language=Javascript>
      <!--
      function isDateKey(event)
      {
         var charCode = event.which || event.keyCode
         if (charCode > 31 && charCode != 47 && (charCode < 48 || charCode > 57 ) )
            return false;

         return true;
      }
      //-->
   </SCRIPT>

   <SCRIPT language=Javascript>
      <!--
      function isletterKey(event)
      {
         var charCode = event.which || event.keyCode
         if ( charCode > 32 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) )
            return false;

         return true;
      }
      //-->
   </SCRIPT>

<SCRIPT language=Javascript>
      <!--
      function isAlphaMIKey(event)
      {
         var charCode = event.which || event.keyCode
         if ( charCode > 31 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) )
            return false;

         return true;
      }
      //-->
   </SCRIPT>

<script>
function myFunctiontoUpperCaseu() {
    var u = document.getElementById("LastName");
    u.value = u.value.toUpperCase();
}
</script>

<script>
function myFunctiontoUpperCasev() {
    var v = document.getElementById("FirstName");
    v.value = v.value.toUpperCase();
}
</script>

<script>
function myFunctiontoUpperCasew() {
    var w = document.getElementById("MI");
    w.value = w.value.toUpperCase();
}

function myFunctiontoUpperCasex() {
    var x = document.getElementById("Street1");
    x.value = x.value.toUpperCase();
}
</script>

<script>
function myFunctiontoUpperCasey() {
    var y = document.getElementById("Street2");
    y.value = y.value.toUpperCase();
}
</script>

<script>
function myFunctiontoUpperCasez() {
    var z = document.getElementById("City");
    z.value = z.value.toUpperCase();
}
</script>

<script>
i=0;
$(document).ready(function(){
  $("input").keypress(function(){
    $("span").text(i+=1);
  });
});
</script>

<script type="text/javascript">
function addSlashes(input) {
    var v = input.value;
    if (v.match(/^\d{2}$/) !== null) {
        input.value = v + '/';
    } else if (v.match(/^\d{2}\/\d{2}$/) !== null) {
        input.value = v + '/';
    }
}
</script>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>
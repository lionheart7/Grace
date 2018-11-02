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
include 'config.php';

// define variables and set to empty values
$FirstNameErr = $LastNameErr = $MIErr = $SuffixErr = $genderErr = $DOBErr = $Street1Err = $Street2Err = $StateErr = $ZipCodeErr = $ClientIDErr = $ClientSSNErr = "";
$FirstName = $LastName = $MI = $Suffix = $gender = $DOB = $age = $Street1 = $Street2 = $State = $ZipCode = $ClientSSN = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

     // collect value of input field

   

   
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

   if (empty($_POST["MI"]) || $_POST["MI"]==" ") {
     $MIErr = "";
     $MI = "";
   } else {
     $MI = test_input($_POST["MI"]);

     // check if name only contains letters
     if (!preg_match("/^[a-zA-Z]*$/",$MI)) {
       $FirstNameErr = "Only letters allowed"; 
     }
   }

   if (empty($_POST["Suffix"])) {
     $Suffix = "";
     
   } else {
     $Suffix = test_input($_POST["Suffix"]);

     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$Suffix)) {
       $SuffixNameErr = "Only letters and white space allowed"; 
     }
   }

  
 
   
   
   if (empty($_POST["DOB"])) {
     $DOBErr = "Date of Birth is required";
   } else {
            
    
        // check if dob only contains numbers
     if (preg_match("/^[0-9- ]*$/",$DOB)) {
       $age = agem($_POST["DOB"]);   
       $ageErr = ""; 
     }
     if (preg_match("/^[0-9\/ ]*$/",$DOB)) {
       $age = age($_POST["DOB"]);   
       $ageErr = ""; 
     }
     $DOB = $_POST["DOB"];
   }
   

   if (empty($_POST["ClientSSN"])) {
     $ClientSSNErr = "Client SSN required";
   } else {
     $ClientSSN = test_input($_POST["ClientSSN"]);

     // check if name only contains numbers
     if (!preg_match("/^[0-9- ]*$/",$ClientSSN)) {
       $ClientSSNErr = "Only numbers allowed"; 
     }
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   


   
   if (empty($_POST["Street1"])) {
     $Street1Err = "";
   } else {
     $Street1 = test_input($_POST["Street1"]);

     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z0-9 ]*$/",$Street1)) {
       $Street1Err = "Only letters and white space allowed"; 
     }

   }
   if (empty($_POST["Street2"])) {
     $Street2 = "";
   } else {
     $Street2 = test_input($_POST["Street2"]);

     // check if name only contains letters, numbers and whitespace
     if (!preg_match("/^[a-zA-Z0-9 ]*$/",$Street2)) {
       $Street2Err = "Only letters, numbers and white space allowed"; 
     }

   }
   
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
   if (empty($_POST["State"]) || $_POST["State"] == "Select") {
     $StateErr = "State is Required";
   } else {
     $State = test_input($_POST["State"]);

     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z- ]*$/",$State)) {
       $StateErr = "Only letters, dash and white space allowed"; 
     }
   }

   if (empty($_POST["ZipCode"])) {
     $ZipCode = "A valid Zip Code is required";
   } else {
     $ZipCode = test_input($_POST["ZipCode"]);
     // check if zipcode is valid
    // if (!preg_match("/^\d{5}([\-]?\d{4})?$/i",$ZipCode)) {
    //   $ZipCodeErr = "Validation failed, provided zip/postal code is not valid."; 
    // } else {$ZipCode = test_input($_POST["ZipCode"]);}
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

    $sql = "INSERT INTO Client (LastName, FirstName, MI, FullName, Suffix) 
    VALUES ('$LastName', '$FirstName', '$MI', '$FullName', '$Suffix')";
    // commit the transaction
     $conn->commit();
    // use exec() because no results are returned
    $conn->exec($sql);
       
    $last_id = $conn->lastInsertId();  
       
       
    // commit the transaction
    
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
}



function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

function agem($birthday){
 list($year, $month, $day) = explode("-", $birthday);
 $year_diff  = date("Y") - $year;
 $month_diff = date("m") - $month;
 $day_diff   = date("d") - $day;
 if ($day_diff < 0 && $month_diff==0) $year_diff--;
 if ($day_diff < 0 && $month_diff < 0) $year_diff--;
 return $year_diff;
}

function age($birthday){


 list($month, $day, $year) = explode("/", $birthday);
 $year_diff  = date("Y") - $year;
 $month_diff = date("m") - $month;
 $day_diff   = date("d") - $day;
 if ($day_diff < 0 && $month_diff==0) $year_diff--;
 if ($day_diff < 0 && $month_diff < 0) $year_diff--;
 return $year_diff;
}



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
         echo "<tr><td>" . $row["ClientID"]. "</td><td>" . $row["FullName"] . "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}





$conn->close();
?>  


<?php
include 'config.php';
static $ClientID;
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
        $ClientID = $row["last_id"] + 1;
        echo "last id:" . $row["last_id"] . "New ID: " . $ClientID . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>   





<div class="container">
<h2>Add New Physician</h2>
<p><span class="error">* required field.</span></p>
<form name="personal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

<div class="form-group">
   <label for="ClientID">Client ID:</label> 
   <input type="number" class="form-control" id="ClientID" name="ClientID" maxlength="7" value="<?php echo $ClientID;?>" disabled>


   <span class="error">* <?php echo $ClientIDErr;?></span>
</div>    
     


<div class="form-group">
   <label for="LastName">Last Name:</label> 
   <input type="text" class="form-control" id="LastName" onkeypress="return isAlphaKey(event)" onkeyup="myFunctiontoUpperCaseu()" name="LastName" maxlength="30" placeholder="Last Name" required value="<?php echo $LastName;?>" autofocus>


   <span class="error">* <?php echo $LastNameErr;?></span>
</div>    

    <div class="form-group">
      <label for="Suffix">Suffix:</label>
      <select class="form-control" id="Suffix" name="Suffix">
        <option value=""     <?php if (isset($Suffix) && $Suffix=="") echo "selected";?>></option>
        <option value="Sr"   <?php if (isset($Suffix) && $Suffix=="Sr") echo "selected";?>>Sr</option>
        <option value="Jr"   <?php if (isset($Suffix) && $Suffix=="Jr") echo "selected";?>>Jr</option>
        <option value="II"   <?php if (isset($Suffix) && $Suffix=="II") echo "selected";?>>II</option>
        <option value="III"  <?php if (isset($Suffix) && $Suffix=="III") echo "selected";?>>III</option>
        <option value="IV"   <?php if (isset($Suffix) && $Suffix=="IV") echo "selected";?>>IV</option>
        <option value="V"    <?php if (isset($Suffix) && $Suffix=="V") echo "selected";?>>V</option>
        <option value="VI"   <?php if (isset($Suffix) && $Suffix=="VI") echo "selected";?>>VI</option>
        <option value="VII"  <?php if (isset($Suffix) && $Suffix=="VII") echo "selected";?>>VII</option>
        <option value="VIII" <?php if (isset($Suffix) && $Suffix=="VIII") echo "selected";?>>VIII</option>
      </select>
    </div>

   
<div class="form-group">
   <label for="FirstName">First Name:</label>
   <input type="text" class="form-control" id="FirstName" onkeypress="return isletterKey(event)" onkeyup="myFunctiontoUpperCasev()" name="FirstName" maxlength="30" placeholder="First Name" required value="<?php echo $FirstName;?>" autofocus>
   <span class="error">* <?php echo $FirstNameErr;?></span>
</div>
   
<div class="form-group">
   <label for="MI">MI:</label>
   <input type="text" class="form-control" id="MI" onkeypress="return isAlphaMIKey(event)" onkeyup="myFunctiontoUpperCasew()" name="MI" maxlength="1" placeholder="MI" value="<?php echo $MI;?>">
   <span class="error"><?php echo $MIErr;?></span>
</div>

<div class="form-group">
   <label for="DOB">Date of Birth:</label>
   <input type="date" class="form-control" id="DOB" placeholder="mm/dd/yyyy" onkeypress="return isDateKey(event)" onkeyup="myAgeValidation()" onkeydown="return addSlashes(this)" name="DOB" maxlength="10" required value="<?php echo $DOB = date_format($DOB,'m/d/Y');?>" autofocus>
   <br>
   
   <img src="/image/calendar_icon.jpg" alt="calendar" onclick="ds_sh(DOB)">
   <span class="error">*<?php echo $DOBErr;?></span>
   <table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
<tr><td id="ds_calclass">
</td></tr>
</table><br>
   
   <label id="age">Age: </label>
   <input type="number" Class="form-control" id="edad" name="age" value="<?php echo $age;?>" autofocus>
    
   <br>
   
</div>

<div class="form-group">
   <label for="ClientSSN">SSN:</label> 
   <input type="text" class="form-control" id="ClientSSN" onkeypress="return isNumberKey(event)" onkeydown="return adddashes(this)" name="ClientSSN" maxlength="11" placeholder="Client SSN" required value="<?php echo $ClientSSN;?>" autofocus>


   <span class="error">* <?php echo $ClientSSNErr;?></span>
</div>

<div>   
<label for="gender">Gender:</label>
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">Female
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male
   <span class="error">* <?php echo $genderErr;?></span>
</div>


<div class="form-group">
   <label for="Address1">Street Address1:</label>
   <input type="text" class="form-control" id="Street1" onkeypress="return isAlphaNumericKey(event)" name="Street1" placeholder="Street Address1" onkeyup="myFunctiontoUpperCasex()" value="<?php echo $Street1;?>" autofocus>
   <span class="error"><?php echo $Address1Err;?></span>
</div>

<div class="form-group">
   <label for="Address2">Street Address2:</label>
   <input type="text" class="form-control" id="Street2" onkeypress="return isAlphaNumericKey(event)" name="Street2" placeholder="Street Address2" onkeyup="myFunctiontoUpperCasey()" value="<?php echo $Street2;?>" autofocus>
   <span class="error"><?php echo $Address2Err;?></span>
</div>

<div class="form-group">
   <label for="City">City:</label>
   <input type="text" class="form-control" id="City" onkeypress="return isAlphaNumericKey(event)" name="City" placeholder="City" onkeyup="myFunctiontoUpperCasez()" value="<?php echo $City;?>" autofocus>
   <span class="error"><?php echo $CityErr;?></span>
</div>


<div class="form-group">
    <label id="for-State" for="State"><span class="required">*</span>State</label>
    <select required="required" class="form-control" name="State" id="State" data="{'dropHeight' : 200, 'maxChars' : 25, maxVisible : 25, definedWidth: 180}"  value="<?php echo $State; ?>" autofocus>
    <option value=""   <?php if (isset($State) && $State=="") echo "selected";?>>Select</option>
    <option value="AL" <?php if (isset($State) && $State=="AL") echo "selected";?>>AL - Alabama</option>
    <option value="AK" <?php if (isset($State) && $State=="AK") echo "selected";?>>AK - Alaska</option>
    <option value="AS" <?php if (isset($State) && $State=="AS") echo "selected";?>>AS - American Samoa</option>
    <option value="AZ" <?php if (isset($State) && $State=="AZ") echo "selected";?>>AZ - Arizona</option>
    <option value="AR" <?php if (isset($State) && $State=="AR") echo "selected";?>>AR - Arkansas</option>
    <option value="CA" <?php if (isset($State) && $State=="CA") echo "selected";?>>CA - California</option>
    <option value="CO" <?php if (isset($State) && $State=="CO") echo "selected";?>>CO - Colorado</option>
    <option value="CT" <?php if (isset($State) && $State=="CT") echo "selected";?>>CT - Connecticut</option>
    <option value="DE" <?php if (isset($State) && $State=="DE") echo "selected";?>>DE - Delaware</option>
    <option value="DC" <?php if (isset($State) && $State=="DC") echo "selected";?>>DC - District of Columbia</option>
    <option value="FM" <?php if (isset($State) && $State=="FM") echo "selected";?>>FM - Federated States of Micronesia</option>
    <option value="FL" <?php if (isset($State) && $State=="FL") echo "selected";?>>FL - Florida</option>
    <option value="GA" <?php if (isset($State) && $State=="GA") echo "selected";?>>GA - Georgia</option>
    <option value="GU" <?php if (isset($State) && $State=="GU") echo "selected";?>>GU - Guam</option>
    <option value="HI" <?php if (isset($State) && $State=="HI") echo "selected";?>>HI - Hawaii</option>
    <option value="ID" <?php if (isset($State) && $State=="ID") echo "selected";?>>ID - Idaho</option>
    <option value="IL" <?php if (isset($State) && $State=="IL") echo "selected";?>>IL - Illinois</option>
    <option value="IN" <?php if (isset($State) && $State=="IN") echo "selected";?>>IN - Indiana</option>
    <option value="IA" <?php if (isset($State) && $State=="IA") echo "selected";?>>IA - Iowa</option>
    <option value="KS" <?php if (isset($State) && $State=="KS") echo "selected";?>>KS - Kansas</option>
    <option value="KY" <?php if (isset($State) && $State=="KY") echo "selected";?>>KY - Kentucky</option>
    <option value="LA" <?php if (isset($State) && $State=="LA") echo "selected";?>>LA - Louisiana</option>
    <option value="ME" <?php if (isset($State) && $State=="ME") echo "selected";?>>ME - Maine</option>
    <option value="MH" <?php if (isset($State) && $State=="MH") echo "selected";?>>MH - Marshall Islands</option>
    <option value="MD" <?php if (isset($State) && $State=="MD") echo "selected";?>>MD - Maryland</option>
    <option value="MA" <?php if (isset($State) && $State=="MA") echo "selected";?>>MA - Massachusetts</option>
    <option value="MI" <?php if (isset($State) && $State=="MI") echo "selected";?>>MI - Michigan</option>
    <option value="MN" <?php if (isset($State) && $State=="MN") echo "selected";?>>MN - Minnesota</option>
    <option value="MS" <?php if (isset($State) && $State=="MS") echo "selected";?>>MS - Mississippi</option>
    <option value="MO" <?php if (isset($State) && $State=="MO") echo "selected";?>>MO - Missouri</option>
    <option value="MT" <?php if (isset($State) && $State=="MT") echo "selected";?>>MT - Montana</option>
    <option value="NE" <?php if (isset($State) && $State=="NE") echo "selected";?>>NE - Nebraska</option>
    <option value="NV" <?php if (isset($State) && $State=="NV") echo "selected";?>>NV - Nevada</option>
    <option value="NH" <?php if (isset($State) && $State=="NH") echo "selected";?>>NH - New Hampshire</option>
    <option value="NJ" <?php if (isset($State) && $State=="NJ") echo "selected";?>>NJ - New Jersey</option>
    <option value="NM" <?php if (isset($State) && $State=="NM") echo "selected";?>>NM - New Mexico</option>
    <option value="NY" <?php if (isset($State) && $State=="NY") echo "selected";?>>NY - New York</option>
    <option value="NC" <?php if (isset($State) && $State=="NC") echo "selected";?>>NC - North Carolina</option>
    <option value="ND" <?php if (isset($State) && $State=="ND") echo "selected";?>>ND - North Dakota</option>
    <option value="MP" <?php if (isset($State) && $State=="MP") echo "selected";?>>MP - Northern Mariana Islands</option>
    <option value="OH" <?php if (isset($State) && $State=="OH") echo "selected";?>>OH - Ohio</option>
    <option value="OK" <?php if (isset($State) && $State=="OK") echo "selected";?>>OK - Oklahoma</option>
    <option value="OR" <?php if (isset($State) && $State=="OR") echo "selected";?>>OR - Oregon</option>
    <option value="PW" <?php if (isset($State) && $State=="PW") echo "selected";?>>PW - Palau</option>
    <option value="PA" <?php if (isset($State) && $State=="PA") echo "selected";?>>PA - Pennsylvania</option>
    <option value="PR" <?php if (isset($State) && $State=="PR") echo "selected";?>>PR - Puerto Rico</option>
    <option value="RI" <?php if (isset($State) && $State=="RI") echo "selected";?>>RI - Rhode Island</option>
    <option value="SC" <?php if (isset($State) && $State=="SC") echo "selected";?>>SC - South Carolina</option>
    <option value="SD" <?php if (isset($State) && $State=="SD") echo "selected";?>>SD - South Dakota</option>
    <option value="TN" <?php if (isset($State) && $State=="TN") echo "selected";?>>TN - Tennessee</option>
    <option value="TX" <?php if (isset($State) && $State=="TX") echo "selected";?>>TX - Texas</option>
    <option value="UT" <?php if (isset($State) && $State=="UT") echo "selected";?>>UT - Utah</option>
    <option value="VT" <?php if (isset($State) && $State=="VT") echo "selected";?>>VT - Vermont</option>
    <option value="VI" <?php if (isset($State) && $State=="VI") echo "selected";?>>VI - Virgin Islands</option>
    <option value="VA" <?php if (isset($State) && $State=="VA") echo "selected";?>>VA - Virginia</option>
    <option value="WA" <?php if (isset($State) && $State=="WA") echo "selected";?>>WA - Washington</option>
    <option value="WV" <?php if (isset($State) && $State=="WV") echo "selected";?>>WV - West Virginia</option>
    <option value="WI" <?php if (isset($State) && $State=="WI") echo "selected";?>>WI - Wisconsin</option>
    <option value="WY" <?php if (isset($State) && $State=="WY") echo "selected";?>>WY - Wyoming</option>
    <option value="AA" <?php if (isset($State) && $State=="AA") echo "selected";?>>AA - Armed Forces Americas</option>
    <option value="AE" <?php if (isset($State) && $State=="AE") echo "selected";?>>AE - Armed Forces Africa</option>
    <option value="AE" <?php if (isset($State) && $State=="AE") echo "selected";?>>AE - Armed Forces Canada</option>
    <option value="AE" <?php if (isset($State) && $State=="AE") echo "selected";?>>AE - Armed Forces Europe</option>
    <option value="AE" <?php if (isset($State) && $State=="AE") echo "selected";?>>AE - Armed Forces Middle East</option>
    <option value="AP" <?php if (isset($State) && $State=="AP") echo "selected";?>>AP - Armed Forces Pacific</option>


</select>
</div>


<div class="form-group">
   <label for="ZipCode">Zip Code:</label>
   <input type="text" class="form-control" id="ZipCode" onkeypress="return isNumberKey(event)" onkeydown="return zipadddashes(this)" name="ZipCode" maxlength="10" placeholder="99999-9999" required value="<?php echo chop(chunk_split($ZipCode,5,"-"),"-");?>" autofocus>
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
print_r($_SESSION);
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


function myAgeValidation() {
var inputDate = document.getElementById("DOB").value;
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
    //document.getElementById("edad").value = <?php echo $age;?>;
    //document.getElementById("age").value = document.getElementById("edad").value;
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

function adddashes(input) {
    var dash = input.value;
    if (dash.match(/^\d{3}$/) !== null) {
        input.value = dash + '-';
    } else if (dash.match(/^\d{3}-\d{2}$/) !== null) {
        input.value = dash + '-';
    }
}

function zipadddashes(input) {
    var dash = input.value;
    if (dash.match(/^\d{5}$/) !== null) {
        input.value = dash + '-';
    } 

//else if (dash.match(/^\d{3}-\d{2}$/) !== null) {
  //      input.value = dash + '-';
    //}
}

</script>


<script type="text/javascript">
// <!-- <![CDATA[

// Project: Dynamic Date Selector (DtTvB) - 2006-03-16
// Script featured on JavaScript Kit- http://www.javascriptkit.com
// Code begin...
// Set the initial date.
var ds_i_date = new Date();
ds_c_month = ds_i_date.getMonth() + 1;
ds_c_year = ds_i_date.getFullYear();

// Get Element By Id
function ds_getel(id) {
	return document.getElementById(id);
}

// Get the left and the top of the element.
function ds_getleft(el) {
	var tmp = el.offsetLeft;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetLeft;
		el = el.offsetParent;
	}
	return tmp;
}
function ds_gettop(el) {
	var tmp = el.offsetTop;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetTop;
		el = el.offsetParent;
	}
	return tmp;
}

// Output Element
var ds_oe = ds_getel('ds_calclass');
// Container
var ds_ce = ds_getel('ds_conclass');

// Output Buffering
var ds_ob = ''; 
function ds_ob_clean() {
	ds_ob = '';
}
function ds_ob_flush() {
	ds_oe.innerHTML = ds_ob;
	ds_ob_clean();
}
function ds_echo(t) {
	ds_ob += t;
}

var ds_element; // Text Element...

var ds_monthnames = [
'January', 'February', 'March', 'April', 'May', 'June',
'July', 'August', 'September', 'October', 'November', 'December'
]; // You can translate it for your language.

var ds_daynames = [
'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'
]; // You can translate it for your language.

// Calendar template
function ds_template_main_above(t) {
	return '<table cellpadding="3" cellspacing="1" class="ds_tbl">'
	     + '<tr>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_py();"><<</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_pm();"><</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_hi();" colspan="3">[Close]</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_nm();">></td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_ny();">>></td>'
		 + '</tr>'
	     + '<tr>'
		 + '<td colspan="7" class="ds_head">' + t + '</td>'
		 + '</tr>'
		 + '<tr>';
}

function ds_template_day_row(t) {
	return '<td class="ds_subhead">' + t + '</td>';
	// Define width in CSS, XHTML 1.0 Strict doesn't have width property for it.
}

function ds_template_new_week() {
	return '</tr><tr>';
}

function ds_template_blank_cell(colspan) {
	return '<td colspan="' + colspan + '"></td>'
}

function ds_template_day(d, m, y) {
	return '<td class="ds_cell" onclick="ds_onclick(' + d + ',' + m + ',' + y + ')">' + d + '</td>';
	// Define width the day row.
}

function ds_template_main_below() {
	return '</tr>'
	     + '</table>';
}

// This one draws calendar...
function ds_draw_calendar(m, y) {
	// First clean the output buffer.
	ds_ob_clean();
	// Here we go, do the header
	ds_echo (ds_template_main_above(ds_monthnames[m - 1] + ' ' + y));
	for (i = 0; i < 7; i ++) {
		ds_echo (ds_template_day_row(ds_daynames[i]));
	}
	// Make a date object.
	var ds_dc_date = new Date();
	ds_dc_date.setMonth(m - 1);
	ds_dc_date.setFullYear(y);
	ds_dc_date.setDate(1);
	if (m == 1 || m == 3 || m == 5 || m == 7 || m == 8 || m == 10 || m == 12) {
		days = 31;
	} else if (m == 4 || m == 6 || m == 9 || m == 11) {
		days = 30;
	} else {
		days = (y % 4 == 0) ? 29 : 28;
	}
	var first_day = ds_dc_date.getDay();
	var first_loop = 1;
	// Start the first week
	ds_echo (ds_template_new_week());
	// If sunday is not the first day of the month, make a blank cell...
	if (first_day != 0) {
		ds_echo (ds_template_blank_cell(first_day));
	}
	var j = first_day;
	for (i = 0; i < days; i ++) {
		// Today is sunday, make a new week.
		// If this sunday is the first day of the month,
		// we've made a new row for you already.
		if (j == 0 && !first_loop) {
			// New week!!
			ds_echo (ds_template_new_week());
		}
		// Make a row of that day!
		ds_echo (ds_template_day(i + 1, m, y));
		// This is not first loop anymore...
		first_loop = 0;
		// What is the next day?
		j ++;
		j %= 7;
	}
	// Do the footer
	ds_echo (ds_template_main_below());
	// And let's display..
	ds_ob_flush();
	// Scroll it into view.
	ds_ce.scrollIntoView();
}

// A function to show the calendar.
// When user click on the date, it will set the content of t.
function ds_sh(t) {
	// Set the element to set...
	ds_element = t;
	// Make a new date, and set the current month and year.
	var ds_sh_date = new Date();
	ds_c_month = ds_sh_date.getMonth() + 1;
	ds_c_year = ds_sh_date.getFullYear();
	// Draw the calendar
	ds_draw_calendar(ds_c_month, ds_c_year);
	// To change the position properly, we must show it first.
	ds_ce.style.display = '';
	// Move the calendar container!
	the_left = ds_getleft(t);
	the_top = ds_gettop(t) + t.offsetHeight;
	ds_ce.style.left = the_left + 'px';
	ds_ce.style.top = the_top + 'px';
	// Scroll it into view.
	ds_ce.scrollIntoView();
}

// Hide the calendar.
function ds_hi() {
	ds_ce.style.display = 'none';
}

// Moves to the next month...
function ds_nm() {
	// Increase the current month.
	ds_c_month ++;
	// We have passed December, let's go to the next year.
	// Increase the current year, and set the current month to January.
	if (ds_c_month > 12) {
		ds_c_month = 1; 
		ds_c_year++;
	}
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the previous month...
function ds_pm() {
	ds_c_month = ds_c_month - 1; // Can't use dash-dash here, it will make the page invalid.
	// We have passed January, let's go back to the previous year.
	// Decrease the current year, and set the current month to December.
	if (ds_c_month < 1) {
		ds_c_month = 12; 
		ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
	}
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the next year...
function ds_ny() {
	// Increase the current year.
	ds_c_year++;
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the previous year...
function ds_py() {
	// Decrease the current year.
	ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Format the date to output.
function ds_format_date(d, m, y) {
	// 2 digits month.
	m2 = '00' + m;
	m2 = m2.substr(m2.length - 2);
	// 2 digits day.
	d2 = '00' + d;
	d2 = d2.substr(d2.length - 2);
	// YYYY-MM-DD
	return y + '-' + m2 + '-' + d2;
        //return m2 + '/' + d2 + '/' + y;
}

// When the user clicks the day.
function ds_onclick(d, m, y) {
	// Hide the calendar.
	ds_hi();
	// Set the value of it, if we can.
	if (typeof(ds_element.value) != 'undefined') {
		ds_element.value = ds_format_date(d, m, y);
                getAge(new Date(ds_element.value)); 
                // Maybe we want to set the HTML in it.
	} else if (typeof(ds_element.innerHTML) != 'undefined') {
		ds_element.innerHTML = ds_format_date(d, m, y);
                getAge(new Date(ds_element.value));
	// I don't know how should we display it, just alert it to user.
	} else {
		alert (ds_format_date(d, m, y));
	}
}

// And here is the end.

// ]]> -->
</script>





    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>
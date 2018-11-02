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

  
 
   $DOB = test_input($_POST["DOB"]);

   if (empty($_POST["DOB"])) {
     $DOBErr = "Date of Birth is required";
   } else {
            $DOB = test_input($_POST["DOB"]);

        // check if dob only contains numbers
     if (!preg_match("/^[0-9-]*$/",$DOB)) {
       $age = age(test_input($_POST["DOB"]));   
       $ageErr = ""; 
     }
     if (!preg_match("/^[0-9\/]*$/",$DOB)) {
       $age = agem(test_input($_POST["DOB"]));   
       $ageErr = ""; 
     }
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }


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
   <input type="date" class="form-control" id="DOB"  onkeypress="return isDateKey(event)" onkeyup="myAgeValidation()" onkeydown="return addSlashes(this)" name="DOB" maxlength="10" placeholder="mm/dd/yyyy" required value="<?php echo date_format($DOB,"m/d/Y");?>" style="cursor: text" />
   <br>
   
   <img src="/image/calendar_icon.jpg" alt="calendar" onclick="ds_sh(DOB);">
   <span class="error">*<?php echo $DOBErr;?></span>
   <table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
<tr><td id="ds_calclass">
</td></tr>
</table><br>
   
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
    <select class="form-control" name="State" id="State" rel="addressResult" data="{'dropHeight' : 200, 'maxChars' : 25, maxVisible : 25, definedWidth: 180}" required value="<?php echo $state; ?>">
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
}

// When the user clicks the day.
function ds_onclick(d, m, y) {
	// Hide the calendar.
	ds_hi();
	// Set the value of it, if we can.
	if (typeof(ds_element.value) != 'undefined') {
		ds_element.value = ds_format_date(d, m, y);
	// Maybe we want to set the HTML in it.
	} else if (typeof(ds_element.innerHTML) != 'undefined') {
		ds_element.innerHTML = ds_format_date(d, m, y);
	// I don't know how should we display it, just alert it to user.
	} else {
		alert (ds_format_date(d, m, y));
	}
}

// And here is the end.

// ]]> -->
</script>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>
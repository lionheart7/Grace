<!DOCTYPE HTML> 
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<style>
.error {color: #FF0000;}
</style>




</head>

<body> 




<?php
// define variables and set to empty values
$FirstNameErr = $LastNameErr = $MIErr = $SuffixErr = $genderErr = $DOBErr = $Address1Err = $Address2Err ="";
$FirstName = $LastName = $MI = $Suffix = $gender = $DOB = $age = $Address1 = $Address2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["LastName"])) {
     $LastNameErr = "Last Name is required";
   } else {
     $LastName = test_input($_POST["LastName"]);
     
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z- ]*$/",$LastName)) {
       $LastNameErr = "Only letters and white space allowed"; 
     }

   }
   
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
     $MIErr = "Middle Initial is required";
   } else {
     $MI = test_input($_POST["MI"]);

     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$FirtName)) {
       $FirstNameErr = "Only letters and white space allowed"; 
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


   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }

   if (empty($_POST["DOB"])) {
     $DOBErr = "Date of Birth is required";
   } else {
     $DOB = test_input($_POST["DOB"]);
        // check if dob only contains numbers
     if (!preg_match("/^[0-9-]*$/",$DOB)) {
       $DOBErr = "Only numbers are allowed"; 
     }

   }


   if (empty($_POST["Address1"])) {
     $Address1Err = "Address is required";
   } else {
     $Address1 = test_input($_POST["Address1"]);

     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z0-9 ]*$/",$Address1)) {
       $Address1Err = "Only letters and white space allowed"; 
     }

   }

   if (empty($_POST["Address2"])) {
     $Address2 = "";
   } else {
     $Address2 = test_input($_POST["Address2"]);

     // check if name only contains letters, numbers and whitespace
     if (!preg_match("/^[a-zA-Z0-9 ]*$/",$Address2)) {
       $Address2Err = "Only letters, numbers and white space allowed"; 
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

   if (empty($_POST["zipcode"])) {
     $zipcode = "";
   } else {
     $zipcode = test_input($_POST["zipcode"]);

     // check if name only contains letters and whitespace
     if (!preg_match("/^[0-9- ]*$/",$zipcode)) {
       $zipcodeErr = "Only letters and white space allowed"; 
     }
   }



   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     
if ( strlen( $_POST[ 'comment'] ) >= 1 && strlen( $_POST[ 'comment' ] ) <= 256 ){

$comment = htmlentities ( trim ( $_POST[ 'comment' ] ) , ENT_NOQUOTES );}
$comment = test_input($_POST["comment"]);
   }

}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<div class="container">
<h2>Add New Client</h2>
<p><span class="error">* required field.</span></p>
<form name="personal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

<div class="form-group">
   <label for="LastName">Last Name:</label> 
   <input type="text" class="form-control" id="LastName" onkeypress="return isAlphaKey(event)" onkeyup="myFunctiontoUpperCase()" name="LastName" maxlength="30" placeholder="Last Name" required value="<?php echo $LastName;?>">


   <span class="error">* <?php echo $LastNameErr;?></span>
</div>    
   
<div class="form-group">
   <label for="FirstName">First Name:</label>
   <input type="text" class="form-control" id="FirstName" onkeypress="return isAlphaKey(event)" onkeyup="myFunctiontoUpperCase()" name="FirstName" maxlength="30" placeholder="First Name" required value="<?php echo $FirstName;?>">
   <span class="error">* <?php echo $FirstNameErr;?></span>
</div>
   
<div class="form-group">
   <label for="MI">MI:</label>
   <input type="text" class="form-control" id="MI" onkeypress="return isAlphaKey(event)" onkeyup="myFunctiontoUpperCase()" name="MI" maxlength="1" placeholder="MI" required value="<?php echo $MI;?>">
   <span class="error"><?php echo $MIErr;?></span>
</div>

<div class="form-group">
   <label for="DOB">Date of Birth:</label>
   <input type="date" class="form-control" id="DOB" onkeyup=myAgeValidation() name="DOB" maxlength="8" required value="<?php echo $DOB;?>">
   <span class="error">*<?php echo $DOBErr;?></span>
   
   <label forp id="age"></p>
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
   <input type="text" class="form-control" id="Address1" onkeypress="return isAlphaNumericKey(event)" name="Address1" placeholder="Street Address1" value="<?php echo $Address1;?>">
   <span class="error"><?php echo $Address1Err;?></span>
</div>

<div class="form-group">
   <label for="Address2">Street Address2:</label>
   <input type="text" class="form-control" id="Address2" onkeypress="return isAlphaNumericKey(event)" name="Address2" placeholder="Street Address2" value="<?php echo $Address2;?>">
   <span class="error"><?php echo $Address2Err;?></span>
</div>

<div class="form-group">
   <label for="City">City:</label>
   <input type="text" class="form-control" id="City" onkeypress="return isAlphaNumericKey(event)" name="City" placeholder="City" value="<?php echo $City;?>">
   <span class="error"><?php echo $CityErr;?></span>
</div>

<div class="form-group">
   <label for="zipcode">Zip Code:</label>
   <input type="text" class="form-control" id="zipcode" onkeypress="return isNumberKey(event)" name="zipcode" maxlength="10" placeholder="99999-9999" required value="<?php echo chop(chunk_split($zipcode,5,"-"),"-");?>">
   <span class="error">* <?php echo $zipcodeErr;?></span>
   <br>
   
   
</div>

   Comment: <textarea name="comment" rows="5" cols="40" maxlength=255><?php echo $comment;?></textarea>
   <br><br>

   <input type="submit" name="submit" value="Submit"> 
</form>

</div>

<?php
echo "<h2>Your Input:</h2>";
echo $LastName;
echo "<br>";
echo $FirstName;
echo "<br>";
echo $MI;
echo "<br>";
echo $DOB;
echo "<br>";
echo $age;
echo "<br>";
echo $comment;
?>


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
 

    document.getElementById("age").innerHTML = "Age: " + age;
}


  <!--
      function isAlphaKey(event)
      {
         
         
         var charCode = event.which || event.keyCode

         if ( charCode > 32 && charCode != 45 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) )
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

<script>
function myFunctiontoUpperCase() {
    var x = document.getElementById("LastName");
    x.value = x.value.toUpperCase();
}
</script>

<script>
function myFunctiontoUpperCase() {
    var x = document.getElementById("FirstName");
    x.value = x.value.toUpperCase();
}
</script>

<script>
function myFunctiontoUpperCase() {
    var x = document.getElementById("MI");
    x.value = x.value.toUpperCase();
}
</script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>
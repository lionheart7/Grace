<?php
session_start();
?>
<!DOCTYPE HTML> 
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="calendar_style.css">

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>


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
$initclientID = $_SESSION["initclientID"];
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
        
        if($row["last_id"]==""){ $ClientID = $initclientID;} else{
        $ClientID = $row["last_id"] + 1;
        echo "last id:" . $row["last_id"] . "New ID: " . $ClientID . "<br>";
        }
    }
} else {
    
    echo "0 results";
}
mysqli_close($conn);

?>


<div data-role="page">
  <div data-role="header">
 <h1>Client Registration</h1>
  </div>
<div data-role="main" class="ui-content">
<h2>Add New Client</h2>
<p><span class="error">* required field.</span></p>
<form name="personal" role="form" method="post" action="add_new_client.php"> 

<div class="form-group">
   <label for="ClientID">Client ID:</label> 
   <input type="text" class="form-control" id="ClientID" name="ClientID" value="<?php echo $ClientID;?>" disabled> 
</div>

<div class="form-group">
   <label for="FirstName">First Name:</label> 
   <input type="text" class="form-control" id="FirstName" onkeypress="return isletterKey(event)" onkeyup="myFunctiontoUpperCasev()" name="FirstName" maxlength="30" placeholder="First Name" value="<?php echo $FirstName;?>" required autofocus data-clear-btn="true">
   <span>* <?php echo $FirstNameErr;?></span>
</div>

<div class="form-group">
   <label for="MI">MI:</label>
   <input type="text" class="form-control" id="MI" onkeypress="return isAlphaMIKey(event)" onkeyup="myFunctiontoUpperCasew()" name="MI" maxlength="1" placeholder="MI" value="<?php echo $MI;?>" autofocus  data-clear-btn="true">
   <span><?php echo $MIErr;?></span>
</div>

<div class="form-group">
   <label for="LastName">Last Name:</label> 
   <input type="text" class="form-control" id="LastName" onkeypress="return isAlphaKey(event)" onkeyup="myFunctiontoUpperCaseu()" name="LastName" maxlength="30" placeholder="Last Name" value="<?php echo $LastName;?>" required autofocus data-clear-btn="true">
   <span>* <?php echo $LastNameErr;?></span>
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
      </select>
    </div>


<div class="form-group">
   <label for="DOB">Date of Birth:</label>
   <input type="date" class="form-control" id="DOB" name="DOB" placeholder="mm/dd/yyyy" onkeypress="return isDateKey(event)" onkeyup="return myAgeValidation()" onclick="myFunctionDOB()" onkeydown="return addSlashes(this)" maxlength="10" value="<?php echo date_format($DOB,"m/d/Y");?>" required autofocus data-clear-btn="true">
   <br>
   
   <img src="/image/calendar_icon.jpg" alt="calendar" onclick="ds_sh(DOB)">
   <span class="error">*<?php echo $DOBErr;?></span>
   <table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
<tr><td id="ds_calclass">
</td></tr>
</table><br>
     
   <label onclick="return myAgeValidation()">Age: </label>
   <input type="number" Class="form-control" id="age" name="age" value="<?php echo $age;?>" disabled>
    
 
   
</div>

<div class="form-group">
   <label for="ClientSSN">Client Social Security Number:</label>
   <input type="text" class="form-control" id="ClientSSN" onKeyPress="return isNumberKey(event)" onKeyDown="return adddashes(this)" name="ClientSSN" maxlength="11" placeholder="999-99-9999" required value="<?php echo $ClientSSN;?>" autofocus data-clear-btn="true"> 
   <span>* <?php echo $ClientSSNErr;?></span>
</div>

<div class="form-group">
   <label for="MedicareNum">Medicare Number:</label>
   <input type="text" class="form-control" id="MedicareNum" onkeypress="return isAlphaNumericKey(event)" name="MedicareNum" maxlength="12" placeholder="Medicare Number" onkeyup="myFunctiontoUpperCaseMedicareNum()" autofocus data-clear-btn="true">
</div>

<div class="form-group">
   <label for="MedicaidNum">Medicaid Number:</label>
   <input type="text" class="form-control" id="medicaidNum" placeholder="Medicaid Number" name="MedicaidNum"  autofocus data-clear-btn="true">
</div>   


<div class="form-group" class="ui-content">
 <fieldset class="ui-field-contain" data-type="horizontal">
   <legend>Gender:</legend>
   <label for="female">Female</label>
   <input type="radio" name="Gender" id="female" <?php if (isset($Gender) && $Gender=="2") echo "checked";?>  value="2">
   <label for="male">Male</label>  
   <input type="radio" name="Gender" id="male" <?php if (isset($Gender) && $Gender=="1") echo "checked";?>  value="1">
   <span>* <?php echo $GenderErr;?></span>
 </fieldset>
</div>

<div class="form-group">
   <label for="Address1">Street Address1:</label>
   <input type="text" class="form-control" id="Street1" onkeypress="return isAlphaNumericKey(event)" name="Street1" placeholder="Street Address1" onkeyup="myFunctiontoUpperCasex()" value="<?php echo $Street1;?>" autofocus data-clear-btn="true">
   <span><?php echo $Address1Err;?></span>
</div>

<div class="form-group">
   <label for="Address2">Street Address2:</label>
   <input type="text" class="form-control" id="Street2" onkeypress="return isAlphaNumericKey(event)" name="Street2" placeholder="Street Address2" onkeyup="myFunctiontoUpperCasey()" value="<?php echo $Street2;?>" autofocus data-clear-btn="true">
   <span><?php echo $Address2Err;?></span>
</div>

<div class="form-group">
   <label for="City">City:</label>
   <input type="text" class="form-control" id="City" onkeypress="return isAlphaNumericKey(event)" name="City" placeholder="City" onkeyup="myFunctiontoUpperCasez()" value="<?php echo $City;?>" autofocus data-clear-btn="true">
   <span><?php echo $CityErr;?></span>
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
   <input type="text" class="form-control" id="ZipCode" onkeypress="return isNumberKey(event)" onkeydown="return zipadddashes(this)" name="ZipCode" maxlength="10" placeholder="99999-9999" required value="<?php echo chop(chunk_split($ZipCode,5,"-"),"-");?>" autofocus data-clear-btn="true">
   <span>* <?php echo $ZipCodeErr;?></span>
</div>

<div class="form-group">
   <label for="clienttelno">Client Tel No:</label>
   <input type="text" class="form-control" id="clienttelno" onkeypress="return istelKey(event)" onkeydown="return mytel(this)" name="clienttelno" maxlength="14" placeholder="(999) 999-9999" autofocus data-clear-btn="true">
   <span><?php echo $ClienttelnoErr;?></span>
</div>

<div class="form-group">
   <label for="clientfaxno">Client Fax No:</label>
   <input type="text" class="form-control" id="clientfaxno" onkeypress="return isNumberKey(event)" onkeydown="return myfax(this)" name="clientfaxno" maxlength="14" placeholder="(999) 999-9999" autofocus data-clear-btn="true">
   <span><?php echo $ClientfaxnoErr;?></span>
</div>

<div class="form-group">
   <label for="comments">Comments:</label>
   <textarea name="comments" rows="5" cols="160"  maxlength=255></textarea>
</div>
<div class="g-recaptcha" data-sitekey="6LcJxQQTAAAAAELfVj9ZbjgsHQGTlwcmHWAAEY0S"></div>

   <input type="submit" id="demo" name="submit" value="Submit" onclick="affirm()"> 



</form>

</div>


</div>








<script>
function myFunctionDOB() {
    var x = document.getElementById("DOB").value;
    document.getElementById("#age").value = getAge(x);
}
</script>


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
  
  var inputDate = Date.parse(document.personal.DOB.value);
      
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
    document.getElementById("age").value = age;

    //document.getElementById("age").innerHTML = "Age: " + age; 
    //document.getElementById("edad").value = <?php echo $age;?>;
    //document.getElementById("age").value = document.getElementById("edad").value;
}

  <!--
      function isAlphaKey(event)
      {
         
         
         var charCode = event.which || event.keyCode || event.charCode; 

         if ( charCode > 31 && charCode != 45 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) )
            return false;

   else     
     
         return true;
      }
      //-->

   </SCRIPT>

   <SCRIPT language=Javascript>
      <!--

      function istelKey(evt)
      {
        var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;

      }


      function isNumberKey(evt)
      {
       var charCode = (evt.which) ? evt.which : event.keyCode
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
         var charCode = event.which || event.keyCode || event.charCode; 
         if (charCode > 31 && charCode != 47 && (charCode < 48 || charCode > 57 ) )
            return false;
else
         return true;
      }
      //-->
   </SCRIPT>

   <SCRIPT language=Javascript>
      <!--
      function isletterKey(event)
      {
         var charCode = event.which || event.keyCode || event.charCode; 
         if ( charCode > 32 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) )
            return false;
else
         return true;
      }
      //-->
   </SCRIPT>

<SCRIPT language=Javascript>
      <!--
      function isAlphaMIKey(event)
      {
         var charCode = event.which || event.keyCode || event.charCode; 
         if ( charCode > 31 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) )
            return false;
else
         return true;
      }
      //-->
   </SCRIPT>

<script>
function myFunctiontoUpperCaseMedicareNum() {
    var MedNum = document.getElementById("MedicareNum");
    MedNum.value = MedNum.value.toUpperCase();
}
</script>

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



function mytel(input) {
    var dash = input.value;
    if (dash.match(/^\d{3}$/) !== null) {
        input.value = '('+ dash + ') ';
    } else if (dash.match(/^\D\d{3}\D \d{3}$/) !== null) {
        input.value = dash + '-';
    }
}


function myfax(input) {
    var dash = input.value;
    if (dash.match(/^\d{3}$/) !== null) {
        input.value = '('+ dash + ') ';
    } else if (dash.match(/^\D\d{3}\D \d{3}$/) !== null) {
        input.value = dash + '-';
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

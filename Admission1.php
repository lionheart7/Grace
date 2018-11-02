<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body onload="cDate()">

<div data-role="page">
  <div data-role="header">
  <h1>Collapsible Forms</h1>
  </div>

  <div data-role="main" class="ui-content">
    <form method="post" action="kahon.php">
      <fieldset data-role="collapsible">
        <legend>Admission</legend>
          <label for="SOC">Admission SOC Date:</label>
          <input type="hidden" name="SOC" id="SOC">
          <input type="text" name="textsoc" id="textsoc"  oninput="calculatedate()" onkeydown="return addSlashes(this)" maxlength="10" placeholder="mm/dd/yyyy" onkeypress="return isDateKey(event)" required autofocus data-clear-btn="true">
          <label for="ESD">Episode Start Date:</label>
          <input type="date" name="episode_start" id="episode_start" required autofocus data-clear-btn="true">
          <label for="EED">Episode End Date:</label>
          <input type="hidden" name="episode_end" id="episode_end">
          <input type="text" name="epend" id="epend" required autofocus data-clear-btn="true">
          <label for="FBV">First Billable Visit:</label>
          <input type="date" name="FBV" id="FBV" required autofocus data-clear-btn="true">
<button onclick="myFunction()">Try it</button>

<p id="ep"></p>
<p id="ep1"></p>
<p id="ep2"></p>
<p id="ep3"></p>
<p id="ep4"></p>
<p id="ep5"></p>
<p id="ep6"></p>
<p id="ep7"></p>
<p id="ep8"></p>
<p id="ep9"></p>


      <input type="submit" data-inline="true" value="Submit">
      </fieldset>
    </form>
  </div>
</div>


<script>

function cDate() {
//var o = new Date();
//var SOCmo=SOC.getUTCMonth()+1;
//var SOCdd=SOC.getUTCDate();
//var SOCyy=SOC.getUTCFullYear();
//var curdatestr=String(SOCyy)+"/"+String(SOCmo)+"/"+String(SOCdd);

//document.getElementById("SOC").value=new Date();

//document.getElementById("SOC").value=SOCyy+"/"+SOCmo+"/"+SOCdd;

    
}


function calculatedate(){
var isIphone = navigator.userAgent.indexOf("iPhone") != -1 ;
//var isIod = navigator.userAgent.indexOf("iPod") != -1 ;
//var isIpad = navigator.userAgent.indexOf("iPad") != -1 ;
var isAndroid = navigator.userAgent.indexOf("Android") != -1 ;
//var isandroid = navigator.userAgent.indexOf("android") != -1 ;
var isWindows = navigator.userAgent.indexOf("Windows") != -1 ;
// now set one variable for all iOS devices
//var isIos = isIphone || isIpod || isIpad ; 
//var isAndroid = isAndroid || isandroid ;

if(isWindows==1){
andriodcalculatedate();
}
if(isIphone==1){
ioscalculatedate();
}
else if(isAndroid==1){
andriodcalculatedate();
}

}

function andriodcalculatedate(){

var SOC = document.getElementById("SOC").value=new Date();
var SOCmo=SOC.getUTCMonth()+1;
var SOCdd=SOC.getUTCDate();
var SOCyy=SOC.getUTCFullYear();
document.getElementById("SOC").value=SOCyy+"/"+SOCmo+"/"+SOCdd;
document.getElementById("textsoc").value=SOCmo+"/"+SOCdd+"/"+SOCyy;

document.getElementById("episode_start").value=document.getElementById("SOC").value;
document.getElementById("FBV").value=document.getElementById("SOC").value;

var d = document.getElementById("SOC").value;
var end = new Date(d);
end.setDate(end.getDate() + 59);

var m   = end.getUTCMonth()+1;
var dey = end.getUTCDate();
var y   = end.getUTCFullYear();

var petsa = m+"/"+dey+"/"+y;
var petsa1 = y+"-"+m+"-"+dey;
document.getElementById("episode_end").value=petsa1;
document.getElementById("epend").value=petsa;

}

function ioscalculatedate(){



document.getElementById("episode_start").value=document.getElementById("SOC").value;
document.getElementById("FBV").value=document.getElementById("SOC").value;

var d = document.getElementById("SOC").value;
var end = new Date(d);
end.setDate(end.getDate() + 59);

var m   = end.getUTCMonth()+1;
var dey = end.getUTCDate();
var y   = end.getUTCFullYear();

var month = new Array();
 month[0] = "Jan";
 month[1] = "Feb";
 month[2] = "Mar";
 month[3] = "Apr";
 month[4] = "May";
 month[5] = "Jun";
 month[6] = "Jul";
 month[7] = "Aug";
 month[8] = "Sep";
 month[9] = "Oct";
 month[10] = "Nov";
 month[11] = "Dec";
var n = month[end.getUTCMonth()];



var petsa = n+" "+dey+", "+y;
var petsa1 = y+"-"+m+"-"+dey;

document.getElementById("episode_end").value=petsa1;
document.getElementById("epend").value=petsa;

}

</script>

<script>
function myFunction() {
    var x = document.getElementById("epend").value;
    document.getElementById("ep").innerHTML = x;
 var y = document.getElementById("SOC").value;
    document.getElementById("ep1").innerHTML = y;
 var z = document.getElementById("episode_start").value;
    document.getElementById("ep2").innerHTML = z;
 var a = document.getElementById("FBV").value;
    document.getElementById("ep3").innerHTML = a;
var b = document.getElementById("episode_end").value;
    document.getElementById("ep4").innerHTML = b;

 var x = document.getElementById("epend").value;
    document.getElementById("ep5").innerHTML = new Date(x);
 var y = document.getElementById("SOC").value;
    document.getElementById("ep6").innerHTML = new Date(y);
 var z = document.getElementById("episode_start").value;
    document.getElementById("ep7").innerHTML = new Date(z);
 var a = document.getElementById("FBV").value;
    document.getElementById("ep8").innerHTML = new Date(a);
var b = document.getElementById("episode_end").value;
    document.getElementById("ep9").innerHTML = new Date(b);
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
         
         
         var charCode = event.which || event.keyCode

         if ( charCode > 31 && charCode != 45 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) )
            return false;

        
     
         return true;
      }
      //-->

   </SCRIPT>

   <SCRIPT language=Javascript>
      <!--

      function istelKey(event)
      {
         var charCode = event.which || event.keyCode
         if (charCode > 31 && ( charCode < 48 || charCode > 57))
            return false;

         return true;
      }


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
        input.value = dash + '-';
    } else if (dash.match(/^\d{3}-\d{3}$/) !== null) {
        input.value = dash + '-';
    }
}


function myfax(input) {
    var dash = input.value;
    if (dash.match(/^\d{3}$/) !== null) {
        input.value = dash + '-';
    } else if (dash.match(/^\d{3}-\d{3}$/) !== null) {
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





</body>
</html>


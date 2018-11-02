<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

 <script>
 function setvalue(code,dsc)
   {
   document.getElementById("primary").value=document.getElementById(code).value;
   document.getElementById("DESC").value=document.getElementById(dsc).value;
   }
 </script>

</head>
<body>

<div data-role="page" id="pageone">
  <div data-role="header"  data-position="fixed">
    <h1>ICD-10 Version:2016 </h1>
<div data-role="main" class="ui-content">
    <form method="post" action="http://gracewaretechllc.com/changeicd.php">
      <div class="ui-field-contain">
 
        <legend><h2>Alpha Index ICD10 Diagnosis</h2></legend>
                 <label for="primary">Primary ICD10 Code:</label>
          
          <input type="text" name="M1021_PRIMARY_DIAG_ICD" id="primary" value="" readonly>
        <label for="DESC">Primary Diagnosis Description:</label>
        <textarea name="M1021_PRIMARY_DESC_ICD" id="DESC" value="" readonly></textarea>
    
       <a href="http://gracewaretechllc.com/tabicd.php" target="_self">Tabular</a> 
      <input type="submit" data-inline="true" value="Save">
      <input type="reset" data-inline="true" value="Reset">
  </div>
    </form> 
    
  </div>




 
  </div>
    <form class="ui-filterable">
      <input id="myFilter" data-type="search">
    </form>
    <ul data-role="listview" data-filter="true" data-input="#myFilter" data-inset="true">
     
<li data-filtertext="amyotrophy E11.44"><a href="http://gracewaretechllc.com/E11.44.php">
<p>
        <label for="amyotrophy">amyotrophy E11.44</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="amyotrophy" value="E11.44" onclick="setvalue('amyotrophy','E11.44_desc')">
        <input type="hidden" name="desc" id="E11.44_desc" value="amyotrophy">
</p>
</a>
</li>

<li data-filtertext="arthropathy NEC E11.618"><a href="http://gracewaretechllc.com/E11.618.php">
<p>
        <label for="arthropathy_NEC_E11_618">arthropathy NEC E11.618</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="arthropathy_NEC_E11_618" value="E11.618" onclick="setvalue('arthropathy_NEC_E11_618','E11.618_desc')">
        <input type="hidden" name="desc" id="E11.618_desc" value="arthropathy NEC">
</p>
</a>
</li>
      
<li data-filtertext="autonomic &#40;poly&#41; E11.43"><a href="http://gracewaretechllc.com/E11.43.php">
<p>   
        <label for="autonomic_poly">autonomic &#40;poly&#41; E11.43</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="autonomic_poly" value="E11.43" onclick="setvalue('autonomic_poly','E11.43_desc')">
        <input type="hidden" name="desc" id="E11.43_desc" value="autonomic &#40;poly&#41;">
</p>
</a>
</li>




   </ul> 
  </div>

</body>
</html>
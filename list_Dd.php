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
    <form method="post" action="http://gracewaretechllc.com/changeicd.php" >
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
      <input id="myFilter" data-type="search" placeholder="Search for diagnosis.." data-position="fixed">
    </form>
    <ul data-role="listview" data-filter="true" data-input="#myFilter" data-inset="true">
     
 <li data-filtertext="Daae &#40;-Finsen&#41; disease &#40;epidemic pleurodynia&#41; B33.0"><a href="http://gracewaretechllc.com/B33.0.php"><p>


 <label for="B33.0">Daae &#40;-Finsen&#41; disease &#40;epidemic pleurodynia&#41; B33.0</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="B33.0" value="B33.0" onclick="setvalue('B33.0','B33.0_desc')">
       
        <input type="hidden" name="desc" id="B33.0_desc" value="Daae (-Finsen) disease (epidemic pleurodynia)">
</p></a></li>

 <li data-filtertext="Da Costa&#39;s syndrome F45.8"><a href="http://gracewaretechllc.com/F45.8.php"><p>


 <label for="F45.8">Da Costa&#39;s syndrome F45.8</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="F45.8" value="F45.8" onclick="setvalue('F45.8','F45.8_desc')">
       
        <input type="hidden" name="desc" id="F45.8_desc" value="Da Costa&#39;s syndrome"></input>
</p></a></li>
      
 <li data-filtertext="Dabney's grip B33.0"><a href="http://gracewaretechllc.com/B33.0.php">
<p>


 <label for="DabneyB33.0">Dabney&#39;s grip B33.0</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="DabneyB33.0" value="B33.0" onclick="setvalue('DabneyB33.0','DabneyB33.0_desc')">
       
        <input type="hidden" name="desc" id="DabneyB33.0_desc" value="Dabney's grip">
</p></a></li>

 <li data-filtertext="Diabetes&#39; diabetic &#40;mellitus&#41; &#40;sugar&#41; E11.9"><a href="list_Diabetes.php">
 
<p>


        <label for="diabetes">Diabetes&#39; diabetic &#40;mellitus&#41; &#40;sugar&#41; E11.9</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="diabetes" value="E11.9" onclick="setvalue('diabetes','diabetes_desc')">
       
        <input type="hidden" name="desc" id="diabetes_desc" value="Type 2 diabetes mellitus without complications">
</p></a></li>

 <li data-filtertext="Type 2 diabetes mellitus with other diabetic kidney complication E11.29"><a href="http://gracewaretechllc.com/E11.29.php">
<p>


 <label for="E11.29">Type 2 diabetes mellitus with other diabetic kidney complication - E11.29</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="E11.29" value="E11.29" onclick="setvalue('E11.29','E11.29_desc')">
       
        <input type="hidden" name="desc" id="E11.29_desc" value="Type 2 diabetes mellitus with other diabetic kidney complication">
</p></a></li>

 <li data-filtertext="Type 2 diabetes mellitus with unspecified diabetic retinopathy with macular edema E11.311"><a href="http://gracewaretechllc.com/E11p311.php"><p>


 <label for="E11.311">Type 2 diabetes mellitus with unspecified diabetic retinopathy with macular edema - E11.311</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="E11.311" value="E11.311" onclick="setvalue('E11.311','E11.311_desc')">
       
        <input type="hidden" name="desc" id="E11.311_desc" value="Type 2 diabetes mellitus with unspecified diabetic retinopathy with macular edema">
</p></a></li>

 <li data-filtertext="Type 2 diabetes mellitus with unspecified diabetic retinopathy without macular edema E11.319"><a href="http://gracewaretechllc.com/E11p319.php"><p class="t">


 <label for="E11.319">Type 2 diabetes mellitus with unspecified diabetic retinopathy without macular edema - E11.319</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="E11.319" value="E11.319" onclick="setvalue('E11.319','E11.319_desc')">
       
        <input type="hidden" name="desc" id="E11.319_desc" value="Type 2 diabetes mellitus with unspecified diabetic retinopathy without macular edema">
</p></a></li>

 <li data-filtertext="Type 2 diabetes mellitus with mild nonproliferative diabetic retinopathy with macular edema E11.321">
<a href="http://gracewaretechllc.com/E11p321.php">
<p>


 <label for="E11.321">Type 2 diabetes mellitus with mild nonproliferative diabetic retinopathy with macular edema - E11.321</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="E11.321" value="E11.321" onclick="setvalue('E11.321','E11.321_desc')">
       
        <input type="hidden" name="desc" id="E11.321_desc" value="Type 2 diabetes mellitus with mild nonproliferative diabetic retinopathy with macular edema">
</p></a></li>

 <li data-filtertext="Type 2 diabetes mellitus with mild nonproliferative diabetic retinopathy without macular edema E11.329">
<a href="http://gracewaretechllc.com/E11p329.php">
<p>


 <label for="E11.329">Type 2 diabetes mellitus with mild nonproliferative diabetic retinopathy without macular edema - E11.329</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="E11.329" value="E11.329" onclick="setvalue('E11.329','E11.329_desc')">
    
        <input type="hidden" name="desc" id="E11.329_desc" value="Type 2 diabetes mellitus with mild nonproliferative diabetic retinopathy without macular edema">
</p></a></li>

   </ul> 
  </div>
</div> 

</body>
</html>
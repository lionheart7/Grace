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
   <form method="post" action="http://gracewaretechllc.com/changeicd.php" >

        <legend><h2>Tabular Index ICD10 Diagnosis</h2> </legend>
          <label for="primary">Primary ICD10 Code:</label>
          
          <input type="text" name="M1021_PRIMARY_DIAG_ICD" id="primary" value="" readonly>
          <label for="DESC">Primary Diagnosis Description:</label>
        <textarea name="M1021_PRIMARY_DESC_ICD" id="DESC" readonly></textarea>
          <a href="http://gracewaretechllc.com/keyword.php" target="_self">Index</a> 
      <input type="submit" data-inline="true" value="Save">
      <input type="reset" data-inline="true" value="Reset" >
    
    </form>

  </div>

  <div data-role="main" class="ui-content">
    <div data-role="collapsibleset">

 


       
      <div data-role="collapsible">
        <h3>1 Certain infectious and parasitic<br> diseases (A00-B99)</h3>
        <p>

Use Additional <ul><li>
    code to identify resistance to antimicrobial drugs (Z16.-) </li></ul>

Type 1 Excludes  <ul><li>
    certain localized infections - see body system-related chapters</li></ul><br><br>

Type 2 Excludes
<ul><li>carrier or suspected carrier of infectious disease (Z22.-)</li>
<li>infectious and parasitic diseases complicating pregnancy, childbirth and the puerperium (O98.-)</li>
<li>infectious and parasitic diseases specific to the perinatal period (P35-P39)</li>
<li>influenza and other acute respiratory infections (J00-J22)</li></ul>
Includes  <ul><li>
    diseases generally recognized as communicable or transmissible</li></ul>

</p>
      <div data-role="collapsible">
        <h3>A00-A09 Intestinal infectious diseases</h3>
        <p></p>
      <div data-role="collapsible">
        <h3>A00 Cholera</h3>
        <p></p>
 <form method="post" action="">
      <fieldset data-role="controlgroup">
      <legend>Select Primary Diagnosis:</legend>
        <label for="A00.0"><p>A00.0 Cholera due to Vibrio cholerae 01, biovar cholerae</p></label>
        <input type="hidden" name="desc" id="A00.0_desc" value="Cholera due to Vibrio cholerae 01, biovar cholerae"></input>
         
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="A00.0" value="A00.0" onclick="setvalue('A00.0','A00.0_desc')">
        <label for="A00.1">A00.1 Cholera due to Vibrio cholerae 01, biovar eltor</label>
        <input type="hidden" name="desc" id="A00.1_desc" value="Cholera due to Vibrio cholerae 01, biovar eltor"></input>

        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="A00.1" value="A00.1" onclick="setvalue('A00.1','A00.1_desc')">
        <label for="A00.9">A00.9 Cholera, unspecified</label>
        <input type="hidden" name="desc" id="A00.9_desc" value="Cholera, unspecified"></input>

        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="A00.9" value="A00.9" onclick="setvalue('A00.9','A00.9_desc')">
      </fieldset>
       
    </form>
      </div>
      </div>
      </div>
      <div data-role="collapsible">
        <h3>2 Neoplasms (C00-D49)</h3>
        <p>I'm the expanded content.</p>
 <form method="post" action="">
      <fieldset data-role="controlgroup">
      <legend>Select Primary Diagnosis:</legend>
        <label for="C00.0">A00.0 Cholera due to Vibrio cholerae 01, biovar cholerae</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="C00.0" value="A00.0">
        <label for="C00.1">A00.1 Cholera due to Vibrio cholerae 01, biovar eltor</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="C00.1" value="A00.1">
        <label for="C00.9">A00.9 Cholera, unspecified</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="C00.9" value="A00.9">	
      </fieldset>
        <input type="submit" data-inline="true" value="Save">
    </form>
      </div>
      <div data-role="collapsible">
        <h3><p>3 Diseases of the blood and
            blood-forming organs and certain
            disorders involving the immune
            mechanism (D50-D89)</p></h3>
        
      </div>
      <div data-role="collapsible">
        <h3>4 Endocrine, nutritional and metabolic<br> diseases (E00-E89)</h3>
        <p>I'm the expanded content.</p>
      </div>
   <div data-role="collapsible">
        <h3>5 Mental, Behavioral and<br>Neurodevelopmental disorders<br>(F01-F99)</h3>
        <p>I'm the expanded content.</p>
      </div>
      <div data-role="collapsible">
        <h3>6 Diseases of the nervous system (G00-G99)</h3>
        <p>I'm the expanded content.</p>
      </div>
      <div data-role="collapsible">
        <h3>7 Diseases of the eye and adnexa (H00-H59)</h3>
        <p>I'm the expanded content.</p>
      </div>
      <div data-role="collapsible">
        <h3>8 Diseases of the ear and mastoid process (H60-H95)</h3>
        <p>I'm the expanded content.</p>
      </div>
   <div data-role="collapsible">
        <h3>9 Diseases of the circulatory system (I00-I99)</h3>
        <p>I'm the expanded content.</p>
      </div>
      <div data-role="collapsible">
        <h3>10 Diseases of the respiratory system (J00-J99)</h3>
        <p>I'm the expanded content.</p>
      </div>
      <div data-role="collapsible">
        <h3>11 Diseases of the digestive system (K00-K95)</h3>
        <p>I'm the expanded content.</p>
      </div>
      <div data-role="collapsible">
        <h3>12 Diseases of the skin and subcutaneous tissue (L00-L99)</h3>
        <p>I'm the expanded content.</p>
      </div>
   <div data-role="collapsible">
        <h3>13 Diseases of the musculoskeletal system and connective tissue (M00-M99)</h3>
        <p>I'm the expanded content.</p>
      </div>
      <div data-role="collapsible">
        <h3>14 Diseases of the genitourinary system (N00-N99)</h3>
        <p>I'm the expanded content.</p>
      </div>
      <div data-role="collapsible">
        <h3>15 Pregnancy, childbirth and the puerperium (O00-O9A)</h3>
        <p>I'm the expanded content.</p>
      </div>
      <div data-role="collapsible">
        <h3>16 Certain conditions originating in the perinatal period (P00-P96)</h3>
        <p>I'm the expanded content.</p>
      </div>
   <div data-role="collapsible">
        <h3>17 Congenital malformations, deformations and chromosomal abnormalities (Q00-Q99)</h3>
        <p>I'm the expanded content.</p>
      </div>
      <div data-role="collapsible">
        <h3>18 Symptoms, signs and abnormal clinical and laboratory findings, not elsewhere classified (R00-R99)</h3>
        <p>I'm the expanded content.</p>
      </div>
      <div data-role="collapsible">
        <h3>19 Injury, poisoning and certain other consequences of external causes (S00-T88)</h3>
        <p>I'm the expanded content.</p>
      </div>
      <div data-role="collapsible">
        <h3>20 External causes of morbidity (V00-Y99)</h3>
        <p>I'm the expanded content.</p>
      </div>
   <div data-role="collapsible">
        <h3>21 Factors influencing health status and contact with health services (Z00-Z99)</h3>
        <p>I'm the expanded content.</p>
      </div>
      <div data-role="collapsible">
        <h3>22 Codes for special purposes</h3>
        <p>I'm the expanded content.</p>
      </div>

    </div>


  <div data-role="footer">
    <h1>Gracewaretechllc.com</h1>
  </div>

</div>

</body>
</html>


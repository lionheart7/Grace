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
<div data-role="header" data-position="fixed">
 
    <h2>ICD-10 Version:2016</h2>

    

      <div data-role="main" class="ui-field-contain" data-position="fixed">
 <form method="post" action="http://gracewaretechllc.com/changeicd.php">
        <legend><h2>Alpha Index ICD10</h2></legend>
                 <label for="primary">Primary ICD10 Code:</label>
          
          <input type="text" name="M1021_PRIMARY_DIAG_ICD" id="primary" value="" readonly>
        <label for="DESC">Primary Diagnosis Description:</label>
        <textarea name="M1021_PRIMARY_DESC_ICD" id="DESC" readonly></textarea>
    
       <a href="http://gracewaretechllc.com/tabicd.php" target="_self">Tabular</a> 
      <input type="submit" data-inline="true" value="Save">
      <input type="reset" data-inline="true" value="Reset">
  
    </form> 
   </div> 

  </div>



 

  <div data-role="main" class="ui-content">
<p><h3>Type search keyword for Diagnosis</h3></p>

<div data-role="collapsibleset">
      <div data-role="collapsible">
        <h3>With...</h3>
        <p></p>
         
    <form class="ui-filterable">
      <input id="myFilter1" data-type="search" placeholder="Search Keyword..">
    </form>
    <ul data-role="listview" data-filter="true" data-input="#myFilter1" data-inset="true">
<li data-filtertext="Aarskog's syndrome Q87.1"><a href="http://gracewaretechllc.com/Q87.1.php">
<p>
        <label for="Aarskog">Aarskog's syndrome Q87.1</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="Aarskog" value="Q87.1" onclick="setvalue('Aarskog','Q87.1_desc') " >
        <input type="hidden" name="desc" id="Q87.1_desc" value="Congenital malformation syndromes predominantly associated with short stature">
</p>
</a>
</li>

<li data-filtertext=""Type 2 diabetes mellitus with other diabetic arthropathy NEC E11.618"><a href="http://gracewaretechllc.com/E11.618.php">
<p>
        <label for="arthropathy_NEC_E11_618">arthropathy NEC E11.618</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="arthropathy_NEC_E11_618" value="E11.618" onclick="setvalue('arthropathy_NEC_E11_618','E11.618_desc')">
        <input type="hidden" name="desc" id="E11.618_desc" value="Type 2 diabetes mellitus with other diabetic arthropathy">
</p>
</a>
</li>
      
<li data-filtertext="Type 2 diabetes mellitus with diabetic autonomic &#40;poly&#41; E11.43"><a href="http://gracewaretechllc.com/E11.43.php">
<p>   
        <label for="autonomic_poly_E11_43">autonomic &#40;poly&#41; E11.43</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="autonomic_poly_E11_43" value="E11.43" onclick="setvalue('autonomic_poly_E11_43','autonomic_poly_E11_43_desc')">
        <input type="hidden" name="desc" id="autonomic_poly_E11_43_desc" value="Type 2 diabetes mellitus with diabetic autonomic &#40;poly&#41;neuropathy">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with diabetic cataract E11.36"><a href="http://gracewaretechllc.com/E11.36.php">
<p>   
        <label for="cataract_E11_36">cataract E11.36</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="cataract_E11_36" value="E11.36" onclick="setvalue('cataract_E11_36','E11_36_desc')">
        <input type="hidden" name="desc" id="E11_36_desc" value="Type 2 diabetes mellitus with diabetic cataract">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with diabetic neuropathic arthropathy Charcot's joints E11.610"><a href="http://gracewaretechllc.com/E11.610.php">
<p>   
        <label for="Charcots_joints_E11_610">Charcot's joints E11.610</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="Charcots_joints_E11_610" value="E11.610" onclick="setvalue('Charcots_joints_E11_610','E11_610_desc')">
        <input type="hidden" name="desc" id="E11_610_desc" value="Type 2 diabetes mellitus with diabetic neuropathic arthropathy">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with diabetic chronic kidney disease E11.22"><a href="http://gracewaretechllc.com/E11.22.php">
<p>   
        <label for="chronic_kidney_disease_E11_22">chronic kidney disease E11.22</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="chronic_kidney_disease_E11_22" value="E11.22" onclick="setvalue('chronic_kidney_disease_E11_22','E11_22_desc')">
        <input type="hidden" name="desc" id="E11_22_desc" value="Type 2 diabetes mellitus with diabetic chronic kidney disease">
</p>
</a>
</li>

<li data-filtertext="circulatory complication NEC E11.59"><a href="http://gracewaretechllc.com/E11.59.php">
<p>   
        <label for="circulatory_complication_NEC_E11_59">circulatory complication NEC E11.59</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="circulatory_complication_NEC_E11_59" value="E11.59" onclick="setvalue('circulatory_complication_NEC_E11_59','E11_59_desc')">
        <input type="hidden" name="desc" id="E11_59_desc" value="Type 2 diabetes mellitus with other circulatory complications">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with unspecified complications E11.8"><a href="http://gracewaretechllc.com/E11.8.php">
<p>   
        <label for="complication_E11_8">complication E11.8</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="complication_E11_8" value="E11.8" onclick="setvalue('complication_E11_8','E11_8_desc')">
        <input type="hidden" name="desc" id="E11_8_desc" value="Type 2 diabetes mellitus with unspecified complications">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with other specified complication specified NEC E11.69"><a href="http://gracewaretechllc.com/E11.69.php">
<p>   
        <label for="specified_NEC_E11_69">specified NEC E11.69</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="specified_NEC_E11_69" value="E11.69" onclick="setvalue('specified_NEC_E11_69','specified_NEC_E11_69_desc')">
        <input type="hidden" name="desc" id="specified_NEC_E11_69_desc" value="Type 2 diabetes mellitus with other specified complication">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with diabetic dermatitis E11.620 necrobiosis lipoidica"><a href="http://gracewaretechllc.com/E11.620.php">
<p>   
        <label for="dermatitis_E11_620">dermatitis E11.620</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="dermatitis_E11_620" value="E11.620" onclick="setvalue('dermatitis_E11_620','E11_620_desc')">
        <input type="hidden" name="desc" id="E11_620_desc" value="Type 2 diabetes mellitus with diabetic dermatitis">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with foot ulcer E11.621"><a href="http://gracewaretechllc.com/E11.621.php">
<p>   
        <label for="foot_ulcer_E11_621">foot ulcer E11.621</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="foot_ulcer_E11_621" value="E11.621" onclick="setvalue('foot_ulcer_E11_621','E11_621_desc')">
        <input type="hidden" name="desc" id="E11_621_desc" value="Type 2 diabetes mellitus with foot ulcer">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with diabetic peripheral angiopathy with gangrene E11.52"><a href="http://gracewaretechllc.com/E11.52.php">
<p>   
        <label for="gangrene_E11_52">gangrene E11.52</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="gangrene_E11_52" value="E11.52" onclick="setvalue('gangrene_E11_52','E11_52_desc')">
        <input type="hidden" name="desc" id="E11_52_desc" value="Type 2 diabetes mellitus with diabetic peripheral angiopathy with gangrene">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with diabetic autonomic (poly)neuropathy gastroparesis E11.43"><a href="http://gracewaretechllc.com/E11.43.php">
<p>   
        <label for="gastroparesis_E11_43">gastroparesis E11.43</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="gastroparesis_E11_43" value="E11.43" onclick="setvalue('gastroparesis_E11_43','gastroparesis_E11_43_desc')">
        <input type="hidden" name="desc" id="gastroparesis_E11_43_desc" value="Type 2 diabetes mellitus with diabetic autonomic (poly)neuropathy">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with diabetic nephropathy glomerulonephrosis, intracapillary E11.21"><a href="http://gracewaretechllc.com/E11.21.php">
<p>   
        <label for="glomerulonephrosis_intracapillary_E11_21">glomerulonephrosis, intracapillary E11.21</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="glomerulonephrosis_intracapillary_E11_21" value="E11.21" onclick="setvalue('glomerulonephrosis_intracapillary_E11_21','glomerulonephrosis_intracapillary_E11_21_desc')">
        <input type="hidden" name="desc" id="glomerulonephrosis_intracapillary_E11_21_desc" value="Type 2 diabetes mellitus with diabetic nephropathy">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with hyperglycemia E11.65"><a href="http://gracewaretechllc.com/E11.65.php">
<p>   
        <label for="hyperglycemia_E11_65">hyperglycemia E11.65</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="hyperglycemia_E11_65" value="E11.65" onclick="setvalue('hyperglycemia_E11_65','hyperglycemia_E11_65_desc')">
        <input type="hidden" name="desc" id="hyperglycemia_E11_65_desc" value="Type 2 diabetes mellitus with hyperglycemia">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with hyperosmolarity without nonketotic hyperglycemic-hyperosmolar coma (NKHHC) hyperosmolarity E11.00"><a href="http://gracewaretechllc.com/E11.00.php">
<p>   
        <label for="hyperosmolarity_E11_00">hyperosmolarity E11.00</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="hyperosmolarity_E11_00" value="E11.00" onclick="setvalue('hyperosmolarity_E11_00','hyperosmolarity_E11_00_desc')">
        <input type="hidden" name="desc" id="hyperosmolarity_E11_00_desc" value="Type 2 diabetes mellitus with hyperosmolarity without nonketotic hyperglycemic-hyperosmolar coma (NKHHC)">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with hyperosmolarity with coma E11.01"><a href="http://gracewaretechllc.com/E11.01.php">
 <p> 
        <label for="with_coma_E11_01">hyperosmolarity with coma E11.01</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="with_coma_E11_01" value="E11.01" onclick="setvalue('with_coma_E11_01','with_coma_E11_01_desc')">
        <input type="hidden" name="desc" id="with_coma_E11_01_desc" value="Type 2 diabetes mellitus with hyperosmolarity with coma">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with hypoglycemia without coma hypoglycemia E11.649"><a href="http://gracewaretechllc.com/E11.649.php">
<p>   
        <label for="hypoglycemia_E11_649">hypoglycemia E11.649</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="hypoglycemia_E11_649" value="E11.649" onclick="setvalue('hypoglycemia_E11_649','hypoglycemia_E11_649_desc')">
        <input type="hidden" name="desc" id="hypoglycemia_E11_649_desc" value="Type 2 diabetes mellitus with hypoglycemia without coma">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with hypoglycemia with coma E11.641"><a href="http://gracewaretechllc.com/E11.641.php">
<p>   
        <label for="hypoglycemia_with_coma_E11_641">hypoglycemia with coma E11.641</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="hypoglycemia_with_coma_E11_641" value="E11.641" onclick="setvalue('hypoglycemia_with_coma_E11_641','hypoglycemia_with_coma_E11_641_desc')">
        <input type="hidden" name="desc" id="hypoglycemia_with_coma_E11_641_desc" value="Type 2 diabetes mellitus with hypoglycemia with coma">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with other diabetic kidney complications NEC E11.29"><a href="http://gracewaretechllc.com/E11.29.php">
<p>   
        <label for="kidney_complications_NEC_E11_29">kidney complications NEC E11.29</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="kidney_complications_NEC_E11_29" value="E11.29" onclick="setvalue('kidney_complications_NEC_E11_29','kidney_complications_NEC_E11_29_desc')">
        <input type="hidden" name="desc" id="kidney_complications_NEC_E11_29_desc" value="Type 2 diabetes mellitus with other diabetic kidney complication">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with diabetic nephropathy Kimmelsteil-Wilson disease E11.21"><a href="http://gracewaretechllc.com/E11.21.php">
<p>   
        <label for="Kimmelsteil-Wilson_disease_E11_21">Kimmelsteil-Wilson disease E11.21</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="Kimmelsteil-Wilson_disease_E11_21" value="E11.21" onclick="setvalue('Kimmelsteil-Wilson_disease_E11_21','Kimmelsteil-Wilson_disease_E11_21_desc')">
        <input type="hidden" name="desc" id="Kimmelsteil-Wilson_disease_E11_21_desc" value="Type 2 diabetes mellitus with diabetic nephropathy">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with diabetic neuropathy, unspecified loss of protective sensation (LOPS) - see Diabetes, by type, with neuropathy"><a href="http://gracewaretechllc.com/E11.40.php">
<p>   
        <label for="lops">loss of protective sensation (LOPS) - see Diabetes, by type, with neuropathy</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="lops" value="E11.40" onclick="setvalue('lops','lops_desc')">
        <input type="hidden" name="desc" id="lops_desc" value="Type 2 diabetes mellitus with diabetic neuropathy, unspecified">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with diabetic mononeuropathy E11.41"><a href="http://gracewaretechllc.com/E11.41.php">
<p>   
        <label for="mononeuropathy_E11_41">mononeuropathy E11.41</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="mononeuropathy_E11_41" value="E11.41" onclick="setvalue('mononeuropathy_E11_41','mononeuropathy_E11_41_desc')">
        <input type="hidden" name="desc" id="mononeuropathy_E11_41_desc" value="Type 2 diabetes mellitus with diabetic mononeuropathy">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with diabetic amyotrophy myasthenia E11.44"><a href="http://gracewaretechllc.com/E11.44.php">
<p>   
        <label for="myasthenia_E11_44">myasthenia E11.44</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="myasthenia_E11_44" value="E11.44" onclick="setvalue('myasthenia_E11_44','myasthenia_E11_44_desc')">
        <input type="hidden" name="desc" id="myasthenia_E11_44_desc" value="Type 2 diabetes mellitus with diabetic amyotrophy">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with diabetic dermatitis necrobiosis lipoidica E11.620"><a href="http://gracewaretechllc.com/E11.620.php">
<p>   
        <label for="necrobiosis_lipoidica_E11_620">necrobiosis lipoidica E11.620</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="necrobiosis_lipoidica_E11_620" value="E11.620" onclick="setvalue('necrobiosis_lipoidica_E11_620','necrobiosis_lipoidica_E11_620_desc')">
        <input type="hidden" name="desc" id="necrobiosis_lipoidica_E11_620_desc" value="Type 2 diabetes mellitus with diabetic dermatitis">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with diabetic nephropathy E11.21"><a href="http://gracewaretechllc.com/E11.21.php">
<p>   
        <label for="nephropathy_E11_21">nephropathy E11.21</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="nephropathy_E11_21" value="E11.21" onclick="setvalue('nephropathy_E11_21','nephropathy_E11_21_desc')">
        <input type="hidden" name="desc" id="nephropathy_E11_21_desc" value="Type 2 diabetes mellitus with diabetic nephropathy">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with diabetic polyneuropathy neuralgia E11.42"><a href="http://gracewaretechllc.com/E11.42.php">
<p>   
        <label for="neuralgia_E11_42">neuralgia E11.42</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="neuralgia_E11_42" value="E11.42" onclick="setvalue('neuralgia_E11_42','neuralgia_E11_42_desc')">
        <input type="hidden" name="desc" id="neuralgia_E11_42_desc" value="Type 2 diabetes mellitus with diabetic polyneuropathy">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with other diabetic neurological complication neurologic complication NEC E11.49"><a href="http://gracewaretechllc.com/E11.49.php">
<p>   
        <label for="neurologic_complication_NEC_E11_49">neurologic complication NEC E11.49</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="neurologic_complication_NEC_E11_49" value="E11.49" onclick="setvalue('neurologic_complication_NEC_E11_49','neurologic_complication_NEC_E11_49_desc')">
        <input type="hidden" name="desc" id="neurologic_complication_NEC_E11_49_desc" value="Type 2 diabetes mellitus with other diabetic neurological complication">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with diabetic neuropathic arthropathy E11.610"><a href="http://gracewaretechllc.com/E11.610.php">
<p>   
        <label for="neuropathic_arthropathy_E11_610">neuropathic arthropathy E11.610</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="neuropathic_arthropathy_E11_610" value="E11.610" onclick="setvalue('neuropathic_arthropathy_E11_610','neuropathic_arthropathy_E11_610_desc')">
        <input type="hidden" name="desc" id="neuropathic_arthropathy_E11_610_desc" value="Type 2 diabetes mellitus with diabetic neuropathic arthropathy">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with diabetic neuropathy, unspecified neuropathy E11.40"><a href="http://gracewaretechllc.com/E11.40.php">
<p>   
        <label for="neuropathy_E11_40">neuropathy E11.40</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="neuropathy_E11_40" value="E11.40" onclick="setvalue('neuropathy_E11_40','neuropathy_E11_40_desc')">
        <input type="hidden" name="desc" id="neuropathy_E11_40_desc" value="Type 2 diabetes mellitus with diabetic neuropathy, unspecified">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with other diabetic ophthalmic complication NEC E11.39"><a href="http://gracewaretechllc.com/E11.39.php">
<p>   
        <label for="ophthalmic_complication_NEC_E11_39">ophthalmic complication NEC E11.39</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="ophthalmic_complication_NEC_E11_39" value="E11.39" onclick="setvalue('ophthalmic_complication_NEC_E11_39','ophthalmic_complication_NEC_E11_39_desc')">
        <input type="hidden" name="desc" id="ophthalmic_complication_NEC_E11_39_desc" value="Type 2 diabetes mellitus with other diabetic ophthalmic complication">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with other oral complications oral complication NEC E11.638"><a ref="http://gracewaretechllc.com/E11.638.php">
<p>   
        <label for="oral_complication_NEC_E11_638">oral complication NEC E11.638</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="oral_complication_NEC_E11_638" value="E11.638" onclick="setvalue('oral_complication_NEC_E11_638','oral_complication_NEC_E11_638_desc')">
        <input type="hidden" name="desc" id="oral_complication_NEC_E11_638_desc" value="Type 2 diabetes mellitus with other oral complications">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with periodontal disease E11.630"><a href="http://gracewaretechllc.com/E11.630.php">
<p>   
        <label for="periodontal_disease_E11_630">periodontal disease E11.630</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="periodontal_disease_E11_630" value="E11.630" onclick="setvalue('periodontal_disease_E11_630','periodontal_disease_E11_630_desc')">
        <input type="hidden" name="desc" id="periodontal_disease_E11_630_desc" value="Type 2 diabetes mellitus with periodontal disease">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with diabetic peripheral angiopathy without gangrene E11.51"><a href="http://gracewaretechllc.com/E11.51.php">
<p>   
        <label for="peripheral_angiopathy_E11_51">peripheral angiopathy E11.51</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="peripheral_angiopathy_E11_51" value="E11.51" onclick="setvalue('peripheral_angiopathy_E11_51','peripheral_angiopathy_E11_51_desc')">
        <input type="hidden" name="desc" id="peripheral_angiopathy_E11_51_desc" value="Type 2 diabetes mellitus with diabetic peripheral angiopathy without gangrene">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with diabetic peripheral angiopathy with gangrene E11.52"><a href="http://gracewaretechllc.com/E11.52.php">
<p>   
        <label for="peripheral_angiopathy_with_gangrene_E11_52">peripheral angiopathy with gangrene E11.52</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="peripheral_angiopathy_with_gangrene_E11_52" value="E11.52" onclick="setvalue('peripheral_angiopathy_with_gangrene_E11_52','peripheral_angiopathy_with_gangrene_E11_52_desc')">
        <input type="hidden" name="desc" id="peripheral_angiopathy_with_gangrene_E11_52_desc" value="Type 2 diabetes mellitus with diabetic peripheral angiopathy with gangrene">
</p>
</a>
</li>


<li data-filtertext="Type 2 diabetes mellitus with diabetic polyneuropathy E11.42"><a href="http://gracewaretechllc.com/E11.42.php">
<p>   
        <label for="polyneuropathy_E11_42">polyneuropathy E11.42</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="polyneuropathy_E11_42" value="E11.42" onclick="setvalue('polyneuropathy_E11_42','polyneuropathy_E11_42_desc')">
        <input type="hidden" name="desc" id="polyneuropathy_E11_42_desc" value="Type 2 diabetes mellitus with diabetic polyneuropathy">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with other diabetic kidney complication renal complication NEC E11.29"><a href="http://gracewaretechllc.com/E11.29.php">
<p>   
        <label for="renal_complication_NEC_E11_29">renal complication NEC E11.29</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="renal_complication_NEC_E11_29" value="E11.29" onclick="setvalue('renal_complication_NEC_E11_29','renal_complication_NEC_E11_29_desc')">
        <input type="hidden" name="desc" id="renal_complication_NEC_E11_29_desc" value="Type 2 diabetes mellitus with other diabetic kidney complication">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with other diabetic kidney complication renal tubular degeneration E11.29"><a href="http://gracewaretechllc.com/E11.29.php">
<p>   
        <label for="renal_tubular_degeneration_E11_29">renal tubular degeneration E11.29</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="renal_tubular_degeneration_E11_29" value="E11.29" onclick="setvalue('renal_tubular_degeneration_E11_29','renal_tubular_degeneration_E11_29_desc')">
        <input type="hidden" name="desc" id="renal_tubular_degeneration_E11_29_desc" value="Type 2 diabetes mellitus with other diabetic kidney complication">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with unspecified diabetic retinopathy without macular edema retinopathy E11.319"><a href="http://gracewaretechllc.com/E11.319.php">
<p>   
        <label for="retinopathy_E11_319">retinopathy without macular edema E11.319</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="retinopathy_E11_319" value="E11.319" onclick="setvalue('retinopathy_E11_319','retinopathy_E11_319_desc')">
        <input type="hidden" name="desc" id="retinopathy_E11_319_desc" value="Type 2 diabetes mellitus with unspecified diabetic retinopathy without macular edema">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with unspecified diabetic retinopathy with macular edema E11.311"><a href="http://gracewaretechllc.com/E11.319.php">
<p>   
        <label for="retinopathy_with_macular_edema_E11_311">retinopathy with macular edema E11.311</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="retinopathy_with_macular_edema_E11_311" value="E11.311" onclick="setvalue('retinopathy_with_macular_edema_E11_311','retinopathy_with_macular_edema_E11_311_desc')">
        <input type="hidden" name="desc" id="retinopathy_with_macular_edema_E11_311_desc" value="Type 2 diabetes mellitus with unspecified diabetic retinopathy with macular edema">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with mild nonproliferative diabetic retinopathy without macular edema nonproliferative E11.329"><a href="http://gracewaretechllc.com/E11.329.php">
<p>   
        <label for="mild_nonproliferative_diabetic_retinopathy_without_macular_edema_nonproliferative_E11_329">mild nonproliferative diabetic retinopathy without macular edema E11.329</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="mild_nonproliferative_diabetic_retinopathy_without_macular_edema_nonproliferative_E11_329" value="E11.329" onclick="setvalue('mild_nonproliferative_diabetic_retinopathy_without_macular_edema_nonproliferative_E11_329','mild_nonproliferative_diabetic_retinopathy_without_macular_edema_nonproliferative_E11_329_desc')">
        <input type="hidden" name="desc" id="mild_nonproliferative_diabetic_retinopathy_without_macular_edema_nonproliferative_E11_329_desc" value="Type 2 diabetes mellitus with mild nonproliferative diabetic retinopathy without macular edema">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with mild nonproliferative diabetic retinopathy with macular edema E11.321"><a href="http://gracewaretechllc.com/E11.321.php">
<p>   
        <label for="mild_nonproliferative_diabetic_retinopathy_with_macular_edema_E11_321">mild nonproliferative diabetic retinopathy with macular edema E11.321</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="mild_nonproliferative_diabetic_retinopathy_with_macular_edema_E11_321" value="E11.321" onclick="setvalue('mild_nonproliferative_diabetic_retinopathy_with_macular_edema_E11_321','mild_nonproliferative_diabetic_retinopathy_with_macular_edema_E11_321_desc')">
        <input type="hidden" name="desc" id="mild_nonproliferative_diabetic_retinopathy_with_macular_edema_E11_321_desc" value="Type 2 diabetes mellitus with mild nonproliferative diabetic retinopathy with macular edema">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with moderate nonproliferative diabetic retinopathy without macular edema E11.339"><a href="http://gracewaretechllc.com/E11.339.php">
<p>   
        <label for="moderate_E11_339">moderate nonproliferative diabetic retinopathy without macular edema E11.339</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="moderate_E11_339" value="E11.339" onclick="setvalue('moderate_E11_339','moderate_E11_339_desc')">
        <input type="hidden" name="desc" id="moderate_E11_339_desc" value="Type 2 diabetes mellitus with moderate nonproliferative diabetic retinopathy without macular edema">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with moderate nonproliferative diabetic retinopathy with macular edema E11.331"><a href="http://gracewaretechllc.com/E11.331.php">
<p>   
        <label for="moderate_with_macular_edema_E11_331">moderate nonproliferative diabetic retinopathy with macular edema E11.331</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="moderate_with_macular_edema_E11_331" value="E11.331" onclick="setvalue('moderate_with_macular_edema_E11_331','moderate_with_macular_edema_E11_331_desc')">
        <input type="hidden" name="desc" id="moderate_with_macular_edema_E11_331_desc" value="Type 2 diabetes mellitus with moderate nonproliferative diabetic retinopathy with macular edema">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with severe nonproliferative diabetic retinopathy without macular edema E11.349"><a href="http://gracewaretechllc.com/E11.349.php">
<p>   
        <label for="severe_E11_349">severe nonproliferative diabetic retinopathy without macular edema E11.349</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="severe_E11_349" value="E11.349" onclick="setvalue('severe_E11_349','severe_E11_349_desc')">
        <input type="hidden" name="desc" id="severe_E11_349_desc" value="Type 2 diabetes mellitus with severe nonproliferative diabetic retinopathy without macular edema">
</p>
</a>
</li>


<li data-filtertext="Type 2 diabetes mellitus with severe nonproliferative diabetic retinopathy with macular edema E11.341"><a href="http://gracewaretechllc.com/E11.341.php">
<p>   
        <label for="with_macular_edema_E11_341">severe nonproliferative diabetic retinopathy with macular edema E11.341</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="with_macular_edema_E11_341" value="E11.341" onclick="setvalue('with_macular_edema_E11_341','with_macular_edema_E11_341_desc')">
        <input type="hidden" name="desc" id="with_macular_edema_E11_341_desc" value="Type 2 diabetes mellitus with severe nonproliferative diabetic retinopathy with macular edema">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with proliferative diabetic retinopathy without macular edema E11.359"><a href="http://gracewaretechllc.com/E11.359.php">
<p>   
        <label for="proliferative_E11_359">proliferative diabetic retinopathy without macular edema E11.359</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="proliferative_E11_359" value="E11.359" onclick="setvalue('proliferative_E11_359','proliferative_E11_359_desc')">
        <input type="hidden" name="desc" id="proliferative_E11_359_desc" value="Type 2 diabetes mellitus with proliferative diabetic retinopathy without macular edema">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with proliferative diabetic retinopathy with macular edema E11.351"><a href="http://gracewaretechllc.com/E11.351.php">
<p>   
        <label for="with_macular_edema_E11_351">proliferative diabetic retinopathy with macular edema E11.351</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="with_macular_edema_E11_351" value="E11.351" onclick="setvalue('with_macular_edema_E11_351','with_macular_edema_E11_351_desc')">
        <input type="hidden" name="desc" id="with_macular_edema_E11_351_desc" value="Type 2 diabetes mellitus with proliferative diabetic retinopathy with macular edema">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with other skin complications E11.628"><a href="http://gracewaretechllc.com/E11.628.php">
<p>   
        <label for="skin_complication_NEC_E11_628">skin complications E11.628</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="skin_complication_NEC_E11_628" value="E11.628" onclick="setvalue('skin_complication_NEC_E11_628','skin_complication_NEC_E11_628_desc')">
        <input type="hidden" name="desc" id="skin_complication_NEC_E11_628_desc" value="Type 2 diabetes mellitus with other skin complications">
</p>
</a>
</li>

<li data-filtertext="Type 2 diabetes mellitus with other skin ulcer E11.622"><a href="http://gracewaretechllc.com/E11.622.php">
<p>   
        <label for="skin_ulcer_NEC_E11_622">skin ulcer NEC E11.622</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="skin_ulcer_NEC_E11_622" value="E11.622" onclick="setvalue('skin_ulcer_NEC_E11_622','skin_ulcer_NEC_E11_622_desc')">
        <input type="hidden" name="desc" id="skin_ulcer_NEC_E11_622_desc" value="Type 2 diabetes mellitus with other skin ulcer">
</p>
</a>
</li>

    </ul>
  </div>

  <div data-role="collapsible">
        <h3>bronzed E83.110</h3>
        <p>Hereditary hemochromatosis</p>

      </div>
      <div data-role="collapsible">
        <p><label for="one"><h3>complicating pregnancy - see Pregnancy, complicated by, diabetes</h3></label></p>
        <p>I'm the expanded content.</p>

      </div>
      <div data-role="collapsible">
        <h3>dietary counseling and surveillance Z71.3</h3>
        <p>I'm the expanded content.</p>
      </div>
      <div data-role="collapsible">
        <h3>due to drug or chemical E09.9</h3>
        <p></p>
    <form class="ui-filterable">
      <input id="myFilter1drugorchem" data-type="search" placeholder="Search Keyword..">
    </form>
    <ul data-role="listview" data-filter="true" data-input="#myFilter1drugorchem" data-inset="true">
<li data-filtertext="amyotrophy E09.44"><a href="http://gracewaretechllc.com/E09.44.php">
<p>
        <label for="amyotrophy_E09_44">amyotrophy E09.44</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="amyotrophy_E09_44" value="E09.44" onclick="setvalue('amyotrophy_E09_44','E09_44_desc')">
        <input type="hidden" name="desc" id="E09_44_desc" value="Drug or chemical induced diabetes mellitus with neurological complications with diabetic amyotrophy">
</p>
</a>
</li>

<li data-filtertext="arthropathy NEC E09.618"><a href="http://gracewaretechllc.com/E09.618.php">
<p>
        <label for="arthropathy_NEC_E09_618">arthropathy NEC E09.618</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="arthropathy_NEC_E09_618" value="E09.618" onclick="setvalue('arthropathy_NEC_E09_618','E09_618_desc')">
        <input type="hidden" name="desc" id="E09_618_desc" value="Drug or chemical induced diabetes mellitus with other diabetic arthropathy">
</p>
</a>
</li>
      
<li data-filtertext="autonomic &#40;poly&#41; E09.43"><a href="http://gracewaretechllc.com/E09.43.php">
<p>   
        <label for="autonomic_poly_E09_43">autonomic &#40;poly&#41; E09.43</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="autonomic_poly_E09_43" value="E09.43" onclick="setvalue('autonomic_poly_E09_43','E09_43_desc')">
        <input type="hidden" name="desc" id="E09_43_desc" value="Drug or chemical induced diabetes mellitus with neurological complications with diabetic autonomic &#40;poly&#41; neuropathy">
</p>
</a>
</li>

<li data-filtertext="cataract E09.36"><a href="http://gracewaretechllc.com/E09.36.php">
<p>   
        <label for="cataract_E09_36">cataract E09.36</label>
        <input type="radio" name="M1021_PRIMARY_DIAG_ICD" id="cataract_E09_36" value="E09.36" onclick="setvalue('cataract_E09_36','E09_36_desc')">
        <input type="hidden" name="desc" id="E09_36_desc" value="Drug or chemical induced diabetes mellitus with diabetic cataract">
</p>
</a>
</li>


    </ul>
  </div>  
    </div>

    </div>

  </div>
  <div data-role="footer">
    <h1>Gracewaretechllc.com</h1>
  </div>


</div>




<script>
function chck(labelid) {
   
    document.getElementById(labelid).style.backgroundColor = 'yellow';



}
function unchck(labelid) {
   
    document.getElementById(labelid).style.backgroundColor = 'white';



}
</script>

<script>
document.getElementById("demo").onclick = function() {myFunction()};

function myFunction() {
    document.getElementById("demo").innerHTML = "YOU CLICKED ME!";
}
</script>



</body>
</html>
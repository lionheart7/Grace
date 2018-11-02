<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Grace</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>





  
</head>
<body onload="cDate()">

<div data-role="page" id="pageone">
  <div data-role="header" data-position="fixed">

    <h2>Nursing Clinical Progress Report</h2>
  </div>


  <div data-role="main" class="ui-content">
    <div data-role="collapsibleset">
      <div data-role="collapsible">
        <h3>VISIT</h3>
       
     <div class="container">
  
  <form id="myForm0" class="form" role="form"  method="post" action="add_newrnpn1.php"> 
 
    <div class="date" class="form-group">
<label >Service Date: 
  <input type="date" id="service_date" name="service_date" onkeydown="return addSlashes(this)" maxlength="10" placeholder="mm/dd/yyyy" onkeypress="return isDateKey(event)" value="<?php date_default_timezone_set("America/Chicago"); echo date_format($service_date,"m/d/Y");?>" data-clear-btn="true" autofocus required></label> 
      
    </div>
    <div class="time" class="form-group">
      <label>Start time: <input type="time" id="starttime" name="service_start_time" value="<?php date_default_timezone_set("America/Chicago"); $service_start_time = date("h:i:sa");  echo $service_start_time;?>" oninvalid="alert('You must fill out the Visit start time!');"   data-clear-btn="true" autofocus required></label>
    </div>
    <div class="time" class="form-group">
      <label>End Time: <input type="time" id="endtime" name="service_end_time" value="<?php date_default_timezone_set("America/Chicago"); $service_end_time = date("h:i:sa", time()+3600); echo $service_end_time ;?>" oninvalid="alert('You must fill out the Visit end time!');"   data-clear-btn="true" autofocus required></label>
    </div>
    <div class="btn-group">
    <input type="submit" name="submit" value="Save">
    <input type="button" class="btn btn-default" onclick="myFunctionreset0()"  value="Reset form">
    </div>
  </form>
</div> 
      </div>
      <div data-role="collapsible">
        <h3>TYPE OF VISIT</h3>
       
     <div class="container">
  
  <form id="myForm1" class="form" role="form"  method="post" action="add_newrnpn2.php"> 
 
    <div class="radio" class="form-group">
      <label >
<input type="radio" id="s1" name="servicetype"  <?php if (isset($servicetype) && $servicetype=="SNV") echo "checked"; ?> value="SNV" onclick="checksc1(this)" onclick="tsek1()"  ><p id="tsek1" >Direct skilled services of a licensed nurse (LPN or RN) in the home health or hospice setting</p></label>
<input type="hidden" id="sc1" name="sc1" value="0">
    </div>
    <div class="radio" class="form-group">
      <label>
<input type="radio" id="s2" name="servicetype" <?php if (isset($servicetype) && $servicetype=="RNMGEVAL") echo "checked"; ?> value="RNMGEVAL" onclick="checksc2(this)">Skilled services by a licensed nurse (RN only) for management and evaluation of the plan of care</label>
<input type="hidden" id="sc2"  name="sc2" value="0">

    </div>
    <div class="radio">
      <label>

<input type="radio" id="s3" name="servicetype" <?php if (isset($servicetype) && $servicetype=="RNOBSASS") echo "checked"; ?> value="RNOBSASS" onclick="checksc3(this)">Skilled services of a licensed nurse (LPN or RN) for the observation and assessment of the patient's condition</label>
<input type="hidden" id="sc3"  name="sc3" value="0">
    </div>
    <div class="radio">
      <label>

      <input type="radio" id="s4" name="servicetype" <?php if (isset($servicetype) && $servicetype=="RNTRNEDU") echo "checked"; ?> value="RNTRNEDU" onclick="checksc4(this)">Skilled services of a licensed nurse (LPN or RN), in the training and/or education of a patient or family member, in the home health or hospice setting</label>
<input type="hidden" id="sc4"  name="sc4" value="0">
    </div>
    <div class="checkbox">
      <label>

<input type="checkbox" id="s5" name="servicetype_ev" <?php if (isset($servicetype_ev) && $servicetype_ev=="EVRNLPN") echo "checked";  ?>  value="EVRNLPN" onclick="checksc5(this)">Emergency</label>
<input type="hidden" id="sc5"  name="sc5" value="0">

    </div>
    <div class="checkbox">
      <label>

<input type="checkbox" id="s6" name="servicetype_sv" <?php if (isset($servicetype_sv) && $servicetype_sv=="RNSV") echo "checked"; ?> value="RNSV" onclick="checksc6(this)">LPN/HHA Supervisory Visit</label>
<input type="hidden" id="sc6"  name="sc6" value="0">

    </div>

<div class="Checkbox" class="form-group">
      <label>
<input type="Checkbox"  id="s7" name="servicetype_dc"  <?php if (isset($servicetype_dc) && $servicetype_dc=="RNDC") echo "checked"; ?> value="RNDC" onclick="checksc7(this)">Discharge Visit</label>
<input type="hidden" id="sc7" name="sc7" value="0">

    </div>

<div class="Checkbox" class="form-group">
      <label>
<input type="Checkbox"  id="s8" name="servicetype_prn"  <?php if (isset($servicetype_prn) && $servicetype_prn=="PRN") echo "checked"; ?> value="PRN" onclick="checksc8(this)">PRN VISIT</label>
<input type="hidden" id="sc8" name="sc8" value="0">

    </div>
    <div class="btn-group">
    <input type="submit" name="submit" value="Save" >
    <input type="button" class="btn btn-default" onclick="myFunctionreset1()"  value="Reset form">
    </div>
  </form>
</div> 
      </div>
      <div data-role="collapsible">
        <h3>VITAL SIGNS</h3>
      
<div class="container">
    <form id="myForm2" class="form" role="form"  method="post" action="add_newrnpn3.php">

    <div class="radio">
      <label class="radio-inline"><input type="radio" id="s9" name="tmp" <?php if (isset($tmp) && $tmp=="Oral Temperature") echo "checked";?> value="Oral Temperature" onclick="checksc9(this)">Oral Temperature</label>
<input type="hidden" id="sc9" name="sc9" value="0">
    </div>
    <div class="radio">
      <label class="radio-inline"><input type="radio" id="s10" name="tmp" <?php if (isset($tmp) && $tmp=="Axilliary Temperature") echo "checked";?> value="Axilliary Temperature" onclick="checksc10(this)">Axilliary Temperature</label>
<input type="hidden" id="sc10" name="sc10" value="0">
    </div>
    <div class="radio">
      <label class="radio-inline"><input type="radio" id="s11" name="tmp" <?php if (isset($tmp) && $tmp=="Temporal Temperature") echo "checked";?> value="Temporal Temperature" onclick="checksc11(this)">Temporal Temperature</label>
<input type="hidden" id="sc11" name="sc11" value="0">
    </div>
    <div class="radio">
      <label class="radio-inline"><input type="radio" id="s12" name="tmp" <?php if (isset($tmp) && $tmp=="Tympanic Temperature") echo "checked";?> value="Tympanic Temperature" onclick="checksc12(this)">Tympanic Temperature</label>
<input type="hidden" id="sc12" name="sc12" value="0">
    </div>
    <div class="radio">
      <label class="radio-inline"><input type="radio" id="s13" name="tmp" <?php if (isset($tmp) && $tmp=="Rectal Temperature") echo "checked";?> value="Rectal Temperature" onclick="checksc13(this)">Rectal Temperature</label>
<input type="hidden" id="sc13" name="sc13" value="0">
    </div>

    <div class="text">
      <label>Temp:<input type="text" id="s14" name="temp" value="<?php echo $temp;?>"></label>
    </div>
    <div class="text">
      <label>Respirations: <input type="text" id="s15" name="respirations"  value="<?php echo $respirations;?>"></label>
    </div>
    <div class="text">
      <label>Saturations: <input type="text" id="s16" name="saturations"  value="<?php echo $saturations; echo '%';?>"></label>
    </div>

     <div class="text">
      <label>Apical Pulse: <input type="text" id="s17" name="apulse" value="<?php echo $apulse;?>"></label>
    </div>
    <div class="text">
      <label>Radial Pulse: <input type="text" id="s18" name="rpulse" value="<?php echo $rpulse;?>"></label>
    </div>
<div data-role="collapsible">
  <h2>Blood Pressure:</h2>



<div class="form-group">
     

        <label for="arm"> Which Arm?:</label>
        <select name="arm" id="arm" data-native-menu="false" >
>
          <option value="N/A">N/A</option>
          <option value="Left">Left Arm</option>
          <option value="Right">Right Arm</option>
          
         
        </select>
</div>    

<div class="form-group"> 
     

        <label for="position">Select Position:</label>
        <select name="position" id="position" data-native-menu="false">
          <option value=""></option>
          <option value="Sitting">Sitting</option>
          <option value="Standing">Standing</option>
          <option value="Lying">Lying</option>
          
         
        </select>
    
    </div>


    <div class="form-group">
      <label for="Systolic">Systolic:</label><input id="s19" type="text" class="form-control" name="systolic" placeholder="Systolic" >
    </div>
    <div class="form-group">
      <label for="Diastolic"> / Diastolic:</label>
      <input type="text" class="form-control" id="s20" name="diastolic" placeholder="Diastolic">
    </div>
     


</div>
    <div class="text">
      <label>Weight: <input type="text" id="s21" name="weight" value="<?php echo $weight;?>"></label>
    </div>
    <div class="text">
      <label>Height: <input type="text" id="s22" name="height" value="<?php echo $height;?>"></label>
    </div>
    <div class="btn-group">
    <input type="submit" name="submit" value="Save" onclick="affirm()"> 
    <input type="button" class="btn btn-default" onclick="myFunctionreset2()" value="Reset form">
    </div>
    </form>
</div>        


</div>
      </div>
      <div data-role="collapsible">
        <h3>HOMEBOUND STATUS</h3>
<div class="container">
  
  <form id="myForm3" class="form" role="form"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
 
    <div class="radio">
      <label><input type="radio" id="s23" name="Homebound"  <?php if (isset($Homebound) && $Homebound=="Bed Bound") echo "checked";?> value="Bed Bound">Bed Bound</label>
    </div>
    <div class="radio">
      <label><input type="radio" id="s24" name="Homebound" <?php if (isset($Homebound) && $Homebound=="Cane") echo "checked";?> value="Cane">Cane</label>
    </div>
<div class="radio">
      <label><input type="radio" id="s25" name="Homebound" <?php if (isset($Homebound) && $Homebound=="Walker") echo "checked";?>  value="Walker">Walker</label>
    </div>
      <div data-role="collapsible">
        <h3>Crutches</h3>
    <div class="radio">
      <label><input type="radio" id="s26" name="Homebound" <?php if (isset($Homebound) && $Homebound=="Left") echo "checked";?> value="Left">Left</label>
    </div>
    <div class="radio">
      <label><input type="radio" id="s27" name="Homebound" <?php if (isset($Homebound) && $Homebound=="Right") echo "checked";?> value="Right">Right</label>
    </div>
    <div class="radio">
      <label><input type="radio" id="s28" name="Homebound" <?php if (isset($Homebound) && $Homebound=="Both") echo "checked";?> value="Both">Both</label>
    </div>        
      </div>
   <div class="Checkbox">
      <label><input type="checkbox" id="s29" name="Homebound" <?php if (isset($Homebound) && $Homebound=="Wheel Chair") echo "checked";?>  value="Wheel Chair">Wheel Chair</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" id="s30" name="HomeboundFC" <?php if (isset($HomeboundFC) && $HomeboundFC=="Fall precaution") echo "checked";?> value="Fall precaution">Fall precaution</label>
    </div>
     <div class="checkbox">
      <label><input type="checkbox" id-"s31" name="HomeboundGW" <?php if (isset($HomeboundGW) && $HomeboundGW=="Generalized weakness") echo "checked";?> value="Generalized weakness">Generalized weakness</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" id="s32" name="Homeboundwound" <?php if (isset($Homeboundwound) && $Homeboundwound=="Wound") echo "checked";?> value="Wound">Wound</label>
    </div>
    <div class="checkbox">

      <label><input type="checkbox" id="s33" ame="Homeboundinfection" <?php if (isset($Homeboundinfection) && $Homeboundinfection=="LPN/HHA Supervisory Visit") echo "checked";?> value="Infection">Infection</label>
    </div>

    <div class="Checkbox">
      <label><input type="checkbox" id="s34" name="Homeboundmemory" <?php if (isset($Homeboundmemory) && $Homeboundmemory=="Memory") echo "checked";?> value="Memory">Memory</label>
    </div>
    <div class="btn-group">
    <input type="submit" name="submit" value="Save" onclick="affirm();"> 
    <input type="button" class="btn btn-default" onclick="myFunctionreset3()" value="Reset form">
    
    </div>
  </form>
</div> 
      </div>
      <div data-role="collapsible">
        <h3>FUNCTIONAL LIMITATIONS</h3>
        <div class="container">
  
  <form id="myForm4" class="form" role="form"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
 
    <div class="checkbox">
      <label><input type="checkbox" id="s35" name="functional" <?php if (isset($functional) && $functional=="Needs Assistance to ambulate or leave the house") echo "checked";?> value="Needs Assistance to ambulate or leave the house">Needs Assistance to ambulate or leave the house</label>
    </div>
    <div class="Checkbox">
      <label><input type="checkbox" id="s36" name="functional" <?php if (isset($functional) && $functional=="Hearing Impaired") echo "checked";?> value="Cane">Hearing Impaired</label>
    </div>
<div class="Checkbox">
      <label><input type="checkbox" id="s37" name="functional" <?php if (isset($functional) && $functional=="Limited Endurance") echo "checked";?>  value="Limited Endurance">Limited Endurance</label>
    </div>
      <div data-role="collapsible">
        <h3>Amputation</h3>
    <div class="Checkbox">
      <label><input type="checkbox" id="s38" name="Amputation" <?php if (isset($Amputation) && $Amputation=="Upper Limb") echo "checked";?> value="Left">Upper Limb Amputation</label>
    </div>
    <div class="Checkbox">
      <label><input type="checkbox" id="s39" name="Amputation" <?php if (isset($Amputation) && $Amputation=="Lower Limb") echo "checked";?> value="Right">Lower Limb Amputation</label>
    </div>
    </div>
   <div class="Checkbox">
      <label><input type="checkbox" id="s40" name="functional" <?php if (isset($functional) && $functional=="SOB on exertion") echo "checked";?>  value="SOB on exertion">SOB on exertion</label>
    </div>
    <div class="Checkbox">
      <label><input type="checkbox" id="s41" name="functional" <?php if (isset($functional) && $functional=="Paralysis") echo "checked";?> value="Paralysis">Paralysis</label>
    </div>
     <div class="Checkbox">
      <label><input type="checkbox" id="s42" name="functional" <?php if (isset($HomeboundGW) && $HomeboundGW=="Aphasia") echo "checked";?> value="Aphasia">Aphasia</label>
    </div>
    <div class="Checkbox">
      <label><input type="checkbox" id="s43" name="functional" <?php if (isset($functional) && $functional=="Unsteady Gait") echo "checked";?> value="Unsteady Gait">Unsteady Gait</label>
    </div>
    <div class="Checkbox">

      <label><input type="checkbox" id="s44" name="functional" <?php if (isset($functionaln) && $functional=="Legally Blind") echo "checked";?> value="Legally Blind">Legally Blind</label>
    </div>

    <div class="btn-group">
    <input type="submit" name="submit" value="Save" onclick="affirm()"> 
    <input type="button" class="btn btn-default" onclick="myFunctionreset4()" value="Reset form">
    </div>
  </form>
</div> 
      </div>
      <div data-role="collapsible">
        <h3>GENERAL</h3>
       <div class="container">
    <form id="myForm0" class="form" role="form"  method="post" action="">
    <div class="radio">
      <label><input type="radio" id="s45" name="G1" <?php if (isset($G1) && $G1=="Comfortable") echo "checked";?> value="Comfortable">Comfortable</label>
    </div>
    <div class="radio">
      <label><input type="radio" id="s45" name="G1" <?php if (isset($G1) && $G1=="In pain") echo "checked";?>  value="In pain" >In pain</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" id="s46" name="G2" <?php if (isset($G2) && $G2=="Agitated") echo "checked";?> value="Agitated">Agitated</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" id="s47" name="G2" <?php if (isset($G2) && $G2=="Irritated") echo "checked";?> value="Irritated">Irritated</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" id="s48" name="G3" <?php if (isset($G3) && $G3=="Restless") echo "checked";?> value="Restless">Restless</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" id="s49" name="G3" <?php if (isset($G3) && $G3=="Alert") echo "checked";?> value="Alert">Alert</label>
    </div>
<div data-role="collapsible">
    <h1>Confused</h1>

    <div class="radio">
      <label><input type="radio" id="s50" name="G4" <?php if (isset($G4) && $G4=="Confused") echo "checked";?> value="Confused">Confused</label>
    </div>
    <div class="radio">
      <label><input type="radio" id="s51" name="G4" <?php if (isset($G4) && $G4=="Confused") echo "checked";?> value="Confused">Confused at times</label>
    </div>
    <div class="radio">
      <label><input type="radio" id="s52" name="G4" <?php if (isset($G4) && $G4=="Confused") echo "checked";?> value="Confused">Confused in the morning</label>
    </div>
    <div class="radio">
      <label><input type="radio" id="s53"  name="G4" <?php if (isset($G4) && $G4=="Confused") echo "checked";?> value="Confused">Confused in the evening</label>
    </div>
</div>
<div data-role="collapsible">
    <h1>Oriented</h1>
    <div class="checkbox">
      <label><input type="checkbox" id="s54"  name="G4" <?php if (isset($G4) && $G4=="Oriented") echo "checked";?> value="Oriented">Oriented to Persons</label>

    
  </div>
    <div class="checkbox">
      <label><input type="checkbox" id="s55" name="G4" <?php if (isset($G4) && $G4=="Oriented") echo "checked";?> value="Oriented">Oriented to Place</label>

    
  </div>
    <div class="checkbox">
      <label><input type="checkbox" id="s56" name="G4" <?php if (isset($G4) && $G4=="Oriented") echo "checked";?> value="Oriented">Oriented to Time</label>

    
  </div>
 <div class="checkbox">
      <label><input type="checkbox" id="s57" name="G4" <?php if (isset($G4) && $G4=="Oriented") echo "checked";?> value="Oriented">Oriented to Situation</label>

    
  </div>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" id="s58" name="G5" <?php if (isset($G5) && $G5=="Forgetful") echo "checked";?> value="Forgetful">Forgetful</label>
    </div>
    <div class="radio">
      <label><input type="radio" id="s59" name="G6" <?php if (isset($G6) && $G6=="Cooperative") echo "checked";?> value="Cooperative">Cooperative</label>
    </div>
    <div class="radio">
      <label><input type="radio" id="s60" name="G6" <?php if (isset($G6) && $G6=="Uncooperative") echo "checked";?> value="Uncooperative">Uncooperative</label>
    </div>



    <div class="btn-group">
    <input type="submit" name="submit" value="Save" onclick="affirm()"> 
    <input type="button" class="btn btn-default" onclick="myFunctionreset0()" value="Reset form">
    </div>
    </form>
</div>        
      </div>

      <div data-role="collapsible">
        <h3>CARDIOVASCULAR</h3>
                <h2>Nursing assessment and observation of signs/symptoms</h2>
        <p>Check all applicable to Client Status</p>

<div class="container">
  <form id="myForm3" class="form" role="form"  method="post" action="">
    <div class="checkbox">
      <label><input type="checkbox" value="">Heart sounds</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Heart regular</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Heart Irregular</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Gallop</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Murmur</label>
    </div>
    <p>Chest pain:</p>
    <div class="text">
      <label>Location: <input type="text" value=""></label>
    </div>
    <div class="text">
      <label>Severity: <input type="text" value=""></label>
    </div>
    <div class="text">
      <label>Relief: <input type="text" value=""></label>
    </div>
   <div class="checkbox">
      <label><input type="checkbox" value="">Palpitation</label>
    </div>

   <div class="checkbox">
      <label><input type="checkbox" value="">Headaches</label>
    </div>
   <div class="checkbox">
      <label><input type="checkbox" value="">Nape Pain</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Edema</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">RUE</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">LUE</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">RLE</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">LLE</label>
    </div>
    <div class="radio">
      <label><input type="radio" value="">Pitting</label>
    </div>
    <div class="radio">
      <label><input type="radio" value="">Non-pitting</label>
    </div>
<fieldset id="myfieldset" name="comments">
<legend>Grade: Trace </legend>
 <div class="radio">
      <label><input type="radio" value="">1+</label>
    </div>
    <div class="radio">
      <label><input type="radio" value="">2+</label>
    </div>
    <div class="radio">
      <label><input type="radio" value="">3+</label>
    </div>
    <div class="radio">
      <label><input type="radio" value="">4+</label>
    </div>
</fieldset >
<label>Comments:</label>
<textarea name="comments" rows="4" cols="50">
</textarea>
    <div class="btn-group">
    <input type="submit" name="submit" value="Save" onclick="affirm()"> 
    <input type="button" class="btn btn-default" onclick="myFunctionreset3()" value="Reset form">
    </div>
  </form>
</div>        
      </div>
      <div data-role="collapsible">
        <h3>INTEGUMENTARY</h3>
        
      <div data-role="collapsible">
      <h1>Skin Color:</h1>
      <div class="checkbox">
      <label><input type="checkbox" name="skincolor" checked="checked">Skin Color</label>
      </div>
      <div class="radio">
      <label><input type="radio" name="skincolor" value="">pink</label>
      </div>
      <div class="radio">
      <label><input type="radio" name="skincolor" value="">cyanotic</label>
      </div>
      <div class="radio">
      <label><input type="radio" name="skincolor" value="">pale</label>
      </div>
      </div>
    

      </div>
       
      <div data-role="collapsible">
        <h3>RESPIRATORY</h3>
               <h2>Nursing assessment and observation of signs/symptoms</h2>
        <p>Check all applicable to Client Status</p>
<div class="container">
  
  <form id="myForm9" class="form" role="form"  method="post" action="display.php">
    <div class="checkbox">
      <label><input type="checkbox" value="">WNL-No Problem</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Apnea</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Dyspnea/SOB</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Respiratory Uneven</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Cough</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Sputum</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Dyspnea</label>
    </div>
    <p>Breath Sounds:</p>
    <div class="checkbox">
      <label><input type="checkbox" value="">Clear</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Rales</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Rhonchi</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Wheezing</label>
    </div>
    <div class="textarea">
      <label>Others: <input type="textarea" value=""></label>
    </div>
    <div class="btn-group">
    <input type="submit" name="submit" value="Save" onclick="affirm()"> 
    <input type="button" class="btn btn-default" onclick="myFunctionreset9()" value="Reset form">
    </div>
 
  </form>
</div>  
      </div>
      <div data-role="collapsible">
        <h3>CARDIOVASCULAR</h3>
        <p>I'm the expanded content.</p>
      </div>
      <div data-role="collapsible">
        <h3>GENITOURINARY</h3>
        <h2>Nursing assessment and observation of signs/symptoms</h2>
        <p>Check all applicable to Client Status</p>
<div class="container">

  <form id="myForm6" class="form" role="form"  method="post" action="display.php">
    <div class="checkbox">
      <label><input type="checkbox" value="">WNL-No Problem</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Incontinent</label>
    </div>
    <div class="text-inline" >
      <label>Number of Diapers Used: <input type="text" name="diapers_used" value=""></label>
    </div>
    <div class="checkbox-inline">
      <label><input type="checkbox" value="">Retention</label>
    </div>
    <div class="checkbox-inline">
      <label><input type="checkbox" value="">Dysuria</label>
    </div>
    <div class="text-inline" >
      <label>Frequency: <input type="text" value=""></label>
    </div>
    <div class="checkbox-inline">
      <label><input type="checkbox" value="">Catheter</label>
    </div>
    <div class="checkbox-inline">
      <label><input type="checkbox" value="">Bladder Program</label>
    </div>
    <div class="checkbox">
      <label><input type="date" name="FoleyInsert" value="">Foley Insertion</label>
    </div>
    
    <div class="checkbox">
      <label><input type="checkbox" value="">Teaching Catheter Care</label>
    </div>
    <div class="text-inline">
      <label>Output: <input type="text" value=""></label>
    </div>
    <div class="checkbox-inline">
      <label><input type="checkbox" value="">Urine</label>
    </div>
    <div class="radio-inline">
      <label><input type="radio" name="urineoutput" value="">Clear</label>
    </div>
    <div class="radio-inline">
      <label><input type="radio" name="urineoutput" value="">Cloudy</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="urineoutput" value="">Sediment</label>
    </div>
<div class="text-inline">
      <label>Other: <input type="text" value=""></label>
    </div>
    <div class="btn-group">
    <input type="submit" name="submit" value="Save" onclick="affirm()"> 
    <input type="button" class="btn btn-default" onclick="myFunctionreset6()" value="Reset form">
    </div>

</form>
</div>
      </div>
      <div data-role="collapsible">
        <h3>COMFORT/PAIN</h3>
        <p>I'm the expanded content.</p>
      </div>
      <div data-role="collapsible">
        <h3>MUSCULOSKELETAL</h3>
        <h2>Nursing assessment and observation of signs/symptoms</h2>
      <p>Check all applicable to Client Status</p>
<div class="container">
    <form id="myForm7" class="form" role="form"  method="post" action="display.php">

    <div class="checkbox-inline">
      <label><input type="checkbox" value="">WNL-No Problem</label>
    </div>
    <div class="checkbox-inline">
      <label><input type="checkbox" value="">Bedbound</label>
    </div>
    <div class="checkbox-inline">
      <label><input type="checkbox" value="">Chair Bound</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Ambulatory Aid</label>
    </div>
    <div class="checkbox-inline">
      <label><input type="checkbox" value="">Unsteady Balance/Gait</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Amputations</label>
    </div>
    <div class="checkbox-inline">
      <label><input type="checkbox" value="">Joint Pain/Stiffness</label>
    </div>
    
    <div class="checkbox-inline">
      <label><input type="checkbox" value="">Contracture</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Paralysis</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Arthritis</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Falls</label>
    </div>
    <div class="date">
      <label>Date of last fall: <input type="date" name="dolf" value=""></label>
    </div>
    <div class="btn-group">
    <input type="submit" name="submit" value="Save" onclick="affirm()"> 
    <input type="button" class="btn btn-default" onclick="myFunctionreset7()" value="Reset form">
    </div>
 
  </form>
</div>  
      </div>
      <div data-role="collapsible">
        <h3>NEUROSENSORY</h3>
             <h2>Nursing assessment and observation of signs/symptoms</h2>
        <p>Check all applicable to Client Status</p>
<div class="container">
      
  <form id="myForm8" class="form" role="form"  method="post" action="display.php">

    <div class="checkbox">
      <label><input type="checkbox" value="">WNL-No Problem</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Alert</label>
    </div>
    <div class="checkbox-inline">
      <label><input type="checkbox" value="">Lethargic</label>
    </div>
    <div class="checkbox-inline" >
      <label><input type="checkbox" value="">Forgetful</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Disoriented</label>
    </div>
    <div class="checkbox-inline">
      <label><input type="checkbox" value="">Dizziness</label>
    </div>
    <div class="checkbox-inline">
      <label><input type="checkbox" name="tremors" value="">Tremors</label>
    </div>
    
    <div class="checkbox-inline">
      <label><input type="checkbox" value="">Agitated</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Grasp:</label>
    </div>
    <div class="checkbox-inline">
      <label><input type="checkbox" value="">Left: </label>
    </div>
    <div class="checkbox-inline">
      <label><input type="checkbox" value="">Right</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Pupils equal/reactive to light</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Oriented to: </label>
    </div>
<div class="checkbox-inline">
      <label><input type="checkbox" value="">Time </label>
    </div>
<div class="checkbox-inline">
      <label><input type="checkbox" value="">Place </label>
    </div>
<div class="checkbox-inline">
      <label><input type="checkbox" value="">Person</label>
    </div>
<div class="text">
      <label>Other: <input type="text" name="other" value=""></label>
    </div>
    <div class="btn-group">
    <input type="submit" name="submit" value="Save" onclick="affirm()"> 
    <input type="button" class="btn btn-default" onclick="myFunctionreset8()" value="Reset form">
    </div>

</form>
</div> 
      </div>
      <div data-role="collapsible">
        <h3>NUTRITION</h3>
        <p>I'm the expanded content.</p>
      </div>
      <div data-role="collapsible">
        <h3>ENDOCRINE</h3>
        <p>I'm the expanded content.</p>
      </div>
      <div data-role="collapsible">
        <h3>ABUSE</h3>
        <p>I'm the expanded content.</p>
      </div>
      <div data-role="collapsible">
        <h3>IV THERAPY</h3>
        <p>I'm the expanded content.</p>
      </div>
      <div data-role="collapsible">
        <h3>MENTAL/BEHAVIOR</h3>
        <p>I'm the expanded content.</p>
      </div>
      <div data-role="collapsible">
        <h3>HOME SAFETY</h3>
        <p>I'm the expanded content.</p>
      </div>
<div data-role="collapsible">
  <h1>NURSING INTERVENTIONS/INSTRUCTIONS/TEACHINGS AND RESPONSES</h1>
   <p></p>
  <div data-role="collapsible">
    <h1>SKILLED OBSERVATION AND ASSESSMENT</h1>
    <p></p>
<div class="checkbox" class="form-group">
      <label>
<input type="checkbox"  id="soa1" name="soa"  <?php if (isset($soa) && $soa=="PRN") echo "checked"; ?> value="PRN" onclick="checksc8(this)">Assess/observe s/s of complications</label>
<input type="hidden" id="sc8" name="sc8" value="0">
<div class="checkbox" class="form-group">
      <label>
<input type="checkbox"  id="soa2" name="soa"  <?php if (isset($soa) && $soa=="PRN") echo "checked"; ?> value="PRN" onclick="checksc8(this)">Assess/observe personal care, ADL's</label>
<input type="hidden" id="sc8" name="sc8" value="0">

    </div>
<div class="checkbox" class="form-group">
      <label>
<input type="checkbox"  id="soa3" name="soa"  <?php if (isset($soa) && $soa=="PRN") echo "checked"; ?> value="PRN" onclick="checksc8(this)">Assess/observe changes in pt. condition</label>
<input type="hidden" id="sc8" name="sc8" value="0">

    </div>
<div class="checkbox" class="form-group">
      <label>
<input type="checkbox"  id="soa2" name="soa"  <?php if (isset($soa) && $soa=="PRN") echo "checked"; ?> value="PRN" onclick="checksc8(this)">Assess/observe hydration status</label>
<input type="hidden" id="sc8" name="sc8" value="0">

    </div>
<div class="checkbox" class="form-group">
      <label>
<input type="checkbox"  id="soa2" name="soa"  <?php if (isset($soa) && $soa=="PRN") echo "checked"; ?> value="PRN" onclick="checksc8(this)">Assess/observe s/s of infection</label>
<input type="hidden" id="sc8" name="sc8" value="0">

    </div>
<div class="checkbox" class="form-group">
      <label>
<input type="checkbox"  id="soa2" name="soa"  <?php if (isset($soa) && $soa=="PRN") echo "checked"; ?> value="PRN" onclick="checksc8(this)">Assess/observe medication compliance</label>
<input type="hidden" id="sc8" name="sc8" value="0">

    </div>
<div class="checkbox" class="form-group">
      <label>
<input type="checkbox"  id="soa2" name="soa"  <?php if (isset($soa) && $soa=="PRN") echo "checked"; ?> value="PRN" onclick="checksc8(this)">Assess/observe therapeutic effectiveness
of medication regimen</label>
<input type="hidden" id="sc8" name="sc8" value="0">

    </div>
<div class="checkbox" class="form-group">
      <label>
<input type="checkbox"  id="soa2" name="soa"  <?php if (isset($soa) && $soa=="PRN") echo "checked"; ?> value="PRN" onclick="checksc8(this)">Assess/observe therapeutic effectiveness
of diabetic care</label>
<input type="hidden" id="sc8" name="sc8" value="0">

    </div>
<div class="checkbox" class="form-group">
      <label>
<input type="checkbox"  id="soa2" name="soa"  <?php if (isset($soa) && $soa=="PRN") echo "checked"; ?> value="PRN" onclick="checksc8(this)">Assess/observe side effects of
medications</label>
<input type="hidden" id="sc8" name="sc8" value="0">

    </div>
<div class="checkbox" class="form-group">
      <label>
<input type="checkbox"  id="soa2" name="soa"  <?php if (isset($soa) && $soa=="PRN") echo "checked"; ?> value="PRN" onclick="checksc8(this)">Assess/observe factors/risk factors</label>
<input type="hidden" id="sc8" name="sc8" value="0">

    </div>
<div class="checkbox" class="form-group">
      <label>
<input type="checkbox"  id="soa2" name="soa"  <?php if (isset($soa) && $soa=="PRN") echo "checked"; ?> value="PRN" onclick="checksc8(this)">Assess s/s of Hypo/Hyperglycemia</label>
<input type="hidden" id="sc8" name="sc8" value="0">

    </div>
<div class="checkbox" class="form-group">
      <label>
<input type="checkbox"  id="soa2" name="soa"  <?php if (isset($soa) && $soa=="PRN") echo "checked"; ?> value="PRN" onclick="checksc8(this)">Assess bowel/urinary elimination</label>
<input type="hidden" id="sc8" name="sc8" value="0">

    </div>
<div class="checkbox" class="form-group">
      <label>
<input type="checkbox"  id="soa2" name="soa"  <?php if (isset($soa) && $soa=="PRN") echo "checked"; ?> value="PRN" onclick="checksc8(this)">Evaluate plan of care/compliance with POC</label>
<input type="hidden" id="sc8" name="sc8" value="0">

    </div>
    </div>
  </div>
 <div data-role="collapsible">
    <h1>SKILLED INSTRUCTIONS</h1>
    <p>I'm the expanded content in the nested collapsible block.</p>
  </div>
</div>
     
 

  <div data-role="footer" data-position="fixed">
     <h1><?php include 'footer.php';?></h1>
  </div>
</div>


   </div>
  </div>



<script>
function myFunctionreset0() {
    document.getElementById("myForm0").reset();
    document.getElementById("myDate").value = "";
    document.getElementById("starttime").value = "";
    document.getElementById("endtime").value = "";
}

function myFunctionreset1() {
    document.getElementById("myForm1").reset();
    document.getElementById("sc1").value = "0";
    document.getElementById("sc2").value = "0";
    document.getElementById("sc3").value = "0";
    document.getElementById("sc4").value = "0";
    document.getElementById("sc5").value = "0";
    document.getElementById("sc6").value = "0";
    document.getElementById("sc7").value = "0";
    document.getElementById("sc8").value = "0";
}

function myFunctionreset2() {
    document.getElementById("myForm2").reset();
}
function myFunctionreset3() {
    document.getElementById("myForm3").reset();
}

function myFunctionreset4() {
    document.getElementById("myForm4").reset();
}
function myFunctionreset5() {
    document.getElementById("myForm5").reset();
}

function myFunctionreset6() {
    document.getElementById("myForm6").reset();
}
function myFunctionreset7() {
    document.getElementById("myForm7").reset();
}

function myFunctionreset8() {
    document.getElementById("myForm8").reset();
}
function myFunctionreset9() {
    document.getElementById("myForm9").reset();
}

function myFunctionreset10() {
    document.getElementById("myForm10").reset();
}

function myFunctionreset11() {
    document.getElementById("myForm11").reset();
}
</script>



<script>
function checksc1(x) {
  if (x.checked === true) {
    document.getElementById("sc1").value = "1";
document.getElementById("sc2").value = "0";
document.getElementById("sc3").value = "0";
document.getElementById("sc4").value = "0";

  } else {
    document.getElementById("sc1").value = "0";
  }
}

function checksc2(x) {
  if (x.checked === true) {
    document.getElementById("sc2").value = "1";
    document.getElementById("sc1").value = "0";
    document.getElementById("sc3").value = "0";
    document.getElementById("sc4").value = "0";
  } else {
    document.getElementById("sc2").value = "0";
  }
}

function checksc3(x) {
  if (x.checked === true) {
    document.getElementById("sc3").value = "1";
    document.getElementById("sc2").value = "0";
    document.getElementById("sc1").value = "0";
    document.getElementById("sc4").value = "0";
  } else {
    document.getElementById("sc3").value = "0";
  }
}

function checksc4 (x) {
  if (x.checked === true) {
    document.getElementById("sc4").value = "1";
    document.getElementById("sc3").value = "0";
    document.getElementById("sc2").value = "0";
    document.getElementById("sc1").value = "0";
  } else {
    document.getElementById("sc4").value = "0";
  }
}



function checksc5(x5) {
  if (x5.checked === true) {
    document.getElementById("sc5").value = "1";
  } else {
    document.getElementById("sc5").value = "0";
  }
}

function checksc6(x6) {
  if (x6.checked === true) {
    document.getElementById("sc6").value = "1";
  } else {
    document.getElementById("sc6").value = "0";
  }
}


function checksc7(x7) {
  if (x7.checked === true) {
    document.getElementById("sc7").value = "1";
  } else {
    document.getElementById("sc7").value = "0";
  }
}


function checksc8(x8) {
  if (x8.checked === true) {
    document.getElementById("sc8").value = "1";
  } else {
    document.getElementById("sc8").value = "0";
  }
}

function checksc9(x) {
  if (x.checked === true) {
    document.getElementById("sc9").value = "1";
document.getElementById("sc10").value = "0";
document.getElementById("sc11").value = "0";
document.getElementById("sc12").value = "0";
document.getElementById("sc13").value = "0";
  } else {
    document.getElementById("sc9").value = "0";
  }
}

function checksc10(x) {
  if (x.checked === true) {
    document.getElementById("sc10").value = "1";
document.getElementById("sc9").value = "0";
document.getElementById("sc11").value = "0";
document.getElementById("sc12").value = "0";
document.getElementById("sc13").value = "0";
  } else {
    document.getElementById("sc10").value = "0";
  }
}

function checksc11(x) {
  if (x.checked === true) {
    document.getElementById("sc11").value = "1";
document.getElementById("sc9").value = "0";
document.getElementById("sc10").value = "0";
document.getElementById("sc12").value = "0";
document.getElementById("sc13").value = "0";
  } else {
    document.getElementById("sc11").value = "0";
  }
}

function checksc12(x) {
  if (x.checked === true) {
    document.getElementById("sc12").value = "1";
document.getElementById("sc9").value = "0";
document.getElementById("sc10").value = "0";
document.getElementById("sc11").value = "0";
document.getElementById("sc13").value = "0";
  } else {
    document.getElementById("sc12").value = "0";
  }
}
function checksc13(x) {
  if (x.checked === true) {
    document.getElementById("sc13").value = "1";
document.getElementById("sc9").value = "0";
document.getElementById("sc10").value = "0";
document.getElementById("sc11").value = "0";
document.getElementById("sc12").value = "0";
  } else {
    document.getElementById("sc13").value = "0";
  }
}

</script>

<script>



function cDate() {
var SOC = new Date();
var SOCmo=SOC.getUTCMonth()+1;
var SOCdd=SOC.getUTCDate();
var SOCyy=SOC.getUTCFullYear();
var curdatestr=String(SOCyy)+"/"+String(SOCmo)+"/"+String(SOCdd);

//document.getElementById("SOC").value=new Date();

document.getElementById("service_date").value=SOCyy+"/"+SOCmo+"/"+SOCdd;

    
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

//document.getElementById("myDate").value=new Date();


var d = document.getElementById("myDate").value;
var end = new Date(d);
end.setDate(end.getDate() + 0);

var m   = end.getUTCMonth()+1;
var dey = end.getUTCDate();
var y   = end.getUTCFullYear();

var petsa = m+"/"+dey+"/"+y;
var petsa1 = y+"-"+m+"-"+dey;
document.getElementById("myDate").value=petsa1;
//document.getElementById("myDate").value=petsa;

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

<script>
function whicharm() {
    var x = document.getElementById("arm").selectedIndex;
    document.getElementById("arm").value=document.getElementsByTagName("option")[x].value;
}


function tsek1() {
   document.getElementById("tsek1").style.backgroundColor = "yellow";
}
</script>

<script src="src_script.js"></script>


</body>
</html>

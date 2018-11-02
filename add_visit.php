<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<div data-role="page">
  <div data-role="header">
    <h1>Welcome To My Homepage</h1>
  </div>

  <div data-role="main" class="ui-content">
    <a href="#myPopup" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all ui-icon-check ui-btn-icon-left">Popup Selection Menu</a>

    <div data-role="popup" id="myPopup" class="ui-content" style="min-width:350px;">
      <form method="post" action="demoform.asp">
        <fieldset class="ui-field-contain">
          <label for="clinician">Clinician</label>
          <select name="clinician" id="clinician">
            <option value="RN">RN</option>
            <option value="PT">PT</option>
            <option value="ST">ST</option>
            <option value="OT">OT</option>
            <option value="MSW">MSW</option>
            <option value="HHA">HHA</option>
            <option value=""></option>
          </select>
          <label for="Service">Service</label>
          <select name="Service" id="Service">
            <option value="G0154">G0154 - RN/LPN Direct Skilled Services</option>
            <option value="PT">PT</option>
            <option value="ST">ST</option>
            <option value="OT">OT</option>
            <option value="MSW">MSW</option>
            <option value="HHA">HHA</option>
            <option value=""></option>
          </select>
          <label for="location">location</label>
          <select name="location" id="location">
            <option value=""></option>
            <option value="Q5001">(Q5001) Patient's home/residence</option>
            <option value="Q5002">(Q5002) Assisted living facility</option>
            <option value="Q5009">(Q5009) Place not otherwise specified (NOS)</option>
            </select>

        </fieldset>
        <input type="submit" data-inline="true" value="Submit">
      </form>
    </div>
  </div>

  <div data-role="footer">
    <h1>Footer Text</h1>
  </div>
</div> 

</body>
</html>
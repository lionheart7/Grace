<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
  "http://www.w3.org/TR/html4/loose.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

		<title>Pariox | </title>
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type"/>
	 <!-- Framework CSS -->
    <link rel="stylesheet" href="/blueprintcss/screen.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="/blueprintcss/print.css" type="text/css" media="print">
    <!--[if lt IE 8]><link rel="stylesheet" href="/blueprintcss/ie.css" type="text/css" media="screen, projection"><![endif]-->
    <link type="text/css" href="/jquery/themes/cupertino/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
    <link type="text/css" href="/facebox/facebox.css" rel="stylesheet" />
    <style type="text/css" media="screen">
      p, table, hr, .box { margin-bottom:25px; }
      .box p { margin-bottom:10px; }
    </style>
    <style type="text/css">a.ui-dialog-titlebar-close { display:none }</style>
	  
					<link rel="stylesheet" href="/templates/css/calendar.css" type="text/css" media="screen" charset="utf-8" />
					<link rel="stylesheet" href="/templates/css/pariox_old.css" type="text/css" media="screen" charset="utf-8" />
					<link rel="stylesheet" href="/templates/css/calendar.png" type="text/css" media="screen" charset="utf-8" />
					<link rel="stylesheet" href="/templates/css/datePicker.css" type="text/css" media="screen" charset="utf-8" />
					<link rel="stylesheet" href="/templates/css/pariox.css" type="text/css" media="screen" charset="utf-8" />
						<link rel="stylesheet" href="/templates/patients/css/patient.css" type="text/css" media="print" charset="utf-8" />    <script type="text/javascript" src="/jquery/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/jquery/jquery.livequery.js"></script>
    <script type="text/javascript" src="/jquery/jquery.form.js"></script>
    <script type="text/javascript" src="/facebox/facebox.js"></script>
    
	  	    <script src="/templates/js/modal.js?d797efc448e45215e9ac7632aee8365d"></script>
	  	    <script src="/templates/js/date.js?d797efc448e45215e9ac7632aee8365d"></script>
	  	    <script src="/templates/js/frequencies.js?d797efc448e45215e9ac7632aee8365d"></script>
	  	    <script src="/templates/js/hooks.js?d797efc448e45215e9ac7632aee8365d"></script>
	  	    <script src="/templates/js/clinicians.js?d797efc448e45215e9ac7632aee8365d"></script>
	  	    <script src="/templates/js/electronic_forms.js?d797efc448e45215e9ac7632aee8365d"></script>
	  	    <script src="/templates/js/jquery.tablesorter.pager.js?d797efc448e45215e9ac7632aee8365d"></script>
	  	    <script src="/templates/js/jquery.idletimer.js?d797efc448e45215e9ac7632aee8365d"></script>
	  	    <script src="/templates/js/calendar_module.js?d797efc448e45215e9ac7632aee8365d"></script>
	  	    <script src="/templates/js/jquery.idletimeout.js?d797efc448e45215e9ac7632aee8365d"></script>
	  	    <script src="/templates/js/jquery.metadata.js?d797efc448e45215e9ac7632aee8365d"></script>
	  	    <script src="/templates/js/schedule.js?d797efc448e45215e9ac7632aee8365d"></script>
	  	    <script src="/templates/js/patient.js?d797efc448e45215e9ac7632aee8365d"></script>
	  	    <script src="/templates/js/jquery.datePicker.js?d797efc448e45215e9ac7632aee8365d"></script>
	  	    <script src="/templates/js/assign.js?d797efc448e45215e9ac7632aee8365d"></script>
	  	    <script src="/templates/js/jquery.tablesorter.min.js?d797efc448e45215e9ac7632aee8365d"></script>
	  	    <script src="/templates/patients/js/patients.js?d797efc448e45215e9ac7632aee8365d"></script>
	  		
	</head>
	
	<body>
			<style type="text/css">
#idletimeout { background:#CC5100; border:3px solid #FF6500; color:#fff; font-family:arial, sans-serif; text-align:center; font-size:12px; padding:10px; position:relative; top:0px; left:0; right:0; z-index:100000; display:none; }
#idletimeout a { color:#fff; font-weight:bold }
#idletimeout span { font-weight:bold }
</style>

<!-- CJM comment out this div 11/9/11 -->
<!--<div id="idletimeout">
	You will be logged off in <span><!-- countdown place holder </span>&nbsp;seconds due to inactivity. 
	<a id="idletimeout-resume" href="#">Click here to continue using pariox</a>.
</div>-->
<div id="head_wrap" class="clear">
  <div class="container">
    <div class="span-24 last">
      <p id="logo">
        Pariox  <!-- CJM ticket #300 add check for admin user -->
      </p>
      <p id="logged_in_as">
        Welcome: PRECIOUS LIFE      </p>
    </div>    
  </div>
</div>
<div id="nav-wrap">
  <div class="container">
  <div class="span-24 last">
      <!-- CJM ticket #157/#83 -->
      <!-- CJM ticket #519 check for missing info in profile -->
      <!-- CJM ticket #609 6/20/13 -->
    <ul id="main_nav" class="horizontal">
            
       
      	<li><a  href="/agency" class='ui-corner-all'>Company</a></li>
      	      		<li><a  href="/agency/billing" class='ui-corner-all'>Billing</a></li>
      	      	      		<li><a  href="/agency/sources" class='ui-corner-all'>Referral Sources</a></li> <!-- CJM ticket #154 -->
      	      	<li><a  href="/clinicians" class='ui-corner-all'>Users</a></li>
            
            
      
      <!--CJM ticket #505 -->
            		<li><a  href="/agency/payroll" class='ui-corner-all'>Payroll</a></li>
      	      
      <li><a  href="/reports" class='ui-corner-all'>Reports</a></li>

      <!-- CJM ticket #239 add company messaging feature -->
            <li><a  href="/clinicians/messages" class='ui-corner-all'>Messages</a></li>
      
      <!-- CJM ticket #251 electronic forms, actually leave this out for now -->
      <!--
            <li><a  href="/electronic_forms/blankForms" >Pariox Forms</a></li>
       -->

      <li><a  href="/account/login/logout" class="ui-corner-all">Logout</a></li>
              <!-- CJM 5/23/12 -->
      <li><a  style="color:#008000;" href="/clinicians/help" class='ui-corner-all'>Help</a></li>  <!-- CJM ticket #259 -->
          </ul>
      </div>
  </div>
</div>			<div class="container">
  <div class="span-18">
	     <div id="patient-top">
       <div class="span-11"> <!-- CJM ticket #342 change from span-12 to span-11 -->
		 <h2><span>PT</span> :: CANALES, JOSEPHINE</h2>
		 <p class='contact'>301 W. MARQUETTE RD APT 214</p>
		 		  <p class='contact'>CHICAGO, IL 60621</p>
		  <!-- CJM ticket #282 add secondary phone -->
		  <!--<p class='contact'></p>-->
		  <p class='contact'>Home: (312) 434-9072</p>
		  <p class='contact'>Sec: </p>
		  <!-- CJM ticket #397 show pertinent info display-only -->
		         </div>
       <div class="span-7 last"> <!-- CJM ticket #342 change from span-6 to span-7 -->
         <div id="details" class="ui-corner-top" style="font-size: 90%">
          <p class="box-top ui-corner-top">Details <span>Discharge</span></p>
          <dl>
            <dt>DOB</dt>  <!-- CJM ticket #93 -->
	      <!-- CJM ticket #506 -->
            <dd>
                <strong>07/22/1947 (68)</strong>
                <span style="float:right;font-weight:bold;">Sex: F</span> <!-- CPR ticket #620 -->
            </dd> <!-- CJM ticket #93 -->
	    	    <!-- CJM ticket #287 -->
            <!--<dt>Created</dt>-->
	    <dt>Created/Rec</dt>
	    	    <dd>12/10/14&nbsp;&nbsp;/&nbsp;&nbsp;12/10/14</dd>
	    	    <!-- CJM end of code changes for ticket #287 -->
	    <!-- CJM ticket #342 -->
	    	    <!-- CJM end of added code for ticket #342 -->
            <dt>Ref Source</dt>
	    <!-- CJM ticket #212 -->
	    				<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</dd>
			    	    <!-- CJM end of changes for ticket #212 -->
            <dt>Insurance</dt>
            <dd><strong>Medicare</strong></dd>
            <dt>SOC-EOC</dt>
            <dd>12/08/14	    <!-- CJM ticket #277 -->
              	                                    - 02/05/2015                            </dd>

	    <!-- CJM ticket #273 -->
            	    <!-- CJM ticket #414 include medicare patients for authorized/requested -->
	    	    	    <!-- CJM ticket #258 add clinical contact info -->
	                <dt>Contact</dt>
	    <dd>GLENDA NANO</dd>
            <dt>Contact Ph</dt>
	    <dd>630-635-2655</dd>
	    
          </dl>
		  <input type="hidden" name="fullURL" id="fullURL" value="/patients/view/AzBVNlk8BTNUZgMx" />
         </div>
       </div>
    </div>

	
    <div class="clear">&nbsp;</div>
    <div  id="patient-tabs">
      <ul>
       <li>
         <a href="/patients/schedule/index/BTZSMQBlVWMFN1Bi" rel="tab-content">Schedule</a>
       </li>
       <li>
         <a href="/patients/profile/index/UWIBYlI3ADZVZ1Jg" rel="tab-content">Profile</a>
       </li>
       <li>
          <a href="/patients/comments/index/VGcCYVE0UmQCMAc1" rel="tab-content" id="comments-tab">Comments</a>
        </li>
        <!-- CJM ticket #461 remove the Log tab for now, then added it right back -->
        <li>
           <a href="/patients/history/ATIAY1cyAjRXZQU3" rel="tab-content">Log</a>
         </li>
         <li>
            <!--<a href="/patients/treatments/" rel="tab-content">Treatments</a>-->
	    <a href="/patients/treatments/175966main" rel="tab-content">Treatments</a>  <!-- CJM ticket #711 7/2/15 -->
          </li>
	 <!-- CJM ticket #261 add new tab for "Overview" -->
	        <li>
           <!--<a href="/patients/overview/" rel="tab-content">Care Plan</a>-->
	   <a href="/patients/overview/175966main" rel="tab-content">Care Plan</a> <!-- CJM ticket #582 -->
         </li>
		 <!-- CJM ticket #251 add new tab for eForms -->
	        <li>
           <a href="/patients/eforms/Dj0DYFk8VmAPPVBi" rel="tab-content">eForms</a>
         </li>
		 <!-- CJM ticket #251 add new tab for blank eForms -->
	        <li>
           <a href="/patients/blankForms/BjUBYlg9VWNQYgIw" rel="tab-content">Blank Forms</a>
         </li>
	        
      </ul>
    </div>
    
  </div>
  <div class="span-6 last">
  <form method='post' action='/agency/search'>
    <input type='text' name='search_search' value='' />
     <input type="submit" name="submit" value="Find" /><br />
     <label>Search Discharge</label> <input type="checkbox" name="search_discharge" value="search_discharge" />
  </form>
    <div class="sidebar-widget">
   <!-- CJM ticket #322 use https instead of http, and add postal, and user urlencode -->
<a href="https://maps.google.com/maps?f=q&source=embed&hl=en&geocode=&q=301+W.+MARQUETTE+RD+APT+214+CHICAGO%2C+IL+60621&ie=UTF8&hq=&hnear=301+W.+MARQUETTE+RD+APT+214+CHICAGO%2C+IL+60621&z=13" target="_blank">
	<!--<img src="/patients/google_map/" width="228" height="228" /></a>-->
        <!-- CJM ticket #322 4/29/13 use the mapPath variable directly and add alt attribute so a link will display in Firefox all the time -->
	<img src="https://maps.google.com/maps/api/staticmap?size=228x228&markers=color:red|label:P|301+W.+MARQUETTE+RD+APT+214+CHICAGO%2C+IL+60621&sensor=false" width="228" height="228" alt="Google Map"/></a>

 </div>
<div class="sidebar-widget">
  <h3 class="ui-widget-header">Frequencies</h3>
  <div id="freq-sidebar">
    
    <dl>
    
       
                
        <dt>
         12/08/2014<br />
          	            Physical Therapy        </dt>
        <dd id="tmt_freq_175966">
                    
          	   <!-- CJM ticket #462 -->
	   	               	        <!-- CJM ticket #462 -->
              <!--<p class=''>-->
	      <p >
           <!-- CJM end of code changes for ticket #462 -->
                
                		  <!-- CJM ticket #459 -->
		                  <strong>2W6</strong>
                  12/14/14 - 
                  01/24/15                                </p>
                                    <input type="hidden" id="last_day_175966" value="01/25/2015" />
                                	    <!-- CJM ticket #459 -->
	          </dd>
                  </dl>
        
  </div>

  <h3 class="ui-widget-header">Assignment</h3>
  <div id="assign-sidebar"> 
    <dl>

      <!-- CJM ticket #549 -->
               <dt style="font-size:105%">Doctor</dt>
	 <dd style="font-size:85%">Name:
	 SORIANO, EDWIN	          <br />Phone:
	 (630)701-9009</dd>
	             <!-- CJM end of added code for ticket #549 -->

      <!-- CJM ticket #377 -->
               <dt style="font-size:105%">Case Manager</dt>
	 <dd style="font-size:85%">Name:
	 MARK	          <br />Phone:
	 (630)797-5157</dd>
	             <!-- CJM end of added code for ticket #377 -->

            <!-- CJM ticket #79 -->
               <dt>PT</dt>
       <dd>Therapeutic Services of America		<!-- CJM end of changes for ticket #79 -->

	   <!-- CJM ticket #482 -->
       		         </dd>
         
            
    </dl>

  </div>
  
  <h3 class="ui-widget-header">Files</h3> 
  <div id="files-sidebar">
     <ul>
    
              <li >
         <img src="/static/images/silk/disk_download.png" />
	  <!-- CJM remove the word "View" below -->
          <!--<a href="/loadfile/patient/" target="_blank">View </a>-->
	  <a href="/loadfile/patient/MjAxNTAxMTkxMDA3MTlfNDU3LnBkZg==" target="_blank">1/10/15 pt visit</a>
	  <!-- CJM ticket #198 -->
          	  	          </li>
                 </ul>
     <!-- CJM ticket #198 -->
          <!-- CJM add check for is_comp_view_only -->
      </div>
   
   
   <h3 class="ui-widget-header">Forms</h3>
    <div id="sidebar-files">
      <ul id="file_list">
                    <li class="inline_list_link ">
             <img src="/static/images/silk/disk_download.png" />
             <a href="/loadfile/agency/2330/PT/aGVwLnBkZg==" target="_blank">hep.pdf</a>
           </li>
                          </ul>

    </div>
   
 </div>  </div>
</div>
<script type="text/javascript" charset="utf-8">
  function treatment_reassign(fid)
  {
    var ndiv = $('<div></div>');
    $(ndiv).load('/agency/reassign/'+fid, function(){
       $(ndiv).dialog({
    			bgiframe: true,
    			height: 500,
    			width: 550,
    			modal: true,
    			title: 'Reassign Treatment',
    			close: function() {
    			  //window.location.reload()  //CJM ticket #221 remove this line
    			},
			buttons: {                 //CJM ticket #189 add cancel button
			  'Cancel': function(){
			    $(ndiv).dialog('close');
			    return false;
			  }
			}
        });
    });
  }
  
  function treatment_removeassign(fid)
  {
  	if(confirm('Are you sure you want to remove this company?'))
  	{
  		$.get('/agency/removeassign/'+fid, function(){
  			window.location.href = window.location;
  		});
  	}
  	else
  	{
  		return false;
  	}
  }
  
</script>
						<!-- CJM 11/9/11 removed all the idle timeout code here which was already commented out -->
	</body>
</html>

 


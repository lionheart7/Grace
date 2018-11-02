
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="robots" content="noindex,nofollow">
		<base href='https://therapyboss.com/'>
		<title>therapyBOSS | Accepted patient referrals</title>
		<link rel="stylesheet" href="styles/modern/main.css?8.4.0_20150805121813">
		<script src="js/combined/common.js?8.4.0_20150805121813"></script>
		<script src="js/combined/hha.js?8.4.0_20150805121813"></script>
		<script>
			var imgPreload = [
				'/images/modern/loading.gif',
				'/images/menu/menu.png',
				'/images/menu/menu-hover.png'];
			for(var _ip=0; _ip<imgPreload.length; _ip++){
				new Image().src = imgPreload[_ip];
			}
			$(function(){
	    		setupFocus();
	    	});
		</script>
		
	</head>
	<body>
		<div id="shade_div" class="shade_div"></div>
		<div id="shade_div2" class="shade_div2"></div>
		<div id="shade_div_outer" class="shade_div_outer"></div>
		<div class="content">
			<header>
				<a href="hha/index.do" class="logo sprites-big-logo47" test-id="hha_wp_l"></a>
				<a href="hha/index.do" class="logotext sprites-big-logo-text" test-id="hha_wp_tbl"></a>
				<div class="logosep"></div>
				<div class="cmpinfo">
						Precious Life Home Health
				</div>
				<div class="top-links-h">
					<a href="hha/help/helpindex.do" target="_blank" test-id="hha_wp_h">
Help					</a>
					&nbsp;|&nbsp;
					<a href="javascript:openDialog('support.ajax','supportDialog');" test-id="hha_wp_cs">
Contact support					</a>
					<a class="spaced" href="logout.do" test-id="hha_wp_so">
Sign out					</a>
				</div>
				<ul class="usr-info">
					<li>
							Roham Aspirin
					</li>
					<li>
							August 13, 2015
					</li>
				</ul>
			</header>
			<nav class="clearfix">
			    <div id="tb-menu-container"></div>
			
				<div class="main-menu " test-id="hha_wp_sm">
                    <div class="popup" ></div>
                    
				</div>                    
				
				<div id="sub-menu" class="sub-menu" test-id="hha_wp_smc"></div>
				
				<div class="sub-menu-mobile">
				    <div class="title" ></div>
    				<div class="popup" ></div>				
				</div>
				
 
  				<ul class="notification">
	            <li>
	                <div id="newMessageBox" class="messaging">
	                    <a href="hha/messageBoard.do" test-id="hha_wp_ms"><span><div style="display:inline;" id="aazone.newMessagesCount"><!-- @end of zone [aazone.newMessagesCount]@ --></div></span></a>
	                </div>
                </li>
 				<li>
	                <div id="holderSticky" class="sticking">
		                <img  src="images/menu/sticky.png" onclick="setupActions('Sticky', 'templateSticky', {})" test-id="hha_wp_s_s"/>
	                </div>
	            </li>
                </ul>
                
			</nav>
			<div class="main">
				<div id="_pageContent">
					<div style="display:inline;" id="aazone.dialog"><script>
  	hideShadeDiv();
</script>
<!-- @end of zone [aazone.dialog]@ --></div>
	<h1>
Accepted patient referrals	</h1>

<div style="display:inline;" id="aazone.error"><!-- @end of zone [aazone.error]@ --></div>
<div style="display:inline;" id="aazone.gridZone">	
			<form id="activeReferralListForm" action="hha/activeReferrals.ajax?skipScope=1" method="post">
		    	<div class="bottom-h clearfix pageCtrls pageRow">
		    		<div class="select">
				    	<label>
				          	<select id="viewFilter" name="viewFilter" test-id="hha_pr_drp" onchange="TB.hha.referral.activelist.viewFilterChanged();">
				            	<option value="ACC" >All active patients</option>
				            			<option value="1" >Home Health Agency Medicare (Part A) active patients</option>
				            			<option value="2" >Home Health Agency Medicaid active patients</option>
				            			<option value="3" >Home Health Agency Private active patients</option>
				            	<option value="all" selected="selected">Find in all patients...</option>
				          	</select>
					    </label>
					</div>
    				<div class="text">
    					<label>
    						<input name="patientLname" id="filter_patientLname" test-id="hha_pr_st" type="text" class="find" maxlength="50" value="" onkeypress="if (isEnter(event)) { submitAJAX('activeReferralListForm', 'gridZone,error');  return false;}" data-default-focus="true"/>
    					</label>
    				</div>
    				<div class="button">
    					<button class="orange-b" onclick="submitAJAX('activeReferralListForm', 'gridZone,error'); return false;" test-id="hha_pr_sb">Find</button>
    				</div>
    			</div>
    		</form>

	<table class="letterNav">
		<tr>
			<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC', 'gridZone');" class="active-alp" test-id="alph_All">All</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=A', 'gridZone');"  test-id="alph_A">A</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=B', 'gridZone');"  test-id="alph_B">B</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=C', 'gridZone');"  test-id="alph_C">C</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=D', 'gridZone');"  test-id="alph_D">D</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=E', 'gridZone');"  test-id="alph_E">E</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=F', 'gridZone');"  test-id="alph_F">F</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=G', 'gridZone');"  test-id="alph_G">G</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=H', 'gridZone');"  test-id="alph_H">H</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=I', 'gridZone');"  test-id="alph_I">I</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=J', 'gridZone');"  test-id="alph_J">J</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=K', 'gridZone');"  test-id="alph_K">K</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=L', 'gridZone');"  test-id="alph_L">L</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=M', 'gridZone');"  test-id="alph_M">M</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=N', 'gridZone');"  test-id="alph_N">N</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=O', 'gridZone');"  test-id="alph_O">O</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=P', 'gridZone');"  test-id="alph_P">P</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=Q', 'gridZone');"  test-id="alph_Q">Q</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=R', 'gridZone');"  test-id="alph_R">R</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=S', 'gridZone');"  test-id="alph_S">S</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=T', 'gridZone');"  test-id="alph_T">T</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=U', 'gridZone');"  test-id="alph_U">U</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=V', 'gridZone');"  test-id="alph_V">V</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=W', 'gridZone');"  test-id="alph_W">W</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=X', 'gridZone');"  test-id="alph_X">X</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=Y', 'gridZone');"  test-id="alph_Y">Y</td>
				<td onclick="getAJAX('hha/activeReferrals.ajax?skipScope=1&viewFilter=ACC&patientLnameBar=Z', 'gridZone');"  test-id="alph_Z">Z</td>
		</tr>
	</table>

	    	<table class="h-referral-activate-grid">

<tr>
    <th nowrap="true" scope='col' test-id='hha_pr_sr'><a href="javascript:getAJAX('hha/activeReferrals.ajax?viewFilter=all&amp;sortColumn=pr.referralSubmitedOn&amp;pagingNumberPer=10&amp;sortDirection=1&amp;pagingPage=1&amp;skipScope=1', 'gridZone');">Referred</a></th>
    <th nowrap="true" scope='col' test-id='hha_pr_sn'><a href="javascript:getAJAX('hha/activeReferrals.ajax?viewFilter=all&amp;sortColumn=concat%28pri.patientLname%2Cpri.patientFname%29&amp;pagingNumberPer=10&amp;sortDirection=1&amp;pagingPage=1&amp;skipScope=1', 'gridZone');">Name</a></th>
    <th nowrap="true" scope='col' test-id='hha_pr_se'><a href="javascript:getAJAX('hha/activeReferrals.ajax?viewFilter=all&amp;sortColumn=pri.certPeriodFrom&amp;pagingNumberPer=10&amp;sortDirection=1&amp;pagingPage=1&amp;skipScope=1', 'gridZone');">Episode</a></th>
    <th nowrap="true" scope='col' test-id='hha_pr_ss'><a href="javascript:getAJAX('hha/activeReferrals.ajax?viewFilter=all&amp;sortColumn=st.serviceTypeCode&amp;pagingNumberPer=10&amp;sortDirection=1&amp;pagingPage=1&amp;skipScope=1', 'gridZone');">Service</a></th>
    <th nowrap="true" scope='col' test-id='hha_pr_spro'><a href="javascript:getAJAX('hha/activeReferrals.ajax?viewFilter=all&amp;sortColumn=pro.providerName&amp;pagingNumberPer=10&amp;sortDirection=1&amp;pagingPage=1&amp;skipScope=1', 'gridZone');">Provider</a></th>
    <th nowrap="true" scope='col'>Clinician</th>
    <th nowrap="true" scope='col' test-id='hha_pr_spr'><a href="javascript:getAJAX('hha/activeReferrals.ajax?viewFilter=all&amp;sortColumn=col_1_0_&amp;pagingNumberPer=10&amp;sortDirection=1&amp;pagingPage=1&amp;skipScope=1', 'gridZone');">Projected</a></th>
    <th nowrap="true" scope='col'></th></tr>
<tr class="alt0" >			
				

<td >07/24/14
                    04:26 PM</td>

<td ><ul>
	                	<li class="head">
	                		<span class="hasImg">
			                	<a href="hha/patient.do?idMenu=12&patientId=29458" title="Access patient">Gibson, Sharlene</a>
<div style="display:inline;" id="aazone.c_pat_46665">									<img src="images/modern/Contact.png" class="pointer" onclick="getAJAX('hha/hhaInfo!patientInfo.ajax?patientReferralInfo.patientReferralId=46665&zoneName=c_pat_46665', 'c_pat_46665');" title="View contact info">
<!-- @end of zone [aazone.c_pat_46665]@ --></div>			                </span>
	                	</li>	            	
						<li class="small">Female</li>
						<li class="small">05/25/1949
</li>
					</ul></td>

<td ><div class="btspace">07/14 - 09/11/14</div>
	                <a href="javascript:showShadeDivDialog('hha/referralInfo!viewmore.ajax?patientReferral.patientReferralId=46665');">Referral info</a></td>

<td >PT</td>

<td ><span class="hasImg">
	                	TNR Staffing, LLC
<div style="display:inline;" id="aazone.providerInfo_93_46665">							<img src="images/modern/Contact.png" class="pointer" title="Contact" onclick="getAJAX('hha/hhaInfo!providerInfo.ajax?provider.providerId=93&zoneName=providerInfo_93_46665&postMessageParams=talkMessage.patientEpisode.patientEpisodeId%3D37087', 'providerInfo_93_46665');" test-id="hha_p_inf">
<!-- @end of zone [aazone.providerInfo_93_46665]@ --></div>	                </span></td>

<td ><div class="btspace">
							<span class="hasImg">
								Lomongo, Bryan
<div style="display:inline;" id="aazone.contractorInfo_1770_46665">									<img src="images/modern/Contact.png" title="Contact" class="pointer" onclick="getAJAX('hha/hhaInfo!contractorInfo.ajax?providerContractor.providerContractorId=1770&zoneName=contractorInfo_1770_46665&postMessageParams=talkMessage.patientEpisode.patientEpisodeId=37087', 'contractorInfo_1770_46665');" test-id="hha_c_inf">
<!-- @end of zone [aazone.contractorInfo_1770_46665]@ --></div>							</span>
						</div></td>	            

<td >12</td>	            

<td ><div id="holderactions_46665" class="inline">
							<img src="images/modern/opts.png" class="new-opt pointer" test-id="opt" onclick="setupActions('actions_46665', 'templateActions', {
								'patientId':29458,
								'patientEpisodeId':37087,
								'patientReferralId':46665,
								'isEditedReferral':false,
								'isNotFinal':false
							});">
						</div></td>	    		
</tr>
<tr class="alt1" >			
				

<td >07/29/14
                    05:19 PM</td>

<td ><ul>
	                	<li class="head">
	                		<span class="hasImg">
			                	<a href="hha/patient.do?idMenu=12&patientId=29949" title="Access patient">Bialka, Mary</a>
<div style="display:inline;" id="aazone.c_pat_47540">									<img src="images/modern/Contact.png" class="pointer" onclick="getAJAX('hha/hhaInfo!patientInfo.ajax?patientReferralInfo.patientReferralId=47540&zoneName=c_pat_47540', 'c_pat_47540');" title="View contact info">
<!-- @end of zone [aazone.c_pat_47540]@ --></div>			                </span>
	                	</li>	            	
						<li class="small">Female</li>
						<li class="small">09/22/1915
</li>
					</ul></td>

<td ><div class="btspace">07/22 - 09/19/14</div>
	                <a href="javascript:showShadeDivDialog('hha/referralInfo!viewmore.ajax?patientReferral.patientReferralId=47540');">Referral info</a></td>

<td >PT</td>

<td ><span class="hasImg">
	                	TNR Staffing, LLC
<div style="display:inline;" id="aazone.providerInfo_93_47540">							<img src="images/modern/Contact.png" class="pointer" title="Contact" onclick="getAJAX('hha/hhaInfo!providerInfo.ajax?provider.providerId=93&zoneName=providerInfo_93_47540&postMessageParams=talkMessage.patientEpisode.patientEpisodeId%3D37745', 'providerInfo_93_47540');" test-id="hha_p_inf">
<!-- @end of zone [aazone.providerInfo_93_47540]@ --></div>	                </span></td>

<td ><div class="btspace">
							<span class="hasImg">
								Thomas, Ben
<div style="display:inline;" id="aazone.contractorInfo_671_47540">									<img src="images/modern/Contact.png" title="Contact" class="pointer" onclick="getAJAX('hha/hhaInfo!contractorInfo.ajax?providerContractor.providerContractorId=671&zoneName=contractorInfo_671_47540&postMessageParams=talkMessage.patientEpisode.patientEpisodeId=37745', 'contractorInfo_671_47540');" test-id="hha_c_inf">
<!-- @end of zone [aazone.contractorInfo_671_47540]@ --></div>							</span>
						</div></td>	            

<td >9</td>	            

<td ><div id="holderactions_47540" class="inline">
							<img src="images/modern/opts.png" class="new-opt pointer" test-id="opt" onclick="setupActions('actions_47540', 'templateActions', {
								'patientId':29949,
								'patientEpisodeId':37745,
								'patientReferralId':47540,
								'isEditedReferral':false,
								'isNotFinal':false
							});">
						</div></td>	    		
</tr>
<tr class="alt0" >			
				

<td >07/24/14
                    03:41 PM</td>

<td ><ul>
	                	<li class="head">
	                		<span class="hasImg">
			                	<a href="hha/patient.do?idMenu=12&patientId=29442" title="Access patient">Paredones, Barbara</a>
<div style="display:inline;" id="aazone.c_pat_46637">									<img src="images/modern/Contact.png" class="pointer" onclick="getAJAX('hha/hhaInfo!patientInfo.ajax?patientReferralInfo.patientReferralId=46637&zoneName=c_pat_46637', 'c_pat_46637');" title="View contact info">
<!-- @end of zone [aazone.c_pat_46637]@ --></div>			                </span>
	                	</li>	            	
						<li class="small">Female</li>
						<li class="small">05/01/1938
</li>
					</ul></td>

<td ><div class="btspace">07/23 - 09/20/14</div>
	                <a href="javascript:showShadeDivDialog('hha/referralInfo!viewmore.ajax?patientReferral.patientReferralId=46637');">Referral info</a></td>

<td >PT</td>

<td ><span class="hasImg">
	                	TNR Staffing, LLC
<div style="display:inline;" id="aazone.providerInfo_93_46637">							<img src="images/modern/Contact.png" class="pointer" title="Contact" onclick="getAJAX('hha/hhaInfo!providerInfo.ajax?provider.providerId=93&zoneName=providerInfo_93_46637&postMessageParams=talkMessage.patientEpisode.patientEpisodeId%3D37066', 'providerInfo_93_46637');" test-id="hha_p_inf">
<!-- @end of zone [aazone.providerInfo_93_46637]@ --></div>	                </span></td>

<td ><div class="btspace">
							<span class="hasImg">
								Layaoen, Michelle
<div style="display:inline;" id="aazone.contractorInfo_666_46637">									<img src="images/modern/Contact.png" title="Contact" class="pointer" onclick="getAJAX('hha/hhaInfo!contractorInfo.ajax?providerContractor.providerContractorId=666&zoneName=contractorInfo_666_46637&postMessageParams=talkMessage.patientEpisode.patientEpisodeId=37066', 'contractorInfo_666_46637');" test-id="hha_c_inf">
<!-- @end of zone [aazone.contractorInfo_666_46637]@ --></div>							</span>
						</div></td>	            

<td >10</td>	            

<td ><div id="holderactions_46637" class="inline">
							<img src="images/modern/opts.png" class="new-opt pointer" test-id="opt" onclick="setupActions('actions_46637', 'templateActions', {
								'patientId':29442,
								'patientEpisodeId':37066,
								'patientReferralId':46637,
								'isEditedReferral':false,
								'isNotFinal':false
							});">
						</div></td>	    		
</tr>
<tr class="alt1" >			
				

<td >07/24/14
                    03:41 PM</td>

<td ><ul>
	                	<li class="head">
	                		<span class="hasImg">
			                	<a href="hha/patient.do?idMenu=12&patientId=29442" title="Access patient">Paredones, Barbara</a>
<div style="display:inline;" id="aazone.c_pat_46636">									<img src="images/modern/Contact.png" class="pointer" onclick="getAJAX('hha/hhaInfo!patientInfo.ajax?patientReferralInfo.patientReferralId=46636&zoneName=c_pat_46636', 'c_pat_46636');" title="View contact info">
<!-- @end of zone [aazone.c_pat_46636]@ --></div>			                </span>
	                	</li>	            	
						<li class="small">Female</li>
						<li class="small">05/01/1938
</li>
					</ul></td>

<td ><div class="btspace">07/23 - 09/20/14</div>
	                <a href="javascript:showShadeDivDialog('hha/referralInfo!viewmore.ajax?patientReferral.patientReferralId=46636');">Referral info</a></td>

<td >OT</td>

<td ><span class="hasImg">
	                	TNR Staffing, LLC
<div style="display:inline;" id="aazone.providerInfo_93_46636">							<img src="images/modern/Contact.png" class="pointer" title="Contact" onclick="getAJAX('hha/hhaInfo!providerInfo.ajax?provider.providerId=93&zoneName=providerInfo_93_46636&postMessageParams=talkMessage.patientEpisode.patientEpisodeId%3D37066', 'providerInfo_93_46636');" test-id="hha_p_inf">
<!-- @end of zone [aazone.providerInfo_93_46636]@ --></div>	                </span></td>

<td ><div class="btspace">
							<span class="hasImg">
								Kosirog, Peter
<div style="display:inline;" id="aazone.contractorInfo_799_46636">									<img src="images/modern/Contact.png" title="Contact" class="pointer" onclick="getAJAX('hha/hhaInfo!contractorInfo.ajax?providerContractor.providerContractorId=799&zoneName=contractorInfo_799_46636&postMessageParams=talkMessage.patientEpisode.patientEpisodeId=37066', 'contractorInfo_799_46636');" test-id="hha_c_inf">
<!-- @end of zone [aazone.contractorInfo_799_46636]@ --></div>							</span>
						</div></td>	            

<td >6</td>	            

<td ><div id="holderactions_46636" class="inline">
							<img src="images/modern/opts.png" class="new-opt pointer" test-id="opt" onclick="setupActions('actions_46636', 'templateActions', {
								'patientId':29442,
								'patientEpisodeId':37066,
								'patientReferralId':46636,
								'isEditedReferral':false,
								'isNotFinal':false
							});">
						</div></td>	    		
</tr>
<tr class="alt0" >			
				

<td >06/20/14
                    05:23 PM</td>

<td ><ul>
	                	<li class="head">
	                		<span class="hasImg">
			                	<a href="hha/patient.do?idMenu=12&patientId=25998" title="Access patient">Miller, James</a>
<div style="display:inline;" id="aazone.c_pat_40713">									<img src="images/modern/Contact.png" class="pointer" onclick="getAJAX('hha/hhaInfo!patientInfo.ajax?patientReferralInfo.patientReferralId=40713&zoneName=c_pat_40713', 'c_pat_40713');" title="View contact info">
<!-- @end of zone [aazone.c_pat_40713]@ --></div>			                </span>
	                	</li>	            	
						<li class="small">Male</li>
						<li class="small">08/23/1939
</li>
					</ul></td>

<td ><div class="btspace">06/20 - 08/18/14</div>
	                <a href="javascript:showShadeDivDialog('hha/referralInfo!viewmore.ajax?patientReferral.patientReferralId=40713');">Referral info</a></td>

<td >PT</td>

<td ><span class="hasImg">
	                	TNR Staffing, LLC
<div style="display:inline;" id="aazone.providerInfo_93_40713">							<img src="images/modern/Contact.png" class="pointer" title="Contact" onclick="getAJAX('hha/hhaInfo!providerInfo.ajax?provider.providerId=93&zoneName=providerInfo_93_40713&postMessageParams=talkMessage.patientEpisode.patientEpisodeId%3D32597', 'providerInfo_93_40713');" test-id="hha_p_inf">
<!-- @end of zone [aazone.providerInfo_93_40713]@ --></div>	                </span></td>

<td ><div class="btspace">
							<span class="hasImg">
								Tito, Nicole
<div style="display:inline;" id="aazone.contractorInfo_1070_40713">									<img src="images/modern/Contact.png" title="Contact" class="pointer" onclick="getAJAX('hha/hhaInfo!contractorInfo.ajax?providerContractor.providerContractorId=1070&zoneName=contractorInfo_1070_40713&postMessageParams=talkMessage.patientEpisode.patientEpisodeId=32597', 'contractorInfo_1070_40713');" test-id="hha_c_inf">
<!-- @end of zone [aazone.contractorInfo_1070_40713]@ --></div>							</span>
						</div></td>	            

<td >13</td>	            

<td ><div id="holderactions_40713" class="inline">
							<img src="images/modern/opts.png" class="new-opt pointer" test-id="opt" onclick="setupActions('actions_40713', 'templateActions', {
								'patientId':25998,
								'patientEpisodeId':32597,
								'patientReferralId':40713,
								'isEditedReferral':false,
								'isNotFinal':false
							});">
						</div></td>	    		
</tr>
<tr class="alt1" >			
				

<td >07/24/14
                    04:26 PM</td>

<td ><ul>
	                	<li class="head">
	                		<span class="hasImg">
			                	<a href="hha/patient.do?idMenu=12&patientId=29458" title="Access patient">Gibson, Sharlene</a>
<div style="display:inline;" id="aazone.c_pat_46664">									<img src="images/modern/Contact.png" class="pointer" onclick="getAJAX('hha/hhaInfo!patientInfo.ajax?patientReferralInfo.patientReferralId=46664&zoneName=c_pat_46664', 'c_pat_46664');" title="View contact info">
<!-- @end of zone [aazone.c_pat_46664]@ --></div>			                </span>
	                	</li>	            	
						<li class="small">Female</li>
						<li class="small">05/25/1949
</li>
					</ul></td>

<td ><div class="btspace">07/14 - 09/11/14</div>
	                <a href="javascript:showShadeDivDialog('hha/referralInfo!viewmore.ajax?patientReferral.patientReferralId=46664');">Referral info</a></td>

<td >OT</td>

<td ><span class="hasImg">
	                	TNR Staffing, LLC
<div style="display:inline;" id="aazone.providerInfo_93_46664">							<img src="images/modern/Contact.png" class="pointer" title="Contact" onclick="getAJAX('hha/hhaInfo!providerInfo.ajax?provider.providerId=93&zoneName=providerInfo_93_46664&postMessageParams=talkMessage.patientEpisode.patientEpisodeId%3D37087', 'providerInfo_93_46664');" test-id="hha_p_inf">
<!-- @end of zone [aazone.providerInfo_93_46664]@ --></div>	                </span></td>

<td ></td>	            

<td >&nbsp;</td>	            

<td ><div id="holderactions_46664" class="inline">
							<img src="images/modern/opts.png" class="new-opt pointer" test-id="opt" onclick="setupActions('actions_46664', 'templateActions', {
								'patientId':29458,
								'patientEpisodeId':37087,
								'patientReferralId':46664,
								'isEditedReferral':false,
								'isNotFinal':false
							});">
						</div></td>	    		
</tr>			</table>		
<div class="float clear paginationHolder"><div class="paginationContainer"> <span class="float lead"> Page 2 of 2</span><ul class="floatR"><li><a test-id="pgg_first" href="javascript:getAJAX('hha/activeReferrals.ajax?viewFilter=all&amp;sortColumn=pr.patientReferralStatusTime+desc%2C+concat%28pri.patientLname%2C+pri.patientFname%29&amp;pagingNumberPer=10&amp;sortDirection=1&amp;pagingPage=1&amp;skipScope=1', 'gridZone');"> &lt;    &lt;</a></li><li><a test-id="pgg_prev" href="javascript:getAJAX('hha/activeReferrals.ajax?viewFilter=all&amp;sortColumn=pr.patientReferralStatusTime+desc%2C+concat%28pri.patientLname%2C+pri.patientFname%29&amp;pagingNumberPer=10&amp;sortDirection=1&amp;pagingPage=1&amp;skipScope=1', 'gridZone');">&lt;</a></li><li><a test-id="pgg_1" href="javascript:getAJAX('hha/activeReferrals.ajax?viewFilter=all&amp;sortColumn=pr.patientReferralStatusTime+desc%2C+concat%28pri.patientLname%2C+pri.patientFname%29&amp;pagingNumberPer=10&amp;sortDirection=1&amp;pagingPage=1&amp;skipScope=1', 'gridZone');">1</a></li><li class="selectedPage"><a href="javascript:void(0)" test-id="pgg_2">2</a></li></ul></div></div><!-- @end of zone [aazone.gridZone]@ --></div>	
	<script id="template-actions" type="text/x-handlebars-template">
	<img id="{{{id}}}" test-id="opt" title="" style="cursor: pointer;" src="images/modern/opts.png" class="new-opt">
	<div id="popup_{{{id}}}" class="popup-menu hidden-menu" data-width='252' data-is-dialog='false' data-content-class='fg-new-container' data-position='left'>
		<ul>
					<li>
			<a test-id="hha_pr_ap" href='hha/patient.do?idMenu=12&patientId={{{patientId}}}'><span class="img sprites-person"></span><span>Access patient</span></a>
		</li>
		{{#if isEditedReferral}}
		<li>
			<a test-id="hha_pr_er" href='hha/createReferral.do?patientReferralInfo.patientReferralId={{{patientReferralId}}}&returnUrl=hha%2FactiveReferrals.do'><span class="img sprites-edit_form"></span><span>Edit referral</span></a>
		</li>
		{{/if}}
		<li>
			<a test-id="hha_pr_va" href='hha/activityList.do?patientEpisode.patientEpisodeId={{{patientEpisodeId}}}&patientReferral.patientReferralId={{{patientReferralId}}}'><span class="img sprites-items"></span><span>View documentation</span></a>
		</li>
		<li>
			<a test-id="hha_pr_vc" href='hha/calendar.do?patientReferral.patientReferralId={{{patientReferralId}}}&idMenu=12'><span class="img sprites-calendar"></span><span>View calendar</span></a>
		</li>
		{{#if isNotFinal}}
		<li>
			<a test-id="hha_pr_cr" href="javascript:openDialog('hha/activeReferrals!cancel.ajax?patientReferral.patientReferralId={{{patientReferralId}}}', 'dialog');"><span class="img sprites-cancel"></span><span>Cancel referral</span></a>
		</li>
		{{/if}}

		</ul>
	</div>
	</script>
	<script>
	   	var templateActions = Handlebars.compile($('#template-actions').html());
	</script>
				</div>
			</div>
		</div>
		
<div style="display:inline;" id="aazone.stickyDialog"><!-- @end of zone [aazone.stickyDialog]@ --></div><div style="display:inline;" id="aazone.supportDialog"><!-- @end of zone [aazone.supportDialog]@ --></div>		
<div style="display:inline;" id="aazone.recoveryPhone"><!-- @end of zone [aazone.recoveryPhone]@ --></div>		
		<script>
            $(function(){            
                TB.init.hha.init(120000, url('path'), '1', '2');
            });
        </script>
        
<script id="template-notsaved" type="text/x-handlebars-template">
<div id="changesNotSavedDialog">
	<div id="dialogHolder">
		<div class="dialog-h2 prompt">
			<h1 class="dialog">
				Changes not saved			</h1>
			<div class="prompt-body">
Proceed and lose your changes?			</div>
			<div class="button dialogActions">
				<button id="changesNotSavedYesBtn" class="default" data-focus="first">Yes</button>
				<button class="default" onclick="hideSomeConfirmation('changesNotSavedDialog', 2);" data-default-focus="true" data-focus="last">No</button>
			</div>
		</div>
	</div>
</div>
</script>
<script>
   	var templateNotSaved = Handlebars.compile($('#template-notsaved').html());
</script>        
        <script id="template-sticky" type="text/x-handlebars-template">
	<img id="{{{id}}}" test-id="hha_wp_s_s" title="" style="cursor: pointer;" src="images/menu/sticky.png" class="">
	<div id="popup_{{{id}}}" class="popup-menu hidden-menu" data-width='252' data-is-dialog='false' data-content-class='fg-new-container fg-sticky-container' data-position='left'>
		<ul>
							<li>
					<a href="javascript:openDialog('hha/sticky.ajax', 'stickyDialog');" test-id="hha_wp_s_as"><span class="img sprites-addSticky"></span><span>Add sticky</span></a>
				</li>
				<li>
					<a href="javascript:openDialog('hha/viewSticky.ajax', 'stickyDialog', null, function(){$('#dialogHolder').css('top', ($(window).scrollTop()+10)+'px')});" test-id="hha_wp_s_vs"><span class="img sprites-viewSticky"></span><span>View stickies</span></a>
				</li>

		</ul>
	</div>
		</script>
		<script>
		   	var templateSticky = Handlebars.compile($('#template-sticky').html());
		</script>
		<script>
		  	$(function() {
		  		openDialog('hha/recoveryPhonePrompt.ajax','recoveryPhone');
		  	});
	  	</script>  
	</body>
</html>
<!DOCTYPE html>
<html>
<body>

<?php
echo $_SERVER['HTTP_USER_AGENT'];
$browser = get_browser();
print_r($browser);
<input type="date" id=petsa oninput="mobile_user_agent_switch()">
/*
*	Mobile device detection
*/
if( !function_exists('mobile_user_agent_switch') ){
	function mobile_user_agent_switch(){
		$device = '';
		
		if( stristr($_SERVER['HTTP_USER_AGENT'],'ipad') ) {
			$device = "ipad";
		} else if( stristr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') ) {
			$device = "iphone";
		} else if( stristr($_SERVER['HTTP_USER_AGENT'],'blackberry') ) {
			$device = "blackberry";
		} else if( stristr($_SERVER['HTTP_USER_AGENT'],'android') ) {
			$device = "android";
		}
		
		if( $device ) {
			return $device; 
		} return false; {
			return false;
		}
	}
}
?>

</body>
</html>
<!DOCTYPE html>
<html>
<body>

<?php
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$useragent = strtolower($useragent);
 
	if(strrpos($useragent,"iphone") > 0 || strrpos($useragent,"symbianos") > 0 || strrpos($useragent,"ipad") > 0 || strrpos($useragent,"ipod") > 0 || strrpos($useragent,"android") > 0 || strrpos($useragent,"blackberry") > 0 || strrpos($useragent,"samsung") > 0 || strrpos($useragent,"nokia") > 0 || strrpos($useragent,"windows ce") > 0 || strrpos($useragent,"sonyericsson") > 0 || strrpos($useragent,"webos") > 0 || strrpos($useragent,"wap") > 0 || strrpos($useragent,"motor") > 0 || strrpos($useragent,"symbian") > 0)
		echo "Go with Mobile Device!!!";
	else
		echo "Go with normal browser!!!";
?>

</body>
</html>
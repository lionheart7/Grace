<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("209.237.150.206", "261107_grace", "Mary1208", "261107_Grace");

$result = $conn->query("SELECT ClientID, FirstName, LastName FROM Client");

$outp = "[";
 while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"ClientID":"'  . $rs["ClientID"] . '",';
    $outp .= '"FirstName":"'   . $rs["FirstName"]        . '",';
    $outp .= '"LastName":"'. $rs["LastName"]     . '"}'; 
}
 $outp .="]";

$conn->close();

echo($outp);
?>
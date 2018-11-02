<html>
 <body>

 Certification Episode Date: <?php $soc=$_POST["admission"]; 
                    
 
echo date('Y-m-d', strtotime($soc. ' + 0 days'));
echo ' to ';
echo date('Y-m-d', strtotime($soc. ' + 59 days'));


 $favcolor = "red";

switch ($favcolor) {
     case "red":
         echo "Your favorite color is red!";
         break;
     case "blue":
         echo "Your favorite color is blue!";
         break;
     case "green":
         echo "Your favorite color is green!";
         break;
     default:
         echo "Your favorite color is neither red, blue, nor green!";
}
?>

 </body>
 </html> 
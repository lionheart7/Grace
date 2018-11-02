<!DOCTYPE html>
<html>
<body>

<?php
$a=array("2015-10-20","2015-10-24","2015-10-23","2015-10-28","2015-10-25");
array_push($a,"2015-10-26","2015-10-27");
$kount=count($a);
$v="2015-10-22";
$start="2015-10-21";
$end="2015-10-28";
if($v<=$end && $v>=$start){
array_push($a,$v);$kount=count($a);
} else {echo $v."is invalid";}
sort($a);
print_r($a);
print_r($kount);
?>


<select id="car" onchange="ChangeCarList()"> 
  <option value="">-- Car --</option> 
  <option value="1 of 3 SOC: 2015-10-20 ADMITTED">1 of 3 SOC: 2015-10-20 ADMITTED</option> 
  <option value="2 of 3 SOC: 2015-10-20 DISCHARGED">2 of 3 SOC: 2015-10-20 DISCHARGED</option> 
  <option value="3 of 3 SOC: 2015-10-20 TRANSFER">3 of 3 SOC: 2015-10-20 TRANSFER</option> 
</select> 

<select id="carmodel"></select> 

<script>

var carsAndModels = {};
carsAndModels['1 of 3 SOC: 2015-10-20 ADMITTED'] = ['1 of 3 : 2015-10-20 to 2015-10-20', '2 of 3 : 2015-10-20 to 2015-10-20', '3 of 3 : 2015-10-20 to 2015-10-20'];
carsAndModels['2 of 3 SOC: 2015-10-20 DISCHARGED'] = ['1 of 2 : 2015-10-20 to 2015-10-20', '2 of 2 : 2015-10-20 to 2015-10-20'];
carsAndModels['3 of 3 SOC: 2015-10-20 TRANSFER'] = ['1 of 1 : 2015-10-20 to 2015-10-20'];

function ChangeCarList() {
    var carList = document.getElementById("car");
    var modelList = document.getElementById("carmodel");
    var selCar = carList.options[carList.selectedIndex].value;
    while (modelList.options.length) {
        modelList.remove(0);
    }
    var cars = carsAndModels[selCar];
    if (cars) {
        var i;
        for (i = 0; i < cars.length; i++) {
            var car = new Option(cars[i], i);
            modelList.options.add(car);
        }
    }
}
</script>


</body>
</html>
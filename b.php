<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<style>
input:checked {
    display: block; 
    height: 30px;
    width: 30px;
}

p:hover
{
display: block;
background-color:yellow;
font-size: 30px;
}

li:hover
{
display: block;
background-color:yellow;
font-size: 30px;
}

p, label {
    display: block;
    
    padding: 10px;
    border: 1px solid gray;
    margin: 0px;
    font-size: 30px;
    box-shadow: 10px 10px 5px #888888;
}

ul {
    list-style: none;
}
</style>

</head>
<body>

    <h2>Oasis Items</h2>
   
    <div >
      <ul>
        <li><a href="#"><label><p>A - Patient Tracking</p></label></a></li>
        <li><a href="#"> <label id="m0150_a0" for="m0150_0" ><p>0 - None; no charge for current services</p></label>
          <input type="checkbox" name="m0150" id="m0150_0" value="0" onclick="if(this.checked){ check0() } else { uncheck0()}"></a></li>
        <li><a href="#"><p>A - Patient Tracking</p></a></li>
        <li><a href="#"><p>A - Patient Tracking</p></a></li>
        <li><a href="#"><p>A - Patient Tracking</p></a></li>
        <li><a href="#"><p>A - Patient Tracking</p></a></li>
        <li><a href="#"><p>A - Patient Tracking</p></a></li>
        <li><a href="#"><p>A - Patient Tracking</p></a></li>
        <li><a href="#"><p>A - Patient Tracking</p></a></li>
        <li><a href="#"><p>A - Patient Tracking</p></a></li>
      </ul>
    </div>





</body>
</html>

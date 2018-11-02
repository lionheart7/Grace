<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  </head>

  <body>




    <div class="container-fluid">
      <h2>Bb Clients</h2>
      <p>Listing:</p>                              



<?php
include 'config.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM Client WHERE LastName LIKE 'B%' OR LastName LIKE 'b%' ORDER by ClientID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table class='table table-hover table-striped'>
<thead>
<tr>
<th>

<a href='Client_all_ClientIDup.php'><span class='glyphicon glyphicon-chevron-up'></span></a>
<a href='Client_all_ClientID.php'>Client ID</a>
<a href='Client_all_ClientIDdown.php'><span class='glyphicon glyphicon-chevron-down'></span></a>
</th>
<th>
<a href='Client_all_firstnameup.php'><span class='glyphicon glyphicon-chevron-up'></span></a>
<a href='Client_all_firstname.php'>First Name </a>
<a href='Client_all_firstnamedown.php'><span class='glyphicon glyphicon-chevron-down'></span></a>

</th>
<th>
MI
</th>
<th>
<a href='Client_all_lastnameup.php'><span class='glyphicon glyphicon-chevron-up'></span></a>
<a href='Client_all_lastname.php'>Last Name</a>
<a href='Client_all_lastnamedown.php'><span class='glyphicon glyphicon-chevron-down'></span></a>

</th>
</thead>

<tbody>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["ClientID"] . "</td><td>" . $row["FirstName"] . "</td><td>" . $row["MI"] . "</td><td>" . $row["LastName"] ."</td><td>" . $row["Suffix"] . "</td></tr>";
     }
     echo "</tbody></table>";
} else {
     echo "0 results";
}

$conn->close();




?>  

      
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>

</html>
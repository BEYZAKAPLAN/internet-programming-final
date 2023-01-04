
<html>
	<head>
		<title>hakkımızda</title>
	
	</head>
<body >
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
	      <!-- Main content -->
	      <section class="content">
	        <div class="about">
                <p>
                <?php
				error_reporting(E_ALL);

$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "12345678";
$dbName     = "kargocu";

// Create database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


$sql = "SELECT * FROM hakimizda";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);

  echo "<table>
<tr>
<th>hakkımızda</th>
</tr>";
echo "<tr>";
echo "<td>" . $row['hakimizda'] . "</td>";
echo "</tr>";

echo "</table>";
mysqli_close($conn);

?>

                </p>
                 
            </div>
	      </section>
	     
	    </div>
	  </div>
  

</div>


</body>
</html>


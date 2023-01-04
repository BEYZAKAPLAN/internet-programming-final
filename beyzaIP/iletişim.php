
<html>
	<head>
		<title>iletişim</title>
	
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


$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


$sql = "SELECT * FROM iletişim";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);

  echo 'iletişim'."<table>

<tr>

<th>numara</th>
<th>eposta</th>
<th>instagram</th>
</tr>";
echo "<tr>";
echo "<td>" . $row['numara'] . "</td>";

echo "<td>" . $row['eposta'] . "</td>";
echo "<td>" . $row['instagram'] . "</td>";
echo "</tr>";
echo "</table>";



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
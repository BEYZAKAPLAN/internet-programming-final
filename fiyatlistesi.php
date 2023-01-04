
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


$sql = "SELECT * FROM fiyatlar";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);

  echo 'Yurt içi fiyatlar'."<table>

<tr>

<th>5-10 kg</th>
<th>10-20 kg</th>
<th>20-30 kg</th>
<th>30-50 kg</th>
</tr>";
echo "<tr>";
echo "<td>" . $row['5-10'] .  " TL</td>";
echo "<td>" . $row['10-20'] . " TL</td>";
echo "<td>" . $row['20-30'] . " TL</td>";
echo "<td>" . $row['30-50'] . " TL</td>";
echo "</tr>";
echo "<th><h5>Yurt dışı fiyatlar</h5>5-10 kg</th>

<th>10-20 kg</th>
<th>20-30 kg</th>
<th>30-50 kg</th>
";
echo "<tr>";
echo "<td>" . $row['5-10YURTDİŞİ'] .  " TL</td>";
echo "<td>" . $row['10-20YURTDİŞİ'] . " TL</td>";
echo "<td>" . $row['20-30YURTDİŞİ'] . " TL</td>";
echo "<td>" . $row['30-50YURTDİŞİ'] . " TL</td>";
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


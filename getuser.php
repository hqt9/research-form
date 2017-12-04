<?php
$q=$_GET["q"];
// echo $q;

$dsn = "mysql: host=localhost; dbname=testhqt";
try {
	$dbh = new PDO($dsn, 'root', 'root');
	echo 'success'.'<br/>';
} catch (PDOException $e) {
	die ('Error: '.$e->getMessage().'<br/>');
}

$stmt = $dbh->prepare("select * from guest where id = $q");
$stmt->execute();

echo "<table align='center' border='1'>
<caption><h1>Information</h1></caption>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {   //从结果集中获取第二列的所有值
   echo "<tr>";
   echo "<td>" . $row['first_name'] . "</td>";
   echo "<td>" . $row['last_name'] . "</td>";
   echo "<td>" . $row['age'] . "</td>";
   echo "<td>" . $row['homeTown'] . "</td>";
   echo "<td>" . $row['job'] . "</td>";
   echo "</tr>";
}

echo "</table>";

?>
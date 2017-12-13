<?php
$q = $_POST["q"];
$s = $_POST["s"];

// $q = '2';
// echo $q;

$dsn = "mysql: host=localhost; dbname=testhqt";
try {
	$pdo = new PDO($dsn, 'root', 'root');
} catch (PDOException $e) {
	die ('Error: '.$e->getMessage().'<br/>');
}

$stmt = $pdo->prepare("select * from guest where id = $q");
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
if(count($row) > 0) {
   echo json_encode($row[0]);
}else{
   echo $s;
}

?>
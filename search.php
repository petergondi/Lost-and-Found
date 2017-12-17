<?php

if (isset($_POST['search'])==true && empty($_POST['search'])==false){
try {
$dbh = new PDO("mysql:dbname=studentid;host=localhost", 'root', '');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$search = $_POST['search'];
$query = "SELECT * FROM Users WHERE Reg_no LIKE :search";
$stmt = $dbh->prepare($query);
$stmt->bindValue(':search', '%' . $search . '%', PDO::PARAM_INT);
$stmt->execute();
if ($stmt->rowCount() > 0) { 
$result = $stmt->fetchAll();

foreach( $result as $row ) {
echo 'Name:'.$row["name"];
echo '  ';
echo 'Registration no:'.$row['Reg_no'];
echo '  ';
echo 'Posted at :'.$row["terminal"];
if(isset($_POST['delete'])){
    $querry="DELETE * FROM Users WHERE Reg_no={$row['Reg_no']}LIMIT 1 ";
    $stmt = $dbh->prepare($querry);

}
$array=$row['terminal'];

}
} else {
echo 'No id found';
}
}

<?php
if(isset ($_POST["submit"])){

try{

    $pdo = new PDO("mysql:host=localhost;dbname=studentid", "root", "");

    // Set the PDO error mode to exception

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){

    die("ERROR: Could not connect. " . $e->getMessage());

}

try{
 
    $sql = "INSERT INTO Users (name, Reg_no, terminal) VALUES (:name, :reg_no, :terminal)";

    $stmt = $pdo->prepare($sql);
    // bind parameters to statement
    $stmt->bindParam(':name', $_POST['name']);

    $stmt->bindParam(':reg_no', $_POST['reg_no']);

    $stmt->bindParam(':terminal', $_POST['terminal']);
    $name=$_POST['name'];
    $reg_no=$_POST['reg_no'];
    $terminal=$_POST['terminal'];
    // execute the prepared statement
    $stmt->execute();
    echo"posted";
    
} catch(PDOException $e){

    die("ERROR: Could not able to execute $sql. " . $e->getMessage());

}
}

unset($pdo);
// Close connection
header("Location: http://localhost/gisproject/map.html");
 exit;


?>

<?php 
$servername = "localhost";
$username = "root";
$password = "mysql";
$myDB = "users";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", 
        $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::
        ERRMODE_EXCEPTION);
    //echo "Connected succcesfully";
    }
    catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    
}

    $stmt = $conn->prepare("INSERT INTO user (name, age, city, transport)
    	VALUES (:name, :age, :city, :transport)");
  	 	$stmt->bindParam(':name', $name);
  	 	$stmt->bindParam(':age', $age);
  	 	$stmt->bindParam(':city', $city);
  	 	$stmt->bindParam(':transport', $transport);
    	
    	$name = $_POST['voornaam']; 
    	$age = $_POST['age']; 
    	$city = $_POST['city']; 
    	$transport = $_POST['transport']; 
    
    	$stmt->execute();

    	header('Location: users.php');

    	$conn = null;

	
?>


<!-- Huiswerk, radio motor auto fiets, dropdown leeftijd 1-100 -->
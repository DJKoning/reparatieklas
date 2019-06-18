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
    echo "Connection failed: "    . $e->getMessage();
    }

    $user_id = $_GET['userid'];
    $sql = 'DELETE FROM user WHERE user_id = ' . $user_id;
    $query = $conn->prepare($sql);
    $query->execute();

    header('Location: users.php');

    $conn = null;

?>
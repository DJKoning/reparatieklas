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

    $sql = 'SELECT * FROM user';
    $query = $conn->prepare($sql);
    $query->execute();

    $result = $query->fetchAll();
    //var_dump($result);





?>

<table style="border: 10px solid grey">
    <tr>
        <th>Naam</th>
        <th>Leeftijd</th>
        <th>Penislengte</th>
        <th>Vervoer</th>
        <th>Verwijderen</th>
    </tr>
<?php

foreach ($result as $row) {


?>
    <tr>
        <td style="border: 1px solid black"><?php echo $row['name'] ?></td>
        <td style="border: 1px solid black"><?php echo $row['age'] ?></td>
        <td style="border: 1px solid black"><?php echo $row['city'] ?>cm</td>
        <td style="border: 1px solid black"><?php echo $row['transport'] ?></td>
        <td><a href="delete.php?userid=<?php echo $row['user_id'] ?>">Verwijder</a></td>

    </tr>

<?php
    }
?>

</table>

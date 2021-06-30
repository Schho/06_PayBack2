<?php
require('database.php');
$query =$pdo->prepare('SELECT * FROM creditpackages');
$query->execute();

$result = $query->fetchAll();
foreach($result as $result)
{
    echo $result['id'];
    echo$result['name']."<br>";

}
?>
Table

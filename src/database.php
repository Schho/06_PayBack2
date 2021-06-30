<?php



try {

    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root');
} catch (PDOException $e) {
    $error_message = 'Database Error: ';
    $error_message .= $e->getMessage();
    echo $error_message;
    exit();
}
    echo "Hello World";

?>
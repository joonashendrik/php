<?php
$host = 'd83347sa325739';
$db   = 'd83347_books';
$user = 'd83347.mysql.zonevs.eu';
$pass = 'neegrikerohus';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
$stmt = $pdo->prepare("SELECT * FROM books");
$stmt-> execute();
$abooks-> fetchall();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <li> 
    <?php
    foreach($abooks as $book){
    echo "<li>" . $book["title"];
    }
?>
</body>
</html>
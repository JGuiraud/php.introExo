<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php


DEFINE (SERVER, "localhost");
DEFINE (LOGIN, "jerome2");
DEFINE (MDP, "12345");
DEFINE (BASE, "mybase");
// $pdo = new PDO(SERVER, BASE, LOGIN, MDP);
// $pdo = new PDO('mysql:host=localhost;dbname=mybase', 'simplon', 'codeurKiFFeur1');
$connect=mysqli_connect(SERVER, LOGIN, MDP, BASE)or die("oops");

// if (!$connect) {
//     echo 'pb';
// } echo 'yeah';

// var_dump($connect);

$result = mysqli_query($connect, "SELECT * FROM log");

while ($data=mysqli_fetch_assoc($result)) {
    echo "id :".utf8_encode($data['id_login']).'<br/>';
    echo "login :".utf8_encode($data['login']).'<br/>';
    echo "mot de passe :".utf8_encode($data['mdp']).'<br> <hr>';
}

$sql = "UPDATE log SET login='patate' WHERE login='Doe'";

if (mysqli_query($connect, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($connect);
}

$sqldelete = "DELETE FROM log WHERE id_login=6";

if (mysqli_query($connect, $sqldelete)) {
    echo "Record delete successfully";
} else {
    echo "Error deleting record: " . mysqli_error($connect);
}



// $sql = "UPDATE log SET login=jeje WHERE login=glenn";

// if (mysqli_query($connect, $sql)) {
//     echo "yeah";
// } else {
//     echo "booooo ". mysqli_error($connect);
// }

// mysqli_query($connect, "UPDATE log SET login=JEROME33 WHERE login=jérome");





// $dsn = 'mysql:dbname=mybase;host=localhost';
// $user = 'jerome2';
// $password = '12345';

// try {
//     $dbo = new PDO($dsn, $user, $password);
//     echo 'yeah';
// } catch (PDOException $e) {
//     echo 'Connexion échouée : ' . $e->getMessage();
// }



// if (!$connect) {
//     die("oops");
// } else {
//     echo 'yeah!';
// }

// or die("Something went wrong!");

// echo 'test';

?>

</body>
</html>
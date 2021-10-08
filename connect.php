<?php

defined('BASEPATH') OR exit('No direct scripts allowed.');

$host = 'rmit.australiaeast.cloudapp.azure.com';
$user = 'mysterious_eagles';
$password = 'abc123';
$dbname = 'mysterious_eagles';
$dsn = '';

try {
    $dsn = 'mysql:host='. $host . ';dbname='. $dbname;

    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo 'connection failed: '.$e->getMessage();
}


// $servername = "rmit.australiaeast.cloudapp.azure.com";
// $user = "mysterious_eagles";
// $passwd = "abc123";
// $db = "mysterious_eagles";
// $dsn = 'mysql:host=' . $servername . ';dbname=' . $db;
// $pdo = new PDO($dsn, $user, $passwd);

//     if (isset($_POST['signup'])) {
//         $name = $_POST['name'];
//         $username = $_POST['username'];
//         $email = $_POST['email'];
//         $pword = $_POST['pword'];

//         $pword = password_hash($pword, PASSWORD_BCRYPT, array("cost" => 12));

//         $sql = "SELECT COUNT(Email) AS num FROM USERS WHERE Email = :Email";
//         $stmt = $pdo->prepare($sql);
//         $stmt->bindValue(':Email', $email);
//         $stmt->execute();

//         $row = $stmt->fetch(PDO::FETCH_ASSOC);

//         if($row['num'] > 0) {
//             echo "Email already exists";
//         } else {
//             $stmt = $pdo->prepare("INSERT INTO USERS (Name, Username, Email, Password) 
//             VALUES(:name, :username, :email, :password)");

//             $stmt->bindParam(':name', $name);
//             $stmt->bindParam(':username', $username);
//             $stmt->bindParam(':email', $email);
//             $stmt->bindParam(':password', $pword);

//             if($stmt->execute()) {
//                 echo 'Registration successful';
//             } else {
//                 echo 'Registration error';
//             }
//         }

//     }
    ?>
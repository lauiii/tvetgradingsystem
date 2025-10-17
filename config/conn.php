<?php


$server = "localhost";
$user = "root";
$password = "";
$dname = "grading_system";


$conn = new mysqli($server, $user, $password, $dname);

if ($conn->connect_error) {
    die("Connection Failed!.." . $conn->connect_error);
}



// $server = "localhost";
// $user = "u898034708_gradingsystem";
// $password = "Ascttvetgradingsystem!@!_231";
// $dname = "u898034708_gradingsystem";


// $conn = new mysqli($server, $user, $password, $dname);

// if ($conn->connect_error) {
//     die("Connection Failed!.." . $conn->connect_error);
// }

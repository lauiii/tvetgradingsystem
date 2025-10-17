<?php

$student_id = $_SESSION['student_id'];
$student = $conn->query("SELECT * FROM `student_users` WHERE id = '$student_id'");
$row = $student->fetch_assoc();

$id = $row['id'];
$name = $row['name'];
$email = $row['course'];
$image = $row['email'];
$pass = $row['password'];
$image = $row['s_image'];


?>

<header>
    <div class="header-container">
        <div class="logo-wrapper d-flex flex-row gap-4 align-items-center">
            <div class="logo">
                <img src="../public/assets/icon/logo.svg">
            </div>
            <h5 class="text-white" style="text-transform: uppercase; line-height:1">Technical & Vocational <br> Education & Training</h5>
        </div>
        <div class="profile-wrapper d-flex flex-row gap-2 align-items-center">
            <div class="profile">
                <a href="settings.php">
                    <img src="../public/assets/images/<?= !empty($image) ? $image : 'imageholder.jpg' ?>" alt="Profile Picture">
                </a>
            </div>
            <div class="profile-name">
                <h6 style="font-size: 12px; line-height: 1; margin-bottom:4px" class="text-white"><?= $name; ?></h6>
                <h6 style="font-size: 10px; line-height: 1; margin:0" class="text-white"><em>Student</em></h6>
            </div>
        </div>
    </div>
</header>
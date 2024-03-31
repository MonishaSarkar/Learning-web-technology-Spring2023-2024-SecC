<?php
require_once('../model/userModel.php');

$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$password = $_REQUEST['password'];
$confirm_password = $_REQUEST['confirm_password'];
$email = $_REQUEST['email'];
$dob = $_REQUEST['dob'];
$phone = $_REQUEST['phone'];
$gender = $_REQUEST['gender'];

$error_messages = array();


if (empty($first_name) || empty($last_name)) {
    $error_messages[] = "First Name and Last Name are required.";
} else {
    if (!isValidName($first_name) || !isValidName($last_name)) {
        $error_messages[] = "First Name and Last Name must contain only letters, dots, or dashes.";
    }
}


if (empty($email)) {
    $error_messages[] = "Email is required.";
} elseif (!isValidEmail($email)) {
    $error_messages[] = "Invalid email format.";
}


if (empty($gender)) {
    $error_messages[] = "Gender is required.";
}


if (empty($dob)) {
    $error_messages[] = "Date of Birth is required.";
} else {
    $dob_components = explode('-', $dob);
    if (count($dob_components) !== 3 || !isValidDate($dob_components[0], $dob_components[1], $dob_components[2])) {
        $error_messages[] = "Invalid Date of Birth format.";
    }
}


if (empty($phone)) {
    $error_messages[] = "Phone is required.";
} elseif (!isValidPhone($phone)) {
    $error_messages[] = "Phone must contain only digits.";
}


if (empty($password) || empty($confirm_password)) {
    $error_messages[] = "Password and Confirm Password are required.";
} elseif ($password !== $confirm_password) {
    $error_messages[] = "Password and Confirm Password do not match.";
}


if (empty($error_messages)) {
    $users = [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email,
        'password' => $password,
        'confirm_password' => $confirm_password,
        'dob' => $dob,
        'phone' => $phone,
        'gender' => $gender
    ];

    $status = createUser($users);
    if ($status) {
        header('location: ../view/Dashboard.php');
        exit();
    } else {
        echo "Database error. Please try again.";
    }
} else {
    
    foreach ($error_messages as $error) {
        echo $error . "<br>";
    }
}


function isValidName($name) {
    $name = str_replace(['.', '-'], '', $name);
    return ctype_alpha($name) && strlen($name) >= 2;
}


function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}


function isValidDate($year, $month, $day) {
    return checkdate($month, $day, $year);
}


function isValidPhone($phone) {
    return ctype_digit($phone);
}
?>

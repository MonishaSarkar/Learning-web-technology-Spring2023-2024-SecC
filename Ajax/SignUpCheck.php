<?php
require_once('../model/userModel.php');

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];
$dob = $_REQUEST['dob'];
$phone = $_REQUEST['phone']; 
$gender = $_REQUEST['gender'];
$blood_group = $_REQUEST['blood_group'];
$user_type = $_REQUEST['user_type'];

if (
    $username == "" || $password == "" || $email == "" || $dob == "" || $gender == "" || $blood_group == "" || $user_type == ""
) {
    echo "Please fill in all the required fields.";
} else {
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } else {
        
        if (strtotime($dob) >= time()) {
            echo "Invalid date of birth. Please enter a date in the past.";
        } else {
            
            $valid_blood_groups = ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'];
            if (!in_array($blood_group, $valid_blood_groups)) {
                echo "Invalid blood group. Please select from the provided options.";
            } else {
                
                $valid_genders = ['male', 'female', 'other'];
                if (!in_array(strtolower($gender), $valid_genders)) {
                    echo "Invalid gender. Please select from the provided options.";
                } else {
                    
                    // Check if username is not empty
                    if ($username == "") {
                        echo "Username cannot be empty.";
                    } else {
                        // Check if username contains at least two words
                        $words = explode(" ", $username);
                        if (count($words) < 2) {
                            echo "Username must contain at least two words.";
                        } else {
                            // Check if username contains only allowed characters
                            for ($i = 0; $i < strlen($username); $i++) {
                                $char = $username[$i];
                                if (!(($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z') || $char == '.' || $char == '-')) {
                                    echo "Username can only contain letters, dot, or dash.";
                                    break;
                                }
                            }

                            // Check if username starts with a letter
                            $firstChar = $username[0];
                            if (!ctype_alpha($firstChar)) {
                                echo "Username must start with a letter.";
                            }
                        }
                    }

                    if(strlen($password) < 4){
                        echo "Password Must Be Atleast 4 Characters.";
                    } else {
                        $users = [
                            'username' => $username,
                            'email' => $email,
                            'password' => $password,
                            'dob' => $dob,
                            'phone' => $phone, 
                            'gender' => $gender,
                            'blood_group' => $blood_group,
                            'user_type' => $user_type
                        ];

                        $status = createUser($users);
                        if ($status) {
                            header('location: ../view/login.php');
                        } else {
                            echo "Database error. Please try again.";
                        }
                    }
                }
            }
        }
    }
}

?>

function SignUpForm() {
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    let email = document.getElementById('email').value;
    let dob = document.getElementById('dob').value;
    let gender = document.getElementById('gender').value;
    let blood_group = document.getElementById('blood_group').value;
    let user_type = document.getElementById('user_type').value;

    if (username === "" || password === "" || email === "" || dob === "" || gender === "" || blood_group === "" || user_type === "") {
        alert("Please fill in all the required fields.");
        return false;
    }

    if (!validateEmail(email)) {
        alert("Invalid email format.");
        return false;
    }

    let dobDate = new Date(dob);
    let currentDate = new Date();
    if (dobDate >= currentDate) {
        alert("Invalid date of birth. Please enter a date in the past.");
        return false;
    }

    let validBloodGroups = ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'];
    if (!validBloodGroups.includes(blood_group)) {
        alert("Invalid blood group. Please select from the provided options.");
        return false;
    }

    let validGenders = ['male', 'female', 'other'];
    if (!validGenders.includes(gender.toLowerCase())) {
        alert("Invalid gender. Please select from the provided options.");
        return false;
    }

    if (!isValidUsername(username)) {
        alert("Username should contain only upper case and lower case characters, start with a letter, and have at least two words.");
        return false;
    }

    if (password.length < 4) {
        alert("Password must be at least 4 characters.");
        return false;
    }

    
    ajax(username, password, email, dob, gender, blood_group, user_type);

    return true;
}

function validateEmail(email) {
    return email.includes("@") && email.includes(".");
}

function isValidUsername(username) {
    if (username.length === 0) {
        return false;
    }
    let words = username.split(/[.\-]/);
    if (words.length < 2) {
        return false;
    }
    for (let i = 0; i < username.length; i++) {
        let charCode = username.charCodeAt(i);
        if (!((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode === 46 || charCode === 45)) {
            return false;
        }
    }
    let firstCharCode = username.charCodeAt(0);
    if (!((firstCharCode >= 65 && firstCharCode <= 90) || (firstCharCode >= 97 && firstCharCode <= 122))) {
        return false;
    }
    return true;
}

function ajax(username, password, email, dob, gender, blood_group, user_type) {
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/SignUpCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            
            alert("User signed up successfully!");
        } else if (this.readyState == 4 && this.status != 200) {
            
            alert("Error occurred while signing up. Please try again later.");
        }
    };
    let data = 'username=' + username + '&password=' + password + '&email=' + email + '&dob=' + dob + '&gender=' + gender + '&blood_group=' + blood_group + '&user_type=' + user_type;
    xhttp.send(data);
}

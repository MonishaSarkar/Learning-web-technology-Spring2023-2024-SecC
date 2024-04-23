function loginForm() {
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    if (username === "" || password === "") {
        window.alert("Please fill in all the required fields.");
        return false;
    }

    if (!isValidUsername(username)) {
        window.alert("Username should contain only upper case and lower case characters, start with a letter, and have at least two words.");
        return false;
    }

    if (password.length < 4) {
        window.alert("Password must be at least 4 characters.");
        return false;
    }

    
    ajax(username, password);

    return true;
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

function ajax(username, password) {
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/loginCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            
            alert("Login successful!");
        } else if (this.readyState == 4 && this.status != 200) {
            
            alert("Error occurred while logging in. Please try again later.");
        }
    };
    let data = 'username=' + username + '&password=' + password;
    xhttp.send(data);
}

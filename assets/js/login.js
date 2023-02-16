function submitForm() {
    // get form values
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // make ajax request to login.php
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "login.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // handle response
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
                // redirect to dashboard
                window.location.href = "dashboard.php";
            } else {
                // show error message
                alert(response.message);
            }
        }
    };
    xhr.send("username=" + username + "&password=" + password);
}

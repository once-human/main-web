<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="/assets/css/login.css">
</head>

<body>
    <form id="login-form" action="authentication.php" method="post">
        <label>Username:</label>
        <input type="text" id="username" name="username">
        <label>Password:</label>
        <input type="password" id="password" name="password">
        <button type="submit" onclick="submitForm()">Login</button>
    </form>
    <script>
        function submitForm() {

        // get form values
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;


            if (username.length == "" && password.length == "") {
                alert("User Name and Password fields are empty");
                return false;
            }
            else {
                if (username.length == "") {
                    alert("User Name is empty");
                    return false;
                }
                if (password.length == "") {
                    alert("Password field is empty");
                    return false;
                }
            }
        }


        // make ajax request to login.php
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "login.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
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


    </script>





</body>

</html>
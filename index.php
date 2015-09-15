<?php
$cookie_name = "can_log_in";
$cookie_value = "false";

if(!isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

<?php
if($_COOKIE[$cookie_name] == "true") {
    readfile("./login.html");
} else {
	readfile("./no_login.html");
}
?>

<p style="position: fixed; bottom: 0; width:100%; text-align: center">
	(C) 2015 Ultra-Secure Inc. - <a href="./about.html">About Us</a>
</p>

</body>
</html>

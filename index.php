<?php
$cookie_name = "can_log_in";
$cookie_value = "false";

if(!isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    echo "Setting Cookie";
}
?>

<html>
<body>

<?php
if($_COOKIE[$cookie_name] == "true") {
    echo "<center>Welcome!</center>";
} else {
	echo "
		<h1>
			<center>
		    Ultra-Secure Website
			</center>
		</h1>
		<center>
		    Welcome to this ultra-secure website! For added security, we won't even show you a login page unless we KNOW you're allowed 
		    to log in (and clearly YOU aren't allowed to log in).
		</center>";
}
?>

</body>
</html>

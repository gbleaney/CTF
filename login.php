<?php
if(($_POST["username"] == "admin") and ($_POST["password"] == 'p@$$w0rd')) {
	setcookie("auth", "fds82b29c82heg982du8g9fh24j", time() + (86400 * 30), "/"); // 86400 = 1 day
	header('Location: '."admin.php");
} else {
	header('HTTP/1.1 401 Unauthorized', true, 401);
	header('Location: '."index.php");
}

?>
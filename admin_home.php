<?php
    if($_COOKIE["auth"] !== 'fds82b29c82heg982du8g9fh24j') {
    	header('HTTP/1.1 401 Unauthorized', true, 401);
		header('Location: '."./index.php");
    } else {
    	readfile("./admin_home.html");
    }
?>
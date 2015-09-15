<?php
    if($_COOKIE["auth"] !== 'fds82b29c82heg982du8g9fh24j') {
    	header('HTTP/1.1 401 Unauthorized', true, 401);
		header('Location: '."index.php");
    } else {
    	if(strpos($_SERVER['HTTP_USER_AGENT'], "MSIE 7.0") !== FALSE) {
	    	readfile("admin_panel.html");
	    } else {
	    	readfile("unsupported_browser.html");
    	}
    }
?>
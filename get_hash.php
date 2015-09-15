<?php
$admin_hash = "b7463760284fd06773ac2a48e29b0acf"; // p@$$w0rd

if($_GET["username"] == "admin") {
	echo $admin_hash;
} else {
	echo "User not found";
}
?>
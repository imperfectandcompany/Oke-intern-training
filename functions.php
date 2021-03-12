<?php 
// Only when php is called can you write in php
function head($page) {
	$title = $page; // $page is a reference variable and $title is a new variable that equals $page value
include_once("./public/sections/head.php"); // reads this file once; ignores mulitple calls
}

// server is an array in php, whaterevers inside the bracket shows the
// server its being hosted
// echo $_SERVER["DOCUMENT_ROOT"];
echo $_SERVER["PHP_SELF"];

// prints true after path when server and path are the same
if ($_SERVER["PHP_SELF"] == "/oke-intern-training/index.php") {
	echo "true";
}
else {
	echo "false";
}

// Switch is easier for multple parts of the page that access the server (registrastion, home, etc.)
switch ($_SERVER["PHP_SELF"]) {
	case "/oke-intern-training/index.php":
		echo "true";
		break;

	default:
		echo "false";
		break;
}

?>

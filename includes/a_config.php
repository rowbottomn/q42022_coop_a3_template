<?php
/*NOTE that to get this script to work properly, you must
change the relative paths in the case statements to match 
for your project.
My project was in a folder called a3 within my htdocs directory.
To make sure yours is the same, uncomment out the line at 8*/

//echo $_SERVER["SCRIPT_NAME"];

	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/a3/about.php":
			$CURRENT_PAGE = "About"; 
			$PAGE_TITLE = "About Us";
			break;
		case "/a3/contact.php":
			$CURRENT_PAGE = "Contact"; 
			$PAGE_TITLE = "Contact Us";		
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Main Page!";		
	}
?>
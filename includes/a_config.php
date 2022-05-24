<?php
/*NOTE that to get this script to work properly, you must
change the relative paths in the case statements to match 
for your project.
My project was in a folder called a3 within my htdocs directory.
To make sure yours is the same, uncomment out the line at 8*/

//echo $_SERVER["SCRIPT_NAME"];

	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/a3/question.php":
			$CURRENT_PAGE = "Question"; 
			$PAGE_TITLE = "Question Page";
			break;
		case "/a3/result.php":
			$CURRENT_PAGE = "Result"; 
			$PAGE_TITLE = "Results page";		
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Login Page";		
	}
?>
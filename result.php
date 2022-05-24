<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>

<div class="container" id="main-content">
	<h2>Results page</h2>
	<p>Everytime a user arrive here from the Question page.</p>

	<p>
		Based on the option the user put out on the screen, a query should be made up and the resulting sames shoudl show the remaining possible people.
	</p>
	<p>
		When the selection is just one person then the screen should show that person as the guess.

	</p>

	<p>
		The results should be entered into the person_id db
		
	</p>
</div>

<?php include("includes/footer.php");?>

</body>
</html>
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
	<h2>Welcome to Guess Who!</h2>
	<p>Login with your email address to register as a user</p>
	<?php session_start();?>
	<form method= "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>" id = "registerForm">
		<fieldset>
			
			<label class = 'login_label' for = "username">Username</label><input class = "form_input" type="text" name='username' value="" placeholder="Enter in an email address" required/><br>
		
		<?php 
		
			
		    if (isset($_POST['submit'])) {
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "guesswho";
				echo 'attempt connect db';	

				  



				// Perform query
				
  					
  					
			

				if (isset($_POST['username'])) {
					$username = $_POST['username'];
					$sql = "SELECT * FROM `users` WHERE u_id = $username";

					try {
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						$stmt = $conn->prepare("SELECT * FROM users where username = $username LIMIT 1");
						$stmt->execute();
					
						// set the resulting array to associative
						$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
						var_dump($result);
					} catch(PDOException $e) {
						echo "Error: " . $e->getMessage();
					}	
					
					/*if ($result = query($con, $sql)) {
						var_dump($result);
						if (!empty($result)){
							mysqli_free_result($result);
							var_dump($result);
							$_SESSION['username'] = $_POST['username'];
							$_SESSION['validated'] = true;
							$_SESSION['name'] = $sql['name'];
							echo 'Session: '.$_SESSION['username'];
							echo '<br>';
							echo 'Session: '.$_SESSION['validated'];
							echo '<br>';
							echo 'Session: '.$_SESSION['name'];
							echo '<br>';
						}
						else{
							echo 'username does not exist!';		
							echo '<label class = "login_label">Name</label><input class = "form_input" type="text" name="name" value="" placeholder="name" required/>';
						}
					}
					else{
						echo 'quesry failed!';		
					}
					*/
				}
				else{
					//var_dump($_POST);
				}
				$conn = null;
			}
	
	
				
		
	
			//if the post is set then we are rerunnning the page and so run the query on email
				//if its present then welcome ==> change the display from 
			//if not, 
				//then run the sql command to insert them $sql = "INSERT INTO `users` (`u_id`, `name`, `number_plays`, `first_date`, `last_date`) VALUES (\'dude@snpsteam.com\', \'Dude\', \'99\', \'2022-05-25 14:14:32.000000\', \'2022-05-25 14:14:32.000000\')";
				//header resubmit 
		?>

		<input type = "submit" name="submit" value="Login"/>
		</fieldset>
	</form>
	<div id = "login-welcome" class = "hidden">
		<button >Next</button>
	</div>
	<p>
		stuff
	</p>
</div>

<?php include("includes/footer.php");?>

</body>
</html>
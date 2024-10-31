<?php 
require_once 'core/dbConfig.php'; 
require_once 'core/models.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Developer Information</title>
</head>
<body>
	<?php $getDeveloperByID = getDeveloperByID($pdo, $_GET['DeveloperID']); ?>
	<form action="core/handleForms.php?DeveloperID=<?php echo $_GET['DeveloperID']; ?>" method="POST">

		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getDeveloperByID['FirstName']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name</label>
			<input type="text" name="lastName" value="<?php echo $getDeveloperByID['LastName']; ?>">
		</p>
		<p>
			<label for="email">Email</label>
			<input type="email" name="email" value="<?php echo $getDeveloperByID['Email']; ?>">
		</p>
		<p>
			<label for="password">Password</label>
			<input type="password" name="password" placeholder="Enter new password to update">
		</p>
		<p>
			<label for="portfolioURL">Portfolio URL</label>
			<input type="url" name="portfolioURL" value="<?php echo $getDeveloperByID['PortfolioURL']; ?>">
		</p>
		<p>
			<label for="skills">Skills</label>
			<input type="text" name="skills" value="<?php echo $getDeveloperByID['Skills']; ?>">
		</p>
		<p>
			<input type="submit" name="editDeveloperBtn" value="Update Developer">
		</p>
	</form>
</body>
</html>

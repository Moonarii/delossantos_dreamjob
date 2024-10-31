<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete Developer</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
			border: 1px solid black;
		}
		.developerContainer {
			border-style: solid;
			font-family: 'Arial';
			padding: 20px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
	<h1>Are you sure you want to delete this developer?</h1>
	<?php $getDeveloperById = getDeveloperById($pdo, $_GET['DeveloperID']); ?>
	<form action="core/handleForms.php?DeveloperID=<?php echo $_GET['DeveloperID']; ?>" method="POST">

		<div class="developerContainer">
			<p>First Name: <?php echo htmlspecialchars($getDeveloperById['FirstName']); ?></p>
			<p>Last Name: <?php echo htmlspecialchars($getDeveloperById['LastName']); ?></p>
			<p>Email: <?php echo htmlspecialchars($getDeveloperById['Email']); ?></p>
			<p>Portfolio URL: <?php echo htmlspecialchars($getDeveloperById['PortfolioURL']); ?></p>
			<p>Skills: <?php echo htmlspecialchars($getDeveloperById['Skills']); ?></p>
			<p>Registration Date: <?php echo htmlspecialchars($getDeveloperById['RegistrationDate']); ?></p>
			<input type="submit" name="deleteDeveloperBtn" value="Delete">
		</div>
	</form>
</body>
</html>

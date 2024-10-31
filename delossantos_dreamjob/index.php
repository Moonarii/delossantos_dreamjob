<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Web Developer Registration System</title>
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
	</style>
</head>
<body>
	<h3>Welcome to the Web Developer Registration System. Input your details here to register.</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="firstName">First Name</label> <input type="text" name="firstName" required></p>
		<p><label for="lastName">Last Name</label> <input type="text" name="lastName" required></p>
		<p><label for="email">Email</label> <input type="email" name="email" required></p>
		<p><label for="password">Password</label> <input type="password" name="password" required></p>
		<p><label for="portfolioURL">Portfolio URL</label> <input type="url" name="portfolioURL"></p>
		<p><label for="skills">Skills</label> <input type="text" name="skills"></p>
		<input type="submit" name="insertNewDeveloperBtn" value="Register">
		<a href="testGetVariable.php?developerName=AngelIvory&experienceLevel=Mid-Level">Test Get SuperGlobal</a>


	</form>
	

	<table style="width:80%; margin-top: 50px;">
	  <tr>
	    <th>Developer ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Email</th>
	    <th>Portfolio URL</th>
	    <th>Skills</th>
	    <th>Registration Date</th>
	    <th>Action</th>
	  </tr>

	  <?php $seeAllDeveloperRecords = seeAllDeveloperRecords($pdo); ?>
	  <?php foreach ($seeAllDeveloperRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['DeveloperID']; ?></td>
	  	<td><?php echo $row['FirstName']; ?></td>	
	  	<td><?php echo $row['LastName']; ?></td>	
	  	<td><?php echo $row['Email']; ?></td>	
	  	<td><a href="<?php echo $row['PortfolioURL']; ?>" target="_blank">View Portfolio</a></td>
	  	<td><?php echo $row['Skills']; ?></td>	
	  	<td><?php echo $row['RegistrationDate']; ?></td>	
	  	<td>
	  		<a href="editAdeveloper.php?DeveloperID=<?php echo $row['DeveloperID']; ?>">Edit</a>
	  		<a href="deleteAdeveloper.php?DeveloperID=<?php echo $row['DeveloperID']; ?>">Delete</a>
	  	</td>	
	  </tr>
	  <?php } ?>
	</table>
</body>
</html>

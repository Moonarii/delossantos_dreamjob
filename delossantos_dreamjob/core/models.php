<?php  

require_once 'dbConfig.php';

// Insert a new web developer record into the WebDeveloperRegistration table
function insertIntoDeveloperRecords($pdo, $firstName, $lastName, $email, $passwordHash, $portfolioURL, $skills) {

	$sql = "INSERT INTO WebDeveloperRegistration (FirstName, LastName, Email, PasswordHash, PortfolioURL, Skills) VALUES (?, ?, ?, ?, ?, ?)";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$firstName, $lastName, $email, $passwordHash, $portfolioURL, $skills]);

	if ($executeQuery) {
		return true;
	}
	return false;
}

// Retrieve all developer records from the WebDeveloperRegistration table
function seeAllDeveloperRecords($pdo) {
	$sql = "SELECT * FROM WebDeveloperRegistration";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}

}

// Retrieve a single developer record by DeveloperID
function getDeveloperByID($pdo, $DeveloperID) {
	$sql = "SELECT * FROM WebDeveloperRegistration WHERE DeveloperID = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$DeveloperID])) {
		return $stmt->fetch();
	}
}

// Update a developer record
function updateAdeveloper($pdo, $DeveloperID, $firstName, $lastName, $email, $passwordHash, $portfolioURL, $skills) {

	$sql = "UPDATE WebDeveloperRegistration
				SET FirstName = ?,
					LastName = ?,
					Email = ?,
					PasswordHash = ?,
					PortfolioURL = ?,
					Skills = ?
			WHERE DeveloperID = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute(
		[$firstName, $lastName, $email, $passwordHash, $portfolioURL, $skills, $DeveloperID]
	);

	if ($executeQuery) {
		return true;
	}
	return false;
}

// Delete a developer record by DeveloperID
function deleteADeveloper($pdo, $DeveloperID) {

	$sql = "DELETE FROM webdeveloperregistration WHERE DeveloperID = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$DeveloperID]);

	if ($executeQuery) {
		return true;
	}

}

?>

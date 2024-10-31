<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

// Insert New Developer
if (isset($_POST['insertNewDeveloperBtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$email = trim($_POST['email']);
	$passwordHash = password_hash(trim($_POST['password']), PASSWORD_DEFAULT); // Hash the password
	$portfolioURL = trim($_POST['portfolioURL']);
	$skills = trim($_POST['skills']);

	if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($passwordHash)) {
		$query = insertIntoDeveloperRecords($pdo, $firstName, $lastName, $email, $passwordHash, $portfolioURL, $skills);

		if ($query) {
			header("Location: ../index.php"); // Redirect on success
		} else {
			echo "Insertion failed";
		}
	} else {
		echo "Make sure that no fields are empty";
	}
}

// Edit Developer
if (isset($_POST['editDeveloperBtn'])) {
    $developerid = $_GET['DeveloperID']; // Ensure this is consistent with your form
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $email = trim($_POST['email']);
    $passwordHash = !empty($_POST['password']) ? password_hash(trim($_POST['password']), PASSWORD_DEFAULT) : null; // Hash password if provided
    $portfolioURL = trim($_POST['portfolioURL']);
    $skills = trim($_POST['skills']);

    if (!empty($developerid) && !empty($firstName) && !empty($lastName) && !empty($email)) {
        $query = updateAdeveloper($pdo, $developerid, $firstName, $lastName, $email, $passwordHash, $portfolioURL, $skills);

        if ($query) {
            header("Location: ../index.php"); // Redirect on success
            exit; // Stop further execution after header
        } else {
            echo "Update failed";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}


// Delete Developer
if (isset($_POST['deleteDeveloperBtn'])) {
	$query = deleteADeveloper($pdo, $_GET['DeveloperID']); // Call the delete function

	if ($query) {
		header("Location: ../index.php"); // Redirect on success
	} else {
		echo "Deletion failed";
	}
}

?>

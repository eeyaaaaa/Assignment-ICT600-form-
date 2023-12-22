<?php
// Function to sanitize and validate input data
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Initialize variables to store form data
$name = $icpassport = $studentId = $facultyCode = $programmeCode = $semester = $gender = $campus = $levelOfStudy = $modeOfStudy = $mailingaddress = $changeOfAddress = $postcode = $telno = $phoneno = $email = $previousDeferment = $reasons = $register = $year = $date = "";

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debugging: Dump the contents of $_POST
    var_dump($_POST);

    // Retrieve data from the form
    $name = test_input($_POST["name"]);
    $icpassport = test_input($_POST["icpassport"]);
    $studentId = test_input($_POST["studentId"]);
    $facultyCode = test_input($_POST["facultyCode"]);
    $programmeCode = test_input($_POST["programmeCode"]);
    $semester = test_input($_POST["semester"]);
    $gender = test_input($_POST["gender"]);
    $campus = test_input($_POST["campus"]);
    $levelOfStudy = test_input($_POST["levelOfStudy"]);
    $modeOfStudy = test_input($_POST["modeOfStudy"]);
    $mailingaddress = test_input($_POST["mailingaddress"]);
    $changeOfAddress = isset($_POST["changeOfAddress"]) ? "yes" : "no";
    $postcode = test_input($_POST["postcode"]);
    $telno = test_input($_POST["telno"]);
    $phoneno = test_input($_POST["phoneno"]);
    $email = test_input($_POST["email"]);
    $previousDeferment = test_input($_POST["previousDeferment"]);
    $reasons = test_input($_POST["reasons"]);
    $register = test_input($_POST["register"]);
    $year = test_input($_POST["year"]);
    $date = test_input($_POST["date"]);
}
?>


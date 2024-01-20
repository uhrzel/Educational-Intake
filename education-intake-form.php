<?php
include('config.php'); // Include your database configuration file

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Victim Information
    $victimName = $_POST['victim_name'];
    $victimDateOfBirth = $_POST['victim_date_of_birth'];
    $victimAge = $_POST['victim_age'];
    $victimSex = $_POST['victim_sex'];
    $victimGradeSection = $_POST['victim_grade_section'];
    $victimAdviser = $_POST['victim_adviser'];

    // Parents Information
    $motherName = $_POST['mother_name'];
    $motherAge = $_POST['mother_age'];
    $motherOccupation = $_POST['mother_occupation'];
    $fatherName = $_POST['father_name'];
    $fatherAge = $_POST['father_age'];
    $fatherOccupation = $_POST['father_occupation'];
    $address = $_POST['address'];
    $contactNumber = $_POST['contact_number'];

    // Complainant Information
    $complainantName = $_POST['complainant_name'];
    $complainantRelationship = $_POST['complainant_relationship'];
    $complainantAddress = $_POST['complainant_address'];
    $complainantContactNumber = $_POST['complainant_contact_number'];

    // Respondent Information
    $respondentName = $_POST['respondent_name'];
    $respondentDateOfBirth = $_POST['respondent_date_of_birth'];
    $respondentAge = $_POST['respondent_age'];
    $respondentSex = $_POST['respondent_sex'];
    $respondentPosition = $_POST['respondent_position'];
    $respondentAddress = $_POST['respondent_address'];
    $respondentContactNumber = $_POST['respondent_contact_number'];

    try {
        // SQL query for inserting data into the database
        $sql = "INSERT INTO education_intake (
            victim_name, victim_date_of_birth, victim_age, victim_sex, victim_grade_section, victim_adviser,
            mother_name, mother_age, mother_occupation, father_name, father_age, father_occupation, address, contact_number,
            complainant_name, complainant_relationship, complainant_address, complainant_contact_number,
            respondent_name, respondent_date_of_birth, respondent_age, respondent_sex, respondent_position, respondent_address, respondent_contact_number
        ) VALUES (
            :victimName, :victimDateOfBirth, :victimAge, :victimSex, :victimGradeSection, :victimAdviser,
            :motherName, :motherAge, :motherOccupation, :fatherName, :fatherAge, :fatherOccupation, :address, :contactNumber,
            :complainantName, :complainantRelationship, :complainantAddress, :complainantContactNumber,
            :respondentName, :respondentDateOfBirth, :respondentAge, :respondentSex, :respondentPosition, :respondentAddress, :respondentContactNumber
        )";

        // Prepare the SQL statement
        $stmt = $connection->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':victimName', $victimName);
        $stmt->bindParam(':victimDateOfBirth', $victimDateOfBirth);
        $stmt->bindParam(':victimAge', $victimAge);
        $stmt->bindParam(':victimSex', $victimSex);
        $stmt->bindParam(':victimGradeSection', $victimGradeSection);
        $stmt->bindParam(':victimAdviser', $victimAdviser);
        $stmt->bindParam(':motherName', $motherName);
        $stmt->bindParam(':motherAge', $motherAge);
        $stmt->bindParam(':motherOccupation', $motherOccupation);
        $stmt->bindParam(':fatherName', $fatherName);
        $stmt->bindParam(':fatherAge', $fatherAge);
        $stmt->bindParam(':fatherOccupation', $fatherOccupation);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':contactNumber', $contactNumber);
        $stmt->bindParam(':complainantName', $complainantName);
        $stmt->bindParam(':complainantRelationship', $complainantRelationship);
        $stmt->bindParam(':complainantAddress', $complainantAddress);
        $stmt->bindParam(':complainantContactNumber', $complainantContactNumber);
        $stmt->bindParam(':respondentName', $respondentName);
        $stmt->bindParam(':respondentDateOfBirth', $respondentDateOfBirth);
        $stmt->bindParam(':respondentAge', $respondentAge);
        $stmt->bindParam(':respondentSex', $respondentSex);
        $stmt->bindParam(':respondentPosition', $respondentPosition);
        $stmt->bindParam(':respondentAddress', $respondentAddress);
        $stmt->bindParam(':respondentContactNumber', $respondentContactNumber);

        // Execute the query
        $stmt->execute();


        header("Location: casereportsystem.php");
        echo "Data inserted successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

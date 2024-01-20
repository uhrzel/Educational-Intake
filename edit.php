<?php
include('config.php');

if (isset($_POST['edit_btn'])) {
    $intakeId = $_POST['edit_id'];
    $victimName = $_POST['victim_name'];
    $victimDateOfBirth = $_POST['victim_date_of_birth'];
    $victimAge = $_POST['victim_age'];
    $victimSex = $_POST['victim_sex'];
    $victimGradeSection = $_POST['victim_grade_section'];
    $victimAdviser = $_POST['victim_adviser'];
    $motherName = $_POST['mother_name'];
    $motherAge = $_POST['mother_age'];
    $motherOccupation = $_POST['mother_occupation'];
    $fatherName = $_POST['father_name'];
    $fatherAge = $_POST['father_age'];
    $fatherOccupation = $_POST['father_occupation'];
    $address = $_POST['address'];
    $contactNumber = $_POST['contact_number'];
    $complainantName = $_POST['complainant_name'];
    $complainantRelationship = $_POST['complainant_relationship'];
    $complainantAddress = $_POST['complainant_address'];
    $complainantContactNumber = $_POST['complainant_contact_number'];
    $respondentName = $_POST['respondent_name'];
    $respondentDateOfBirth = $_POST['respondent_date_of_birth'];
    $respondentAge = $_POST['respondent_age'];
    $respondentSex = $_POST['respondent_sex'];
    $respondentPosition = $_POST['respondent_position'];
    $respondentAddress = $_POST['respondent_address'];
    $respondentContactNumber = $_POST['respondent_contact_number'];

    try {
        $query = "UPDATE education_intake SET 
                  victim_name = :victimName,
                  victim_date_of_birth = :victimDateOfBirth,
                  victim_age = :victimAge,
                  victim_sex = :victimSex,
                  victim_grade_section = :victimGradeSection,
                  victim_adviser = :victimAdviser,
                  mother_name = :motherName,
                  mother_age = :motherAge,
                  mother_occupation = :motherOccupation,
                  father_name = :fatherName,
                  father_age = :fatherAge,
                  father_occupation = :fatherOccupation,
                  address = :address,
                  contact_number = :contactNumber,
                  complainant_name = :complainantName,
                  complainant_relationship = :complainantRelationship,
                  complainant_address = :complainantAddress,
                  complainant_contact_number = :complainantContactNumber,
                  respondent_name = :respondentName,
                  respondent_date_of_birth = :respondentDateOfBirth,
                  respondent_age = :respondentAge,
                  respondent_sex = :respondentSex,
                  respondent_position = :respondentPosition,
                  respondent_address = :respondentAddress,
                  respondent_contact_number = :respondentContactNumber
                  WHERE intake_id = :intakeId";

        $stmt = $connection->prepare($query);
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
        $stmt->bindParam(':intakeId', $intakeId);

        $stmt->execute();

        echo "Record updated successfully";

        header('Location: casereportsystem.php');
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}


<?php

require_once __DIR__ . '/Student.php';
require_once __DIR__ . '/ApplicantState.php';

$student = new Student();

// Applicant attempts to enroll.
$student->showState();
echo "Action: Enroll<br>";
echo "Result:<br>";
$student->enroll();

echo "<br>";

// Complete pre-assessment.
$applicantState = $student->getState();

if ($applicantState instanceof ApplicantState) {
    $applicantState->completePreAssessment($student);
}

echo "<br>";

// Pre-Assessed student enrolls.
$student->showState();
echo "Action: Enroll<br>";
echo "Result:<br>";
$student->enroll();

echo "<br>";

// Continue through the remaining states.
$student->showState();

echo "Action: Drop<br>";
$student->drop();

$student->showState();

echo "Action: Graduate<br>";
$student->graduate();

$student->showState();

?>

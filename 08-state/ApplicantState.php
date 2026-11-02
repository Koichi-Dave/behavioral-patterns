
<?php

require_once __DIR__ . '/State.php';
require_once __DIR__ . '/Student.php';
require_once __DIR__ . '/PreAssessedState.php';

class ApplicantState implements State
{
    public function enroll(Student $student): void
    {
        echo "Student must complete pre-assessment first.<br>";
    }

    public function drop(Student $student): void
    {
        echo "Applicant cannot drop enrollment because they are not enrolled.<br>";
    }

    public function graduate(Student $student): void
    {
        echo "Applicant cannot graduate yet.<br>";
    }

    public function getName(): string
    {
        return 'Applicant';
    }

    public function completePreAssessment(Student $student): void
    {
        $student->setState(new PreAssessedState());
        echo "Pre-assessment completed successfully.<br>";
    }
}


<?php

require_once __DIR__ . '/State.php';
require_once __DIR__ . '/Student.php';
require_once __DIR__ . '/EnrolledState.php';

class PreAssessedState implements State
{
    public function enroll(Student $student): void
    {
        $student->setState(new EnrolledState());
        echo "Student successfully enrolled.<br>";
    }

    public function drop(Student $student): void
    {
        echo "Student must enroll before dropping.<br>";
    }

    public function graduate(Student $student): void
    {
        echo "Student must enroll and complete studies before graduating.<br>";
    }

    public function getName(): string
    {
        return 'Pre-Assessed';
    }
}

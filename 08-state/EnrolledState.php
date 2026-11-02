
<?php

require_once __DIR__ . '/State.php';
require_once __DIR__ . '/Student.php';
require_once __DIR__ . '/DroppedState.php';
require_once __DIR__ . '/GraduatedState.php';

class EnrolledState implements State
{
    public function enroll(Student $student): void
    {
        echo "Student is already enrolled.<br>";
    }

    public function drop(Student $student): void
    {
        $student->setState(new DroppedState());
        echo "Student enrollment dropped.<br>";
    }

    public function graduate(Student $student): void
    {
        $student->setState(new GraduatedState());
        echo "Student successfully graduated.<br>";
    }

    public function getName(): string
    {
        return 'Enrolled';
    }
}

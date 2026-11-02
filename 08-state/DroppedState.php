
<?php

require_once __DIR__ . '/State.php';
require_once __DIR__ . '/Student.php';

class DroppedState implements State
{
    public function enroll(Student $student): void
    {
        echo "Dropped student must complete re-enrollment procedures first.<br>";
    }

    public function drop(Student $student): void
    {
        echo "Student is already dropped.<br>";
    }

    public function graduate(Student $student): void
    {
        echo "Dropped student cannot graduate without completing studies.<br>";
    }

    public function getName(): string
    {
        return 'Dropped';
    }
}

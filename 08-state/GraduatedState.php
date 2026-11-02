
<?php

require_once __DIR__ . '/State.php';
require_once __DIR__ . '/Student.php';

class GraduatedState implements State
{
    public function enroll(Student $student): void
    {
        echo "Graduated student cannot enroll in the same program again.<br>";
    }

    public function drop(Student $student): void
    {
        echo "Graduated student cannot drop enrollment.<br>";
    }

    public function graduate(Student $student): void
    {
        echo "Student has already graduated.<br>";
    }

    public function getName(): string
    {
        return 'Graduated';
    }
}

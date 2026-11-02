
<?php

interface State
{
    public function enroll(Student $student): void;
    public function drop(Student $student): void;
    public function graduate(Student $student): void;
    public function getName(): string;
}

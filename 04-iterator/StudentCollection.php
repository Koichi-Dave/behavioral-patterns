
<?php

require_once __DIR__ . '/Student.php';
require_once __DIR__ . '/StudentIterator.php';

class StudentCollection implements IteratorAggregate
{
    private array $students = [];

    public function add(Student $student): void
    {
        $this->students[] = $student;
    }

    public function getIterator(): Traversable
    {
        return new StudentIterator($this->students);
    }
}

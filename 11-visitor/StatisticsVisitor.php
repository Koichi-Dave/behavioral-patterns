
<?php

require_once 'Visitor.php';

class StatisticsVisitor implements Visitor
{
    public function visitStudent(Student $student): void
    {
        echo "Student statistics calculated." . PHP_EOL;
    }

    public function visitFaculty(Faculty $faculty): void
    {
        echo "Faculty statistics calculated." . PHP_EOL;
    }

    public function visitAlumni(Alumni $alumni): void
    {
        echo "Alumni statistics calculated." . PHP_EOL;
    }
}

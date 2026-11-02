
<?php

require_once 'Visitor.php';

class ReportVisitor implements Visitor
{
    public function visitStudent(Student $student): void
    {
        echo "Student report generated." . PHP_EOL;
    }

    public function visitFaculty(Faculty $faculty): void
    {
        echo "Faculty report generated." . PHP_EOL;
    }

    public function visitAlumni(Alumni $alumni): void
    {
        echo "Alumni report generated." . PHP_EOL;
    }
}

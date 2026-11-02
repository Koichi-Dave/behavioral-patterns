
<?php

require_once 'Visitor.php';

class CSVExportVisitor implements Visitor
{
    public function visitStudent(Student $student): void
    {
        echo "Student exported." . PHP_EOL;
    }

    public function visitFaculty(Faculty $faculty): void
    {
        echo "Faculty exported." . PHP_EOL;
    }

    public function visitAlumni(Alumni $alumni): void
    {
        echo "Alumni exported." . PHP_EOL;
    }
}


<?php

require_once 'Visitor.php';

class PDFReportVisitor implements Visitor
{
    public function visitStudent(Student $student): void
    {
        echo "Student added to PDF report." . PHP_EOL;
    }

    public function visitFaculty(Faculty $faculty): void
    {
        echo "Faculty added to PDF report." . PHP_EOL;
    }

    public function visitAlumni(Alumni $alumni): void
    {
        echo "Alumni added to PDF report." . PHP_EOL;
    }
}

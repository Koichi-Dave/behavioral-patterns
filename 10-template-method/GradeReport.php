
<?php

require_once __DIR__ . '/Report.php';

class GradeReport extends Report
{
    protected function getReportTitle(): string
    {
        return 'Grade Report';
    }

    protected function retrieveData(): array
    {
        return [
            'studentId' => '2026-001',
            'name' => 'Juan Dela Cruz',
            'grade' => '1.75'
        ];
    }

    protected function formatData(array $data): void
    {
        echo 'Student ID: ' . $data['studentId'] . '<br>';
        echo 'Name: ' . $data['name'] . '<br>';
        echo 'Grade: ' . $data['grade'] . '<br>';
    }
}

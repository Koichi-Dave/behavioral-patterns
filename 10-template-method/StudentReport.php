
<?php

require_once __DIR__ . '/Report.php';

class StudentReport extends Report
{
    protected function getReportTitle(): string
    {
        return 'Student Report';
    }

    protected function retrieveData(): array
    {
        return [
            'studentId' => '2026-001',
            'name' => 'Juan Dela Cruz',
            'program' => 'BSIT'
        ];
    }

    protected function formatData(array $data): void
    {
        echo 'Student ID: ' . $data['studentId'] . '<br>';
        echo 'Name: ' . $data['name'] . '<br>';
        echo 'Program: ' . $data['program'] . '<br>';
    }
}

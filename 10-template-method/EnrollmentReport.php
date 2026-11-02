
<?php

require_once __DIR__ . '/Report.php';

class EnrollmentReport extends Report
{
    protected function getReportTitle(): string
    {
        return 'Enrollment Report';
    }

    protected function retrieveData(): array
    {
        return [
            'studentId' => '2026-001',
            'name' => 'Juan Dela Cruz',
            'program' => 'BSIT',
            'status' => 'Enrolled'
        ];
    }

    protected function formatData(array $data): void
    {
        echo 'Student ID: ' . $data['studentId'] . '<br>';
        echo 'Name: ' . $data['name'] . '<br>';
        echo 'Program: ' . $data['program'] . '<br>';
        echo 'Status: ' . $data['status'] . '<br>';
    }
}

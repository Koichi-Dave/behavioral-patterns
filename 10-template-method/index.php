
<?php

require_once __DIR__ . '/StudentReport.php';
require_once __DIR__ . '/GradeReport.php';
require_once __DIR__ . '/EnrollmentReport.php';

$report = new StudentReport();
$report->generateReport();

// To test the other report types, use:
// $report = new GradeReport();
// $report->generateReport();
//
// $report = new EnrollmentReport();
// $report->generateReport();

?>

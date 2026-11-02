
<?php

require_once 'Student.php';
require_once 'Faculty.php';
require_once 'Alumni.php';

require_once 'CSVExportVisitor.php';
require_once 'ReportVisitor.php';
require_once 'StatisticsVisitor.php';
require_once 'PDFReportVisitor.php';

$records = [
    new Student(),
    new Faculty(),
    new Alumni()
];

echo "CSV Export Visitor<br>";

$csvVisitor = new CSVExportVisitor();
foreach ($records as $record) {
    $record->accept($csvVisitor);
}

echo "<br>Report Visitor<br>";

$reportVisitor = new ReportVisitor();
foreach ($records as $record) {
    $record->accept($reportVisitor);
}

echo "<br>Statistics Visitor<br>";

$statisticsVisitor = new StatisticsVisitor();
foreach ($records as $record) {
    $record->accept($statisticsVisitor);
}

echo "<br>PDF Report Visitor<br>";

$pdfVisitor = new PDFReportVisitor();
foreach ($records as $record) {
    $record->accept($pdfVisitor);
}

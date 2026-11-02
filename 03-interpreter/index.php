
<?php

require_once __DIR__ . '/StudentContext.php';
require_once __DIR__ . '/TerminalExpression.php';
require_once __DIR__ . '/LogicalExpressions.php';

$student = new StudentContext('BSIT', 4);

// Required expression:
// PROGRAM = "BSIT" AND YEAR = 4

$programIsBSIT = new TerminalExpression('PROGRAM', 'BSIT');
$yearIsFour = new TerminalExpression('YEAR', 4);

$andExpression = new AndExpression(
    $programIsBSIT,
    $yearIsFour
);

echo "<h3>Required Expression:</h3>";
echo 'PROGRAM = "BSIT" AND YEAR = 4<br>';
echo 'Result: ' . ($andExpression->interpret($student) ? 'TRUE' : 'FALSE');

// Challenge expression:
// PROGRAM = "BSIT" OR PROGRAM = "BSCS"

$programIsBSCS = new TerminalExpression('PROGRAM', 'BSCS');

$orExpression = new OrExpression(
    $programIsBSIT,
    $programIsBSCS
);

echo "<h3>Challenge Expression:</h3>";
echo 'PROGRAM = "BSIT" OR PROGRAM = "BSCS"<br>';
echo 'Result: ' . ($orExpression->interpret($student) ? 'TRUE' : 'FALSE');

?>

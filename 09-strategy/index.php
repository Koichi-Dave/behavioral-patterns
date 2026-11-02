
<?php

require_once __DIR__ . '/GradeCalculator.php';
require_once __DIR__ . '/SimpleAverageStrategy.php';
require_once __DIR__ . '/WeightedAverageStrategy.php';
require_once __DIR__ . '/TransmutedGradeStrategy.php';

// Simple Average: (85 + 90 + 90 + 89) / 4 = 88.50
$simpleGrades = [85, 90, 90, 89];

$calculator = new GradeCalculator(new SimpleAverageStrategy());

echo "Strategy: Simple Average<br>";
echo "Result: " . number_format(
    $calculator->calculateGrade($simpleGrades),
    2
) . "<br><br>";

// Weighted Average: weighted total / total weights = 91.25
$weightedGrades = [
    'grades' => [90, 92, 90, 92],
    'weights' => [1, 1, 1, 5]
];

$calculator->setStrategy(new WeightedAverageStrategy());

echo "Strategy: Weighted Average<br>";
echo "Result: " . number_format(
    $calculator->calculateGrade($weightedGrades),
    2
) . "<br><br>";

// Challenge: add a strategy without changing GradeCalculator.
$calculator->setStrategy(new TransmutedGradeStrategy());

echo "Strategy: Transmuted Grade<br>";
echo "Result: " . number_format(
    $calculator->calculateGrade($simpleGrades),
    2
) . "<br>";

?>

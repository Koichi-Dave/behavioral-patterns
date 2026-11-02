
<?php

require_once __DIR__ . '/GradeStrategy.php';

class WeightedAverageStrategy implements GradeStrategy
{
    public function calculate(array $grades): float
    {
        $scores = $grades['grades'] ?? [];
        $weights = $grades['weights'] ?? [];

        if (
            count($scores) === 0 ||
            count($scores) !== count($weights) ||
            array_sum($weights) == 0
        ) {
            return 0.0;
        }

        $weightedTotal = 0.0;

        foreach ($scores as $index => $score) {
            $weightedTotal += $score * $weights[$index];
        }

        return $weightedTotal / array_sum($weights);
    }
}

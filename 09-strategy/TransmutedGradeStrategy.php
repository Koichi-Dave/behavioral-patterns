
<?php

require_once __DIR__ . '/GradeStrategy.php';

class TransmutedGradeStrategy implements GradeStrategy
{
    public function calculate(array $grades): float
    {
        if (count($grades) === 0) {
            return 0.0;
        }

        $average = array_sum($grades) / count($grades);

        // Illustrative transmutation formula.
        return min(100.0, max(0.0, 60 + ($average * 0.4)));
    }
}

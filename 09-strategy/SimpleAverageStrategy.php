
<?php

require_once __DIR__ . '/GradeStrategy.php';

class SimpleAverageStrategy implements GradeStrategy
{
    public function calculate(array $grades): float
    {
        if (count($grades) === 0) {
            return 0.0;
        }

        return array_sum($grades) / count($grades);
    }
}

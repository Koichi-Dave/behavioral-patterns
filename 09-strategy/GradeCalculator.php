
<?php

require_once __DIR__ . '/GradeStrategy.php';

class GradeCalculator
{
    public function __construct(
        private GradeStrategy $strategy
    ) {}

    public function setStrategy(GradeStrategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function calculateGrade(array $grades): float
    {
        return $this->strategy->calculate($grades);
    }
}

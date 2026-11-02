
<?php

require_once __DIR__ . '/Subject.php';

class GradeSystem implements Subject
{
    private array $observers = [];
    private float $grade = 0.0;

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void
    {
        foreach ($this->observers as $key => $existingObserver) {
            if ($existingObserver === $observer) {
                unset($this->observers[$key]);
            }
        }
    }

    public function setGrade(float $grade): void
    {
        $this->grade = $grade;

        echo 'Grade updated: '
            . number_format($this->grade, 2)
            . '<br>';

        $this->notify();
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->grade);
        }
    }
}

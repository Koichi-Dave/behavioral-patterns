
<?php

require_once __DIR__ . '/Observer.php';

class StudentPortal implements Observer
{
    public function update(float $grade): void
    {
        echo 'Student Portal:<br>';
        echo "New grade posted.<br>";
    }
}

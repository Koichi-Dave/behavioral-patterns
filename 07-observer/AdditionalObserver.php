
<?php

require_once __DIR__ . '/Observer.php';

class AdditionalObserver implements Observer
{
    public function update(float $grade): void
    {
        echo 'Additional Observer:<br>';
        echo "Grade update received.<br>";
    }
}


<?php

require_once __DIR__ . '/Observer.php';

interface Subject
{
    public function attach(Observer $observer): void;
    public function detach(Observer $observer): void;
    public function notify(): void;
}

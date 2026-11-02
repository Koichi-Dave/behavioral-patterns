
<?php

require_once __DIR__ . '/Mediator.php';

class Student
{
    public function __construct(
        private string $name,
        private Mediator $mediator
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function send(string $message): void
    {
        echo $this->name . ': ' . $message . '<br>';
        $this->mediator->sendMessage($message, $this);
    }

    public function receive(string $message, string $senderName): void
    {
        echo $this->name . ' receives:<br>';
        echo $senderName . ': ' . $message . '<br><br>';
    }
}

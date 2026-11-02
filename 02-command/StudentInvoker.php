
<?php

require_once __DIR__ . '/Command.php';

class StudentInvoker
{
    private array $history = [];

    public function executeCommand(Command $command): void
    {
        $command->execute();
        $this->history[] = $command;
    }

    public function undo(): void
    {
        if (empty($this->history)) {
            echo "Nothing to undo.<br>";
            return;
        }

        $command = array_pop($this->history);

        echo "Undo<br>";
        $command->undo();
    }
}

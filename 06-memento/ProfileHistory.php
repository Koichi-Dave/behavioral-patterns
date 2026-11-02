
<?php

require_once __DIR__ . '/StudentProfileMemento.php';

class ProfileHistory
{
    private array $history = [];

    public function save(StudentProfileMemento $memento): void
    {
        $this->history[] = $memento;
    }

    public function undo(): ?StudentProfileMemento
    {
        if (empty($this->history)) {
            return null;
        }

        return array_pop($this->history);
    }
}

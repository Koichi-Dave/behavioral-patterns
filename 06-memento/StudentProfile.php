
<?php

require_once __DIR__ . '/StudentProfileMemento.php';

class StudentProfile
{
    public function __construct(
        private string $name,
        private string $program,
        private int $yearLevel,
        private string $email
    ) {}

    public function setProgram(string $program): void
    {
        $this->program = $program;
    }

    public function setYearLevel(int $yearLevel): void
    {
        $this->yearLevel = $yearLevel;
    }

    public function createMemento(): StudentProfileMemento
    {
        return new StudentProfileMemento(
            $this->name,
            $this->program,
            $this->yearLevel,
            $this->email
        );
    }

    public function restore(StudentProfileMemento $memento): void
    {
        $this->name = $memento->getName();
        $this->program = $memento->getProgram();
        $this->yearLevel = $memento->getYearLevel();
        $this->email = $memento->getEmail();
    }

    public function displayProfile(): void
    {
        echo 'Name: ' . $this->name . '<br>';
        echo 'Program: ' . $this->program . '<br>';
        echo 'Year: ' . $this->yearLevel . '<br>';
        echo 'Email: ' . $this->email . '<br>';
    }
}

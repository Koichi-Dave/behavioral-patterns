
<?php

class StudentProfileMemento
{
    public function __construct(
        private string $name,
        private string $program,
        private int $yearLevel,
        private string $email
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getProgram(): string
    {
        return $this->program;
    }

    public function getYearLevel(): int
    {
        return $this->yearLevel;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}

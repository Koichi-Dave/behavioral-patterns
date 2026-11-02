
<?php

class StudentContext
{
    public function __construct(
        private string $program,
        private int $year
    ) {}

    public function getProgram(): string
    {
        return $this->program;
    }

    public function getYear(): int
    {
        return $this->year;
    }
}

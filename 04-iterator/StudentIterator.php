
<?php

require_once __DIR__ . '/Student.php';

class StudentIterator implements Iterator
{
    private int $position = 0;

    public function __construct(private array $students) {}

    public function current(): mixed
    {
        return $this->students[$this->position];
    }

    public function key(): int
    {
        return $this->position;
    }

    public function next(): void
    {
        $this->position++;
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function valid(): bool
    {
        return isset($this->students[$this->position]);
    }
}

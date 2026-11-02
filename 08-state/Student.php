
<?php

require_once __DIR__ . '/State.php';

class Student
{
    private State $state;

    public function __construct()
    {
        $this->state = new ApplicantState();
    }

    public function setState(State $state): void
    {
        $this->state = $state;
    }

    public function getState(): State
    {
        return $this->state;
    }

    public function showState(): void
    {
        echo 'Current State: ' . $this->state->getName() . '<br>';
    }

    public function enroll(): void
    {
        $this->state->enroll($this);
    }

    public function drop(): void
    {
        $this->state->drop($this);
    }

    public function graduate(): void
    {
        $this->state->graduate($this);
    }
}

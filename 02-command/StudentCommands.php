
<?php

require_once __DIR__ . '/Command.php';
require_once __DIR__ . '/StudentSystem.php';

class EnrollCommand implements Command
{
    public function __construct(private StudentSystem $system) {}

    public function execute(): void
    {
        echo "Executing: Enroll Student<br>";
        $this->system->enrollStudent();
    }

    public function undo(): void
    {
        $this->system->undoEnrollStudent();
    }
}

class DropSubjectCommand implements Command
{
    public function __construct(private StudentSystem $system) {}

    public function execute(): void
    {
        echo "Executing: Drop Subject<br>";
        $this->system->dropSubject();
    }

    public function undo(): void
    {
        $this->system->undoDropSubject();
    }
}

class PrintRegistrationCommand implements Command
{
    public function __construct(private StudentSystem $system) {}

    public function execute(): void
    {
        echo "Executing: Print Registration<br>";
        $this->system->printRegistration();
    }

    public function undo(): void
    {
        $this->system->undoPrintRegistration();
    }
}

class LogoutCommand implements Command
{
    public function __construct(private StudentSystem $system) {}

    public function execute(): void
    {
        echo "Executing: Logout<br>";
        $this->system->logout();
    }

    public function undo(): void
    {
        $this->system->undoLogout();
    }
}

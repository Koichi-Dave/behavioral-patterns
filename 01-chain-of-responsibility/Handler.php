
<?php

require_once __DIR__ . '/StudentRequest.php';

interface Handler
{
    public function setNext(Handler $handler): Handler;

    public function handle(StudentRequest $request): void;
}

abstract class OfficeHandler implements Handler
{
    private ?Handler $nextHandler = null;

    public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle(StudentRequest $request): void
    {
        if ($this->canHandle($request)) {
            echo $this->getOfficeName()
                . ': Processing '
                . $request->getType()
                . "...<br>";
            return;
        }

        echo $this->getOfficeName()
            . ": Cannot process request.<br>";

        if ($this->nextHandler !== null) {
            $this->nextHandler->handle($request);
        } else {
            echo "No office can process this request.<br>";
        }
    }

    abstract protected function canHandle(
        StudentRequest $request
    ): bool;

    abstract protected function getOfficeName(): string;
}
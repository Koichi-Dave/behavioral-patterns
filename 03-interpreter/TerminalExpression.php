
<?php

require_once __DIR__ . '/Expression.php';
require_once __DIR__ . '/StudentContext.php';

class TerminalExpression implements Expression
{
    public function __construct(
        private string $field,
        private string|int $value
    ) {}

    public function interpret(StudentContext $context): bool
    {
        switch (strtoupper($this->field)) {
            case 'PROGRAM':
                return $context->getProgram() === (string) $this->value;

            case 'YEAR':
                return $context->getYear() === (int) $this->value;

            default:
                return false;
        }
    }
}

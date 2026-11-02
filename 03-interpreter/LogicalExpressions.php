
<?php

require_once __DIR__ . '/Expression.php';
require_once __DIR__ . '/StudentContext.php';

class AndExpression implements Expression
{
    public function __construct(
        private Expression $left,
        private Expression $right
    ) {}

    public function interpret(StudentContext $context): bool
    {
        return $this->left->interpret($context)
            && $this->right->interpret($context);
    }
}

class OrExpression implements Expression
{
    public function __construct(
        private Expression $left,
        private Expression $right
    ) {}

    public function interpret(StudentContext $context): bool
    {
        return $this->left->interpret($context)
            || $this->right->interpret($context);
    }
}

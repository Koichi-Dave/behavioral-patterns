
<?php

require_once 'Element.php';
require_once 'Visitor.php';

class Student implements Element
{
    public function accept(Visitor $visitor): void
    {
        $visitor->visitStudent($this);
    }
}

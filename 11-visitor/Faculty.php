
<?php

require_once 'Element.php';
require_once 'Visitor.php';

class Faculty implements Element
{
    public function accept(Visitor $visitor): void
    {
        $visitor->visitFaculty($this);
    }
}


<?php

require_once 'Element.php';
require_once 'Visitor.php';

class Alumni implements Element
{
    public function accept(Visitor $visitor): void
    {
        $visitor->visitAlumni($this);
    }
}

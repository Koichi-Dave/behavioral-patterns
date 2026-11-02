
<?php

require_once __DIR__ . '/StudentSystem.php';
require_once __DIR__ . '/StudentCommands.php';
require_once __DIR__ . '/StudentInvoker.php';

$system = new StudentSystem();
$invoker = new StudentInvoker();

$invoker->executeCommand(new EnrollCommand($system));
echo "<br>";

$invoker->executeCommand(new DropSubjectCommand($system));
echo "<br>";

$invoker->undo();

?>

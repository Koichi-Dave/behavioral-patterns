
<?php

require_once __DIR__ . '/OfficeHandlers.php';

$studentAffairs = new StudentAffairsHandler();
$registrar = new RegistrarHandler();
$finance = new FinanceHandler();
$ict = new ICTHandler();

// Connect the handlers in the required order.
$studentAffairs
    ->setNext($registrar)
    ->setNext($finance)
    ->setNext($ict);

// Submit the student's request.
$request = new StudentRequest('Transcript of Records');

echo '<h2>Student Request Processing System</h2>';
echo 'Request: ' . $request->getType() . '<br><br>';

$studentAffairs->handle($request);

?>
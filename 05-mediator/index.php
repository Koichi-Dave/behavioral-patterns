
<?php

require_once __DIR__ . '/ChatMediator.php';

$chat = new ChatMediator();

$juan = new Student('Juan', $chat);
$maria = new Student('Maria', $chat);
$pedro = new Student('Pedro', $chat);

$chat->addStudent($juan);
$chat->addStudent($maria);
$chat->addStudent($pedro);

echo '<h3>Student Communication System</h3>';

$juan->send('Hello everyone!');

?>


<?php

require_once __DIR__ . '/GradeSystem.php';
require_once __DIR__ . '/StudentPortal.php';
require_once __DIR__ . '/EmailNotification.php';
require_once __DIR__ . '/ParentNotification.php';
require_once __DIR__ . '/AdditionalObserver.php';

$gradeSystem = new GradeSystem();

$studentPortal = new StudentPortal();
$emailNotification = new EmailNotification();
$parentNotification = new ParentNotification();
$additionalObserver = new AdditionalObserver();

$gradeSystem->attach($studentPortal);
$gradeSystem->attach($emailNotification);
$gradeSystem->attach($parentNotification);

// Challenge: add another observer without modifying GradeSystem.
$gradeSystem->attach($additionalObserver);

$gradeSystem->setGrade(1.75);

?>

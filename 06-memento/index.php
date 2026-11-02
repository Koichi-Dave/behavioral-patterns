
<?php

require_once __DIR__ . '/StudentProfile.php';
require_once __DIR__ . '/ProfileHistory.php';

$profile = new StudentProfile(
    'Juan Dela Cruz',
    'BSIT',
    3,
    'juan@example.com'
);

$history = new ProfileHistory();

// Save the original profile before making changes.
$history->save($profile->createMemento());

// Modify the profile.
$profile->setProgram('BSCS');
$profile->setYearLevel(4);

echo '<h3>Current Profile:</h3>';
echo 'Program: BSCS<br>';
echo 'Year: 4<br><br>';

// Undo the changes.
echo 'Undo...<br><br>';

$memento = $history->undo();

if ($memento !== null) {
    $profile->restore($memento);
}

echo '<h3>Restored Profile:</h3>';
$profile->displayProfile();

?>

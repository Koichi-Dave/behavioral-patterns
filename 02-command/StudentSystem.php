
<?php

class StudentSystem
{
    public function enrollStudent(): void
    {
        echo "Student successfully enrolled.<br>";
    }

    public function dropSubject(): void
    {
        echo "Subject successfully dropped.<br>";
    }

    public function printRegistration(): void
    {
        echo "Registration printed successfully.<br>";
    }

    public function logout(): void
    {
        echo "Student successfully logged out.<br>";
    }

    public function undoEnrollStudent(): void
    {
        echo "Enrollment undone.<br>";
    }

    public function undoDropSubject(): void
    {
        echo "Subject drop undone.<br>";
    }

    public function undoPrintRegistration(): void
    {
        echo "Registration print action undone.<br>";
    }

    public function undoLogout(): void
    {
        echo "Logout action undone.<br>";
    }
}


<?php

require_once __DIR__ . '/Handler.php';

class StudentAffairsHandler extends OfficeHandler
{
    protected function canHandle(StudentRequest $request): bool
    {
        return $request->getType() === 'Good Moral Certificate';
    }

    protected function getOfficeName(): string
    {
        return 'Student Affairs';
    }
}

class RegistrarHandler extends OfficeHandler
{
    protected function canHandle(StudentRequest $request): bool
    {
        return in_array($request->getType(), [
            'Transcript of Records',
            'Certificate of Enrollment'
        ], true);
    }

    protected function getOfficeName(): string
    {
        return 'Registrar';
    }
}

class FinanceHandler extends OfficeHandler
{
    protected function canHandle(StudentRequest $request): bool
    {
        return $request->getType() === 'Payment Concern';
    }

    protected function getOfficeName(): string
    {
        return 'Finance';
    }
}

class ICTHandler extends OfficeHandler
{
    protected function canHandle(StudentRequest $request): bool
    {
        return $request->getType() === 'Student ID Concern';
    }

    protected function getOfficeName(): string
    {
        return 'ICT';
    }
}

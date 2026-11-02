
<?php

abstract class Report
{
    // Template method: defines the report-generation process.
    final public function generateReport(): void
    {
        $this->generateHeader();
        $data = $this->retrieveData();
        $this->formatData($data);
        $this->generateFooter();
    }

    protected function generateHeader(): void
    {
        echo "========================<br>";
        echo strtoupper($this->getReportTitle()) . "<br>";
        echo "========================<br>";
    }

    abstract protected function getReportTitle(): string;

    abstract protected function retrieveData(): array;

    abstract protected function formatData(array $data): void;

    protected function generateFooter(): void
    {
        echo "========================<br>";
        echo "END OF REPORT<br>";
        echo "========================<br>";
    }
}

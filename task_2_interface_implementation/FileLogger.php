<?php


class FileLogger implements Logger
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function log($message)
    {
        $logMessage = "[" . date('Y-m-d H:i:s') . "] " . $message . "\n";
        file_put_contents($this->filename, $logMessage, FILE_APPEND);
    }
}

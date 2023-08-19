<?php 

class DatabaseLogger implements Logger {
    private $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function log($message) {
        $query = "INSERT INTO logs (message, created_at) VALUES (?, ?)";
        $this->connection->prepare($query)->execute([$message, date('Y-m-d H:i:s')]);
    }
}

<?php

class Database
{
    public $connection;

    public function __construct()
    {
        $config = [
            'host' => 'localhost',
            'port' => '3306',
            'dbname' => 'phpbeginner',
            'charset' => 'utf8mb4'
        ];

        // Corrected DSN string
        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";

        // Create the PDO connection
        $this->connection = new PDO($dsn, 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // Enable error reporting
        ]);
    }

    public function query($query)
    {
        // Prepare and execute the SQL query
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}

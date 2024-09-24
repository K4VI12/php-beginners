<?php

class Database
{
    public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=phpbeginner;user=root;charset=utf8mb4";

        $this->connection = new PDO($dsn, password: 1234 );
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}

<?php 
class Database {

    public $connection;
    public function __construct($config) {

        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this -> connection = new PDO($dsn, 'root', '' , [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]); //dsn stands for data source name
    }
    public function query($query, $params = []) {
        

        $statement = $this -> connection -> prepare($query);
        $statement -> execute($params);

        return $statement;
    }
}

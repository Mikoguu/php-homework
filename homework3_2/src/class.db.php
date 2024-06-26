<?php

class Db
{
    private static $instance;
    private $pdo;
    private $log;

    private function __construct()
    {
        
    }

    private function __clone() 
    {

    }

    public static function getInstance(): self
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function getConnection() 
    {
        $host = DB_HOST;
        $dbName = DB_NAME;
        $dbUser = DB_USER;
        $dbPasword = DB_PASSWORD;

        if (!$this->pdo) {
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbName", $dbUser, $dbPasword);
        }

        return $this->pdo;

    }

    public function fetchAll(string $query, $_method, array $params)
    {
        $t = microtime(true);
        $prepared = $this->getConnection()->prepare($query);

        $ret = $prepared->execute($params);

        if (!$ret) {
            $errorInfo = $prepared->errorInfo();
            trigger_error("{$errorInfo}[0]}#{$errorInfo}[1]: " . $errorInfo[2]);
            return [];
        }

        $data = $prepared->fetchAll(PDO::FETCH_ASSOC);
        $affectedRows = $prepared->rowCount();
        
        $this->log[] = [$query, microtime(true) - $t, $_method, $affectedRows];

        return $data;

    }

    public function fetchOne(string $query, $_method, array $params) {
        $t = microtime(true);
        $prepared = $this->getConnection()->prepare($query);

        $ret = $prepared->execute($params);

        if (!$ret) {
            $errorInfo = $prepared->errorInfo();
            trigger_error("{$errorInfo}[0]}#{$errorInfo}[1]: " . $errorInfo[2]);
            return [];
        }

        $data = $prepared->fetchAll(PDO::FETCH_ASSOC);
        $affectedRows = $prepared->rowCount();
        
        $this->log[] = [$query, microtime(true) - $t, $_method, $affectedRows];

        if (!$data) {
            return false;
        }

        return reset($data);

    }

    public function exec(string $query, $_method, array $params)
    {
        $t = microtime(true);
        $pdo = $this->getConnection();
        $prepared = $pdo->prepare($query);

        $ret = $prepared->execute($params);

        if (!$ret) {
            $errorInfo = $prepared->errorInfo();
            trigger_error("{$errorInfo}[0]}#{$errorInfo}[1]: " . $errorInfo[2]);
            return -1;
        }

        $affectedRows = $prepared->rowCount();
        
        $this->log[] = [$query, microtime(true) - $t, $_method, $affectedRows];

        return $affectedRows;
    }

    public function lastInsertId()
    {
        return $this->getConnection()->lastInsertId();
    }

    public function getLogHTML() 
    {
        if (!$this->log) {
            return '';
        }

        $res = '';
        foreach($this->log as $item) {
            $res = $item[1] . ':' . $item[0] . ' (' . $item[2] . ' ) [' . $item[3] . ']' . "\n";
        }

        return '<pre>' . $res . '</pre>';
    }
}

?>
<?php


namespace Core;
use PDO;
class Database{

    public $connection;
    public $statement;
    public function __construct($config, $username='root' , $password=''){


      $dsn='mysql:' . http_build_query($config,'',';'); //contains the information required to connect to the database



//        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}"; //The Data Source Name, or DSN, contains the information required to connect to the database

        $this->connection =  new PDO($dsn,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]); //created an instance of PDO class
    }
    public function query($query,$params=[])
    {


        $this->statement = $this->connection->prepare($query); //prepared our first query
        $this->statement->execute($params); //executed our query
//        return $statement -> fetch(PDO::FETCH_ASSOC); //fetched all the data from the database
        return $this;
    }


    public function get(){
        return $this->statement->fetchAll();
    }
        public function find(){
            return $this->statement->fetch();
        }


        public function findOrFail(){

        $result = $this -> find();

        if(!$result){
            abort();
        }
        else {
            return $result;
        }
    }

}

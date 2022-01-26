<?php


class db{
    public $connection;
    public $sql;
    public function __construct($data)
    {
        $this->connection = mysqli_connect($data[0],$data[1],$data[2],$data[3]);
    }

    public function select($table,$column){
        $this->sql = "SELECT $column FROM `$table`";
        return $this;
    }

    public function where($column,$operator,$value){
        $this->sql .= " WHERE `$column` $operator '$value'";
        return $this;
    }

    public function rows(){
        $query = mysqli_query($this->connection, $this->sql);
        return  mysqli_fetch_all($query,MYSQLI_ASSOC);
    }

    public function first(){
        $query = mysqli_query($this->connection, $this->sql);
        return mysqli_fetch_assoc($query);
    }

    public function delete($table){
       $this->sql = "DELETE FROM `$table` ";
       return $this;
    }
    public function excute(){
        $query = mysqli_query($this->connection, $this->sql);
        return mysqli_affected_rows($this->connection);
    }
}
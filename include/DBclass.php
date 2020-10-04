<?php
  $string = file_get_contents(__DIR__."/config.json");
  $json = json_decode($string);
  class DBclass{

    public $connection;

      function __construct($params){
        session_start();
        // if(!isset($_SESSION['username'])){ header("location:../index.php"); }
      $this->connection = new mysqli(...$params);
      if(!$this->connection){
        die("Connection failed ".$this->connection->connect_error);
      }
      else{
        #return $this->connection;
      }
    }

    #any query
    public function DBquery($sql){
      $result = $this->connection->query($sql);
      if(!$result){
        die("Query Failed ! ".$this->connection->error);
      }
      return $result;
    }

    #query for info
    /* public function DBinfo(){
      $result = $this->connection->query("SELECT * FROM r_info");
      $arr=$result->fetch_assoc();
      if(!$result){
        die("Query Failed ! ".$this->connection->error);
      }
      return $arr;
    } */

    #query for info
    public function DBtview($tname,$con="1"){
      $result = $this->connection->query("SELECT * FROM $tname WHERE $con");
      if($result && $result->num_rows>0){
        return $result;
      }
      else {
        return 0; #no data found
      }
    }

    #query for insert info 
    public function DBtrinsert($tname, $keys, $values){
      $result = $this->connection->query("INSERT INTO $tname ($keys) VALUES ($values)");
      if($result){
        return $result;
      }
      else {
        return 0; #insertion failed
      }
    }

    #query for info
    public function DBtrdelete($tname,$con="0"){
      $result = $this->connection->query("DELETE FROM $tname WHERE sl=$con");
      if(!$result){
        die("Query Failed ! ".$this->connection->error);
      }
    }
    
    #query for info
    public function DBtrupdate($tname,$set="", $con="0"){
      $result = $this->connection->query("UPDATE $tname SET $set WHERE sl=$con");
      if(!$result){
        die("Query Failed ! ".$this->connection->error);
      }

    }
  }


  $db=new DBclass(["localhost", "root", "", "protidin_db"]);

 ?>

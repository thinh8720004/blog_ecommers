<?php
class Database extends PDO
{

  public function __construct()
  {
    $connect = 'mysql:dbname=blog_ecommers; host=localhost';
    $user = 'root';
    $pass = '';
    parent::__construct($connect, $user, $pass);
    $db = new PDO($connect, $user, $pass);
  }

  public function select($sql, $data = array(), $fetchStyle = PDO::FETCH_ASSOC)
  {
    $statement = $this->prepare($sql);
    foreach ($data as $key => $value) {
      $statement->bindParam($key, $value);
    }

    $statement->execute();
    return $statement->fetchAll($fetchStyle);
  }

  public function insert($table, $data)
  {
    $keys = implode(",", array_keys($data));
    $values = ":" . implode(", :", array_keys($data));
    $sql = "INSERT INTO $table($keys)VALUES($values)";
    $statement = $this->prepare($sql);

    foreach ($data as $key => $value) {
      $statement->bindParam(":$key", $value);
    }
    return $statement->execute();
  }

  public function affectedRows($sql, $email, $password){
    $statement = $this->prepare($sql);
    $statement->execute(array($email, $password));
    return $statement->rowCount();
  }

  public function selectAccount($sql, $email, $password){
    $statement = $this->prepare($sql);
    $statement->execute(array($email, $password));
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }
}

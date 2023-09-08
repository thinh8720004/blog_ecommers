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
  public function select($sql,$data = array(), $fetchStyle = PDO::FETCH_ASSOC) {
    $statement = $this->prepare($sql);
    foreach($data as $key => $value){
      $statement->bindParam($key,$value);

    }

    $statement->execute();
    return $statement->fetchAll($fetchStyle);
  }

  public function insert($table,$data){
    $keys = implode(",",array_keys($data));
    $values = ":".implode(", :",array_keys($data));
    $sql = "INSERT INTO $table($keys)VALUES($values)";
    $statement = $this->prepare($sql);

     foreach($data as $key => $value){
        $statement->bindParam(":$key",$value);
  
      }
return $statement->execute();

  }

  public function update($table,$data,$cond){
    $sql = "UPDATE $table SET title_category_product=:title_category_product,dect_category_product=:dect_category_product ";
  }

}
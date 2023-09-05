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

}
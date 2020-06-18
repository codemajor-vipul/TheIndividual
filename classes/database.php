
<?php

class database{

private $local='127.0.0.1';
private $db='test';
private $user='root';
private $password='';
 
 protected function connection() {
     $str = 'mysql:host='.$this->local.';dbname='.$this->db;
    $conn= new PDO($str,$this->user,$this->password);
    $conn-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    return $conn;
 }
}

?>
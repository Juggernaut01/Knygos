<?php


// class DB {
//
//   public static $host="127.0.0.1";
//   public static $dbName="test";
//   public static $userName="root";
//   public static $passWord="";
//
//
//
//   private static function con() {
//
//
//     $pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$dbName.";charset=utf8", self::$userName, self::$passWord);
//     $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     return $pdo;
//   }
//   public static function query($query, $params = array()) {
//     $stmt = self::con()->prepare($query);
//     $stmt->execute($params);
//     $data = $stmt->fetchAll();
//     return $data;
//   }
// }


class DB {
  public static $host = 'localhost';
  public static $dbName = 'test';
  public static $username = 'root';
  public static $password = '';

  private static function connect(){
      $pdo = new PDO('mysql:host='.self::$host.';dbname='.self::$dbName.';charset=utf8', self::$username, self::$password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
  }

  public static function query($query, $params = array()){
      $statement = self::connect()->prepare($query);
      $statement->execute($params);
      if(explode(' ', $query)[0] == 'SELECT'){
          $data = $statement->fetchAll();
          return $data;
      }
  }
}



 ?>

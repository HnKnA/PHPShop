<?php
class DB
{
  private static $instance = NULl;
  public static function getInstance()
  {
    if (!isset(self::$instance)) {
      // Root
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "fashion";

      // MyDB
      // $servername = "localhost";
      // $username = "tuan.nguyen2102";
      // $password = "anhtuan:v";
      // $dbname = "fashion";

      // Docker
      // $servername = "db";
      // $username = "HnKnA";
      // $password = "123123";
      // $dbname = "fashion";


      self::$instance = new mysqli($servername, $username, $password, $dbname);
      if (self::$instance->connect_error) {
        die("Connection failed: " . self::$instance->connect_error);
      }
    }
    return self::$instance;
  }
}
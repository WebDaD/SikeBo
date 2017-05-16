<?php
class Database
{
    private $host;
    private $user;
    private $pwd;
    private $database;
    public function __construct($host, $user, $pwd, $database) {
      $this->host = $host;
      $this->user = $user;
      $this->pwd = $pwd;
      $this->database = $database;
      // TODO: use pconnect
    }
}
?>

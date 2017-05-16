<?php
class Bot
{
    private $database;
    public function __construct($database) {
      $this->database = $database;
    }
    public function answer($query) {
      // TODO: parse, compare with keywords, switch on type, create answer
      return "Answer";
    }
}
?>

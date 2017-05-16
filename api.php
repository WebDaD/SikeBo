<?php
require_once('config.php');
require_once('lib/database.php');
require_once('lib/bot.php');

$database = new Database(DB_HOST, DB_USER, DB_PWD, DB_NAME);
$bot = new Bot($database);

switch($SERVER['REQUEST_METHOD']) {
  case "GET":
    echo $bot->answer($_GET["query"]);
    break;
  default:
    echo "Error: ".$SERVER['REQUEST_METHOD']." is not a valid method.";
    break;
}

?>

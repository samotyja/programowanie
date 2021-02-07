
<?php
require_once("./User.php");

$person1 = new User();
$person1->setData($_GET['name'], $_GET['surname'], $_GET['city'], $_GET['height']);
$person1->getData();
?>
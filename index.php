<?php
require_once 'library/index.class.php';
$moduleA1 = new Module('This is usual Module');
$moduleA2 = new Featured_Module('THIS IS UNUSUAL MODULE!');
$columnA = new Column();
$columnA->append($moduleA1);
$columnA->append($moduleA2);
$columnA->append(new Module('This is a module A3')); //this way its also possible
$columnA->render();
$page = new Page();
$page->append($columnA);
$page->render();
?>
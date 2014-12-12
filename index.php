<?php
require_once 'library/index.class.php';
$moduleA1 = new Module('This is usual Module');
$moduleA2 = new Featured_Module('THIS IS UNUSUAL MODULE!');
$columnA = new Column('This is first column');
$columnB = new Column('This is 2 column');
$page = new Page();
$page->append($columnA);
$page->render();
?>
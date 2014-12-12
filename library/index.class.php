<?php
/*
* PHP 5 FrameWork 
* version 1.01, 12.12.2014 @15.55, Rotterdam
author: Artem Aksenov @ hollandlive@gmail.com
license Free
This framework based on PHP 5 is for rendering a simple web-page
Live Example @ www.dutchnews.ru/hub/php5FrameWork
*/

class Page
{
	private $_columns;
	
	public function __construct() {
		$this->_columns = array();
			}
	public function append($column) {
		$this->columns[] = $column;
	}
	
	public function render() {
		echo '<table border="2" background-color: #00ff00>'.PHP_EOL;
		
		foreach($this->_columns as $column) {
			$column->render();
		}
		echo '</table>'.PHP_EOL;
		}
}

class Column {
	private $_modules;
	
	public function __construct() {
		$this->_modules = array();
	}

public function append($module) {
	$this->_modules[] = $module;
}

public function render() {
	echo '<tr>'.PHP_EOL;
	
	foreach($this->_modules as $module) {
		$module->render();
	}
	
	echo '</tr>'.PHP_EOL;
}
}

class Module {
	protected $_content;
	
	public function __construct($content) {
		$this->_content = $content;
	}
	
	public function render() {
		echo '<td>'.$this->_content.'</td>'.PHP_EOL;
	}
}

class Featured_Module extends Module {
	public function __construct($content) {
		parent::__construct($content);
	}
	
	public function render() {
		echo '<td><del>'.$this->_content.'</del></td>'.PHP_EOL;
	}
}
?>
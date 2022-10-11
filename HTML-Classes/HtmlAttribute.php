<?php
require_once "TextElement.php";
//had to be renamed, since Attribute apparently exists already
class HtmlAttribute extends TextElement{
	private $name;
	private $value;
	public function __construct($name, $value) {
		$this->name = $name;
		$this->value = $value;
	}
	public function render() {
		return $this->name . ' = "' . $this->value . '" ';
	}
}

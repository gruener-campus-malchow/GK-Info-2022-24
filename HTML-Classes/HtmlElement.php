<?php
require_once "TextElement.php";
class HtmlElement extends TextElement {
	protected $tagname;
	public function __construct($name) {
		$this->tagname = $name;
	}
	public function render() {
		return '<' . $this->tagname . '>';
	}
}
?>
<?php
class TextElement {
	private $text;
	public function __construct($text) {
		$this->text = $text;
	}
	public function render() {
		return $this->text;
	}
}

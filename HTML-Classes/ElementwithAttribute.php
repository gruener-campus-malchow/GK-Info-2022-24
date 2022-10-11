<?php
require_once "HtmlElement.php";
require_once "HtmlAttribute.php";
class ElementwithAttribute extends HtmlElement {
	public function __construct($name, $attributes = [ ]) {
		parent::__construct($name);
		$this->attributes = $attributes;
	}
	public function addAttribute($attribute) {
		$this->attributes[] = $attribute;
	}
	public function render() {
		$output = '<' . $this->tagname . ' ';
		foreach ( $this->attributes as $attribute ) {
			$output .= $attribute->render();
		}
		$output .= '>';
		return $output;
	}
}
?>
	
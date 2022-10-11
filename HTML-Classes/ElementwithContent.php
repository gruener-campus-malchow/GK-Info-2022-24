<?php
require_once "ElementwithAttribute.php";
class ElementWithContent extends ElementWithAttribute {
	protected $content = [ ];
	public function addContent($textElement) {
		array_push($this->content, $textElement);
	}
	public function render() {
		$out = parent::render();
		foreach ( $this->content as $element ) {
			$out .= $element->render();
		}
		$out .= '</' . $this->tagname . '>';
		return $out;
	}
}
?>

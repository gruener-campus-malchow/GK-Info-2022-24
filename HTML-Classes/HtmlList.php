<?php
require_once "ElementwithContent.php";
require_once "ElementwithAttribute.php";
class HtmlList extends ElementWithContent {
	protected $content = [ ];
	private $isOrdered;
	public function setOrdered($ordered = true) {
		$this->isOrdered = $ordered;
	}
	public function render() {
		$this->tagname = (($this->isOrdered) ? 'o' : 'u') . 'l';
		$out = ElementwithAttribute::render();
		foreach ( $this->content as $element ) {
			$out .= '<li>';
			$out .= $element->render();
			$out .= '</li>';
		}
		$out .= '</' . $this->tagname . '>';
		return $out;
	}
}
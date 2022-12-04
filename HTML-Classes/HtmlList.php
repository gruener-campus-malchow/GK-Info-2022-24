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
		$this->tagname = $this->isOrdered ? 'ol' : 'ul';
		$out = ElementwithAttribute::render();
		foreach ($this->content as $element) {
			$out .= '<li>';
			$out .= $element->render();
			$out .= '</li>';
		}
		$out .= '</' . $this->tagname . '>';
		return $out;
	}
	
	public function shuffle() {return shuffle($this->contents);}
	public function sortasc() {return sort($this->content);}
	public function sortdesc() {return rsort($this->content);}
	public function rendercsv($seperator) {return implode(',', $this->content);}
}
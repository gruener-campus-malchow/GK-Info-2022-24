<?php
// noch nicht getestet
require_once "ElementwithContent.php";
require_once "HtmlList.php";
$alignment = [ 
		"left",
		"center",
		"right"
];

$htm = new ElementwithContent("body");

// erstellt eine Überschrift
$heading = new ElementwithContent("h1");
$heading->addAttribute(new HtmlAttribute("style", "color: darkgreen; width: 100%; text-align: center;"));
$heading->addContent(new TextElement("TEST"));
$htm->addContent($heading);

// erstellt drei Textabschnitte mit unterschiedlichen Ausrichtungen, getrennt mit hr
for($i = 0; $i < 3; $i ++) {
	$p = new ElementwithContent("p");
	$p->addAttribute(new HtmlAttribute("style", "width: 100%; text-align: $alignment[$i];"));
	$p->addContent(new TextElement("Alignment " . $alignment[$i]));
	$htm->addContent($p);

	$hr = new HtmlElement("hr");
	$htm->addContent($hr);
}

// erstellt ein Bildelement (mit dem Bild von der Wetterstation des GCM)
$img = new ElementwithAttribute("img");
$img->addAttribute(new HtmlAttribute("src", "http://fbi.gruener-campus-malchow.de/cis/wetterstation/wetterstation_banner.jpg"));
$img->addAttribute(new HtmlAttribute("style", "width: 100%"));
$htm->addContent($img);

// erstellt zwei Listen, mit und ohne Nummerierung
$ulist = new HtmlList("ul");
$ulist->setOrdered(false);
$ulist->addContent(new TextElement("list1"));
$ulist->addContent($p);
$htm->addContent($ulist);
$olist = new HtmlList("ol");
$olist->setOrdered();
$olist->addContent(new TextElement("list1"));
$olist->addContent($p);
$olist->addContent($ulist);
$htm->addContent($olist);


// gibt alles aus
echo $htm->render();

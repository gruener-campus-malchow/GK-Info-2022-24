<?php
// noch nicht getestet
require_once "ElementwithContent.php";
$alignment = ["left", "center", "right"];

$htm = new ElementwithContent("body");

// erstellt eine Überschrift
$heading = new ElementwithContent("h1");
$heading->addAttribute(new HtmlAttribute("style", "color: darkgreen; width: 100%; text-align: center;"));
$heading->addContent(new TextElement("TEST"));
$htm->addContent($heading);


// erstellt drei Textabschnitte mit unterschiedlichen Ausrichtungen, getrennt mit hr
for ($i = 0; $i < 3; $i++) {
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

// gibt alles aus
echo $htm->render();

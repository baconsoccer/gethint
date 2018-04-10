<?php
// Array with names
$a[] = "Anna";
$a[] = "Baconsoccer";
$a[] = "Clauriel";
$a[] = "Desire";
$a[] = "Evelynne";
$a[] = "Finn";
$a[] = "Diablo";
$a[] = "Jaina";
$a[] = "Ihewiiroth";
$a[] = "BaconSmasher";
$a[] = "Kitty-Flakes";
$a[] = "Loreen";
$a[] = "Nyaxion";
$a[] = "Orothian";
$a[] = "Pacafixus";
$a[] = "Rosaria";
$a[] = "RedValley";
$a[] = "Elyre";
$a[] = "Wildpeace";
$a[] = "Wangshu";
$a[] = "Darion";
$a[] = "Sylvanas";
$a[] = "Garrosh";
$a[] = "Varian";
$a[] = "Illidan";
$a[] = "Nazeebo";
$a[] = "Nova";
$a[] = "Insane";
$a[] = "Mr.Lazy";
$a[] = "NoWayz15";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Zadanie 1.10</title>
</head>

<body>
    
</body>

</html>
<?php
function isPanagram(string $check_text) {
	
	$String = str_split("abcdefghijklmnopqrstuvwxyz");
    $isPanagram=false;
	$isPanagram = "false";
	
	foreach ($String as $char) {
		if (ctype_alpha($char)) {
            if (ctype_upper($char)) {
                $char = strtolower($char);
            }
            $key = array_search($char, $alphabet);
            if ($key !== false) {
                unset($alphabet[$key]);
            }
	 echo("<br>'$textToCheck' Panagram: is $isPanagram <br>");
}



isPanagram("thequickbrownfoxjumpsoverthelazydog");
isPanagram("The quick brown fox jumps over the lazy dog.");
isPanagram("Ptaki latajo kluczem");
isPanagram("Sphinx of black quartz, judge my vow.");
isPanagram("The five boxing wizards jump quickly.");
isPanagram("BokuNoHeroAcademia PLUS ULTRAAA!");

?>
   
</html>
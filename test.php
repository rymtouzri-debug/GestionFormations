<?php
function message($msg) {
echo " $msg!";
}
message("bonjour ramrouma"); 
echo chr(65) . "<br>"; // renvoie "A"
echo ord("A") . "<br>"; // renvoie 65
echo strlen("Hello world!") . "<br>"; // renvoie 12
echo strpos("Hello world!", "world") . "<br>"; // renvoie 6
// Comparer deux chaines
echo strcmp("Hello", "World") . "<br>"; // renvoie -1
echo substr("Hello world!", 6, 5) . "<br>"; // renvoie "world"
// Remplacer des motifs dans une chaine
echo str_replace("world", "PHP", "Hello world!") . "<br>"; // renvoie "Hello PHP!"
echo strtolower("Hello WORLD!") . "<br>"; // renvoie "hello world!"
echo strtoupper("Hello WORLD!") . "<br>"; // renvoie "HELLO WORLD!"
$chaine = " Hello world! ";
echo trim($chaine); // renvoie "Hello world!"
?>
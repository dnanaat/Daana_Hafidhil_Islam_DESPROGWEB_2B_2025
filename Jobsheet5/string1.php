<?php

$loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Nunc rutrum gravida lacus, ac tristique elit. Ut vestibulum eros sit amet
    bibendum elementum. In nec pharetra sem, et condimentum ligula. 
    Donec diam massa, rhoncus non quam sit amet, hendrerit tristique eros.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter : " . strlen($loremIpsum) . "<br>";
echo "Panjang kata  : " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>
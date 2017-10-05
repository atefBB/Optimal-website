<?php
// Initialize the language code variable
$lc = "";

// Check if the global language server variable is set.
// If it's the case, we cut the first two characters from that string
if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
{
    $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}

// @todo Think about URL-rewrite.

// Now we simply evaluate that variable to detect specific languages
if ($lc == "fr") 
{
    header("location: /fr/index.php");
    exit();
} else if ($lc == "ar") {
    header("location: /ar/index.php");
    exit();
} else { // don't forget the default case if $lc is empty
    header("location: /en/index.php");
    exit();
}
?>

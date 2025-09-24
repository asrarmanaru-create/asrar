<?php
$fornavn = $_POST["fornavn"];
$etternavn = $_POST["etternavn"];

echo "Hei, " . htmlspecialchars($fornavn) . " " . htmlspecialchars($etternavn) . "!";
?>
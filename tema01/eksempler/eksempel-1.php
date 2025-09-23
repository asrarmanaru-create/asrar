<?php    /* Eksempel 1 */
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
/*
/*    Programmet mottar fra et HTML-skjema et fornavn og et etternavn ved POST-metoden
/*    Programmet skriver ut en "god dag"-melding med personens navn 
*/
  $fornavn=$_POST ["fornavn"];
  $etternavn=$_POST ["etternavn"];  
	
  print ("God dag $fornavn $etternavn <br />");  
?>
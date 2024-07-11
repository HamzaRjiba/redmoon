<?php

try
{
$bdd = new PDO ("mysql:host=localhost; dbname=redmoon", "root", "");

 }
  catch (Exception $e)
 {
 die ("Erreur:".$e->getmessage());
 }
 ?>
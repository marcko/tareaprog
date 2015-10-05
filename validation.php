<?php
@session_start(); 
if($_SESSION["auth"] != "sesionuser")
{ 
  header("Location: index.html"); 
  exit(); 
} 

?>
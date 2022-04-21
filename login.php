<?php
$user = $_POST["user"];

$pass = $_POST["pass"];

$usuario = "admin";
$contra = "268413268413";

if ($usuario == $user && $contra == $pass) {
  header ("location:https://proadistribuciones.com.ar/");
} else {
  header ("location:https://www.youtube.com/watch?v=vt1NbmM3feE");
}
 ?>

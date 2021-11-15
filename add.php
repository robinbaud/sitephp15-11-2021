<?php 
require_once('student.php');
$student = new student($_POST['prenom'], $_POST['age']);
echo $student->Prenom, $student->Age;
?>
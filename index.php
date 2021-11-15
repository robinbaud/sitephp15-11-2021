<?php

require_once('student.php');

$student = new student('robin', 18);

$pages = file_get_contents('pages.html');

$pages = str_replace('$moi', $student->Prenom, $pages);
$pages = str_replace('$age', $student->Age, $pages);

echo $pages;


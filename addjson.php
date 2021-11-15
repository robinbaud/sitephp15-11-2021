<?php 
 if(!file_exists("form.json")){
     file_put_contents("form.json", json_encode([]));
 };
 $form = json_decode(file_get_contents('form.json'));
 
 require_once('student.php');
 $student = new student($_POST['prenom'], $_POST['age']);
 var_dump($student).PHP_EOL;
 array_push($form, [
     'Prenom'=> $student->Prenom, 
     'Age'=> $student->Age
    ]);
 
 file_put_contents('form.json', json_encode($form));
<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
require_once 'includes.php';

$manager = new StudentManager();

$students = $manager->getStudents();

//create new student
$student = new Student();
$student->setAge(95);
$student->setNom('Grosse');
$student->setPrenom('Bubulle');

echo "<pre>";
print_r($student);
echo "</pre>";

if($manager->addStudent($student)) {
    echo "L'élève est bien ajouté!" . "<br>";
}

echo "<pre>";
print_r($student);
echo "</pre>";

//delete student
if($manager->deleteStudent($student)) {
    echo "L'élève est supprimé!" ."<br>";
}

// update student
if($manager->updateStudent($student)) {
    echo 'La mise à jour ok !';
};

<?php

class StudentManager {

    private ?PDO $db;

    /** ArticleManager constructor*/
    public function __construct() {
        $this->db = DB::getInstance();
    }

    /**return all Students*/
    public function getStudents(): array {
        $students = [];
        $stmt = $this->db->prepare("SELECT * FROM eleves");
        if ($stmt->execute()) {
            foreach ($stmt->fetchAll() as $item) {
                $students[] = (new Student($item['id']))
                    ->setNom($item['nom'])
                    ->setPrenom($item['prenom'])
                    ->setAge($item['age']);
            }
        }
        return $students;
    }

    /**update an Student
     * @param Student $student
     * @return bool
     */
    public function updateStudent(Student $student): bool {
        if ($student->getId()) {
            $stmt = $this->db->prepare("UPDATE eleves SET nom = :nom, prenom = :prenom, age = :age WHERE id = :id");

            $stmt->bindValue(':nom', $student->getNom());
            $stmt->bindValue(':prenom', $student->getPrenom());
            $stmt->bindValue(':age', $student->getAge());
            $stmt->bindValue(':id', $student->getId());

            return $stmt->execute();
        }
        return false;
    }

    /**Insert Student
     * @param Student $student
     * @return bool
     */
    public function addStudent(Student &$student): bool {
        if (is_null($student->getId())) {
            $stmt = $this->db->prepare("INSERT INTO eleves (nom, prenom, age) VALUES(:nom, :prenom, :age)");

            $stmt->bindValue(':nom', $student->getNom());
            $stmt->bindValue(':prenom', $student->getPrenom());
            $stmt->bindValue(':age', $student->getAge());

            // récupérer l'id.
            $result = $stmt->execute();
            $student->setId($this->db->lastInsertId());
            return $result;
        }
        return false;
    }

    /**Delete an Student
     * @param Student $student
     * @return bool
     */
    public function deleteStudent(Student $student) {
        if ($student ->getId()) {
            $stmt = $this->db->prepare("DELETE FROM classe_test_php.eleves WHERE id = :id");
            $stmt->bindValue(':id', $student->getId());
            return $stmt->execute();
        }
        return false;
    }

}

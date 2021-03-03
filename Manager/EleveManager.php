<?php

class EleveManager {

    private ?PDO $db;

    /** ArticleManager constructor*/
    public function __construct() {
        $this->db = DB::getInstance();
    }

    /**return all Students*/
    public function getEleves(): array {
        $eleves = [];
        $stmt = $this->db->prepare("SELECT * FROM eleves");
        if ($stmt->execute()) {
            foreach ($stmt->fetchAll() as $item) {
                $eleves[] = (new Eleve($item['id']))
                    ->setNom($item['nom'])
                    ->setPrenom($item['prenom'])
                    ->setAge($item['age']);
            }
        }
        return $eleves;
    }

    /**update an Student*/
    public function updateStudent(Eleve $eleves): bool {
        if ($eleves->getId()) {
            $stmt = $this->db->prepare("UPDATE eleves SET nom = :nom, prenom = :prenom, age = :age WHERE id = :id");

            $stmt->bindValue(':nom', $eleves->getNom());
            $stmt->bindValue(':prenom', $eleves->getPrenom());
            $stmt->bindValue(':age', $eleves->getAge());
            $stmt->bindValue(':id', $eleves->getId());

            return $stmt->execute();
        }
        return false;
    }

    /**Insert Student*/
    public function addStudent(Eleve $eleves): bool {
        if (is_null($eleves->getId())) {
            $stmt = $this->db->prepare("INSERT INTO eleves (nom, prenom, age) VALUES(:nom, :prenom, :age)");

            $stmt->bindValue(':nom', $eleves->getNom());
            $stmt->bindValue(':prenom', $eleves->getPrenom());
            $stmt->bindValue(':age', $eleves->getAge());

            return $stmt->execute();
        }
        return false;
    }

    /**Delete an Student*/
    public function deleteStudent(Eleve $eleves) {
        if ($eleves ->getId()) {
            $stmt = $this->db->prepare("DELETE FROM classe_test_php.eleves WHERE id = :id");
            $stmt->bindValue(':id', $eleves->getId());
            return $stmt->execute();
        }
        return false;
    }

}

<?php

class Student {

    private ?int $id;
    private ?string $nom;
    private ?string $prenom;
    private ?int $age;

    /**
     * Eleve construct
     * @param int|null $id
     * @param string|null $nom
     * @param string|null $prenom
     * @param int|null $age
     */
    public function __construct(int $id = null, string $nom =null, string $prenom = null, int $age = null) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    //return id
    public function getId(): ?int {
        return $this->id;
    }
    public function setId(int $id): Student {
        $this->id = $id;
        return $this;
    }
    //@param string $nom
    public function setNom(string $nom): Student {
        $this->nom = $nom;
        return $this;
    }
    public function getNom(): string {
        return $this->nom;
    }

    //@param string $prenom
    public function getPrenom(): ?string {
        return $this->prenom;
    }
    public function setPrenom(string $prenom): Student {
        $this->prenom = $prenom;
        return $this;
    }
    //@param int $age
    public function setAge(?int $age): Student {
        $this->age = $age;
        return $this;
    }
    public function getAge(): ?int {
        return $this->age;
    }

}
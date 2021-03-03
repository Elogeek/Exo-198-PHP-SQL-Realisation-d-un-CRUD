<?php

class Eleve {

    private ?int $id;
    private ?string $nom;
    private ?string $prenom;
    private ?int $age;

    /**
     * Eleve construct
     */
    public function __construct(int $id = null, string $nom =null, string $prenom = null, int $age = null) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    //return id
    public function getId(): int {
        return $this->id;
    }
    public function setId(int $id) : Eleve {
        $this->id = $id;
        return $this;
    }
    //@param string $nom
    public function setNom(string $nom): Eleve{
        $this->nom = $nom;
        return $this;
    }
    public function getNom():string {
        return $this->nom;
    }

    //@param string $prenom
    public function getPrenom(): ?string {
        return $this->prenom;
    }
    public function setPrenom(string $prenom) :Eleve {
        $this->prenom = $prenom;
        return $this;
    }
    //@param int $age
    public function setAge(?int $age): Eleve {
        $this->age = $age;
        return $this;
    }
    public function getAge(): ?int {
        return $this->age;
    }

}
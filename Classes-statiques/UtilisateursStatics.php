<?php
class UtilisateursStatics {

    // DEV green = one connect ;)

    private ?PDO $dblink;

    public function getUtilisateurs() {

        $this->dblink = DB::getInstance();
    }
}
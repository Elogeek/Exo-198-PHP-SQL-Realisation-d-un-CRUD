<?php
class ClientsStatics {

    private ?PDO $dblink;

    public function getClients() {
        $this->dblink = DB::getInstance();
    }

}
<?php
    class Koneksi{
        private $server = "localhost";
        private $username = "id4993070_septian";
        private $password = "septian123";
        private $db = "id4993070_data_mahasiswa";

        function getKoneksi(){
            return new mysqli($this->server, $this->username, $this->password, $this->db);
        }

    }
    
    
?>
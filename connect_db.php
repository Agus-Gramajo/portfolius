<?php

class connect_db
{
    private $servidor = "localhost";
    private $usuario = "root";
    private $db = "projectdb";
    private $password = "";

    public function connect()
    {
        $connect = mysqli_connect(
            $this->servidor,
            $this->usuario,
            $this->password,
            $this->db,
        );

        return $connect;
    }
}

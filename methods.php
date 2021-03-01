<?php
require_once 'upload_project.php';

class methods
{
    public function mostrarDatos($sql)
    {
        $project = new connect_db();
        $connect = $project->connect();

        $result = mysqli_query($connect, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function subirProyecto($datos)
    {
        $project = new connect_db();
        $connect = $project->connect();

        $sql = "INSERT into t_project (name1,submitImg1,html,github,email2,linkedin)
        values('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]')";

        return $result = mysqli_query($connect, $sql);
    }
}

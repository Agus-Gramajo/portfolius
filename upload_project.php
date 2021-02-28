<?php

// $name = $_POST['name1'];
// $description = $_POST['description'];
// $image = $_POST['submitImg1'];
// $tech = $_POST['html'];
// $gitHub = $_POST['github'];
// $mail = $_POST['email2'];
// $linkedin = $_POST['linkedin'];

class methods
{
    public function mostrarDatos($sql)
    {
        $project = new connect_db();
        $connect = $project->connect();

        $result = mysqli_query($connect, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}

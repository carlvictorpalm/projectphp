<?php

class Model
{

    private $db;

    public function __construct(PDO $db)
    {

        $this->db = $db;

    }

    public function getMovie()
    {
        $stm_getMovie = $this->db->prepare('SELECT * FROM `movies`');
        $stm_getMovie->execute();
        $results = $stm_getMovie->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public function deleteMovie($id)
    {
        $stm_deleteMovie = $this->db->prepare('DELETE FROM `movies` WHERE `id` = :id ');
        $stm_deleteMovie->execute([':id' => $id]);
        return $stm_deleteMovie;
    }

    public function createMovie($title, $stars, $director, $year)
    {
        $stm_createMovie = $this->db->prepare('INSERT INTO `movies`( `title`, `stars`, `director`, `year`) VALUES ($title, $stars, $director, $year)');
        $stm_createMovie->execute([':title' => $title, ':stars' => $stars, ':director' => $director, ':year' => $year]);
        return $stm_createMovie;
    }

    public function updateMovie($id, $title, $stars, $director, $year)
    {
        $update_stm = $this->db->prepare("UPDATE 'albums' SET id = :id, title = :title, stars = :stars, year = :year WHERE id = :id");
        $update_stm->execute(['id' => $id, ':title' => $title, ':stars' => $stars, ':director' => $director, ':year' => $year]);
        return $update_stm;
    }

    public function editMovie($id)
    {
        $stm_editMovie = $this->db->prepare('SELECT * FROM `movies` WHERE `id` = :id');
        $stm_editMovie->execute([':id' => $id]);
        $stm_editMovie->setFetchMode(PDO::FETCH_ASSOC);
        return new Movies($stm_editMovie->fetch());

    }
}
